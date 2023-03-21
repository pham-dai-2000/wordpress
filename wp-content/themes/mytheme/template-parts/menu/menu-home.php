<?php
function menulv($e)
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

$menus = menulv('headerMenu');
//echo '<pre>';
//print_r($menus);
//echo '</pre>';
?>
<nav id="global_menu">
    <ul id="menu-1" class="menu">
        <?php
        $temp = 0;
        foreach ($menus as $key => $navItem) {
           echo count($menus)
            ?>
            <li id="menu-item-<?= 33 +  $temp++ ?>"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-33 ">
                <a class="atv-color" href="<?= $navItem->url ?>"><?php echo $navItem->title ?></a>
                <?php if ($navItem->child_items && $navItem->ID == 49) { ?>
                    <ul class="sub-menu">
                        <?php foreach ( $navItem->child_items as $key => $navItemChild) { ?>
                        <li id="menu-item-110"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110 "><a
                                    href="https://wakuwakuseikotsu.jp/about/about-1/"><?php echo $navItemChild->title ?></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</nav>
<?php echo get_template_part('template-parts/menu/menu', 'homev2') ?>
<?php echo get_template_part('template-parts/menu/menu', 'homev3') ?>
