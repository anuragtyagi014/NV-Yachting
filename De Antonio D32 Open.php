<?php 

/* 
Template Name: De Antonio D32 Open Template
*/

get_header();

?>
             <?php if( have_rows('first_section')): 
                   while (have_rows('first_section')): the_row(); ?>
                <div class="hero-video-sec">
                    <div class="video-part">
                        <img src="<?php echo get_sub_field('video_image_1'); ?>" class="excep-desk-33" alt="">
                        <img src="<?php echo get_sub_field('video_image_2'); ?>" class="excep-phone-33" alt="">
                    </div>
                    <div class="nv-logo">
                        <img src="<?php echo get_sub_field('logo'); ?>" alt="">
                    </div>
                    <div class="model-num">
                        <img src="<?php echo get_sub_field('model_num_image1'); ?>" class="model-numm excep-desk-33" alt="">
                        <img src="<?php echo get_sub_field('model_num_image2'); ?>" alt="" class="excep-phone-33">
                    </div>
                </div>
            <?php endwhile; endif; ?>
            <?php if( have_rows('second_area')): 
                   while (have_rows('second_area')): the_row(); ?>
                    <section class="second-sec targa-40-first">
                        <div class="row" data-aos="zoom-in-up">
                            <div class="col-12 text-center">
                                <div class="logo-tile">
                                    <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                    <?php echo get_sub_field('heading'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up">
                                <div class="headinigg">
                                    <?php echo get_sub_field('heading2'); ?>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-down">
                                <div class="main-cont">
                                    <?php echo get_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>

                    </section>
            <?php endwhile; endif; ?>

                        <section class="targa-main-img" data-aos="zoom-in-up">
                                <img src="<?php echo get_field('image_targa'); ?>" class="img-fluid" alt="">
                            <!-- <video src="https://nvyachting.com/wp-content/uploads/2022/12/Introducing-the-new-model-D36-Open.-New-lines-and-best-performance-for-our-new-generation-of-boats..mp4" playsinline muted="" loop="" autoplay=""></video> -->
                        </section>


            <?php 
                if(have_rows('luxury_content')):
                    while(have_rows('luxury_content')): the_row();
             ?>
                <section class="luxuray-social second-sec">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="headinigg">
                                <?php echo get_sub_field('heading_luxery'); ?>   
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <div class="main-cont">
                                <?php echo get_sub_field('content_luxery'); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>

            <?php 
                if(have_rows('targa_gallery_section')):
                    while(have_rows('targa_gallery_section')): the_row();
             ?>
                <section class="targa-gallery second-sec">
                    <div class="gallery-par">
                        <div class="gallery-l" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_left_1'); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="gallery-r" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_right_1'); ?>" class="img-fluid circle-phn" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-par">
                        <div class="gallery-l" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                            </div>
                        </div>
                        <div class="gallery-r" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_right_2'); ?>" class="img-fluid excp-2" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>
             <?php 
                if(have_rows('luxury_content_2')):
                    while(have_rows('luxury_content_2')): the_row();
             ?>
                <section class="luxuray-social second-sec">
                    <div class="row align-items-center">
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="headinigg">
                                <?php echo get_sub_field('heading_luxery2'); ?>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <div class="main-cont">
                                
                                <?php echo get_sub_field('content_luxery2'); ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>
            <?php 
                if(have_rows('targa_gallery_2_section')):
                    while(have_rows('targa_gallery_2_section')): the_row();
             ?>
                <section class="targa-gallery second-sec">
                    <div class="gallery-par">
                        <div class="gallery-l" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_left_1') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="gallery-r" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_right_1') ?>" class="img-fluid circle-phn" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-par">
                        <div class="gallery-l" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_left_2') ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                            </div>
                        </div>
                        <div class="gallery-r" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?php echo get_sub_field('image_right_2') ?>" class="img-fluid excp-2" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>

<section class="new-spec">
    <div class="row">
        <div class="col-md-6" data-aos="fade-up">
        <div class="spec-d">
                <ul class="spec-detail">
                    <?php foreach (get_field('specification_1') as $specification_1): ?>
                        <li><?php echo $specification_1['specification_list']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-6" data-aos="fade-down">
            <div class="spec-d">
                <ul class="spec-detail">
                    <?php foreach (get_field('specification_2') as $specification_2): ?>
                        <li><?php echo $specification_2['specification_list2']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>