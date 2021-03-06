<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stenberg
 */

get_header();

$background = get_field('projects_background');
$projects_video = get_field('projects_video');
$video_text_before = get_field('projects_video_text_before');
$video_text = get_field('projects_video_text');
$gallery = get_field('projects_gallery');
?>

	<div id="primary" class="content-area">
		<main id="main" class="project">
			<div class="project-content project-background<?php if($projects_video) : echo ' project-background-video'; endif;?>">
				<?php 

					if($background) :
						echo '<img class="project-background__image" src="' . $background['url'] . '" alt="' . get_the_title() . '">';
					endif;
				?>
				<div class="container">
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
						}

						while ( have_posts() ) :
							the_post();
							?>
								<div class="project-content__title"><?php the_title( '<h1>', '</h1>' ); ?></div>
								

								<?php if($projects_video) : ?>
									<div class="project-video">

										<?php if($video_text_before) : ?>
											<div class="project-content__text"><?php echo $video_text_before; ?></div>
										<?php endif;?>
										
										<div class="project-video__player video__player"><?php echo $projects_video; ?></div>

										<?php if($video_text) : ?>
											<div class="project-video__desc"><span><?php echo $video_text; ?></span></div>
										<?php endif;?>

									</div>
								<?php endif; ?>
								
								<?php $the_content = get_the_content();
								if($the_content) : ?>
									<div class="project-content__text"><?php the_content(); ?></div><!-- .project-content__text -->
								<?php endif; ?>
								
								<?php if($gallery) : ?>
									<div class="project-gallery">
										<div class="grid">
											
											<div class="grid-sizer"></div>
											
											<?php

												foreach ($gallery as $item) :
													$imageFull = wp_get_attachment_image_url($item, 'full');
													$imageMin = wp_get_attachment_image_url($item, 'medium_large');
												?>
														<div class="grid-item">
															<?php if ( $item ) : ?>
																<a href="<?=$imageFull?>" data-fancybox="images">
																	<div class="grid-item-thumb">
																		<img src="<?=$imageMin?>" alt="<?php the_title(); ?>"/>
																	</div>
																</a>
															<?php endif; ?>
														</div>
												<?php endforeach;
											?>

											<?php wp_reset_query(); // Remember to reset ?>

										</div>
									</div>
								<?php endif; ?>

							<?php
						endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="project-content background-pixel">
				<div class="container">					

					<div class="project-share">
						<div class="project-share__icon share__icon">
							<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--share"/></svg>
						</div>
						<div class="project-share__box share__box">
							<div class="project-share__close share__close">
							<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--close"/></svg></div>
							<script src="https://yastatic.net/share2/share.js"></script>
							<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp"></div>
						</div>
					</div>

				</div>
			</div>

			<?php
				$args = array(
					'post_type' => 'projects',
					'post_status' => 'publish',
					'posts_per_page' => 5,
					'post__not_in' => array($post->ID),
				);
				$projects_query = new WP_Query( $args );
				// ???????? ??????????, ?????????????????????????????? ?????????? ????????????????, ??????????????
				if( $projects_query->have_posts() ) : ?>

					<div class="section section-projects section-pixel">
						<div class="section__title center">
							<h2>?????????????? ??????????????</h2>
						</div>
						<div class="projects projects__loop">
							<div class="projects__wrap">
								<div class="swiper projectsSwiper dd-slider-nooverflow">
									<div class="swiper-wrapper">

									<?php // ?????????????????? ????????
									while( $projects_query->have_posts() ) : $projects_query->the_post(); ?>
							
										<div class="swiper-slide">
											<a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="projects-card">
												<div class="projects-card__image">
													<?php if ( has_post_thumbnail()) { ?>
														<?php the_post_thumbnail('project'); ?>
													<?php } else { ?>
														<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
													<?php } ?>
												</div>
												<div class="projects-card-desc">
													<div class="projects-card-desc__inner">
														<?php $video = get_field('projects_video');
															if($video) :
														?>
															<div class="projects-card-desc__icon">
																<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--play"/></svg>
															</div>
														<?php endif; ?>
														<div class="projects-card-desc__title"><?php echo get_the_title(); ?></div>
													</div>
													<div class="projects-card-desc__link"><span>??????????????????</span>
														<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
													</div>
												</div>
											</a>
										</div>

									<?php endwhile; ?>

									</div>
									<div class="dd-slider-btn dd-slider-next"></div>
									<div class="dd-slider-btn dd-slider-prev"></div>
								</div>
							</div>
						</div>
						<div class="section-projects__btn">
							<a class="btn btn-border btn-border-large" href="<?php echo site_url( '/projects' ); ?>">???????????????? ??????</a>
						</div>
					</div>

					<?php
				endif;
				// ???? ???????????????? ?????? ?????? ??????????????, ???? ???????????????????? ?????????? ???????????????? ???? ???????????? ?????????? ???? ????????????????
				wp_reset_postdata();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	
	<?php
	/**
	* Functions hooked in to Single Page action
	*
	* @hooked hook_related_post                       - 10
	*/
	do_action( 'hook_single' ); ?>

<?php
get_footer();
