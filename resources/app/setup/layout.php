<?php
/**
 * @package mimizuku
 * @author inc2734
 * @license GPL-2.0+
 */

add_filter( 'mimizuku_layout', function( $layout ) {
	if ( is_home() || is_archive() || is_search() ) {
		return $layout;
	}

	$_wp_page_template = get_post_meta( get_the_ID(), '_wp_page_template', true );
	if ( $_wp_page_template && 'default' !== $_wp_page_template ) {
		return $layout;
	}

	return get_theme_mod( get_post_type() . '-layout' );
} );
