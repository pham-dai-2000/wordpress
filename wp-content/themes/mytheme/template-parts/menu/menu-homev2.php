<?php
function menulv1($e)
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

$menus = menulv1('subMenu');
//echo '<pre>';
//print_r($menus);
//echo '</pre>';
?>
<div class="megamenu_service_list" id="js-megamenu34">
    <div class="megamenu_service_list_inner clearfix">

        <h3 class="headline">Treatment
            guide</h3>

        <div class="link_button">
            <a href="https://wakuwakuseikotsu.jp/treatment/">View the details</a>
        </div>

        <div class="service_list clearfix">
            <?php foreach ($menus as $key => $navItem) {
                $image = get_field('image', $navItem);
                ?>
            <article class="item">
                <a href="">
                    <img class="image_slider"
                         src="<?php echo $image ?>" alt=""
                         title="<?= $navItem->url ?>">
                    <div class="title_area">
                        <p class="title"><span><?php echo $navItem->title ?></span>
                        </p>
                    </div>
                </a>
            </article>
            <?php } ?>
        </div>
    </div>
</div>