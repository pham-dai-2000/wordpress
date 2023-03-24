<?php

add_action('vc_before_init', 'message_home');
// if(!function_exists('')){

// }
function message_home()
{
    vc_map(
        array(
            "name" => "Message Home",
            "base" => "vc_latest_message_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title message",
                    "param_name" => "title_message",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content message",
                    "param_name" => "content_item",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "attach_image",
                    "heading" => __( "Image", "my-text-domain" ),
                    "param_name" => "image",
                    "description" => __( "Enter description.", "my-text-domain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Title image",
                    "param_name" => "title_image",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content image",
                    "param_name" => "content_image",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Text area1",
                    "param_name" => "text_area1",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textfield",
                    "heading" => "Text area2",
                    "param_name" => "text_area2",
                    "description" => __( "Main title.", "textdomain" )
                ),
            ),
        )
    );

}


function vc_latest_message_home_render($atts, $content = null)
{
    $args = array(
        'title_message' => '',
        'content_item' => '',
        'image' => '',
        'content_image' => '',
        'title_image'=>'',
        'text_area1'=>'',
        'text_area2'=>''
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/home/home', 'message', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_message_home', 'vc_latest_message_home_render');