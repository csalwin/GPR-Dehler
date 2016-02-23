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

    <?php endwhile; ?>

    <div class="box main container">
        <p>
            We generate value for clients across industries. We pride ourselves in our sector expertise,
            combined with our ability to integrate learning from a range of disciplines to improve organisations.
        </p>
        <ul class="row">

            <?php
            // Set up the objects needed
            $my_wp_query = new WP_Query();
            $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

            // Get the page as an Object
            $portfolio =  get_page_by_title('Industries');

            $args = array(
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
                ?>
                <li class="col-xs-12 col-md-3">
                    <a href='<?php echo $child->guid ?>'>
                        <div class="sign">
                            <?php echo $child->post_title ?>
                            <div class="imgWrap">
                                <?php

                                    $image = get_field('thumbnailimg', $child->ID);
                                    if( !empty($image) ):

                                        // vars
                                        $url = $image['url'];
                                        $title = $image['title'];
                                        $alt = $image['alt'];
                                        $caption = $image['caption'];

                                        // thumbnail
                                        $size = 'thumbnail';
                                        $thumb = $image['sizes'][ $size ];
                                        $width = $image['sizes'][ $size . '-width' ];
                                        $height = $image['sizes'][ $size . '-height' ];?>

                                        <?php endif; ?>

                                <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />



<!--                                --><?php //$image = wp_get_attachment_image_src( get_post_thumbnail_id( $child->ID ), 'single-post-thumbnail' ); ?>
<!--                                <img src="--><?php //echo $image[0] ?><!--"/>-->
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


            ?>
            </ul>

    </div>









    <?php get_footer(); ?>
</div>