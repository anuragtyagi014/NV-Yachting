<?php 

/* 
Template Name: NV Windy 52 Template
*/

get_header();

?>


<section class="page-template-NVWindy28">
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
            <img src="<?= get_sub_field('model_desktop_number_image'); ?>" class="model-numm excep-desk-33" alt="">
            <img src="<?= get_sub_field('model_mobile_number_image'); ?>" class="excep-phone-33">
        </div>
    </div>
        <?php
        endif;
    endwhile;
endif;

if (have_rows('main_logo_image_area')) :
    while (have_rows('main_logo_image_area')) : the_row();
        if (get_row_layout() == 'all_content') :
        ?>

    <div class="main-logo-img"  data-aos="zoom-in-up">
        <div class="main-logo-flex">
            <img src="<?= get_sub_field('image'); ?>" alt="">
            <p><?= get_sub_field('text1'); ?><strong> <?= get_sub_field('strong_text'); ?> </strong><?= get_sub_field('text2'); ?></p>
        </div>
    </div>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('brand_info_area')) :
    while (have_rows('brand_info_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
    <div class="brand-info"  data-aos="zoom-in-up">

        <!-- <P>The flagship of the custom-built Windy Yacht Projects fleet, the spectacular SR 52 Blackbird superyacht tender took the<br> Cannes Yachting Festival by storm when she was unveiled in 2010. She has been turning heads ever since, and in 2015 was<br>            rated best chase boat in the world by Superyacht Magazine.</P>
        <P>Combining the exceptional design flair of Dubois with the superb build-quality, production capability and performance of the<br> Windy brand, the SR52 delivers guests ashore in unprecedented style, speed and comfort. A unique and adaptable craft,
            she
            <br> also appeals to customers looking for an elegant and uncompromising fast weekender or day boat.</P> -->
        <p><?= get_sub_field('para1'); ?></p>
        <p><?= get_sub_field('para2'); ?><p>
    </div>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('main_image_area')) :
    while (have_rows('main_image_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
    <section class="targa-main-img"  data-aos="zoom-in-up">
        <!-- <img src="<?// get_sub_field('image'); ?>" alt=""> -->
        <video src="<?= get_sub_field('video');?>" playsinline autoplay loop muted></video>
    </section>

<?php
        endif;
    endwhile;
endif; ?>

<?php
if (have_rows('brand_info_area_2')) :
    while (have_rows('brand_info_area_2')) : the_row();
        if (get_row_layout() == 'all_content') :
?>

    <div class="brand-info b28"  data-aos="zoom-in-up">

        <!-- <P>Sporting triple IPS 600 Volvo Penta diesel engines, the Blackbird boasts a top speed of 46 knots,<br> a cruising speed of 40 knots, and delivers an exhilarating yet stable and dry ride.</P>
        <P>A spacious cockpit features three separate racing seats at the helm and three standing sport<br> seats under the shade of the bimini. The teak deck provides open walkaround access from the<br> raised foredeck to the additional seating, sun lounger
            and hydraulic bathing ladder aft – perfect<br> for race spectating, swimming or picnicking at anchorage. A head with shower is located below<br> decks, along with a double berth. Truly, a superyacht among tenders.</P> -->
        <?= get_sub_field('para'); ?>
    </div>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('gallery_area')) :
    while (have_rows('gallery_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
    <section class="targa-gallery b28">
        <div class="gallery-par">
            <div class="gallery-l"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_left_1'); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="gallery-r"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_right_1'); ?>" class="img-fluid circle-phn" alt="">
                </div>
            </div>
        </div>
        <div class="gallery-par">
            <div class="gallery-l"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                </div>
            </div>
            <div class="gallery-r"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_right_2'); ?>" class="img-fluid excp-2" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
        endif;
    endwhile;
endif; ?>
<?php
if (have_rows('gallery_area_2')) :
    while (have_rows('gallery_area_2')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
    <section class="targa-gallery b28-52">
        <div class="gallery-par">
            <div class="gallery-l"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_left_1'); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="gallery-r"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_right_1'); ?>" class="img-fluid circle-phn" alt="">
                </div>
            </div>
        </div>
        <div class="gallery-par">
            <div class="gallery-l"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_left_2'); ?>" class="img-fluid circle-phn excp-1 excp-11-fly" alt="">
                </div>
            </div>
            <div class="gallery-r"  data-aos="zoom-in-up">
                <div class="gallery-imgg">
                    <img src="<?= get_sub_field('gallery_right_2'); ?>" class="img-fluid excp-2" alt="">
                </div>
            </div>
        </div>
    </section>

<?php
        endif;
    endwhile;
endif; ?>

<?php
if (have_rows('specification_area')) :
    while (have_rows('specification_area')) : the_row();
        if (get_row_layout() == 'all_content') :
?>
    <section class="new-spec">
        <div class="row">
            <div class="col-md-6"  data-aos="fade-up">
                <div class="sing-img">
                    <img src="<?= get_sub_field('desktop_image'); ?>" class="excep-desk-33" alt="">
                    <img src="<?= get_sub_field('phone_image'); ?>" class="excep-phone-33" alt="">
                </div>
            </div>
            <div class="col-md-6"  data-aos="fade-down">
                <h2><?= get_sub_field('heading'); ?></h2>
                <h6 class="windy-new-brochure">
                    <a href="<?= get_sub_field('download_pdf_link');?>" target="_blank"><?= get_sub_field('download_pdf');?></a>
                </h6>
                <div class="spec-d">
                    <ul class="spec-detail">
                        <?php foreach (get_sub_field('list_content') as $lists) : ?>
                             <li><strong><?= $lists['title']; ?> </strong> : <?= $lists['value']; ?> </li>
                        <?php endforeach; ?>
                        <!-- <li><strong>Length overall (incl. pulpit):</strong> : 52’ 82” </li>
                        <li><strong>Beam</strong> : 14’ 76” </li>
                        <li><strong>Draft</strong> : 4' </li>
                        <li><strong>Dry Weight</strong> : 12800 kg</li>
                        <li><strong>Fuel capacity</strong> : 533 gal </li>
                        <li><strong>water capacity</strong> : 45 gal </li> -->
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
<?php get_footer(); ?>