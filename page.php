<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stenberg
 */

get_header();
$post_id = get_the_ID();
?>

	<div id="primary" class="content-area">
		<main id="main" class="main">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="container"><div class="breadcrumbs">','</div></div>' );
				}
			?>
			<div class="page__wrap">
				<div class="page__content container">
					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

						endwhile; // End of the loop.
					?>
				</div>
			</div>
			
			<?php
				if(is_page('contacts')) : ?>
					<div class="contacts">
						<div class="container">
							<div class="contacts__wrap">
								<div class="contacts__col">
									<div class="contacts__item">
										<div class="contacts__subtitle">
											Адрес
										</div>
										<div class="contacts__block contacts__adress">
											<ins>МОСКВА</ins>
											<span>Электродный проезд, 6с1, 111123</span>
											<a class="contacts__link" href="#section_map">
												<span>посмотреть на карте</span>
												<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
											</a>
										</div>
									</div>
								</div>
								<div class="contacts__col">
									<div class="contacts__item">
										<div class="contacts__subtitle">
											Номер телефона
										</div>
										<div class="contacts__block contacts__phone">
											<div class="contacts__phone--wrap">
												<ins>+7 (910) 486-70-70</ins>
												<div class="contacts__mes messenger">
													<div class="messenger__wrap">
														<a class="messenger__item whatsapp" href="" title="whatsapp">
															<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-whatsapp"/></svg>
														</a>
														<a class="messenger__item viber" href="" title="viber">
															<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--mess-viber"/></svg>
														</a>
													</div>
												</div>
											</div>
											<span>Ответим на вопросы оперативно</span>
										</div>
									</div>
									<div class="contacts__item">
										<div class="contacts__subtitle">
											Глафик работы
										</div>
										<div class="contacts__block contacts__worktime">
											<ins>Пн-Чт 09:00-18:00 - Пт 09:00-17:00</ins>
											<span>Сб-Вс дежурный консультант 11:00-17:00 по телефону </span>
										</div>
									</div>
								</div>
								<div class="contacts__col contacts__email">
									<div class="contacts__item">
										<div class="contacts__subtitle">
											Электронная почта
										</div>
										<div class="contacts__block">
											<a href=""><ins>info@sbpaneli.ru</ins></a>
										</div>
									</div>
									<div class="contacts__item">
										<div class="contacts__subtitle">
											Отдел продаж
										</div>
										<div class="contacts__block">
											<a href=""><ins>zakaz@sbpaneli.ru</ins></a>
										</div>
									</div>
									<div class="contacts__item">
										<div class="contacts__subtitle">
											Отдел бухгалтерии
										</div>
										<div class="contacts__block">
											<a href=""><ins>buh@sbpaneli.ru</ins></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<section id="section_map" class="section section-map">
						<div id="map" class="map"></div>
					</section>
				<?php endif;
				
				if(is_page('faq')) : ?>
					<div class="faq">
						<div class="container">
							<div class="faq__wrap">
								<div class="faq__item faq__question">
									<div class="faq-title">Вопрос:</div>
									<div class="faq-content">А почему я не вижу у вас на сайте прайс-лист?</div>
								</div>
								<div class="faq__item faq__answer">
									<div class="faq-title">Ответ:</div>
									<div class="faq-content">Большинство нашей продукции - проектный материал и стоимость зависит от многих факторов. Если вас интересует конкретный материал или конкретная группа товара - мы без проблем проконсультируем вас по ценам.</div>
								</div>
								<div class="faq__item faq__question">
									<div class="faq-title">Вопрос:</div>
									<div class="faq-content">Подскажите, как монтируются ваши панели?</div>
								</div>
								<div class="faq__item faq__answer">
									<div class="faq-title">Ответ:</div>
									<div class="faq-content">В нашем ассортименте большое количество панелей. По многим  есть инструкции в разделе Информация. Если вы чего то не нашли - обращайтесь к нашим менеджерам.</div>
								</div>
								<div class="faq__item faq__question">
									<div class="faq-title">Вопрос:</div>
									<div class="faq-content">Есть ли у вас сертификаты на продукцию?</div>
								</div>
								<div class="faq__item faq__answer">
									<div class="faq-title">Ответ:</div>
									<div class="faq-content">Вся наша продукция прошла сертификацию в РФ. При отгрузке с комплектом документов мы вам выдаем также и сертификаты пожарной опасности сертификаты гигиены.</div>
								</div>
								<div class="faq__item faq__question">
									<div class="faq-title">Вопрос:</div>
									<div class="faq-content">Добрый день! Нам нужно рассчитать площадь панелей на наш офис . Как это сделать?</div>
								</div>
								<div class="faq__item faq__answer">
									<div class="faq-title">Ответ:</div>
									<div class="faq-content">Вы можете отправить на нашу почту развертки по стенам, визуализации и чертежи. Наш специалист при получении рассмотрит эти материалы, сделает примерный расчет и свяжется с вами.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="ask">
						<div class="container">
							<div class="ask__title">
								<h2>Задайте вопрос</h2>
							</div>
							<div class="ask__wrap">
								<div class="ask__form">
									<?php echo do_shortcode( '[contact-form-7 id="109" title="Задайте вопрос"]' ); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif;

				if(is_page('price')) : ?>
					<div class="price">
						<div class="container">

							<div class="price__wrap">
								<?php
									$prices = get_field('price', $post_id);

									if( $prices ) : 
										foreach( $prices as $price ) :
											$filetype = $price['price_file']['subtype'];
											$filetitle = $price['price_title'];
											$fileurl = $price['price_file']['url'];
											?>
												<div class="price__item">
													<a href="<?php echo $fileurl;?>" download="<?php echo $filetitle; ?>">
														<div class="price__icon">
														<?php
															if( 'vnd.openxmlformats-officedocument.wordprocessingml.document' === $filetype ) :
																?>
																<picture>
																	<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.webp" type="image/webp">
																	<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.png" type="image/png">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.png" alt="<?php echo get_bloginfo( 'title' ); ?>">
																</picture>
																<div class="price__icon--type">.docx</div>
																<?php

															endif;

															if( 'vnd.openxmlformats-officedocument.spreadsheetml.sheet' === $filetype ) :
																?>
																<picture>
																	<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.webp" type="image/webp">
																	<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.png" type="image/png">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.png" alt="<?php echo get_bloginfo( 'title' ); ?>">
																</picture>
																<div class="price__icon--type">.xlsx</div>
																<?php
															endif;

															if( 'pdf' === $filetype ) :
																?>
																<picture>
																	<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.webp" type="image/webp">
																	<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.png" type="image/png">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/price/icon-file.png" alt="<?php echo get_bloginfo( 'title' ); ?>">
																</picture>
																<div class="price__icon--type">.pdf</div>
																<?php
															endif;
														?>
														</div>
														<?php 
															if($filetitle) : 
																echo '<div class="price__title">' . $filetitle . '</div>';
															endif;
														?>
													</a>
												</div>
											<?php
										endforeach;
									endif;
								?>
							</div>
							
						</div>
					</div>
					
				<?php hook_section_category(); ?>
				<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
