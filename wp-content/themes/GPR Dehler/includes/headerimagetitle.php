<div class="headerImgWrapper">
    <?php
    if ( have_posts() ) {
        // Start the loop.
        while (have_posts()) : the_post();
            if (has_post_thumbnail($post->ID)) { ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                <img class="headerImg hidden-xs hidden-sm" src="<?php echo $image[0] ?>" data-stellar-ratio="0.8"
                     data-stellar-vertical-offset="-150"/>
                <img class="headerImg hidden-md hidden-lg" src="<?php echo $image[0] ?>"/>
                <?php
            } else {
                ?>
                <img class="headerImg"
                     src="<?php echo esc_url(get_template_directory_uri()); ?>/images/industries/header.png"
                     alt="headerImage" data-stellar-ratio="0.8"/>
            <?php } ?>
            <div class="width970"><h1><?php echo get_the_title(); ?></h1></div>
        <?php endwhile;
    }else {
        ?>

        <img class="headerImg"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/images/industries/header.png"
             alt="headerImage" data-stellar-ratio="0.8"/>

        <?php
    }
    ?>

</div>
