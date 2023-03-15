jQuery(document).ready(function () {
    jQuery('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows:false,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        speed: 1000,
    });
});

var scrollTop = 0;
jQuery(document).ready(function() {
    jQuery(window).on('scroll', function(){
        scrollTop = jQuery(window).scrollTop();
        // console.log(scrollTop)
        if(scrollTop > 10){
            jQuery('#return_top').addClass('active')
        }
        else {
            jQuery('#return_top').removeClass('active')
        }
    });
    //use scrollTop here...
});
jQuery(document).ready(function () {

    var header_message_height = 0;
    if (jQuery('#header_message').length) {
        header_message_height = jQuery('#header_message').innerHeight();
    }

    if (jQuery(window).scrollTop() > 60 + header_message_height) {
        jQuery("body").addClass("header_fix_mobile");
    }

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 60 + header_message_height) {
            jQuery("body").addClass("header_fix_mobile");
            if (jQuery('html').hasClass('mobile')) {
                jQuery('#header').addClass('active');
            }
        } else {
            jQuery("body").removeClass("header_fix_mobile");
            if (jQuery('html').hasClass('mobile')) {
                jQuery('#header').removeClass('active');
            }
        }
        ;
    });


});
jQuery(document).ready(function () {

    var header_message_height = 0;
    if (jQuery('#header_message').length) {
        header_message_height = jQuery('#header_message').innerHeight();
    }

    if (jQuery(window).scrollTop() > 200 + header_message_height) {
        jQuery("body").addClass("header_fix");
        jQuery("#header").addClass("active");
    }

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 200 + header_message_height) {
            jQuery("body").addClass("header_fix");
            jQuery("#header").addClass("active");
        } else {
            jQuery("body").removeClass("header_fix");
            if (!jQuery('body').hasClass('active_header')) {
                if (!jQuery('header').hasClass('active_mega_menu')) {
                    jQuery("#header").removeClass("active");
                }
            }
            ;
        }
        ;
    });
});
jQuery(document).ready(function () {
    // Thêm sự kiện hover cho menu item 2
    jQuery('#menu-1 #menu-item-34').hover(function () {
        jQuery('#js-megamenu34').addClass('active_mega_menu');
        jQuery('#header').addClass('active-white');
        jQuery('.atv-color').addClass('active-color');
    }, function () {
        jQuery('#js-megamenu34').hover(function () {
            jQuery('#js-megamenu34').addClass('active_mega_menu');
            jQuery('#header').addClass('active-white');
            jQuery('.atv-color').addClass('active-color');
        }, function () {
            jQuery('#js-megamenu34').removeClass('active_mega_menu');
            jQuery('#header').removeClass('active-white');
            jQuery('.atv-color').removeClass('active-color');
        });
        jQuery('#js-megamenu34').removeClass('active_mega_menu');
        jQuery('#header').removeClass('active-white');
        jQuery('.atv-color').removeClass('active-color');

    });
    // Thêm sự kiện hover cho menu item 6
    jQuery('#menu-1 #menu-item-75').hover(function () {
        jQuery('#js-megamenu75').addClass('active_mega_menu');
        jQuery('#header').addClass('active-white');
        jQuery('.atv-color').addClass('active-color');
    }, function () {
        jQuery('#js-megamenu75').hover(function () {
            jQuery('#js-megamenu75').addClass('active_mega_menu');
            jQuery('#header').addClass('active-white');
            jQuery('.atv-color').addClass('active-color');
        }, function () {
            jQuery('#js-megamenu75').removeClass('active_mega_menu');
            jQuery('#header').removeClass('active-white');
            jQuery('.atv-color').removeClass('active-color');
        });
        jQuery('#js-megamenu75').removeClass('active_mega_menu');
        jQuery('#header').removeClass('active-white');
        jQuery('.atv-color').removeClass('active-color');
    });

    jQuery('#menu-1 #menu-item-33').hover(function () {
        jQuery('.sub-menu').addClass('active_mega_menu');
    }, function () {
        jQuery('.sub-menu').hover(function () {
            jQuery('.sub-menu').addClass('active_mega_menu');
        }, function () {
            jQuery('.sub-menu').removeClass('active_mega_menu');
        });
        jQuery('.sub-menu').removeClass('active_mega_menu');
    });

});