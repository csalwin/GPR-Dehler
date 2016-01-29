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
		<div class="headerImg">

			<h2><?php echo get_the_title();?></h2>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/industries/header.png" alt="headerImage">

		</div>


		<div class="container">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( !is_front_page()) :
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endif;

				// End the loop.
			endwhile;
			?>
		</div>
	</div><!-- .content-area -->



<?php get_footer(); ?>


