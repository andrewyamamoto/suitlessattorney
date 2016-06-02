<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package suitlessattorney
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function suitlessattorney_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'suitlessattorney_body_classes' );

function suit_feat_img() {

	if ( is_home() && false == is_page( 'contact-us' ) && false == is_tax( 'property-location' ) ) {

		global $post;

		$id = get_post_thumbnail_id( $post->ID );

		$img_url    = wp_get_attachment_url( $id );
		$attr       = sprintf( 'style="background-image: url(%s)"', $img_url );
		$feat_image = empty( $img_url ) ? '' : $attr;

		printf( '<section class="pagebanner" %s></section>', $feat_image );

	}

}
