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
<?php if ( is_front_page()) :
	?>

	<div class="content">
		<div class=diamonds><span>EXPERIENCE</span></div>

		<div class="slider">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider/silde-1.jpg"/>
		</div>
		<div class="container">

		</div>



	</div>




	<?php

endif;?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
