<?php 

/* 
Template Name: De Antonio D50 Open Template
*/

get_header();

?>

<section class="page-template-DeAntonioD28Crusier">
    <section class="page-template-DeAntonioD36Open">
<?php
 if(have_rows('first_section_content')):
    while(have_rows('first_section_content')): the_row();
        if(get_row_layout()== 'all_content'):
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
                <img src="<?= get_sub_field('desktop_model_number_image'); ?>" class="model-numm excep-desk-33" alt="">
                <img src="<?= get_sub_field('mobile_model_number_image'); ?>" alt="" class="excep-phone-33">
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
                    <div class="logo-tile text-center"> 
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

            <!-- ========== FOR DEVELOPER - Make this section dynamic in such a way that both video and image can be uploaded  ========== -->
            <section class="targa-main-img" data-aos="zoom-in-up">
            <?php if(get_field('file_type') == 'video'){ ?>
            <video src="<?= the_field('Video_middle'); ?>" muted="" loop="" autoplay=""></video>
            <?php }else{ ?>
            <img src="<?= the_field('Video_middle'); ?>" class="img-fluid" alt="">
           <?php } ?>
            <!-- <video src="https://nvyachting.com/wp-content/uploads/2022/12/Introducing-the-new-model-D36-Open.-New-lines-and-best-performance-for-our-new-generation-of-boats..mp4" muted="" loop="" autoplay=""></video> -->
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
                        <img src="<?= get_sub_field('gallery_image_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                    </div>
                </div>
                <div class="gallery-r" data-aos="zoom-in-up">
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
        <section class="luxuray-social second-sec open-42">
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
                        <img src="<?= get_sub_field('gallery_image_left');?>" class="img-fluid" alt="">
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
                        <img src="<?= get_sub_field('gallery_image_left_2');?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                    </div>
                </div>
                <div class="gallery-r" data-aos="zoom-in-up">
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

        <section class="targa-main-img spec-img-except" data-aos="zoom-in-up">
            <img src="<?php the_field('desktop_boat_image'); ?>" class="model-numm excep-desk-33" alt="">
            <img src="<?php the_field('mobile_boat_image'); ?>" alt="" class="excep-phone-33">
        </section>



        <!-- <section class="targa-main-img spec-img-except spec-duplicate">
            <img src="https://nvyachting.com/wp-content/uploads/2022/12/spec2-scaled.jpg" class="model-numm excep-desk-33" alt="">
            <img src="https://nvyachting.com/wp-content/uploads/2022/12/Group-282-mm-1.png" alt="" class="excep-phone-33">
        </section> -->

        <section class="targa-main-img spec-img-except bg-custom" data-aos="zoom-in-up">

            <div class="row">
                <div class="col-12">
                    <h2><?php the_field('specification_main_heading');  ?></h2>
                </div>
            </div>

            <div class="spec-circle">
                <div class="spec-circle-info">
                 <ul>
                    <?php
                        if(get_field('left_specification_list')):
                            while (the_repeater_field('left_specification_list')):
                    ?>
                        <li><?php the_sub_field('content'); ?></li>

                    <?php
                        endwhile;
                     endif;
                    ?>
                 </ul>
                </div>
                <div class="spec-circle-info">
                 <ul>
                    <?php
                        if(get_field('right_specification_list')):
                            while (the_repeater_field('right_specification_list')):
                    ?>
                        <li><?php the_sub_field('content'); ?></li>
                    <?php
                      endwhile;
                    endif;
                    ?>
                 </ul>
                </div>
            </div>

        </section>
        

<section class="de-antonio-brochure">
    <a href="<?= get_field('download_pdf_link');?>" target="_blank"><?= get_field('download_pdf');?></a>
</section>
        <section class="new-spec" data-aos="zoom-in-up">
            <div class="row">
                <div class="col-md-6">
                    <div class="spec-d">
                        <ul class="spec-detail">
                            <?php
                            if(get_field('specification_left')):
                                while (the_repeater_field('specification_left')):
                            ?>
                                <li><?php the_sub_field('content');  ?></li>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="spec-d">
                        <ul class="spec-detail">
                            <?php
                                if(get_field('specification_right')):
                                    while (the_repeater_field('specification_right')):
                            ?>
                                <li><?php the_sub_field('content'); ?></li>
                            <?php
                                    endwhile;
                                endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>



<section class="targa-main-img layout_nv pt-0">
    <div class="row">
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>Main deck </strong></h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/1-1.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>3 cabins </strong>- 1 bathroom</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/2-1.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>2 cabins </strong>- Modular distribution opc. 1 living room</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/3-1.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>3 cabins </strong>- 2 bathrooms</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/4-1.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>2 cabins </strong>- Modular distribution 2 (bed)</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/5-1.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>3 cabins </strong>- 1 crew cabin - 1 bathroom</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/6-1.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>2 cabins </strong>- 2 bathrooms</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/7.png" alt="">
            </div>
        </div>
        <!-- --------------------------- -->
        <div class="col-md-6" data-aos="fade-up">
            <div class="spec-d">
                <div class="logo-tile text-center">
                    <h2><strong>3 cabins </strong>- 1 crew cabin - 2 bathrooms</h2>

                </div>
                <img width="100%" src="https://nvyachting.com/wp-content/uploads/2023/04/8.png" alt="">
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .spec-d .logo-tile h2 {
    color: #9E9E9E;
    font-size: 25px;
}

.spec-d .logo-tile strong {
    color: #4b4b4b;
}
.new-spec.layout_nv {
    padding-top: 0px !important;
}
.layout_nv .spec-d .logo-tile {
    margin-bottom: 15px;
    padding-top: 20px;
}


@media (min-width: 2500px){

.spec-d .logo-tile h2{
        font-size: 32px;
    font-family: unset;
    }

}

@media (min-width: 3200px){
    .spec-d .logo-tile h2{
        font-size: 40px;
    font-family: unset;
    }
}

@media (min-width: 1601px) and (max-width: 1919px){
.spec-d .logo-tile h2{
    font-size: 20px;
    font-family: unset;
}
}

@media (min-width: 1451px) and (max-width: 1599px){
    .spec-d .logo-tile h2{
    font-size: 20px;
}
}







@media (max-width: 1440px){
    .spec-d .logo-tile h2{
    font-size: 18px;
}
}

@media (max-width: 1200px){
    .spec-d .logo-tile h2{
    font-size: 16px;
}
}

@media (max-width: 1023px){
    .spec-d .logo-tile h2{
    font-size: 14px;
}
}




</style>




<?php get_footer(); ?>