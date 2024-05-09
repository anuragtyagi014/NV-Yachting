<?php 

/* 
Template Name: NV Beneteau Antares 9 Template
*/
?>
  
<?php
function addonClass(){
    return "page-template-NVBeneteauAntares8Fishing";
}
get_header();
4
?>

  

<?php
if (have_rows('first_section_content')) :
    while (have_rows('first_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<div class="hero-video-sec">
    <div class="video-part">
        <img src="<?= get_sub_field('mobile_image'); ?>" class="excep-desk-33" alt="">
        <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-phone-33" alt="">
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
    <div class="row exc-8">
        <div class="col-md-5" data-aos="fade-up">
            <div class="headinigg">
               <?= get_sub_field('heading_2'); ?>
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



<section class="targa-main-img" data-aos="zoom-in-up">
    <?php if(get_field('file_type') == 'video'): ?>
    <video src="<?= the_field('file'); ?>" autoplay muted loop playsinline></video>
<?php endif;?>
    <?php if(get_field('file_type') == 'image'): ?>
    <img src="<?= the_field('file'); ?>" alt="">
<?php endif;?>
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
                <img src="<?= get_sub_field('gallery_image_right_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
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
if (have_rows('interior_design_section_content_')) :
    while (have_rows('interior_design_section_content_')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="luxuray-social second-sec">
    <div class="row">
        <div class="col-md-5" data-aos="fade-up">
            <div class="headinigg ex-br-1">
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
if (have_rows('gallery_section_content_int')) :
    while (have_rows('gallery_section_content_int')) : the_row();
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
                <img src="<?= get_sub_field('gallery_image_right_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
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
if (have_rows('family_cruises_section_content')) :
    while (have_rows('family_cruises_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="luxuray-social second-sec">
    <div class="row">
        <div class="col-md-5" data-aos="fade-up">
            <div class="headinigg ex-br-2">
                <?= get_sub_field('heading'); ?>
            </div>
        </div>
        <div class="col-md-7" data-aos="fade-down">
            <div class="main-cont ex-br-2">
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
if (have_rows('deck_desktop_plan_content')) :
    while (have_rows('deck_desktop_plan_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="desk-tabs" data-aos="zoom-in-up">
    <!-- <h2>HIGHLIGHTS</h2> -->

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= get_sub_field('button_1'); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('button_2'); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?= get_sub_field('button_3'); ?></button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_1'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_1'); ?></h4>
                    <p><?= get_sub_field('content_1'); ?></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_2'); ?></h4>
                    <p><?= get_sub_field('content_2'); ?></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_3'); ?></h4>
                    <p><?= get_sub_field('content_3'); ?></p>
                </div>
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
            <h2><?= get_sub_field('heading_mob'); ?></h2>
        </div>
    </div>
    <div class="desk-tabs-phne">
        <?php 
          if(have_rows('tab_content')):
            while(have_rows('tab_content')): the_row();?>
        <div class="tabs-info-phone">
            <img src="<?= get_sub_field('image'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                <h4><?= get_sub_field('tab_text'); ?></h4>
                <p><?= get_sub_field('content_mob'); ?></p>
            </div>
        </div>
        <?php
         endwhile;
        endif;
        ?>
        <!-- <div class="tabs-info-phone">

            <img src="<//?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                <h4><//?= get_sub_field('heading_2'); ?></h4>
                <p><//?= get_sub_field('content_2'); ?></p>
            </div>
        </div>
        <div class="tabs-info-phone">

            <img src="<//?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                <h4><//?= get_sub_field('heading_3'); ?> </h4>
                <p><//?= get_sub_field('content_3'); ?></p>
            </div>
        </div> -->
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
<section class="new-spec" data-aos="zoom-in-up">
<div class="row">
    <div class="col-md-6">
        <h2><?= get_sub_field('heading'); ?></h2>
        <h6 class="new-download-broch"><a href="<?php the_sub_field('download_pdf_link');?>" target="_blank"><?php the_sub_field('download_pdf');?></a></h6>
    </div>
    <div class="col-md-6">
        <div class="spec-d">
          <ul class="spec-detail">
             <?php $i = 1;
              foreach (get_sub_field('dimension_detail_left') as $dim_det) : ?>
            <li><strong><?= $dim_det['label']; ?></strong> <?= $dim_det['value']; ?> </li>
              <?php if ($i != count(get_sub_field('dimension_detail_left'))) : ?>
              <?php endif; ?>
             <?php $i++;
            endforeach; ?>
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
