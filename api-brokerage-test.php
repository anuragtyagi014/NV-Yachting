<?php
// Template Name: API Brokerage Test API 
// get_header();
//$_SESSION['name'] = "Dev";
// print_r($_SESSION);
// exit;
?>

<?php
// $curl = curl_init();

// curl_setopt_array($curl, [
//     CURLOPT_URL => "https://services.boats.com/pls/boats/search?fields=DocumentId%2Cmakestringexact%2Cmodel%2Ccoop&key=013e1d194e2b",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_ENCODING => "",
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 30,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => "GET",
//     CURLOPT_HTTPHEADER => [
//         "Accept: */*",
//         "User-Agent: Thunder Client (https://www.thunderclient.com)"
//     ],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//     echo "cURL Error #:" . $err;
// } else {
//     $data_brokerage = json_decode($response, true);
//     echo "<pre>";
//     print_r($data_brokerage['data']['results']);
//     echo "</pre>";
//     // $documentid = $data_brokerage['data']['results'];
// }

// $data_filter['boats_detail'] = array_filter($_SESSION['api_data'], function ($item) {
//     return (int)$item['documentid'] == 8726234;
// });
// echo "<pre>";
// print_r($data_filter['boats_detail']);
// echo "</pre>";
?>

<?php //get_footer();
?>


<?php
// $a = get_data_from_api();
$data1['boat_listing'] = array_filter($_SESSION['api_data'], function ($item) {
    return (strtolower($item['make']) == "fairline" && strtolower($item['model']) == "squadron 50"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "squadron 58"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "squadron 68"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "phantom 65"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 45 open"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 45 gt"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 50 gt"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 50 open"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 65 gt"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 65 gto"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "targa 40"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "f//line 33 outboard"
        || strtolower($item['make']) == "fairline" && strtolower($item['model']) == "f line 33")
        || (strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "antares 11"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "antares 9"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "antares 7"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "antares 8"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "antares 11 fly"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "antares 8 fishing"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 9 sundeck"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 9 spacedeck"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 8 sundeck"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 8 spaceDeck"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 10"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 7 spacedeck"
            || strtolower($item['make']) == "beneteau america" && strtolower($item['model']) == "flyer 7 sundeck")
        || (strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d50 open"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d42"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d28 open"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d42 open"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d28 deck"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d36 open"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d50 coupé"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d28 xplorer"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d28 open"
            || strtolower($item['make']) == "de antonio yachts" && strtolower($item['model']) == "d28 xplorer")
        || (strtolower($item['make']) == "windy" && strtolower($item['model']) == "sr52"
            || strtolower($item['make']) == "windy" && strtolower($item['model']) == "srl/sr60"
            || strtolower($item['make']) == "windy" && strtolower($item['model']) == "sr44 sx"
            || strtolower($item['make']) == "windy" && strtolower($item['model']) == "sr28 cc")
        || (strtolower($item['make']) == "brabus" && strtolower($item['model']) == "shadow 500"
            || strtolower($item['make']) == "brabus" && strtolower($item['model']) == "shadow 900 cabin"
            || strtolower($item['make']) == "brabus" && strtolower($item['model']) == "shadow 500 cabin"
            || strtolower($item['make']) == "brabus" && strtolower($item['model']) == "shadow 300 ct"
            || strtolower($item['make']) == "brabus" && strtolower($item['model']) == "shadow 900 st"
            || (int)($item['documentid']) == 8329600);
});

foreach ($data1['boat_listing'] as $specification) :
    $make                 .= $specification['make'] . ",";
    $year                 .= $specification['year'] . ",";
    $price                .= $specification['price'] . ",";
    $location             .= $specification['location'] . ",";
    if (isset($specification['status'])) {
        $description_stat .= ($specification['status']) . ",";
    }
    $boat_type            .= $specification['class'] . ",";
    $model                .= $specification['model'] . ",";
endforeach;
$makes                     = array_unique(explode(",", $make));
$years                     = array_unique(explode(",", $year));
$prices                    = array_unique(explode(",", $price));
$locations                 = array_unique(explode(",", $location));
$descriptions_stats        = array_unique(explode(",", $description_stat));
$boat_types                = array_unique(explode(",", $boat_type));
$models                    = array_unique(explode(",", $model));
sort($makes);
sort($prices);
sort($years);
sort($locations);
sort($descriptions_stats);
sort($boat_types);
sort($models);
?>
<?php
get_header();
?>
<style>
    #filter-spinner {
        display: none;
    }

    .mediagallery-active-filters {
        display: none;
    }

    .request-form .input-feilds select {
        padding: 16px 23px;
    }
</style>
<style type="text/css">
    .search-from-inventory:nth-child(3) button {
        width: 240px;
        height: 56px;
        border: none;
        border-radius: 100px;
        background: transparent;
        color: white;
        font-weight: 400;
    }

    input#search_field {
        color: #000;
        border: 1px solid #ef9536
    }

    div#get_fetched_data {
        position: absolute;
        max-width: calc(100% - 15px);
        display: none;
        width: 100%;
        background: #f7f7f7 !important;
        border-radius: 0px;
        padding: 15px 0 12px 0px;
        z-index: 999;
        max-height: 250px;
        height: auto;
        overflow: auto;
        left: 50%;
        transform: translateX(-50%);
    }


    .search-from-inventory.new_search {
        padding: 0px 5px !important;
        background: transparent;
        border-radius: 0px;
        margin-top: 8px;

    }

    .search-from-inventory.new_search input {
        border-radius: 0px !important;
        background: #f7f7f7 !important;
    }

    a.filter-link.clear_data {
        border: 1px solid #ef95364d !important;
    }

    .search-from-inventory.new_search button#search_btn {
        background: #ef9536 !important;
        color: white;
        -webkit-text-stroke-color: white;
        border: 1px solid #ef9536;
        width: 100% !important;
        border-radius: 3px 3px 3px 3px !important;
        box-shadow: inset 0px 0px 1px 0px #ef9536;
        padding-left: 15px;
    }

    span.invent-drop:after {
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        background-image: url(https://nvyachting.com/wp-content/uploads/2023/03/free-arrow-left-icon-3099-thumb.png);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        height: 15px;
        width: 15px;
    }

    span.invent-drop.inven-btn-new::after {
        content: "";
        position: absolute;
        top: 10px;
        right: 10px;
        background-image: url(https://nvyachting.com/wp-content/uploads/2023/03/free-arrow-left-icon-3099-thumb-1.png);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        height: 15px;
        width: 15px;
        transform: rotate(180deg);
    }

    .search-from-inventory:nth-child(3) button span {
        position: relative;
    }

    .mediagallery-active-filters {
        padding: 0px 8px;
    }

    div#get_fetched_data p {
        color: black !important;
    }

    div#get_fetched_data ul li.fetched_data {
        padding: 0px 0 0 10px !important;
        color: black !important;
    }

    .sort-type-inventory.col-md-2 {
        padding: 0px 5px;
    }

    .search-from-inventory:nth-child(3) button {
        height: 56px;
        border: none;
        border-radius: 100px;
        background: transparent !important;
        color: white;
        width: 100%;
    }

    .search-from-inventory:nth-child(3) button ul {
        border-bottom: none;
        border-radius: 0px !important;
        margin-top: 0px !important;
        padding-top: 0px !important;
        z-index: 999;
    }


    .search-from-inventory:nth-child(3) button {
        height: 56px;
        border: none;
        border-radius: 100px;
        background: transparent !important;
        color: white;
        width: 100%;
        font-size: 20px;
    }

    .sort-type-inventory.col-md-2 {
        padding: 0px 8px;
    }

    .filter-link {
        border-color: #ef9536;
    }



    a.filter-link.remove-filter.type_ .fa-times:before {
        content: "\f00d";
        height: 10px;
    }






    .inventory-form.top_form label {
        position: relative;
        top: 0px;
        left: 3px;
        padding: 0px 15px 0px 8px;
        display: flex;
        font-weight: 400;
        font-size: 20px;
    }


    section.inventory-sec .inventory-form h2 {
        padding-right: 30px;
    }







    .inventory-form.top_form h2 {
        margin-bottom: 0px !important;
    }

    .form-group {
        display: block;
        margin-bottom: 0px;
    }

    .form-group input {
        padding: 0;
        height: initial;
        width: initial;
        margin-bottom: 0;
        display: none;
        cursor: pointer;
    }

    .form-group label {
        position: relative;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .form-group label:before {
        content: '';
        -webkit-appearance: none;
        background-color: transparent;
        border: 1px solid #f26715;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        margin-right: 5px;
        height: 10px;
    }

    .form-group input:checked+label:after {
        content: '';
        display: block;
        position: absolute;
        top: 4px;
        left: 9px;
        width: 6px;
        height: 14px;
        border: solid #f26715;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .mobile_check {
        display: flex;
    }





    @media (min-width:629px) {
        .inventory-form.top_form {
            display: flex;
            align-items: center;
        }



    }

    @media (max-width:1440px) {

        .form-group input:checked+label:after {
            top: 2px;
            left: 14px;
            width: 5px;
            height: 10px;
        }

        .form-group label:before {
            padding: 8px 8px;
        }



    }


















    @media (max-width: 3200px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 20px 20px;
        }

        .search-from-inventory form input[type="search"] {
            font-size: 20px;
            padding: 18px 20px;
        }
    }

    @media (max-width: 2700px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 20px 20px;
        }
    }


    @media (max-width:2500px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 20px 20px;
        }




        .search-from-inventory form input[type="search"] {
            font-size: 20px;
            padding: 18px 20px;
        }


    }



    @media (max-width: 2200px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 12px 20px;
        }

        .search-from-inventory form input[type="search"] {
            font-size: 20px;
            padding: 10px 20px;
        }

    }




    @media (max-width: 1920px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 12px 30px;
        }

        .search-from-inventory form input[type="search"] {
            font-size: 20px;
            padding: 10px 20px;
        }
    }

    @media (max-width: 1699px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 10px 25px;
        }

        .search-from-inventory form input[type="search"] {
            font-size: 20px;
            padding: 8px 20px;
        }
    }

    @media (max-width: 1440px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 9px 20px;
        }
    }

    @media (max-width: 1200px) {
        .page-template-inventory .search-from-inventory.new_search button#search_btn {
            padding: 2px 20px;
        }
    }



    @media (max-width: 768px) {}

    @media (max-width:767px) {
        .search-from-inventory:nth-child(3) {
            padding-left: 15px !important;
            padding-right: 12px !important;
        }

        .search-from-inventory.new_search form .col-md-10 {
            padding: 0px 15px !important;
            margin-bottom: 10px;
            padding-left: 18px !important;
        }


        section.inventory-sec .inventory-form h2 {
            padding-right: 0px;
            padding-left: 10px;
        }


        @media(max-width:629px) {
            section.inventory-sec .inventory-form h2 {
                padding-bottom: 15px;
            }

            .mobile_check {
                display: flex;
                align-items: center;
                justify-content: center;
            }

        }


    }

    @media (max-width: 575px) {
        .search-from-inventory.new_search form .col-md-2 {
            padding: 0px 15px !important;
            padding-left: 18px !important;
        }

    }

    @media(max-width:451px) {
        .form-group input:checked+label:after {
            top: 2px;
            left: 14px;
            width: 6px;
            height: 11px;
        }
    }

    @media (max-width:375px) {
        .form-group label:before {
            padding: 8px 8px;
        }

        .form-group input:checked+label:after {
            top: 2px;
            left: 14px;
            width: 6px;
            height: 11px;
        }

        .inventory-form.top_form label {
            padding: 0px 10px 0px 8px;
            font-size: 14px;
        }

    }






    @media (min-width:767px) {
        .search-from-inventory.new_search {
            padding-left: 20px !important;
            padding-right: 9px !important;
        }

        .search-from-inventory:nth-child(3) {
            padding-left: 16px !important;
            padding-right: 16px !important;
        }
    }


    @media (min-width: 1300px) {
        .page-template-inventory span.invent-drop:after {
            top: 13px;
            height: 15px;
            width: 15px;
        }
    }


    @media (min-width: 1440px) {
        .form-group label:before {
            padding: 10px 10px;
        }

        .form-group input:checked+label:after {
            top: 3px;
            left: 16px;
            width: 6px;
            height: 12px;
        }
    }


    @media (min-width: 1919px) {
        .page-template-inventory span.invent-drop:after {
            top: 2px;
            height: 40px;
            width: 22px;
        }

        .form-group input:checked+label:after {
            top: 5px;
            left: 19px;
            width: 7px;
            height: 15px;
        }


        .form-group label:before {
            padding: 13px 13px;
        }

        .form-group label {
            font-size: 30px !important;

        }
    }

    @media (min-width: 2500px) {
        .page-template-inventory span.invent-drop:after {
            top: 17px;
            height: 40px;
            width: 30px;
        }

        .last-seletor {
            margin-top: 30px;
        }
    }
</style>
<div class="hero-video-sec">
    <div class="video-part">
        <img src="<?= get_field('desktop_banner'); ?>" class="excep-desk-33" alt="">
        <img src="<?= get_field('mobile_banner'); ?>" class="excep-phone-33" alt="">
    </div>
    <div class="nv-logo">
        <img src="<?= get_field('logo'); ?>" alt="">
    </div>
</div>

<?php
if (have_rows('search_area')) :
    while (have_rows('search_area')) : the_row();
        if (get_row_layout('') == "all_content") :
?>
            <section class="inventory-sec">
                <div class="inventory-form top_form">
                    <h2><?= get_sub_field('title'); ?></h2>


                    <div class="mobile_check">
                        <div class="form-group">
                            <input type="checkbox" id="new" class="checked_items" value="new">
                            <label for="new">New</label>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" id="used" class="checked_items" value="used">
                            <label for="used"> Used</label>
                        </div>
                    </div>
                </div>
                <div class="no-data"></div>
                <div class="search-from-inventory new_border_line row" id="filter-search" style="padding-left: 0px; padding-right: 0px;margin-block: 0px;">
                    <div class="sort-type-inventory sort-except" style="display:none;">
                        <h4><?= get_sub_field('short_by_text'); ?></h4>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= "Boat Type"; ?></span>

                            <ul class="inventory-drop-list">
                                <?php $count_inv_ = 0;
                                foreach ($boat_types as $boat) : ?>
                                    <?php if (!empty($boat)) : ?>
                                        <li class="filter-list Boat_Type" id="<?= "type_" . $count_inv; ?>"><?= $boat; ?></li>
                                <?php endif;
                                    $count_inv_++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= get_sub_field('sort_by_button_text_1'); ?></span>

                            <ul class="inventory-drop-list" id="make_data">
                                <?php $count_inv = 0;
                                foreach ($makes as $make) : ?>
                                    <?php if (!empty($make)) : ?>
                                        <li class="filter-list Make" id="<?= "make_" . $count_inv; ?>"><?= $make; ?></li>
                                <?php endif;
                                    $count_inv++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= "Model"; ?></span>
                            <ul class="inventory-drop-list" id="get_model_data">

                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= get_sub_field('sort_by_button_text_2'); ?></span>

                            <ul class="inventory-drop-list">
                                <li class="filter-list Length" id="<?= "length_1"; ?>" data-from="0" data-to="15">0Ft - 15Ft</li>
                                <li class="filter-list Length" id="<?= "length_2"; ?>" data-from="16" data-to="20">16Ft - 20Ft</li>
                                <li class="filter-list Length" id="<?= "length_3"; ?>" data-from="21" data-to='25'>21Ft - 25Ft</li>
                                <li class="filter-list Length" id="<?= "length_4"; ?>" data-from="26" data-to='30'>26Ft - 30Ft </li>
                                <li class="filter-list Length" id="<?= "length_5"; ?>" data-from='31' data-to='35'>31Ft - 35Ft</li>
                                <li class="filter-list Length" id="<?= "length_6"; ?>" data-from="36" data-to="">36Ft+</li>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= get_sub_field('sort_by_button_text_3'); ?></span>
                            <ul class="inventory-drop-list">
                                <?php $count_inv3 = 0;
                                foreach ($years as $year1) : ?>
                                    <?php if (substr($year1, 0, 1) === "0" || empty($year1)) {
                                    } else { ?>
                                        <li class="filter-list Year" id="year_<?= $count_inv3; ?>"><?= $year1; ?></li>
                                    <?php } ?>
                                <?php $count_inv3++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= get_sub_field('sort_by_button_text_4'); ?></span>

                            <ul class="inventory-drop-list">
                                <li class="filter-list Price" id="price_1" data-from="0" data-to="10000">$0 - $10,000</li>
                                <li class="filter-list Price" id="price_2" data-from="10000" data-to="25000">$10,000 - $25,000</li>
                                <li class="filter-list Price" id="price_3" data-from="25000" data-to="50000">$25,000 - $50,000</li>
                                <li class="filter-list Price" id="price_4" data-from="50000" data-to="100000">$50,000 - $100,000
                                </li>
                                <li class="filter-list Price" id="price_5" data-from="100000" data-to="">$100,000+</li>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= get_sub_field('sort_by_button_text_5'); ?></span>

                            <ul class="inventory-drop-list">
                                <?php $count_inv4 = 0;
                                foreach ($locations as $location) { ?>
                                    <?php if (!empty($location)) { ?>
                                        <li class="filter-list Location" id="location_<?= $count_inv4; ?>"><?= $location; ?></li>
                                <?php }
                                    $count_inv4++;
                                }
                                ?>
                            </ul>
                        </button>
                    </div>
                    <div class="sort-type-inventory last-seletor col-md-2 col-sm-6 col-6  col-xs-12">
                        <button>
                            <span class="invent-drop"><?= 'Status'; ?></span>
                            <ul class="inventory-drop-list">
                                <?php $count_inv5 = 0;
                                foreach ($descriptions_stats as $status) : ?>
                                    <?php if (!empty($status)) : ?>
                                        <li class="filter-list Status" id="status_<?= $count_inv5; ?>"><?= $status; ?></li>
                                    <?php endif; ?>
                                <?php $count_inv5++;
                                endforeach; ?>
                            </ul>
                        </button>
                    </div>
                </div>
                <div class="mediagallery-active-filters">
                    <div class="filter">
                        <a class="filter-link clear_data">
                            <span>Clear Filters</span>
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="search-from-inventory new_search">
                    <form action="" class="row">
                        <div class="col-md-10 col-sm-9 col-12 col-xs-12 pl-0" style="padding-right: 13px;">
                            <input type="search" id="search_field">
                            <input type="hidden" id="hidden_field_search" value="check">
                        </div>

                        <div class="col-md-2 col-sm-3 col-12 col-xs-12" style="padding-left: 3px;">
                            <button type="search" id="search_btn"><?= get_sub_field('search_button_text'); ?></button>
                        </div>
                    </form>
                    <div id="get_fetched_data"></div>
                </div>
                <div id="filter-spinner" style="margin:auto;width:200px;">
                    <i class="fa fa-spinner fa-spin" style="color:black;font-size:24px"></i>
                </div>
                <div class="inventory-new-layout">
                    <div class="inventory-box">
                        <?php foreach ($data1['boat_listing'] as $listing) : ?>
                            <?php
                            $row_description = '';
                            if (!empty($listing['year'])) {
                                $row_description .= $listing['year'] . ' ';
                            }
                            if (!empty($listing['saleclasscode'])) {
                                $row_description .= $listing['saleclasscode'] . ' ';
                            }
                            if (!empty($listing['model'])) {
                                $row_description .= $listing['model'] . ' ';
                            }
                            if (!empty($listing['make'])) {
                                $row_description .= $listing['make'];
                            }

                            ?>
                            <div class="inventory-box-each">
                                <div class="inven-img">
                                    <?php
                                    if (isset($listing['images']->ImageAttachmentExtended) && is_array($listing['images']->ImageAttachmentExtended)) { ?>
                                        <img src="<?php echo $listing['images']->ImageAttachmentExtended[0]->URI; ?>">
                                    <?php } else if (isset($listing['images']->ImageAttachmentExtended)) { ?>
                                        <img src="<?php echo $listing['images']->ImageAttachmentExtended->URI; ?>">
                                    <?php } else { ?>
                                        <img src="<?= site_url(); ?>/wp-content/uploads/2023/02/Mask-Group-5.png" alt="">
                                    <?php } ?>
                                    <div class="stip-inventory">
                                        <?php if (isset($listing['status'])) : ?>
                                            <p><?= $listing['status']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="inven-costal">
                                    <h4>
                                        <?= $row_description; ?>
                                    </h4>
                                    <ul>
                                        <li>
                                            <?= get_sub_field('boat_description_title_1'); ?>
                                            <?php if (!empty($listing['saleclasscode'])) {
                                                echo $listing['saleclasscode'];
                                            } ?>
                                        </li>
                                        <?php if ($listing['class'] != '') { ?>
                                            <li>

                                                <?= get_sub_field('boat_description_title_2'); ?>
                                                <?php
                                                echo $listing['class'];
                                                ?>
                                            </li>
                                        <?php } ?>
                                        <?php if ($listing['length'] != '') { ?>
                                            <li>
                                                <?= get_sub_field('boat_description_title_3') . " "; ?>
                                                <?php $bexp = explode('.', $listing['length']);
                                                if (!empty($bexp)) {
                                                    $ff = $bexp[0];
                                                    $fin = isset($bexp[1]) ? $bexp[1] : 0;
                                                    $fin = floatval('.' . $fin);
                                                    $fin = floor(($fin * 12));
                                                    echo $nlength = $ff . "'" . ' ' . $fin . '"';
                                                } else {
                                                    echo $listing['length'];
                                                } ?>
                                            </li>
                                        <?php } ?>
                                        <?php if ($listing['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity != '') { ?>
                                            <li>
                                                <?= get_sub_field('boat_description_title_4'); ?>
                                                <?php {
                                                    echo $listing['images']->VehicleRemarketingBoat->TotalEnginePowerQuantity;
                                                } ?>
                                            </li>
                                        <?php } ?>
                                        <?php if ($listing['beam'] != '') { ?>
                                            <li>
                                                <?= get_sub_field('boat_description_title_5'); ?>
                                                <?php
                                                $bmexp = explode('.', $listing['beam']);
                                                if (!empty($bmexp)) {
                                                    $ff = $bmexp[0];
                                                    $fin = isset($bmexp[1]) ? $bmexp[1] : 0;
                                                    $fin = floatval('.' . $fin);
                                                    $fin = floor(($fin * 12));
                                                    echo $nbeam = $ff . "'" . ' ' . $fin . '"';
                                                } else {
                                                    echo $listing['beam'];
                                                } ?>
                                            </li>
                                        <?php } ?>

                                        <li>
                                            <?= get_sub_field('boat_description_title_6'); ?>
                                            <?php if (!empty($listing['location'])) {
                                                echo $listing['location'];
                                            } ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inven-btns">
                                    <button data-toggle="modal" data-target=".exampleModalLong" class="get_quote" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('get_quote_button'); ?></button>
                                    <button data-toggle="modal" data-target=".exampleModalLong_two" class="value_trade" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('value_trade_button'); ?></button>
                                    <button data-toggle="modal" data-target=".exampleModalLong_three" class="finance" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('financing_button'); ?></button>
                                    <button data-toggle="modal" data-target=".exampleModalLong_four" class="test_drive" data-boat="<?= $listing['documentid']; ?>"><?= get_sub_field('test_drive_button'); ?></button>
                                    <button class="inventory-view"><a href="<?= site_url(); ?>/inventory-listing/?q=<?= $listing['documentid']; ?>" style="color:#fff;text-decoration:none;"><?= get_sub_field('view_testing_button'); ?></a></button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('get_in_touch_area')) :
    while (have_rows('get_in_touch_area')) : the_row();
        if (get_row_layout('') == "all_content") :

?>
            <section class="contact-sec">
                <div class="cont-sec">
                    <div class="img-sec">
                        <img src="<?= get_sub_field('desktop_image'); ?>" class="contact-desk" alt="">
                        <img src="<?= get_sub_field('mobile_image'); ?>" class="contact-phone" alt="">
                    </div>
                    <div class="hr">
                    </div>
                    <div class="cont-details">
                        <h2>
                            <?= get_sub_field('heading_get'); ?>
                        </h2>
                        <a href="<?= get_sub_field('get_in_touch_button_link'); ?>">
                            <?= get_sub_field('get_in_touch_button'); ?>
                        </a>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<?php
if (have_rows('uncommon_discoveries_area')) :
    while (have_rows('uncommon_discoveries_area')) : the_row();
        if (get_row_layout('') == "all_content") :

?>

            <section class="uncommon-d">
                <div class="uncommon-text">
                    <h3>
                        <?= get_sub_field('heading'); ?>
                    </h3>
                    <?= get_sub_field('para'); ?>
                </div>
            </section>

<?php
        endif;
    endwhile;
endif;
?>


<!-- ========== GET QUOTE MODAL ========== -->

<div class="modal fade quote-form exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>REQUEST A CALL BACK</h3>
                        <h4>(INVENTORY)</h4>
                    </div>
                    <div class="request-form get_quote_form">
                        <?php echo do_shortcode('[contact-form-7 id="6673" title="Get Quote Form"]'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== VALUE TRADE MODAL ========== -->

<div class="modal fade quote-form exampleModalLong_two" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>REGISTER FOR A<br class="phone-break"> NO-OBLIGATION<br class="both-break"> TRADE VALUATION
                            FOR
                            <br class="phone-break"> YOUR VESSEL.
                        </h3>
                    </div>
                    <div class="request-form value_trade_form">
                        <?php echo do_shortcode('[contact-form-7 id="6674" title="Value Trade Form"]'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== FINANCING MODAL ========== -->

<div class="modal fade quote-form exampleModalLong_three" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>
                            <?= get_field('heading_finanacing'); ?>
                        </h3>
                    </div>
                    <div class="modal-cont">
                        <?= get_field('paragraph_financing'); ?>
                    </div>
                    <div class="request-form finance_form">
                        <?php echo do_shortcode('[contact-form-7 id="6675" title="Finance Form"]'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== TEST DRIVE MODAL ========== -->

<div class="modal fade quote-form exampleModalLong_four" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="request-form-sec">
                    <div class="request-head">
                        <h3>TEST DRIVE</h3>
                    </div>
                    <div class="request-form test_drive_form">
                        <?php echo do_shortcode('[contact-form-7 id="6676" title="Test Drive Form"]'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
get_footer();
?>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) { // <-- add this wrapper
        var element = document.querySelectorAll('.inventory-drop-list li');
        if (element) {
            element.forEach(function(el, key) {

                el.addEventListener('click', function() {
                    el.classList.toggle("active");
                    element.forEach(function(ell, els) {});
                });
            });
        }
    });
</script>
<script>
    let $ = jQuery;

    $(document).ready(function() {
        $(".stock_number").val("Yacht Division");

        function get_all_forms() {
            $(".get_quote").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "get_quote_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".get_quote_form input[name='BoatTenderName']").val(obj.year + " " +
                            obj.saleclasscode + " " + obj.model + " " + obj.make);
                        $(".get_quote_form input[name='modelyear']").val(obj.year);
                        $(".get_quote_form input[name='model']").val(obj.model);
                        $(".get_quote_form input[name='make']").val(obj.make);
                    }
                });
            })
            $(".value_trade").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "value_trade_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".value_trade_form input[name='Manufacturer']").val(obj.make);
                        $(".value_trade_form input[name='Model']").val(obj.model);
                        $(".value_trade_form input[name='Madeyear']").val(obj.year);
                    }
                });
            });
            $(".finance").click(function() {
                let id = $(this).attr("data-boat");
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "finance_form",
                        id: id
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $(".finance_form input[name='manufacturer']").val(obj.make);
                        $(".finance_form input[name='model']").val(obj.model);
                    }
                });
            });
            $(".test_drive").click(function() {
                let id = $(this).attr("data-boat");
                // console.log(id);
                $.ajax({
                    url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                    type: "post",
                    data: {
                        action: "test_drive_form",
                        id: id
                    },
                    success: function(data) {
                        // console.log(data);
                        let obj = JSON.parse(data);
                        $(".test_drive_form input[name='SailboatCatamaranname']").val(obj.year +
                            " " + obj
                            .saleclasscode + " " + obj.model + " " + obj.make);
                    }
                });
            });
        }

        function setWidthHeight() {
            var cw = jQuery('.inventory-box .inventory-box-each .inven-img img').width();
            jQuery('.inventory-box .inventory-box-each .inven-img img').height(cw);
        }

        //Get A Quote Form Button
        $(".get_quote").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "get_quote_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".get_quote_form input[name='BoatTenderName']").val(obj.year + " " + obj
                        .saleclasscode + " " + obj.model + " " + obj.make);
                    $(".get_quote_form input[name='modelyear']").val(obj.year);
                    $(".get_quote_form input[name='model']").val(obj.model);
                    $(".get_quote_form input[name='make']").val(obj.make);
                }
            });
        });

        //Value Trade Form Button
        $(".value_trade").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "value_trade_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".value_trade_form input[name='Manufacturer']").val(obj.make);
                    $(".value_trade_form input[name='Model']").val(obj.model);
                    $(".value_trade_form input[name='Madeyear']").val(obj.year);
                }
            });
        });

        //Finance Form Button
        $(".finance").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "finance_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".finance_form input[name='manufacturer']").val(obj.make);
                    $(".finance_form input[name='model']").val(obj.model);
                }
            });
        });

        //===================Test Drive Form Button============================================================
        $(".test_drive").click(function() {
            let id = $(this).attr("data-boat");
            $.ajax({
                url: "<?= admin_url() . 'admin-ajax.php'; ?>",
                type: "post",
                data: {
                    action: "test_drive_form",
                    id: id
                },
                success: function(data) {
                    let obj = JSON.parse(data);
                    $(".test_drive_form input[name='SailboatCatamaranname']").val(obj.year +
                        " " + obj
                        .saleclasscode + " " + obj.model + " " + obj.make);
                }
            });
        });

        //===================Search Field Function To Find Matched Data========================================
        let display = false;
        $("#search_field").keyup(function() {
            let keyword = $(this).val();
            if ($("#hidden_field_search").val() == '13') {
                return;
            }
            display = true;
            if ($(this).val() == "") {
                display = false;
                $("#get_fetched_data").hide();
            }
            $.ajax({
                type: "post",
                url: "<?= admin_url('admin-ajax.php'); ?>",
                data: {
                    keyword,
                    action: "get_particular_data"
                },
                success: function(data) {
                    if (!display) return;
                    $("#get_fetched_data").show();
                    let obj = JSON.parse(data);
                    $("#get_fetched_data").html(obj.data);
                    $(".fetched_data").on('click', function() {
                        // alert("clicked");
                        let text_data = $(this).text();
                        $("#get_fetched_data").hide();
                        $("#search_field").val(text_data);
                        let id = $(this).attr("data-boatid");
                        $.ajax({
                            type: "post",
                            url: "<?= admin_url('admin-ajax.php'); ?>",
                            data: {
                                id,
                                action: "get_the_searched_data",
                            },
                            success: function(data) {
                                // let obj = JSON.parse(data)
                                $(".inventory-box").html(data);
                                get_all_forms();
                                setWidthHeight();
                            }
                        })
                    });
                }
            })

        });

        //===================Rest button Scripts===============================================================
        $(".reset").click(function() {
            location.reload();
        });

        //===================Declared Array Variables for getting all the selected filters data=============
        let makes = [];
        let lengths_from = [];
        let lengths_to = [];
        let years = [];
        let prices_from = [];
        let prices_to = [];
        let locations = [];
        let status = [];
        let boat_types = [];
        let get_all_value_checked = [];
        let models = [];

        //=================Clear Filter Button Ajax on filter area Inventory Page===============================
        $(".clear_data").click(function() {
            $('.clear_data').siblings().remove();
            $(".mediagallery-active-filters").hide();
            $(".inventory-drop-list li").removeClass('active');
            $("#get_model_data").html("");
            let local_items = [];
            $(".checked_items:checked").each(function(index, items) {
                local_items.push(items.value);
            })
            get_all_value_checked = local_items;
            makes = [];
            models = [];
            lengths_from = [];
            lengths_to = [];
            years = [];
            prices_from = [];
            prices_to = [];
            locations = [];
            status = [];
            boat_types = [];
            $.ajax({
                url: "<?= admin_url('admin-ajax.php'); ?>",
                type: "post",
                data: {
                    get_all_value_checked,
                    action: "get_all_filtered_data",
                },
                beforeSend: function(data) {
                    $("#filter-spinner").show();
                },
                success: function(data) {
                    // console.log(data);
                    let obj = JSON.parse(data)
                    $("#filter-spinner").hide();
                    $(".inventory-box").html(obj.searched_data);
                    get_all_forms();
                    setWidthHeight();
                }
            });
        });



        //===========================Filter Tab Searching AJAX on Inventory Page Starts Here==============================
        $("#filter-search").delegate('.filter-list,.filter-list-model', 'click', function() {
            if ($(this).hasClass('Model') && $(this).hasClass('active')) {
                $(this).removeClass("active");
            } else if ($(this).hasClass('Model') && !($(this).hasClass('active'))) {
                $(this).addClass("active");
            }
            let local_items = [];
            $(".checked_items:checked").each(function(index, items) {
                local_items.push(items.value);
            });
            get_all_value_checked = local_items;
            let list_val = $(this).text();
            let filter_list_id = $(this).attr('id');
            let classes = $(this).attr('class').split(' ');
            let filter_data = classes[1];
            let len = classes.length;
            if (len == 3) {
                if ($(this).hasClass('Make')) {
                    makes.push(list_val);
                    $(".Model").parent("a").remove();
                    models = [];
                } else if ($(this).hasClass('Model')) {
                    models.push(list_val);
                } else if ($(this).hasClass('Length')) {
                    let data_from_length = $(this).attr('data-from');
                    let data_to_length = $(this).attr('data-to');
                    lengths_from.push(data_from_length);
                    lengths_to.push(data_to_length);
                } else if ($(this).hasClass('Year')) {
                    years.push(list_val);
                } else if ($(this).hasClass('Price')) {
                    let data_from_price = $(this).attr('data-from');
                    let data_to_price = $(this).attr('data-to');
                    prices_from.push(data_from_price);
                    prices_to.push(data_to_price);
                } else if ($(this).hasClass('Location')) {
                    locations.push(list_val);
                } else if ($(this).hasClass('Status')) {
                    status.push(list_val);
                } else if ($(this).hasClass('Boat_Type')) {
                    boat_types.push(list_val);
                }
                $(".inventory-drop-list").hide();
                $(".mediagallery-active-filters").show();

                $(".filter").prepend('<a class="filter-link remove-filter ' + filter_list_id +
                    '" data-list_val="' + list_val + '" ><span class="' + classes[1] + '">' + classes[1]
                    .replace("_", " ") + ': </span><span class="active-filter-value">' + list_val +
                    '</span><i class="fa fa-times"></i></a>');
            } else {
                if ($(this).hasClass('Make')) {
                    makes.splice(makes.indexOf(list_val), 1);
                    $(".Model").parent("a").remove();
                    models = [];
                } else if ($(this).hasClass('Model')) {
                    models.splice(models.indexOf(list_val), 1);
                } else if ($(this).hasClass('Length')) {
                    let data_from_length = $(this).attr('data-from');
                    let data_to_length = $(this).attr('data-to');
                    lengths_from.splice(lengths_from.indexOf(data_from_length), 1);
                    lengths_to.splice(lengths_to.indexOf(data_to_length), 1);
                } else if ($(this).hasClass('Year')) {
                    years.splice(years.indexOf(list_val), 1);
                } else if ($(this).hasClass('Price')) {
                    let data_from_price = $(this).attr('data-from');
                    let data_to_price = $(this).attr('data-to');
                    prices_from.splice(prices_from.indexOf(data_from_price), 1);
                    prices_to.splice(prices_to.indexOf(data_to_price), 1);
                } else if ($(this).hasClass('Location')) {
                    locations.splice(locations.indexOf(list_val), 1);
                } else if ($(this).hasClass('Status')) {
                    status.splice(status.indexOf(list_val), 1);
                } else if ($(this).hasClass('Boat_Type')) {
                    boat_types.splice(boat_types.indexOf(list_val), 1);
                }
                $("." + filter_list_id).remove();
            }
            $.ajax({
                url: "<?= admin_url('admin-ajax.php'); ?>",
                type: "post",
                data: {
                    boat_types,
                    makes,
                    lengths_from,
                    lengths_to,
                    years,
                    prices_from,
                    prices_to,
                    locations,
                    status,
                    models,
                    get_all_value_checked,
                    action: "get_all_filtered_data",
                },
                beforeSend: function(data) {
                    $("#filter-spinner").show();
                },
                success: function(data) {
                    $("#filter-spinner").hide();
                    let obj = JSON.parse(data);
                    $(".inventory-box").html(obj.searched_data);
                    if (filter_data == "Make" && filter_data != "Model") {
                        $("#get_model_data").html(obj.model_data);
                    }
                    get_all_forms();
                    setWidthHeight();
                }
            });
        });
        //===========================Filter Tab Searching AJAX on Inventory Page Ends Here================================

        //==========================Checkbox Click Event AJAX Starts Here=================================================
        $(".checked_items").on("click", function() {
            let local_items = [];
            $(".checked_items:checked").each(function(index, items) {
                local_items.push(items.value);
            })
            get_all_value_checked = local_items;
            $.ajax({
                url: "<?= admin_url('admin-ajax.php'); ?>",
                type: "post",
                data: {
                    get_all_value_checked,
                    boat_types,
                    makes,
                    models,
                    lengths_from,
                    lengths_to,
                    years,
                    prices_from,
                    prices_to,
                    status,
                    locations,
                    action: "get_all_filtered_data",
                },
                beforeSend: function(data) {
                    $("#filter-spinner").show();
                },
                success: function(data) {
                    let obj = JSON.parse(data)
                    $("#filter-spinner").hide();
                    $(".inventory-box").html(obj.searched_data);
                    get_all_forms();
                    setWidthHeight();
                }
            });
        });
        //==========================Checkbox Click Event AJAX Ends Here===================================================

        //==========================Remove Filter Button Ajax Starts======================================================
        $(".filter").on("click", ".remove-filter", function() {
            let count = $(".filter").children().length;
            let remove_class = ($(this).attr("class").split(" "))[2];
            let list_val = $("#" + remove_class).text();
            let class_rmf = $(this).children("span:first-child").attr("class");
            if (class_rmf == "Make") {
                models = [];
                $("#get_model_data").html("");
                $(".Model").parent("a").remove();
            }
            if (count == 2) {
                if ($("#" + remove_class).hasClass('Make')) {
                    makes.splice(makes.indexOf(list_val), 1);
                    models = [];
                    $(".Model").parent('a').remove();
                } else if ($("#" + remove_class).hasClass('Model')) {
                    models.splice(models.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Length')) {
                    let data_from_length = $("#" + remove_class).attr('data-from');
                    let data_to_length = $("#" + remove_class).attr('data-to');
                    lengths_from.splice(lengths_from.indexOf(data_from_length), 1);
                    lengths_to.splice(lengths_to.indexOf(data_to_length), 1);
                } else if ($("#" + remove_class).hasClass('Year')) {
                    years.splice(years.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Price')) {
                    let data_from_price = $("#" + remove_class).attr('data-from');
                    let data_to_price = $("#" + remove_class).attr('data-to');
                    prices_from.splice(prices_from.indexOf(data_from_price), 1);
                    prices_to.splice(prices_to.indexOf(data_to_price), 1);
                } else if ($("#" + remove_class).hasClass('Location')) {
                    locations.splice(locations.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Status')) {
                    status.splice(status.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Boat_Type')) {
                    boat_types.splice(boat_types.indexOf(list_val), 1);
                }
                $('.clear_data').siblings().remove();
                $(".mediagallery-active-filters").hide();
                $(".inventory-drop-list li").removeClass('active');
                let local_items = [];
                $(".checked_items:checked").each(function(index, items) {
                    local_items.push(items.value);
                })
                get_all_value_checked = local_items;
                $.ajax({
                    url: "<?= admin_url('admin-ajax.php'); ?>",
                    type: "post",
                    data: {
                        get_all_value_checked,
                        action: "get_all_filtered_data",
                    },
                    beforeSend: function(data) {
                        $("#filter-spinner").show();
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $("#filter-spinner").hide();
                        $(".inventory-box").html(obj.searched_data);
                        if (class_rmf == "Make") {
                            $("#get_model_data").html(obj.model_data);
                        }
                        get_all_forms();
                        setWidthHeight();
                    }
                });
            } else {
                $(this).remove();
                $("#" + remove_class).removeClass('active');
                if ($("#" + remove_class).hasClass('Make')) {
                    makes.splice(makes.indexOf(list_val), 1);
                    models = [];
                } else if ($("#" + remove_class).hasClass('Model')) {
                    models.splice(models.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Length')) {
                    let data_from_length = $("#" + remove_class).attr('data-from');
                    let data_to_length = $("#" + remove_class).attr('data-to');
                    lengths_from.splice(lengths_from.indexOf(data_from_length), 1);
                    lengths_to.splice(lengths_to.indexOf(data_to_length), 1);
                } else if ($("#" + remove_class).hasClass('Year')) {
                    years.splice(years.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Price')) {
                    let data_from_price = $("#" + remove_class).attr('data-from');
                    let data_to_price = $("#" + remove_class).attr('data-to');
                    prices_from.splice(prices_from.indexOf(data_from_price), 1);
                    prices_to.splice(prices_to.indexOf(data_to_price), 1);
                } else if ($("#" + remove_class).hasClass('Location')) {
                    locations.splice(locations.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Status')) {
                    status.splice(status.indexOf(list_val), 1);
                } else if ($("#" + remove_class).hasClass('Boat_Type')) {
                    boat_types.splice(boat_types.indexOf(list_val), 1);
                }
                let local_items = [];
                $(".checked_items:checked").each(function(index, items) {
                    local_items.push(items.value);
                })
                get_all_value_checked = local_items;
                $.ajax({
                    url: "<?= admin_url('admin-ajax.php'); ?>",
                    type: "post",
                    data: {
                        get_all_value_checked,
                        boat_types,
                        makes,
                        lengths_from,
                        lengths_to,
                        years,
                        prices_from,
                        prices_to,
                        status,
                        locations,
                        models,
                        action: "get_all_filtered_data",
                    },
                    beforeSend: function(data) {
                        $("#filter-spinner").show();
                    },
                    success: function(data) {
                        let obj = JSON.parse(data);
                        $("#filter-spinner").hide();
                        $(".inventory-box").html(obj.searched_data);
                        if (class_rmf == "Make") {
                            $("#get_model_data").html(obj.model_data);
                        }
                        get_all_forms();
                        setWidthHeight();
                    }
                });
            }
        });
        //==========================Remove Filter Button Ajax Ends======================================================

        //==========================Search Field Also work on typing enter code starts here=============================
        $('#search_field').keypress(function(event) {
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if (keycode == '13') {
                $("#hidden_field_search").val(keycode);
                $("#search_btn").trigger("click");
                $("#get_fetched_data").hide();
            }
        });
        //==========================Search Field Also work on typing enter code ends here===============================

        //==========================Search Button Ajax starts here======================================================
        $("#search_btn").click(function(e) {
            e.preventDefault();
            $("#get_fetched_data").hide();
            let search_name = $("input[type='search']").val();
            if (search_name == "") {
                alert("Please Enter Any Search Key in the searchbar");
                return;
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= admin_url('admin-ajax.php'); ?>",
                    data: {
                        search_name,
                        action: "search_data_by_clicking_search_btn"
                    },
                    beforeSend: function() {
                        $("#search_btn").html(
                            'Search <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>'
                        );
                        $("#get_fetched_data").hide();
                    },
                    success: function(data) {
                        $("#get_fetched_data").hide();
                        let obj = JSON.parse(data);
                        $("#search_btn").html("Search");
                        $(".inventory-box").html(obj.data);
                        get_all_forms();
                        setWidthHeight();
                    }
                })
            }
        });
        //==========================Search Button Ajax ends here========================================================

        //==========================Restrict Date Field to choose date from Today=======================================
        $(".test_drive_form input[name='date']").attr("min", "<?php echo date('Y-m-d'); ?>");

        //==========================Save All Data to Database AJAX======================================================
        $.ajax({
            url: "<?= admin_url('admin-ajax.php'); ?>",
            type: "post",
            data: {
                action: "enter_all_data_to_database_from_api",
            },
            success: function(data) {
                let obj = JSON.parse(data);
            }
        });
        //==========================Save All Data to Database AJAX======================================================
    });
</script>