<?php
/**
 * Template Name: Contact
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="container" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="main">

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				</main><!-- #main -->

			</div><!-- .row -->

		</section><!-- Container end -->

		<section class="contact container-fluid">

			<div class="row">
				
				<div class="contact-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="contact-details">
						<?php echo get_field('contact_details'); ?>
					</div>
				</div>
				<div class="contact-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php echo do_shortcode(get_field('contact_form')); ?>
				</div>

			</div>
			
			<div class="row">

				<div class="contact-map col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php $location = get_field('contact_map'); ?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
				</div>

			</div>

		</section>

	</div>

<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
