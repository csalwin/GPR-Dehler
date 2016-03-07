<?php
/**
 * Template Name: Industries Page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>

<div class="page industries content">
    <div class="triCut hidden-xs hidden-sm hidden-md"></div>

    <?php get_template_part( 'includes/headerimagetitle' ); ?>

    <div class="box main signs container">
        <div class="content width970">
            <?php the_content();?>
        </div>
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
                            <h3><?php echo $child->post_title ?></h3>
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