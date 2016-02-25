<?php
/**
 * The template for displaying all single posts and attachments
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

	<?php endwhile; ?>

	<?php
	if (get_post_type( get_the_ID() ) == "casestudies" ) {
		?>
			<div class="row">
				<div class="container">
					<h3>Objectives</h3>
					<ul>

						<?php while( have_rows('objectives') ): the_row();

							// vars
							$item = get_sub_field('objective');
							?>

							<li class="col-xs-12 col-md-6">
								<?php echo $item; ?>
							</li>

						<?php endwhile; ?>
					</ul>
				</div>
			</div>

		<div class="row">
			<div class="container">
				<h3>Results</h3>

			</div>
		</div>

		<div class="row related">
			<div class="container">
				<h2>Related</h2>
				<div class="col-xs-12 col-md-6">
					<h4>Case Studies</h4>
					<ul>

					</ul>
				</div>
				<div class="col-xs-12 col-md-6">
					<h4>White Papers</h4>
					<ul>

					</ul>
				</div>
			</div>
		</div>
		<?php
	}

	?>



</div><!-- .content-area -->


<?php get_footer(); ?>