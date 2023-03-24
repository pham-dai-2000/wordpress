<?php

add_action('vc_before_init', 'maps_about');
// if(!function_exists('')){

// }
function maps_about()
{
    vc_map(
        array(
            "name" => "Maps About",
            "base" => "vc_latest_maps_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link maps", "textdomain" ),
                    "param_name" => "link_maps",
                    "description" => __( "Enter description.", "textdomain" )
                )
            ),
        )
    );

}


function vc_latest_maps_about_render($atts, $content = null)
{
    $args = array(
        'link_maps' => '',
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'maps', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_maps_about', 'vc_latest_maps_about_render');