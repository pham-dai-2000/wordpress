<?php
if (isset($args) && $args) { ?>
<div id="bread-crumb">
    <ul class="clearfix">
        <li class="home">
            <a href="<?= vc_build_link($args['url_link'])['url'] ?>"><span itemprop="name"></span></a>
        </li>
        <li>
            <span><?= $args['title_link'] ?></span>
        </li>
    </ul>
</div>
<?php } ?>