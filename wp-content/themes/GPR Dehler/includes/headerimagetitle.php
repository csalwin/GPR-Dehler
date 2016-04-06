<div class="headerImgWrapper">
    <?php
    if ( have_posts() ) {
        // Start the loop.
        while (have_posts()) : the_post();
            if (has_post_thumbnail($post->ID)) { ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
                <img class="headerImg" src="<?php echo $image[0] ?>"/>
                <?php
            } else {
                ?>
                <img class="headerImg"
                     src="<?php echo esc_url(get_template_directory_uri()); ?>/images/industries/header.png"
                     alt="headerImage"/>
            <?php } ?>
            <div class="width970"><h1><?php echo get_the_title(); ?></h1></div>
        <?php endwhile;
    }else {
        ?>

        <img class="headerImg"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/images/industries/header.png"
             alt="headerImage"/>

        <?php
    }
    ?>

</div>
