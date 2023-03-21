<?php
function menulv2($e)
{
    $menuLocations = get_nav_menu_locations();
    $navbar_items = wp_get_nav_menu_items($menuLocations[$e]);
    $child_items = [];
// pull all child menu items into separate object
// kéo tất cả các mục menu con vào đối tượng riêng biệt
    foreach ($navbar_items as $key => $item) {
        if ($item->menu_item_parent) {
            array_push($child_items, $item);
            unset($navbar_items[$key]);
        }
    }
// push child items into their parent item in the original object
// đẩy các mục con vào mục cha của chúng trong đối tượng ban đầu
    foreach ($navbar_items as $item) {
        foreach ($child_items as $key => $child) {
            if ($child->menu_item_parent == $item->ID) {
                if (!$item->child_items) {
                    $item->child_items = [];
                }
                array_push($item->child_items, $child);
                unset($child_items[$key]);
            }
        }
    }

// return navbar object where child items are grouped with parents
    return $navbar_items;
}

$menus = menulv2('subMenu1');
//echo '<pre>';
//print_r($menus);
//echo '</pre>';
?>
<div class="megamenu_blog_list" id="js-megamenu75">
    <div class="megamenu_blog_list_inner clearfix">
        <div class="megamenu_blog_slider_wrap">
            <div class="megamenu_blog_slider" style="display: flex">
                        <?php foreach ($menus as $key => $navItem) {
                        $image = get_field('image', $navItem);
                        $button = get_field('button', $navItem);
                        $desc = get_field('desc', $navItem);
                        ?>
                        <article class="item" style="width: 233px">
                            <p class="category cat_id_5"><a
                                    href="https://wakuwakuseikotsu.jp/category/category4/"
                                    tabindex="-1"><?php echo $button ?></a>
                            </p>
                            <a class="image_link animate_background"
                               href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"
                               tabindex="-1">
                                <div class="image_wrap">
                                    <div class="image"
                                         style="background:url(<?php echo $image ?>) no-repeat center center; background-size:cover;"></div>
                                </div>
                                <div class="title_area">
                                    <h4 class="title"><span class="desc-treatment"><?php echo $desc ?></span>
                                    </h4>
                                </div>
                            </a>
                        </article>
                        <?php } ?>
                </div>
<!-- END .megamenu_blog_slider -->
        </div><!-- END .megamenu_blog_slider_wrap -->
        <div class="carousel_arrow next_item"></div>
        <div class="carousel_arrow prev_item"></div>
    </div>
</div>