<?php
/**
 * Template Name: Homepage
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="introduction container" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="main">

					<?php //get_template_part( 'loop-templates/content', 'page' ); ?>

					<section class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1><?php echo get_field('h1_title'); ?></h1>
						<p><?php echo get_field('intro_copy'); ?></p>
						<a href="<?php the_field('intro_button_link'); ?>" class="cta-button has-arrow"><?php echo get_field('intro_button_text'); ?><i class="fa fas fa-long-arrow-right"></i></a>
					</section>

				</main><!-- #main -->

			</div><!-- .row -->

		</section><!-- Container end -->

		<section class="our-work container-fluid" id="content" tabindex="-1">

			<div class="row">
				<a href="#" class="our-work-single col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:url('<?php echo get_stylesheet_directory_uri();?>/img/stock1.jpeg');background-size:cover;height:250px">
					<div class="our-work-single-about">
						<h3>Project Title</h3>
						<p>More information about project here.</p>
					</div>
				</a>
				<a href="#" class="our-work-single col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:url('<?php echo get_stylesheet_directory_uri();?>/img/stock1.jpeg');background-size:cover;height:250px">
					<div class="our-work-single-about">
						<h3>Project Title</h3>
						<p>More information about project here.</p>
					</div>
				</a>
			</div>
			<div class="row">
				<a href="#" class="our-work-single col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:url('<?php echo get_stylesheet_directory_uri();?>/img/stock1.jpeg');background-size:cover;height:250px">
					<div class="our-work-single-about">
						<h3>Project Title</h3>
						<p>More information about project here.</p>
					</div>
				</a>
				<a href="#" class="our-work-single col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:url('<?php echo get_stylesheet_directory_uri();?>/img/stock1.jpeg');background-size:cover;height:250px">
					<div class="our-work-single-about">
						<h3>Project Title</h3>
						<p>More information about project here.</p>
					</div>
				</a>
			</div>

		</section>

		<section class="our-services container" id="content" tabindex="-1">

			<h2 class="center-text">Our Services</h2>

			<div class="row">

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<h3>Strategy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra.</p>
				</div>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<h3>Creative</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra.</p>
				</div>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<h3>Digital</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra.</p>
				</div>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<h3>Branding</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra.</p>
				</div>

			</div>
			
			<div class="cta-row">
				<a href="#" class="cta-button has-arrow">What We Do<i class="fa fas fa-long-arrow-right"></i></a>
			</div>

		</section>

		<section class="our-clients container-fluid" id="content" tabindex="-1">

			<div class="row">
				<div class="our-clients-text col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<h2>We have worked with some of the most amazing clients in Malaysia and South East Asia.</h2>
				</div>
				<div class="our-clients-logos col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<img class="our-clients-logo" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<img class="our-clients-logo" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<img class="our-clients-logo" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<img class="our-clients-logo" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<img class="our-clients-logo" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
					<img class="our-clients-logo" src="<?php echo get_stylesheet_directory_uri();?>/img/ninja-icon.png" alt="">
				</div>
			</div>

		</section>

	</div>

<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
