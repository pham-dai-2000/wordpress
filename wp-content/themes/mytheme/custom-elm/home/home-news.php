<?php

add_action('vc_before_init', 'news_home');
// if(!function_exists('')){

// }
function news_home()
{
    vc_map(
        array(
            "name" => "News Home",
            "base" => "vc_latest_news_home",
            "category" => 'Content',
            "allowed_container_element" => 'vc_row',
            'params' => array(
                array(
                    'type' => 'param_group',
                    "heading" => "Banner Group",
                    'param_name' => 'arr_item',
                    'params' => array(
                        array(
                            "type" => "vc_link",
                            "heading" => __("Link1", "textdomain"),
                            "param_name" => "url_link1",
                            "description" => __("Enter description.", "textdomain")
                        ),
                        array(
                            "type" => "textfield",
                            "heading" => "Title Date",
                            "param_name" => "title_link",
                            "description" => __( "Main title.", "textdomain" )
                        )
                    )
                ),
                array(
                    "type" => "vc_link",
                    "heading" => __("Link3", "textdomain"),
                    "param_name" => "url_link2",
                    "description" => __("Enter description.", "textdomain")
                )
            ),
        )
    );

}


function vc_latest_news_home_render($atts, $content = null)
{
    $args = array(
        'arr_item'=>'',
        'url_link2' => '',
    );


    $params = shortcode_atts($args, $atts);
    ob_start();
    get_template_part('template-parts/home/home', 'news', $params);
    $cont = ob_get_contents();
    ob_clean();
    ob_end_flush();
    return $cont;
}

add_shortcode('vc_latest_news_home', 'vc_latest_news_home_render');