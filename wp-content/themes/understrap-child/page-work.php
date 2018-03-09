<?php
/**
 * Template Name: Work
 *
 * @package understrap
 */

get_header();

$container = get_theme_mod( 'understrap_container_type' );

global $post;
$post_slug=$post->post_name;
$allselect = $strategyselect = $creativeselect = $brandingselect = $digitalselect = '';

switch ($post_slug) {
	case 'work':
	$allselect = 'selected';
	break;
	case 'strategy':
	$strategyselect = 'selected';
	break;
	case 'creative':
	$creativeselect = 'selected';
	break;
	case 'branding':
	$brandingselect = 'selected';
	break;
	case 'digital':
	$digitalselect = 'selected';
	break;
	
	default:
	break;
}

?>

<div class="wrapper" id="page-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="our-work-filter container" id="content" tabindex="-1">

			<div class="row">

				<main class="site-main" id="main">

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<div class="filter">
						<span class="light-text">Filter Work By:</span>
						<a href=".." class="filter-text <?=$allselect?>">All</a>
						<a href="strategy" class="filter-text <?=$strategyselect?>">Strategy</a>
						<a href="creative" class="filter-text <?=$creativeselect?>">Creative</a>
						<a href="branding" class="filter-text <?=$brandingselect?>">Branding</a>
						<a href="digital" class="filter-text <?=$digitalselect?>">Digital</a>
					</div>

				</main><!-- #main -->

			</div><!-- .row -->

		</section><!-- Container end -->

		<section class="our-work our-work-grid container-fluid">
			<?php
			if($post_slug === 'work') {
				$args = array(
					'post_type' => 'case_study_cpt',
					'post_status' => 'publish',
					'posts_per_page' => -1,
				);
			} else {				
				$args = array(
					'post_type' => 'case_study_cpt',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'meta_query' => array (
						array (
							'key' => 'case_study_type',
							'value' => $post_slug,
							'compare' => 'LIKE'
						)
					),
				);
			}
			$the_query = new WP_Query($args);

			if($the_query->have_posts()) :
				$count = 0; 
				while($the_query->have_posts()) : $the_query->the_post(); 
					$image = get_field('cover_image');
					$size = 'full';
					$types = get_field('case_study_type');
					foreach($types as $type) :
						$typeclass .= $type['value'].' ';
					endforeach;

					if($count === 0) echo '<div class="row">';
					?>
					<!-- TODO: add link to case study -->
					<a href="#" class="our-work-single <?=$typeclass?>col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:url('<?php echo $image['url']; ?>');background-size:cover;height:350px">
						<div class="our-work-single-about">
							<h3><?php the_title(); ?></h3>
							<p><?php echo get_field('case_study_summary'); ?></p>
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
				endwhile;
			endif;
			?>
		</section>

		<section class="work-clients container-fluid" id="content" tabindex="-1">

			<div class="row">

				<div class="container">

					<div class="row">

						<h2>Our Clients</h2>

					</div>

					<div class="row work-clients-container">

						<?php
						if(have_rows('client', 49)) :
							while(have_rows('client', 49)) : the_row();
								echo '<img src="'.get_sub_field('client_logo').'" class="work-clients-logo" title="'.get_sub_field('client_name').'" alt="'.get_sub_field('client_name').'">';
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
