<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package suitlessattorney
 */

?>


<section id="howitworks">

	<div class='container'>
		<div class="page-title">
			<h1>
				<?php
					if ( get_field('howitworks_title') ) {
						the_field('howitworks_title');
					}
				?>
			</h1>

		</div>
		<div class='row'>
			<?php
				// check if the repeater field has rows of data
				if( have_rows('howitworks_bullet') ):
					$count = 0;

					// loop through the rows of data
					while ( have_rows('howitworks_bullet') ) : the_row();

						$bullet = get_sub_field('bullet_item');
						$bulletImage = get_sub_field('bullet_image');

						// display a sub field value
			?>
						<?php if (!$count): ?>

	                	<div class="col-lg-2 col-lg-offset-1 col-md-4 col-sm-4 hiw-icons">

	        			<?php else:?>

						<div class="col-lg-2 col-md-4 col-sm-4 hiw-icons">

						<?php endif; ?>

						<?php $count++;?>

						<div class='item-container'>
							<div class='hiw-icon'>
								<span class='number'><?php echo "$count"; ?></span>
								<img src="<?php echo get_bloginfo('template_directory') . '/img/' . $bulletImage; ?>" alt="How it works icon" height="60px" />
								<span class='lead'></span>
							</div>
							<span class='title'><?php echo "$bullet"; ?></span>
						</div>

					</div>
					<?php
					endwhile;
					else:

						// no rows found

					endif;

			?>
		</div>
	</div>

</section>
