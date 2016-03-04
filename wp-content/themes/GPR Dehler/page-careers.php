<?php
/**
 * Template Name: Careers page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>
	<div class="page careers content">
		<div class="headerImgWrapper">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			if (has_post_thumbnail( $post->ID ) ){ ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full');?>
				<img class="headerImg hidden-xs hidden-sm" src="<?php echo $image[0]?>" data-stellar-ratio="0.8"/>
				<img class="headerImg hidden-md hidden-lg" src="<?php echo $image[0]?>"/>
				<?php
			}else{?>
				<img class="headerImg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/industries/header.png" alt="headerImage" data-stellar-ratio="0.8"/>
			<?php }?>
					<h1><?php echo get_the_title();?></h1>
		</div>



		<div class="container">
			<div class="thecontent">
				<div class="row">


					<h3><?php the_content()?></h3>
				</div>
			</div>
		</div>

				<div class="row">
					<?php
					$type = 'Careers';
					$args=array(
					'post_type' => $type,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'caller_get_posts'=> 1
					);

					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					?>
						<div class="jobs">
							<div class="row jobtitle">
								<div class="col-xs-12">
									<div class="container">
										<h2 class="text-center">Vacant Positions</h2>
									</div>

								</div>
							</div>
							<?php
							while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<div class="jobrow row">
								<div class="container">
									<div class="job">
										<h3><?php the_title(); ?></h3>
										<p><?php the_content()?></p>
										<button class="applyonline">Apply Online</button>

										<?php echo do_shortcode('[contact-form-7 id="185" title="Job Form"]'); ?>

									</div>
								</div>
							</div>


								<?php
							endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>


							<?php
							endwhile;?>




						</div>

				</div>

			</div>


<?php get_footer(); ?>


