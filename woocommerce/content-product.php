<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit();

global $product;
$product_id = $product->get_id();

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
    return;
}

$product_published = $product->get_date_created();
$post_id = get_the_ID();

// $product_published->date
?>

<div <?php wc_product_class('product-card product-card__loop'); ?>>
	<?php if( current_user_can( 'edit_posts' ) ) {
		echo '<a href="' . get_edit_post_link() . '" class="product-card__edit"><span></span></a>';
	}; ?>
    <div class="product-card__wrap">

		<figure class="product-card__thumb">
			<div class="product-card__feature feature">
				<?php
					if( has_term( 'featured', 'product_visibility', $post_id ) ) {
						echo '<div class="feature__item">Хит продаж</div>';
					}
					if( $product->is_on_sale() ) {
						echo '<div class="feature__item sale">Скидка</div>';
					}
				?>
			</div>
			<a href="<?php echo $product->get_permalink(); ?>">
				<?php echo $product->get_image(); ?>
			</a>
		</figure>

		<div class="product-card__name"><a href="<?php echo $product->get_permalink(); ?>" title="<?php echo $product->get_title(); ?>"><?php echo $product->get_title(); ?></a></div>
	</div>
</div>