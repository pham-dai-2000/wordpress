<?php
if (isset($args) && $args) { ?>
    <div id="main-contents">
        <div id="design-page1">
            <div class="design1-content4 design1-content num3 cb-free-space type1" id="dc1-content-3">
                <div class="post-content clearfix">
                    <p>
                        <iframe src="<?= vc_build_link($args['link_maps'])['url'] ?>"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>