<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package SketchUp
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function sketchup_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sketchup_infinite_scroll_render',
		'footer'    => 'page',
	) );

	/**
	 * Add theme support for Jetpack portfolios
	 */
	add_theme_support( 'jetpack-portfolio' );

} // end function sketchup_jetpack_setup
add_action( 'after_setup_theme', 'sketchup_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function sketchup_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sketchup_infinite_scroll_render
