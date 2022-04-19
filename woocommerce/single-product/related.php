<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

<section class="section section-related related section-pixel">
    <div class="container">
		<div class="section__title center">
			<h2>Похожие товары</h2>
		</div>

        <?php woocommerce_product_loop_start(); ?>

        <div class="loop products">
            <div class="loop__wrap loop-slider swiper">
                <div class="swiper-wrapper">

                    <?php foreach ( $related_products as $related_product ) : ?>
                        <?php

                        echo '<div class="swiper-slide">';

                        $post_object = get_post( $related_product->get_id() );

                        setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                        wc_get_template_part( 'content', 'product-slider' );

                        echo '</div>';

                        ?>

                    <?php endforeach; ?>

                </div>
                <!-- <div class="dd-slider-btn dd-slider-next"></div> -->
                <!-- <div class="dd-slider-btn dd-slider-prev"></div> -->
            </div>
        </div>
		<div class="section-projects__btn">
			<a class="btn btn-border btn-border-large" href="<?php echo site_url( '/catalog' ); ?>">Смотреть все</a>
		</div>

        <?php woocommerce_product_loop_end(); ?>

    </div>
</section>

	<?php
endif;

wp_reset_postdata();