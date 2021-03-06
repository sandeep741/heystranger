<!DOCTYPE html>

<?php
include('lib/config.php');

if($_SESSION['pkg_session']=='')
{
echo "<script>window.location='my-package.php';</script>";
exit();
}

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>Welcome to Hey Stranger</title>
      <link rel="stylesheet" href="css/language-selector.css" type="text/css" media="all" />
      <script type="text/javascript">
         var ajaxurl = '';
      </script>
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />

      <script type="text/javascript">
         window._wpemojiSettings = {"baseUrl":"index.html","ext":".png","svgUrl":"","svgExt":".svg","source":{"concatemoji":"js\/wp-emoji-release.min.js"}};
         !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
      </script>
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
      <script type='text/javascript'>
         /* <![CDATA[ */
         var list_location = {"list":"\"\""};
         var st_checkout_text = {"without_pp":"Submit Request","with_pp":"Booking Now","validate_form":"Please fill all required fields","error_accept_term":"Please accept our terms and conditions","adult_price":"Adult","child_price":"Child","infant_price":"Infant","adult":"Adult","child":"Child","infant":"Infant","price":"Price","origin_price":"Origin Price"};
         var st_params = {"theme_url":"heystranger.com","site_url":"heystranger.com","ajax_url":"","loading_url":"images\/wpspin_light.gif","st_search_nonce":"738928d4c6","facebook_enable":"on","facbook_app_id":"","booking_currency_precision":"2","thousand_separator":".","decimal_separator":",","currency_symbol":"$","currency_position":"left","currency_rtl_support":"off","free_text":"Free","date_format":"mm\/dd\/yyyy","date_format_calendar":"mm\/dd\/yyyy","time_format":"12h","mk_my_location":"images\/my_location.png","locale":"en","header_bgr":"","text_refresh":"Refresh","date_fomat":"MM\/DD\/YYYY","text_loading":"Loading...","text_no_more":"No More"};
         var st_timezone = {"timezone_string":""};
         var st_list_map_params = {"mk_my_location":"images\/my_location.png","text_my_location":"3000 m radius","text_no_result":"No Result","cluster_0":"<div class='cluster cluster-1'>CLUSTER_COUNT<\/div>","cluster_20":"<div class='cluster cluster-2'>CLUSTER_COUNT<\/div>","cluster_50":"<div class='cluster cluster-3'>CLUSTER_COUNT<\/div>","cluster_m1":"images\/m1.png","cluster_m2":"images\/m2.png","cluster_m3":"images\/m3.png","cluster_m4":"images\/m4.png","cluster_m5":"images\/m5.png"};
         var st_config_partner = {"text_er_image_format":""};
         var st_location_from_to = {"lists":[]};
         var st_hotel_localize = {"booking_required_adult":"Please select adult number","booking_required_children":"Please select children number","booking_required_adult_children":"Please select Adult and  Children number","room":"Room","is_aoc_fail":"Please select the ages of children","is_not_select_date":"Please select Check-in and Check-out date","is_not_select_check_in_date":"Please select Check-in date","is_not_select_check_out_date":"Please select Check-out date","is_host_name_fail":"Please provide Host Name(s)"};
         var st_icon_picker = {"icon_list":["fa-glass","fa-music","fa-search","fa-envelope-o","fa-heart","fa-star","fa-star-o","fa-user","fa-film","fa-th-large","fa-th","fa-th-list","fa-check","fa-remove","fa-close","fa-times","fa-search-plus","fa-search-minus","fa-power-off","fa-signal","fa-gear","fa-cog","fa-trash-o","fa-home","fa-file-o","fa-clock-o","fa-road","fa-download","fa-arrow-circle-o-down","fa-arrow-circle-o-up","fa-inbox","fa-play-circle-o","fa-rotate-right","fa-repeat","fa-refresh","fa-list-alt","fa-lock","fa-flag","fa-headphones","fa-volume-off","fa-volume-down","fa-volume-up","fa-qrcode","fa-barcode","fa-tag","fa-tags","fa-book","fa-bookmark","fa-print","fa-camera","fa-font","fa-bold","fa-italic","fa-text-height","fa-text-width","fa-align-left","fa-align-center","fa-align-right","fa-align-justify","fa-list","fa-dedent","fa-outdent","fa-indent","fa-video-camera","fa-photo","fa-image","fa-picture-o","fa-pencil","fa-map-marker","fa-adjust","fa-tint","fa-edit","fa-pencil-square-o","fa-share-square-o","fa-check-square-o","fa-arrows","fa-step-backward","fa-fast-backward","fa-backward","fa-play","fa-pause","fa-stop","fa-forward","fa-fast-forward","fa-step-forward","fa-eject","fa-chevron-left","fa-chevron-right","fa-plus-circle","fa-minus-circle","fa-times-circle","fa-check-circle","fa-question-circle","fa-info-circle","fa-crosshairs","fa-times-circle-o","fa-check-circle-o","fa-ban","fa-arrow-left","fa-arrow-right","fa-arrow-up","fa-arrow-down","fa-mail-forward","fa-share","fa-expand","fa-compress","fa-plus","fa-minus","fa-asterisk","fa-exclamation-circle","fa-gift","fa-leaf","fa-fire","fa-eye","fa-eye-slash","fa-warning","fa-exclamation-triangle","fa-plane","fa-calendar","fa-random","fa-comment","fa-magnet","fa-chevron-up","fa-chevron-down","fa-retweet","fa-shopping-cart","fa-folder","fa-folder-open","fa-arrows-v","fa-arrows-h","fa-bar-chart-o","fa-bar-chart","fa-twitter-square","fa-facebook-square","fa-camera-retro","fa-key","fa-gears","fa-cogs","fa-comments","fa-thumbs-o-up","fa-thumbs-o-down","fa-star-half","fa-heart-o","fa-sign-out","fa-linkedin-square","fa-thumb-tack","fa-external-link","fa-sign-in","fa-trophy","fa-github-square","fa-upload","fa-lemon-o","fa-phone","fa-square-o","fa-bookmark-o","fa-phone-square","fa-twitter","fa-facebook-f","fa-facebook","fa-github","fa-unlock","fa-credit-card","fa-feed","fa-rss","fa-hdd-o","fa-bullhorn","fa-bell","fa-certificate","fa-hand-o-right","fa-hand-o-left","fa-hand-o-up","fa-hand-o-down","fa-arrow-circle-left","fa-arrow-circle-right","fa-arrow-circle-up","fa-arrow-circle-down","fa-globe","fa-wrench","fa-tasks","fa-filter","fa-briefcase","fa-arrows-alt","fa-group","fa-users","fa-chain","fa-link","fa-cloud","fa-flask","fa-cut","fa-scissors","fa-copy","fa-files-o","fa-paperclip","fa-save","fa-floppy-o","fa-square","fa-navicon","fa-reorder","fa-bars","fa-list-ul","fa-list-ol","fa-strikethrough","fa-underline","fa-table","fa-magic","fa-truck","fa-pinterest","fa-pinterest-square","fa-google-plus-square","fa-google-plus","fa-money","fa-caret-down","fa-caret-up","fa-caret-left","fa-caret-right","fa-columns","fa-unsorted","fa-sort","fa-sort-down","fa-sort-desc","fa-sort-up","fa-sort-asc","fa-envelope","fa-linkedin","fa-rotate-left","fa-undo","fa-legal","fa-gavel","fa-dashboard","fa-tachometer","fa-comment-o","fa-comments-o","fa-flash","fa-bolt","fa-sitemap","fa-umbrella","fa-paste","fa-clipboard","fa-lightbulb-o","fa-exchange","fa-cloud-download","fa-cloud-upload","fa-user-md","fa-stethoscope","fa-suitcase","fa-bell-o","fa-coffee","fa-cutlery","fa-file-text-o","fa-building-o","fa-hospital-o","fa-ambulance","fa-medkit","fa-fighter-jet","fa-beer","fa-h-square","fa-plus-square","fa-angle-double-left","fa-angle-double-right","fa-angle-double-up","fa-angle-double-down","fa-angle-left","fa-angle-right","fa-angle-up","fa-angle-down","fa-desktop","fa-laptop","fa-tablet","fa-mobile-phone","fa-mobile","fa-circle-o","fa-quote-left","fa-quote-right","fa-spinner","fa-circle","fa-mail-reply","fa-reply","fa-github-alt","fa-folder-o","fa-folder-open-o","fa-smile-o","fa-frown-o","fa-meh-o","fa-gamepad","fa-keyboard-o","fa-flag-o","fa-flag-checkered","fa-terminal","fa-code","fa-mail-reply-all","fa-reply-all","fa-star-half-empty","fa-star-half-full","fa-star-half-o","fa-location-arrow","fa-crop","fa-code-fork","fa-unlink","fa-chain-broken","fa-question","fa-info","fa-exclamation","fa-superscript","fa-subscript","fa-eraser","fa-puzzle-piece","fa-microphone","fa-microphone-slash","fa-shield","fa-calendar-o","fa-fire-extinguisher","fa-rocket","fa-maxcdn","fa-chevron-circle-left","fa-chevron-circle-right","fa-chevron-circle-up","fa-chevron-circle-down","fa-html5","fa-css3","fa-anchor","fa-unlock-alt","fa-bullseye","fa-ellipsis-h","fa-ellipsis-v","fa-rss-square","fa-play-circle","fa-ticket","fa-minus-square","fa-minus-square-o","fa-level-up","fa-level-down","fa-check-square","fa-pencil-square","fa-external-link-square","fa-share-square","fa-compass","fa-toggle-down","fa-caret-square-o-down","fa-toggle-up","fa-caret-square-o-up","fa-toggle-right","fa-caret-square-o-right","fa-euro","fa-eur","fa-gbp","fa-dollar","fa-usd","fa-rupee","fa-inr","fa-cny","fa-rmb","fa-yen","fa-jpy","fa-ruble","fa-rouble","fa-rub","fa-won","fa-krw","fa-bitcoin","fa-btc","fa-file","fa-file-text","fa-sort-alpha-asc","fa-sort-alpha-desc","fa-sort-amount-asc","fa-sort-amount-desc","fa-sort-numeric-asc","fa-sort-numeric-desc","fa-thumbs-up","fa-thumbs-down","fa-youtube-square","fa-youtube","fa-xing","fa-xing-square","fa-youtube-play","fa-dropbox","fa-stack-overflow","fa-instagram","fa-flickr","fa-adn","fa-bitbucket","fa-bitbucket-square","fa-tumblr","fa-tumblr-square","fa-long-arrow-down","fa-long-arrow-up","fa-long-arrow-left","fa-long-arrow-right","fa-apple","fa-windows","fa-android","fa-linux","fa-dribbble","fa-skype","fa-foursquare","fa-trello","fa-female","fa-male","fa-gittip","fa-gratipay","fa-sun-o","fa-moon-o","fa-archive","fa-bug","fa-vk","fa-weibo","fa-renren","fa-pagelines","fa-stack-exchange","fa-arrow-circle-o-right","fa-arrow-circle-o-left","fa-toggle-left","fa-caret-square-o-left","fa-dot-circle-o","fa-wheelchair","fa-vimeo-square","fa-turkish-lira","fa-try","fa-plus-square-o","fa-space-shuttle","fa-slack","fa-envelope-square","fa-wordpress","fa-openid","fa-institution","fa-bank","fa-university","fa-mortar-board","fa-graduation-cap","fa-yahoo","fa-google","fa-reddit","fa-reddit-square","fa-stumbleupon-circle","fa-stumbleupon","fa-delicious","fa-digg","fa-pied-piper","fa-pied-piper-alt","fa-drupal","fa-joomla","fa-language","fa-fax","fa-building","fa-child","fa-paw","fa-spoon","fa-cube","fa-cubes","fa-behance","fa-behance-square","fa-steam","fa-steam-square","fa-recycle","fa-automobile","fa-car","fa-cab","fa-taxi","fa-tree","fa-spotify","fa-deviantart","fa-soundcloud","fa-database","fa-file-pdf-o","fa-file-word-o","fa-file-excel-o","fa-file-powerpoint-o","fa-file-photo-o","fa-file-picture-o","fa-file-image-o","fa-file-zip-o","fa-file-archive-o","fa-file-sound-o","fa-file-audio-o","fa-file-movie-o","fa-file-video-o","fa-file-code-o","fa-vine","fa-codepen","fa-jsfiddle","fa-life-bouy","fa-life-buoy","fa-life-saver","fa-support","fa-life-ring","fa-circle-o-notch","fa-ra","fa-rebel","fa-ge","fa-empire","fa-git-square","fa-git","fa-y-combinator-square","fa-yc-square","fa-hacker-news","fa-tencent-weibo","fa-qq","fa-wechat","fa-weixin","fa-send","fa-paper-plane","fa-send-o","fa-paper-plane-o","fa-history","fa-circle-thin","fa-header","fa-paragraph","fa-sliders","fa-share-alt","fa-share-alt-square","fa-bomb","fa-soccer-ball-o","fa-futbol-o","fa-tty","fa-binoculars","fa-plug","fa-slideshare","fa-twitch","fa-yelp","fa-newspaper-o","fa-wifi","fa-calculator","fa-paypal","fa-google-wallet","fa-cc-visa","fa-cc-mastercard","fa-cc-discover","fa-cc-amex","fa-cc-paypal","fa-cc-stripe","fa-bell-slash","fa-bell-slash-o","fa-trash","fa-copyright","fa-at","fa-eyedropper","fa-paint-brush","fa-birthday-cake","fa-area-chart","fa-pie-chart","fa-line-chart","fa-lastfm","fa-lastfm-square","fa-toggle-off","fa-toggle-on","fa-bicycle","fa-bus","fa-ioxhost","fa-angellist","fa-cc","fa-shekel","fa-sheqel","fa-ils","fa-meanpath","fa-buysellads","fa-connectdevelop","fa-dashcube","fa-forumbee","fa-leanpub","fa-sellsy","fa-shirtsinbulk","fa-simplybuilt","fa-skyatlas","fa-cart-plus","fa-cart-arrow-down","fa-diamond","fa-ship","fa-user-secret","fa-motorcycle","fa-street-view","fa-heartbeat","fa-venus","fa-mars","fa-mercury","fa-intersex","fa-transgender","fa-transgender-alt","fa-venus-double","fa-mars-double","fa-venus-mars","fa-mars-stroke","fa-mars-stroke-v","fa-mars-stroke-h","fa-neuter","fa-genderless","fa-facebook-official","fa-pinterest-p","fa-whatsapp","fa-server","fa-user-plus","fa-user-times","fa-hotel","fa-bed","fa-viacoin","fa-train","fa-subway","fa-medium","fa-yc","fa-y-combinator","fa-optin-monster","fa-opencart","fa-expeditedssl","fa-battery-4","fa-battery-full","fa-battery-3","fa-battery-three-quarters","fa-battery-2","fa-battery-half","fa-battery-1","fa-battery-quarter","fa-battery-0","fa-battery-empty","fa-mouse-pointer","fa-i-cursor","fa-object-group","fa-object-ungroup","fa-sticky-note","fa-sticky-note-o","fa-cc-jcb","fa-cc-diners-club","fa-clone","fa-balance-scale","fa-hourglass-o","fa-hourglass-1","fa-hourglass-start","fa-hourglass-2","fa-hourglass-half","fa-hourglass-3","fa-hourglass-end","fa-hourglass","fa-hand-grab-o","fa-hand-rock-o","fa-hand-stop-o","fa-hand-paper-o","fa-hand-scissors-o","fa-hand-lizard-o","fa-hand-spock-o","fa-hand-pointer-o","fa-hand-peace-o","fa-trademark","fa-registered","fa-creative-commons","fa-gg","fa-gg-circle","fa-tripadvisor","fa-odnoklassniki","fa-odnoklassniki-square","fa-get-pocket","fa-wikipedia-w","fa-safari","fa-chrome","fa-firefox","fa-opera","fa-internet-explorer","fa-tv","fa-television","fa-contao","fa-500px","fa-amazon","fa-calendar-plus-o","fa-calendar-minus-o","fa-calendar-times-o","fa-calendar-check-o","fa-industry","fa-map-pin","fa-map-signs","fa-map-o","fa-map","fa-commenting","fa-commenting-o","fa-houzz","fa-vimeo","fa-black-tie","fa-fonticons","fa-reddit-alien","fa-edge","fa-credit-card-alt","fa-codiepie","fa-modx","fa-fort-awesome","fa-usb","fa-product-hunt","fa-mixcloud","fa-scribd","fa-pause-circle","fa-pause-circle-o","fa-stop-circle","fa-stop-circle-o","fa-shopping-bag","fa-shopping-basket","fa-hashtag","fa-bluetooth","fa-bluetooth-b","fa-percent","fa-gitlab","fa-wpbeginner","fa-wpforms","fa-envira","fa-universal-access","fa-wheelchair-alt","fa-question-circle-o","fa-blind","fa-audio-description","fa-volume-control-phone","fa-braille","fa-assistive-listening-systems","fa-asl-interpreting","fa-american-sign-language-interpreting","fa-deafness","fa-hard-of-hearing","fa-deaf","fa-glide","fa-glide-g","fa-signing","fa-sign-language","fa-low-vision","fa-viadeo","fa-viadeo-square","fa-snapchat","fa-snapchat-ghost","fa-snapchat-square","flaticon-font3-bridge","flaticon-font3-carousel","flaticon-font3-chinese-pagoda","flaticon-font3-circus-lion","flaticon-font3-clown","flaticon-font3-forest","flaticon-font3-green-park-city-space","flaticon-font3-hohenzollern-bridge","flaticon-font3-island-with-a-palm-tree","flaticon-font3-oriental-temple","flaticon-font3-sand-bucket-and-shovel","flaticon-font2-beer","flaticon-font2-candles","flaticon-font2-confetti","flaticon-font2-cutlery","flaticon-font2-food","flaticon-font2-sandwich","flaticon-font2-shirt","flaticon-font2-sparkler","flaticon-font-backpack","flaticon-font-briefcase","flaticon-font-car","flaticon-font-food","flaticon-font-jeep","flaticon-font-tourist","flaticon-buffet1-burger18","flaticon-icons-bathroom31","flaticon-icons-claw1","flaticon-icons-flowers12","flaticon-icons-fried6","flaticon-icons-person204","flaticon-icons-poker4","flaticon-icons-restaurant26","flaticon-icons-spa10","flaticon-icons-swimming24","flaticon-icons-terrace","flaticon-icons-wellness","flaticon-dep-1-slipper","flaticon-flaticon-lingerie","flaticon-myicons-bathroom22","flaticon-myicons-bathroom27","flaticon-myicons-cleaning2","flaticon-myicons-clothing275","flaticon-myicons-connection30","flaticon-myicons-deposit","flaticon-myicons-floor","flaticon-myicons-hairsalon41","flaticon-myicons-light76","flaticon-myicons-picnic7","flaticon-myicons-satellitedish","flaticon-myicons-shower7","flaticon-myicons-summer5","flaticon-myicons-toilet16","flaticon-myicons-towel","flaticon-myicons-wakeup1"]};
         var st_timezone = {"timezone_string":""};
         var st_demo_css = {"color":"\r\n\r\n.map_type .st-map-type{\r\nbackground-color: __main_color__;\r\n}\r\n#gmap-control{\r\nbackground-color: __main_color__;\r\n}\r\n.gmapzoomminus , .gmapzoomplus{\r\nbackground-color: __main_color__;\r\n}\r\n\r\n.sort_icon .active,\r\n.woocommerce-ordering .sort_icon a.active{\r\ncolor:__main_color__;\r\ncursor: default;\r\n}\r\n.package-info-wrapper .icon-group i:not(\".fa-star\"):not(\".fa-star-o\"){\r\n   color:__main_color__;\r\n}\r\na,\r\na:hover,\r\n.list-category > li > a:hover,\r\n.pagination > li > a,\r\n.top-user-area .top-user-area-list > li > a:hover,\r\n.sidebar-widget.widget_archive ul> li > a:hover,\r\n.sidebar-widget.widget_categories ul> li > a:hover,\r\n.comment-form .add_rating,\r\n.booking-item-reviews > li .booking-item-review-content .booking-item-review-expand span,\r\n.form-group.form-group-focus .input-icon.input-icon-hightlight,\r\n.booking-item-payment .booking-item-rating-stars .fa-star,\r\n.booking-item-raiting-summary-list > li .booking-item-rating-stars,\r\n.woocommerce .woocommerce-breadcrumb .last,\r\n.product-categories li.current-cat:before,\r\n.product-categories li.current-cat-parent:before,\r\n.product-categories li.current-cat>a,\r\n.product-categories li.current-cat>span,\r\n.woocommerce .star-rating span:before,\r\n.woocommerce ul.products li.product .price,\r\n.woocommerce .woocommerce_paging a,\r\n.woocommerce .product_list_widget ins .amount,\r\n#location_header_static i,\r\n.booking-item-reviews > li .booking-item-rating-stars,\r\n.booking-item-payment .booking-item-rating-stars .fa-star-half-o,\r\n#top_toolbar .top_bar_social:hover,\r\n.woocommerce .woocommerce-message:before,.woocommerce .woocommerce-info:before,\r\n.vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a,\r\n.booking-item-rating .booking-item-rating-stars ,\r\nbody .box-icon-border.box-icon-white:hover,body  [class^=\"box-icon-border\"].box-icon-white:hover,body  [class*=\" box-icon-border\"].box-icon-white:hover,body  .box-icon-border.box-icon-to-white:hover:hover,body  [class^=\"box-icon-border\"].box-icon-to-white:hover:hover,body  [class*=\" box-icon-border\"].box-icon-to-white:hover:hover,\r\n#main-footer .text-color,\r\n.change_same_location:focus,\r\nul.slimmenu.slimmenu-collapsed li ul li a,\r\nul.slimmenu.collapsed li ul li a,\r\n.st_category_header h4,.st_tour_box_styleul a.text-darken:hover,\r\n.st_accordion.st_tour_ver .panel-default > .panel-heading,\r\n.st_social.style2 >a:hover,\r\n.color-main,.main-color\r\n{\r\ncolor:__main_color__}\r\nbody .st_tour_grid .text-color,body .color-text,\r\nbody .st_tour_grid .text-color-hover:hover,body .st_tour_grid .color-text-hover:hover,body .st_tour_grid .text-darken.text-color-hover:hover,body .st_tour_grid .text-darken.color-text-hover:hover,\r\nbody .st_tour_list .text-color,body .color-text,\r\nbody .st_tour_list .text-color-hover:hover,body .st_tour_list .color-text-hover:hover,body .st_tour_list .text-darken.text-color-hover:hover,body .st_tour_list .text-darken.color-text-hover:hover\r\n{\r\n    color:__main_color__}\r\n::selection {\r\nbackground: __main_color__;\r\ncolor: #fff;\r\n}\r\n.share ul li a:hover{\r\ncolor:__main_color__!important;\r\n}\r\n\r\n    .calendar-content.fc-unthemed .btn.btn-available_allow_fist:hover::before{\r\n    border-color: __main_color__ #ccc #ccc __main_color__;\r\n    }\r\n    .calendar-content.fc-unthemed .btn.btn-available_allow_last:hover::before {\r\n    border-color: #ccc __main_color__ __main_color__ #ccc;\r\n\r\n    }\r\n\r\nheader#main-header,\r\n.btn-primary,\r\n.post .post-header,\r\n.top-user-area .top-user-area-list > li.top-user-area-avatar > a:hover > img,\r\n\r\n.booking-item:hover, .booking-item.active,\r\n.booking-item-dates-change:hover,\r\n.btn-group-select-num >.btn.active, .btn-group-select-num >.btn.active:hover,\r\n.btn-primary:hover,\r\n.booking-item-features > li:hover > i,\r\n.form-control:active,\r\n.form-control:focus,\r\n.fotorama__thumb-border,\r\n.sticky-wrapper.is-sticky .main_menu_wrap,\r\n.woocommerce form .form-row.woocommerce-validated .select2-container, \r\n.woocommerce form .form-row.woocommerce-validated input.input-text, \r\n.woocommerce form .form-row.woocommerce-validated select,\r\n.btn-primary:focus\r\n{\r\nborder-color:__main_color__;\r\n}\r\n#menu1 {\r\n  border-bottom: 2px solid __main_color__;\r\n}\r\n.woocommerce .woocommerce-message,.woocommerce .woocommerce-info {\r\n  border-top-color:  __main_color__;\r\n}\r\n.main-bgr,.bgr-main,\r\n.main-bgr-hover:hover,.bgr-main-hover:hover,\r\n.pagination > li > a.current, .pagination > li > a.current:hover,\r\n.btn-primary,\r\nul.slimmenu li.active > a, ul.slimmenu li:hover > a,\r\n.nav-drop > .nav-drop-menu > li > a:hover,\r\n.btn-group-select-num >.btn.active, .btn-group-select-num >.btn.active:hover,\r\n.btn-primary:hover,\r\n.pagination > li.active > a, .pagination > li.active > a:hover,\r\n.box-icon, [class^=\"box-icon-\"], [class*=\" box-icon-\"]:not(.box-icon-white):not(.box-icon-border-dashed):not(.box-icon-border),\r\n.booking-item-raiting-list > li > div.booking-item-raiting-list-bar > div, .booking-item-raiting-summary-list > li > div.booking-item-raiting-list-bar > div,\r\n.irs-bar,\r\n.nav-pills > li.active > a,\r\n.search-tabs-bg > .tabbable > .nav-tabs > li.active > a,\r\n.search-tabs-bg > .tabbable > .nav-tabs > li > a:hover > .fa,\r\n.irs-slider,\r\n.post-link,\r\n.hover-img .hover-title, .hover-img [class^=\"hover-title-\"], .hover-img [class*=\" hover-title-\"],\r\n.post-link:hover,\r\n#gotop:hover,\r\n.shop-widget-title,\r\n.woocommerce ul.products li.product .add_to_cart_button,\r\n.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,\r\n.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content,\r\n.woocommerce .widget_price_filter .ui-slider .ui-slider-range,\r\n.sidebar_section_title,\r\n.shop_reset_filter:hover,\r\n.woocommerce .woocommerce_paging a:hover,\r\n.pagination .page-numbers.current,\r\n.pagination .page-numbers.current:hover,\r\n.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,\r\n.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,\r\n.chosen-container .chosen-results li.highlighted,\r\n#taSignIn,\r\n.grid_hotel_room .grid , \r\n.grid_hotel_room .grid figure,\r\nfigure.effect-layla,\r\n.st-page-sidebar-new .page-sidebar-menu .sub-menu.item .active > a,.st-page-sidebar-new .page-sidebar-menu > li.active > a,\r\n.single-location .search-tabs-bg .tabbable .nav-tabs > li.active a  ,\r\n.single-location .search-tabs-bg .tabbable .nav-tabs > li:hover a ,\r\n.single-location .search-tabs-bg .tabbable .nav-tabs > li a:hover,\r\nul.slimmenu.collapsed li .sub-toggle,\r\nul.slimmenu.collapsed li ul li a:hover,\r\n.end2,.end1,\r\nbody #gotop.go_top_tour_box,\r\n.st_tab.st_tour_ver .nav-tabs>li.active>a,.st_tab.st_tour_ver .nav-tabs>li.active::before,\r\n.st_accordion.st_tour_ver>.panel>.panel-heading>.panel-title>a[aria-expanded=true],\r\n.st_social.style1 >a:hover,\r\n.st_list_partner_nav .fa:hover,\r\n.st_tour_grid .fotorama__arr,.st_tour_grid .fotorama__video-close,.st_tour_grid .fotorama__fullscreen-icon,\r\n.st_tour_list .fotorama__arr,.st_tour_list .fotorama__video-close,.st_tour_list .fotorama__fullscreen-icon,\r\n.st_tour_ver .div_review_half\r\n{\r\n    background:__main_color__ ;\r\n    border-color: __main_color__;\r\n}\r\n\r\n    .vc_tta-color-grey.vc_tta-style-classic .vc_tta-tab > a {\r\n    color: __main_color__ !important;\r\n    }\r\n.calendar-content .fc-state-default,.calendar-content.fc-unthemed .btn.btn-available:hover , .calendar-content.fc-unthemed .st-active .btn.btn-available, .calendar-content.fc-unthemed .btn.btn-available.selected,\r\n.calendar-content.fc-unthemed .btn.btn-available:not(.next_month) {\r\n  background-color:__main_color__ !important;\r\n}\r\n.calendar-content.fc-unthemed .btn.btn-available:hover ,.datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover,\r\n.calendar-content.fc-unthemed .st-active button.next_month,\r\n.calendar-content.fc-unthemed .btn.btn-available:not(.next_month)\r\n{\r\nbackground-color:__main_color__ !important;\r\nborder-color: __main_color__;\r\n}\r\n\r\n.datepicker table tr td.today:before, .datepicker table tr td.today:hover:before, .datepicker table tr td.today.disabled:before, .datepicker table tr td.today.disabled:hover:before{\r\nborder-bottom-color: __main_color__;\r\n}\r\n.booking-item-reviews > li .booking-item-review-person-avatar:hover\r\n{\r\n-webkit-box-shadow: 0 0 0 2px __main_color__;\r\nbox-shadow: 0 0 0 2px __main_color__;\r\n}\r\n#main-header ul.slimmenu li.current-menu-item > a, #main-header ul.slimmenu li:hover > a,\r\n#main-header .menu .current-menu-ancestor >a,\r\n#main-header .product-info-hide .product-btn:hover\r\n{\r\nbackground:__main_color__;\r\ncolor:white;\r\n}\r\n\r\n#main-header .menu .current-menu-item > a\r\n{\r\nbackground:__main_color__ !important;\r\ncolor:white !important;\r\n}\r\n\r\n\r\n.i-check.checked, .i-radio.checked\r\n{\r\n\r\nborder-color: __main_color__;\r\nbackground: __main_color__;\r\n}\r\n\r\n.box-icon-border, [class^=\"box-icon-border\"], [class*=\" box-icon-border\"]{\r\n    border-color: __main_color__;\r\n    color: __main_color__;\r\n}\r\n.box-icon-border:hover, [class^=\"box-icon-border\"]:hover, [class*=\" box-icon-border\"]:hover{\r\nbackground-color:__main_color__;\r\n}\r\n.border-main, .i-check.hover, .i-radio.hover,.st_list_partner_nav .fa\r\n{\r\nborder-color: __main_color__;\r\n}\r\n.owl-controls .owl-buttons div:hover\r\n{\r\n    background: __main_color__;\r\n    -webkit-box-shadow: 0 0 0 1px __main_color__;\r\n    box-shadow: 0 0 0 1px __main_color__;\r\n}\r\n.irs-diapason{\r\nbackground: __main_color__;\r\n}\r\nul.slimmenu.slimmenu-collapsed li .slimmenu-sub-collapser {\r\n background:__main_color__}    .calendar-content .fc-toolbar{\r\n    background-color: __main_color__;\r\n    margin: 0;\r\n    }\r\n    .calendar-content.fc-unthemed .fc-basic-view .fc-head {\r\n    color: __main_color__;\r\n    }\r\n\r\n    .booking-item-rating .fa ,\r\n    .booking-item.booking-item-small .booking-item-rating-stars,\r\n    .comment-form .add_rating,\r\n    .booking-item-payment .booking-item-rating-stars .fa-star,\r\n    .st-item-rating .fa,\r\n    li  .fa-star , li  .fa-star-o , li  .fa-star-half-o{\r\n    color:__main_color__    }\r\n.feature_class{\r\nbackground: #19A1E5;\r\n}\r\n.feature_class::before {\r\nborder-color: #19A1E5 #19A1E5 transparent transparent;\r\n}\r\n.feature_class::after {\r\nborder-color: #19A1E5 transparent #19A1E5 #19A1E5;\r\n}\r\n.featured_single .feature_class::before{\r\nborder-color: transparent #19A1E5 transparent transparent;\r\n}\r\n.item-nearby .st_featured::before {\r\n    border-color: transparent transparent #19A1E5 #19A1E5;\r\n}\r\n.item-nearby .st_featured::after {\r\n   border-color: #19A1E5 #19A1E5 #19A1E5 transparent  ;\r\n}\r\n.st_sale_class{\r\nbackground-color: #cc0033;\r\n}\r\n.st_sale_simple::after,.st_sale_simple::before,.st_sale_label_1::before{\r\nborder-color: #cc0033 transparent transparent #cc0033 ;\r\n}\r\n.st_sale_class.st_sale_paper * {color: #cc0033 }\r\n.st_sale_class .st_star_label_sale_div::after{\r\n    border-color: #cc0033}\r\n"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='js/jquery.js'></script>
      <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
     
      <script type='text/javascript' src='js/add-to-cart.min.js'></script>
      <script type='text/javascript' src='js/woocommerce-add-to-cart.js'></script>
      <script type='text/javascript' src='js/switcher.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var userSettings = {"url":"\/","uid":"4801","time":"1487265574","secure":""};
         /* ]]> */
      </script>
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
                  <div class='container '>
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
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--End .row-->
                  </div>
                  <!--End .container-->
               </div>
             
               <div class="row">
               
					<script>
					function fetch_state(str)
					{  
					
					obj=new XMLHttpRequest();
					obj.onreadystatechange=function()
					{
					if(obj.readyState==4&&obj.status==200)
					{
					document.getElementById("res").innerHTML=obj.responseText;
					}
					}
					obj.open("GET",'fetch_state.php?countr='+str,true);
					obj.send();
					}
                    </script>					
                
                 
                 
                  <div class="container">
                     <h1 class="page-title text-center mt60">Register as a Partner</h1>
					 
					 <?php if(isset($_SESSION['mymsg'])){ ?><h5 class="text-center"  style='color:green;font-weight:bold'><?php echo $_SESSION['mymsg']; unset($_SESSION['mymsg']); ?> </h5><?php } ?>
	<?php if(isset($_SESSION['myerror'])){ ?><h5 class="text-center" style='color:red;font-weight:bold'><?php echo $_SESSION['myerror']; unset($_SESSION['myerror']); ?> </h5><?php } ?>
                  </div>
                  <div class="container">
                     <div class="row" data-gutter="60">
                        <div class="col-md-6 col-md">
						
                           <form  method="POST" action="action.php" >
                              
							  <input type='hidden' name='action' value='partner_reg'/>
                              
							  <div class="row mt20 data_field">
                                 <div>
                                    <div class="form-group  form-group-icon-left">
                                       <label for="field-email">First Name<span class="color-red"> (*)</span></label>
                                       <i class="fa fa-envelope input-icon input-icon-show"></i>
                                       <input id="field-email" name="firstname" class="form-control" placeholder="Enter First Name" type="text" value="" required />
                                    </div>
									
									<div class="form-group  form-group-icon-left">
                                       <label for="field-email">Sur Name<span class="color-red"> (*)</span></label>
                                       <i class="fa fa-envelope input-icon input-icon-show"></i>
                                       <input id="field-email" name="lastname" class="form-control" placeholder="Enter Sur Name" type="text" value="" required />
                                    </div>
									
									<div class="form-group  form-group-icon-left">
                                       <label for="field-email">Address<span class="color-red"> (*)</span></label>
                                       <i class="fa fa-envelope input-icon input-icon-show"></i>
                                       <textarea name="address" class="form-control" required ></textarea>
                                    </div>
									
									<div class="form-group  form-group-icon-left">
                                       <label for="field-email">Country<span class="color-red"> (*)</span></label>
                                       <i class="fa fa-envelope input-icon input-icon-show"></i>
                                       
					<select name="country" onchange="fetch_state(this.value)" class='form-control'>
                      <option value="">Select a Country</option>
                      <option value="United States">United States</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antarctica">Antarctica</option>
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Aruba">Aruba</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azerbaijan">Azerbaijan</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                      <option value="Bhutan">Bhutan</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                      <option value="Brunei Darussalam">Brunei Darussalam</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cote D'ivoire">Cote D'ivoire</option>
                      <option value="Croatia">Croatia</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                      <option value="Dominican Republic">Dominican Republic</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="French Guiana">French Guiana</option>
                      <option value="French Polynesia">French Polynesia</option>
                      <option value="French Southern Territories">French Southern Territories</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Grenada">Grenada</option>
                      <option value="Guadeloupe">Guadeloupe</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guinea-bissau">Guinea-bissau</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                      <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                      <option value="Korea, Republic of">Korea, Republic of</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macao">Macao</option>
                      <option value="Macedonia">Macedonia</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Martinique">Martinique</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mayotte">Mayotte</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option value="Moldova, Republic of">Moldova, Republic of</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montserrat">Montserrat</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option>
                      <option value="Norfolk Island">Norfolk Island</option>
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau">Palau</option>
                      <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Pitcairn">Pitcairn</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Reunion">Reunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russian Federation">Russian Federation</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Saint Helena">Saint Helena</option>
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option value="Saint Lucia">Saint Lucia</option>
                      <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                      <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                      <option value="Samoa">Samoa</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia">Slovakia</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Georgia">South Georgia</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                      <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Timor-leste">Timor-leste</option>
                      <option value="Togo">Togo</option>
                      <option value="Tokelau">Tokelau</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Viet Nam">Viet Nam</option>
                      <option value="Virgin Islands, British">Virgin Islands, British</option>
                      <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                      <option value="Wallis and Futuna">Wallis and Futuna</option>
                      <option value="Western Sahara">Western Sahara</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select>
					</div>
					
					<p id='res'>
					
					</p>
					<div class="form-group  form-group-icon-left">
                       <label for="field-email">City / Town<span class="color-red"> (*)</span></label>
                       <i class="fa fa-envelope input-icon input-icon-show"></i>
               <input name="city" class="form-control" placeholder="Enter City/Town" type="text" value="" required />
                     </div>
					 
					 <div class="form-group  form-group-icon-left">
                       <label for="field-email">Suburb / Area<span class="color-red"> (*)</span></label>
                       <i class="fa fa-envelope input-icon input-icon-show"></i>
              <input name="suburb" class="form-control" placeholder="Enter Suburb" type="text" value="" required />
                     </div>
					 
					 <div class="form-group  form-group-icon-left">
                       <label for="field-email">Landline No.<span class="color-red"> (*)</span></label>
                       <i class="fa fa-envelope input-icon input-icon-show"></i>
             <input name="landline" class="form-control" placeholder="Enter landline" type="text" value="" required />
                     </div>
					 
					 <div class="form-group  form-group-icon-left">
                       <label for="field-email">Mobile No.<span class="color-red"> (*)</span></label>
                       <i class="fa fa-envelope input-icon input-icon-show"></i>
             <input name="mobile" class="form-control" placeholder="Enter mobile" type="text" value="" required />
                     </div>
					 
					 <div class="form-group  form-group-icon-left">
                       <label for="field-email">Email.<span class="color-red"> (*)</span></label>
                       <i class="fa fa-envelope input-icon input-icon-show"></i>
             <input name="email" class="form-control" placeholder="Enter Email" type="email" value="" required />
                     </div>
					 
					 <div class="form-group  form-group-icon-left">
                                       <label for="field-user_name">User Name<span class="color-red"> (*)</span></label>
                                       <i class="fa fa-user input-icon input-icon-show"></i>
                                       <input id="field-user_name" required name="username" class="form-control" placeholder="Enter Username" type="text" value="" />
                                    </div>
									
						<div class="form-group  form-group-icon-left">
                                       <label for="field-password">Password<span class="color-red"> (*)</span></label>
                                       <i class="fa fa-lock input-icon input-icon-show"></i>
                                       <input id="field-password" required name="password" class="form-control" type="password" placeholder="my secret password" />
                                    </div>
									   
                                    </div>
									
									
                                 </div>
                                 
                              </div>
							  
                             
							 
                              <!--<div class="checkbox st_check_term_conditions mt20">
                                 <label>
                        <input class="i-check term_condition" required name="term_condition" type="checkbox" />I have read and accept the<a target="_blank" href="#"> terms and conditions</a>        </label>
                              </div>-->
                              <div class="text-center mt20">
                                 
                           <input  class="btn btn-primary btn-lg" type="submit" name='full_detail' value='Submit' />
                              </div>
                           </form>
                        </div>
						
						<div class='col-md-6'>
						<table class='table table-striped table-hover table-bordered'>
						<tr>
						<td colspan='2' style='text-align:center'><h4>Selected Detail</h4></td>
						
						</tr>
						<tr>
						<td><b>Accomodation :- </b></td><td><?php echo $_SESSION['accomodation']; ?></td>
						</tr>
						<tr>
						<td><b>Venue & Conference :-</b></td><td><?php echo $_SESSION['venue_conference']; ?></td>
						</tr>
						<tr>
						<td><b>Transport:- </b></td><td><?php echo $_SESSION['transport']; ?></td>
						</tr>
						<tr>
						<td><b>additional_service:- </b></td><td><?php echo $_SESSION['additional']; ?></td>
						</tr>
						</table>
						
						<table class='table table-striped table-hover table-bordered'>
						<tr>
						<td colspan='2' style='text-align:center'><h4>Price Summary</h4></td>
						
						</tr>
						<tr>
						<td><b>Accomodation :- </b></td><td><?php echo $_SESSION['accomodation']; ?></td>
						</tr>
						<tr>
						<td><b>Venue & Conference :-</b></td><td>R</td>
						</tr>
						<tr>
						<td><b>Transport:- </b></td><td>R</td>
						</tr>
						<tr>
						<td><b>additional_service:- </b></td><td>R</td>
						</tr>
						<?php
						if($_SESSION['pkg_session']==1)
						{ 
						if($_SESSION['accomodation']<=7)
						{
						$_SESSION['total']=$_SESSION['pkg_amount']*$_SESSION['accomodation'];
						}
						else
						{
						$_SESSION['total']=$_SESSION['reduced_amount']*$_SESSION['accomodation'];
						}
						}
						else if($_SESSION['pkg_session']==2)
						{ 
						if($_SESSION['accomodation']<=6)
						{
						$_SESSION['total']=$_SESSION['pkg_amount']*$_SESSION['accomodation'];
						}
						else
						{
						$_SESSION['total']=$_SESSION['reduced_amount']*$_SESSION['accomodation'];
						}
						}
				else if($_SESSION['pkg_session']==3 || $_SESSION['pkg_session']==4 || $_SESSION['pkg_session']==5)
						{ 
						$_SESSION['total']=$_SESSION['pkg_amount']*$_SESSION['accomodation'];
						}
						// else if($_SESSION['pkg_session']==4)
						// { 
						// $_SESSION['total']=$_SESSION['pkg_amount']*$_SESSION['accomodation'];
						// }
						// else if($_SESSION['pkg_session']==5)
						// { 
						// $_SESSION['total']=$_SESSION['pkg_amount']*$_SESSION['accomodation'];
						// }
						
						$vat=($_SESSION['total']*$_SESSION['vat'])/100;
						$_SESSION['final_total']=$_SESSION['total']+$vat;
						?>
						
						<tr>
						<td><b>Total:- </b></td><td>R  <?php echo $_SESSION['total']; ?></td>
						</tr>
						<tr>
						<td><b>Vat:- </b></td><td>R  <?php echo $vat; ?></td>
						</tr>
							<tr>
						<td><b>Final Amount:- </b></td><td>R  <?php echo $_SESSION['final_total']; ?></td>
						</tr>
						</table>
						
						</div>
						
                     </div>
                  </div>
                  <div class="gap"></div>
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
      
     
     
     
    
      <script type='text/javascript' src='js/jquery.form.min.js'></script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var _wpcf7 = {"loaderUrl":"images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ...","cached":"1"};
         /* ]]> */
      </script>
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
      
   </body>
</html>