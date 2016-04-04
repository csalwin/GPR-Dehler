<?php
/**
 * Template Name: Industries Single Page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>

<div class="page industries content">
    <div class="triCut hidden-xs hidden-sm hidden-md"></div>

    <?php get_template_part( 'includes/headerimagetitle' ); ?>

    <div class="box main container">
        <div class="content">
            <?php the_content();?>
        </div>
    </div>
    <div class="main whatwedo">
        <div class="container">
            <?php if( have_rows('what_we_do') ): ?>
                <h2>What We Do</h2>
                <ul>

                    <?php while( have_rows('what_we_do') ): the_row();

                        // vars
                        $item = get_sub_field('what_we_do_item');
                        ?>

                        <li class="col-xs-12 col-md-6">
                            <?php echo $item; ?>
                        </li>

                    <?php endwhile; ?>

                </ul>
                <div class="clearfix"></div>

                <form action="<?php echo get_page_link( get_page_by_title( 'contact' )->ID ); ?>" method="get">
                    <button>Contact us</button>
                </form>

            <?php endif; ?>
        </div>
        <div class="triCut hidden-xs hidden-sm hidden-md"></div>
    </div>

    <div class=" main achievements">
        <div class="container">
            <h2>Achievements</h2>

        </div>
        <div class="achivementslider">
            <ul class="achivslider">

                <?php while( have_rows('achievements') ): the_row();
                    // vars
                    $item = get_sub_field('achieve_text');
                    ?>

                    <li class="col-xs-12 col-md-6">
                        <?php echo $item; ?>
                    </li>

                <?php endwhile; ?>
            </ul>
        </div>


    </div>
    <div class="casestudies">
            <div class="box main signs container">
                <h2>Case Studies</h2>
                    <?php
                    $args = array(
                        'posts_per_page'   => 8,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => '',
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                        'include'          => '',
                        'site_categories'  => get_the_title(),
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
//                    					echo '<pre>' . print_r( $posts_array, true ) . '</pre>';
                    if( $posts_array ) {
                        ?>
                        <?php
                        $i=0;
                        echo '<ul class="row">';
                        foreach ($posts_array as $post) {
                            ?>
                                <li class="col-xs-12 col-md-3">
                                    <a href="<?php echo $post->guid; ?>">
                                        <div class="sign">
                                            <div class="imgWrap">
                                                <?php

                                                $image = get_field('thumbnailimg', $post->ID);
                                                if (!empty($image)){

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

                                                <?php } ?>

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
                                                    </svg>
                                                </div>

                                            </div>


                                            <div class="postdetails">
                                            <a href="<?php echo $post->guid; ?>">
                                                <h4><?php echo $post->post_title; ?></h4>
                                            </a>
                                                <a class="readmore" href="<?php echo $post->guid; ?>">Read more ></a>
                                            </div>

                                        </div>
                                    </a>

                                </li>


                            <?php
                            $i++;
                            if ($i%4 == 0) echo '</ul><ul class="row">';
                         ?>

                            <?php
                        }
                    }
                    ?>


                </ul>
        </div>
    </div>
    <?php
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
                        'post_type'        => 'Insight',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'site_categories'  => get_the_title(),
                        'insight_categories' => 'Blog',
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
                        'site_categories'  => get_the_title(),
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

                <h4>Blog Articles</h4>
                <ul>

                        <?php
                        foreach ($posts_array as $post) {
                            ?>
                            <li class="col-xs-12 col-md-6">
                                <a href="<?php echo $post->guid ?>">
                                    <?php echo $post->post_title ?>

                                </a>
                            </li>


                </ul>
            </div>
                        <?php }
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
</div>

<?php get_footer(); ?>

