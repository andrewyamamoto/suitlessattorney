<?php
/**
 * Template Name: Tester
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package suitlessattorney
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
			<div>
				<?php  get_template_part( 'template-parts/content', 'page' ); ?>
			</div>
			<?php endwhile; ?>

		<?php endif; wp_reset_postdata(); ?>
		<?php $mymovies = new WP_Query(array(
			'post_type' => 'my_movies'
		)) ?>
        <div class="container">
			<div class="row">
                <?php while($mymovies->have_posts()) : $mymovies->the_post(); ?>
		<div class="col-lg-4">
		    <div class="well">
                <div class="thumbtitle group">

                    <div class="thumbnail">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
					<h5>
						<?php the_title(); ?>
						<span>
							<?php
								$date = DateTime::createFromFormat('Ymd', get_field('year'));
								echo $date->format('Y');
							?>
						</span>
					</h5>

                </div>

		    </div> <!-- panel -->
		</div> <!-- div -->
        <?php endwhile; ?>
        </div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
