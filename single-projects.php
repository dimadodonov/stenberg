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
$video = get_field('projects_video');
$video_text = get_field('projects_video_text');
$gallery = get_field('projects_gallery');
?>

	<div id="primary" class="content-area">
		<main id="main" class="project">
			<div class="project-content project-background<?php if($video) : echo ' project-background-video'; endif;?>">
				<?php 

					if($background) :
						echo '<img src="' . $background[url] . '" alt="' . get_the_title() . '">';
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

								<div class="project-content__text">
									<?php the_content(); ?>
								</div><!-- .project-content__text -->
							<?php

						endwhile; // End of the loop.
					?>
				</div>
			</div>
			<div class="project-content background-pixel<?php if($video) : echo ' project-content-video'; endif;?>">
				<div class="container">

					<?php 
						if($video) : ?>

						<div class="project-video">
							
							<div class="project-video__player">
								<?php echo $video; ?>
							</div>

							<?php 
								if($video_text) : ?>
									 
									<div class="project-video__desc">
										<span><?php echo $video_text; ?></span>
									</div>

								<?php endif;
							?>

						</div>

						<?php endif; 
					?>

					<div class="project-gallery background-pixel">
						<div class="project-gallery__title">
							<h2>Фотогалерея</h2>
						</div>
						<?php
							if($gallery) : ?>
							
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

							<?php endif;
						?>
					</div>

					<div class="project-share background-pixel">
						<div class="project-share__icon">
							<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--share"/></svg>
						</div>
						<div class="project-share__box">
							<div class="project-share__close">
							<svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--close"/></svg></div>
							<script src="https://yastatic.net/share2/share.js"></script>
							<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp"></div>
						</div>
					</div>

				</div>
			</div>

			
        <div class="section section-projects section-pixel">
            <div class="section__title center">
                <h2>Похожие проекты</h2>
            </div>
            <div class="projects projects__loop">
                <div class="projects__wrap">
                    <div class="swiper projectsSwiper dd-slider-nooverflow">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="projects-card__image">
                                        <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                    </div>
                                    <div class="projects-card-desc">
                                        <div class="projects-card-desc__inner">
                                            <div class="projects-card-desc__icon">
                                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--play"/></svg>
                                            </div>
                                            <div class="projects-card-desc__title">Негорючие и огнестойкие панели</div>
                                        </div>
                                        <div class="projects-card-desc__link"><span>Подробнее</span>
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="projects-card__image">
                                        <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                    </div>
                                    <div class="projects-card-desc">
                                        <div class="projects-card-desc__inner">
                                            <div class="projects-card-desc__icon">
                                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--play"/></svg>
                                            </div>
                                            <div class="projects-card-desc__title">Негорючие и огнестойкие панели</div>
                                        </div>
                                        <div class="projects-card-desc__link"><span>Подробнее</span>
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="projects-card">
                                    <div class="projects-card__image">
                                        <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                    </div>
                                    <div class="projects-card-desc">
                                        <div class="projects-card-desc__inner">
                                            <div class="projects-card-desc__icon">
                                                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--play"/></svg>
                                            </div>
                                            <div class="projects-card-desc__title">Негорючие и огнестойкие панели</div>
                                        </div>
                                        <div class="projects-card-desc__link"><span>Подробнее</span>
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="dd-slider-btn dd-slider-next"></div>
                        <div class="dd-slider-btn dd-slider-prev"></div>
                    </div>
                </div>
            </div>
            <div class="section-projects__btn">
                <a class="btn btn-border btn-border-large" href="<?php echo get_site_url('/projects'); ?>">Смотреть все</a>
            </div>
        </div>

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
