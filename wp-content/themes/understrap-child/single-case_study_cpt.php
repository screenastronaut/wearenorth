<?php
/**
 * Template Name: Work - Single
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$image = get_field('cover_image');
$types = get_field('case_study_type');
?>

<div class="wrapper" id="page-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="single-work container-fluid">

			<div class="single-work-cover col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:linear-gradient(rgba(68,68,68,0.5),rgba(68,68,68,0.5)),url('<?php echo $image['url']; ?>');background-size:cover;">

				<div class="single-work-brief container">
					<?php
					foreach($types as $type) :
						echo '<a href="'.$type['value'].'" class="our-work-single-type italic-text">'.$type['label'].'</a>';
					endforeach;
					the_title('<h1>','</h1>'); ?>
					<h4><?php echo get_field('client_name'); ?></h4>
				</div>

			</div>
			
		</section>

		<section class="container" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="main">

					<?php echo get_field('case_study_description'); ?>

				</main>

			</div>

		</section>

	<?php endwhile; // end of the loop. ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
