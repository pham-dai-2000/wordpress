<?php
//$values = vc_param_group_parse_atts($args['arr_item']);
//$list_images = explode(',', $values);


//$url_link = vc_build_link($args['url']);

echo '<pre>';
//print_r($values);
//print_r(wp_get_attachment_image( $image_ids[2], 'full' ));
echo '</pre>';
//$img_url = '';
//foreach ($image_ids as $key => $image_id) {
//    $img_url = wp_get_attachment_image_src($image_id, "full");
//}
//print_r($img_url[0]);
if (isset($args) && $args) { ?>
    <div id="index_content_builder">
        <div class="index_message cb_contents num3 white" id="cb_content_3">
            <div class="cb_contents_inner">
                <h3 class="cb_headline rich_font_type2"><?php echo $args['title_message'] ?></h3>
                <h4 class="cb_catch rich_font_type3"><?php echo $args['content_item'] ?></h4>
                <div class="message_area layout_type1">
                    <div style="background:url(<?php echo wp_get_attachment_image_src($args['image'], "full")[0]  ?>) no-repeat center center; background-size:cover;"></div>
                    <div class="content">
                        <div class="content_inner">
                            <h3 class="catch rich_font_type2"><?php echo $args['title_image'] ?><br>
                            </h3>
                            <p class="desc"><?php echo $args['content_image'] ?></p>
                            <div class="title_area">
                                <p class="sub_title"><?php echo $args['text_area1'] ?></p>
                                <p class="title rich_font_type2"><?php echo $args['text_area2'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>