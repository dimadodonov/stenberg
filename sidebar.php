<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stenberg
 */

if ( ! is_active_sidebar( 'sidebar_filters' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar_filters' ); ?>
</aside><!-- #secondary -->
