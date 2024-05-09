<?php
/*Template Name: About Us */
get_header();
?>


    <!-- <section class="top-bann-sec">
    <div class="img-are">
        <img src="https://nvyachting.com/wp-content/uploads/2023/02/Mask-Group-5-1.png" class="excess-desk">
        <img src="https://nvyachting.com/wp-content/uploads/2023/02/Scroll-Group-3-2.png" class="excess-phone" alt="">
    </div>
</section> -->

    <div class="hero-video-sec">
        <div class="video-part">
        <img src="<?php the_field('desktop_image');?>" class="excess-desk">
        <img src="<?php the_field('mobile_images');?>" class="excess-phone" alt="">
        </div>
        <div class="nv-logo">
            <img src="<?php the_field('logo');?>" alt="">
        </div>
        <!-- <div class="model-num">
            <img src="https://nvyachting.com/wp-content/uploads/2023/01/900-1-2.png" class="model-numm excep-desk-33" alt="">
            <img src="https://nvyachting.com/wp-content/uploads/2023/01/900-2-1.png" alt="" class="excep-phone-33">
        </div> -->
    </div>

    <section class="about-sec">
        <div class="about-img">
            <img src="<?php the_field('desktop_image_abt');?>" class="excess-desk" alt="">
            <img src="<?php the_field('mobile_image');?>" class="excess-phone" alt="">
        </div>
        <div class="about-cont">
            <h3><?php the_field('heading_about');?></h3>
            <?php the_field('paragraph_abt');?>
        </div>
    </section>

    <section class="phone-cont">
        <div class="phone-info">
            <?php the_field('mobile_about_section');?>
        </div>
    </section>

    <?php
get_footer();
?>