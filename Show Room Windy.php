<?php 

/* 
Template Name: Show Room Windy Template
*/

get_header();

?>


<div class="hero-video-sec">
    <div class="video-part">
        <img src="<?php the_field('banner_image'); ?>" class="excep-desk-33" alt="">
        <img src="<?php the_field('mobile_banner'); ?>" class="excep-phone-33" alt="">
    </div>
    <div class="nv-logo">
        <img src="<?php the_field('banner_logo'); ?>" alt="">
    </div>
</div>


<?php if( have_rows('section_1') ): ?>
    <?php while( have_rows('section_1') ): the_row(); ?>
        <?php if( get_row_layout() == 'section_one' ): ?>
<div class="main-logo-img" data-aos="zoom-in-up">
    <img src="<?php the_sub_field('windy_logo'); ?>" alt="">
</div>
<div class="brand-info" data-aos="zoom-in-up">
    <h3><?php the_sub_field('heading_pnl1'); ?></h3>
    <?php the_sub_field('paragraph_pnl1'); ?>
</div>
<div class="d-main-section">
    <div class="content-sec">
        <h2><?php the_sub_field('heading_2'); ?></h2>
    </div>
    <div class="row">
        <?php if( have_rows('images') ): ?>
         <?php while( have_rows('images') ): the_row(); ?>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec" style="height: 380px;" data-aos="fade-up">
                    <div class="main-image-circle">

                        <a href="<?php the_sub_field('link_windy');?>">
                            <img src="<?php the_sub_field('image-sec1'); ?>" alt="">
                        </a>
                    </div>
                </div>
            </a>
        </div>
     <?php endwhile; ?>
     <?php endif;?>
    </div>
</div>
 <?php 
     endif;
    endwhile;
  endif; 
 ?>


<?php get_footer(); ?>