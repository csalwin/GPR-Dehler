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
			<div class=diamonds><div class="diamondFill"></div></div>
			<span class="diamondText">EXPERIENCE</span>

			<?php putRevSlider('home-slider', 'homepage'); ?>


<!--			<img src="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/images/slider/silde-1.jpg"/>-->
		</div>
		<div class="container box weAre">
			<h2>We are an <span>innovative international</span> management consulting company</h2>

			<p> We are passionate about delivering sustainable and measurable client success, and know that to improve the way a business
				works, you need to start with the people behind the processes. We’re experts at thinking in new ways and taking risks.
				This means that when it comes to implementing organisational change, your people will be empowered to innovate
				beyond what other businesses are doing and establish you at the forefront of your industry.</p>

		</div>
		<div class="container box whoAreWe">

			<ul>
				<li>Who we are
					<div class="imgWrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img1.png"/>


					</div>
					<div class="desktopWho">
						<svg>

							<line x1="0" y1="0" x2="100%" y2="0" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="0" y1="10%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>

							<line class="path top" x1="0" y1="0" x2="100%" y2="0" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path right" x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path bottom" x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path left" x1="0" y1="10%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
<!--							<image xlink:href="http://www.greeninc.nl/wp-content/uploads/2013/02/081129-Stock-Photo-YvZ-IMG_0238.jpg" x="15" y="15" height="270px" width="270px"/>-->

						</svg>

					</div>

				</li>
				<li>Our approach
					<div class="imgWrap">
						<img style="top: -50px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img2.png"/>


					</div>
					<div class="desktopWho">
						<svg>

							<line x1="0" y1="0" x2="100%" y2="0" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="0" y1="10%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>

							<line class="path top" x1="0" y1="0" x2="100%" y2="0" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path right" x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path bottom" x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path left" x1="0" y1="10%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<!--							<image xlink:href="http://www.greeninc.nl/wp-content/uploads/2013/02/081129-Stock-Photo-YvZ-IMG_0238.jpg" x="15" y="15" height="270px" width="270px"/>-->

						</svg>

					</div>
				</li>
				<li>Industries
					<div class="imgWrap">
						<img style="top: -85px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img3.png"/>


					</div>
					<div class="desktopWho">
						<svg>

							<line x1="0" y1="0" x2="100%" y2="0" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="0" y1="10%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>

							<line class="path top" x1="0" y1="0" x2="100%" y2="0" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path right" x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path bottom" x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path left" x1="0" y1="10%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<!--							<image xlink:href="http://www.greeninc.nl/wp-content/uploads/2013/02/081129-Stock-Photo-YvZ-IMG_0238.jpg" x="15" y="15" height="270px" width="270px"/>-->

						</svg>

					</div>
				</li>
				<li>Articles
					<div class="imgWrap">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/who-img4.png"/>


					</div>
					<div class="desktopWho">
						<svg>

							<line x1="0" y1="0" x2="100%" y2="0" style="stroke: #300F42 ; stroke-width: 20"></line>
							<line x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>
							<line x1="0" y1="10%" x2="0" y2="100%" style="stroke: #300F42; stroke-width: 20"></line>

							<line class="path top" x1="0" y1="0" x2="100%" y2="0" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path right" x1="100%" y1="0" x2="100%" y2="90%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path bottom" x1="100%" y1="100%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<line class="path left" x1="0" y1="10%" x2="0" y2="100%" style="stroke: #333333; stroke-width: 20"></line>
							<!--							<image xlink:href="http://www.greeninc.nl/wp-content/uploads/2013/02/081129-Stock-Photo-YvZ-IMG_0238.jpg" x="15" y="15" height="270px" width="270px"/>-->

						</svg>

					</div>
				</li>
			</ul>


		</div>
		<div class="box testimonial">

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor massa ac justo volutpat, sit amet condimentum </p>



		</div>
		<div class="box ourProcess">
			<div class="container">

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

		<div class="container box clients">

			<ul>
				<li>
					Telstra
				</li>
				<li>
					CSR
				</li>
				<li>
					Quantas
				</li>
				<li>
					RioTinto
				</li>
				<li>
					CocaCola
				</li>
				<li>
					ORIX
				</li>
				<li>
					Citi
				</li>
			</ul>



		</div>



	</div>




	<?php else :  ?>



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

<?php endif;?>


<?php get_footer(); ?>
