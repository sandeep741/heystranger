<?php require_once('lib/config.php'); ?>
<?php require_once('head.php'); ?>
<?php require_once('header.php'); ?>
<?php $acco = getAccomodationListing(); ?>
<div class="global-wrap container-fluid">
    <div class="row">
        <div class="full-page-absolute" style="position: fixed;
             top: 0px;
             left: 0px;
             right:0px;
             bottom: 0px;
             z-index: 99999">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/uploads/2014/11/upper_lake_in_new_york_central_park_800x6001.jpg)"></div>
                <div class="bg-holder-content full text-white text-center">
                    <a class="logo-holder" href="#">
                        <img src="http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/uploads/st_uploadfont/logo-white.png" alt="logo" title="logo" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="spinner-clock">
                                <div class="spinner-clock-hour"></div>
                                <div class="spinner-clock-minute"></div>
                            </div>
                            <h2 class="mb5">
                                Looking for
                            </h2>
                            <p class="text-bigger">it will take a couple of seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once 'breadcrumb.php'; ?>
        <div class="mfp-with-anim mfp-dialog mfp-search-dialog mfp-hide" id="search-dialog">
            <h3>Search for Hotels</h3>
            <form role="search" method="get" class="search main-search" action="#">
                <input type="hidden" name="layout" value="">
                <input type="hidden" name="style" value="">
                <input type="hidden" name="lang" value="en">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-lg form-group-icon-left">
                            <label for="field-hotel-location">Where</label>
                            <i class="fa fa-map-marker input-icon"></i>
                            <div class="st-select-wrapper">
                                <input id="field-hotel-location" autocomplete="off" type="text" name="location_name" value="" class="form-control st-location-name  required" placeholder="Destination; Zip Code">
                                <select id="field-hotel-location" name="location_id" class="st-location-id st-hidden" placeholder="Destination; Zip Code" tabindex="-1">
                                    <option value=""></option>
                                    <option  value="277">Russia||87144</option>
                                    <option  value="279">Germany||108 303</option>
                                    <option  value="285">Australia||16 192</option>
                                    <option  value="276">Sydney, Australia||16 192</option>
                                    <option  value="5410">Japan||363564</option>
                                    <option  value="287">Paris, France||39 664</option>
                                    <option  value="1957">United States||70 686</option>
                                    <option  value="275">New York City, United States||3 560</option>
                                    <option  value="284">Las Vegas, Nevada State, United States||70 686</option>
                                    <option  value="1952">Virginia  State, United States||1 430</option>
                                    <option  value="282">Virginia Beach, Virginia  State, United States||1 205</option>
                                </select>
                                <div class="option-wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div data-date-format="mm/dd/yyyy" class="form-group input-daterange  form-group-lg form-group-icon-left">
                            <label for="field-hotel-checkin">Check in</label>
                            <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                            <input id="field-hotel-checkin" placeholder="mm/dd/yyyy" class="form-control checkin_hotel off" value="" name="start" type="text" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div data-date-format="mm/dd/yyyy" class="form-group input-daterange form-group-lg form-group-icon-left">
                            <label for="field-hotel-checkout">Check out</label>
                            <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                            <input id="field-hotel-checkout" placeholder="mm/dd/yyyy" class="form-control off checkout_hotel" value="" name="end" type="text" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-lg form-group-select-plus">
                            <label for="field-hotel-room-num">Rooms</label>
                            <div class="btn-group btn-group-select-num " data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" value="1" name="options" />1</label>
                                <label class="btn btn-primary ">
                                    <input type="radio" value="2" name="options" />2</label>
                                <label class="btn btn-primary ">
                                    <input type="radio" value="3" name="options" />3</label>
                                <label class="btn btn-primary ">
                                    <input type="radio" value="4" name="options" />3+</label>
                            </div>
                            <select id="field-hotel-room-num" class="form-control hidden " name="room_num_search">
                                <option  value='1'>1</option>
                                <option  value='2'>2</option>
                                <option  value='3'>3</option>
                                <option  value='4'>4</option>
                                <option  value='5'>5</option>
                                <option  value='6'>6</option>
                                <option  value='7'>7</option>
                                <option  value='8'>8</option>
                                <option  value='9'>9</option>
                                <option  value='10'>10</option>
                                <option  value='11'>11</option>
                                <option  value='12'>12</option>
                                <option  value='13'>13</option>
                                <option  value='14'>14</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group form-group-lg form-group-select-plus">
                            <label for="field-hotel-adult">Adult</label>
                            <div class="btn-group btn-group-select-num " data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" value="1"  />1</label>
                                <label class="btn btn-primary ">
                                    <input type="radio" value="2"  />2</label>
                                <label class="btn btn-primary ">
                                    <input type="radio" value="3"  />3</label>
                                <label class="btn btn-primary ">
                                    <input type="radio" value="4"  />3+</label>
                            </div>
                            <select id="field-hotel-adult" class="form-control hidden" name="adult_number">
                                <option  value='1'>1</option>
                                <option  value='2'>2</option>
                                <option  value='3'>3</option>
                                <option  value='4'>4</option>
                                <option  value='5'>5</option>
                                <option  value='6'>6</option>
                                <option  value='7'>7</option>
                                <option  value='8'>8</option>
                                <option  value='9'>9</option>
                                <option  value='10'>10</option>
                                <option  value='11'>11</option>
                                <option  value='12'>12</option>
                                <option  value='13'>13</option>
                                <option  value='14'>14</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--Search Advande-->
                <div class="search_advance">
                    <div class="expand_search_box form-group-">
                        <span class="expand_search_box-more"> <i class="btn btn-primary fa fa-plus mr10"></i>Advanced Search</span>
                        <span class="expand_search_box-less"> <i class="btn btn-primary fa fa-minus mr10"></i>Advanced Search</span>
                    </div>
                    <div class="view_more_content_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-custom-taxonomy form-group form-group-lg"
                                     taxonomy="hotel_facilities">
                                    <label for="field-hotel-tax-hotel_facilities">Hotel Theme</label>
                                    <div class="row">
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="4"/>Airport Transport                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="168"/>Bar                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="159"/>Bathrobe                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="158"/>Bathroom                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="169"/>Breakfast in the room                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="184"/>Cable Channels                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="181"/>Casino                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="182"/>Desk                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="8"/>Fitness Center                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="174"/>Garden                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="163"/>Hairdryer                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="180"/>Hot tub                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="166"/>Linen                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="179"/>Massage                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="172"/>Minibar                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="173"/>Outdoor pool (all year)                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="135"/>Parking                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="136"/>Pool                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="10"/>Restaurant                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="170"/>Restaurant (à la carte)                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="171"/>Restaurant (buffet)                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="185"/>Satellite Channels                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="176"/>Sauna                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="183"/>Seating Area                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="161"/>Shower                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="7"/>Shuttle Bus Service                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="164"/>Slippers                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="11"/>SPA                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="178"/>Spa and wellness centre                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="186"/>Telephone                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="175"/>Terrace                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="162"/>Toilet                            </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="160"/>Towels                            </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"                                        type="checkbox"
                                                       value="134"/>Wi-Fi Internet                            </label>
                                        </div>
                                    </div>
                                    <input type="hidden" class="data_taxonomy" name="taxonomy[hotel_facilities]" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-custom-taxonomy form-group form-group-lg"
                                     taxonomy="room_type">
                                    <label for="field-hotelroom-tax-room_type">Room Facilitites</label>
                                    <div class="row">
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"   type="checkbox"
                                                       value="18"/>Deluxe                        </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"   type="checkbox"
                                                       value="76"/>Family Suite                        </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"   type="checkbox"
                                                       value="19"/>Normal                        </label>
                                        </div>
                                        <div  style='clear:both' class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"   type="checkbox"
                                                       value="21"/>Queen Room                        </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"   type="checkbox"
                                                       value="22"/>Standard Double-Double Room                        </label>
                                        </div>
                                        <div  class="checkbox col-xs-12 col-sm-4">
                                            <label>
                                                <input class="i-check item_tanoxomy"   type="checkbox"
                                                       value="20"/>Standard Room                        </label>
                                        </div>
                                    </div>
                                    <input type="hidden" class="data_taxonomy" name="taxonomy_hotel_room[room_type]" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-lg form-group-icon-left">
                                    <label for="field-hotel-location">Hotel Name</label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <div class="st-select-wrapper">
                                        <input id="field-hotel-location" autocomplete="off" type="text" name="location_name" value="" class="form-control st-location-name  off" placeholder="">
                                        <select id="field-hotel-location" name="location_id" class="st-location-id st-hidden" placeholder="" tabindex="-1">
                                            <option value=""></option>
                                            <option  value="277">Russia||87144</option>
                                            <option  value="279">Germany||108 303</option>
                                            <option  value="285">Australia||16 192</option>
                                            <option  value="276">Sydney, Australia||16 192</option>
                                            <option  value="5410">Japan||363564</option>
                                            <option  value="287">Paris, France||39 664</option>
                                            <option  value="1957">United States||70 686</option>
                                            <option  value="275">New York City, United States||3 560</option>
                                            <option  value="284">Las Vegas, Nevada State, United States||70 686</option>
                                            <option  value="1952">Virginia  State, United States||1 430</option>
                                            <option  value="282">Virginia Beach, Virginia  State, United States||1 205</option>
                                        </select>
                                        <div class="option-wrapper"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" form-group form-group-12 ">    <label>Filter Price </label><input name="price_range" type="text" value="0;354" class="price-slider" data-symbol="$" data-min="0" data-max="354" data-step="0">     </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End search Advance-->
                <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
            </form>
        </div>
        <div class="container mb20">
            <div class="vc_row wpb_row st bg-holder vc_custom_1419417667101">
                <div class='container '>
                    <div class='row'>
                        <div class="wpb_column column_container col-md-12">
                            <div class="vc_column-inner wpb_wrapper">
                                <h3 class="booking-title"><?php echo count($acco['record']); ?> hotels   <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small></h3>
                            </div>
                        </div>
                    </div>
                    <!--End .row-->
                </div>
                <!--End .container-->
            </div>
            <div class="vc_row wpb_row st bg-holder">
                <div class='container '>
                    <div class='row'>
                        <?php require_once 'filter.php'; ?>
                        <div class="col-sm-7 wpb_column column_container col-md-9">
                            <div class="vc_column-inner wpb_wrapper">
                                <div class="nav-drop booking-sort">
                                    <!--    <h5 class="booking-sort-title"><a href="#" onclick="return false" >-->
                                    <!--            --><!---->
                                    <!--            <i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>-->
                                    <!--    <ul class="nav-drop-menu">-->
                                    <!--        --><!--    </ul>-->
                                </div>
                                <div class="sort_top">
                                    <div class="row">
                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                            <ul class="nav nav-pills">
                                                <li><a href="#">Date</a>
                                                <li><a href="#">Price (low to high)</a>
                                                <li><a href="#">Price (high to low)</a>
                                                <li><a href="#">Name (A-Z)</a>
                                                <li><a href="#">Name (Z-A)</a>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-3 text-center">
                                            <div class="sort_icon fist"><a class="active" href="#"><i class="fa fa-th-large "></i></a></div>
                                            <div class="sort_icon last"><a class="" href="#"><i class="fa fa-list "></i></a></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row row-wrap loop_hotel loop_grid_hotel style_box">

                                    <?php
                                    if (isset($acco['record']) && !empty($acco['record']) && is_array($acco['record'])) {


                                        foreach ($acco['record'] as $accod) {
                                            $path = "partner-backoffice/img-accomo/" . $accod->acc_img1;

                                            if (file_exists($path) && isset($accod->acc_img1) && !empty($accod->acc_img1)) {
                                                $file_path = $path;
                                            } else {

                                                $file_path = "partner-backoffice/img-accomo/img_not_found.jpg";
                                            }
                                            $price = getAccomodationPrice($accod->id);
                                            ?>
                                            <div class="col-md-4">
                                                <div class="thumb">
                                                    <header class="thumb-header">
                                                        <a class="hover-img" href="hotel-detail.php?id=<?php echo base64_encode($accod->id); ?>">
                                                            <img width="360" height="270" src="<?php echo $file_path; ?>" class="attachment-360x270 size-360x270 wp-post-image" alt="" srcset="<?php echo $file_path; ?>" sizes="(max-width: 360px) 100vw, 360px" />
                                                            <h5 class="hover-title-center"><?php echo $accod->accomod_name; ?></h5>
                                                        </a>
                                                        <img alt="avatar" width=45 height=45 src="http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/uploads/bfi_thumb/amaze_300x300-3260j5oo2yc3tktwqq29s0.jpg" class="avatar avatar-96 photo origin round" >
                                                    </header>
                                                    <div class="thumb-caption">
                                                        <ul class="icon-list icon-group booking-item-rating-stars">
                                                            <span class="pull-left mr10">Hotel star</span>
                                                            <?php
                                                            for ($i = 1; $i <= 5; $i++) {
                                                                if ($accod->rating >= $i) {
                                                                    $fill = "";
                                                                } else {
                                                                    $fill = "-o";
                                                                }
                                                                ?>
                                                                <li><i class="fa  fa-star<?php echo $fill; ?>"></i></li>
                                                            <?php } ?>

                                                        </ul>
                                                        <h5 class="thumb-title"><a class="text-darken"
                                                                                   href="hotel-detail.php"><?php echo $accod->accomod_name; ?></a></h5>
                                                        <p class="mb0">
                                                            <small><i class="fa fa-map-marker"></i><?php echo $accod->street_address; ?></small>
                                                        </p>
                                                        <div class="text-darken">
                                                        </div>
                                                        <p class="mb0 text-darken">
                                                            <small>
                                                                Price from                                    </small>
                                                            <span class="text-lg lh1em"><?php echo (!empty($price) && isset($price) ? CURRENCY . $price : 'call for enquiry'); ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>

                                    <div class="row" style="margin-bottom: 40px;">
                                        <div class="col-sm-12">
                                            <hr>
                                            <p class="gap"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <small>
                                                    <?php echo count($acco['record']); ?> hotels   . &nbsp;&nbsp;
                                                    Showing 1 - <?php echo $acco['total']; ?>                        
                                                </small>
                                            </p>
                                            <div class="row">
                                                <div class='col-xs-12'>
                                                    <ul class='col-xs-12 pagination 1_pag'>
                                                        <?php
                                                        for ($i = 1; $i <= $acco['total']; $i++) {
                                                            ?>

                                                            <li><a href="page-search.php?page=<?php echo $i; ?>" class='col-xs-12 pagination 1_pag current'><?php echo $i; ?></a></li>
                                                            <?php
                                                        };
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>
                                                Not what you're looking for?            <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">
                                                    Try your search again            </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End .row-->
                    </div>
                    <!--End .container-->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!--    End #Wrap-->
    <?php require_once 'footer.php'; ?>