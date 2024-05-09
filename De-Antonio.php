<?php 

/* 
Template Name: De Antonio Template
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


<div class="main-logo-img">
    <img src="<?php the_field('main_logo'); ?>" alt="">
</div>

<?php if( have_rows('section_1') ): ?>
    <?php while( have_rows('section_1') ): the_row(); ?>
        <?php if( get_row_layout() == 'section_one' ): ?>
<div class="d-main-section">
    <div class="content-sec">
        <h3><?php the_sub_field('heading_pnl1'); ?></h3>
        <p><?php the_sub_field('paragraph_pnl1'); ?></p>
    </div>
    <div class="row">
        <?php if( have_rows('images') ): ?>
         <?php while( have_rows('images') ): the_row(); ?>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">
                    <div class="main-image-circle">
                     <img src="<?php the_sub_field('image-sec1'); ?>" alt="">
                </div>
                   <!-- <div class="model-n">
                        <h2><?php //the_sub_field('title'); ?></h2>
                    </div>
                    <div class="ship-img">
                        <img src="<?php// the_sub_field('image-sec1'); ?>" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">-->
                    <div class="d-feature">
                        <h4><?php the_sub_field('feature'); ?></h4>
                    </div>
                </div>
            </a>
        </div>
     <?php endwhile; ?>
     <?php endif;?>
        <!-- <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D28</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-4.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>open</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D28</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-2.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>crusier</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D28</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-6.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>explorer</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D36</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-1.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>open</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D42</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-5.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>open</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D46</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/d-46.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>open</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D46</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-7.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>crusier</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D50</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-3.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>open</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-12">
            <a href="#">
                <div class="list-sec">

                    <div class="model-n">
                        <h2>D50</h2>
                    </div>
                    <div class="ship-img">
                        <img src="https://nvyachting.com/wp-content/uploads/2022/09/f-line-8.png" alt="">
                    </div>
                    <img src="https://nvyachting.com/wp-content/uploads/2022/09/Scroll-Group-3-1.png" class="water-img" alt="">
                    <div class="d-feature">
                        <h4>crusier</h4>
                    </div>
                </div>
            </a>
        </div> -->
    </div>

</div>
   <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>