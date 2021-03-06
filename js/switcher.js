jQuery(document).ready(function($){
    var st_custom_css_php=$('#st_custom_css_php');
    $(document).ready(function() {
        $('#styleswitch_area .styleswitch').click(function() {
            var color=$(this).css('background-color');

            switchStylestyle(color);
            return false;
        });
        var c = readCookie('style');
        if (c) switchStylestyle(c);
    });

    function switchStylestyle(styleName) {
        if(typeof styleName=='null' || !styleName || styleName=='null') styleName='#ed8323';
        var color=styleName;
        var new_css=st_demo_css.color;
        if(color.indexOf('a') == -1){
            var rgba_color = color.replace(')', ', 0.7)').replace('rgb', 'rgba');
        }else{
            rgba_color=color;
        };

        new_css=new_css.replace(/__main_color__/g,color);
        new_css=new_css.replace(/__rgba__/g,rgba_color);
        st_custom_css_php.html(new_css);

        createCookie('style', styleName, 365);
    };


// Switcher
    jQuery('#demo_changer .demo-icon').click(function() {
        if (jQuery('.demo_changer').hasClass("active")) {
            jQuery('.demo_changer').animate({
                "left": "-230px"
            }, function() {
                jQuery('.demo_changer').toggleClass("active");
            });
        } else {
            jQuery('.demo_changer').animate({
                "left": "0px"
            }, function() {
                jQuery('.demo_changer').toggleClass("active");
            });
        };
    });

    var owlReinit = function() {
        var owlSlider = $('#owl-carousel-slider');
        var owl = $('#owl-carousel');
        if (owlSlider.length) {
            owlSlider.owlCarousel();
            var owlSliderInst = owlSlider.data('owlCarousel');
            owlSliderInst.reinit();
        }
        if (owl.length) {
            owl.owlCarousel();
            var owlInst = owl.data('owlCarousel');
            owlInst.reinit();
        };
    };

    var btnWide = $('#demo_changer #btn-wide');
    var btnBoxed = $('#demo_changer #btn-boxed');

    if ($('body').hasClass('boxed')) {
        btnBoxed.addClass('btn-primary');
    } else {
        btnWide.addClass('btn-primary');
    };

    btnWide.click(function(event) {
        event.preventDefault();
        $('body').removeClass('boxed');
        $(this).addClass('btn-primary');
        btnBoxed.removeClass('btn-primary');
        owlReinit();
    });

    btnBoxed.click(function(event) {
        event.preventDefault();
        $('body').addClass('boxed');
        $(this).addClass('btn-primary');
        btnWide.removeClass('btn-primary');
        $('body').removeClass('bg-cover');
        $('body').css('background-image', 'url("img/patterns/binding_light.png")');
        owlReinit();
    });


    $('#patternswitch_area .patternswitch').click(function(event) {
        $('body').removeClass('bg-cover');
        btnBoxed.trigger('click');
        $('body').css('background-image', 'url("' + $(this).attr('data-src') + '")');
    });

    $('#bgimageswitch_area .bgimageswitch').click(function(event) {
        btnBoxed.trigger('click');
        $('body').addClass('bg-cover');
        $('body').css('background-image', 'url("' + $(this).attr('data-src') + '")');


    });




});

function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}
// Cookie functions
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}
