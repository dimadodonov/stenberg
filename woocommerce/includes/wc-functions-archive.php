<?php

if ( ! defined( 'ABSPATH')) {
    exit;
}

if ( ! function_exists( 'ep_start_loop' ) ) {
    /**
     * Product columns wrapper close.
     *
     * @return  void
     */
    function ep_start_loop() {
        ?>
        <div class="products__wrap">
            <aside class="aside products__aside">
                <div class="products-filter">
                    <?php
                        if(!is_shop())  :
                            echo do_shortcode( '[br_filter_single filter_id=116]' ); // Основа панели
                            echo do_shortcode( '[br_filter_single filter_id=117]' ); // Размер, мм
                            echo do_shortcode( '[br_filter_single filter_id=118]' ); // Толщина, мм
                            echo do_shortcode( '[br_filter_single filter_id=114]' ); // Огнестойкость
                            echo do_shortcode( '[br_filter_single filter_id=112]' ); // Применить фильтр
                            echo do_shortcode( '[br_filter_single filter_id=113]' ); // Очистить фильтр
                        endif;
                    ?>
                </div>
            </aside>
            <div class="products__inner">
                <div class="products__loop">
        <?php
    }
}
add_action( 'woocommerce_before_shop_loop', 'ep_start_loop', 35, 2);

if ( ! function_exists( 'ep_end_loop' ) ) {
    /**
     * Product columns wrapper close.
     *
     * @return  void
     */
    function ep_end_loop() {
        ?>
                </div>
            </div>
        </div>
        <?php
    }
}
add_action( 'woocommerce_after_shop_loop', 'ep_end_loop', 40 );