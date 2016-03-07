<?php
/**
 * Template Name: Case study page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>
	<div class="page casestudies content">

		<?php get_template_part( 'includes/headerimagetitle' ); ?>

		<div class="box main signs container">
				<div class="row">


					<?php the_content()?>
				</div>

					<ul class="row">
					<?php
					$args = array(
						'posts_per_page'   => -1,
						'offset'           => 0,
						'category'         => '',
						'category_name'    => '',
						'orderby'          => 'date',
						'order'            => 'DESC',
						'include'          => '',
						'exclude'          => '',
						'meta_key'         => '',
						'meta_value'       => '',
						'post_type'        => 'Case studies',
						'post_mime_type'   => '',
						'post_parent'      => '',
						'author'	   => '',
						'post_status'      => 'publish',
						'suppress_filters' => true
					);
					$posts_array = get_posts( $args );

//					echo '<pre>' . print_r( $posts_array, true ) . '</pre>';

					if( $posts_array ) {
						?>
						<?php

						foreach ($posts_array as $post) {
							?>
							<li class="col-xs-12 col-md-3">
								<a href='<?php echo $post->guid ?>'>
									<div class="sign">
										<div class="imgWrap">
											<?php

											$image = get_field('thumbnailimg', $post->ID);
											if (!empty($image)):

												// vars
												$url = $image['url'];
												$title = $image['title'];
												$alt = $image['alt'];
												$caption = $image['caption'];

												// thumbnail
												$size = 'thumbnail';
												$thumb = $image['sizes'][$size];
												$width = $image['sizes'][$size . '-width'];
												$height = $image['sizes'][$size . '-height']; ?>

											<?php endif; ?>

											<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
											<div class="desktopWho">
												<svg>
													<line x1="0" y1="0" x2="100%" y2="0"
														  style="stroke: #8b003d; stroke-width: 15"></line>
													<line x1="100%" y1="0" x2="100%" y2="90%"
														  style="stroke: #8b003d; stroke-width: 15"></line>
													<line x1="100%" y1="100%" x2="0" y2="100%"
														  style="stroke: #8b003d; stroke-width: 15"></line>
													<line x1="0" y1="10%" x2="0" y2="100%"
														  style="stroke: #8b003d; stroke-width: 15"></line>

													<line class="path top" x1="0" y1="0" x2="100%" y2="0"
														  style="stroke: #333333; stroke-width: 15"></line>
													<line class="path right" x1="100%" y1="0" x2="100%" y2="90%"
														  style="stroke: #333333; stroke-width: 15"></line>
													<line class="path bottom" x1="100%" y1="100%" x2="0" y2="100%"
														  style="stroke: #333333; stroke-width: 15"></line>
													<line class="path left" x1="0" y1="10%" x2="0" y2="100%"
														  style="stroke: #333333; stroke-width: 15"></line>
													<!--							<image xlink:href="http://www.greeninc.nl/wp-content/uploads/2013/02/081129-Stock-Photo-YvZ-IMG_0238.jpg" x="15" y="15" height="270px" width="270px"/>-->
												</svg>
											</div>

										</div>

										<div class="clearfix"></div>
										<div class="postdetails">
											<h4><?php echo $post->post_title; ?></h4>
											<?php
											$exerpt = get_field('post_exerpt', $post->ID);
											if( $exerpt ) {
												echo "<p>".$exerpt."</p>";
											}
											?>
											<a class="readmore" href="<?php echo $post->guid; ?>">Read more ></a>
										</div>

									</div>
								</a>
							</li>
							<?php
						}
					}
            ?>
					</ul>

			</div>
		<div class="box clients">

			<div class="container">
				<ul class="overview">
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/ANGLO.png" />
					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/BHP-BILLITON.png" />

					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/CITIGROUP.png" />

					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/COCA-COLA-AMATIL.png" />

					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/fosters.png" />

					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/NEWMONT.png" />
					</li>
					<li>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/clients/ORIX.png" />

					</li>
				</ul>
			</div>

		</div>

	</div><!-- .content-area -->

<?php get_footer(); ?>



