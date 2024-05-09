<?php 

/* 
Template Name: Show Room de Antonio Template
*/

get_header();

?>

<section class="page-template-ShowRoomWindy">

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
endif; ?>

    <div class="main-logo-img" data-aos="zoom-in-up">
        <img src="<?= the_field('image_boats');?>" alt="">
    </div>


    <div class="brand-info" data-aos="zoom-in-up">
        <h3><?= the_field('heading_boats'); ?></h3>        
        <?= the_field('content_boats');?>
    </div>

<div class="d-main-section">
    <div class="content-sec" data-aos="zoom-in-up">
        <h2><?= the_field('the_full_range_section_main_heading'); ?></h2>
    </div>
    <div class="row">
        <?php if( get_field('the_full_range_list') ): ?>
            <?php while( the_repeater_field('the_full_range_list') ): ?>
            
                
                <div class="col-lg-6 col-md-12">
                    <a href="<?php the_sub_field('link'); ?>">
                        <div class="list-sec" style="height: 380px;" data-aos="fade-up">
                            <div class="main-image-circle">

                                <a href="<?php the_sub_field('link'); ?>">
                                    <img src="<?php the_sub_field('image'); ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

</section>
<?php get_footer(); ?>