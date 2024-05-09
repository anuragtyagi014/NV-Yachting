<?php

/* 
Template Name: NV Windy 28 Template
*/

get_header();

?>
<?php
if (have_rows('banner_area')) :
    while (have_rows('banner_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <div class="hero-video-sec">
                <div class="video-part">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                    <img src="<?= get_sub_field('phone_image'); ?>" class="excep-phone-33" alt="">
                </div>
                <div class="nv-logo">
                    <img src="<?= get_sub_field('logo'); ?>" alt="">
                </div>
                <div class="model-num">
                    <img src="<?= get_sub_field('model_number_image'); ?>" class="model-numm" alt="">
                </div>
            </div>
        <?php
        endif;
    endwhile;
endif;

if (have_rows('main_logo_image_area')) :
    while (have_rows('main_logo_image_area')) : the_row();
        if (get_row_layout() == 'all_content') :
        ?>
            <div class="main-logo-img" data-aos="zoom-in-up">
            <div class="main-logo-flex">
            <img src="<?= get_sub_field('image'); ?>" alt="">
                <p> <?= get_sub_field('text1'); ?> <strong><?= get_sub_field('strong_text'); ?> </strong><?= get_sub_field('text2'); ?></p>
            </div>
        </div>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('brand_info_area')) :
    while (have_rows('brand_info_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <div class="brand-info" data-aos="zoom-in-up">
                <?= get_sub_field('para1'); ?>
                <?= get_sub_field('para2'); ?>
            </div>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('main_image_area')) :
    while (have_rows('main_image_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="targa-main-img" data-aos="zoom-in-up">
                <img src="<?= get_sub_field('image'); ?>" alt="">
            </section>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('brand_info_area_2')) :
    while (have_rows('brand_info_area_2')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

            <div class="brand-info b28" data-aos="zoom-in-up">
                <?= get_sub_field('para'); ?>
            </div>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('gallery_area')) :
    while (have_rows('gallery_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

            <section class="targa-gallery b28">
                <div class="gallery-par">
                    <div class="gallery-l" data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_left_1'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="gallery-r" data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_right_1'); ?>" class="img-fluid circle-phn" alt="">
                        </div>
                    </div>
                </div>
                <div class="gallery-par">
                    <div class="gallery-l" data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                        </div>
                    </div>
                    <div class="gallery-r" data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_right_2'); ?>" class="img-fluid excp-2" alt="">
                        </div>
                    </div>
                </div>
            </section>

<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('interior_design_area')) :
    while (have_rows('interior_design_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="luxuray-social second-sec">
                <div class="row">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="headinigg">
                            <h2><?= get_sub_field('heading'); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="fade-down">
                        <div class="main-cont">
                            <?= get_sub_field('para'); ?>
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('gallery_area_2')) :
    while (have_rows('gallery_area_2')) : the_row();
        if (get_row_layout() == 'all_content') :
?>


            <section class="targa-gallery b28">
                <div class="gallery-par">
                    <div class="gallery-l"  data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_left_1'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="gallery-r"  data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_right_1'); ?>" class="img-fluid circle-phn" alt="">
                        </div>
                    </div>
                </div>
                <div class="gallery-par">
                    <div class="gallery-l"  data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                        </div>
                    </div>
                    <div class="gallery-r"  data-aos="zoom-in-up">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_right_2'); ?>" class="img-fluid excp-2" alt="">
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('specification_area')) :
    while (have_rows('specification_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

            <section class="new-spec">
                <div class="row">
                    <div class="col-md-6"  data-aos="fade-up">
                        <div class="sing-img">
                            <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                            <img src="<?= get_sub_field('phone_image'); ?>" class="excep-phone-33" alt="">
                        </div>
                    </div>
                    <div class="col-md-6"  data-aos="fade-down">
                        <h2><?= get_sub_field('heading'); ?></h2>
                           <h6 class="windy-new-brochure"><a href="<?php the_sub_field('download_pdf_link');?>" target="_blank"><?php the_sub_field('download_pdf');?></a></h6>
                        <div class="spec-d">
                            <ul class="spec-detail">
                                <?php foreach (get_sub_field('list_content') as $lists) : ?>
                                    <li><strong><?= $lists['title']; ?></strong> <?= $lists['value']; ?> </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php get_footer(); ?>