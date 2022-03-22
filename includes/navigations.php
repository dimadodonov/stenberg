<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}


register_nav_menus( array(
    'primary' => 'Основное',
    'footer_nav_site' => 'Подвал: Меню сайта',
    'footer_nav_cat' => 'Подвал: Каталог продукции',
    'footer_nav_info' => 'Подвал: Информация'
));


function header_menu_primary() {
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_id' => 'primary_menu',
	    'container'       => 'nav',
        'container_class' => 'nav',
        'container_id'    => '',
        'menu_class'      => 'nav__wrap',
        'menu_id'         => '',
    ));
}

function footer_nav_site() {
    wp_nav_menu( array(
        'theme_location' => 'footer_nav_site',
        'menu_id' => 'footer_nav_site',
	    'container'       => 'nav',
        'container_class' => 'nav-footer',
        'container_id'    => 'footer_nav_site',
        'menu_class'      => 'nav__wrap',
        'menu_id'         => '',
    ));
}

function footer_nav_cat() {
    wp_nav_menu( array(
        'theme_location' => 'footer_nav_cat',
        'menu_id' => 'footer_nav_cat',
	    'container'       => 'nav',
        'container_class' => 'nav-footer',
        'container_id'    => 'footer_nav_cat',
        'menu_class'      => 'nav__wrap',
        'menu_id'         => '',
    ));
}

function footer_nav_info() {
    wp_nav_menu( array(
        'theme_location' => 'footer_nav_info',
        'menu_id' => 'footer_nav_info',
	    'container'       => 'nav',
        'container_class' => 'nav-footer',
        'container_id'    => 'footer_nav_info',
        'menu_class'      => 'nav__wrap',
        'menu_id'         => '',
    ));
}