<?php

/**
 * Template Name: WaoconWeb Home
 */
?>
<?php
get_header();
while(have_posts()) :

    the_post();
    the_content();
//    custom_breadcrumbs();
endwhile;
?>
<?php get_footer() ?>
</body>