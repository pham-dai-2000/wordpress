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
<div id="index_news">
    <div id="index_news_inner">
        <div id="index_news_slider" class="">
    <?php foreach ($values as $key => $item) { ?>
            <article class="item item-1"
                     aria-hidden="true"
                     style="width: 848px;" tabindex="-1">
                <a href="<?= vc_build_link($item['url_link1'])['url'] ?>"
                   class="clearfix" tabindex="-1">
                    <p class="date">
                        <time class="entry-date updated" datetime="2022-09-01T06:53:39+09:00"><?php echo $item['title_link'] ?>
                        </time>
                    </p>
                    <h4 class="title"><span><?php echo vc_build_link($item['url_link1'])['title'] ?></span>
                    </h4>
                </a>
            </article>
    <?php } ?>
        </div>
        <a class="archive_link" href="<?php echo vc_build_link($args['url_link2'])['url'] ?>"><?php echo vc_build_link($args['url_link2'])['title'] ?></a>
    </div>
</div>
<?php } ?>