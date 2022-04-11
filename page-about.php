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
				while ( have_posts() ) :
					the_post();

					?>
						<div class="page page-about about">
							<div class="about__wrap about__background">
								<div class="about__container">
									<?php
										if ( function_exists('yoast_breadcrumb') ) {
											yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
										}
									?>
									<div class="about__title">
										<h1>О компании</h1>
									</div>
									<div class="about__desc">
										<p>Мы организовали компанию в 2011 году. Наша цель – стать лучшей компанией в направлении «стеновые панели». Делай одно дело и делай его на «отлично»! Это возможно только если понимать потребности клиента, работать с командой профессионалов, постоянно развиваться, улучшать бизнес процессы, контролировать качество продукта и быть внимательными к деталям и мелочам.</p>
										<p>Кто мы такие? Сложно ответить на этот вопрос в нескольких предложениях. Иногда мы дизайнеры, иногда инженеры, а иногда строители и проектировщики. Мы те, кого ищут, чтобы воплотить в жизнь, то, что изображено на бумаге или только начинает проявляться в воображении. Одно можем сказать однозначно, мы любим, то, что делаем. У нас нет огромного производства или сложной системы расчетов и оформления, зато мы гордимся человеческим подходом и умением создавать то, что еще никто не делал. В этом наша главная компетенция. Нас не пугают технически сложные решения, мы умеем делать так, чтобы «все держалось», «не горело» и было «желательно подешевле». Проще говоря, мы делаем «как себе».</p>
										

										<div class="about__background--image">
											<picture>
												<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/about/page-about-block.webp" type="image/webp">
												<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/about/page-about-block.jpg" type="image/jpg">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/about/page-about-block.jpg" alt="<?php echo get_bloginfo( 'title' ); ?>">
											</picture>
										</div>
									</div>
								</div>

								<div class="about__background--bg">
									<picture>
										<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/about/page-about-bg.webp" type="image/webp">
										<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/about/page-about-bg.jpg" type="image/jpg">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/about/page-about-bg.jpg" alt="<?php echo get_bloginfo( 'title' ); ?>">
									</picture>
								</div>
							</div>
							
							<div class="about__wrap">
								<div class="about__container">
									<div class="about__desc">
										<p>У нас есть увлечение: мы любим проекты, требующие решения акустических проблем. Изначально основной идеей была работа именно с шумными помещениями, уже в процессе мы поняли, что запросы наших клиентов намного шире и часто эстетическая красота ставится во главу угла.</p>
										<p>Мы открыты для всего нового, поэтому, активно учимся и развиваем новые направления. Наш небольшой коллектив с энтузиазмом включится в решение сложных задач или просто даст вам бесплатную консультацию по любым видам стеновых или акустических покрытий.</p>
										<p>Спасибо, что доверяете нам!</p>
									</div>
								</div>
							</div>
						</div>
					<?php

				endwhile; // End of the loop.

				/**
				* Functions hooked in to About Page action
				*
				* @hooked hook_section_projects                       - 10
				*/

				do_action( 'hook_page_about' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
