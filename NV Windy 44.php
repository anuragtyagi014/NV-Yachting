<?php

/* 
Template Name: NV Windy 44 Template
*/

get_header();

?>
<style>

@media(max-width:768px){

.page-id-8535 .brand-info {
    margin: 0 30px;
}

}
@media(max-width:767px){

.page-id-8535 .model-num {
    transform: none !important;
}
.page-id-8535 .model-num img {
    width: 214px !important;
}

}


</style>


<section class="page-template-NVWindy28">
    <!-- Banner Area Starts-->
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
    <!-- Banner Area Ends-->
    <!-- Main Logo Image Area Starts-->
    <?php
    if (have_rows('main_logo_image_area')) :
        while (have_rows('main_logo_image_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <div class="main-logo-img"  data-aos="zoom-in-up">
                    <div class="main-logo-flex">
                        <img src="<?= get_sub_field('image'); ?>" alt="">
                        <?= get_sub_field('para'); ?>
                    </div>
                </div>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Main Logo Image Area Ends-->
    <!-- Brand Info Area Starts-->
    <?php
    if (have_rows('brand_info_area')) :
        while (have_rows('brand_info_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <div class="brand-info"  data-aos="zoom-in-up">
                    <?php
                    foreach (get_sub_field('content') as $content) :
                        echo $content['para'];
                    endforeach; ?>
                </div>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Brand Info Area Ends-->
    <!-- Main Image Area Starts-->
    <?php
    if (have_rows('main_image_area')) :
        while (have_rows('main_image_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <section class="targa-main-img"  data-aos="zoom-in-up">
                    <!-- <img src="<?// get_sub_field('image'); ?>" alt=""> --> 
                    <video src="<?= get_sub_field('video'); ?>" playsinline autoplay loop muted></video>
                </section>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Main Image Area Ends-->
    <!-- Brand Info Area 2 Starts  -->
    <?php
    if (have_rows('brand_info_area_2')) :
        while (have_rows('brand_info_area_2')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <div class="brand-info b28"  data-aos="zoom-in-up">
                    <?php foreach (get_sub_field('content') as $content_para) : ?>
                        <?php echo $content_para['para']; ?>
                    <?php endforeach; ?>
                </div>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Brand Info Area 2 Ends  -->
    <!-- Gallery Image Area Starts  -->
    <?php
    if (have_rows('gallery_image_area')) :
        while (have_rows('gallery_image_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <section class="targa-gallery b28">
                    <div class="gallery-par">
                        <div class="gallery-l"  data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('left_1'); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="gallery-r"  data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('right1'); ?>" class="img-fluid circle-phn" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-par">
                        <div class="gallery-l" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('left2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                            </div>
                        </div>
                        <div class="gallery-r" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('right2'); ?>" class="img-fluid excp-2" alt="">
                            </div>
                        </div>
                    </div>
                </section>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Gallery Image Area Ends  -->
    <!-- Dimension Area Starts  -->
    <?php
    if (have_rows('dimension_area')) :
        while (have_rows('dimension_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <section class="general-sec"  data-aos="zoom-in-up">
                    <h2><?= get_sub_field('heading'); ?></h2>
                    <div class="general-disc">
                        <?= get_sub_field('list_1'); ?>
                        <?= get_sub_field('list_2'); ?>
                    </div>
                </section>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Dimension Area Ends  -->
    <!-- Gallery Area 2 starts  -->
    <?php
    if (have_rows('gallery_area_2')) :
        while (have_rows('gallery_area_2')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>
                <section class="targa-gallery b28">
                    <div class="gallery-par">
                        <div class="gallery-l"  data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('left_1'); ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="gallery-r"  data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('right_1'); ?>" class="img-fluid circle-phn" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="gallery-par">
                        <div class="gallery-l" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                            </div>
                        </div>
                        <div class="gallery-r" data-aos="zoom-in-up">
                            <div class="gallery-imgg">
                                <img src="<?= get_sub_field('right_2'); ?>" class="img-fluid excp-2" alt="">
                            </div>
                        </div>
                    </div>
                </section>
    <?php
            endif;
        endwhile;
    endif;
    ?>
    <!-- Gallery Area 2 ends  -->
    <!-- View 360 Area starts  -->
    <section class="view-360-sec" data-aos="zoom-in-up">
        <iframe width="100%" height="700" src="<?= the_field('view_360_source'); ?>" allowfullscreen=""></iframe>
    </section>
    <!-- View 360 Area ends  -->
    <!-- Specification Area Starts here  -->
    <?php
    if (have_rows('specification_area')) :
        while (have_rows('specification_area')) : the_row();
            if (get_row_layout() == 'all_content') :
    ?>

                <section class="new-spec">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="sing-img">
                                <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                                <img src="<?= get_sub_field('phone_image'); ?>" class="excep-phone-33" alt="">
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-down">
                            <h2><?= get_sub_field('heading'); ?></h2>
                            <h6 class="windy-new-brochure">
                                <a href="<?= get_sub_field('download_pdf_link');?>" target="_blank"><?= get_sub_field('download_pdf');?></a>
                            </h6>
                            <div class="spec-d">
                                <ul class="spec-detail">
                                    <?php foreach (get_sub_field('list_detail') as $specification_list) : ?>
                                        <li><strong><?= $specification_list['title']; ?></strong> <?= $specification_list['value']; ?> </li>
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
    <!-- Specification Area Ends here  -->
</section>

<div id="stickingFormTwo" class="full-sticky-form">
    <button id="stickingBtnTwo">
        <img src="https://nvyachting.com/wp-content/uploads/2023/08/NV-button.png" alt="img">
    </button>
    <div id="stickyFormContainerTwo" class="form-boxed">
        <span id="closeBtnTwo">X</span>
        <?php echo do_shortcode('[contact-form-7 id="7573" title="Sticky form NV Windy 44 Landing Page"]'); ?>
    </div>
</div>

<script>
const formShowedTwo = document.getElementById('stickingFormTwo');
document.addEventListener('DOMContentLoaded', function() {
    const stickyFormTwo = document.getElementById('stickyFormContainerTwo');
    const stickyBtnTwo = document.getElementById('stickingBtnTwo');
    const closeItTwo = document.getElementById('closeBtnTwo');
	let isFormVisibleAgain = false;
    // events
    stickyBtnTwo.addEventListener('mouseenter', function() {
        if (!isFormVisibleAgain) {
            stickyFormTwo.style.display = 'flex';
            stickyFormTwo.animate(
                [{ transform: 'rotateY(0deg)' }],
                { duration: 300, fill: 'forwards' }
            );
            isFormVisibleAgain = true;
        }
    });
    closeItTwo.addEventListener('click', function() {
        if (isFormVisibleAgain) {
        stickyFormTwo.animate(
                [{ transform: 'rotateY(-90deg)' }],
                { duration: 300, fill: 'forwards' }
            );
            setTimeout(() => {
                stickyFormTwo.style.display = 'none';
                isFormVisibleAgain = false;
            }, 300); // Adjust the delay as needed (in milliseconds)
		}
    });
    formShowedTwo.addEventListener('mouseleave', function() {
        if (isFormVisibleAgain) {
            stickyFormTwo.animate(
                [{ transform: 'rotateY(-90deg)' }],
                { duration: 300, fill: 'forwards' }
            );
            setTimeout(() => {
                stickyFormTwo.style.display = 'none';
                isFormVisibleAgain = false;
            }, 300); // Adjust the delay as needed (in milliseconds)
        }
    });
});
window.addEventListener('load', function() {
    if (document.body.classList.contains('page-id-7558')) {
        formShowedTwo.style.display = 'flex';
    } else {
        formShowedTwo.style.display = 'none';
    }
})
    
window.addEventListener('load', function() {
  const inputElements = document.querySelectorAll('#stickingFormTwo input');
  const textareaElements = document.querySelectorAll('#stickingFormTwo textarea');

  inputElements.forEach(function(inputElement) {
    inputElement.setAttribute('autocomplete', 'off');
  });

  textareaElements.forEach(function(textareaElement) {
    textareaElement.setAttribute('autocomplete', 'off');
  });
});
</script>

<?php get_footer(); ?>