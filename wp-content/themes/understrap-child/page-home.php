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

					<section class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<h1><?php echo get_field('h1_title'); ?></h1>
						<p><?php echo get_field('intro_copy'); ?></p>
						<a href="<?php the_field('intro_button_link'); ?>" class="cta-button has-arrow"><?php echo get_field('intro_button_text'); ?><i class="fa fas fa-long-arrow-right"></i></a>
					</section>

				</main><!-- #main -->

			</div><!-- .row -->

		</section><!-- Container end -->

		<section class="our-work container-fluid" id="content" tabindex="-1">

			<?php
			$selected_work = get_field('selected_work');

			if($selected_work) :
				$count = 0; 
				foreach ($selected_work as $single) :
					setup_postdata($single);
					$id = $single->ID;
					$image = get_field('cover_image', $id);
					$size = 'full';
					$types = get_field('case_study_type', $id);
					foreach($types as $type) {
						$typeclass .= $type['value'].' ';
					}
					if($count === 0) echo '<div class="row">';

					?>
					<a href="#" class="our-work-single <?=$typeclass?>col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:url('<?php echo $image['url']; ?>');background-size:120%;background-position:center;height:350px">
						<div class="our-work-single-about">
							<h3><?php echo get_the_title($id); ?></h3>
							<p><?php echo get_field('case_study_summary', $id); ?></p>
							<p class="light-text">
								<?php
								foreach($types as $type) :
									echo '<span class="our-work-single-type '.$type['value'].'">'.$type['label'].'</span>';
								endforeach;
								?>
							</p>
						</div>
					</a>
					<?php

					$count++;

					if($count % 2 == 0) { echo '</div>'; $count=0; }
				endforeach;

				wp_reset_postdata();
			endif;
			?>
		</section>

		<section class="our-services container" id="content" tabindex="-1">

			<h2 class="center-text">Our Services</h2>

			<div class="row">
				<?php
				$strategy = get_field('strategy', 54);
				$creative = get_field('creative', 54);
				$branding = get_field('branding', 54);
				$digital = get_field('digital', 54);
				?>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo $strategy['icon']['url']; ?>" alt="">
					<h3>Strategy</h3>
					<p><?php echo $strategy['desc'];?></p>
				</div>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo $creative['icon']['url']; ?>" alt="">
					<h3>Creative</h3>
					<p><?php echo $creative['desc'];?></p>
				</div>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo $branding['icon']['url']; ?>" alt="">
					<h3>Branding</h3>
					<p><?php echo $branding['desc'];?></p>
				</div>

				<div class="our-services-single col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<img class="our-services-icon" src="<?php echo $digital['icon']['url']; ?>" alt="">
					<h3>Digital</h3>
					<p><?php echo $digital['desc'];?></p>
				</div>

			</div>
			
			<div class="cta-row">
				<a href="services" class="cta-button has-arrow">What We Do<i class="fa fas fa-long-arrow-right"></i></a>
			</div>

		</section>

		<section class="our-clients container-fluid" id="content" tabindex="-1">

			<div class="row">
				<div class="our-clients-text col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<h2>We have worked with some of the most amazing clients in Malaysia and South East Asia.</h2>
				</div>
				<div class="our-clients-logos col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<?php
					if(have_rows('client', 49)) :
						while(have_rows('client', 49)) : the_row();
							echo '<img src="'.get_sub_field('client_logo').'" class="our-clients-logo" title="'.get_sub_field('client_name').'" alt="'.get_sub_field('client_name').'">';
						endwhile;
					endif;
					?>
				</div>
			</div>

		</section>

	</div>

<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
