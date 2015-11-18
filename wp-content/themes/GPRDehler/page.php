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


		<div class="slider">
			<div class=diamonds><span>EXPERIENCE</span></div>

			<?php putRevSlider('home-slider', 'homepage'); ?>


<!--			<img src="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/images/slider/silde-1.jpg"/>-->
		</div>
		<div class="container box">
			<h2>We are an <span>innovative international</span> management consulting company</h2>

			<p> We are passionate about delivering sustainable and measurable client success, and know that to improve the way a business
				works, you need to start with the people behind the processes. We’re experts at thinking in new ways and taking risks.
				This means that when it comes to implementing organisational change, your people will be empowered to innovate
				beyond what other businesses are doing and establish you at the forefront of your industry.</p>

		</div>
		<div class="box whoAreWe">

			<ul>
				<li>Who we are
					<div class="imgWrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img1.png"/>


					</div>
				</li>
				<li>Our approach
					<div class="imgWrap">
						<img style="top: -50px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img2.png"/>


					</div></li>
				<li>Industries
					<div class="imgWrap">
						<img style="top: -85px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img3.png"/>


					</div></li>
				<li>Articles
					<div class="imgWrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img4.png"/>


					</div></li>
			</ul>


		</div>
		<div class="box testimonial">

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor massa ac justo volutpat, sit amet condimentum </p>



		</div>
		<div class="box ourProcess">
			<h2>Interdisciplinary skills</h2>
			<p>At GPR Dehler we pull together experts from different fields to change or organisations </p>
			<ul>
				<li>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/skills1.png"/>
					Cognitive Science
				<p>Lorem ipsum dolor sit consectetur adipiscing
					commodo varius neque</p>
				</li>
				<li>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/skills2.png"/>
					Consulting

					<p>Lorem ipsum dolor sit consectetur adipiscing
						commodo varius neque</p>
				</li>
				<li>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/skills3.png"/>
					Economics

								<p>Lorem ipsum dolor sit consectetur adipiscing
					commodo varius neque</p>
				</li>
				<li>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/skills4.png"/>
					Computer Science

								<p>Lorem ipsum dolor sit consectetur adipiscing
					commodo varius neque</p>
				</li>
				<li>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/skills5.png"/>
					Management Theory

								<p>Lorem ipsum dolor sit consectetur adipiscing
					commodo varius neque</p>
				</li>
				<li>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/skills6.png"/>
					Behavioural Science

								<p>Lorem ipsum dolor sit consectetur adipiscing
					commodo varius neque</p>
				</li>

			</ul>
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
