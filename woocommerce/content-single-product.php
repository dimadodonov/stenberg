<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="container">
		<div class="product__wrap">
			<div class="product__col left">
				<div class="product-gallery">
					<?php 
						$product_image_id = $product->get_image_id();
						$product_gallery_ids = $product->get_gallery_image_ids();
					?>
					<div class="swiper product-slider product-slider-big">
						<div class="swiper-wrapper">
							<div class="swiper-slide">

								<a href="<?php echo wp_get_attachment_image_url( $product_image_id, 'full' ); ?>" data-fancybox="gallery">
									<figure class="product-slider__item">
										<?php
											if ( $product->get_image_id() ) :
												echo wp_get_attachment_image( $product_image_id, 'woocommerce_thumbnail' );
											endif;
										?>
									</figure>
								</a>

							</div>

							<?php
								if( $product_gallery_ids ) :
									foreach( $product_gallery_ids as $product_gallery_id ) : ?>
										<div class="swiper-slide">

											<a href="<?php echo wp_get_attachment_image_url( $product_gallery_id, 'full' ); ?>" data-fancybox="gallery">
												<figure class="product-card-slide">
													<?php
														if ( $product->get_image_id() ) :
															echo wp_get_attachment_image( $product_gallery_id, 'woocommerce_thumbnail' );
														endif;
													?>
												</figure>
											</a>

										</div>
									<?php endforeach;
								endif;
							?>
						</div>
					</div>
					<div class="swiper product-slider-thumbs">
						<div class="swiper-wrapper">
							<div class="swiper-slide">

								<figure class="product-slider-thumbs__item">
									<?php
										if ( $product->get_image_id() ) :
											echo wp_get_attachment_image( $product_image_id, 'thumbnail' );
										endif;
									?>
								</figure>

							</div>

							<?php
								if( $product_gallery_ids ) :
									foreach( $product_gallery_ids as $product_gallery_id ) : ?>
										<div class="swiper-slide">

											<figure class="product-slider-thumbs__item">
												<?php
													if ( $product->get_image_id() ) :
														echo wp_get_attachment_image( $product_gallery_id, 'thumbnail' );
													endif;
												?>
											</figure>

										</div>
									<?php endforeach;
								endif;
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="product__col right">
				<?php
					$product_id = $product->get_id();

					$terms =  get_the_terms( $post->ID, 'product_cat' );
					if ( $terms && ! is_wp_error( $terms ) ) {
						foreach ( $terms as $term ) {
							if($term->parent === 0) {
								echo '<div class="product-cat">'. $term->name .'</div>';
							}
						}
					}
				?>
				<div class="product-title"><h1><?php echo $product->get_title(); ?></h1></div>
				<div class="product-price">
					Цена: <strong>от <?php echo $product->get_price(); ?> руб. за м2</strong>
				</div>
				<div class="product-order">
					<div class="product-order__btn btn btn-accent initpopup" data-popup="productOrder">Оставить заявку</div>
				</div>
				
				<div class="product-attr">
					<h3>Технические характеристики</h3>

					<?php
						$attributes = $product->get_attributes();

						if ( ! $attributes ) {
							return;
						}

						$display_result = '';

						foreach ( $attributes as $attribute ) {
							if ( $attribute->get_variation() ) {
								continue;
							}

							$name = $attribute->get_name();

							if ( $attribute->is_taxonomy() ) {
								$terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
								$cwtax = $terms[0]->taxonomy;
								$cw_object_taxonomy = get_taxonomy($cwtax);

								if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
									$tax_label = $cw_object_taxonomy->labels->singular_name;
								} elseif ( isset( $cw_object_taxonomy->label ) ) {
									$tax_label = $cw_object_taxonomy->label;
									if ( 0 === strpos( $tax_label, 'Product ' ) ) {
										$tax_label = substr( $tax_label, 8 );
									}
								}

								$display_result .= '<div class="product-attr__item"><span>' . $tax_label . ':</span> <strong>';

								$tax_terms = array();

								foreach ( $terms as $term ) {
									$single_term = esc_html( $term->name );
									array_push( $tax_terms, $single_term );
								}

								$display_result .= implode(', ', $tax_terms) .  '</strong></div>';

							} else {
								$display_result .= '<div class="product-attr__item"><span>' . $name . ':</span> <strong>';
								$display_result .= esc_html( implode( ', ', $attribute->get_options() ) ) . '</strong></div>';
							}
						}
					?>

					<div class="product-attr__wrap">
						<?php echo $display_result; ?>
					</div>
				</div>
			</div>
			<div class="product__col left">
				<div class="product-edge">
					<div class="product-edge__item">
						<?php
							echo '<h3>Область применения</h3>';
							echo the_field('product_use');
						?>
					</div>
					<div class="product-edge__item">
						<?php
							echo '<h3>Особенности и преимущества</h3>';
							echo the_field('product_egde');
						?>
					</div>
				</div>
				<div class="product-desc">
					<?php echo the_content(); ?>
				</div>
			</div>
			<div class="product__col right">
				<div class="product-colors">
					<h3>Варианты цветовых решений</h3>
					<div class="product-colors__wrap">
						<?php 
							$product_panel_colors = get_field('product_panel_colors');
							
							if($product_panel_colors) :
								foreach($product_panel_colors as $colors) :
									$attachment_id = get_post_thumbnail_id($colors);
									$attachment = wp_get_attachment_image($attachment_id, 'thumbnail'); 
								?>
								<div class="product-colors__item">
									<?php echo $attachment; ?>
								</div>
								<?php endforeach;
							endif;
						?>
					</div>
					<div class="product-colors__info">
						<small><ins>Внимание!</ins> Цвет на экране Вашего монитора может отличаться от фактического. Поэтому перед заказом рекомендуем посмотреть реальный образец. Для этого позвоните нам, и мы договоримся.</small>
					</div>
				</div>

				<?php
				 $attachment = get_field('attachment');

				 if($attachment) :
				?>
				<div class="product-bracing">
					<a href="#">
						<h3>Система крепления</h3>
						<div class="product-bracing__wrap">
							<div class="product-bracing__img">
								<picture>
									<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/product/product-bracing.webp" type="image/webp">
									<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/product/product-bracing.jpg" type="image/jpg">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/product/product-bracing.jpg" alt="<?php echo get_bloginfo( 'title' ); ?>">
								</picture>
							</div>
							<div class="product-bracing__title">На подготовленный металлокаркас с  использованием декоративных профилей Омега, Пи, L (внутренний), F (внешний)</div>
						</div>
					</a>
				</div>
				<?php endif; ?>
				<?php
					$video_instruction = get_field('video_instruction');
					if( $video_instruction ) :
				?>
				<h3>Технология монтажа гипсокартонных панелей ламинированных пленкой ПВХ</h3>
				<div class="product-video__player video__player">
					<iframe width="1280" height="937" src="https://www.youtube.com/embed/fNsIMqvzWhI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="product-video__info">
					<small>Видео было взято для ознакомления с YouTube канала <ins>Deco Lam</ins></small>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php
	woocommerce_output_related_products();
	hook_section_projects();
	do_action( 'woocommerce_after_single_product' ); ?>
