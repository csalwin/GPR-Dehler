<?php
/**
 * The template for displaying 404 pages (not found)
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
			<div class="row" style="text-align: center; margin-bottom: 30px">
				<h1 style="color: #300f42;"><span style="font-size: 260px">404</span><br /> Page Not found, Please try again</h1>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
