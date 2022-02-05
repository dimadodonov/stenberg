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

	<section class="section section-related related products">
		<div class="container">
			<?php
			$heading = 'Также рекомендуем';
			// $heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

			if ( $heading ) :
				?>
			<div class="section__title">
				<h2><?php echo esc_html( $heading ); ?></h2>
			</div>
			<?php endif; ?>
		
		<?php woocommerce_product_loop_start(); ?>

			<div class="products__loop">

				<div class="swiper swiper-related swiper-products">
				<div class="swiper-wrapper">

				<?php foreach ( $related_products as $related_product ) : ?>

					<?php

					echo '<div class="swiper-slide">';

					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					wc_get_template_part( 'content', 'product' );

					echo '</div>';

					?>

				<?php endforeach; ?>

				</div>

				<div class="swiper-btn-prev"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprites/sprite-mono.svg#icon--arrow-prev"/></svg></div>
				<div class="swiper-btn-next"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprites/sprite-mono.svg#icon--arrow-next"/></svg></div>
				</div>

			</div>

		<?php woocommerce_product_loop_end(); ?>

		</div>
	</section>
	<?php
endif;

wp_reset_postdata();
