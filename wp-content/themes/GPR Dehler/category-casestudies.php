<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div class="page content">
		<div class="headerImgWrapper">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}else{?>
				<img class="headerImg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/industries/header.png" alt="headerImage">
			<?php }?>
					<h1><?php echo get_the_title();?></h1>
		</div>


		<div class="container">
			<div class="thecontent">
				<div class="row">
					<?php
					the_post();
					?>
				</div>

				<div class="row">

					<div class="ourApproach">
						<h3>We call this:</h3>
						<img class="col-xs-12 col-sm-7 col-md-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/introImg.png">
						<div class="clearfix"></div>

				<?php if (strtolower(get_the_title()) == "who we are" ){
					?>
					<button class="button" href="#">Our Approach</button>
					<button class="button" href="#">Industries</button>

					<?php
				} else if (strtolower(get_the_title()) == "our approach"){
					 ?>
					<button class="button" href="#">Industries</button>
					<button class="button" href="#">Case studies</button>
					<?php

				}?>



					</div>


				</div>

			</div>

		</div>
	</div><!-- .content-area -->
<?php 					endwhile; ?>


<?php get_footer(); ?>


