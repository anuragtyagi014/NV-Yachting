<?php 

/* 
Template Name: Squadron 58 Template
*/

get_header();

?>


<?php
if (have_rows('first_section_content')) :
    while (have_rows('first_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<div class="hero-video-sec">
    <div class="video-part">
        <img src="<?= get_sub_field('desktop_image'); ?>" alt="">
    </div>
    <div class="nv-logo">
        <img src="<?= get_sub_field('nv_logo'); ?>" alt="">
    </div>
    <div class="model-num">
        <img src="<?= get_sub_field('model_number_image'); ?>" class="model-numm" alt="">
    </div>
</div>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('second_section_content')) :
    while (have_rows('second_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="second-sec targa-40-first">
    <div class="row" data-aos="zoom-in-up">
        <div class="col-12 text-center">
            <div class="logo-tile">
                <img src="<?= get_sub_field('image'); ?>" alt="">
                <?= get_sub_field('heading'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" data-aos="fade-up">
            <div class="headinigg">
                <?= get_sub_field('heading_2'); ?>
            </div>
        </div>
        <div class="col-md-6" data-aos="fade-down">
            <div class="main-cont">
          <?= get_sub_field('main_content'); ?>
            </div>
        </div>
    </div>
</section>

<?php
        endif;
    endwhile;
endif;
?>

<section class="targa-main-img" data-aos="zoom-in-up">
    <video src="<?= the_field('image_middle'); ?>" type="video/mp4" playsinline autoplay muted loop></video>
</section>

<?php
if (have_rows('power_section_content')) :
    while (have_rows('power_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="luxuray-social second-sec">
    <div class="row">
        <div class="col-md-5" data-aos="fade-up">
            <div class="headinigg">
                <?= get_sub_field('heading'); ?>
            </div>
        </div>
        <div class="col-md-7" data-aos="fade-down">
            <div class="main-cont">
            <?= get_sub_field('main_content'); ?>
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
if (have_rows('gallery_section_content')) :
    while (have_rows('gallery_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="targa-gallery second-sec">
    <div class="gallery-par">
        <div class="gallery-l" data-aos="zoom-in-up">
            <div class="gallery-imgg">
                <img src="<?= get_sub_field('gallery_image_left'); ?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="gallery-r" data-aos="zoom-in-up">
            <div class="gallery-imgg">
                <img src="<?= get_sub_field('gallery_image_right'); ?>" class="img-fluid circle-phn" alt="">
            </div>
        </div>
    </div>
    <div class="gallery-par">
        <div class="gallery-l" data-aos="zoom-in-up">
            <div class="gallery-imgg">
                <img src="<?= get_sub_field('gallery_image_right_2'); ?>" class="img-fluid circle-phn excp-1 excp-582" alt="">
            </div>
        </div>
        <div class="gallery-r" data-aos="zoom-in-up">
            <div class="gallery-imgg">
                <img src="<?= get_sub_field('gallery_image_left_2'); ?>" class="img-fluid excp-2" alt="">
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
if (have_rows('three_column_section')) :
    while (have_rows('three_column_section')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="three-cols excp-58">
    <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
            <div class="cols-img">
                <img src="<?= get_sub_field('image1'); ?>" class="img-fluid" alt="">
            </div>
            <div class="cols-info">
                <h4><?= get_sub_field('heading1'); ?></h4>
                <?= get_sub_field('para1'); ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
            <div class="cols-img">
                <img src="<?= get_sub_field('image2'); ?>" class="img-fluid" alt="">
            </div>
            <div class="cols-info">
                <h4><?= get_sub_field('heading2'); ?></h4>
                <?= get_sub_field('para2'); ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="zoom-in-up">
            <div class="cols-img">
                <img src="<?= get_sub_field('image3'); ?>" class="img-fluid" alt="">
            </div>
            <div class="cols-info">
                <h4><?= get_sub_field('heading3'); ?>
                </h4>
                <?= get_sub_field('para3'); ?>
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
if (have_rows('deck_desktop_plan_content')) :
    while (have_rows('deck_desktop_plan_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<!-- <style type="text/css">
    .page-template-Squadron-58 section.desk-tabs ul li button {
    padding-right: 5px;
    padding-left: 5px;
}
</style> -->


<section class="desk-tabs" data-aos="zoom-in-up">
    <h2><?= get_sub_field('heading') ?></h2>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= get_sub_field('button_1') ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('button_2') ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?= get_sub_field('button_3') ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-get" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('button_4') ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contacts" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?= get_sub_field('button_5') ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-gets" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('button_6') ?></button>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_1'); ?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="tab-pane fade" id="pills-get" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_4'); ?>" class="img-fluid" alt="">
            </div>
        </div>
 <div class="tab-pane fade" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_5'); ?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="tab-pane fade" id="pills-gets" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_6'); ?>" class="img-fluid" alt="">
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
if (have_rows('deck_plan_section_content')) :
    while (have_rows('deck_plan_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="phone-dek" data-aos="zoom-in-up">
    <div class="row">
        <div class="col-12">
            <h2><?= get_sub_field('heading'); ?></h2>
        </div>
    </div>
    <div class="desk-tabs-phne">
        <?php foreach (get_sub_field('tab_content') as $mobile_tab) : ?>

        <div class="tabs-info-phone">
            <h3><?= $mobile_tab['tab_text']; ?></h3>
            <img src="<?= $mobile_tab['image']; ?>" class="img-fluid" alt="">
        </div>

        <?php endforeach; ?>

    </div>
</section>

<?php
        endif;
    endwhile;
endif;
?>



<?php
if (have_rows('interior_decoration_section_content')) :
    while (have_rows('interior_decoration_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="luxuray-social second-sec excep-s-50">
    <div class="row">
        <div class="col-md-5" data-aos="fade-up">
            <div class="headinigg main-cont">
                <h2><?= get_sub_field('heading'); ?></h2>
                <?= get_sub_field('paragraph'); ?>
            </div>
        </div>
        <div class="col-md-7" data-aos="fade-down">
            <div class="main-cont-img">
                <img src="<?= get_sub_field('image_1'); ?>" alt="">
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
if (have_rows('principal_dimension_section_content')) :
    while (have_rows('principal_dimension_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="targa-boat-spec" data-aos="zoom-in-up">
    <div class="targa-dimensions">
        <div class="dimension-title">
            <h2><!-- PRINCIPAL <br> DIMENSIONS --><?= get_sub_field('heading'); ?></h2>
            <h6> <a href="<?= get_sub_field('pdf_file'); ?>" target="_blank"><?= get_sub_field('pdf_text'); ?></a></h6>
        </div>
        <div class="dimension-detail">
            <?php $i = 1;
            foreach (get_sub_field('dimension_detail_left') as $dim_det) : ?>
                <div class="dimension-sec">
                    <h5><?= $dim_det['label']; ?></h5>
                    <p><?= $dim_det['value']; ?></p>

                </div>
                <?php if ($i != count(get_sub_field('dimension_detail_left'))) : ?>
                                <hr>

                    <?php endif; ?>
                <?php $i++;
                endforeach; ?>

        </div>
        <div class="dimension-detail">
            <?php $j = 1;
            foreach (get_sub_field('dimension_detail_right') as $dim_det2) : ?>

            <div class="dimension-sec">
                <h5><?= $dim_det2['heading']; ?></h5>
                <p><?= $dim_det2['para']; ?></p>
            </div>
            <?php if ($j != count(get_sub_field('dimension_detail_right'))) : ?>
                <hr>
            <?php else : ?>
            <?php endif; ?>
            <?php $j++;
            endforeach; ?>

        </div>
    </div>
</section>

<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('engine_content')) :
    while (have_rows('engine_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

<section class="engenis-sec" data-aos="zoom-in-up">
    <div class="row">
        <div class="col-md-4">
            <div class="engine-performence excp-68">
                 <?= get_sub_field('heading'); ?>
                <h6> <a href="<?= get_sub_field('pdf_file'); ?>" target="_blank"><?= get_sub_field('sub_heading'); ?></a></h6>
                <p><?= get_sub_field('paragraph'); ?></p>
                <p><?= get_sub_field('paragraph_2'); ?></p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="engine-img">
                <img src="<?= get_sub_field('desktop_image'); ?>" class="engine-desk" class="img-fluid" alt="">
                <img src="<?= get_sub_field('phone_image'); ?>" class="engine-phone" alt="">
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