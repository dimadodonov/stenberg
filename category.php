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
		<main id="main" class="article background-pixel">
            <div class="container">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
                    }
                ?>
                <div class="article__title">
                    <?php the_archive_title('<h1>', '</h1>') ?>
                </div>
                <div class="article__loop">
                    <?php
                        while ( have_posts() ) :
                            the_post();
                        ?>
                        <article class="article-card">
                            <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="">
                                <div class="article-card__date">
                                    <strong><?php echo get_the_date('j'); ?></strong>
                                    <span><?php echo get_the_date('F'); ?></span>
                                </div>
                                <div class="article-card__image">
                                    <?php if ( has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail('article'); ?>
                                    <?php } else { ?>
                                        <picture>
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/no-article.webp" type="image/webp">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/no-article.jpg" type="image/jpg">
                                            <img loading="auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/no-article.jpg" alt="<?php echo get_the_title(); ?>">
                                        </picture>
                                    <?php } ?>
                                </div>
                                <div class="article-card__desc">
                                    <?php 
                                        the_title('<h3>', '</h3>');
                                        $content = get_the_content();
                                        echo '<p>' . wp_trim_words( $content, 22, ' ...' ) . '</p>';
                                    ?>
                                </div>
                            </a>
                        </article>
                        <?php
                        endwhile; // End of the loop.
                    ?>
                </div>
            </div>
            <?php 
                $description = get_the_archive_description();
                if($description) : ?>
                    <section class="section section-seo">
                        <div class="container">
                            <?php the_archive_description(); ?>
                        </div>
                    </section>
                <?php endif;
            ?>
        </main>
    </div>

<?php get_footer();