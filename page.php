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

				if(is_page('contacts')) : ?>
					<div class="price">
						<div class="price__wrap">
							<div class="price__item">
								<div class="price__icon"></div>
								<div class="price__title"></div>
							</div>
						</div>
					</div>
				<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
