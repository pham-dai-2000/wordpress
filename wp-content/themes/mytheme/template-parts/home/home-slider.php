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
<div class="header_group">
    <div id="header_slider" class="slider">
    <?php foreach ($values as $key => $item) { ?>
        <div class="item item<?= $key+1 ?>">
            <h3 class="h3 catch<?= $key+1?> catch type<?= $key+1?> rich_font_type3"><span><?= $item['desc'] ?></span>
            </h3>
            <div class="image_slider"
                 style="background:url(<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>) no-repeat center center; background-size:cover;"></div>
        </div>
    <?php } ?>
    </div>
    <div id="index_box_content" class="clearfix slick-initialized slick-slider type1">

        <div class="box_item box_item1" style="opacity: 1; width: 334px; transform: translate3d(0px, 0px, 0px);">
            <h3 class="title rich_font"><?php echo $args['title_about_en'] ?></h3>
            <div class="desc">
                <p><?php echo $args['content_item'] ?></p>
            </div>
            <a class="link" href="<?php echo vc_build_link($args['url_button'])['url'] ?>" tabindex="0"><?php echo vc_build_link($args['url_button'])['title'] ?></a>
        </div>

    </div>
</div>
<?php } ?>