<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}

add_filter ( 'woocommerce_account_menu_items', 'custom_my_account_links' );
function custom_my_account_links( $menu_links ){
 
	unset( $menu_links['downloads'] ); // Disable Downloads
 
	//unset( $menu_links['dashboard'] ); // Remove Dashboard
	//unset( $menu_links['payment-methods'] ); // Remove Payment Methods
	//unset( $menu_links['orders'] ); // Remove Orders
	//unset( $menu_links['edit-account'] ); // Remove Account details tab
	//unset( $menu_links['customer-logout'] ); // Remove Logout link
 
	return $menu_links;
 
}

add_filter ( 'woocommerce_account_menu_items', 'custom_my_account_rename_links' );
 
function custom_my_account_rename_links( $menu_links ){
 
	// $menu_links['TAB ID HERE'] = 'NEW TAB NAME HERE';
	$menu_links['dashboard'] = 'Мой аккаунт';
	$menu_links['orders'] = 'Недавние заказы';
	$menu_links['edit-account'] = 'Изменить данные';
	$menu_links['edit-address'] = 'Изменить адрес';
 
	return $menu_links;
}