<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage GPR-Dehler
 */

get_header(); ?>

<div class="home">
    <div class="row sliderBanner">


        <div class="slider">
            <div class="homeSliderWrapper">
                <div style="
                    overflow: hidden;
                    height: 411px;
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

                    <li>
                        <div class="imageWrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider/slide-1.jpg">
                        </div>


                    </li>
                    <li>
                        <div class="imageWrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider/slide-2.png">
                        </div>

                    </li>
                    <li>
                        <div class="imageWrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider/slide-3.png">
                        </div>
                    </li>
                </ul>

                <ul class="homeSlider content">
                    <li>
                        <div class="container hidden-xs hidden-sm">
                            <div class="col-xs-7 casestudy">
                                <h1>Think. Disrupt. <span>Grow.</span></h1>
                                <p>$800 Million of new value is <br />
                                    created in 18 months.
                                </p>
                                <a href="#">Read the case Study</a>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container hidden-xs hidden-sm">
                            <div class="col-xs-7 casestudy">
                                <h1>Think. Disrupt. <span>Innovate.</span></h1>
                                <p>$800 Million of new value is <br />
                                    created in 18 months.
                                </p>
                                <a href="#">Read the case Study</a>

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container hidden-xs hidden-sm">
                            <div class="col-xs-7 casestudy">
                                <h1>Think. Disrupt. <span>Adapt.</span></h1>
                                <p>$800 Million of new value is <br />
                                    created in 18 months.
                                </p>
                                <a href="#">Read the case Study</a>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    <div class="container box weAre">
        <div class="row">
            <h2 class="col-xs-12">Accelerated strategy realisation</h2>

            <img class="col-xs-12 col-sm-7 col-md-4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/introImg.png">


            <div class="introWrapper col-xs-11"">
                <p> We take a people centric approach to accelerate strategy realisation. Our approach releases
                    the capability of teams, uncovers innate talent, encourages creativity and fosters discretionary effort through an experiential discovery process.</p>

                <p>For three decades we have delivered a significant return on investment for our clients in over 40 countries..</p>


            <button>Our Approach</button>

            </div>
        </div>


    </div>
    <div class="box testimonial">
        <div class="sliderwrapper">
            <div class="slider">
                <ul class="testSlider">
                    <li>
                        <div class="imgWrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/testSlider1.png">
                        </div>
                        <div class="triangle hidden-xs hidden-sm">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/testSliderTri1.png">
                        </div>
                        <div class="overlay">
                            <div class="container">
                                <div class="casestudy">
                                    <h2>Think. Disrupt. Innovate.</h2>
                                    <p>Intelligent technologies are used to to triple production in 12 months</p>
                                    <a href="#">Read the case study ></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgWrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/testSlider2.jpg">
                        </div>
                        <div class="triangle hidden-xs hidden-sm">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/testSliderTri2.png">
                        </div>
                        <div class="overlay">
                            <div class="container">
                                <div class="casestudy">
                                    <h2>Think. Disrupt. Innovate.</h2>
                                    <p>Intelligent technologies are used to to triple production in 12 months</p>
                                    <a href="#">Read the case study ></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="imgWrapper">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/testSlider3.jpg">
                        </div>
                        <div class="triangle hidden-xs hidden-sm">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/testSliderTri3.png">
                        </div>
                        <div class="overlay">
                            <div class="container">
                                <div class="casestudy">
                                    <h2>Think. Disrupt. Innovate.</h2>
                                    <p>Intelligent technologies are used to to triple production in 12 months</p>
                                    <a href="#">Read the case study ></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>



    </div>
    <div class="box ourProcess">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="col-xs-6 col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons1.png"/>
                        Who we are

                    </li>
                    <li class="col-xs-6 col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons2.png"/>
                        Our Approach

                    </li>
                    <li class="col-xs-6 col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons3.png"/>
                        Industries

                    </li>
                    <li class="col-xs-6 col-md-3">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/home/skills/whoWeAreIcons4.png"/>
                        Articles

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


    <?php get_footer(); ?>

    <script type="text/javascript">

        var slider_array = {};
        $(document).ready(function()
        {
            $('.overview').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 4500,
                cssEase:'linear'
            });

            // launch bxslider
            $('.homeSlider').each(function(i){
                slider_array[i] = $(this).bxSlider({
                    controls: false,
                    pager: false,
                    infiniteLoop: true,
                    auto: true
                });
            });


            $('.testSlider').bxSlider({
                controls: false,
                pager: false,
                infiniteLoop: true,
                auto: false
            });

        });
    </script>
</div>

