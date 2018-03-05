<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="footer-wrapper" id="wrapper-footer">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					<div class="cta-text">
						<h3>Interested? Get in touch with us <br><a class="white-link" href="mailto:hello@wearenorth.co" target="_blank">hello@wearenorth.co</a></h3>
					</div>

					<div class="site-info">
						<a href="/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-white.png" alt="">
						</a>
						<br>
						<span class="copyright">Copyright <?php echo date("Y"); ?> North </span>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

