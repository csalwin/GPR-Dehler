<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>

<div class="homeContent">
    <div class="row sliderBanner">


        <div class="slider">
            <div class="homeSliderWrapper">
                <div class="hidden-xs hidden-sm" style="
                    overflow: hidden;
                    height: 510px;
                    /* max-height: 411px; */
                    width: 100%;
                    position: absolute;
                    ">
                    <div class="container sliderbg">
                        <div class="slidebg" style="background: rgba(20, 5,28, 0.7) 0 200px no-repeat; ">&nbsp;</div>
                    </div>
                </div>

                <div class="container sliderbg hidden-xs hidden-sm">

                    <div class="slidebg">&nbsp;</div>
                </div>
                <ul class="homeSlider images">

                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('home_main_slider_images') ) {

                            // loop through the rows of data
                            while (have_rows('home_main_slider_images')): the_row();
                                $image = get_sub_field('images');
                                ?>

                                <li>
                                    <div class="imageWrapper">
                                        <img class="hidden-xs hidden-sm hidden-md" src="<?php echo $image['url']; ?>" data-stellar-ratio="0.9" data-stellar-vertical-offset="-150">
                                        <img class="hidden-lg" src="<?php echo $image['url']; ?>">
                                    </div>
                                </li>
                            <?php endwhile;

                        }else {

                            // no rows found

                        }

                        ?>
                </ul>

                <ul class="homeSlider content hidden-xs hidden-sm">
                    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('home_main_slider_images') ) {
                        // loop through the rows of data
                        while (have_rows('home_main_slider_images')) : the_row();
                            $showExerpt = get_sub_field('show_exerpt');
                            $image_text = get_sub_field('image_text');
                            $post_exerpt = get_sub_field('case_studies');
                            $exerpt = get_field('post_exerpt', $post_exerpt->ID)
                            ?>
                            <li>
                                <div class="container">
                                    <div class="casestudy">
                                        <h1>Think. Disrupt. <span><?php echo $image_text ?></span></h1>

                                            <?php if ($showExerpt){
                                                ?><p><?php echo $exerpt?></p>
                                                <a href="<?php echo $post_exerpt-> guid ?>">Read the case study ></a>

                                                <?php
                                            }?>



                                    </div>
                                </div>
                            </li>
                        <?php endwhile;

                    }else {

                        // no rows found

                    }

                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container box weAre">
        <div class="row">
            <h2 class="col-xs-12">Accelerated strategy realisation</h2>

            <img class="col-xs-12 col-sm-7 col-md-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/introImg.png">

            <div class="introWrapper col-xs-11">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php
                    the_content();

                endwhile;
                endif;
                    ?>

                <a class="button" href="<?php echo get_page_link(10)?>">Our Approach</a>

            </div>
        </div>


    </div>
    <div class="box testimonial">
        <div class="sliderwrapper">
            <div class="slider">
                <ul class="testSlider">


                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('home_second_slider') ) {

                        // loop through the rows of data
                        while (have_rows('home_second_slider')): the_row();
                            $image = get_sub_field('images');
                            $image_text = get_sub_field('image_text');
                            $post_exerpt = get_sub_field('case_studies');
                            $exerpt = get_field('post_exerpt', $post_exerpt->ID)
                            ?>

                            <li>
                                <div class="imgWrapper">
                                    <img class="hidden-xs hidden-sm hidden-md" src="<?php echo $image['url']; ?>" data-stellar-ratio="0.95" data-stellar-vertical-offset="-150">
                                    <img class="hidden-lg" src="<?php echo $image['url']; ?>">
                                </div>
                                <div class="overlay hidden-xs hidden-sm">
                                    <div class="container">
                                        <div class="casestudy">
                                            <h2>Think. Disrupt. <?php echo $image_text; ?></h2>
                                            <p><?php echo $exerpt; ?></p>
                                            <a href="<?php echo $post_exerpt-> guid?>">Read the case study ></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile;

                    }else {

                        // no rows found

                    }

                    ?>
                </ul>
            </div>

        </div>
        <div class="slider sideTriangle hidden-xs hidden-sm">

            <div class="rotatewrapper">
                <div class="greyBox">
                    &nbsp;
                </div>
                <ul class="testSlider">

                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('home_second_slider') ) {

                        // loop through the rows of data
                        while (have_rows('home_second_slider')): the_row();
                            $image = get_sub_field('images');
                            ?>

                            <li>
                                <img src="<?php echo $image['url']; ?>">
                            </li>
                        <?php endwhile;

                    }else {

                        // no rows found

                    }

                    ?>
                </ul>


            </div>

        </div>



    </div>
    <div class="box ourProcess">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="col-xs-6 col-md-3">
                        <a href="<?php echo get_page_link(8)?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons1.png"/>
                            Who we are
                        </a>

                    </li>
                    <li class="col-xs-6 col-md-3">
                        <a href="<?php echo get_page_link(10)?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons2.png"/>
                            Our Approach
                        </a>

                    </li>
                    <li class="col-xs-6 col-md-3">
                        <a href="<?php echo get_page_link(80)?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons3.png"/>
                            Industries
                        </a>

                    </li>
                    <li class="col-xs-6 col-md-3">
                        <a href="<?php echo get_page_link(16)?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons4.png"/>
                            Articles
                        </a>

                    </li>

                </ul>
            </div>

        </div>

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
</div>



    <?php get_footer(); ?>

    <script type="text/javascript">

        var slider_array;
        var slider_arraysecond;
        $(document).ready(function()
        {
            // launch bxslider
            $('.homeSlider').each(function(i){
                slider_array = $(this).bxSlider({
                    controls: false,
                    pager: false,
                    infiniteLoop: true,
                    auto: true,
                    speed: 1500,
                    onSlideNext: doThis
                });
            });
            //So the slider are Synced
            function doThis(){
                    slider_array.goToNextSlide();
            }

            $('.testSlider').each(function(i){
                slider_arraysecond = $(this).bxSlider({
                    controls: false,
                    pager: false,
                    infiniteLoop: true,
                    auto: true,
                    speed: 1500,
                    onSlideNext: doThistoo
                });
            });
            function doThistoo(){
                slider_arraysecond.goToNextSlide();
            }


        });
    </script>



