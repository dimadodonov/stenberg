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

<div <?php wc_product_class('product-card'); ?>>
	<div class="product-card___wrap">

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

		<?php 
			$cur_terms = get_the_terms( $product_id, 'product_cat' ); 
			if( is_array( $cur_terms ) ){
				foreach( $cur_terms as $cur_term ){
					echo '<div class="product-card__cat">'. $cur_term->name .'</div>';
				}
			}
		?>

		<div class="product-card__name"><a href="<?php echo $product->get_permalink(); ?>" title="<?php echo $product->get_title(); ?>"><?php echo $product->get_title(); ?></a></div>

		<div class="product-card__size">
			Размер: <span>40x11 см</span>
		</div>

		<div class="product-card__prices">
			<div class="product-card__price">
				<strong>Крупный опт:</strong>
				<strong class="price__max">23,80 руб</strong>
			</div>
			<div class="product-card__price price__min">
				<span>Мелкий опт:</span>
				<strong>28 руб</strong>
			</div>
		</div>

		<div class="product-card__detals">			
			<?php woocommerce_template_loop_add_to_cart(); ?>
		</div>
	</div>
</div>
