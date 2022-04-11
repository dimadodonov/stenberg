<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stenberg
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="projects background-pixel">
            <div class="container">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
                    }
                ?>
                <div class="projects__title">
                    <h1>Выполненные проекты</h1>
                </div>
                <div class="projects__row">
                    <?php
                        while ( have_posts() ) :
                            the_post();
                        ?>
                            <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="projects-card projects-card-loop">
                                <div class="projects-card__image">
                                    <?php if ( has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php } else { ?>
                                        <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/section/siteinfo/siteinfo.jpg" alt="">
                                    <?php } ?>
                                </div>
                                <div class="projects-card-desc">
                                    <div class="projects-card-desc__inner">
                                        <div class="projects-card-desc__icon">
                                            <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--play"/></svg>
                                        </div>
                                        <div class="projects-card-desc__title"><?php echo get_the_title(); ?></div>
                                    </div>
                                    <div class="projects-card-desc__link"><span>Подробнее</span>
                                        <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--arrow-next"/></svg>
                                    </div>
                                </div>
                            </a>
                        <?php

                        endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <?php
                hook_section_clients();
                hook_section_edge();
                hook_section_category();
                hook_section_seo();
            ?>
        </main>
    </div>

<?php get_footer();