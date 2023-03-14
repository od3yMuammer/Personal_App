@extends('web.layouts.parent')

@section('title')
    الصفحة الرئيسية- {{ $settings->site_name  }}
@endsection

@section('content')
    <main class="main-wrapper">
        <div class="content-wrapper">
            <div data-elementor-type="wp-page" data-elementor-id="496" class="elementor elementor-496">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2896a28 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2896a28" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b6f027"
                            data-id="4b6f027" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
                                <div
                                    class="elementor-element elementor-element-4e62f8a rivax-carousel-effect-slide elementor-widget rivax-post-kenzo-widget e-widget-swiper"
                                    data-id="4e62f8a" data-element_type="widget"
                                    data-widget_type="rivax-post-kenzo.default" style="
                                    direction: ltr;
                                    ">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-posts-container">
                                            <div class="rivax-posts-wrapper layout-carousel">
                                                <div id="rivax-carousel-4e62f8a" class="rivax-posts-carousel-wrapper"
                                                     data-settings="{&quot;autoplay&quot;:{&quot;delay&quot;:5000},&quot;loop&quot;:true,&quot;speed&quot;:500,&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1,&quot;spaceBetween&quot;:20,&quot;effect&quot;:&quot;slide&quot;,&quot;autoHeight&quot;:true,&quot;direction&quot;:&quot;horizontal&quot;,&quot;breakpoints&quot;:{&quot;767&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:20,&quot;slidesPerGroup&quot;:1},&quot;1023&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:&quot;20&quot;,&quot;slidesPerGroup&quot;:1}},&quot;navigation&quot;:{&quot;nextEl&quot;:&quot;#rivax-carousel-4e62f8a .carousel-nav-next&quot;,&quot;prevEl&quot;:&quot;#rivax-carousel-4e62f8a .carousel-nav-prev&quot;},&quot;pagination&quot;:{&quot;el&quot;:&quot;#rivax-carousel-4e62f8a .carousel-pagination&quot;,&quot;type&quot;:&quot;&quot;,&quot;clickable&quot;:&quot;true&quot;,&quot;dynamicBullets&quot;:false},&quot;a11y&quot;:{&quot;enabled&quot;:&quot;false&quot;},&quot;fadeEffect&quot;:{&quot;crossFade&quot;:true}}">
                                                    <div
                                                        class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                                                        <div class="swiper-wrapper"
                                                             style="transition-duration: 0ms; transform: translate3d(-1560px, 0px, 0px); height: 450px;">



                                                            @foreach($posts as $post)

                                                            <div
                                                                class="post-item swiper-slide"
                                                                data-swiper-slide-index="1"
                                                                style="width: 370px; margin-right: 20px;">
                                                                <article
                                                                    class="post-wrapper post-49 post type-post status-publish format-standard has-post-thumbnail hentry category-health category-music">
                                                                    <a class="item-link rivax-position-cover"
                                                                       aria-label="ارتباط العنصر"
                                                                       href="#"></a>
                                                                    <div class="image-wrapper">
                                                                        <img width="1300" height="650"
                                                                             style="height: 650px; width: 1300px; object-fit: cover"
                                                                             src="{{ asset('post_images/'.$post->image) }}"
                                                                             class="attachment-rivax-large-wide size-rivax-large-wide wp-post-image"
                                                                             alt="{{ $post->title }}" decoding="async" loading="lazy"
                                                                             title="{{ $post->title }}">
                                                                    </div>
                                                                    <div
                                                                        class="content-wrapper rivax-position-bottom style-1">
                                                                        <div class="content-wrapper-inner">
                                                                            <div
                                                                                class="terms-wrapper multi-bg term-shape">
                                                                                <a class="term-item term-id-{{mt_rand(3, 8)}}"
                                                                                   href="#"><span><font
                                                                                            style="vertical-align: inherit;"><font
                                                                                                style="vertical-align: inherit;">{{ $post->section->name }}</font></font></span></a>
                                                                            </div>
                                                                            <h2 class="title">
                                                                                <a href="#"
                                                                                   class="title-animation-underline"
                                                                                   title="{{ $post->title }}"><font
                                                                                        style="vertical-align: inherit;"><font
                                                                                            style="vertical-align: inherit;">{{ $post->title }}</font></font></a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </div>

                                                            @endforeach

                                                        </div>
                                                        <span class="swiper-notification" aria-live="assertive"
                                                              aria-atomic="true"></span>
                                                        <span class="swiper-notification" aria-live="assertive"
                                                              aria-atomic="true"></span></div>
                                                    <div
                                                        class="carousel-nav-wrapper rivax-position-center elementor-hidden-phone">
                                                        <a href="" class="carousel-nav-prev" tabindex="0" role="button"
                                                           aria-label="Previous slide">
                                                            <i class="ri-arrow-right-c"></i>
                                                        </a>
                                                        <a href="" class="carousel-nav-next" tabindex="0" role="button"
                                                           aria-label="Next slide">
                                                            <i class="ri-arrow-right-c"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-46a5b70 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="46a5b70" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e15713b"
                            data-id="e15713b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-18b820f rivax-align-center elementor-widget rivax-divider-heading-widget"
                                    data-id="18b820f" data-element_type="widget"
                                    data-widget_type="rivax-divider-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-divider-heading-wrap">
                                            <div class="rivax-divider-heading divider-style-17 ">
                                                <div class="divider divider-1"></div>
                                                <div class="divider divider-2"></div>
                                                <h2 class="title">
                                                <span class="title-inner">
                                                <span id="oPost" class="title-text"><font style="vertical-align: inherit;"><font
                                                            style="vertical-align: inherit;">
                                                المنشورات الحديثة            </font></font></span>
                                                </span>
                                                </h2>
                                                <div class="divider divider-3"></div>
                                                <div class="divider divider-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-9f6b6f3 elementor-widget rivax-post-modern-widget"
                                    data-id="9f6b6f3" data-element_type="widget"
                                    data-widget_type="rivax-post-modern.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-posts-container">
                                            <div class="rivax-posts-wrapper layout-grid">
                                                <style>
                                                    img{
                                                        object-fit: cover;
                                                    }
                                                </style>
                                                @foreach($posts as $post)
                                                <div class="post-item">
                                                    <article
                                                        class="post-wrapper post-81 post type-post status-publish format-standard has-post-thumbnail hentry category-health category-lifestyle">
                                                        <div class="image-outer-wrapper">
                                                            <div class="image-wrapper">
                                                                <img width="450" height="350"
                                                                     style="width: 450px; height: 350px; object-fit: cover"
                                                                     src="{{ asset('post_images/'.$post->image) }}"
                                                                     class="attachment-rivax-small size-rivax-small wp-post-image"
                                                                     alt="" decoding="async" loading="lazy"
                                                                     title="{{ $post->title }}"> <a
                                                                    class="image-link rivax-position-cover"
                                                                    aria-label="ارتباط العنصر"
                                                                    href="#"></a>
                                                                <svg class="svg-cover"
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 400 35" preserveAspectRatio="none">
                                                                    <path class="st0"
                                                                          d="M0,35h400V24.9c0,0-43.8-25.4-114.9-3.4s-107.7,4.1-142.2-9S34.1-6.7,0,12.6V35z"></path>
                                                                </svg>
                                                            </div>
                                                            <div
                                                                class="post-counter-wrap counter-inside-image rivax-position-top-left">
                                                                <span class="post-counter"></span>
                                                            </div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <div class="terms-wrapper multi-bg term-shape"><a
                                                                    class="term-item term-id-{{ mt_rand(3, 8) }}"
                                                                    href="main/category/health/"><span><font
                                                                            style="vertical-align: inherit;"><font
                                                                                style="vertical-align: inherit;">{{ $post->section->name }}</font></font></span></a>
                                                            </div>
                                                            <h3 class="title">
                                                                <a href="#"
                                                                   class="title-animation-underline"
                                                                   title="{{ $post->title }}"><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">{{ $post->title }}</font></font></a>
                                                            </h3>
                                                            <div class="rivax-read-more-wrapper">
                                                                <a href="#"
                                                                   class="rivax-read-more style-default icon-after">
                                                                    <span class="read-more-title"></span>
                                                                    <i class="fas fa-arrow-down"></i> </a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="rivax-posts-pagination-wrap">
                                                <div class="rivax-posts-pagination load-more-pagination">
                                                    <a class="rivax-post-load-more elementor-button elementor-size-md "
                                                       href="#" data-widget-id="9f6b6f3" data-current-page="1"
                                                       data-post-id="496">
                                                <span class="rivax-button-text"><font
                                                        style="vertical-align: inherit;"><font
                                                            style="vertical-align: inherit;">
                                                تحميل المزيد						</font></font></span>
                                                    </a>
                                                    <span class="rivax-post-load-more-loader"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

@endsection
