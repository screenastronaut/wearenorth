<?php
/**
 * Template Name: About
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="about-agency container" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="main">

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

				</main><!-- #main -->

			</div><!-- .row -->

		</section><!-- Container end -->

		<section class="about-founders container-fluid" id="content" tabindex="-1">

			<div class="row">

				<div class="container">

					<div class="row">

						<h2 class="center-text">Founding Partners</h2>

					</div>

					<div class="row">

						<?php
						if(have_rows('partners')) :
							while(have_rows('partners')) : the_row();
								echo '<div class="about-founders-single col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">';
								echo '<a href="javascript:;"data-src="#hidden-content"  data-fancybox><img class="photo" src="'.get_sub_field('photo').'" alt="">';
								echo '<h3>'.get_sub_field('name').'</h3></a>';
								echo '<p>'.get_sub_field('title').'</p>';
								echo '<a href="'.get_sub_field('linkedin').'" target="_blank"><i class="fa fa-lg fa-linkedin-square"></i></a>';
								echo '<div style="display: none;" id="hidden-content">'.get_sub_field('bio').'</div>';
								echo '</div>';
							endwhile;
						endif;
						?>

					</div>
					
				</div>

			</div>

		</section>

	</div>

<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
