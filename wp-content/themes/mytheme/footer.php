<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytheme
 */

?>
<?php $list = get_field('list', 'option');
$list_link = get_field('list_link', 'option');
$table = get_field('table', 'option');
$link_bg = get_field('link_background', 'option');
$link_logo = get_field('link_logo', 'option');
$menu_footer = get_field('menu_footer', 'option');
//echo "<pre>";
//print_r($link_bg);
if (isset($list) && count($list)) { ?><?php } ?>
<footer id="colophon" class="site-footer">
    <footer id="footer">

        <div id="footer_banner">
            <?php foreach ($list as $key => $item) { ?>
                <div class="item">
                    <a class="animate_background clearfix" href="<?= $item['link_item'] ?>">
                        <p class="title" style="color:#ffffff;"><?= $item['title_item'] ?></p>
                        <div class="image_wrap">
                            <div class="image"
                                 style="background:url(<?= $item['image']['url'] ?>) no-repeat center center; background-size:cover;"></div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div id="footer_top">
            <div id="footer_inner">
                <div class="service_list">
                    <h3 class="headline rich_font"><?= get_field('title', 'option') ?></h3>
                    <ul class="clearfix">
                        <?php foreach ($list_link as $key => $item) { ?>
                            <li><a href=""><span><?= $item['title_link'] ?></span></a></li>
                        <?php } ?>
                    </ul>
                </div><!-- END .service_list -->

                <div id="footer_data" class="position_type2 ">

                    <div class="item left position_type1">
                        <div class="sub_item" id="footer_contact">
                            <div class="sub_item_inner">
                                <h3 class="headline rich_font"><?= get_field('title_inner', 'option') ?></h3>
                                <div class="link_button">
                                    <a href="<?= get_field('link_button_inner', 'option') ?>"><?= get_field('content_button_inner', 'option') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="sub_item" id="footer_tel">
                            <h3 class="headline rich_font"><?= get_field('title_call', 'option') ?></h3>
                            <div class="number_area">
                                <p class="tel_number"><span class="icon"></span><span
                                            class="number"><?= get_field('content_number', 'option') ?></span></p>
                                <p class="tel_desc"><?= get_field('content_desc', 'option') ?></p>
                            </div>
                        </div>
                    </div><!-- END .item left -->

                    <div class="item right">
                        <table id="footer_schedule">
                            <tbody>
                            <tr>
                                <?php foreach ($table as $key => $item) { ?>
                                    <td class="col<?= $key + 1 ?>"><?= $item['title_col'] ?></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php foreach ($table as $key => $item) { ?>
                                    <td class="col<?= $key + 1 ?>"><?= $item['content_col1'] ?></td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php foreach ($table as $key => $item) { ?>
                                    <td class="col<?= $key + 1 ?>"><?= $item['content_col2'] ?></td>
                                <?php } ?>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- END .item right -->

                </div>

            </div><!-- END #footer_inner -->

            <div id="footer_overlay" style="background:rgba(0,0,0,0.3);"></div>

            <div class="footer_bg_image "
                 style="background:url(<?= $link_bg['url'] ?>) no-repeat center center; background-size:cover;"></div>

        </div><!-- END #footer_top -->

        <div id="footer_bottom">

            <div id="footer_logo">

                <h3 class="logo">
                    <a href="https://wakuwakuseikotsu.jp/" title="Takasago station square exciting osteopathic clinic">
                        <img class="pc_logo_image" src="<?= $link_logo['url'] ?>"
                             alt="Takasago station square exciting osteopathic clinic"
                             title="Takasago station square exciting osteopathic clinic" width="300" height="63">
<!--                        <img class="mobile_logo_image"-->
<!--                             src="https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2021/03/wakuwaku_logo.png?1678075740"-->
<!--                             alt="Takasago station square exciting osteopathic clinic"-->
<!--                             title="Takasago station square exciting osteopathic clinic" width="300" height="63">-->
                    </a>
                </h3>

            </div>

            <p class="footer_info"><?= get_field('content_info', 'option') ?></p>

            <ul id="footer_sns" class="clearfix">
            </ul>

        </div><!-- END #footer_bottom -->

        <div id="footer_menu" class="footer_menu" style="background:#f2f2f2;">
            <ul class="menu">
                <?php foreach ($menu_footer as $key => $item) { ?>
                    <li id="menu-item-17<?= $key ?>"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17<?= $key ?> "><a
                                href="<?= $item['link_menu'] ?>"><?= $item['title_menu'] ?></a></li>
                <?php } ?>
            </ul>
        </div>

        <p id="copyright" style="background:#f0feff; color:#393f41;"><?= get_field('end_footer', 'option') ?></p>

    </footer>
</footer><!-- #colophon -->
</div><!-- #page -->
<div id="return_top" class="">
    <a href="#body"><span></span></a>
</div>
<?php wp_footer(); ?>

</body>
</html>
