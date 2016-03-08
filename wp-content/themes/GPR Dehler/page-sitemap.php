<?php
/**
 * Template Name: Sitemap Page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>
	<div class="page content sitemap">
		<div class="triCut hidden-xs hidden-sm hidden-md"></div>
		<?php get_template_part( 'includes/headerimagetitle' ); ?>


		<div class="container">
			<div class="thecontent">
				<div class="row">
					<?php echo do_shortcode('[pagelist]') ?>
				</div>
			</div>
		</div>

	</div><!-- .content-area -->







<?php get_footer(); ?>


