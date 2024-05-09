<?php 

/* 
Template Name: NV Beneteau Flyer 8 Sundeck Template
*/

get_header();

?>

<section class="page-template-NVBeneteauFlyer9Sundeck">

    <section class="page-template-NVBeneteauFlyer10">

        <section class="page-template-NVBeneteauAntares7">


        <?php
            if (have_rows('first_section_content')) :
                while (have_rows('first_section_content')) : the_row();
                    if (get_row_layout() == 'all_content') :
            ?>
            <div class="hero-video-sec">
                <div class="video-part">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                    <img src="<?= get_sub_field('mobile_image'); ?>" class="excep-phone-33" alt="">
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
                            <!-- <h1>FLYER <strong>8</strong> SUNDECK</h1> -->
                             <?= get_sub_field('heading'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="headinigg">
                           <!--  <h2>ELEGANCE,<br> VERSATILITY<br> AND<br> COMFORT<br> FOR FUN<br> DAYS OUT ON<br> THE<br> WATER</h2> -->
                           <?= get_sub_field('heading_2'); ?>
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="fade-down">
                        <div class="main-cont">
                            <!-- <p>Stylish and comfortable, the Flyer 8 Sundeck displays the character<br> and elegance that typifies this new generation of BENETEAU<br> dayboats. With great livability and panoramic views, it benefits from<br> all BENETEAU’s
                                expertise in terms of fixtures and fittings. The ideal<br> host for day excursions, with a comfortable cabin and two sunbeds,<br> an exceptional tour de force for an 8-meter (almost 27’) outboard.</p>
                            <p>Equipped with SEANAPPS</p>
                            <p>The easiest way to keep your boat safe and ready to cruise anytime!<br> The new SEANAPPS app is the ultimate solution to help you indulge<br> your passion for boating. With the touch of your finger, you can<br> easily connect,
                                monitor and order services for your boat – from<br> routine maintenance, to requesting a wash or fuel or having us<br> complete a repair.</p> -->
                                <?= get_sub_field('main_content'); ?>
                        </div>
                    </div>

            </section>
            <?php
                    endif;
                endwhile;
            endif;
            ?>

            <section class="targa-main-img" data-aos="zoom-in-up">
                <img src="<?= the_field('image_middle'); ?>" class="img-fluid" alt="">
                <!-- <video src="https://nvyachting.com/wp-content/uploads/2022/12/BENETEAU-Flyer-9-SUNdeck-1.mp4" autoplay muted loop playsinline></video> -->
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
                    <div class="gallery-l">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_image_left'); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="gallery-r">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_image_right'); ?>" class="img-fluid circle-phn" alt="">
                        </div>
                    </div>
                </div>
                <div class="gallery-par">
                    <div class="gallery-l">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                        </div>
                    </div>
                    <div class="gallery-r">
                        <div class="gallery-imgg">
                            <img src="<?= get_sub_field('gallery_image_right_2'); ?>" class="img-fluid excp-2" alt="">
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
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="headinigg">
                            <?= get_sub_field('heading'); ?>
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="fade-down">
                        <div class="main-cont">
                            <!-- <p>The Flyer 8 Sundeck has a very comfortable cabin with all the fixtures<br> and fittings needed for enjoyable day trips. Equipped with a benchseat<br> and a table that converts into a large bed, separate toilets and an easily<br>                                accessible fridge, it offers its passengers a high level of comfort.</p> --><?= get_sub_field('main_content'); ?>
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
                <img src="<?= the_field('image_section_content');  ?>" class="img-fluid" alt="">
                <!-- <video src="https://nvyachting.com/wp-content/uploads/2022/12/BENETEAU-Flyer-9-SUNdeck-1.mp4" autoplay muted loop playsinline></video> -->
            </section>



<?php
if (have_rows('deck_desktop_plan_content')) :
    while (have_rows('deck_desktop_plan_content')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
            <section class="desk-tabs" data-aos="zoom-in-up">
                <h2><?= get_sub_field('heading_tab'); ?></h2>

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
                        <button class="nav-link" id="pills-contact2-tab" data-toggle="pill" data-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?= get_sub_field('button_4'); ?></button>
                    </li>


                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="boat-targa-img">
                            <img src="<?= get_sub_field('image_1'); ?>" class="img-fluid" alt="">
                            <div class="model-e-cont">
                                <h4> <?= get_sub_field('heading_1'); ?></h4>
                                <p><?= get_sub_field('content_1'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="boat-targa-img">
                            <img src="<?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
                            <div class="model-e-cont">
                                <h4> <?= get_sub_field('heading_2'); ?></h4>
                                <p><?= get_sub_field('content_2'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="boat-targa-img">
                            <img src="<?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
                            <div class="model-e-cont">
                                <h4> <?= get_sub_field('heading_3'); ?></h4>
                                <p><?= get_sub_field('content_3'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
                        <div class="boat-targa-img">
                            <img src="<?= get_sub_field('image_4'); ?>" class="img-fluid" alt="">
                            <div class="model-e-cont">
                                <h4><?= get_sub_field('heading_4'); ?></h4>
                                <p><?= get_sub_field('content_4'); ?></p>
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
              if(have_rows('deck_plan_section_content')):
                while(have_rows('deck_plan_section_content')): the_row();
                    if(get_row_layout('all_content')):
            ?>
            <section class="phone-dek" data-aos="zoom-in-up">
                <div class="row">
                    <div class="col-12">
                        <h2><?= get_sub_field('heading_mobs'); ?></h2>
                    </div>
                </div>
                <div class="desk-tabs-phne" data-aos="zoom-in-up">
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
                    <!-- <div class="tabs-info-phone">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/12/Image-110-2.png" class="img-fluid" alt="">
                        <div class="model-e-cont">
                            <h4>2 Sunbeds </h4>
                            <p>The convertible aft benchseat and the front sunbed with two reclining seats give the Flyer 8 SUNdeck relaxation areas that are not usually found on an 8-metre speedboat.</p>
                        </div>
                    </div>
                    <div class="tabs-info-phone">

                        <img src="https://nvyachting.com/wp-content/uploads/2022/12/Image-108.png" class="img-fluid" alt="">
                        <div class="model-e-cont">
                            <h4>Smart Walkaround </h4>
                            <p>On the port side, the Smart Walkaround gangway allows safe, easy passage on deck.</p>
                        </div>
                    </div>
                    <div class="tabs-info-phone">

                        <img src="https://nvyachting.com/wp-content/uploads/2022/12/Image-136.png" class="img-fluid" alt="">
                        <div class="model-e-cont">
                            <h4>Comfortable Cabin </h4>
                            <p>Well equipped and well ventilated thanks to its openings, the Flyer 8 SUNdeck offers a comfortable space with great livability, ideal for resting at any time of day.</p>
                        </div>
                    </div>
                    <div class="tabs-info-phone">

                        <img src="https://nvyachting.com/wp-content/uploads/2022/12/Image-137.png" class="img-fluid" alt="">
                        <div class="model-e-cont">
                            <h4>Wide Range of Accessories</h4>
                            <p>T-top, canvas shade cloth, water-ski pole, fully equipped fishing station (replacing the rear benchseat) the Flyer 8 SUNdeck can be configured to meet all day boating programs.</p>
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
  if(have_rows('family_cruises_section_content')):
    while(have_rows('family_cruises_section_content')): the_row();
        if(get_row_layout('all_content')):
?>
            <section class="signature-sec" data-aos="zoom-in-up">
                <div class="sign-sec">
                    <div class="sing-img">
                        <img src="<?= get_sub_field('image_layout'); ?>" class="excep-desk-33" alt="">
                        <img src="<?= get_sub_field('mobile_image');?>" class="excep-phone-33" alt="">
                    </div>
                    <div class="sign-cont">
                        <h3>LAYOUT</h3>
                        <ul>
                            <?php 
                             if(have_rows('main_content')):
                              while(have_rows('main_content')): the_row();?>
                                <li> <i class="fas fa-circle"></i>&nbsp;<?= get_sub_field('title_layout'); ?></li>
                             <?php 
                              endwhile;
                              endif;
                            ?>
                           <!--  <li> <i class="fas fa-circle"></i>&nbsp;Modular cockpit</li>
                            <li> <i class="fas fa-circle"></i>&nbsp;Easy to move around</li>

                            <li> <i class="fas fa-circle"></i>&nbsp;2 large sunbeds with reclining backrests </li>
                            <li> <i class="fas fa-circle"></i>&nbsp;Rigid T-Top</li> -->
                        </ul>
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
            <section class="new-spec" data-aos="zoom-in-up">
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
                                  <li><strong><?= $dim_det['label']; ?></strong> : <?= $dim_det['value']; ?> </li>
                                  <?php if ($i != count(get_sub_field('dimension_detail_left'))) : ?>
                                  <?php endif; ?>
                                 <?php $i++;
                                endforeach; ?>
                                <!-- <li><strong>Length overall</strong> : 26’10” </li>

                                <li><strong>Hull Beam</strong> : 8’4” </li>

                                <li><strong>Fuel tank capacity</strong> : 340 L / 90 US Gal </li>

                                <li><strong>Fresh water capacity</strong> : 26 US Gal </li>

                                <li><strong>Engine Power (Hp)</strong> : 350 CV / HP </li>

                                <li><strong>CE Certification</strong> : C10 / D10 </li> -->

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




        </section>
    </section>
</section>
<?php get_footer(); ?>