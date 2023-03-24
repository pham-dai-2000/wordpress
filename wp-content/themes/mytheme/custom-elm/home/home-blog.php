<?php

add_action('vc_before_init', 'blog_home');
// if(!function_exists('')){

// }
function blog_home()
{
    vc_map(
        array(
            "name" => "Blog Home",
            "base" => "vc_latest_blog_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title blog",
                    "param_name" => "title_blog",
                    "description" => __( "Main title.", "textdomain" )
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Content blog",
                    "param_name" => "content_item",
                    "description" => __( "About Content.", "textdomain" )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __( "Button blog", "textdomain" ),
                    "param_name" => "url_button_blog",
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
                            "type" => "vc_link",
                            "heading" => __( "Link button", "textdomain" ),
                            "param_name" => "url_button",
                            "description" => __( "Enter description.", "textdomain" )
                        ),
                        array(
                            "type" => "vc_link",
                            "heading" => __( "Link", "textdomain" ),
                            "param_name" => "url",
                            "description" => __( "Enter description.", "textdomain" )
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => "Date blog",
                            "param_name" => "date_blog",
                            "description" => __( "Main title.", "textdomain" )
                        )
                    )
                ),
            ),
        )
    );

}


function vc_latest_blog_home_render($atts, $content = null)
{
    $args = array(
        'title_blog' => '',
        'content_item' => '',
        'url_button_blog'=> '',
        'arr_item' => ''
    );

    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/home/home', 'blog', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_blog_home', 'vc_latest_blog_home_render');