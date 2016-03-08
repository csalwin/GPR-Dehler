<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
<div class="page casestudies content">
	<div class="triCut hidden-xs hidden-sm hidden-md"></div>
	<div class="headerImgWrapper">


			<img class="headerImg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/industries/header.png" alt="headerImage">

		<div class="width970"><h1>Search: <?php echo get_search_query(); ?></h1></div>


	</div>


	<div class="main signs container">

			<?php if (have_posts()){?>

				<ul class="row">
					<?php while ( have_posts() ) : the_post();?>


						<li class="col-xs-12 col-md-3">
						<?php
						if ($post->post_type == "insight"){
						$posttax = get_the_terms($post->ID, 'insight_categories');
							if ($posttax[0]->slug == "articles" || $posttax[0]->slug == "whitepapers"){
							$file = get_field('upload_file');
								if ($file) {
								// vars
								$url = $file['url'];
								$title = $file['title'];
								$caption = $file['caption'];
								?>
									<a href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="_blank">
										<?php
								}
							}else {
										?><a href='<?php echo $post->guid; ?>'><?php
											}

						}
						else {

							?><a href='<?php echo $post->guid; ?>'><?php
						}?>


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
										<?php
										if ($post->post_type == "insight"){

											$posttax = get_the_terms($post->ID, 'insight_categories');
											if ($posttax[0]->slug == "articles" || $posttax[0]->slug == "whitepapers"){

												$file = get_field('upload_file');

												if( $file ) {

													// vars
													$url = $file['url'];
													$title = $file['title'];
													$caption = $file['caption'];

													?>
											<a class="readmore" href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="_blank">Download ></a>
													<?php
												}else {
													?><a class="readmore" href="<?php echo $post->guid; ?>">Read more ></a><?php
												}

											}else {
												?><a class="readmore" href="<?php echo $post->guid; ?>">Read more ></a><?php
											}


										}else {
										?>
										<a class="readmore" href="<?php echo $post->guid; ?>">Read more ></a>
										<?php
										}?>



									</div>

								</div>
							</a>
						</li>
					<?php endwhile; ?>

				</ul>
				<?php
			}

		// If no content, include the "No posts found" template.
		else {?>
			<div class="col-xs-12 searcherror" style="margin-bottom: 30px">

				<h2><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'twentythirteen' ); ?></h2>
				<?php get_search_form(); ?>
			</div>


			<?php }?>


	</div>
</div>

<?php get_footer(); ?>
