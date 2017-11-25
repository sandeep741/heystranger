<?php require_once('lib/config.php'); ?>
<?php require_once('head.php'); ?>
<?php require_once('header.php'); ?>
<?php
$id = base64_decode($_GET['id']);
$acco_detail = getAccomodationById($id);
$price = getAccomodationPrice($id);


$path = "partner-backoffice/img-accomo/" . $acco_detail->acc_img1;

if (file_exists($path) && isset($acco_detail->acc_img1) && !empty($acco_detail->acc_img1)) {
    $file_path = $path;
} else {

    $file_path = "partner-backoffice/img-accomo/img_not_found.jpg";
}

$path1 = "partner-backoffice/img-accomo/" . $acco_detail->acc_img2;

if (file_exists($path1) && isset($acco_detail->acc_img2) && !empty($acco_detail->acc_img2)) {
    $file_path1 = $path1;
} else {

    $file_path1 = "partner-backoffice/img-accomo/img_not_found.jpg";
}

$path2 = "partner-backoffice/img-accomo/" . $acco_detail->acc_img3;

if (file_exists($path2) && isset($acco_detail->acc_img3) && !empty($acco_detail->acc_img3)) {
    $file_path2 = $path2;
} else {

    $file_path2 = "partner-backoffice/img-accomo/img_not_found.jpg";
}

$path3 = "partner-backoffice/img-accomo/" . $acco_detail->acc_img3;

if (file_exists($path3) && isset($acco_detail->acc_img3) && !empty($acco_detail->acc_img3)) {
    $file_path3 = $path3;
} else {

    $file_path3 = "partner-backoffice/img-accomo/img_not_found.jpg";
}

$path4 = "partner-backoffice/img-accomo/" . $acco_detail->acc_img4;

if (file_exists($path4) && isset($acco_detail->acc_img4) && !empty($acco_detail->acc_img4)) {
    $file_path4 = $path4;
} else {

    $file_path4 = "partner-backoffice/img-accomo/img_not_found.jpg";
}
?>

<div class="global-wrap container-fluid">
    <div class="row">
        <div class="container">
            <div class="breadcrumb">
                <ul class="breadcrumb  mt15">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">United States</a></li>
                    <li><a href="#">Virginia  State</a></li>
                    <li><a href="#">Virginia Beach</a></li>
                    <li class="active">Grand Hyatt Hotel</li>
                </ul>
            </div>
        </div>
        <div itemscope itemtype="#">
            <div class="container">
                <div class="booking-item-details">
                    <div class="row" style="margin-top: 15px;margin-bottom:  20px;">
                        <div class="col-sm-9">
                            <header class="">
                                <h1 class="lh1em featured_single" itemprop="name"><?php echo $acco_detail->accomod_name; ?></h1>
                                <p class="lh1em text-small" itemprop="address"><i class="fa fa-map-marker"></i><?php echo $acco_detail->street_address; ?></p>
                                <ul class="list list-inline text-small">
                                    <li><a href="mailto:ongkong.grand@hyatt.com"><i class="fa fa-envelope"></i> Hotel E-mail</a>
                                    </li>
                                    <li><a target="_blank" href="#"> <i class="fa fa-home"></i> Hotel Website</a>
                                    </li>
                                    <li><a href="tel:+85225881234"> <i class="fa fa-phone"></i> +852 2588 1234</a>
                                    </li>
                                    <li><a href="tel:+85228020677"> <i class="fa fa-fax"></i> +852 2802 0677</a>
                                    </li>
                                </ul>
                            </header>
                        </div>
                        <div class="col-sm-3">
                            <p class="booking-item-header-price text-right">
                                <small>price from</small>
                                <span class="text-lg"><?php echo (!empty($price) && isset($price) ? CURRENCY . $price : 'call for enquiry'); ?></span>/night
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="wpb_tabs wpb_content_element" data-interval="0">
                                <div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs vc_clearfix">
                                    <ul class=" nav nav-tabs ui-tabs-nav vc_clearfix">
                                        <li><a href="#tab-1418609998892-1-5"><i class="fa fa-camera"></i> Photos</a></li>
                                        <li><a href="#tab-1418376646-2-22"><i class="fa fa-map-marker"></i> On the Map</a></li>
                                        <li><a href="#tab-1419221514302-2-1"><i class="fa fa-youtube-play"></i> Video</a></li>
                                    </ul>
                                    <div id="tab-1418609998892-1-5" class=" ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                        <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs">
                                            <img width="800" height="600" src="<?php echo $file_path; ?>" class="attachment-800x600 size-800x600"/>
                                            <img width="800" height="600" src="<?php echo $file_path1; ?>" class="attachment-800x600 size-800x600" alt="" />
                                            <img width="800" height="600" src="<?php echo $file_path2; ?>" class="attachment-800x600 size-800x600" alt="" />
                                            <img width="800" height="600" src="<?php echo $file_path3; ?>" class="attachment-800x600 size-800x600" alt=""/>
                                            <img width="800" height="600" src="<?php echo $file_path4; ?>" class="attachment-800x600 size-800x600" alt=""/>
                                        </div>
                                    </div>
                                    <div id="tab-1418376646-2-22" class=" ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="map_single">
                                                    <div class="map_single">
                                                        <div id="gmap_wrapper" class="st_list_map">
                                                            <div class="content_map" style="height: 500px">
                                                                <div id="list_map" class="gmap3" style="height: 500px; width: 100%"></div>
                                                            </div>
                                                            <div class="st-gmap-loading-bg"></div>
                                                            <div id="st-gmap-loading">
                                                                Loading Maps
                                                                <div class="spinner spinner_map ">
                                                                    <div class="bounce1"></div>
                                                                    <div class="bounce2"></div>
                                                                    <div class="bounce3"></div>
                                                                </div>
                                                            </div>
                                                            <div class="gmap-controls hidden">
                                                                <input type="text" id="google-default-search" name="google-default-search" placeholder="Google Maps Search" value="" class="advanced_select  form-control">
                                                            </div>
                                                        </div>
                                                        <div class="data_content hidden">
                                                            <div class="div_item_map div_map_item_185">
                                                                <div class="thumb item_map">
                                                                    <header class="thumb-header">
                                                                        <div class="booking-item-img-wrap st-popup-gallery">
                                                                            <a href="images/lhotel_porto_bay_sao_paulo_lobby_800x6002.jpg" class="st-gp-item"><img width="360" height="270" src="images/lhotel_porto_bay_sao_paulo_lobby_800x6002-360x270.jpg" class="attachment-360x270x1 size-360x270x1 wp-post-image" alt="" srcset="images/lhotel_porto_bay_sao_paulo_lobby_800x6002-360x270.jpg 360w, images/lhotel_porto_bay_sao_paulo_lobby_800x6002.jpg 800w, images/lhotel_porto_bay_sao_paulo_lobby_800x6002-400x300.jpg 400w, images/lhotel_porto_bay_sao_paulo_lobby_800x6002-278x208.jpg 278w, images/lhotel_porto_bay_sao_paulo_lobby_800x6002-98x74.jpg 98w" sizes="(max-width: 360px) 100vw, 360px" />                </a>
                                                                            <div class="booking-item-img-num"><i class="fa fa-picture-o"></i>13</div>
                                                                            <div class="hidden"><a class="st-gp-item" href="images/hotel_the_cliff_bay_spa_suite_2048x1310-800x600.jpg"></a><a class="st-gp-item" href="images/hotel_porto_bay_serra_golf_living_room_800x600-800x600.jpg"></a><a class="st-gp-item" href="images/lhotel_porto_bay_sao_paulo_suite_lhotel_living_room_800x600-800x600.jpg"></a><a class="st-gp-item" href="images/hotel_porto_bay_serra_golf_suite_800x6001-800x600.jpg"></a><a class="st-gp-item" href="images/hotel_2_xxxx800xxx600-800x600.jpg"></a><a class="st-gp-item" href="images/1227-15-800x600.jpg"></a><a class="st-gp-item" href="images/hilton-new-york-lobby-lounge-crop-800x600.jpg"></a><a class="st-gp-item" href="images/hotel-741047_1280-800x600.jpg"></a><a class="st-gp-item" href="images/room-234641_1280-800x600.jpg"></a><a class="st-gp-item" href="images/room-994226_1280-800x600.jpg"></a><a class="st-gp-item" href="images/hotel_the_cliff_bay_spa_suite_800x600-800x600.jpg"></a><a class="st-gp-item" href="images/hotel_eden_mar_suite_800x600-800x600.jpg"></a>                </div>
                                                                            <img alt="avatar" width=40 height=40 src="images/amaze_300x300-3260j5oo2ns84mu80vbf28.jpg" class="avatar avatar-96 photo origin round" >
                                                                        </div>
                                                                    </header>
                                                                    <div class="thumb-caption">
                                                                        <ul class="icon-list icon-group booking-item-rating-stars text-color">
                                                                            <?php
                                                                            for ($i = 1; $i <= 5; $i++) {
                                                                                if ($acco_detail->rating >= $i) {
                                                                                    $fill = "";
                                                                                } else {
                                                                                    $fill = "-o";
                                                                                }
                                                                                ?>
                                                                                <li><i class="fa fa-star<?php echo $fill; ?>"></i></li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                        <h5 class="thumb-title"><a class="text-darken" href="#"><?php echo $acco_detail->accomod_name; ?></a></h5>
                                                                        <p class="mb0"><small><?php echo $acco_detail->street_address; ?></small></p>
                                                                        <p class="mb0 text-darken item_price_map"><small>from <span class="text-lg lh1em"><?php echo (!empty($price) && isset($price) ? CURRENCY . $price : 'call for enquiry'); ?></span>/night</small></p>
                                                                        <a class="btn btn-primary btn_book" href="#">Book Now</a><button class="btn btn-default pull-right close_map" onclick="closeGmapThumbItem(this)" >Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden st_detailed_map"
                                                             data-data_show='{"0":{"id":185,"name":"<?php echo $acco_detail->accomod_name; ?>","post_type":"st_hotel","lat":"<?php echo $acco_detail->lat; ?>","lng":"<?php echo $acco_detail->longt; ?>","icon_mk":"http:\/\/travelerdemo.wpengine.com\/wp-content\/themes\/traveler140\/img\/mk-single.png","content_html":"<div class=\"div_item_map div_map_item_185\"><div class=\"thumb item_map\"><header class=\"thumb-header\"><div class=\"booking-item-img-wrap st-popup-gallery\"><a href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002.jpg\" class=\"st-gp-item\"><img width=\"360\" height=\"270\" src=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-360x270.jpg\" class=\"attachment-360x270x1 size-360x270x1 wp-post-image\" alt=\"\" srcset=\"http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-360x270.jpg 360w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002.jpg 800w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-400x300.jpg 400w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-278x208.jpg 278w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-98x74.jpg 98w\" sizes=\"(max-width: 360px) 100vw, 360px\" \/>                <\/a><div class=\"booking-item-img-num\"><i class=\"fa fa-picture-o\"><\/i>13<\/div>                <div class=\"hidden\"><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel_the_cliff_bay_spa_suite_2048x1310-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel_porto_bay_serra_golf_living_room_800x600-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_suite_lhotel_living_room_800x600-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel_porto_bay_serra_golf_suite_800x6001-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel_2_xxxx800xxx600-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/12\/1227-15-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/12\/hilton-new-york-lobby-lounge-crop-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel-741047_1280-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/room-234641_1280-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/room-994226_1280-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel_the_cliff_bay_spa_suite_800x600-800x600.jpg\"><\/a><a class=\"st-gp-item\" href=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/hotel_eden_mar_suite_800x600-800x600.jpg\"><\/a>                <\/div><img alt=\"avatar\" width=40 height=40 src=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/bfi_thumb\/amaze_300x300-3260j5oo2ns84mu80vbf28.jpg\" class=\"avatar avatar-96 photo origin round\" >            <\/div><\/header><div class=\"thumb-caption\"><ul class=\"icon-list icon-group booking-item-rating-stars text-color\"><li><i class=\"fa  fa-star\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li>                <\/ul><h5 class=\"thumb-title\"><a class=\"text-darken\" href=\"http:\/\/travelerdemo.wpengine.com\/hotel\/holiday-inn-express-kennedy-airport\/\">Grand Hyatt Hotel<\/a><\/h5><p class=\"mb0\"><small>  4 Battle Bridge Lane London<\/small><\/p><p class=\"mb0 text-darken item_price_map\"><small>from <span class=\"text-lg lh1em\">$315,00<\/span>\/night<\/small><\/p><a class=\"btn btn-primary btn_book\" href=\"http:\/\/travelerdemo.wpengine.com\/hotel\/holiday-inn-express-kennedy-airport\/\">Book Now<\/a><button class=\"btn btn-default pull-right close_map\" onclick=\"closeGmapThumbItem(this)\" >Close<\/button><\/div><\/div><\/div>","content_adv_html":"<div class=\" div_map_item_185\"><div class=\"thumb\"><header class=\"thumb-header\"><!--<a class=\"hover-img\" href=\"\"><h5 class=\"hover-title-center\"> <\/h5><\/a>--><a href=\"http:\/\/travelerdemo.wpengine.com\/hotel\/holiday-inn-express-kennedy-airport\/\" class=\"hover-img\"><img width=\"360\" height=\"270\" src=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-360x270.jpg\" class=\"attachment-360x270x size-360x270x wp-post-image\" alt=\"\" srcset=\"http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-360x270.jpg 360w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002.jpg 800w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-400x300.jpg 400w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-278x208.jpg 278w, http:\/\/z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com\/wp-content\/uploads\/2014\/11\/lhotel_porto_bay_sao_paulo_lobby_800x6002-98x74.jpg 98w\" sizes=\"(max-width: 360px) 100vw, 360px\" \/>                <h5 class=\"hover-title-center\">Book now <\/h5><\/a><img alt=\"avatar\" width=50 height=50 src=\"http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/bfi_thumb\/amaze_300x300-3260j5oo38vziitlgkt4hs.jpg\" class=\"avatar avatar-96 photo origin round\" >        <\/header><div class=\"thumb-caption\"><ul class=\"icon-list icon-group booking-item-rating-stars text-color\"><li><i class=\"fa  fa-star\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li><li><i class=\"fa  fa-star-o\"><\/i><\/li>                <\/ul><h5 class=\"thumb-title\"><a class=\"text-darken\" href=\"http:\/\/travelerdemo.wpengine.com\/hotel\/holiday-inn-express-kennedy-airport\/\">Grand Hyatt Hotel<\/a><\/h5><p class=\"mb0\"><small> <i class=\"fa fa-map-marker\">&nbsp;<\/i>  4 Battle Bridge Lane London<\/small><\/p><p class=\"mb0 text-darken item_price_map\"><small>from <span class=\"text-lg lh1em\">$315,00<\/span>\/night<\/small><\/p><\/div><\/div><div class=\"gap\"><\/div><\/div>"}}'
                                                             data-map_height = '500'
                                                             data-style_map = '[{featureType: "road.highway",elementType: "geometry",stylers: [{ hue: "#ff0022" },{ saturation: 60 },{ lightness: -20 }]}]'
                                                             data-type_map = ''
                                                             data-street_views = ''
                                                             data-height = "500"
                                                             data-location_center = "[22.281286 ,114.172090]"
                                                             data-zoom = "14"
                                                             data-range = "0">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-1419221514302-2-1" class=" ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class='media-responsive'>
                                                    <iframe width="500" height="281" src="<?php echo (!empty($acco_detail->video) && isset($acco_detail->video) ? $acco_detail->video : 'no record found'); ?>" frameborder="0" allowfullscreen>
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div style="margin-top: 40px;">
                                <div class="mb20">
                                    <div class="booking-item-meta">
                                        <h2 class="lh1em">
                                            Good
                                        </h2>
                                        <h3><?php echo (($acco_detail->rating/5)*100).'%' ?> <small>of guests recommend</small></h3>
                                        <div class="booking-item-rating">
                                            <ul class="icon-list icon-group booking-item-rating-stars">

                                                <?php
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($acco_detail->rating >= $i) {
                                                        $fill = "";
                                                    } else {
                                                        $fill = "-o";
                                                    }
                                                    ?>
                                                    <li><i class="fa fa-star<?php echo $fill; ?>"></i></li>
                                                <?php } ?>
                                            </ul>
                                            <span class="booking-item-rating-number"><b><?php echo $acco_detail->rating; ?></b> of 5 <small class="text-smaller">guest rating</small></span>
                                            <p><a class="text-default" href="#comments">based on 5 reviews</a>
                                            </p>
                                        </div>
                                        <div class="share clear">
                                            <span>Share<i class="fa fa-share fa-lg"></i></span>
                                            <ul class="clear">
                                                <li><a href="#" target="_blank" original-title="Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                                                <li><a href="#" target="_blank" original-title="Twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
                                                <li><a href="#" target="_blank" original-title="Google+"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                                <li><a class="no-open" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" target="_blank" original-title="Pinterest"><i class="fa fa-pinterest fa-lg"></i></a></li>
                                                <li><a href="#" target="_blank" original-title="LinkedIn"><i class="fa fa-linkedin fa-lg"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=" clear mt20" style="margin-bottom: 10px;">
                                            <span>Add to wishlist: </span>            <a data-placement="top" rel="tooltip" data-original-title="Add to wishlist" class="btn_add_wishlist btn btn-primary btn-sm" data-type="st_hotel" data-id="185" >
                                                <i class="fa fa-heart-o"></i>            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4 class="lh1em">Traveler rating</h4>
                                            <ul class="list booking-item-raiting-list">
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Excellent</div>
                                                    <div class="booking-item-raiting-list-bar">
                                                        <div style="width:40%;"></div>
                                                    </div>
                                                    <div class="booking-item-raiting-list-number">2</div>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Very Good</div>
                                                    <div class="booking-item-raiting-list-bar">
                                                        <div style="width:20%;"></div>
                                                    </div>
                                                    <div class="booking-item-raiting-list-number">1</div>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Average</div>
                                                    <div class="booking-item-raiting-list-bar">
                                                        <div style="width:20%;"></div>
                                                    </div>
                                                    <div class="booking-item-raiting-list-number">1</div>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Poor</div>
                                                    <div class="booking-item-raiting-list-bar">
                                                        <div style="width:20%;"></div>
                                                    </div>
                                                    <div class="booking-item-raiting-list-number">1</div>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Terrible</div>
                                                    <div class="booking-item-raiting-list-bar">
                                                        <div style="width:0%;"></div>
                                                    </div>
                                                    <div class="booking-item-raiting-list-number">0</div>
                                                </li>
                                            </ul>
                                            <a href="#comments" class="btn btn-primary">Write a review</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="lhem">Summary</h4>
                                            <ul class="list booking-item-raiting-summary-list">
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Sleep</div>
                                                    <ul class="icon-group booking-item-rating-stars">
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o text-gray"></i>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Location</div>
                                                    <ul class="icon-group booking-item-rating-stars">
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o text-gray"></i>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Service</div>
                                                    <ul class="icon-group booking-item-rating-stars">
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o text-gray"></i>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Clearness</div>
                                                    <ul class="icon-group booking-item-rating-stars">
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o text-gray"></i>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="booking-item-raiting-list-title">Rooms</div>
                                                    <ul class="icon-group booking-item-rating-stars">
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o "></i>
                                                        <li><i class="fa fa-smile-o text-gray"></i>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 60px;">
                        <div class="col-sm-12">
                            <h3>Available Rooms</h3>
                        </div>
                        <div class="col-sm-9">
                            <div class="mb20">
                                <div class="search_room_alert "></div>
                                <div class="booking-item-dates-change"  data-booking-period="0">
                                    <div class="overlay-form"><i class="fa fa-refresh text-color"></i></div>
                                    <form >
                                        <input type="hidden" name="is_search_room" value="true">
                                        <input type="hidden" name="paged_room" class="paged_room" value="1">
                                        <input type="hidden" id="room_search" name="room_search" value="c204497b27" /><input type="hidden" name="_wp_http_referer" value="#" />        <input type="hidden" name="action" value="ajax_search_room">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-daterange" data-date-format="mm/dd/yyyy">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-icon-left">
                                                                <label for="field-hotel-checkin">Check in</label>
                                                                <i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                                <input id="field-hotel-checkin" data-post-id="185" placeholder="Select date" class="form-control checkin_hotel" value="" name="start" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-icon-left">
                                                                <label for="field-hotel-checkout">Check out</label>
                                                                <i class="fa fa-calendar input-icon input-icon-hightlight"></i>
                                                                <input id="field-hotel-checkout" data-post-id="185" placeholder="Select date" value="" class="form-control checkout_hotel" name="end" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-group-select-plus">
                                                    <label for="field-hotel-rooms">Room(s)</label>
                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                        <label class="btn btn-primary active">
                                                            <input type="radio" value="1" >1</label>
                                                        <label class="btn btn-primary " >
                                                            <input type="radio" value="2" >2</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="3" >3</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="4" >3+</label>
                                                    </div>
                                                    <select id="field-hotel-rooms" name="room_num_search" class="form-control hidden">
                                                        <option  value="1">1</option>
                                                        <option  value="2">2</option>
                                                        <option  value="3">3</option>
                                                        <option  value="4">4</option>
                                                        <option  value="5">5</option>
                                                        <option  value="6">6</option>
                                                        <option  value="7">7</option>
                                                        <option  value="8">8</option>
                                                        <option  value="9">9</option>
                                                        <option  value="10">10</option>
                                                        <option  value="11">11</option>
                                                        <option  value="12">12</option>
                                                        <option  value="13">13</option>
                                                        <option  value="14">14</option>
                                                        <option  value="15">15</option>
                                                        <option  value="16">16</option>
                                                        <option  value="17">17</option>
                                                        <option  value="18">18</option>
                                                        <option  value="19">19</option>
                                                        <option  value="20">20</option>
                                                        <option  value="21">21</option>
                                                        <option  value="22">22</option>
                                                        <option  value="23">23</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group form-group-select-plus">
                                                    <label for="field-hotel-adult">Adults</label>
                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                        <label class="btn btn-primary active">
                                                            <input type="radio" value="1" name="adult_num_opt">1</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="2" name="adult_num_opt">2</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="3" name="adult_num_opt">3</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="4" name="adult_num_opt">3+</label>
                                                    </div>
                                                    <select form="field-hotel-adult" name="adult_number" class="form-control hidden">
                                                        <!--                        <option value="">--><!--</option>-->
                                                        <option  selected='selected' value='1'>1</option>
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
                                            <div class="col-md-2">
                                                <div class="form-group form-group-select-plus">
                                                    <label for="field-hotel-children">Children</label>
                                                    <div class="btn-group btn-group-select-num " data-toggle="buttons">
                                                        <label class="btn btn-primary active">
                                                            <input type="radio" value="0" name="options">0</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="1" name="options">1</label>
                                                        <label class="btn btn-primary ">
                                                            <input type="radio" value="2" name="options">2</label>
                                                        <label class="btn btn-primary">
                                                            <input type="radio" value="3" name="options">2+</label>
                                                    </div>
                                                    <select id="field-hotel-children" name="child_number"
                                                            class="form-control hidden">
                                                        <option value="">-- Select --</option>
                                                        selected='selected'
                                                        <option  selected='selected' value='0'>0</option>
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
                                        <div class="text-right">
                                            <a href="#" onclick="return false" class="btn btn-primary btn-do-search-room">Search</a>
                                            <!--            <a href="#" onclick="return false" class="btn  btn-clr-search-room">--><!--</a>-->
                                        </div>
                                    </form>
                                </div>
                                <br>
                            </div>
                            <ul class="booking-list loop-room">
                                <li class="post-4599 hotel_room type-hotel_room status-publish has-post-thumbnail hentry">
                                    <div class="booking-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#" class="hover-img">
                                                    <img width="150" height="150" src="images/613-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="images/613-150x150.jpg 150w, images/613-300x300.jpg 300w, images/613-1024x1024.jpg 1024w, images/613-180x180.jpg 180w, images/613-600x600.jpg 600w, http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/uploads/st_uploadfont/613-266x266.jpg 266w" sizes="(max-width: 150px) 100vw, 150px" />                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <h5 class="booking-item-title"><a href="#" title="">Executive Room With Lake View</a></h5>
                                                <div class="text-small">
                                                    <p style="margin-bottom: 10px;">
                                                    </p>
                                                </div>
                                                <ul class="booking-item-features booking-item-features-sign clearfix">
                                                    <li rel="tooltip" data-placement="top" title="" data-original-title="Adults Occupancy"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="" data-original-title="Childs"><i class="im im-children"></i><span class="booking-item-feature-sign">x 4</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="" data-original-title="Beds"><i class="im im-bed"></i><span class="booking-item-feature-sign">x 3</span>
                                                    </li>
                                                    <li rel="tooltip" data-placement="top" title="" data-original-title="Room footage (square feet)"><i class="im im-width"></i><span class="booking-item-feature-sign">250</span>
                                                    </li>
                                                </ul>
                                                <ul class="booking-item-features booking-item-features-small clearfix">
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-primary btn-show-price" type="button">Show Price</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="div_paged_room">
                            </div>
                        </div>
                        <div class="col-sm-3" style="margin-bottom: 20px;">
                            <h4>About Hotel</h4>
                            <img src=images/New_York_Hilton_Midown_Logo.jpg class='img-responsive' style='margin-bottom:10px;'/>
                            <h4>Hotel Facilities</h4>
                            <ul class="booking-item-features booking-item-features-expand mb30 clearfix">
                                <li class="col-sm-12">
                                    <i class="im im-plane"></i>
                                    <span class="booking-item-feature-title">Airport Transport</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="flaticon-icons-poker4"></i>
                                    <span class="booking-item-feature-title">Casino</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="flaticon-myicons-light76"></i>
                                    <span class="booking-item-feature-title">Desk</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="im im-fitness"></i>
                                    <span class="booking-item-feature-title">Fitness Center</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="flaticon-icons-flowers12"></i>
                                    <span class="booking-item-feature-title">Garden</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="im im-bus"></i>
                                    <span class="booking-item-feature-title">Parking</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="im im-restaurant"></i>
                                    <span class="booking-item-feature-title">Restaurant</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="im im-bus"></i>
                                    <span class="booking-item-feature-title">Shuttle Bus Service</span>
                                </li>
                                <li class="col-sm-12">
                                    <i class="im im-wi-fi"></i>
                                    <span class="booking-item-feature-title">Wi-Fi Internet</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Hotel Reviews</h3>
                        </div>
                        <div class="col-sm-8">
                            <div id="comments" class="comments-area">
                                <ul class="booking-item-reviews list">
                                    <li id="comment-3" class="st_reviews byuser comment-author-admin bypostauthor even thread-even depth-1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="booking-item-review-person">
                                                    <a class="booking-item-review-person-avatar round" href="#">
                                                        <img alt="avatar" width=70 height=70 src="images/amaze_300x300-3260j5oo4f3iaascbzsjcw.jpg" class="avatar avatar-96 photo origin round" >                </a>
                                                    <p class="booking-item-review-person-name">
                                                        <cite class="fn">admin</cite>
                                                    </p>
                                                    <p class="booking-item-review-person-loc">                </p>
                                                    <small>
                                                        <a href="#">                        72 Reviews
                                                        </a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="booking-item-review-content">
                                                    <h5>"Good"</h5>
                                                    <ul class="icon-group booking-item-rating-stars" data-rate="3">
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                    </ul>
                                                    <div class="comment-content">
                                                        "Sagittis congue blandit quam commodo"
                                                        Massa tellus at turpis dis vehicula metus placerat eros mollis vestibulum in fames hac quam mattis ipsum odio potenti vulputate dictumst augue dis feugiat<span class="booking-item-review-more"> potenti Ullamcorper amet lobortis netus suscipit nisi tincidunt turpis consequat posuere mus est lacus potenti varius quis ac ligula accumsan vestibulum nam euismod eleifend a fermentum amet neque leo a auctor metus in semper duis adipiscing leo magna senectus morbi placerat elementum pretium augue praesent sagittis etiam auctor nullam habitant fermentum
                                                            Malesuada accumsan orci dis sociosqu venenatis tempus quam amet bibendum sapien feugiat nibh libero nisi rhoncus libero pharetra ac justo blandit sociosqu elementum
                                                            Consequat lorem mollis adipiscing duis augue tellus nascetur mus tellus lacus nibh luctus faucibus fames fermentum sociis iaculis class lobortis vel molestie tincidunt enim platea quis etiam inceptos imperdiet malesuada hendrerit consectetur tincidunt quam pulvinar convallis molestie venenatis magna pellentesque dapibus congue</span>
                                                    </div>
                                                    <div class="booking-item-review-more-content">
                                                        <ul class="list booking-item-raiting-summary-list mt20">
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Sleep</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Location</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Service</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Clearness</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Rooms</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <p class="booking-item-review-rate">Was this review helpful?                                         <b class="text-color"> <span class="number">2</span> like this</b>
                                                        <a data-id="3" class="st-like-review fa fa-thumbs-o-up box-icon-inline round" href="#"></a></b>
                                                    </p>
                                                </div>
                                            </div>
                                    </li>
                                    <!-- #comment-## -->
                                    <li id="comment-845" class="st_reviews byuser comment-author-admin bypostauthor odd alt thread-odd thread-alt depth-1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="booking-item-review-person">
                                                    <a class="booking-item-review-person-avatar round" href="#">
                                                        <img alt="avatar" width=70 height=70 src="images/amaze_300x300-3260j5oo4f3iaascbzsjcw.jpg" class="avatar avatar-96 photo origin round" >                </a>
                                                    <p class="booking-item-review-person-name">
                                                        <cite class="fn">admin</cite>                </p>
                                                    <p class="booking-item-review-person-loc">                </p>
                                                    <small>
                                                        <a href="#">                        115 Reviews
                                                        </a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="booking-item-review-content">
                                                    <h5>"Good"</h5>
                                                    <ul class="icon-group booking-item-rating-stars" data-rate="4.2">
                                                        <li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star-half-o"></i></li>
                                                    </ul>
                                                    <div class="comment-content">
                                                        Curabitur vel augue quis mi aliquet feugiat et elementum mau                </div>
                                                    <div class="booking-item-review-more-content">
                                                        <ul class="list booking-item-raiting-summary-list mt20">
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Sleep</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Location</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Service</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Clearness</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Rooms</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                        </ul>                </div>
                                                    <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <p class="booking-item-review-rate">Was this review helpful?                                         <b class="text-color"> <span class="number">0</span> like this</b>
                                                        <a data-id="845" class="st-like-review fa fa-thumbs-o-up box-icon-inline round" href="#"></a></b>
                                                    </p>
                                                </div>
                                            </div>
                                    </li><!-- #comment-## -->
                                    <li id="comment-846" class="st_reviews byuser comment-author-admin bypostauthor even thread-even depth-1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="booking-item-review-person">
                                                    <a class="booking-item-review-person-avatar round" href="#">
                                                        <img alt="avatar" width=70 height=70 src="images/amaze_300x300-3260j5oo4f3iaascbzsjcw.jpg" class="avatar avatar-96 photo origin round" >                </a>
                                                    <p class="booking-item-review-person-name">
                                                        <cite class="fn">admin</cite>                </p>
                                                    <p class="booking-item-review-person-loc">                </p>
                                                    <small>
                                                        <a href="#">                        115 Reviews
                                                        </a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="booking-item-review-content">
                                                    <h5>"Very good"</h5>
                                                    <ul class="icon-group booking-item-rating-stars" data-rate="5">
                                                        <li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li>
                                                    </ul>
                                                    <div class="comment-content">
                                                        Sagittis congue blandit quam commodo" Massa tellus at turpis dis vehicula metus placerat eros mollis vestibulum in fames hac quam mattis ipsum odio potenti vulputate dictumst augue                </div>
                                                    <div class="booking-item-review-more-content">
                                                        <ul class="list booking-item-raiting-summary-list mt20">
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Sleep</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Location</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Service</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Clearness</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Rooms</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                        </ul>                </div>
                                                    <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <p class="booking-item-review-rate">Was this review helpful?                                         <b class="text-color"> <span class="number">0</span> like this</b>
                                                        <a data-id="846" class="st-like-review fa fa-thumbs-o-up box-icon-inline round" href="#"></a></b>
                                                    </p>
                                                </div>
                                            </div>
                                    </li><!-- #comment-## -->
                                    <li id="comment-847" class="st_reviews byuser comment-author-admin bypostauthor odd alt thread-odd thread-alt depth-1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="booking-item-review-person">
                                                    <a class="booking-item-review-person-avatar round" href="#">
                                                        <img alt="avatar" width=70 height=70 src="images/amaze_300x300-3260j5oo4f3iaascbzsjcw.jpg" class="avatar avatar-96 photo origin round" >                </a>
                                                    <p class="booking-item-review-person-name">
                                                        <cite class="fn">admin</cite>                </p>
                                                    <p class="booking-item-review-person-loc">                </p>
                                                    <small>
                                                        <a href="#">                        115 Reviews
                                                        </a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="booking-item-review-content">
                                                    <h5>"Not bad"</h5>
                                                    <ul class="icon-group booking-item-rating-stars" data-rate="2.4">
                                                        <li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star-half-o"></i></li><li><i class="fa  fa-star-o"></i></li><li><i class="fa  fa-star-o"></i></li>
                                                    </ul>
                                                    <div class="comment-content">
                                                        Sagittis congue blandit quam commodo" Massa tellus at turpis dis vehicula metus placerat eros                </div>
                                                    <div class="booking-item-review-more-content">
                                                        <ul class="list booking-item-raiting-summary-list mt20">
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Sleep</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Location</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Service</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Clearness</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Rooms</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                    <li><i class="fa fa-smile-o text-gray"></i>
                                                                </ul>
                                                            </li>
                                                        </ul>                </div>
                                                    <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <p class="booking-item-review-rate">Was this review helpful?                                         <b class="text-color"> <span class="number">0</span> like this</b>
                                                        <a data-id="847" class="st-like-review fa fa-thumbs-o-up box-icon-inline round" href="#"></a></b>
                                                    </p>
                                                </div>
                                            </div>
                                    </li><!-- #comment-## -->
                                    <li id="comment-848" class="st_reviews byuser comment-author-admin bypostauthor even thread-even depth-1">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="booking-item-review-person">
                                                    <a class="booking-item-review-person-avatar round" href="#">
                                                        <img alt="avatar" width=70 height=70 src="images/amaze_300x300-3260j5oo4f3iaascbzsjcw.jpg" class="avatar avatar-96 photo origin round" >                </a>
                                                    <p class="booking-item-review-person-name">
                                                        <cite class="fn">admin</cite>                </p>
                                                    <p class="booking-item-review-person-loc">                </p>
                                                    <small>
                                                        <a href="#">                        115 Reviews
                                                        </a>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="booking-item-review-content">
                                                    <h5>"Very good good"</h5>
                                                    <ul class="icon-group booking-item-rating-stars" data-rate="5">
                                                        <li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li><li><i class="fa  fa-star"></i></li>
                                                    </ul>
                                                    <div class="comment-content">
                                                        Sagittis congue blandit quam commodo" Massa tellus at turpis dis vehicula metus placerat                </div>
                                                    <div class="booking-item-review-more-content">
                                                        <ul class="list booking-item-raiting-summary-list mt20">
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Sleep</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Location</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Service</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Clearness</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="booking-item-raiting-list-title">Rooms</div>
                                                                <ul class="icon-group booking-item-rating-stars">
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                    <li><i class="fa fa-smile-o "></i>
                                                                </ul>
                                                            </li>
                                                        </ul>                </div>
                                                    <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">More <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <p class="booking-item-review-rate">Was this review helpful?                                         <b class="text-color"> <span class="number">0</span> like this</b>
                                                        <a data-id="848" class="st-like-review fa fa-thumbs-o-up box-icon-inline round" href="#"></a></b>
                                                    </p>
                                                </div>
                                            </div>
                                    </li><!-- #comment-## -->
                                </ul>
                                <!-- .comment-list -->
                                <div class="gap gap-small"></div>
                                <div class="row wrap">
                                    <div class="col-md-5">
                                        <p ><small>5 reviews on this Hotel &nbsp;&nbsp; Showing
                                                1 to 5</small>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                    </div>
                                </div>
                                <div class="gap gap-small"></div>
                                <div class="box bg-gray">	<div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">Write a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>			<form action="#" method="post" id="commentform" class="comment-form" novalidate>
                                            <div class='row'>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Review Title</label>
                                                        <input class="form-control" type="text" name="comment_title">
                                                    </div><div class="form-group">
                                                        <label>Review Text</label>
                                                        <textarea name="comment" id="comment" class="form-control" rows="6"></textarea>
                                                    </div>
                                                </div><!--End col-sm-8-->
                                                <div class="col-sm-4"><ul class="list booking-item-raiting-summary-list stats-list-select"><li class=""><div class="booking-item-raiting-list-title">Sleep</div>
                                                            <ul class="icon-group booking-item-rating-stars">
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li><i class="fa fa-smile-o"></i>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" class="st_review_stats" value="0" name="st_review_stats[Sleep]">
                                                        </li><li class=""><div class="booking-item-raiting-list-title">Location</div>
                                                            <ul class="icon-group booking-item-rating-stars">
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li><i class="fa fa-smile-o"></i>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" class="st_review_stats" value="0" name="st_review_stats[Location]">
                                                        </li><li class=""><div class="booking-item-raiting-list-title">Service</div>
                                                            <ul class="icon-group booking-item-rating-stars">
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li><i class="fa fa-smile-o"></i>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" class="st_review_stats" value="0" name="st_review_stats[Service]">
                                                        </li><li class=""><div class="booking-item-raiting-list-title">Clearness</div>
                                                            <ul class="icon-group booking-item-rating-stars">
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li><i class="fa fa-smile-o"></i>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" class="st_review_stats" value="0" name="st_review_stats[Clearness]">
                                                        </li><li class=""><div class="booking-item-raiting-list-title">Rooms</div>
                                                            <ul class="icon-group booking-item-rating-stars">
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li class=""><i class="fa fa-smile-o"></i>
                                                                </li>
                                                                <li><i class="fa fa-smile-o"></i>
                                                                </li>
                                                            </ul>
                                                            <input type="hidden" class="st_review_stats" value="0" name="st_review_stats[Rooms]">
                                                        </li></ul></div></div><!--End Row--><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Leave a Review" /> <input type='hidden' name='comment_post_ID' value='185' id='comment_post_ID' />
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </p>
                                            <input type="hidden" name="icl_comment_language" value="en" />
                                        </form>
                                    </div><!-- #respond -->
                                </div>
                            </div><!-- #comments -->        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <div class="gap"></div>
                </div>
            </div>
            <!--Review Rich Snippets-->
            <div itemprop="aggregateRating" class="hidden" itemscope itemtype="#">
                <div>Book rating:			<span itemprop="ratingValue">3.9</span> out of <span itemprop="bestRating">5</span> with <span itemprop="ratingCount">5</span> ratings		</div>
            </div>
            <!--End Review Rich Snippets-->
            <span class="hidden st_single_hotel"></span>
        </div>
    </div>
    <!-- end row -->
</div>
<!--    End #Wrap-->
<?php include('footer.php'); ?>
<!-- Gotop -->
<div id="gotop" title="Go to top">
    <i class="fa fa-chevron-up"></i>
</div>
<!-- End Gotop -->
<style>
    .vc_custom_1457429455924{padding-top: 60px !important;padding-bottom: 30px !important;background-color: #262626 !important;}.vc_custom_1422334137119{padding-top: 20px !important;}.vc_custom_1422334156180{padding-top: 20px !important;}.vc_custom_1422334176021{padding-top: 20px !important;}.vc_custom_1422334188578{padding-top: 20px !important;}.vc_custom_1457429455924{padding-top: 60px !important;padding-bottom: 30px !important;background-color: #262626 !important;}.vc_custom_1422334137119{padding-top: 20px !important;}.vc_custom_1422334156180{padding-top: 20px !important;}.vc_custom_1422334176021{padding-top: 20px !important;}.vc_custom_1422334188578{padding-top: 20px !important;}
</style>

<!--[if lte IE 8]>
<style>
   .attachment:focus {
   outline: #1e8cbe solid;
   }
   .selected.attachment {
   outline: #1e8cbe solid;
   }
</style>
<![endif]-->

<script type='text/javascript' src='js/cart-fragments.min.js'></script>
<script type='text/javascript' src='js/modernizr.js'></script>
<script type='text/javascript' src='js/bootstrap.js'></script>
<script type='text/javascript' src='js/jquery.slimmenu.min.js'></script>
<script type='text/javascript' src='js/jquery.form.js'></script>
<script type='text/javascript' src='js/icheck.js'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?v=3&#038;signed_in=true&#038;libraries=places&#038;language=en&#038;sensor=false&#038;key=AIzaSyAbiWD8crgFpYN8GEeaL6Qjg0lTpFJgmuk'></script>
<script type='text/javascript' src='js/infobox.js'></script>
<script type='text/javascript' src='js/jquery.noty.packaged.min.js'></script>
<script type='text/javascript' src='js/class.notice.js'></script>
<script type='text/javascript' src='js/booking_modal.js'></script>
<script type='text/javascript' src='js/hotel-ajax.js'></script>
<script type='text/javascript' src='js/single-hotel.js'></script>
<script type='text/javascript' src='js/jquery.mousewheel-3.0.6.pack.js'></script>
<script type='text/javascript' src='js/custom-price.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/custom2.js'></script>
<script type='text/javascript' src='js/social-login.js'></script>
<script type='text/javascript' src='js/sticky.js'></script>
<script type='text/javascript' src='js/tour_version.js'></script>
<script type='text/javascript' src='js/fontawesome-iconpicker.min.js'></script>
<script type='text/javascript' src='js/custom-iconpicker.js'></script>
<script type='text/javascript' src='js/jquery.scrollTo.min.js'></script>
<script type='text/javascript' src='js/hover_effect.js'></script>
<script type='text/javascript' src='js/underscore.min.js'></script>
<script type='text/javascript' src='js/shortcode.min.js'></script>
<script type='text/javascript' src='js/backbone.min.js'></script>
<script type='text/javascript'>
                                                /* <![CDATA[ */
                                                var _wpUtilSettings = {"ajax": {"url": "\/wp-admin\/admin-ajax.php"}};
                                                /* ]]> */
</script>
<script type='text/javascript' src='js/wp-util.min.js'></script>
<script type='text/javascript' src='js/wp-backbone.min.js'></script>
<script type='text/javascript'>
                                                /* <![CDATA[ */
                                                var _wpMediaModelsL10n = {"settings": {"ajaxurl": "\/wp-admin\/admin-ajax.php", "post": {"id": 0}}};
                                                /* ]]> */
</script>
<script type='text/javascript' src='js/media-models.min.js'></script>

<script type='text/javascript' src='js/wp-plupload.min.js'></script>
<script type='text/javascript' src='js/core.min.js'></script>
<script type='text/javascript' src='js/widget.min.js'></script>
<script type='text/javascript' src='js/mouse.min.js'></script>
<script type='text/javascript' src='js/sortable.min.js'></script>

<script type='text/javascript' src='js/mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='js/wp-mediaelement.min.js'></script>

<script type='text/javascript' src='js/media-views.min.js'></script>
<script type='text/javascript' src='js/media-editor.min.js'></script>
<script type='text/javascript' src='js/media-audiovideo.min.js'></script>
<script type='text/javascript' src='js/wp-embed.min.js'></script>

<script type='text/javascript' src='js/sitepress.js'></script>
<script type='text/javascript' src='js/handlebars-v2.0.0.js'></script>
<script type='text/javascript' src='js/typeahead.js'></script>
<script type='text/javascript' src='js/js_composer_front.min.js'></script>
<script type='text/javascript' src='js/tabs.min.js'></script>
<script type='text/javascript' src='js/jquery-ui-tabs-rotate.min.js'></script>
<script type='text/javascript' src='js/fotorama.js'></script>
<script type='text/javascript' src='js/magnific.js'></script>
<script type='text/javascript' src='js/gmap3.min.js'></script>
<script type='text/javascript' src='js/markerclusterer.js'></script>
<script type='text/javascript' src='js/custom_google_map.js'></script>
<script type='text/javascript' src='js/user.js'></script>
<script type='text/javascript' src='js/bootstrap-datepicker.js'></script>
<script type='text/javascript' src='js/comment-reply.min.js'></script>
<script type='text/javascript' src='js/review_form.js'></script>


<script type="text/javascript">
                                                (function () {
                                                    function addSubmittedClassToFormContainer(e) {
                                                        var form = e.target.form.parentNode;
                                                        var className = 'mc4wp-form-submitted';
                                                        (form.classList) ? form.classList.add(className) : form.className += ' ' + className;
                                                    }

                                                    function maybePrefixUrlField() {
                                                        if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                                                            this.value = "http://" + this.value;
                                                        }
                                                    }

                                                    var forms = document.querySelectorAll('.mc4wp-form');
                                                    for (var i = 0; i < forms.length; i++) {
                                                        (function (f) {

                                                            /* add class on submit */
                                                            var b = f.querySelector('[type="submit"], [type="image"]');
                                                            if (b) {
                                                                if (b.addEventListener) {
                                                                    b.addEventListener('click', addSubmittedClassToFormContainer);
                                                                } else {
                                                                    b.attachEvent('click', addSubmittedClassToFormContainer);
                                                                }
                                                            }

                                                            /* better URL fields */
                                                            var urlFields = f.querySelectorAll('input[type="url"]');
                                                            if (urlFields && urlFields.length > 0) {
                                                                for (var j = 0; j < urlFields.length; j++) {
                                                                    if (urlFields[j].addEventListener) {
                                                                        urlFields[j].addEventListener('blur', maybePrefixUrlField);
                                                                    } else {
                                                                        urlFields[j].attachEvent('blur', maybePrefixUrlField);
                                                                    }
                                                                }
                                                            }

                                                        })(forms[i]);
                                                    }
                                                })();

</script></body>
</html>
