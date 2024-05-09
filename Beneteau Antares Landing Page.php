<?php

/* 
Template Name: Beneteau Antares Landing Page Template
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
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                    <img src="<?= get_sub_field('mobile_image'); ?>" class="excep-phone-33" alt="">
                </div>
                <div class="nv-logo">
                    <img src="<?= get_sub_field('nv_logo'); ?>" alt="">
                </div>
            </div>
<?php
        endif;
    endwhile;
endif;
?>

<div class="main-logo-img" data-aos="zoom-in-up">
    <img src="<?= the_field('image_boats'); ?>" alt="">
</div>


<div class="brand-info" data-aos="zoom-in-up">
    <h3><?= the_field('heading_boats'); ?></h3>
    <?= the_field('content_boats'); ?>
</div>

<?php
if (have_rows('antares_details')) :
    while (have_rows('antares_details')) : the_row();
        if (get_row_layout() == 'section_one') :
?>
            <div class="d-main-section">
                <div class="content-sec" data-aos="zoom-in-up">
                    <h2><?= get_sub_field('heading_pnl1'); ?></h2>
                    <h3><?= get_sub_field('sub_heading'); ?></h3>
                    <?= get_sub_field('paragraph_pnl1'); ?>
                </div>
                <div class="row">
                    <?php
                    if (have_rows('images')) :
                        while (have_rows('images')) : the_row(); ?>
                            <div class="col-lg-6 col-md-12" data-aos="fade-up">
                                <a href="#">
                                    <div class="list-sec">
                                        <div class="main-image-circle">
                                            <a href="<?= the_sub_field('image_link'); ?>"><img src="<?= the_sub_field('image-sec1'); ?>" alt=""></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        <?php elseif (get_row_layout() == 'section_two') : ?>
            <div class="d-main-section">
                <div class="content-sec" data-aos="zoom-in-up">
                    <h2><?= get_sub_field('heading_pnl2'); ?></h2>
                    <h3><?= get_sub_field('sub_heading_pnl2'); ?></h3>
                    <?= get_sub_field('paragraph_pnl2'); ?>
                </div>
                <div class="row axz">
                    <?php
                    if (have_rows('images_pnl2')) :
                        while (have_rows('images_pnl2')) : the_row();
                    ?>
                            <div class="col-lg-6 col-md-12" data-aos="fade-up">
                                <a href="#">
                                    <div class="list-sec">
                                        <div class="main-image-circle">
                                            <a href="<?= the_sub_field('image_link'); ?>"><img src="<?= the_sub_field('image-sec1'); ?>" alt=""></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
<?php
        endif;
    endwhile;
endif;
?>


<?php get_footer(); ?>





<?php get_footer(); ?>