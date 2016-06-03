<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package suitlessattorney
 */

?>
<section id="whatwedo">

    <div class="container">

        <div class="page-title">
            <h1>
                <?php
                    if ( get_field('whatwedo_title') ) {
                        the_field('whatwedo_title');
                    }
                ?>
            </h1>

        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>
                    <?php
                        if ( get_field('whatwedo_content') ) {
                            the_field('whatwedo_content');
                        }
                    ?>
                </p>
            </div>
        </div>

        <div class="row item-container">
            <?php
				// check if the repeater field has rows of data
				if( have_rows('whatwedo_bullets') ):
					$count = 0;

					// loop through the rows of data
					while ( have_rows('whatwedo_bullets') ) : the_row();
                        $bullet = get_sub_field('item');

			?>

                        <div class='col-lg-4 col-md-6 col-sm-6'>
                            <div class='whatwedo-item'>
							    <?php echo "$bullet"; ?>
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
<section id="schedule">
    <a href="/schedule-consultation/" class='btn btn-warning'>Schedule a free consultation</a>
</section>
