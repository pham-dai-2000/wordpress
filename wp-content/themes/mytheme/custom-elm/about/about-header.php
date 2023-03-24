<?php

add_action('vc_before_init', 'header_about');
// if(!function_exists('')){

// }
function header_about()
{
    vc_map(
        array(
            "name" => "Header About",
            "base" => "vc_latest_header_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title block",
                    "param_name" => "title_block",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title header",
                    "param_name" => "title_header",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "attach_image",
                    "heading" => __( "Image background", "my-text-domain" ),
                    "param_name" => "image_background",
                    "description" => __( "Enter description.", "my-text-domain" )
                )
            ),
        )
    );

}


function vc_latest_header_about_render($atts, $content = null)
{
    $args = array(
        'title_block' => '',
        'title_header' => '',
        'image_background' => ''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'header', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_header_about', 'vc_latest_header_about_render');