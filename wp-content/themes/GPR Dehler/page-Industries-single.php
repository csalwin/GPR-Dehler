<?php
/**
 * Template Name: Industries Single Page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>

<div class="page industries content">
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

    <?php endwhile; ?>

    <div class="box main container">
        <?php the_content();?>

    </div>
    <div class="row whatwedo">
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

                <form action="<?php echo get_page_link( get_page_by_title( 'contact' )->ID ); ?>" method="get">
                    <button>Contact us</button>
                </form>

            <?php endif; ?>
        </div>
    </div>

    <div class="row achievements">
        <div class="container">
            <h2>Achievements</h2>

        </div>


    </div>
    <div class="row casestudies">
        <div class="container">
            <h2>Case Studies</h2>
            <ul>
                <?php
                $args = array(
                    'posts_per_page'   => 5,
                    'offset'           => 0,
                    'category'         => 'site_categories',
                    'category_name'    => srtolower(get_the_title()),
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
                                    </div>
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
                                    <div class="postdetails">
                                        <h4><?php echo $post->post_title; ?></h4>
                                        <p>exerpt</p>
                                        <a href="<?php echo $post->guid; ?>">Read more ></a>
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
    </div>

    <div class="row related">
        <div class="container">
            <h2>Related</h2>
            <div class="col-xs-12 col-md-6">
                <h4>Blog Articles</h4>
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


    <?php get_footer(); ?>
</div>