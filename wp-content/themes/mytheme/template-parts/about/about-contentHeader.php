<?php if (isset($args) && $args) { ?>
<div id="main-contents">
    <div id="design-page1">
        <div id="content-header">
            <h2 class="headline rich-font-type2"><?php echo $args['title_about'] ?></h2>
            <h3 class="catch rich-font-type3"><?php echo $args['content_about'] ?></h3>
            <p class="desc">
                <?php echo $args['desc_about'] ?>
            </p>
        </div>
    </div>
</div>
<?php } ?>