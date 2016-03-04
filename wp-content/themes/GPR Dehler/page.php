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
			if (has_post_thumbnail( $post->ID ) ){ ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->wpID ),'full');?>

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
					<?php
					the_content();
					?>
				</div>
			</div>

		</div>
	</div><!-- .content-area -->
<?php 					endwhile; ?>


<?php get_footer(); ?>


