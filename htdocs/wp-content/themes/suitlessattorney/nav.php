<?php
/**
 * The template for displaying site navigation
 *
 * @package suitlessattorney
 */
?>
<section id="navigation" class='navbar-fixed-top'>
    <nav class="navbar navbar-default navbar-primary" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">

            <?php
            wp_nav_menu( array(
                'theme_location'  => 'actionnav',
                'menu_id'         => 'action-menu',
                'menu_class'      => 'nav navbar-nav navbar-right',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'sa-navbar-collapse',
            ) );
            ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <nav class="navbar navbar-default navbar-submenu" role="navigation">
      <div class="container">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <?php
              wp_nav_menu( array(
                  'theme_location'  => 'primary',
                  'menu_id'         => 'primary-menu',
                  'menu_class'      => 'nav navbar-nav',
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'sa-navbar-collapse',
              ) );
          ?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<!--
<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sa-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Brand</a>

        </div>
        <div class="collapse navbar-collapse">
            <?php

            ?>
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu_id'         => 'primary-menu',
                'menu_class'      => 'nav navbar-nav',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'sa-navbar-collapse',
            ) );

            ?>


        </div>

    </div>


</nav>

<nav class="navbar navbar-default">

    <div class="container-fluid">
        <div class="collapse navbar-collapse">

        </div>
    </div>

</nav> -->

</section>
