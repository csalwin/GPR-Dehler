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
		<div class="triCut hidden-xs hidden-sm hidden-md"></div>
		<?php get_template_part( 'includes/headerimagetitle' ); ?>


		<div class="container">
			<div class="thecontent col-xs-12">
				<div class="row">
					<?php
					the_content();
					?>
				</div>

				<?php if (strtolower(get_the_title()) == "who we are" ){
					?>
					<div class="row">
						<div class="ourApproach">
							<h3>Our Approach:</h3>
							<img class="col-xs-12 col-sm-7 col-md-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/introImg.png">
							<div class="clearfix"></div>
							<a class="button" href="<?php echo get_page_link(10)?>">Our Approach</a>
							<a class="button" href="<?php echo get_page_link(80)?>">Industries</a>
						</div>
					</div>
					<?php
				} else if (strtolower(get_the_title()) == "our approach"){
					?>
					<div class="row">
						<div class="ourApproach">
							<h3>We call this:</h3>
							<img class="col-xs-12 col-sm-7 col-md-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/introImg.png">
							<div class="clearfix"></div>
							<a class="button" href="<?php echo get_page_link(80)?>">Industries</a>
							<a class="button" href="<?php echo get_page_link(14)?>">Case studies</a>
						</div>
					</div>
				<?php }?>
			</div>
		</div>

	</div><!-- .content-area -->


<?php get_footer(); ?>


