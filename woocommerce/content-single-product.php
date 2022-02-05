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
woocommerce_output_all_notices();

?>

	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

		<div class="container">
			<div class="product-wrap">
				<div class="product-gallery">
					<div class="product-gallery__wrap">


						<div class="product-badge">

							<?php if( $product->is_on_sale() ) : ?>
								<div class="product-badge__item sale">Распродажа</div>
							<?php elseif( $product->is_featured() ) : ?>
								<div class="product-badge__item hit">Хит</div>
							<?php //elseif( $product_published->getTimestamp() < ( time() - 86400 * 5 ) ) : ?>
								<!-- <div class="product-badge__item new">Новинка</div> -->
							<?php endif; ?>
								
						</div>

						<?php 
							$product_image_id = $product->get_image_id();
							$product_gallery_ids = $product->get_gallery_image_ids();
						?>

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

						<div class="swiper product-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide">

									<a href="<?php echo wp_get_attachment_image_url( $product_image_id, 'full' ); ?>" data-fancybox="gallery">
										<figure class="product-slide__item">
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

					</div>
				</div>
				<div class="product-summary">
					
					<div class="product-title"><h1><?php echo $product->get_title(); ?></h1></div>
					<?php 
						$product_id = $product->get_id();;
						$cur_terms = get_the_terms( $product_id, 'product_cat' ); 
						if( is_array( $cur_terms ) ){
							foreach( $cur_terms as $cur_term ){
								echo '<div class="product-cat">'. $cur_term->name .'</div>';
							}
						}
					?>

					<div class="product-attr">
						<?php
							$vysota_vorsa = $product->get_attribute( 'vysota-vorsa' );
							$text_size_field = get_post_meta( $post->ID, '_text_size_field' );

							if(!empty($text_size_field[0])) :
									?>
											<div class="product-attr__item"><span>Размер:</span> <strong><?=$text_size_field[0];?> см</strong></div>
									<?php
							endif;

							if(!empty($vysota_vorsa)) :
									?>
											<div class="product-attr__item"><span>Высота ворса:</span> <strong><?=$vysota_vorsa;?></strong></div>
									<?php
							endif;
						?>
					</div>

					<div class="product__inner j-c a-c">
						<div class="product-price">
							<span><?php echo $product->get_price(); ?> руб<ins>/ 1 шт</ins></span>
							<small>Цена при заказе менее 500 шт</small>
						</div>

						<?php woocommerce_template_single_add_to_cart(); ?>
					</div>

					<div class="product-opt">
						<?php
							$price = $product->get_regular_price();
							$priceOpt = $price - ($price * (15 / 100));
						?>
						<strong><?php echo intval($priceOpt) . ' руб'; ?></strong>
						<span>— Цена при заказе более 10 000 шт</span>
						<ins class="jsPopupInitOpt">?</ins>
					</div>
					
					<div class="product-info">
						<div class="product-sale">
							<small>Скидка от объема заказа:</small>
							<ul>
								<li><span>5% от 500 шт</span></li>
								<li><span>10% от 5 000 шт</span></li>
								<li><span>15% от 10 000 шт</span></li>
							</ul>
						</div>
						<div class="product-minorder">
							<small>Минимальный заказ одной позиции товара:</small>
							<span>от 50 шт</span>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="product-wrap">
			<div class="product-desc">
				<div class="product-desc__wrap">
					<div class="product-desc__title"><h3>Описание товара</h3></div>
					<div class="product-desc__content"><?php echo the_content(); ?></div>
				</div>
			</div>
		</div>

	</div>

	<div class="product-stiky">
		<div class="product-stiky__wrap">
			<div class="product-stiky__image">
				<?php echo $product->get_image('thumbnail'); ?>
			</div>

			<div class="product-stiky__inner">
				<div class="product-stiky__title"><h4><?php echo $product->get_title(); ?></h4></div>
				<?php 
					$product_id = $product->get_id();;
					$cur_terms = get_the_terms( $product_id, 'product_cat' ); 
					if( is_array( $cur_terms ) ){
						foreach( $cur_terms as $cur_term ){
							echo '<div class="product-stiky__cat">'. $cur_term->name .'</div>';
						}
					}
				?>
			</div>
			<div class="product-stiky__price">
				
				<span><?php echo $product->get_price(); ?> руб<ins>/ 1 шт</ins></span>
				<small>Цена при заказе менее 500 шт</small>
			</div>
			<div class="product-stiky__opt">
				<?php
					$price = $product->get_regular_price();
					$priceOpt = $price - ($price * (15 / 100));
				?>
				<strong><?php echo intval($priceOpt) . ' руб'; ?></strong>
				<span>— Цена при заказе более 10 000 шт</span>
				<ins class="jsPopupInitOpt">?</ins>
			</div>
			<div class="product-stiky__order">
				<?php if ( $product->is_in_stock() ) : ?>

					<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

					<form class="cart product-form" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
						<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

						<?php
						
						$id = $product->get_id();
						if( WC()->cart->find_product_in_cart( WC()->cart->generate_cart_id( $id ) ) ) : ?>

							<a 
								href="<?php echo esc_url( wc_get_cart_url() ); ?>" 
								class="btn btn-order-stiky product_type_simple add_to_cart_button"
								data-product_id="<?php echo $product->get_id(); ?>"
								aria-label="Добавить &quot;<?php echo $product->get_name(); ?>&quot; в корзину" rel="nofollow"
								>
								<span class="product-card-btn__text">
									<?php echo $product->add_to_cart_text(); ?>
								</span>
							</a>

						<?php else: ?>

							<a 
								href="<?php echo $product->add_to_cart_url(); ?>" 
								data-quantity="<?php echo isset( $args['quantity'] ) ? $args['quantity'] : 50 ; ?>" 
								class="btn btn-order btn-order-stiky product_type_simple add_to_cart_button ajax_add_to_cart"
								data-product_id="<?php echo $product->get_id(); ?>"
								data-product_sku=""
								aria-label="Добавить &quot;<?php echo $product->get_name(); ?>&quot; в корзину" rel="nofollow"
								>
								<span class="product-card-btn__text">
									<?php echo $product->add_to_cart_text(); ?>
								</span>
							</a>
						
						<?php endif; ?>

						<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
					</form>

					<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="popup popup-opt">
		<div class="popup__wrap">
			<div class="popup-header">
				<button class="popup__close"><svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprites/sprite-mono.svg#icon--close"/></svg></button>
			</div>
			<div id="jsOverlayScrollbars" class="popup-content jsOverlayScrollbars">
				<div class="popup-content__wrap">
					<h2>Для физических лиц</h2>
					<p>Оптовая цена вступает в силу, когда в «Корзине» стоимость товаров превышает 10&nbsp;000 рублей.</p>
					<h2>Для юридических лиц и ИП</h2>
					<p>Те же условия + дополнительная скидка при покупке:</p>
					<table>
						<thead>
							<tr>
								<td>Сумма товаров</td>
								<td>Скидка от оптовой цены</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>От 50 000 ₽ до 150 000  ₽</td>
								<td>до 5 %</td>
							</tr>
							<tr>
								<td>От 150 000 ₽ до 500 000  ₽</td>
								<td>до 10 %</td>
							</tr>
							<tr>
								<td>От 500 000 ₽</td>
								<td>до 15 %</td>
							</tr>
						</tbody>
					</table>
					<p>На часть позиций с пометкой «Крупный опт» дополнительные скидки обговариваются индивидуально.</p>
				</div>
			</div>
			<div class="popup-footer"></div>
		</div>
	</div>

	<?php woocommerce_output_related_products(); ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>