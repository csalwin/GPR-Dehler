<?php
/**
 * Template Name: Industries Page
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

    <?php 					endwhile; ?>


    <div class="box main container">
        <p>
            We generate value for clients across industries. We pride ourselves in our sector expertise,
            combined with our ability to integrate learning from a range of disciplines to improve organisations.
        </p>

        <ul class="row">
        <?php

        show_categories();


        function show_categories(){
            $args = array(
                'hide_empty'  => 0,
                'orderby' => 'ID',
                'show_count' => 0,
                'pad_counts' => 0,
                'hierarchical' => 1,
                'taxonomy' => 'industries_categories',
                'title_li' => '',
                'echo' => 0
            );

            $categories = get_categories($args);
            foreach ($categories as $catKey => $cat){
                if ($cat->cat_name != "Uncategorised") {

                    // Get the ID of a given category
                    $category_id = get_cat_ID( $cat->cat_name );

                    $category_link = get_category_link( $cat );
                    ?>
                    <li class="col-xs-12 col-md-3">
                        <a href="<?php echo esc_url( $category_link ) ?>">

                        <div class="sign">
                            <?php echo $cat->cat_name; ?>
                            <div class="imgWrap">
                                <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>"/>
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
                        </div>
                            </a>
                    </li>
                    <?php
                }
            }

        }
            ?>
            </ul>

    </div>









    <?php get_footer(); ?>
</div>