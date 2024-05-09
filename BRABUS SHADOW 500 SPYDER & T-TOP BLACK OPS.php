<?php 

/* 
Template Name: BRABUS SHADOW 500 SPYDER & T-TOP BLACK OPS Template
*/

get_header();

?>
<section class="page-template-BRABUSSHADOW500SPYDERT-TOP-2">


    <section class="page-template-BRABUSSHADOW500CABINBLACKOPS">
        <section class="page-template-BRABUSSHADOW500CABIN">
            <section class="page-template-BRABUSSHADOW300EDITIONONE">
                <section class="page-template-DeAntonioD28Crusier">
                    <section class="page-template-DeAntonioD36Open">

                    <?php
                        if(have_rows('first_section_content')):
                            while(have_rows('first_section_content')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <div class="hero-video-sec">
                            <div class="video-part">
                            <img src="<?php echo get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                                <img src="<?php echo get_sub_field('mobile_image'); ?>" class="excep-phone-33" alt="">
                            </div>
                            <div class="nv-logo">
                                <img src="<?php echo get_sub_field('nv_logo'); ?>" alt="">
                            </div>
                            <div class="model-num">
                                <img src="<?php echo get_sub_field('desktop_model_number_image'); ?>" class="model-numm excep-desk-33" alt="">
                                <img src="<?php echo get_sub_field('mobile_model_number_image'); ?>" alt="" class="excep-phone-33">
                            </div>
                        </div>
                    <?php endif; endwhile; endif; ?>

                    <?php
                        if(have_rows('second_section_content')):
                            while(have_rows('second_section_content')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <section class="big-heading-brabus" data-aos="zoom-in-up">

                            <div class="custom-main-head">
                                <div class="col-12 text-center">
                                    <div class="logo-tile">
                                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                                        <?php echo get_sub_field('heading'); ?>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section class="second-sec targa-40-first">

                            <div class="row">
                                <div class="col-md-5" data-aos="fade-up">
                                    <div class="headinigg">
                                        <?php echo get_sub_field('heading_2'); ?>
                                    </div>
                                </div>
                                <div class="col-md-7" data-aos="fade-down">
                                    <div class="main-cont">
                                        <?php echo get_sub_field('main_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; endwhile; endif; ?>


                        <!-- ========== FOR DEVELOPER - Make this section dynamic in such a way that both video and image can be uploaded  ========== -->

                        <section class="targa-main-img" data-aos="zoom-in-up">
                            <?php if(get_field('file_type') == 'video'){ ?>
                                <video src="<?php echo get_field('Video_middle'); ?>" playsinline muted loop autoplay></video>    
                            <?php }else{ ?>
                                <img src="<?php echo get_field('Video_middle'); ?>" class="img-fluid" alt="">
                            <?php } ?>
                            
                            
                        </section>


                    <?php
                        if(have_rows('power_section_content')):
                            while(have_rows('power_section_content')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <section class="luxuray-social second-sec black-ops">
                            <div class="row">
                                <div class="col-md-5" data-aos="fade-up">
                                    <div class="headinigg">
                                        <?php echo get_sub_field('heading'); ?>
                                    </div>
                                </div>
                                <div class="col-md-7" data-aos="fade-down">
                                    <div class="main-cont">
                                        <?php echo get_sub_field('main_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; endwhile; endif; ?>


                    <?php
                        if(have_rows('gallery_section_content')):
                            while(have_rows('gallery_section_content')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <section class="targa-gallery second-sec">
                            <div class="gallery-par">
                                <div class="gallery-l" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_left'); ?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="gallery-r" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_right'); ?>" class="img-fluid circle-phn" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-par">
                                <div class="gallery-l" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                                    </div>
                                </div>
                                <div class="gallery-r" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_right_2'); ?>" class="img-fluid excp-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; endwhile; endif; ?>

                    <?php
                        if(have_rows('interior_design_section_content_')):
                            while(have_rows('interior_design_section_content_')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <section class="luxuray-social second-sec open-42 edition-300-one">
                            <div class="row">
                                <div class="col-md-5" data-aos="fade-up">
                                    <div class="headinigg">
                                        <?php echo get_sub_field('heading'); ?>
                                    </div>
                                </div>
                                <div class="col-md-7" data-aos="fade-down">
                                    <div class="main-cont">
                                        <?php echo get_sub_field('main_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; endwhile; endif; ?>


                    <?php
                        if(have_rows('gallery_section_content_int')):
                            while(have_rows('gallery_section_content_int')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <section class="targa-gallery second-sec">
                            <div class="gallery-par">
                                <div class="gallery-l" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_left'); ?>" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="gallery-r" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_right'); ?>" class="img-fluid circle-phn" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-par">
                                <div class="gallery-l" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                                    </div>
                                </div>
                                <div class="gallery-r" data-aos="zoom-in-up">
                                    <div class="gallery-imgg">
                                        <img src="<?php echo get_sub_field('gallery_image_right_2'); ?>" class="img-fluid excp-2" alt="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; endwhile; endif; ?>


                    <?php
                        if(have_rows('supreme_innovation_section_content')):
                            while(have_rows('supreme_innovation_section_content')): the_row();
                                if(get_row_layout()== 'all_content'):
                    ?>
                        <section class="luxuray-social second-sec open-42 black2-ops">
                            <div class="row">
                                <div class="col-md-5" data-aos="fade-up">
                                    <div class="headinigg">
                                        <?php echo get_sub_field('heading'); ?>
                                    </div>
                                </div>
                                <div class="col-md-7" data-aos="fade-down">
                                    <div class="main-cont">
                                        <?php echo get_sub_field('main_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; endwhile; endif; ?>


                        <section class="targa-main-img edition-one" data-aos="zoom-in-up">
                            <img src="<?php echo get_field('desktop_boat_image'); ?>" class="img-fluid" alt="">
                            <!-- <video src="https://nvyachting.com/wp-content/uploads/2023/01/Jobe-X-Brabus-v9_converted1.mp4" playsinline muted loop autoplay></video> -->
                        </section>



                        <section class="targa-main-img spec-img-except" data-aos="zoom-in-up">
                            <img src="<?php echo get_field('desktop_boat_image2'); ?>" class="model-numm excep-desk-33" alt="">
                            <img src="<?php echo get_field('mobile_boat_image2'); ?>" alt="" class="excep-phone-33">
                        </section>


                        <section class="new-spec" data-aos="zoom-in-up">
                            <div class="row">
                                <div class="col-12">
                                    <h2><?= get_field('specifications_heading');?></h2>
                                    <h6 class="brabus-new-pdf">
                            <a href="<?= get_field('download_pdf_link');?>" target="_blank"><?= get_field('download_pdf');?></a>
                        </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="spec-d">
                                        <ul class="spec-detail">
                                            <?php $count=1; foreach(get_field('specification_left') as $specification_left): ?>
                                                <li <?php if($count == 3){ echo ' class="li-space-except"'; } ?>><?php echo $specification_left['content']; ?></li>
                                            <?php $count++; endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>



                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<?php get_footer(); ?>