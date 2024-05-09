<?php

/* 
Template Name: NV Beneteau Flyer 7 Sundeck Template
*/

get_header();

?>

<section class="page-template-NVBeneteauFlyer8Sundeck">

    <section class="page-template-NVBeneteauFlyer9Sundeck">

        <section class="page-template-NVBeneteauFlyer10">

            <section class="page-template-NVBeneteauAntares7">


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
                ?>

                <?php
                if (have_rows('second_area')) :
                    while (have_rows('second_area')) : the_row();
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
                                    <div class="col-md-5" data-aos="fade-up">
                                        <div class="headinigg">
                                            <h2><?= get_sub_field('heading_2'); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-md-7" data-aos="fade-down">
                                        <div class="main-cont">
                                            <?= get_sub_field('para'); ?>
                                        </div>
                                    </div>

                            </section>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
                <?php
                if (have_rows('main_image_area')) :
                    while (have_rows('main_image_area')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="targa-main-img" data-aos="zoom-in-up">
                                <?php if (get_sub_field('file_type') == 'image') : ?>
                                    <img src="<?= get_sub_field('file'); ?>" class="img-fluid" alt="">
                                <?php else : ?>
                                    <video src="<?= get_sub_field('file'); ?>" autoplay muted loop playsinline></video>
                                <?php endif; ?>
                            </section>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
                <?php
                if (have_rows('exterior_design_area')) :
                    while (have_rows('exterior_design_area')) : the_row();
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
                                            <?= get_sub_field('para1'); ?>
                                            <?= get_sub_field('para2'); ?>
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
                if (have_rows('main_image_area_2')) :
                    while (have_rows('main_image_area_2')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="targa-main-img" data-aos="zoom-in-up">
                                <?php if (get_sub_field('file_type') == 'image') : ?>
                                    <img src="<?= get_sub_field('file'); ?>" class="img-fluid" alt="">
                                <?php else : ?>
                                    <video src="<?= get_sub_field('file'); ?>" autoplay muted loop playsinline></video>
                                <?php endif; ?>
                            </section>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>
                <?php
                if (have_rows('interior_design_area')) :
                    while (have_rows('interior_design_area')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="luxuray-social second-sec ecep-f-33">
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
                endif;
                ?>

                <?php
                if (have_rows('main_image_area_3')) :
                    while (have_rows('main_image_area_3')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="targa-main-img" data-aos="zoom-in-up">
                                <?php if (get_sub_field('file_type') == 'image') : ?>
                                    <img src="<?= get_sub_field('file'); ?>" class="img-fluid" alt="">
                                <?php else : ?>
                                    <video src="<?= get_sub_field('file'); ?>" autoplay muted loop playsinline></video>
                                <?php endif; ?>
                            </section>
                <?php
                        endif;
                    endwhile;
                endif;
                ?>

                <?php
                if (have_rows('desk_tab_area')) :
                    while (have_rows('desk_tab_area')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="desk-tabs" data-aos="zoom-in-up">
                                <h2><?= get_sub_field('heading'); ?></h2>

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= get_sub_field('tab_1'); ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?= get_sub_field('tab_2'); ?></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?= get_sub_field('tab_3'); ?></button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="boat-targa-img">
                                            <img src="<?= get_sub_field('image_1'); ?>" class="img-fluid" alt="">
                                            <div class="model-e-cont">
                                                <h4><?= get_sub_field('heading_1'); ?></h4>
                                                <?= get_sub_field('para_1'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="boat-targa-img">
                                            <img src="<?= get_sub_field('image_2'); ?>" class="img-fluid" alt="">
                                            <div class="model-e-cont">
                                                <h4><?= get_sub_field('heading_2'); ?></h4>
                                                <?= get_sub_field('para_2'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="boat-targa-img">
                                            <img src="<?= get_sub_field('image_3'); ?>" class="img-fluid" alt="">
                                            <div class="model-e-cont">
                                                <h4><?= get_sub_field('heading_3'); ?></h4>
                                                <?= get_sub_field('para_3'); ?>
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
                if (have_rows('phone_tab_area')) :
                    while (have_rows('phone_tab_area')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="phone-dek" data-aos="zoom-in-up">
                                <div class="row">
                                    <div class="col-12">
                                        <h2><?= get_sub_field('heading'); ?></h2>
                                    </div>
                                </div>
                                <div class="desk-tabs-phne">
                                    <?php foreach (get_sub_field('phone_tab_content') as $phone_tab_content) : ?>
                                        <div class="tabs-info-phone">
                                            <img src="<?= $phone_tab_content['image']; ?>" class="img-fluid" alt="">
                                            <div class="model-e-cont">
                                                <h4><?= $phone_tab_content['heading']; ?></h4>
                                                <?= $phone_tab_content['para']; ?>
                                            </div>
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
                if (have_rows('signature_area')) :
                    while (have_rows('signature_area')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="signature-sec" data-aos="zoom-in-up">
                                <div class="sign-sec">
                                    <div class="sing-img">
                                        <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                                        <img src="<?= get_sub_field('phone_image'); ?>" class="excep-phone-33" alt="">
                                    </div>
                                    <div class="sign-cont">
                                        <h3><?= get_sub_field('heading'); ?></h3>
                                        <ul>
                                            <?php foreach (get_sub_field('list_content') as $list_content) : ?>
                                                <li> <i class="fas fa-circle"></i>&nbsp;<?= $list_content['list_text']; ?></li>
                                            <?php endforeach; ?>
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
                if (have_rows('specification_area')) :
                    while (have_rows('specification_area')) : the_row();
                        if (get_row_layout() == 'all_content') :
                ?>
                            <section class="new-spec">
                                <div class="row">
                                    <div class="col-md-6" data-aos="fade-up">
                                        <h2><?= get_sub_field('heading'); ?></h2>
                                    </div>
                                    <div class="col-md-6" data-aos="fade-down">
                                        <div class="spec-d">
                                            <ul class="spec-detail">
                                                <?php foreach (get_sub_field('list_content') as $list) : ?>
                                                    <li><strong><?= $list['title']; ?></strong> <?= $list['value']; ?> </li>
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
            </section>
        </section>
    </section>
</section>
<?php get_footer(); ?>