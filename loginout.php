<?php
/**
 * Plugin Name: LogInOut
 Description: Фильтр. Заменяет [LogInOut] в виджете "html" на кнопку войти/выйти. Меняем внешний вид как хотим через CSS. После клика (входа/выхода) остаёмся на той же страничке, где и были.
 Plugin URI: https://wordpress.org/plugins/loginout/
 Version: 0.305
 Author: Dmitry S.&#9874;(Ben-Ja)
 Author URI: http://www.net4me.net
 Donate link: https://yasobe.ru/na/net4me
 Tags: button, login, logout, username, plugin, shortcode, loginout
 License: GPLv2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	Get a copy of the GNU General Public License: http://www.gnu.org/licenses/
*/

// вот так заменяем [LogInOut] в виджете "текст" на кнопку войти/выйти.
function sda_loginout($text) {
	$myfind= array('<a ','Войти');
	$myto= array('<a class="enter" ', 'Вход редактора');
	$search = '[LogInOut]';
        $loginout = wp_loginout( $_SERVER['REQUEST_URI'], false );
        $replace = str_replace( $myfind, $myto, $loginout );
	$text = str_replace($search, $replace, $text);
	return $text;
}
add_filter('widget_text', 'sda_loginout');

// Вторая часть - вывод имени в виде ссылки. Если не нужно - эту часть можно закомментировать или убрать.

function sda_username_show($user_id){
	if ( is_user_logged_in() ){ 
		$user = wp_get_current_user();
		$inouturl = wp_loginout( $_SERVER['REQUEST_URI'], false );
		$outlink = str_replace( 'Выйти', $user->user_login, $inouturl );
?>
<div class="show-user-name">
 <a href="<?php echo admin_url();?>"><?php echo '<i>'.$user->user_login.'</i>'; ?> <i class="fa fa-wrench"></i></a>
</div>
<?php
	}
}
add_action('__after_header', 'sda_username_show');

// css:
wp_register_style ( 'loginout', plugins_url ( 'loginout.css', __FILE__ ) );
wp_enqueue_style('loginout');

//END
?>
