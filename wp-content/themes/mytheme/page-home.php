<?php

/**
 * Template Name: WaoconWeb Home
 */
?>
<?php
get_header();
while(have_posts()) :

    the_post();
    the_content();
//    custom_breadcrumbs();
endwhile;
?>
<!--<main id="primary" class="site-main">-->
<!--    <div id="index_content_builder">-->
<!---->
<!--        <!-- END .index_post_slider -->-->
<!---->
<!--        <div class="index_post_slider cb_contents num5" style="background:#f5f5f5;" id="cb_content_5">-->
<!---->
<!--            <div class="cb_contents_inner">-->
<!---->
<!--                <h3 class="cb_headline rich_font_type2">List of treatment/treatment contents</h3>-->
<!---->
<!--                <h4 class="cb_catch rich_font_type3">Based on our own counseling, we propose and assemble-->
<!--                    treatments that suit patients, such as correction, acupuncture, and esthetic-->
<!--                    menus.</h4>-->
<!---->
<!--                <div class="post_list_slider_wrap">-->
<!--                    <div class="post_list clearfix slick-initialized slick-slider">-->
<!--                        <div aria-live="polite" class="slick-list draggable">-->
<!--                            <div class="slick-track"-->
<!--                                 style="opacity: 1; width: 4008px; transform: translate3d(-1670px, 0px, 0px);"-->
<!--                                 role="listbox">-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="-3" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/01/3B527B8C-B86A-45F7-8E8D-069AFB45A15D-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                                    tabindex="-1">Men's esthetic started 🎶</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-01-03T17:09:29+09:00">-->
<!--                                                2022.01.03-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="-2" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2021/12/2428A947-7969-4857-B277-675C598D098E-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                                    tabindex="-1">Facial esthetic started 😊</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-12-16T13:08:56+09:00">-->
<!--                                                2021.12.16-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="-1" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                                    tabindex="-1">I started acupuncture!</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-10-20T15:06:54+09:00">-->
<!--                                                2021.10.20-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide" data-slick-index="0" aria-hidden="true"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide30">-->
<!--                                    <p class="category cat_id_1"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/uncategorized/"-->
<!--                                                tabindex="-1">Uncategorized</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="-1">Notice of closed days in October</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-18T13:45:14+09:00">-->
<!--                                                2022.10.18-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide" data-slick-index="1" aria-hidden="true"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide31">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="-1">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/10/613C5609-9992-442D-A0FB-EBF20714FF4A-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                                    tabindex="-1">Genetic testing started</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-05T16:45:40+09:00">-->
<!--                                                2022.10.05-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-current slick-active" data-slick-index="2"-->
<!--                                         aria-hidden="false" style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide32">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="0">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="0">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="0">Notice of summer holidays</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-09-01T06:53:39+09:00">-->
<!--                                                2022.09.01-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide33">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="0">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                       tabindex="0">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/01/3B527B8C-B86A-45F7-8E8D-069AFB45A15D-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                                    tabindex="0">Men's esthetic started 🎶</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-01-03T17:09:29+09:00">-->
<!--                                                2022.01.03-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-active" data-slick-index="4" aria-hidden="false"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide34">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="0">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                       tabindex="0">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2021/12/2428A947-7969-4857-B277-675C598D098E-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                                    tabindex="0">Facial esthetic started 😊</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-12-16T13:08:56+09:00">-->
<!--                                                2021.12.16-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide" data-slick-index="5" aria-hidden="true"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide35">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                                    tabindex="-1">I started acupuncture!</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-10-20T15:06:54+09:00">-->
<!--                                                2021.10.20-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="6" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_1"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/uncategorized/"-->
<!--                                                tabindex="-1">Uncategorized</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="-1">Notice of closed days in October</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-18T13:45:14+09:00">-->
<!--                                                2022.10.18-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="7" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="-1">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/10/613C5609-9992-442D-A0FB-EBF20714FF4A-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                                    tabindex="-1">Genetic testing started</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-05T16:45:40+09:00">-->
<!--                                                2022.10.05-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="8" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="-1">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="-1">Notice of summer holidays</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-09-01T06:53:39+09:00">-->
<!--                                                2022.09.01-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!---->
<!--                    </div><!-- END .post_list -->-->
<!--                    <div class="carousel_arrow next_item"></div>-->
<!--                    <div class="carousel_arrow prev_item"></div>-->
<!--                </div><!-- END .post_list_slider_wrap -->-->
<!---->
<!---->
<!--            </div><!-- END .cb_contents_inner -->-->
<!---->
<!--        </div><!-- END .index_post_slider -->-->
<!---->
<!--        <div class="index_post_slider cb_contents num6" style="background:#f5f5f5;" id="cb_content_6">-->
<!---->
<!--            <div class="cb_contents_inner">-->
<!---->
<!--                <h3 class="cb_headline rich_font_type2">Treatment content</h3>-->
<!---->
<!--                <h4 class="cb_catch rich_font_type3">We will introduce the treatments and courses performed-->
<!--                    at Wakuwaku Osteopathic Clinic.</h4>-->
<!---->
<!--                <div class="post_list_slider_wrap">-->
<!--                    <div class="post_list clearfix slick-initialized slick-slider">-->
<!--                        <div aria-live="polite" class="slick-list draggable">-->
<!--                            <div class="slick-track"-->
<!--                                 style="opacity: 1; width: 4008px; transform: translate3d(-1670px, 0px, 0px);"-->
<!--                                 role="listbox">-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="-3" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/01/3B527B8C-B86A-45F7-8E8D-069AFB45A15D-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                                    tabindex="-1">Men's esthetic started 🎶</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-01-03T17:09:29+09:00">-->
<!--                                                2022.01.03-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="-2" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2021/12/2428A947-7969-4857-B277-675C598D098E-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                                    tabindex="-1">Facial esthetic started 😊</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-12-16T13:08:56+09:00">-->
<!--                                                2021.12.16-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="-1" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                                    tabindex="-1">I started acupuncture!</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-10-20T15:06:54+09:00">-->
<!--                                                2021.10.20-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide" data-slick-index="0" aria-hidden="true"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide40">-->
<!--                                    <p class="category cat_id_1"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/uncategorized/"-->
<!--                                                tabindex="-1">Uncategorized</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="-1">Notice of closed days in October</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-18T13:45:14+09:00">-->
<!--                                                2022.10.18-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide" data-slick-index="1" aria-hidden="true"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide41">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="-1">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/10/613C5609-9992-442D-A0FB-EBF20714FF4A-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                                    tabindex="-1">Genetic testing started</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-05T16:45:40+09:00">-->
<!--                                                2022.10.05-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-current slick-active" data-slick-index="2"-->
<!--                                         aria-hidden="false" style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide42">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="0">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="0">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="0">Notice of summer holidays</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-09-01T06:53:39+09:00">-->
<!--                                                2022.09.01-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide43">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="0">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                       tabindex="0">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/01/3B527B8C-B86A-45F7-8E8D-069AFB45A15D-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/01/03/%e3%83%a1%e3%83%b3%e3%82%ba%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%8e%b6/"-->
<!--                                                    tabindex="0">Men's esthetic started 🎶</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-01-03T17:09:29+09:00">-->
<!--                                                2022.01.03-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-active" data-slick-index="4" aria-hidden="false"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide44">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="0">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                       tabindex="0">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2021/12/2428A947-7969-4857-B277-675C598D098E-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/12/16/%e3%83%95%e3%82%a7%e3%82%a4%e3%82%b7%e3%83%a3%e3%83%ab%e3%82%a8%e3%82%b9%e3%83%86%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%f0%9f%98%8a/"-->
<!--                                                    tabindex="0">Facial esthetic started 😊</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-12-16T13:08:56+09:00">-->
<!--                                                2021.12.16-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide" data-slick-index="5" aria-hidden="true"-->
<!--                                         style="width: 334px;" tabindex="-1" role="option"-->
<!--                                         aria-describedby="slick-slide45">-->
<!--                                    <p class="category cat_id_5"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category4/"-->
<!--                                                tabindex="-1">staff blog</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2021/10/20/%e9%8d%bc%e6%b2%bb%e7%99%82%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/"-->
<!--                                                    tabindex="-1">I started acupuncture!</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2021-10-20T15:06:54+09:00">-->
<!--                                                2021.10.20-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="6" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_1"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/uncategorized/"-->
<!--                                                tabindex="-1">Uncategorized</a>-->
<!--                                    </p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/18/%ef%bc%91%ef%bc%90%e6%9c%88%e3%81%ae%e4%bc%91%e8%a8%ba%e6%97%a5%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="-1">Notice of closed days in October</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-18T13:45:14+09:00">-->
<!--                                                2022.10.18-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="7" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="-1">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/uploads/2022/10/613C5609-9992-442D-A0FB-EBF20714FF4A-400x280.jpeg) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/10/05/%e9%81%ba%e4%bc%9d%e5%ad%90%e6%a4%9c%e6%9f%bb%e5%a7%8b%e3%82%81%e3%81%be%e3%81%97%e3%81%9f/"-->
<!--                                                    tabindex="-1">Genetic testing started</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-10-05T16:45:40+09:00">-->
<!--                                                2022.10.05-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                                <article class="item slick-slide slick-cloned" data-slick-index="8" id=""-->
<!--                                         aria-hidden="true" style="width: 334px;" tabindex="-1">-->
<!--                                    <p class="category cat_id_12"><a-->
<!--                                                href="https://wakuwakuseikotsu.jp/category/category5/"-->
<!--                                                tabindex="-1">notice</a></p>-->
<!--                                    <a class="image_link animate_background clearfix"-->
<!--                                       href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                       tabindex="-1">-->
<!--                                        <div class="image_wrap">-->
<!--                                            <div class="image"-->
<!--                                                 style="background:url(https://wakuwakuseikotsu.jp/w-wp/wp-content/themes/cure_tcd082/img/common/no_image2.gif) no-repeat center center; background-size:cover;"></div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="title_area">-->
<!--                                        <h3 class="title"><a-->
<!--                                                    href="https://wakuwakuseikotsu.jp/2022/09/01/%e5%a4%8f%e5%ad%a3%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/"-->
<!--                                                    tabindex="-1">Notice of summer holidays</span></a>-->
<!--                                        </h3>-->
<!--                                        <p class="date">-->
<!--                                            <time class="entry-date updated" datetime="2022-09-01T06:53:39+09:00">-->
<!--                                                2022.09.01-->
<!--                                            </time>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </article>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!---->
<!--                    </div><!-- END .post_list -->-->
<!--                    <div class="carousel_arrow next_item"></div>-->
<!--                    <div class="carousel_arrow prev_item"></div>-->
<!--                </div><!-- END .post_list_slider_wrap -->-->
<!---->
<!---->
<!--            </div><!-- END .cb_contents_inner -->-->
<!---->
<!--        </div><!-- END .index_post_slider -->-->
<!---->
<!--    </div>-->
<!--</main><!-- #main -->-->
<!--//get_sidebar();-->
<?php get_footer() ?>
</body>