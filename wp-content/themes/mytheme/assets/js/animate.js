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
    // Thêm sự kiện hover cho menu item 1
    jQuery('#menu-1 #menu-item-34').hover(function () {
        jQuery('#js-megamenu34').addClass('active_mega_menu');
    }, function () {
        jQuery('#js-megamenu34').hover(function () {
            jQuery('#js-megamenu34').addClass('active_mega_menu');
        }, function () {
            jQuery('#js-megamenu34').removeClass('active_mega_menu');
        });
        jQuery('#js-megamenu34').removeClass('active_mega_menu');

    });
    // Thêm sự kiện hover cho menu item 3
    jQuery('#menu-1 #menu-item-75').hover(function () {
        jQuery('#js-megamenu75').addClass('active_mega_menu');
    }, function () {
        jQuery('#js-megamenu75').hover(function () {
            jQuery('#js-megamenu75').addClass('active_mega_menu');
        }, function () {
            jQuery('#js-megamenu75').removeClass('active_mega_menu');
        });
        jQuery('#js-megamenu75').removeClass('active_mega_menu');
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