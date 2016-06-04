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


            <?php if( have_rows('whatwedo_bullets') ): ?>

                <div class='col-lg-4 col-md-6 col-sm-6'>
                    <?php
				    while ( have_rows('whatwedo_bullets') ) : the_row();
                    $col1 = get_sub_field('col1');
			        ?>

                    <?php if($col1 != ''): ?>
                        <div class='whatwedo-item'>

                            <?php
                                echo "$col1";
                            ?>

                        </div>
                    <?php endif; ?>

					<?php endwhile; ?>
                    </div>
                    <?php

			    ?>
                <?php
                    else:
                    endif;
                ?>

                <?php if( have_rows('whatwedo_bullets') ): ?>

                    <div class='col-lg-4 col-md-6 col-sm-6'>
                        <?php
    				    while ( have_rows('whatwedo_bullets') ) : the_row();
                        $col2 = get_sub_field('col2');
    			        ?>
                        <?php if($col2 != ''): ?>
                            <div class='whatwedo-item'>

                                <?php
                                    echo "$col2";
                                ?>

                            </div>
                        <?php endif; ?>

    					<?php endwhile; ?>
                        </div>
                        <?php

    			    ?>
                    <?php
                        else:
                        endif;
                    ?>
                    <?php if( have_rows('whatwedo_bullets') ): ?>

                        <div class='col-lg-4 col-md-6 col-sm-6'>
                            <?php
        				    while ( have_rows('whatwedo_bullets') ) : the_row();
                            $col3 = get_sub_field('col3');
        			        ?>

                            <?php if($col3 != ''): ?>
                                <div class='whatwedo-item'>

                                    <?php
                                        echo "$col3";
                                    ?>

                                </div>
                            <?php endif; ?>

        					<?php endwhile; ?>
                            </div>
                            <?php

        			    ?>
                        <?php
                            else:
                            endif;
                        ?>

        </div>

    </div>

</section>
<section id="schedule">
    <a href="/schedule-consultation/" class='btn btn-warning'>Schedule a free consultation</a>
</section>
