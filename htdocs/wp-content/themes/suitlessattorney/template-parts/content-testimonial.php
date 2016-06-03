<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package suitlessattorney
 */

?>
<section id="testimonial">

    <div class="container">

        <div class="page-title">
            <h1>
                <?php
                    if ( get_field('testimonial_title') ) {
                        the_field('testimonial_title');
                    }
                ?>
            </h1>

        </div>

        <div class="row">
            <div class="col-lg-12">

                <div id="carousel-testimonial" class="carousel slide" data-ride="carousel" data-interval="true">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">

                    <?php
                        $countInd = 0;

                        if( have_rows('testimonial_section') ):

                            while ( have_rows('testimonial_section') ) : the_row();
                    ?>

                        <?php if($countInd == 0): ?>

                            <li data-target="#carousel-testimonial"  class="active" data-slide-to=<?php echo $countInd;?>></li>
                        <?php else: ?>

                        <li data-target="#carousel-testimonial" data-slide-to=<?php echo $countInd; ?>></li>

                            <?php
                                endif;
                                $countInd++;
                                endwhile;

                            else:

                            endif;
                            ?>
                    </ol>

                    <div class="carousel-inner" role="listbox">

                    <?php
                        if( have_rows('testimonial_section') ):

                            $count = 0;

                            while ( have_rows('testimonial_section') ) : the_row();

                            $testimonialImage = get_sub_field('testimonial_image');
                            $testimonialContent = get_sub_field('testimonial_description');

                            if($count == 0):
                        ?>
                            <div class="item active">
                            <?php
                                else:
                                     ?>
                                     <div class="item">
                                         <?php
                                endif;
                            ?>

                              <img src=<?php echo $testimonialImage ?> alt="">
                              <div class="carousel-caption">
                                  <p>
                                      <?php echo $testimonialContent; ?>
                                  </p>
                              </div>
                            </div>


                                <?php

                                $count++;
                            endwhile;

                        else:

                        endif;
                                ?>
                        </div>

            </div>
        </div>

    </div>

</section>
