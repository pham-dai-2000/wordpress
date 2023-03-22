<?php
$values = vc_param_group_parse_atts($args['arr_item']);
//$list_images = explode(',', $values);

//$url_link = vc_build_link($args['url']);

echo '<pre>';
//print_r($args);
//print_r(wp_get_attachment_image( $image_ids[2], 'full' ));
echo '</pre>';
//$img_url = '';
//foreach ($image_ids as $key => $image_id) {
//    $img_url = wp_get_attachment_image_src($image_id, "full");
//}
//print_r($img_url[0]);
if (isset($args) && $args) { ?>
    <div id="index_content_builder">
        <div class="index_service_list cb_contents num2 white" id="cb_content_2">

            <div class="cb_contents_inner">

                <h3 class="cb_headline rich_font_type2"><?php echo $args['title_treatment'] ?></h3>

                <h4 class="cb_catch rich_font_type3"><?php echo $args['content_item'] ?></h4>

                <p class="cb_desc"><?php echo $args['desc_item'] ?></p>

            </div>
            <div class="service_list_wrap">
                <div class="service_list clearfix">
                    <?php foreach ($values as $key => $item) { ?>
                        <article class="item">
                            <a class="animate_background"

                               href="<?= vc_build_link($item['url'])['url'] ?>">
                                <h3 class="title rich_font_type3">
                                    <span><?= vc_build_link($item['url'])['title'] ?></span>
                                </h3>
                                <div class="image_wrap">
                                    <div class="image"
                                         style="background:url(<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>) no-repeat center center; background-size:cover;"></div>
                                </div>
                                <p class="desc"><span class="desc-elm"><?= $item['desc'] ?></span>
                                </p>
                            </a>
                        </article>
                    <?php } ?>
                </div><!-- END .service_list -->
                <div class="link_button">
                    <a href="<?= vc_build_link($args['url_button'])['url'] ?>"><?= vc_build_link($args['url_button'])['title'] ?></a>
                </div>
                <div class="overlay" style="background:rgba(255,255,255,0.3)"></div>
                <div class="bg_image"
                     style="background:url(<?php echo wp_get_attachment_image_src($args['image_background'], "full")[0]  ?>) no-repeat center center; background-size:cover;"></div>
            </div><!-- END .service_list_wrap -->

        </div>
    </div>
<?php } ?>