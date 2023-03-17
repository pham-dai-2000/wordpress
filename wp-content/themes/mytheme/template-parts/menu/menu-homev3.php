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

$menus = menulv2('subMenu');
//echo '<pre>';
//print_r($menus);
//echo '</pre>';
?>
<div class="megamenu_blog_list" id="js-megamenu75">
    <div class="megamenu_blog_list_inner clearfix">
        <div class="megamenu_blog_slider_wrap">
            <div class="megamenu_blog_slider slick-initialized slick-slider">
                <div aria-live="polite" class="slick-list draggable">
                    <div class="slick-track"
                         style="opacity: 1; width: 3728px; transform: translate3d(-932px, 0px, 0px);"
                         role="listbox">
                        <article class="item slick-slide slick-cloned" data-slick-index="-4" id=""
                                 aria-hidden="true" style="width: 233px;" tabindex="-1">
                            <p class="category cat_id_5"><a
                                    href="https://wakuwakuseikotsu.jp/category/category4/"
                                    tabindex="-1">staff blog</a>
                            </p>
                            <a class="image_link animate_background"
                               href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"
                               tabindex="-1">
                                <div class="image_wrap">
                                    <div class="image"
                                         style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2021/12/2428A947-7969-4857-B277-675C598D098E-400x280.jpeg) no-repeat center center; background-size:cover;"></div>
                                </div>
                                <div class="title_area">
                                    <h4 class="title"><span>Facial esthetic started 😊</span>
                                    </h4>
                                </div>
                            </a>
                        </article>

                    </div>
                </div>


            </div><!-- END .megamenu_blog_slider -->
        </div><!-- END .megamenu_blog_slider_wrap -->
        <div class="carousel_arrow next_item"></div>
        <div class="carousel_arrow prev_item"></div>
    </div>
</div>