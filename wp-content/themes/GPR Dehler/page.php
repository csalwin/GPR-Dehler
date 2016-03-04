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
			<div class="thecontent">
				<div class="row">
					<?php
					the_content();
					?>
				</div>
			</div>

		</div>
	</div><!-- .content-area -->


<?php get_footer(); ?>


