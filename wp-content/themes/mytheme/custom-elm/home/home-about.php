<?php

add_action('vc_before_init', 'about_home');
// if(!function_exists('')){

// }
function about_home()
{
    vc_map(
        array(
            "name" => "About Home",
            "base" => "vc_latest_about_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title About English",
                    "param_name" => "title_about_en",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content about",
                    "param_name" => "content_item",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Link", "textdomain" ),
                    "param_name" => "url_button",
                    "description" => __( "Enter description.", "textdomain" )
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
                            "type" => "textarea",
                            "heading" => "Content about",
                            "param_name" => "desc",
                            "description" => __( "About Content.", "textdomain" )
                        ),
                        array(
                            "type" => "vc_link",
                            "heading" => __( "Link", "textdomain" ),
                            "param_name" => "url",
                            "description" => __( "Enter description.", "textdomain" )
                        )
                    )

                ),
            ),
        )
    );

}


function vc_latest_about_home_render($atts, $content = null)
{
    $args = array(
        'title_about_en' => '',
        'title_about_jpn' => '',
        'content_item' => '',
        'url_button' => '',
        'arr_item'=>''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/home/home', 'about', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_about_home', 'vc_latest_about_home_render');