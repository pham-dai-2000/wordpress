<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>
<!doctype html>
<html class="pc" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet"
          href="https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/css/design-plus.css?ver=2.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

	<?php wp_head(); ?>
</head>

<body id="body"
      class="<?= is_front_page() ? 'home' :'' ?> page-template-default page-id-39 page_header_width_type1 use_header_fix use_mobile_header_fix">
<div id="container">
    <header id="header" class="animate">
        <div id="header_logo">
            <h1 class="logo">
                <?php
                if (function_exists('change_logo_class')) {
                    echo get_custom_logo();
                } ?>
            </h1>

        </div>
        <?php echo get_template_part('template-parts/menu/menu', 'home') ?>
    </header>

    <div id="side_button" class="right animate" style="opacity: 1">
        <div class="item num1 side_button_icon_tel"><a href="tel:03-5876-3915">TEL</a></div>
        <div class="item num2 side_button_icon_calendar"><a href="https://tl-appt.com/reserve/4fPRseKsyd/" target="_blank">RESERVE</a></div>
        <div class="item num3 side_button_icon_mail"><a href="/contact/">CONTACT</a></div>
    </div>