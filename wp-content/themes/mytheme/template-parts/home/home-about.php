<?php
$values = vc_param_group_parse_atts($args['arr_item']);
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
    <div class="index_content_slider cb_contents num1 white" id="cb_content_1">

        <div class="cb_contents_inner clearfix">

            <h3 class="cb_headline rich_font_type2"><?php echo $args['title_about_en'] ?></h3>

            <h4 class="cb_catch rich_font_type3"><?php echo $args['content_item'] ?></h4>

            <div class="cb_content_slider_wrap">
                <div class="cb_content_slider slick-initialized slick-slider">
                    <div aria-live="polite" class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 1000px; transform: translate3d(0px, 0px, 0px);"
                             role="listbox">
                            <?php foreach ($values as $key => $item) { ?>
                                <div class="item slick-slide slick-current slick-active" data-slick-index="0"
                                     aria-hidden="false" style="width: 500px;" tabindex="-1" role="option"
                                     aria-describedby="slick-slide10">
                                    <a class="animate_background clearfix"
                                       href="<?= vc_build_link($item['url'])['url'] ?>" tabindex="0">
                                        <div class="image_wrap">
                                            <div class="image"
                                                 style="background:url(<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>) no-repeat center center; background-size:cover;"></div>
                                    </div>
                                        <div class="desc_area">
                                            <p class="desc"><?= $item['desc'] ?></span>
                                            </p></div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="link_button">
                <a href="<?= vc_build_link($args['url_button'])['url'] ?>"><?php echo vc_build_link($args['url_button'])['title'] ?></a>
            </div>
        </div><!-- END .cb_contents_inner -->
    </div>
<?php } ?>