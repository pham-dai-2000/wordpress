<?php

add_action('vc_before_init', 'concept_about');
// if(!function_exists('')){

// }
function concept_about()
{
    vc_map(
        array(
            "name" => "Concept About",
            "base" => "vc_latest_concept_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title concept",
                    "param_name" => "title_concept",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link slider", "textdomain" ),
                    "param_name" => "link_slider",
                    "description" => __( "Enter description.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content slider",
                    "param_name" => "content_slider",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    'type' => 'param_group',
                    "heading" => "Banner Group",
                    'param_name' => 'arr_item',
                    'params' => array(
                        array(
                            "type" => "attach_image",
                            "heading" => __( "Image", "my-text-domain" ),
                            "param_name" => "image",
                            "description" => __( "Enter description.", "my-text-domain" )
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => "Title item",
                            "param_name" => "title_item",
                            "description" => __( "Main title.", "textdomain" )
                        ),
                        array(
                            "type" => "textarea",
                            "heading" => "Content item",
                            "param_name" => "content_item",
                            "description" => __( "About Content.", "textdomain" )
                        )
                    )
                ),
            ),
        )
    );

}


function vc_latest_concept_about_render($atts, $content = null)
{
    $args = array(
        'title_concept' => '',
        'link_slider' => '',
        'content_slider' => '',
        'arr_item'=>''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'concept', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_concept_about', 'vc_latest_concept_about_render');