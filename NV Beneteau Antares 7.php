<?php 

/* 
Template Name: NV Beneteau Antares 7 Template
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
    <video src="<?= the_field('video_middle'); ?>" playsinline muted loop autoplay></video>
</section>

<?php
if (have_rows('power_section_content')) :
    while (have_rows('power_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="luxuray-social second-sec">
    <div class="row">
        <div class="col-md-6" data-aos="fade-up">
            <div class="headinigg">
                <?= get_sub_field('heading'); ?>
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

<section class="luxuray-social second-sec ecep-f-33">
    <div class="row">
        <div class="col-md-6" data-aos="fade-up">
            <div class="headinigg">
                <?= get_sub_field('heading'); ?>
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
if (have_rows('deck_desktop_plan_content')) :
    while (have_rows('deck_desktop_plan_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="desk-tabs" data-aos="zoom-in-up">
    <h2><?= get_sub_field('heading'); ?></h2>

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
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-get" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('button_4'); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-lower-d" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('button_5'); ?></button>
        </li>

    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_1'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_1'); ?> </h4>
                    <p><?= get_sub_field('content_1'); ?></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_2'); ?> </h4>
                    <p><?= get_sub_field('content_2'); ?></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_3'); ?> </h4>
                    <p><?= get_sub_field('content_3'); ?></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-get" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
                <img src="<?= get_sub_field('image_4'); ?>" class="img-fluid" alt="">
                <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_4'); ?> </h4>
                    <p><?= get_sub_field('content_4'); ?></p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-lower-d" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="boat-targa-img">
            <img src="<?= get_sub_field('image_5'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                    <h4><?= get_sub_field('heading_5'); ?> </h4>
                    <p><?= get_sub_field('content_5'); ?></p>
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
            <h2><?= the_sub_field('heading'); ?></h2>
        </div>
    </div>
    <div class="desk-tabs-phne" >
        <?php 
          if(have_rows('tab_content')):
            while(have_rows('tab_content')): the_row();?>
        <div class="tabs-info-phone">
            <img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                    <h4><?php the_sub_field('tab_text'); ?> </h4>
                    <p><?php the_sub_field('content_mob'); ?></p>
            </div>
        </div>
         <?php 
            endwhile;
             endif;    
        ?>
       <!--  <div class="tabs-info-phone">
           
            <img src="<//?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                    <h4><//?= get_sub_field('heading_2'); ?></h4>
                    <p><//?= get_sub_field('content_2'); ?></p>
                </div>
        </div>
        <div class="tabs-info-phone">
           
            <img src="<//?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                    <h4><//?= get_sub_field('heading_3'); ?></h4>
                    <p><//?= get_sub_field('content_3'); ?></p>
                </div>
        </div>
        <div class="tabs-info//-phone">
           
            <img src="<//?= get_sub_field('image_4'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                    <h4><//?= get_sub_field('heading_4'); ?></h4>
                    <p><//?= get_sub_field('content_4'); ?></p>
                </div>
        </div>
        <div class="tabs-info-phone">
            
            <img src="<//?= get_sub_field('image_5'); ?>" class="img-fluid" alt="">
            <div class="model-e-cont">
                    <h4><//?= get_sub_field('heading_5'); ?></h4>
                    <p><//?= get_sub_field('content_5'); ?></p>
                </div>
        </div> -->
    
    </div>
</section>
<?php
     endif;
    endwhile;
endif;
?>

<section class="signature-sec" data-aos="zoom-in-up">
    <div class="sign-sec">
        <div class="sing-img">
            <img src="<?= the_field('image_1'); ?>" alt="">
        </div>
        <div class="sign-cont">
            <?= the_field('heading'); ?>
        </div>
    </div>
</section>


<?php
if (have_rows('principal_dimension_section_content')) :
    while (have_rows('principal_dimension_section_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
<section class="new-spec">
<div class="row">
    <div class="col-md-6" data-aos="fade-up">
        <h2><?= get_sub_field('heading'); ?></h2>
        <h6 class="new-download-broch"><a href="<?= get_sub_field('download_pdf_link');?>" target="_blank"><?= get_sub_field('download_pdf');?></a></h6>
    </div>
    <div class="col-md-6" data-aos="fade-down">
        <div class="spec-d">
        <ul class="spec-detail">
             <?php $i = 1;
              foreach (get_sub_field('dimension_detail_left') as $dim_det) : ?>
            <li><strong><?= $dim_det['label']; ?></strong> <?= $dim_det['value']; ?> </li>
            <?php if ($i != count(get_sub_field('dimension_detail_left'))) : ?>
            <?php endif; ?>
            <?php $i++;
            endforeach; ?>
            <!-- <li><strong>Hull Length</strong> : 21’3’’ </li>
            <li><strong>Hull Beam</strong> : 8’2’’ </li>
            <li><strong>Light displacement</strong> : 4,157 lbs </li>
            <li><strong>Fuel tank capacity</strong> : 45 US GAL </li>
            <li><strong>Fresh water capacity</strong> : 13 US Gal </li>
            <li><strong>Engine Power (Hp)</strong> : 200 HP </li>
            <li><strong> CE Certification</strong> : C8/D8 </li> -->
        </ul>
    </div></div>
</div>
</section>

<?php
        endif;
    endwhile;
endif;
?>
<?php get_footer(); ?>