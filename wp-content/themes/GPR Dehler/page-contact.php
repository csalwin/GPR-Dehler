<?php
/**
 * Template Name: Contact page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>
	<div class="page contact content">
		<div class="triCut hidden-xs hidden-sm hidden-md"></div>
		<?php get_template_part( 'includes/headerimagetitle' ); ?>


		<div class="container">
			<div class="thecontent width970">
				<div class="row">
					<div class="col-xs-12">
						<?php
						the_content();
						?>

					</div>

				</div>

			</div>

		</div>
	</div><!-- .content-area -->


<?php get_footer(); ?>


