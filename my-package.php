<?php
include('lib/config.php');
if(isset($_REQUEST['pk1_sub'])) 
{
$resg=mysql_fetch_assoc(mysql_query("select * from package where id='1'"));

$_SESSION['pkg_session']= 1;
$_SESSION['pkg_amount']=$resg['amount'];
$_SESSION['reduced_amount']=$resg['reduced_amount'];
$_SESSION['vat']=$resg['vat'];
    header("Location: list-detail.php");
    exit();
}
if(isset($_REQUEST['pk2_sub'])) 
{
$resg=mysql_fetch_assoc(mysql_query("select * from package where id='2'"));
    $_SESSION['pkg_session']= 2;
	$_SESSION['pkg_amount']=$resg['amount'];
	$_SESSION['reduced_amount']=$resg['reduced_amount'];
	$_SESSION['vat']=$resg['vat'];
    header("Location: list-detail.php");
    exit();
}
if(isset($_REQUEST['pk3_sub'])) 
{
$resg=mysql_fetch_assoc(mysql_query("select * from package where id='3'"));

    $_SESSION['pkg_session']= 3;
	$_SESSION['pkg_amount']=$resg['amount'];
	$_SESSION['reduced_amount']=$resg['reduced_amount'];
	$_SESSION['vat']=$resg['vat'];
    header("Location: list-detail.php");
    exit();
}
if(isset($_REQUEST['pk4_sub'])) 
{
$resg=mysql_fetch_assoc(mysql_query("select * from package where id='4'"));

    $_SESSION['pkg_session']= 4;
	$_SESSION['pkg_amount']=$resg['amount'];
	$_SESSION['reduced_amount']=$resg['reduced_amount'];
	$_SESSION['vat']=$resg['vat'];
    header("Location: list-detail.php");
    exit();
}
if(isset($_REQUEST['pk5_sub'])) 
{
$resg=mysql_fetch_assoc(mysql_query("select * from package where id='5'"));

    $_SESSION['pkg_session']= 5;
	$_SESSION['pkg_amount']=$resg['amount'];
	$_SESSION['reduced_amount']=$resg['reduced_amount'];
	$_SESSION['vat']=$resg['vat'];
    header("Location: list-detail.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en-US">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>Welcome to Hey Stranger</title>
      
	  <!-- End Gotop -->
      <style>
         .vc_custom_1457429455924{padding-top: 60px !important;padding-bottom: 30px !important;background-color: #262626 !important;}.vc_custom_1422334137119{padding-top: 20px !important;}.vc_custom_1422334156180{padding-top: 20px !important;}.vc_custom_1422334176021{padding-top: 20px !important;}.vc_custom_1422334188578{padding-top: 20px !important;}.vc_custom_1457429455924{padding-top: 60px !important;padding-bottom: 30px !important;background-color: #262626 !important;}.vc_custom_1422334137119{padding-top: 20px !important;}.vc_custom_1422334156180{padding-top: 20px !important;}.vc_custom_1422334176021{padding-top: 20px !important;}.vc_custom_1422334188578{padding-top: 20px !important;}
      </style>
      
      
      <script type='text/javascript' src='js/jquery.form.min.js'></script>
      
      <script type='text/javascript' src='js/scripts.js'></script>
      <script type='text/javascript' src='js/jquery.blockUI.min.js'></script>
     
      <script type='text/javascript' src='js/woocommerce.min.js'></script>
      <script type='text/javascript' src='js/jquery_cookie.min.js'></script>
    
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
     
      <script type='text/javascript' src='js/wp-util.min.js'></script>
      <script type='text/javascript' src='js/wp-backbone.min.js'></script>
     
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
      <script type='text/javascript' src='js/user.js'></script>
      <script type='text/javascript' src='js/js_composer_front.min.js'></script>
      
	  
	  
	  <link rel="stylesheet" href="css/language-selector.css" type="text/css" media="all" />
      
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />

      	<link href="css/ptable.css" type="text/css" rel="stylesheet" media="all">
      		<link href="css/pblue.css" type="text/css" rel="stylesheet" media="all">
      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css' type='text/css' media='all' />
      <link rel='stylesheet' id='wsl-widget-css'  href='css/style.css' type='text/css' media='all' />
      <link rel='stylesheet' id='mailchimp-for-wp-checkbox-css'  href='css/checkbox.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='slimmenu-css-css'  href='css/slimmenu.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='bootstrap.css-css'  href='css/bootstrap.css' type='text/css' media='all' />
      <link rel='stylesheet' id='animate.css-css'  href='css/animate.css' type='text/css' media='all' />
      <link rel='stylesheet' id='js_composer_front-css'  href='css/js_composer.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-layout-css'  href='css/woocommerce-layout.css' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css'  href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css'  href='css/woocommerce.css' type='text/css' media='all' />
      <link rel='stylesheet' id='icomoon.css-css'  href='css/icomoon.css' type='text/css' media='all' />
      <link rel='stylesheet' id='fontawesome-css'  href='css/font-awesome.css' type='text/css' media='all' />
      <link rel='stylesheet' id='styles.css-css'  href='css/styles2.css' type='text/css' media='all' />
      <link rel='stylesheet' id='mystyles.css-css'  href='css/mystyles.css' type='text/css' media='all' />
      <link rel='stylesheet' id='tooltip-classic.css-css'  href='css/tooltip-classic.css' type='text/css' media='all' />
      <link rel='stylesheet' id='default-style-css'  href='css/style2.css' type='text/css' media='all' />
      <link rel='stylesheet' id='custom.css-css'  href='css/custom.css' type='text/css' media='all' />
      <link rel='stylesheet' id='custom2css-css'  href='css/custom2.css' type='text/css' media='all' />
      <link rel='stylesheet' id='st_tour_ver-css'  href='css/st_tour_ver.css' type='text/css' media='all' />
      <link rel='stylesheet' id='user.css-css'  href='css/user.css' type='text/css' media='all' />
      <link rel='stylesheet' id='custom-responsive-css'  href='css/custom-responsive.css' type='text/css' media='all' />
      <link rel='stylesheet' id='hover_effect_demo-css'  href='css/demo.css' type='text/css' media='all' />
      <link rel='stylesheet' id='hover_effect_normal-css'  href='css/normalize.css' type='text/css' media='all' />
      <link rel='stylesheet' id='hover_effect_set1-css'  href='css/set1.css' type='text/css' media='all' />
      <link rel='stylesheet' id='hover_effect_set2-css'  href='css/set2.css' type='text/css' media='all' />
      <link rel='stylesheet' id='box_icon_color-css'  href='css/box-icon-color.css' type='text/css' media='all' />
      <link rel='stylesheet' id='roboto-font-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A500%2C700%2C400%2C300%2C100' type='text/css' media='all' />
      <link rel='stylesheet' id='menu_style1.css-css'  href='css/menu_style1.css' type='text/css' media='all' />
     
      <link rel='stylesheet' id='iconpicker-css-css'  href='css/fontawesome-iconpicker.css' type='text/css' media='all' />
      <link rel='stylesheet' id='switcher-css'  href='css/switcher.css' type='text/css' media='all' />
      <link rel='stylesheet' id='buttons-css'  href='css/buttons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='dashicons-css'  href='css/dashicons.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='mediaelement-css'  href='css/mediaelementplayer.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='wp-mediaelement-css'  href='css/wp-mediaelement.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='media-views-css'  href='css/media-views.min2.css' type='text/css' media='all' />
      <link rel='stylesheet' id='imgareaselect-css'  href='css/imgareaselect.css' type='text/css' media='all' />
      
      <script type='text/javascript' src='js/jquery.js'></script>
      <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
     
      <script type='text/javascript' src='js/add-to-cart.min.js'></script>
      <script type='text/javascript' src='js/woocommerce-add-to-cart.js'></script>
      <script type='text/javascript' src='js/switcher.js'></script>
      
      <script type='text/javascript' src='js/utils.min.js'></script>
      <script type='text/javascript' src='js/plupload.full.min.js'></script>
      <!--[if lt IE 8]>
      <script type='text/javascript' src='http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-includes/js/json2.min.js'></script>
      <![endif]-->
     
     
      <style type="text/css">																						</style>
      <link rel="icon"  type="image/png"  href="http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/themes/traveler/img/favicon.png">
      <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1422334320496{background-image: url(http://dungdt.shinethemedev.com/traveler/wp-content/uploads/2014/11/196_365_1200x5001.jpg?id=246) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1422239553047{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1427261023966{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/uploads/2014/11/196_365_1200x5004.jpg?id=4995) !important;}.vc_custom_1417684088770{padding-top: 30px !important;}.vc_custom_1417686538290{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1422239559712{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1422239566268{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1422239573876{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1417684129972{margin-top: 60px !important;margin-bottom: 0px !important;}</style>
      <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
      <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
      <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
      <!--[if lte IE 9]>
      <link rel="stylesheet" type="text/css" href="http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
      <![endif]-->
      <!-- Custom_css.php-->
      <style id="st_custom_css_php">
         .map_type .st-map-type{
         background-color: #ed8323;
         }
         #gmap-control{
         background-color: #ed8323;
         }
         .gmapzoomminus , .gmapzoomplus{
         background-color: #ed8323;
         }
         .sort_icon .active,
         .woocommerce-ordering .sort_icon a.active{
         color:#ed8323;
         cursor: default;
         }
         .package-info-wrapper .icon-group i:not(".fa-star"):not(".fa-star-o"){
         color:#ed8323;
         }
         a,
         a:hover,
         .list-category > li > a:hover,
         .pagination > li > a,
         .top-user-area .top-user-area-list > li > a:hover,
         .sidebar-widget.widget_archive ul> li > a:hover,
         .sidebar-widget.widget_categories ul> li > a:hover,
         .comment-form .add_rating,
         .booking-item-reviews > li .booking-item-review-content .booking-item-review-expand span,
         .form-group.form-group-focus .input-icon.input-icon-hightlight,
         .booking-item-payment .booking-item-rating-stars .fa-star,
         .booking-item-raiting-summary-list > li .booking-item-rating-stars,
         .woocommerce .woocommerce-breadcrumb .last,
         .product-categories li.current-cat:before,
         .product-categories li.current-cat-parent:before,
         .product-categories li.current-cat>a,
         .product-categories li.current-cat>span,
         .woocommerce .star-rating span:before,
         .woocommerce ul.products li.product .price,
         .woocommerce .woocommerce_paging a,
         .woocommerce .product_list_widget ins .amount,
         #location_header_static i,
         .booking-item-reviews > li .booking-item-rating-stars,
         .booking-item-payment .booking-item-rating-stars .fa-star-half-o,
         #top_toolbar .top_bar_social:hover,
         .woocommerce .woocommerce-message:before,.woocommerce .woocommerce-info:before,
         .vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a,
         .booking-item-rating .booking-item-rating-stars ,
         body .box-icon-border.box-icon-white:hover,body  [class^="box-icon-border"].box-icon-white:hover,body  [class*=" box-icon-border"].box-icon-white:hover,body  .box-icon-border.box-icon-to-white:hover:hover,body  [class^="box-icon-border"].box-icon-to-white:hover:hover,body  [class*=" box-icon-border"].box-icon-to-white:hover:hover,
         #main-footer .text-color,
         .change_same_location:focus,
         ul.slimmenu.slimmenu-collapsed li ul li a,
         ul.slimmenu.collapsed li ul li a,
         .st_category_header h4,.st_tour_box_style ul a.text-darken:hover,
         .st_accordion.st_tour_ver .panel-default > .panel-heading,
         .st_social.style2 >a:hover,
         .color-main,.main-color
         {
         color:#ed8323}
         body .st_tour_grid .text-color,body .color-text,
         body .st_tour_grid .text-color-hover:hover,body .st_tour_grid .color-text-hover:hover,body .st_tour_grid .text-darken.text-color-hover:hover,body .st_tour_grid .text-darken.color-text-hover:hover,
         body .st_tour_list .text-color,body .color-text,
         body .st_tour_list .text-color-hover:hover,body .st_tour_list .color-text-hover:hover,body .st_tour_list .text-darken.text-color-hover:hover,body .st_tour_list .text-darken.color-text-hover:hover
         {
         color:#ed8323}
         ::selection {
         background: #ed8323;
         color: #fff;
         }
         .share ul li a:hover{
         color:#ed8323!important;
         }
         .vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a {
         color: #ed8323 !important;
         }
         header#main-header,
         .btn-primary,
         .post .post-header,
         .top-user-area .top-user-area-list > li.top-user-area-avatar > a:hover > img,
         .booking-item:hover, .booking-item.active,
         .booking-item-dates-change:hover,
         .btn-group-select-num >.btn.active, .btn-group-select-num >.btn.active:hover,
         .btn-primary:hover,
         .booking-item-features > li:hover > i,
         .form-control:active,
         .form-control:focus,
         .fotorama__thumb-border,
         .sticky-wrapper.is-sticky .main_menu_wrap,
         .woocommerce form .form-row.woocommerce-validated .select2-container,
         .woocommerce form .form-row.woocommerce-validated input.input-text,
         .woocommerce form .form-row.woocommerce-validated select,
         .btn-primary:focus
         {
         border-color:#ed8323;
         }
         #menu1 {
         border-bottom: 2px solid #ed8323;
         }
         .woocommerce .woocommerce-message,.woocommerce .woocommerce-info {
         border-top-color:  #ed8323;
         }
         .main-bgr,.bgr-main,
         .main-bgr-hover:hover,.bgr-main-hover:hover,
         .pagination > li > a.current, .pagination > li > a.current:hover,
         .btn-primary,input.btn-primary:focus,input.btn-primary,
         ul.slimmenu li.active > a, ul.slimmenu li:hover > a,
         .nav-drop > .nav-drop-menu > li > a:hover,
         .btn-group-select-num >.btn.active, .btn-group-select-num >.btn.active:hover,
         .btn-primary:hover,
         .pagination > li.active > a, .pagination > li.active > a:hover,
         .box-icon, [class^="box-icon-"], [class*=" box-icon-"]:not(.box-icon-white):not(.box-icon-border-dashed):not(.box-icon-border),
         .booking-item-raiting-list > li > div.booking-item-raiting-list-bar > div, .booking-item-raiting-summary-list > li > div.booking-item-raiting-list-bar > div,
         .irs-bar,
         .nav-pills > li.active > a,
         .search-tabs-bg > .tabbable > .nav-tabs > li.active > a,
         .search-tabs-bg > .tabbable > .nav-tabs > li > a:hover > .fa,
         .irs-slider,
         .post-link,
         .hover-img .hover-title, .hover-img [class^="hover-title-"], .hover-img [class*=" hover-title-"],
         .post-link:hover,
         #gotop:hover,
         .shop-widget-title,
         .woocommerce ul.products li.product .add_to_cart_button,
         .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
         .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,
         .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
         .sidebar_section_title,
         .shop_reset_filter:hover,
         .woocommerce .woocommerce_paging a:hover,
         .pagination .page-numbers.current,
         .pagination .page-numbers.current:hover,
         .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
         .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,
         .chosen-container .chosen-results li.highlighted,
         #taSignIn,
         .grid_hotel_room .grid ,
         .grid_hotel_room .grid figure,
         figure.effect-layla,
         .st-page-sidebar-new .page-sidebar-menu .sub-menu.item .active > a,.st-page-sidebar-new .page-sidebar-menu > li.active > a,
         .single-location .search-tabs-bg .tabbable .nav-tabs > li.active a  ,
         .single-location .search-tabs-bg .tabbable .nav-tabs > li:hover a ,
         .single-location .search-tabs-bg .tabbable .nav-tabs > li a:hover,
         ul.slimmenu.collapsed li .sub-toggle,
         ul.slimmenu.collapsed li ul li a:hover,
         .end2,.end1,
         body #gotop.go_top_tour_box,
         .st_tab.st_tour_ver .nav-tabs>li.active>a,.st_tab.st_tour_ver .nav-tabs>li.active::before,
         .st_accordion.st_tour_ver>.panel>.panel-heading>.panel-title>a[aria-expanded=true],
         .st_social.style1 >a:hover,
         .st_list_partner_nav .fa:hover,
         .st_tour_grid .fotorama__arr,.st_tour_grid .fotorama__video-close,.st_tour_grid .fotorama__fullscreen-icon,
         .st_tour_list .fotorama__arr,.st_tour_list .fotorama__video-close,.st_tour_list .fotorama__fullscreen-icon,
         .st_tour_ver .div_review_half
         {
         background:#ed8323 ;
         border-color: #ed8323 ;
         }
         .calendar-content .fc-state-default, .calendar-content .fc-toolbar, .calendar-content.fc-unthemed .btn.btn-available:hover , .calendar-content.fc-unthemed .st-active .btn.btn-available, .calendar-content.fc-unthemed .btn.btn-available.selected {
         background-color:#ed8323 !important;
         }
         .calendar-content.fc-unthemed .fc-basic-view .fc-head{ color:  #ed8323 !important; }
         .calendar-content.fc-unthemed .btn.btn-available:hover ,.datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover,
         .calendar-content.fc-unthemed .st-active button.next_month,
         .calendar-content.fc-unthemed .btn.btn-available:not(.next_month):hover
         {
         background-color:#ed8323 !important;
         border-color: #ed8323;
         }
         .tagcloud a{
         background-color:#ed8323 !important;
         color: #ed8323 !important;
         }
         .datepicker table tr td.today:before, .datepicker table tr td.today:hover:before, .datepicker table tr td.today.disabled:before, .datepicker table tr td.today.disabled:hover:before{
         border-bottom-color: #ed8323;
         }
         .box-icon:hover, [class^="box-icon-"]:hover, [class*=" box-icon-"]:hover
         {
         background:rgba(237,131,35,0.7);
         }
         .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover
         {
         background:rgba(237,131,35,0.7);
         }
         .booking-item-reviews > li .booking-item-review-person-avatar:hover
         {
         -webkit-box-shadow: 0 0 0 2px #ed8323;
         box-shadow: 0 0 0 2px #ed8323;
         }
         #main-header ul.slimmenu li.current-menu-item > a, #main-header ul.slimmenu li:hover > a,
         #main-header .menu .current-menu-ancestor >a,
         #main-header .product-info-hide .product-btn:hover
         {
         background:#ed8323;
         color:white;
         }
         #main-header .menu .current-menu-item > a
         {
         background:#ed8323 !important;
         color:white !important;
         }
         .i-check.checked, .i-radio.checked
         {
         border-color: #ed8323;
         background: #ed8323;
         }
         .box-icon-border, [class^="box-icon-border"], [class*=" box-icon-border"]{
         border-color: #ed8323;
         color: #ed8323;
         }
         .box-icon-border:hover, [class^="box-icon-border"]:hover, [class*=" box-icon-border"]:hover{
         background-color:#ed8323;
         }
         .border-main, .i-check.hover, .i-radio.hover,.st_list_partner_nav .fa
         {
         border-color: #ed8323;
         }
         .owl-controls .owl-buttons div:hover
         {
         background: #ed8323;
         -webkit-box-shadow: 0 0 0 1px #ed8323;
         box-shadow: 0 0 0 1px #ed8323;
         }
         .irs-diapason{
         background: #ed8323;
         }
         ul.slimmenu.slimmenu-collapsed li .slimmenu-sub-collapser {
         background:#ed8323}
         .calendar-content .fc-toolbar{
         background-color: #ed8323;
         margin: 0;
         }
         .calendar-content.fc-unthemed .fc-basic-view .fc-head {
         color: #ed8323;
         }
         .calendar-content.fc-unthemed .btn.btn-available_allow_fist:hover::before{
         border-color: #ed8323 #ccc #ccc #ed8323;
         }
         .calendar-content.fc-unthemed .btn.btn-available_allow_last:hover::before {
         border-color: #ccc #ed8323 #ed8323 #ccc;
         }
         .booking-item-rating .fa ,
         .booking-item.booking-item-small .booking-item-rating-stars,
         .comment-form .add_rating,
         .booking-item-payment .booking-item-rating-stars .fa-star,
         .st-item-rating .fa,
         li  .fa-star , li  .fa-star-o , li  .fa-star-half-o{
         color:#ed8323    }
         .feature_class{
         background: #19A1E5;
         }
         .feature_class::before {
         border-color: #19A1E5 #19A1E5 transparent transparent;
         }
         .feature_class::after {
         border-color: #19A1E5 transparent #19A1E5 #19A1E5;
         }
         .featured_single .feature_class::before{
         border-color: transparent #19A1E5 transparent transparent;
         }
         .item-nearby .st_featured::before {
         border-color: transparent transparent #19A1E5 #19A1E5;
         }
         .item-nearby .st_featured::after {
         border-color: #19A1E5 #19A1E5 #19A1E5 transparent  ;
         }
         .st_sale_class{
         background-color: #cc0033;
         }
         .st_sale_class.st_sale_paper * {color: #cc0033 }
         .st_sale_class .st_star_label_sale_div::after,.st_sale_label_1::before{
         border-color: #cc0033 transparent transparent #cc0033 ;
         }
         .st_sale_class .st_star_label_sale_div::after{
         border-color: #cc0033}
      </style>
      <!-- End Custom_css.php-->
      <!-- start css hook filter -->
      <style type="text/css" id="st_custom_css">
      </style>
      <!-- end css hook filter -->
      <!-- css disable javascript -->
      <style type="text/css" id="st_enable_javascript">
         .search-tabs-bg > .tabbable >.tab-content > .tab-pane{display: none; opacity: 0;}.search-tabs-bg > .tabbable >.tab-content > .tab-pane.active{display: block;opacity: 1;}.search-tabs-to-top { margin-top: -120px;}
      </style>
      <style>
         .st_gmap{
         z-index: 0;
         }
         .div_btn_search_map{
         display:none;
         }
         .st_menu_mobile_new{
         display: none !important;;
         }
         .st_logo_mobile
         {
         padding: 0 7px 9px 5px;
         }
         @media(max-width: 992px){
         .st_menu_mobile_new{
         display: block !important;;
         }
         .header-top{
         display: none !important;
         }
         }
         #st_header_wrap{
         z-index:15;
         }
         .booking-item-raiting-summary-list{margin-right: -20px;}
      </style>
      <!-- Begin Custom CSS        -->
      <style>
         body{
         }
         body{
         }
         .global-wrap{
         }
         .header-top{
         }
         .st_menu ul.slimmenu li a, .st_menu ul.slimmenu li .sub-toggle>i{
         }
         #menu1,#menu1 .menu-collapser{
         background: #ffffff;
         }
      </style>
      <!-- End Custom CSS -->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1422334320496{background-image: url(http://dungdt.shinethemedev.com/traveler/wp-content/uploads/2014/11/196_365_1200x5001.jpg?id=246) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1422239553047{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1427261023966{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://z8e0944c0fq469vst36jkhqn.wpengine.netdna-cdn.com/wp-content/uploads/2014/11/196_365_1200x5004.jpg?id=4995) !important;}.vc_custom_1417684088770{padding-top: 30px !important;}.vc_custom_1417686538290{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1422239559712{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1422239566268{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1422239573876{padding-top: 30px !important;padding-bottom: 30px !important;}.vc_custom_1417684129972{margin-top: 60px !important;margin-bottom: 0px !important;}</style>
      <noscript>
         <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
      </noscript>
	  
   </head>
   <body class="page-template page-template-template-register page-template-template-register-php page page-id-14818  wide menu_style1 topbar_position_default enable_sticky_menu wpb-js-composer js-comp-ver-5.0 vc_responsive">
<?php 
include('header.php');
?>
<div class="global-wrap container-fluid">
         <div class="row">
            <div class="container-fluid">
              
              <div class="vc_row wpb_row st bg-holder vc_custom_1427261023966 vc_row-has-fill bg-parallax">
                  <div class="bg-mask"></div>
                  <div class=' '>
                     <div class='row'>
                        <div class="wpb_column column_container col-md-12">
                           <div class="vc_column-inner wpb_wrapper">
                              <div class="text-center text-white">
                                 <h2 class="text-uc mb20">Register with Hey Stranger</h2>
                                 <ul class="icon-list list-inline-block mb0 last-minute-rating">
                                    <li><i class="fa  fa-star"></i></li>
                                    <li><i class="fa  fa-star-o"></i></li>
                                    <li><i class="fa  fa-star-o"></i></li>
                                    <li><i class="fa  fa-star-o"></i></li>
                                    <li><i class="fa  fa-star-o"></i></li>
                                 </ul>
                                 <h5 class="last-minute-title">List your property and maximize online bookings </h5>
                                 <!--<p class="last-minute-date">02/16/2017</p>-->
                                 <!--<p class="mb20">-->
                                 <!--   <b>-->
                                 <!--   from $150,00 / night                </b>-->
                                 <!--</p>-->
                                 <!--<a class="btn btn-lg btn-white btn-ghost" href="$">-->
                                 <!--Book now        <i class="fa fa-angle-right"></i>-->
                                 <!--</a>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--End .row-->
                  </div>
                  <!--End .container-->
               </div>
             
              
              <div class="">
                
                 <div class="row">
                 
                
                 
                 
                  <div class="container">
                     <h3 class="page-title text-center mt60">Packages to Subscribe / Advertise on Hey Stranger</h3>
                  </div>
                  
                  <div class="gap"></div>
               </div>
                
                
                 <div class="pricing-wrapper comparison-table clearfix color-blue">
				<div class="col-md-4 pricing-col list-feature">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Listing Packages</h5>
					  <p>Compare Package Feature</p>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>R200.00 Once-off Setup Fee 1-7 listings (Per Listing)</p>
					  </li>
					  <li>
						<p>R120.00 Once-off Setup Fee 8-15 listings (Per Listing)</p>
					  </li>
					  <li>
						<p>R75.00 Once-off Setup Fee 16 and more listings (Per Listing)</p>
					  </li>
					  <li>
						<p>On All Successful Referral</p>
					  </li>
					  <li>
						<p>Accommodation / Venues / Conference</p>
					  </li>
					  <li>
						<p>Transport </p>
					  </li>
					  <li>
						<p>Additional Services</p>
					  </li>
					 
					</div>
				  </div>
				</div>
				
								
				<div class="col-md-2 pricing-col person">				
				<form method='POST'>	
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Launch Promotion Annual Only</h5>
					  <div class="price-box">
						<div class="price">650
						  <div class="currency">R</div>
						  <div class="plan">+ Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					 
					</div>
					<div class="pricing-footer">						<br/>
					  <button type='submit' name='pk1_sub' class="btn btn-act rounded btn-line">
						<span>Join</span>
						<i class="fa fa-arrow-right"></i>
					  </button>
					</div>
				  </div>				
				  </form>	
				</div>				
				<div class="col-md-2 pricing-col current unlim">
				<form method='POST'>
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Annual</h5>
					  <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>Normal</span>
					  </a>
					  <div class="price-box">
						<div class="price">R950
						  <div class="currency">+</div>
						  <div class="plan">Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					 
					</div>
					<div class="pricing-footer">                     <br/>					  <button type='submit' name='pk2_sub' class="btn btn-act rounded btn-line">						<span>Join</span>						<i class="fa fa-arrow-right"></i>					  </button>
					</div>
				  </div>
				  </form>
				</div>
				<div class="col-md-2 pricing-col business">
				<form method='POST'>
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Commission</h5>
					  <div class="price-box">
						<div class="price">15%
						  <div class="currency">+</div>
						  <div class="plan">Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					
					</div>
					<div class="pricing-footer">					<br/>					  <button type='submit' name='pk3_sub' class="btn btn-act rounded btn-line">						<span>Join</span>						<i class="fa fa-arrow-right"></i>					  </button>
					</div>
				  </div>
				  </form>
				</div>
				<div class="col-md-1 pricing-col business">
				<form method='POST'>
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Commission</h5>
					  <div class="price-box">
						<div class="price">12%
						  <div class="currency">+</div>
						  <div class="plan">Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					 
					</div>
					<div class="pricing-footer">                      <br/>					  <button type='submit' name='pk4_sub' class="btn btn-act rounded btn-line">						<span>Join</span>						<i class="fa fa-arrow-right"></i>					  </button>					</div>
				  </div>
				  </form>
				</div>
				<div class="col-md-1 pricing-col business">
				<form method='POST'>
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Commission</h5>
					  <div class="price-box">
						<div class="price">10%
						  <div class="currency">+</div>
						  <div class="plan">Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  
					</div>
					<div class="pricing-footer">                      <br/>					  <button type='submit' name='pk5_sub' class="btn btn-act rounded btn-line">						<span>Join</span>						<i class="fa fa-arrow-right"></i>					  </button>
					</div>
				  </div>
				</div>
				</form>
			  </div>
                 <div class="container">
                     <h3 class="page-title text-center mt60">Media Packages</h3>
                  </div>
                
                <div class="pricing-wrapper comparison-table clearfix color-blue">
				<div class="col-md-4 pricing-col list-feature">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Social Banner Packages</h5>
					  
					</div>
					<div class="pricing-feature">
					  <li>
						<p>Local</p>
					  </li>
					  <li>
						<p>Global</p>
					  </li>
					  <li>
						<p>1000 Ads (40 Ads pd)</p>
					  </li>
					  <li>
						<p>+50 Free Ads  </p>
					  </li>
					  <li>
						<p>2000 Ads (80 Ads pd)</p>
					  </li>
					  <li>
						<p>+125 Free Ads  </p>
					  </li>
					  <li>
						<p>2500 Ads (100 Ads pd)</p>
					  </li>
					   <li>
						<p>+175 Free Ads  </p>
					  </li>
					   <li>
						<p>4000 Ads (160 Ads pd)</p>
					  </li>
					   <li>
						<p>+375 Free Ads  </p>
					  </li>
					 
					</div>
				  </div>
				</div>
				
				
				<div class="col-md-2 pricing-col person">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Bronze</h5>
					   <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>2 Weeks</span>
					  </a>
					  <div class="price-box">
						<div class="price">R150
						 
						  <div class="plan">+ Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					   <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					   <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					   <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					 
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Join</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
				</div>
				<div class="col-md-2 pricing-col current unlim">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Silvar</h5>
					  <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>Monthly</span>
					  </a>
					  <div class="price-box">
						<div class="price">R200
						  
						  <div class="plan">+ Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					 <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Join</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
				</div>
				<div class="col-md-2 pricing-col business">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Gold</h5>
					   <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>2 Weeks</span>
					  </a>
					  <div class="price-box">
						<div class="price">R350
						  
						  <div class="plan">+ Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						<i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						<i class="fa fa-check available"></i>
						</p>
					  </li>
					   <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					   <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					
					</div>
					
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Join</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
				</div>
				<div class="col-md-2 pricing-col business">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Platinum</h5>
					   <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>Monthly</span>
					  </a>
					  <div class="price-box">
						<div class="price">R500
						 
						  <div class="plan">+ Vat</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						   <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						 <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					 
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Join</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
				</div>
				
			  </div>
              </div>
              
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
      
	  
   </body>
</html>