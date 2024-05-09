<?php 

/* 
Template Name: NV Brabus Show Room Template
*/

get_header();

?>

<section class="page-template-ShowRoomdeAntonio">


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
endif;
?>

    <div class="main-logo-img" data-aos="zoom-in-up">
        <img src="<?= the_field('image_boats'); ?>" alt="">
    </div>

    <div class="brand-info" data-aos="zoom-in-up">
        <h3><?= the_field('heading_boats'); ?></h3>
        <p><?= the_field('content_boats'); ?></p>
    </div>


<?php
if (have_rows('antares_details')) :
    while (have_rows('antares_details')) : the_row();
        if (get_row_layout() == 'section_five') :
?>

    <div class="d-main-section">
        <div class="content-sec" data-aos="zoom-in-up">
            <h2><?= get_sub_field('heading_pnl5'); ?></h2>
        </div>
        <div class="row">
        <?php
        if (have_rows('images_pnl5')) :
          while (have_rows('images_pnl5')) : the_row(); 
        ?>
            <div class="col-lg-6 col-md-12" data-aos="fade-up">
                <div class="list-sec">
                    <div class="main-image-circle">
                        <a href="<?php the_sub_field('image_link');?>">
                            <img src="<?php the_sub_field('image-sec1');?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
         <?php
          endwhile;
        endif;
        ?>   
        </div>
    </div>
<?php
        elseif (get_row_layout() == 'section_four') :
?>
  <div class="d-main-section">
    <div class="content-sec" data-aos="zoom-in-up">
        <h2><?= get_sub_field('heading_pnl4'); ?></h2>
    </div>
    <div class="row">
    <?php
    if (have_rows('images_pnl4')) :
      while (have_rows('images_pnl4')) : the_row(); 
    ?>
        <div class="col-lg-6 col-md-12" data-aos="fade-up">
            <div class="list-sec">
                <div class="main-image-circle">
                    <a href="<?php the_sub_field('image_link');?>">
                        <img src="<?php the_sub_field('image-sec1');?>" alt="">
                    </a>
                </div>
            </div>
        </div>
     <?php
      endwhile;
    endif;
    ?>   
    </div>
</div>
<?php
        elseif (get_row_layout() == 'section_one') :
?>
    <div class="d-main-section">
        <div class="content-sec"data-aos="zoom-in-up">
            <h2><?= get_sub_field('heading_pnl1'); ?></h2>
        </div>
        <div class="row">
        <?php
        if (have_rows('images')) :
          while (have_rows('images')) : the_row(); 
        ?>
            <div class="col-lg-6 col-md-12" data-aos="fade-up">
                <div class="list-sec">
                    <div class="main-image-circle">
                        <a href="<?php the_sub_field('image_link');?>">
                            <img src="<?php the_sub_field('image-sec1');?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>    
        </div>
    </div>
<?php elseif (get_row_layout() == 'section_two') :?>
    <div class="d-main-section" data-aos="zoom-in-up">
    <div class="content-sec">
        <h2><?= get_sub_field('heading_pnl2'); ?></h2>
    </div>
    <div class="row">
    <?php
    if (have_rows('images_pnl2')) :
      while (have_rows('images_pnl2')) : the_row(); 
    ?>
        <div class="col-lg-6 col-md-12" data-aos="fade-up">
            <div class="list-sec">
                <div class="main-image-circle">
                    <a href="<?php the_sub_field('image_link');?>">
                        <img src="<?php the_sub_field('image-sec1');?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    <?php
      endwhile;
    endif;
    ?>
    </div>
</div>

<?php elseif (get_row_layout()== 'section_three'):?>
<div class="d-main-section">
    <div class="content-sec" data-aos="zoom-in-up">
        <h2><?= get_sub_field('heading_pnl3'); ?></h2>
    </div>
    <div class="row">
    <?php
    if (have_rows('images_pnl3')) :
      while (have_rows('images_pnl3')) : the_row(); 
    ?>
        <div class="col-lg-6 col-md-12" data-aos="fade-up">
            <div class="list-sec">
                <div class="main-image-circle">
                    <a href="<?php the_sub_field('image_link');?>">
                        <img src="<?php the_sub_field('image-sec1');?>" alt="">
                    </a>
                </div>
            </div>
        </div>
     <?php
      endwhile;
    endif;
    ?>   
    </div>
</div>
<?php 
  endif;
 endwhile;
endif;
?>



</section>
</section>
<?php get_footer(); ?>