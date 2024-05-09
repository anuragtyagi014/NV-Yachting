<?php

/* 
Template Name: Fairline Template
*/

get_header();

?>


<div class="hero-video-sec">
    <div class="video-part">
        <img src="<?php the_field('banner_image'); ?>" alt="">
    </div>
    <div class="nv-logo">
        <img src="<?php the_field('banner_logo'); ?>" alt="">
    </div>
</div>


<div class="main-logo-img" data-aos="zoom-in-up">
    <img src="<?php the_field('main_logo'); ?>" alt="">
</div>
<?php if (have_rows('section_1')) : ?>
    <?php while (have_rows('section_1')) : the_row(); ?>
        <?php if (get_row_layout() == 'details_layer1') : ?>
            <div class="d-main-section">
                <div class="content-sec" data-aos="zoom-in-up">
                    <h1 class="firline"><?php the_sub_field('heading_pnl1'); ?></h1>
                    <h3><?php the_sub_field('sub_heading'); ?></h3>
                    <p> <?php the_sub_field('paragraph_pnl1'); ?></p>
                </div>
                <div class="row">
                    <?php if (have_rows('images')) : ?>
                        <?php while (have_rows('images')) : the_row(); ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="list-sec" data-aos="fade-up">
                                    <div class="main-image-circle">
                                        <a href="<?php the_sub_field('fairline-img-url'); ?>">
                                            <img src="<?php the_sub_field('image-sec1'); ?>" alt=""></a>
                                    </div>
                                    <div class="d-feature">
                                        <h4><?php the_sub_field('feature'); ?></h4>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

        <?php elseif (get_row_layout() == 'details_layer2') : ?>


            <div class="d-main-section">
                <div class="content-sec" data-aos="zoom-in-up">
                    <h1><?php the_sub_field('heading_pnl1'); ?></h1>
                    <h3><?php the_sub_field('sub_heading'); ?></h3>
                    <p class="targa-para"><?php the_sub_field('paragraph_pnl1'); ?></p>
                </div>
                <div class="row">
                    <?php if (have_rows('images')) : ?>
                        <?php while (have_rows('images')) : the_row(); ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="list-sec" data-aos="fade-up">
                                    <div class="main-image-circle">
                                        <a href="<?php the_sub_field('fairline-img-url'); ?>">
                                            <img src="<?php the_sub_field('image-sec1'); ?>" alt=""></a>
                                    </div>
                                    <div class="d-feature">
                                        <h4><?php the_sub_field('feature'); ?></h4>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

        <?php elseif (get_row_layout() == 'details_layer3') : ?>

            <div class="d-main-section d-antino-except-sec">
                <div class="content-sec" data-aos="zoom-in-up">
                    <h1><?php the_sub_field('heading_pnl1'); ?></h1>
                </div>
                <div class="row f-c">

                    <div class="col-lg-6 col-md-12">
                        <div class="list-sec" data-aos="fade-up">
                            <div class="main-image-circle">
                                <a href="<?php the_sub_field('single_img_link'); ?>">
                                    <img src="<?php the_sub_field('single_image'); ?>" alt=""></a>
                            </div>
                            <div class="d-feature">
                                <h4><?php the_sub_field('feature'); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 except-cont-sec">
                        <div class="content-sec" data-aos="zoom-in-up">
                            <h3><?php the_sub_field('sub_heading'); ?></h3>
                            <p><?php the_sub_field('paragraph_pnl1'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if (have_rows('images')) : ?>
                        <?php while (have_rows('images')) : the_row(); ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="list-sec" data-aos="fade-up">
                                    <div class="main-image-circle">
                                        <a href="<?php the_sub_field('fairline-img-url'); ?>">
                                            <img src="<?php the_sub_field('image-sec1'); ?>" alt=""></a>
                                    </div>
                                    <div class="d-feature">
                                        <h4><?php the_sub_field('feature'); ?></h4>
                                    </div>
                                </div>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

        <?php elseif (get_row_layout() == 'details_layer4') : ?>



            <div class="d-main-section d-antino-except-sec">
                <div class="content-sec" data-aos="zoom-in-up">
                    <h1><?php the_sub_field('heading_pnl1'); ?></h1>
                </div>
                <div class="row f-c">
                    <div class="col-lg-6 col-md-12">
                        <div class="list-sec" data-aos="fade-up">
                            <div class="main-image-circle">
                                <a href="<?php the_sub_field('fairline-img-url'); ?>"><img src="<?php the_sub_field('single_image'); ?>" alt=""></a>
                            </div>
                            <div class="d-feature">
                                <h4><?php the_sub_field('feature'); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 except-cont-sec">
                        <div class="content-sec" data-aos="zoom-in-up">
                            <h3><?php the_sub_field('sub_heading'); ?></h3>
                            <p><?php the_sub_field('paragraph_pnl1'); ?></p>

                        </div>
                    </div>

                </div>

            </div>


        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>