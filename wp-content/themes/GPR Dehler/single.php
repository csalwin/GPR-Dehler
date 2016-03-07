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
	<?php get_template_part( 'includes/headerimagetitle' ); ?>

	<?php
	if (get_post_type( get_the_ID() ) == "insight" ) {?>

		<div class="row">
			<div class="container">
				<div class="postdate col-xs-12">
					<?php the_date() ?>
				</div>
				<div class="postcontent col-xs-12 col-md-8">


						<?php
							the_content();
						?>

				</div>
				<div class="col-xs-12 col-md-3 pull-right">
					<div class="recent">
						<h3>Recent post</h3>
						<ul>
							<?php
							$args = array(
								'numberposts' => '8',
								'post_type'        => 'Case studies' , 'insight');
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
							}
							?>
						</ul>
					</div>
					<div class="recent">
						<h3>Industries</h3>
						<ul>
							<?php
							// Get the page as an Object
							$portfolio =  get_page_by_title('Industries');

							$args = array(
								'numberposts' => '8',
								'sort_order' => 'asc',
								'sort_column' => 'menu_order',
								'hierarchical' => 1,
								'exclude' => '',
								'include' => '',
								'meta_key' => '',
								'meta_value' => '',
								'authors' => '',
								'child_of' => $portfolio->ID,
								'parent' => -1,
								'exclude_tree' => '',
								'number' => '',
								'offset' => 0,
								'post_type' => 'page',
								'post_status' => 'publish'
							);
							$children = get_pages($args);

							//            // echo what we get back from WP to the browser
							//            echo '<pre>' . print_r( $children, true ) . '</pre>';

							foreach ($children as $child){
								echo '<li><a href="' . $child->guid . '">' .   $child->post_title.'</a> </li> ';
							}
							?>
						</ul>
					</div>
				</div>

			</div>

		</div>
	<?php }else {?>

		<div class="row">
			<div class="container thecontent">
				<div class="col-xs-12">

					<?php
					the_content();
					?>

				</div>

			</div>

		</div>


	<?php }?>

	<?php
	if (get_post_type( get_the_ID() ) == "casestudies" ) {
		if (have_rows('objectives')){
		?>
			<div class="objectives row">
				<div class="container">
					<h2>Objectives</h2>
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
				<div class="triCut hidden-xs hidden-sm hidden-md"></div>
			</div>
			<?php }?>


		<?php if (have_rows('results')){?>

		<div class="results row">
			<div class="container">
				<h2>Results</h2>
			</div>
				<div class="resultsslider">
					<ul class="resultslider">

						<?php while( have_rows('results') ): the_row();

							// vars
							$item = get_sub_field('result_text');
							?>

							<li class="col-xs-12 col-md-6">
								<?php echo $item; ?>
							</li>

						<?php endwhile; ?>
					</ul>
				</div>


		</div>

			<?php }?>

		<?php
		$postCat = get_the_terms(get_the_ID(), 'site_categories');
		$args = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'casestudies',
			'site_categories'  => $postCat->name,
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$posts_array = get_posts( $args );

		$args2 = array(
			'posts_per_page'   => 5,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'site_categories'  => $postCat->name,
			'post_type'        => 'Insight',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'insight_categories' => 'Articles',
			'author'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true
		);
		$artical_array = get_posts( $args2 );


		if ($posts_array || $artical_array){
			?>

			<div class="row main related">
				<div class="container">
					<h2>Related</h2>
					<?php
					//            echo '<pre>' . print_r( $posts_array, true ) . '</pre>';
					if( $posts_array ) {
						?>
						<div class="col-xs-12 col-md-6">

						<h4>Case Studies</h4>
						<ul>

						<?php
						foreach ($posts_array as $post) {
							?>
							<li class="col-xs-12">
								<a href="<?php echo $post->guid ?>">
									<?php echo $post->post_title ?>

								</a>
							</li>

						<?php }?>
						</ul>
							</div><?php
					}?>
					<?php
					//        echo '<pre>' . print_r( $artical_array, true ) . '</pre>';
					if( $artical_array ) {
						?>
						<div class="col-xs-12 col-md-6">
						<h4>White Papers</h4>
						<ul>

						<?php
						foreach ($artical_array as $post) {
							$file = get_field('upload_file');
							if( $file ) {
								// vars
								$url = $file['url'];
								$title = $file['title'];
								$caption = $file['caption'];
							}
							?>
							<li class="col-xs-12 col-md-6">
								<a href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="_blank">
									<?php echo $post->post_title ?>
								</a>
							</li>


							</ul>
							</div>
						<?php }
					} ?>
				</div>
			</div>
		<?php } ?>
		<?php
			$file = get_field('more_information_pdf');
		if($file){
			$fileurl = $file['url'];
			$filetitle = $file['title'];
			?>


			<div class="row">
				<div class="container">
					<a class="button" href="<?php echo $fileurl?>" title="<?php echo $filetitle ?>">Download PDF</a>
				</div>
			</div>

		<?php }?>



		<?php
	}

	?>



</div><!-- .content-area -->


<?php get_footer(); ?>