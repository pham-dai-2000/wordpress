<?php

add_action('vc_before_init', 'content_header_about');
// if(!function_exists('')){

// }
function content_header_about()
{
    vc_map(
        array(
            "name" => "Content Header About",
            "base" => "vc_latest_content_header_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title about",
                    "param_name" => "title_about",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content about",
                    "param_name" => "content_about",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Description about",
                    "param_name" => "desc_about",
                    "description" => __( "About Content.", "textdomain" )
                )
            ),
        )
    );

}


function vc_latest_content_header_about_render($atts, $content = null)
{
    $args = array(
        'title_about' => '',
        'content_about' => '',
        'desc_about' => ''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'contentHeader', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_content_header_about', 'vc_latest_content_header_about_render');
