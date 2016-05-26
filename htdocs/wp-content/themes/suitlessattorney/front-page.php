<?php
/**
 * The front page template file
 *
 * @link https://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package suitlessattorney
 */

get_header(); ?>

<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'home' );
		endwhile;
	endif;

?>
<?php if ( get_field('suitlessattorney_aside') ) {
    the_field('suitlessattorney_aside');
} ?>
<?php

get_footer();
