<?php

add_action('vc_before_init', 'bread_crumb_about');
// if(!function_exists('')){

// }
function bread_crumb_about()
{
    vc_map(
        array(
            "name" => "Bread Crumb About",
            "base" => "vc_latest_bread_crumb_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link", "textdomain" ),
                    "param_name" => "url_link",
                    "description" => __( "Enter description.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title link",
                    "param_name" => "title_link",
                    "description" => __( "Main title.", "textdomain" )
                )
            ),
        )
    );

}


function vc_latest_bread_crumb_about_render($atts, $content = null)
{
    $args = array(
        'url_link' => '',
        'title_link' => ''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'breadCrumb', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_bread_crumb_about', 'vc_latest_bread_crumb_about_render');
