<?php

require get_template_directory() . '/includes/template-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
//require get_template_directory() . '/includes/helpers.php';
require get_template_directory() . '/includes/enqueue_script_style.php';
require get_template_directory() . '/includes/post-type.php';

/**
 * Implement the add thumbnail Post and Product.
 */
require get_template_directory() . '/includes/thumbnail.php';

/**
 * Подключаем файл с подключением хуков
 */
require get_template_directory() . '/includes/template-hooks.php';

/**
 * Подключаем файл с настройками для блоков
 */
require get_template_directory() . '/includes/template-sections-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Navigations .
 */
require get_template_directory() . '/includes/navigations.php';





/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/includes/woocommerce.php';
    require get_template_directory() . '/includes/woocommerce-fields.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-archive.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-product.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-breadcrumb.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}