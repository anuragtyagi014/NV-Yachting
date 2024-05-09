<?php

/* 
Template Name: Apply for Financing Template
*/

get_header();

?>

<style>
    .loan-input-feild p {}

    section.loan-sec-cal .loan-form-sec .loan-input-feild button {
        padding: 10px;
    }
</style>
<div class="hero-video-sec">
    <div class="video-part">
        <img class="hidden-mobile" src="https://nvyachting.com/wp-content/uploads/2023/02/used-fairline-yachts-for-sale-hero-1.jpg" alt="">
        <img class="hidden-desktop" src="https://nvyachting.com/wp-content/uploads/2023/02/used-fairline-yachts-for-sale-hero-1.jpg" alt="">
    </div>
    <div class="nv-logo">
        <img src="https://nvyachting.com/wp-content/uploads/2023/03/yachts-new-logo.png" alt="">
    </div>
</div>


<section class="loan-sec-cal">
    <div class="loan-form-sec">
        <h2>Apply for Financing</h2>
        <?= do_shortcode('[contact-form-7 id="6746" title="Apply for financing"]'); ?>
        <!-- <form action="">
            <div class="loan-input-feild">
                <input type="email" placeholder="Email*">
            </div>
            <div class="loan-input-feild">
                <input type="text" placeholder="Manufacturer*">
            </div>
            <div class="loan-input-feild">
                <input type="text" placeholder="Model*">
            </div>
  
            <div class="loan-input-feild">
                <button type="submit">SUBMIT</button>
            </div>
        </form> -->
    </div>
</section>



<?php get_footer(); ?>

<script>
    let $ = jQuery;
    $(".stock_number").val('Yacht Division');
    let boat_price = "<?= $_GET['boat_price']; ?>";
    let down_payment = "<?= $_GET['boat_price']; ?>";
    let interest = "<?= $_GET['interest']; ?>";
    let term_years = "<?= $_GET['term_years']; ?>";
    let monthly_budget = "<?= $_GET['monthly_budget']; ?>";
    let manufacturer = "<?= $_GET['manufacturer']; ?>";
    let model = "<?= $_GET['model']; ?>";
    $("[name='boat_price']").val(boat_price);
    $("[name='down_payment']").val(down_payment);
    $("[name='interest']").val(interest);
    $("[name='term_years']").val(term_years);
    $("[name='monthly_budget']").val(monthly_budget);
    $("[name='manufacturer']").val(manufacturer);
    $("[name='model']").val(model);
</script>