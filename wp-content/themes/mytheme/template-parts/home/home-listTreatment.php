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
        <div class="index_post_slider cb_contents num5" style="background:#f5f5f5;" id="cb_content_5">

            <div class="cb_contents_inner">

                <h3 class="cb_headline rich_font_type2"><?php echo $args['title_list_treatment'] ?></h3>

                <h4 class="cb_catch rich_font_type3"><?php echo $args['content_item'] ?></h4>

                <div class="post_list_slider_wrap">
                    <div class="post_list">
                        <?php foreach ($values as $key => $item) { ?>
                            <article class="item ">
                                <p class="category cat_id_5"><a
                                            href="<?= vc_build_link($item['url_button'])['url'] ?>"
                                            tabindex="-1"><?= vc_build_link($item['url_button'])['title'] ?></a>
                                </p>
                                <a class="image_link animate_background clearfix"
                                   href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"
                                   tabindex="-1">
                                    <div class="image_wrap">
                                        <div class="image"
                                             style="background:url(<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>) no-repeat center center; background-size:cover;"></div>
                                    </div>
                                </a>
                                <div class="title_area">
                                    <h3 class="title"><a
                                                href="<?= vc_build_link($item['url'])['url'] ?>"
                                                tabindex="-1"><?= vc_build_link($item['url'])['title'] ?></span></a>
                                    </h3>
                                    <p class="date">
                                        <time class="entry-date updated" datetime="2022-01-03T17:09:29+09:00">
                                            <?= $item['date_listTreatment'] ?>
                                        </time>
                                    </p>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
