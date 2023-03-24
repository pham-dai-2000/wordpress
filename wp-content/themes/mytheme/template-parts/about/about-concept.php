<?php
$values = vc_param_group_parse_atts($args['arr_item']);
if (isset($args) && $args) { ?>
    <div id="main-contents">
        <div id="design-page1">
            <div class="design1-content1 design1-content num0" id="dc1-content-0">
                <h3 class="top-headline rich-font-type2">
                    <?php echo $args['title_concept'] ?>
                </h3>
                <div class="content-area">
                    <div class="main-image"
                         style="background: url(<?= vc_build_link($args['link_slider'])['url'] ?>) no-repeat center top; background-size: cover;">
                        <h3 class="catch rich-font-type3 type2">
                            <?php echo $args['content_slider'] ?></h3>
                        <div class="overlay"></div>
                    </div>
                    <div class="item-list clearfix">
                        <?php foreach ($values as $key => $item) { ?>
                            <div class="item">
                                <div class="image-list"
                                     style="background:url(<?php echo wp_get_attachment_image_src($item['image'], "full")[0] ?>); "></div>
                                <h4 class="headline"><?php echo $item['title_item'] ?></h4>
                                <p class="desc"><?php echo $item['content_item'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>