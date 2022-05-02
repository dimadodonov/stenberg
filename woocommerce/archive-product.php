<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
?>
	<div class="archive-category category-row background-pixel">
		<div class="container">
			<?php 
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
				}
			?>
			<div class="archive-category__title">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1><?php echo woocommerce_page_title(); ?></h1>			
				<?php endif; ?>
			</div>
			<div class="category-row__wrap">
				<div class="category-row__inner">

                    <?php hook_products_category(); ?>

				</div>
			</div>
		</div>
	</div>
	<div class="catalog background-pixel">
		<div class="container">
			<div class="catalog__wrap">
				<h2>Применение панелей в интерьере</h2>
				<p>Поиск оригинальных решений обеспечивает постоянное расширение предложений на рынке. Тем не менее, уже в силу производства большинство стандартных образцов ограничено в формах и рельефе. Когда дело касается симуляции природного окружения и вовсе предложение становится предельно ограниченным из-за сложности массового изготовления уникальных форм. Положенные в основу нашей продукции технологии и материалы открывают качественно новый уровень отделки. Каталог панелей содержит десятки впечатляющих образцов. Естественные материалы при грамотной обработке обеспечивают создание неповторимых форм. Продуманные производственные схемы позволяют оптимально сочетать естественные материалы и высококачественную устойчивую основу.</p>
				<p>Разумеется, использование таких нерядовых материалов в интерьере требует тщательно продуманного и эргономичного дизайна. При условии соблюдения всех нюансов работы, такая отделка даже при ограниченном использовании способна стать настоящей изюминой любого дома, офиса или рабочего кабинета, а масштабное применение подарит восхитительный интерьер любому заведению. Задумываетесь о создании уникального интерьера с минимальными затратами? Мы готовы предоставить наиболее стильные решения.</p>

				<div class="catalog-gallery">
					<div class="catalog-gallery__item">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-1.jpg" data-fancybox="gallery">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-1.webp" type="image/webp">
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-1.jpg" type="image/jpg">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-1.jpg" alt="<?php echo get_the_title(); ?>">
							</picture>
						</a>
					</div>
					<div class="catalog-gallery__item">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-2.jpg" data-fancybox="gallery">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-2.webp" type="image/webp">
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-2.jpg" type="image/jpg">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-2.jpg" alt="<?php echo get_the_title(); ?>">
							</picture>
						</a>
					</div>
					<div class="catalog-gallery__item">
						<a href="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-3.jpg" data-fancybox="gallery">
							<picture>
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-3.webp" type="image/webp">
								<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-3.jpg" type="image/jpg">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/page/catalog/catalog-3.jpg" alt="<?php echo get_the_title(); ?>">
							</picture>
						</a>
					</div>
				</div>

				<h2>Установка и монтаж панелей Стенберг</h2>
				<p>При том, что поверхность декоративных панелей отличается уникальной формой, текстурой и составом, сама конструкция является стандартной и полностью совместима с традиционными методиками, инструментами и материалами сборки декоративных секций. Использование каркаса или обрешётки позволяет собирать конструкции практически любых форм и конфигураций. Это особенно востребовано для рельефных образцов, которые при необходимости сами могут быть собраны в виде простой плоской или объёмной геометрической конструкции. Наш каталог панелей содержит варианты на любой вкус, при этом каждая модель предельно проста и удобна в монтаже.</p>
				<p>Поддерживается использование любых типов стандартных метизов, кляймеров и крепёжных сегментов. Панели собираются на обрешётке последовательно, взаимно перекрывая крепежи. Учитывая, что работы подразумевают проверенные схемы сборки, а сами сегменты поддерживают резку и обработку, профессионалы способны справиться со сборкой в предельно сжатые сроки, обеспечить качественный внешний вид и надёжность конструкции. Мы предоставляем полную поддержку клиентам на всех этапах сотрудничества, обращайтесь по указанному на сайте номеру прямо сейчас и получите исчерпывающую информацию касательно возможностей и эксплуатационного потенциала продукции.</p>
			</div>
		</div>
	</div>
<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );