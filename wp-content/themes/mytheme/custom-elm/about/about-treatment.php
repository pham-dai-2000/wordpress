<?php

add_action('vc_before_init', 'treatment_about');
// if(!function_exists('')){

// }
function treatment_about()
{
    vc_map(
        array(
            "name" => "Treatment About",
            "base" => "vc_latest_treatment_about",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title treatment",
                    "param_name" => "title_treatment",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    'type' => 'param_group',
                    "heading" => "Banner Group",
                    'param_name' => 'arr_item',
                    'params' => array(
                        array(
                            "type" => "vc_link",
                            "heading" => __( "Link item", "textdomain" ),
                            "param_name" => "link_item",
                            "description" => __( "Enter description.", "textdomain" )
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


function vc_latest_treatment_about_render($atts, $content = null)
{
    $args = array(
        'title_treatment' => '',
        'arr_item'=>''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/about/about', 'treatment', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_treatment_about', 'vc_latest_treatment_about_render');