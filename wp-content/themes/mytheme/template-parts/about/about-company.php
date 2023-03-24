<?php
if (isset($args) && $args) { ?>
    <div id="main-contents">
        <div id="design-page1">
            <div class="design1-content2 design1-content num2" id="dc1-content-2">
                <h3 class="top-headline rich-font-type2">
                    <?php echo $args['title_company'] ?>
                </h3>
                <div class="item-list">
                    <div class="item clearfix layout-type1">
                        <div class="image-1"
                             style="background:url(<?= vc_build_link($args['link_image'])['url'] ?>); background-size:cover;">
                        </div>
                        <div class="content">
                            <div class="content-inner">
                                <h3 class="catch rich-font-type2"
                                    style="color:#00a8cc;"><?php echo $args['content_title'] ?></h3>
                                <p class="desc"><?php echo $args['content_desc'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>