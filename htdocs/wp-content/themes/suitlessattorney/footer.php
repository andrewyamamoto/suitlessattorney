<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suitlessattorney
 */

?>

	<section id='footer'>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					Suitless Attorney
				</div>
				<div class="col-lg-4">
					<div class="footer-title">
						<span class="title">NAVIGATION</span>
					</div>
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'footer',
						'menu_id'         => 'footer-menu',
						'menu_class'      => 'footer-nav',
						'container'       => 'div',
						'container_class' => 'footer-menu',
					) );

					?>
					<div class="copy">
						Copyright © 2016 Suitless Attorney
					</div>

				</div>


			</div>

		</div>
	</section>

	<?php wp_footer(); ?>
	<script type="text/javascript">
		try{Typekit.load({ async: true });}catch(e){}
	</script>
</body>
</html>
