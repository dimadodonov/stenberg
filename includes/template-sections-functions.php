<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}

if ( ! function_exists( 'hook_header' ) ) {
    /**
     * Display Hooks Header
     */
    function hook_header() {
        echo '<h1>Hooks for Header</h1>';
    }
}

if ( ! function_exists( 'hook_nav' ) ) {
    /**
     * Display Hooks Nav
     */
    function hook_nav() {
        echo header_menu_primary();
    }
}

if ( ! function_exists( 'hook_footer' ) ) {
    /**
     * Display Hooks Footer
     */
    function hook_footer() {
        echo 'Hooks for footer';
    }
}

if ( ! function_exists( 'hook_page_before' ) ) {
    /**
     * Display Hooks PAge Before
     */
    function hook_page_before() {
        ?>
        <div class="page__wrapper">
          <main class="main">
        <?php
    }
}

if ( ! function_exists( 'hook_page_after' ) ) {
    /**
     * Display Hooks Page after
     */
    function hook_page_after() {
        ?>
          </main>
        </div>
        <?php
    }
}

if ( ! function_exists( 'hook_intro' ) ) {
    /**
     * Display Hooks intro
     */
    function hook_intro() {
        echo 'Hooks for intro page';
    }
}

if ( ! function_exists( 'hook_home_category' ) ) {
    /**
     * Display Hooks Home Category
     */
    function hook_home_category() {
        echo 'Hook for home category';
    }
}

if ( ! function_exists( 'hook_head_code' ) ) {

    add_filter('wp_body_open', 'hook_head_code');
    /**
     * Display Hooks Head Code
     */
    function hook_head_code() {}
}

if ( ! function_exists( 'google_analytics' ) ) {
    add_filter('wp_head', 'google_analytics');
    function google_analytics() {
        // echo get_field( 'google_analytics_solutions', 'option' );
    }
}
if ( ! function_exists( 'yandex_metrika' ) ) {
    add_filter('wp_footer', 'yandex_metrika');
    function yandex_metrika() {
        // echo get_field( 'yandex_metrika', 'option' );
    }
}