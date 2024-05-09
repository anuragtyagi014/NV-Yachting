<?php 

/* 
Template Name: De Antonio D28 Open Template
*/

get_header();

?>

<section class="page-template-DeAntonioD28Crusier">
<section class="page-template-DeAntonioD36Open">

<?php
if (have_rows('first_section')) :
    while (have_rows('first_section')) : the_row();
        if (get_row_layout() == "all_content") :
?>
<div class="hero-video-sec">
        <div class="video-part">
            <img src="<?= get_sub_field('video_image_1'); ?>" class="excep-desk-33" alt="">
            <img src="<?= get_sub_field('video_image_2'); ?>" class="excep-phone-33" alt="">
        </div>
        <div class="nv-logo">
            <img src="<?= get_sub_field('logo'); ?>" alt="">
        </div>
        <div class="model-num">
            <img src="<?= get_sub_field('model_num_image1'); ?>" class="model-numm excep-desk-33" alt="">
            <img src="<?= get_sub_field('model_num_image2');?>" alt="" class="excep-phone-33">
        </div>
    </div>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('second_area')) :
    while (have_rows('second_area')) : the_row();
        if (get_row_layout() == "all_content") :
?>
    <section class="second-sec targa-40-first">
        <div class="row" data-aos="zoom-in-up">
            <div class="col-12 text-center">
                <div class="logo-tile">
                    <img src="<?= get_sub_field('image'); ?>" alt="">
                    <h1><?= get_sub_field('heading'); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <div class="headinigg">
                    <h2><?= get_sub_field('heading2'); ?></h2>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
                <div class="main-cont">
                 <?= get_sub_field('content'); ?>
                </div>
            </div>
        </div>
    </section>
<?php
        endif;
    endwhile;
endif;
?>


<!-- ========== FOR DEVELOPER - Make this section dynamic in such a way that both video and image can be uploaded  ========== -->

<section class="targa-main-img" data-aos="zoom-in-up">
        <img src="<?// the_field('video_targa');?>" class="img-fluid" alt="">
        <video src="<?= get_field('video_targa');?>" playsinline muted="" loop="" autoplay=""></video>
</section>
<?php
    if (have_rows('luxury_content')) :
      while (have_rows('luxury_content')) : the_row();
        if (get_row_layout() == "all_content") :
?>
    <section class="luxuray-social second-sec">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <div class="headinigg">
                    <h2><?= get_sub_field('heading_luxery'); ?></h2>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
                <div class="main-cont">
                    <?= get_sub_field('content_luxery'); ?>
                </div>
            </div>
        </div>
    </section>
 <?php
      endif;
    endwhile;
 endif;
 ?> 

<?php
    if (have_rows('targa_gallery_section')) :
      while (have_rows('targa_gallery_section')) : the_row();
        if (get_row_layout() == "all_content") :
?>
    <section class="targa-gallery second-sec">
        <div class="gallery-par">
            <div class="gallery-l" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_left_1'); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="gallery-r" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_right_1'); ?>" class="img-fluid circle-phn" alt="">
                </div>
            </div>
        </div>
        <div class="gallery-par">
            <div class="gallery-l" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                </div>
            </div>
            <div class="gallery-r" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_right_2'); ?>" class="img-fluid excp-2" alt="">
                </div>
            </div>
        </div>
    </section>
 <?php
      endif;
    endwhile;
 endif;
 ?> 

 <?php
    if (have_rows('luxury_content_2')) :
      while (have_rows('luxury_content_2')) : the_row();
        if (get_row_layout() == "all_content") :
  ?>
    <section class="luxuray-social second-sec">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <div class="headinigg">
                    <h2><?= get_sub_field('heading_luxery2'); ?></h2>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
                <div class="main-cont">
                   <?= get_sub_field('content_luxery2'); ?>
                </div>
            </div>
        </div>
    </section>
 <?php
      endif;
    endwhile;
 endif;
 ?> 

<?php
    if(have_rows('targa_gallery_2_section')):
        while(have_rows('targa_gallery_2_section')): the_row();
            if(get_row_layout() =='all_content'):
?>
    <section class="targa-gallery second-sec">
        <div class="gallery-par">
            <div class="gallery-l" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_left_1'); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="gallery-r" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_right_1'); ?>" class="img-fluid circle-phn" alt="">
                </div>
            </div>
        </div>
        <div class="gallery-par">
            <div class="gallery-l" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                </div>
            </div>
            <div class="gallery-r" data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('image_right_2'); ?>" class="img-fluid excp-2" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
      endif;
    endwhile;
 endif;
?> 

    <section class="targa-main-img spec-img-except" data-aos="zoom-in-up">
        <img src="<?= the_field('de_antonio_main_image_section_copy'); ?>" class="model-numm excep-desk-33" alt="">
        <img src="<?= the_field('de_antonio_main_image_section'); ?>" alt="" class="excep-phone-33">
    </section>

    <section class="targa-main-img spec-img-except bg-custom" data-aos="zoom-in-up">

        <div class="row">
            <div class="col-12">
                <h2><?php the_field('specification_heading');?></h2>
            </div>
        </div>

        <div class="spec-circle">
            <div class="spec-circle-info">
                <ul>
                    <?php
                     if(have_rows('specification_1')):
                        while(have_rows('specification_1')): the_row();
                    ?>

                    <li><?php the_sub_field('specification_list');?></li>

                    <?php 
                        endwhile;
                      endif;
                    ?>
                </ul>
            </div>
            <div class="spec-circle-info">
                <ul>
                    <?php
                     if(have_rows('specification_2')):
                        while(have_rows('specification_2')): the_row();
                    ?>
                    <li><?php the_sub_field('specification_list2');?></li>
                    <?php 
                        endwhile;
                      endif;
                    ?>
                </ul>
            </div>
        </div>

    </section>


    <section class="de-antonio-brochure">
    <a href="<?= get_field('download_pdf_link');?>" target="_blank"><?= get_field('download_pdf');?></a>
</section>


<section class="new-spec" data-aos="zoom-in-up">
    <div class="row">
        <div class="col-md-6">
        <div class="spec-d">
                <ul class="spec-detail">
                    <?php
                     if(have_rows('new_space1')):
                        while(have_rows('new_space1')): the_row();
                    ?>
                    <li><?php the_sub_field('specification_list1');?></li>
                    <?php 
                        endwhile;
                      endif;
                    ?> 
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="spec-d">
                <ul class="spec-detail">
                <?php
                    if(have_rows('new_space_2')):
                      while(have_rows('new_space_2')): the_row();
                ?>
                <li><?php the_sub_field('specification_list2');?></li>
                <?php 
                    endwhile;
                  endif;
                ?>
                </ul>
            </div>
        </div>
    </div>
</section>


 </section>
 </section>
<?php get_footer(); ?>