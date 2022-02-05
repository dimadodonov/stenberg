<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}

// add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

function change_existing_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'RUB': $currency_symbol = ' руб'; break;
    }
    return $currency_symbol;
}

add_filter( 'formatted_woocommerce_price', 'span_custom_prc', 10, 5 );
function span_custom_prc( $number_format, $price, $decimals, $decimal_separator, $thousand_separator){
    return '<span class="def_price"><ins data-defpr="'.$number_format.'">'.$number_format.'</ins></span>';
}


/**
 * Show cart contents / total Ajax
 */

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment', 10, 1 );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    $cartEmpty = wp_kses_data(WC()->cart->get_cart_contents_count()); ?>
        <div class="cart-qty cart-customlocation<?php if ($cartEmpty > 0) { echo ' active';} ?>"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></div>
    <?php $fragments['.cart-customlocation'] = ob_get_clean();
    return $fragments;
}