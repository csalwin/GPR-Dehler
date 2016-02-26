<?php
/**
 * Template Name: Careers page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>
	<div class="page careers content">
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


					<h3><?php the_content()?></h3>
				</div>
			</div>
		</div>

				<div class="row">
					<?php
					$type = 'Careers';
					$args=array(
					'post_type' => $type,
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'caller_get_posts'=> 1
					);

					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					?>
						<div class="jobs">
							<div class="row jobtitle">
								<div class="container">
									<h2>Vacant Positions</h2>
								</div>
							</div>
							<?php
							while ($my_query->have_posts()) : $my_query->the_post(); ?>

							<div class="jobrow row">
								<div class="container">
									<div class="job">
										<h3><?php the_title(); ?></h3>
										<p><?php the_content()?></p>
										<button class="applyonline">Apply Online</button>

										<?php echo do_shortcode('[contact-form-7 id="185" title="Job Form"]'); ?>


<!--										<form class="jobform" method="post">-->
<!--											<input type="hidden" value="--><?php //the_title() ?><!--"/>-->
<!--											<div class="inputwrapper col-xs-12 col-md-4">-->
<!--												<input name="fullname" placeholder="Full Name" type="text" class="col-xs-12"/>-->
<!--											</div>-->
<!--											<div style="padding: 0 5px" class="inputwrapper col-xs-12 col-md-4">-->
<!--												<input  name="phoneNumber" placeholder="Phone Number" type="tel" class="col-xs-12"/>-->
<!--											</div>-->
<!--											<div class="inputwrapper col-xs-12 col-md-4">-->
<!--												<input name="emailAddress" placeholder="Email Address" type="email" class="col-xs-12"/>-->
<!--											</div>-->
<!--											<div class="inputwrapper col-xs-12">-->
<!--												<textarea rows="8" name="comments" placeholder="Comments" class="col-xs-12"></textarea>-->
<!--											</div>-->
<!--											<label for="attachCV" class="attachcvBtn">-->
<!--												<a class="button">Attach CV</a>-->
<!--											</label>-->
<!--											<input type="file" id="attachCV"/>-->
<!---->
<!--											<button type="submit" class="pull-right">Apply now</button>-->
<!--										</form>-->

									</div>
								</div>
							</div>


								<?php
							endwhile;
							}
							wp_reset_query();  // Restore global post data stomped by the_post().
							?>


							<?php
							endwhile;?>




						</div>

				</div>

			</div>


<?php get_footer(); ?>


