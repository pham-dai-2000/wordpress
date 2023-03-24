<?php

add_action('vc_before_init', 'company_about');
// if(!function_exists('')){

// }
function company_about()
{
    vc_map(
        array(
            "name" => "Company About",
            "base" => "vc_latest_company_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title company",
                    "param_name" => "title_company",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link image", "textdomain" ),
                    "param_name" => "link_image",
                    "description" => __( "Enter description.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content title",
                    "param_name" => "content_title",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content desc",
                    "param_name" => "content_desc",
                    "description" => __( "About Content.", "textdomain" )
                )
            ),
        )
    );

}


function vc_latest_company_about_render($atts, $content = null)
{
    $args = array(
        'title_company' => '',
        'link_image' => '',
        'content_title' => '',
        'content_desc'=>''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'company', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_company_about', 'vc_latest_company_about_render');