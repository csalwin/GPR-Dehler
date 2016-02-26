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
					the_content();
					?>
				</div>
			</div>

		</div>
	</div><!-- .content-area -->
<?php 					endwhile; ?>


<?php get_footer(); ?>


