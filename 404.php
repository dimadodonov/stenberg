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
					<h1 class="page-title">Страница не найдена</h1>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
