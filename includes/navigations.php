<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}


register_nav_menus( array(
    'primary' => 'Основное',
    'primary' => 'Основное'
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
register_nav_menus( array(
    'mob' => 'Моб',
    'mob' => 'Моб'
));


function fortkids_header_menu_mob() {
    wp_nav_menu( array(
        'theme_location' => 'mob',
        'menu_id' => 'mob_menu',
    ));
}