<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package suitlessattorney
 */

?>


<section id="intro" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'suitlessattorney' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>
	<article class="content">
		<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                </div>
            </div>
<?php
if ( get_field('suitlessattorney_intro_content') ) {
	the_field('suitlessattorney_intro_content');
}
?>
		</div>
	</article>
</section>
<section id="howitworks">

	<h1>
	<?php
		if ( get_field('suitlessattorney_aside_title') ) {
			the_field('suitlessattorney_aside_title');
		}
	?>
	</h1>
	<div class='container'>

		<div class='row'>
			<?php
				// check if the repeater field has rows of data
				if( have_rows('suitlessattorney_aside_bullet') ):
					$count = 0;
			?>

			<?php
			// loop through the rows of data
					while ( have_rows('suitlessattorney_aside_bullet') ) : the_row();

					$bullet = get_sub_field('bullet_item');
					$bulletImage = get_sub_field('bullet_image');
					// display a sub field value
					if (!$count) {
	                	echo '<div class="col-lg-2 col-lg-offset-1">';
	              	}else{
						echo '<div class="col-lg-2">';
					}
					?>
						<div class='hiw-icon'><span class='number'>$bulletImage</span></div>
						<?php echo "$bullet"; ?>
					echo '</div>';
					$count++;
					endwhile;

					else :

						// no rows found

					endif;

			?>
		</div>
	</div>
</section>

<?php
	if ( get_field('suitlessattorney_intro_content') ) {
		the_field('suitlessattorney_intro_content');
	}
?>
