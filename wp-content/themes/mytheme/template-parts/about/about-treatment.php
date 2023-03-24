<?php
$values = vc_param_group_parse_atts($args['arr_item']);
if (isset($args) && $args) { ?>
<div id="main-contents">
    <div id="design-page1">
        <div class="design1-content3 design1-content num1" id="dc1-content-1">
            <h3 class="top-headline rich-font-type2">
                <?php echo $args['title_treatment'] ?>
            </h3>
            <div class="item-list clearfix">
    <?php foreach ($values as $key => $item) { ?>
                <div class="item clearfix">
                    <img class="image-list-1"
                         src="<?= vc_build_link($item['link_item'])['url'] ?>">
                    <p class="desc"></p>
                    <h4><?php echo $item['title_item'] ?></h4>
                    <?php echo $item['content_item'] ?>
                </div>
    <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>