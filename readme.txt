=== LogInOut button ===
Contributors: net4me, n4me
Donate link: https://yasobe.ru/na/net4me
Tags: button, login, logout, username, plugin, shortcode, loginout
Requires at least: 3.6
Tested up to: 5.3
Stable tag: 0.305
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Заменяет [LogInOut] в виджете "html" ("Внешний вид"->"Виджеты") на кнопку "Вход редактора/Выйти". Фильтр. Стили не трогал.
Особенность: После клика (входа/выхода) остаёмся на той же страничке, где и были.
т.е. Для всех показывается кнопка "Вход редактора", после входа показывается кнопка "Выйти".

Дополнение:
Во второй части скрипта (смотри исходник плагина) создается div с двумя ссылками. Одна ссылка "Имя пользователя" (при клике - логаут), справа от UserName ссылка в админ-панель.
Дополнение показывается только вошедшим (залогинившимся) пользователям.

И да, это тупо-плагин, без каких либо настроек.
Установка: установил плагин, Активировал, Написал [LogInOut] где-нить под меню - работает.
Нужны красивости - поправил css плагина.
Нужны особенности - полез редактировать сам плагин. Он меньше и проще чем это описание.

= Documentation =

In LogInOut 0.254 version Styles in file loginout.css

= Website =

http://wordpress.org/extend/plugins/loginout/

== Installation ==

1. Upload the LogInOut folder to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add [LogInOut] shortcode in sidebars or footer widgets text" or "html".
4. Add custom CSS to your site for best look.

Russian:
1. Загружаем папку LogInOut в каталог '/wp-content/plugins/'. 
2. Активируем плагин в меню 'Плагины' WordPress.
3. Добавляем шоткод [LogInOut] внутрь виджета "Внешний вид"->"Виджеты"->"HTML-код" или "Текст".
4. Украшаем через CSS как умеем. Если не умеем, копируем пример и добавляем в любой css-файл своего сайта.

== Screenshots ==

01. Not login
02. After login
03. User info after login. Secont part.
04. Add Shortcode [LogInOut] in "html" or "text" widget.

== Upgrade Notice ==

== Changelog ==

= 0.305 =
Tested up to: 5.3

= 0.301 =
Tested up to: 5.0.3
Tested up to: 5.0.2
Tested up to: 5.0.1
Tested up to: 5.0.0
Tested up to: 4.9.9

= 0.263 =
readme correction

= 0.262 =
readme correction

= 0.261 =
Tested up to: 4.9.8
Просили обновить.

= 0.258 =
Tested up to: 4.9.2

= 0.258 =
Tested up to: 4.9.1

= 0.257 =
Tested up to: 4.9
New developer and commiter net4me

= 0.256 =
Tested up to: 4.9

= 0.254 =
1. Change Username link (Logout->Dashboard)
2. Added plugin css file.
3. Tested up to: 4.8.2 

= 0.253 =
formalization

= 0.252 =
1. Change icon style. Поменял иконку в отображении имени юзера
2. Change readme.txt Поправил версии и ошибки в описании.

= 0.250 =
Start



