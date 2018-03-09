<?php
/**
 * Template Name: Services
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="our-services container" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="main">

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				</main><!-- #main -->

			</div><!-- .row -->

			<div class="row">

				<?php
				$strategy = get_field('strategy');
				$creative = get_field('creative');
				$branding = get_field('branding');
				$digital = get_field('digital');

				if($strategy) :
					?>					
					<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<img class="our-services-icon" src="<?php echo $strategy['icon']['url']; ?>" alt="">
						<h3>Strategy</h3>
						<p><?php echo $strategy['desc'];?></p>
						<a href="#strategy" class="cta-button has-arrow">Read More<i class="fa fas fa-long-arrow-right"></i></a>
					</div>
					<?php
				endif;
				if($creative) :
					?>					
					<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<img class="our-services-icon" src="<?php echo $creative['icon']['url']; ?>" alt="">
						<h3>Creative</h3>
						<p><?php echo $creative['desc'];?></p>
						<a href="#creative" class="cta-button has-arrow">Read More<i class="fa fas fa-long-arrow-right"></i></a>
					</div>
					<?php
				endif;
				if($branding) :
					?>					
					<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<img class="our-services-icon" src="<?php echo $branding['icon']['url']; ?>" alt="">
						<h3>Branding</h3>
						<p><?php echo $branding['desc'];?></p>
						<a href="#branding" class="cta-button has-arrow">Read More<i class="fa fas fa-long-arrow-right"></i></a>
					</div>
					<?php
				endif;
				if($digital) :
					?>					
					<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
						<img class="our-services-icon" src="<?php echo $digital['icon']['url']; ?>" alt="">
						<h3>Digital</h3>
						<p><?php echo $digital['desc'];?></p>
						<a href="#digital" class="cta-button has-arrow">Read More<i class="fa fas fa-long-arrow-right"></i></a>
					</div>
					<?php
				endif;
				?>
			</div>

			<div class="row our-services-row" id="strategy">
				<div class="single-service-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<img src="<?php echo $strategy['icon']['url']; ?>" alt="">
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<h3>Strategy</h3>
							<p><?php echo $strategy['desc'];?></p>
						</div>
					</div>
					<div class="row">
						<?php echo $strategy['bullet_points']; ?>
					</div>
				</div>
				<div class="single-service-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php echo $strategy['long_desc']; ?>
				</div>
			</div>

			<div class="row our-services-row" id="creative">
				<div class="single-service-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<img src="<?php echo $creative['icon']['url']; ?>" alt="">
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<h3>Creative</h3>
							<p><?php echo $creative['desc'];?></p>
						</div>
					</div>
					<div class="row">
						<?php echo $creative['bullet_points']; ?>
					</div>
				</div>
				<div class="single-service-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php echo $creative['long_desc']; ?>
				</div>
			</div>

			<div class="row our-services-row" id="branding">
				<div class="single-service-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<img src="<?php echo $branding['icon']['url']; ?>" alt="">
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<h3>Branding</h3>
							<p><?php echo $branding['desc'];?></p>
						</div>
					</div>
					<div class="row">
						<?php echo $branding['bullet_points']; ?>
					</div>
				</div>
				<div class="single-service-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php echo $branding['long_desc']; ?>
				</div>
			</div>

			<div class="row our-services-row" id="digital">
				<div class="single-service-left col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
							<img src="<?php echo $digital['icon']['url']; ?>" alt="">
						</div>
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
							<h3>Digital</h3>
							<p><?php echo $digital['desc'];?></p>
						</div>
					</div>
					<div class="row">
						<?php echo $digital['bullet_points']; ?>
					</div>
				</div>
				<div class="single-service-right col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php echo $digital['long_desc']; ?>
				</div>
			</div>

		</section><!-- Container end -->

	</div>

<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
