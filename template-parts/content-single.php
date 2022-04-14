<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eco-Price
 */

$gallery = get_field('article_gallery');
?>

<article id="post-<?php the_ID(); ?>">

	<div class="single-content">
        <div class="single-content__title"><?php the_title( '<h1>', '</h1>' ); ?></div>
        <div class="single-content__text">
            <?php the_content(); ?>
        </div><!-- .single-content__text -->
        
        <?php if($gallery) : ?>

            <div class="single-gallery background-pixel">
                <div class="single-gallery__title">
                    <h2>Фотогалерея</h2>
                </div>
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

        <div class="single-share">
            <div class="single-share__icon share__icon">
                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--share"/></svg>
            </div>
            <div class="single-share__box share__box">
                <div class="single-share__close share__close">
                <svg><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/files/sprite.svg#icon--close"/></svg></div>
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp"></div>
            </div>
        </div>
	</div><!-- .single-content -->

</article><!-- #post-<?php the_ID(); ?> -->