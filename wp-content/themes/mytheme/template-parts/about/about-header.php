<?php
if (isset($args) && $args) { ?>
    <div id="page-header"
         style="background: url(<?php echo wp_get_attachment_image_src($args['image_background'], "full")[0] ?>) no-repeat center top; background-size: cover;">
        <div id="page-header-inner">
            <h1 class="title rich-font-type3"><?= $args['title_header'] ?></h1>
            <h2 class="sub-title rich-font-type2">
                <span class="block-elem1">
                    <?= $args['title_block'] ?>
                </span>
            </h2>
        </div>
        <div class="overlay"></div>
    </div>
<?php } ?>