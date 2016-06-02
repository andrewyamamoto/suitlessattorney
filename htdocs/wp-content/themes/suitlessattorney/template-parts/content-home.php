<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package suitlessattorney
 */

?>


<section id="intro">

	<article class="">
		<div class="container">
			<div class="row">
				<h1>
					<?php
						if ( get_field('suitlessattorney_intro_title') ) {
							the_field('suitlessattorney_intro_title');
						}
					?>
				</h1>
			</div>
		</div>
	</article>

	<article class="content">
		<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
					<?php
						if ( get_field('suitlessattorney_intro_content') ) {
							the_field('suitlessattorney_intro_content');
						}
					?>
                </div>
            </div>

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

					// loop through the rows of data
					while ( have_rows('suitlessattorney_aside_bullet') ) : the_row();

						$bullet = get_sub_field('bullet_item');
						$bulletImage = get_sub_field('bullet_image');

						// display a sub field value
			?>
						<?php if (!$count): ?>

	                	<div class="col-lg-2 col-lg-offset-1 col-md-4 col-sm-4">

	        			<?php else:?>

						<div class="col-lg-2 col-md-4 col-sm-4">

						<?php endif; ?>

						<?php $count++;?>

						<div class='item-container'>
							<div class='hiw-icon'>
								<span class='number'><?php echo "$count"; ?></span>
								<?php echo "$bulletImage"; ?>

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

<?php
	// if ( get_field('suitlessattorney_intro_content') ) {
	// 	the_field('suitlessattorney_intro_content');
	// }
?>
