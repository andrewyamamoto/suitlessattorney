<?php
/**
 * The template for displaying site navigation
 *
 * @package suitlessattorney
 */
?>
<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <?php
            wp_nav_menu( array(
    			'theme_location'  => 'primary',
    			'menu_id'         => 'primary-menu',
    			'menu_class'      => 'nav navbar-nav navbar-right',
    			'container'       => 'div',
    			'container_class' => 'collapse navbar-collapse',
    			'container_id'    => 'sa-navbar-collapse',
            ) );
        ?>

    </div>

</nav>
