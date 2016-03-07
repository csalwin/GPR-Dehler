<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="page insights content">
	<div class="triCut hidden-xs hidden-sm hidden-md"></div>
	<div class="headerImgWrapper">


			<img class="headerImg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/industries/header.png" alt="headerImage">

		<div class="width970"><h1>Search: <?php echo get_search_query(); ?></h1></div>


	</div>


	<div class="container">
		<div class="thecontent">
			<div class="row">

			<?php if (have_posts()){

				if ($post->post_type == "insight") {

					while ( have_posts() ) : the_post();

					$category = get_the_terms($post->ID, 'insight_categories');

//					print_r($category[0]->name);
//					if (get_post($post->id))


					?>

					<h3><?php echo $category[0]->name ?></h3>

					<ul>


						<?php the_title() ?>


					</ul>


					<?php


				endwhile;
				}

				?>
				<ul>
					<?php while ( have_posts() ) : the_post();?>


					<li><a href="<?php echo get_permalink();?>"><?php the_title() ?></a></li>
					<?php endwhile; ?>

				</ul>





				<?php
			}

		// If no content, include the "No posts found" template.
		else {?>
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'twentythirteen' ); ?></p>
			<?php get_search_form(); ?>

			<?php }?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
