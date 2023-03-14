<html lang="ar" class="translated-rtl">
<head>
    <script id="allow-copy_script">(function agent() {
            let unlock = false
            document.addEventListener('allow_copy', (event) => {
                unlock = event.detail.unlock
            })

            const copyEvents = [
                'copy',
                'cut',
                'contextmenu',
                'selectstart',
                'mousedown',
                'mouseup',
                'mousemove',
                'keydown',
                'keypress',
                'keyup',
            ]
            const rejectOtherHandlers = (e) => {
                if (unlock) {
                    e.stopPropagation()
                    if (e.stopImmediatePropagation) e.stopImmediatePropagation()
                }
            }
            copyEvents.forEach((evt) => {
                document.documentElement.addEventListener(evt, rejectOtherHandlers, {
                    capture: true,
                })
            })
        })()
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Cairo', sans-serif;
            /*text-align: right;*/
        }

        body {
            direction: rtl;
        }
    </style>
    <meta name="robots" content="max-image-preview:large">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="alternate" type="application/rss+xml" title="Roxeen »تغذية" href="main/feed/">
    <link rel="alternate" type="application/rss+xml" title="Roxeen »تغذية التعليقات" href="main/comments/feed/">
    <link rel="stylesheet" id="classic-theme-styles-css" href="main/wp-includes/css/classic-themes.min.css" media="all">
    <link rel="stylesheet" id="rivax-icon-css" href="main/wp-content/themes/roxeen/assets/css/rivax-icon.css"
          media="all">
    <link rel="stylesheet" id="bootstrap-grid-css"
          href="{{ asset('main/wp-content/themes/roxeen/assets/css/bootstrap-grid.min.css') }}" media="all">
    <link rel="stylesheet" id="rivax-theme-style-css" href="main/wp-content/themes/roxeen/style.css" media="all">
    <style id="rivax-theme-style-inline-css">.container {
            max-width: 1300px;
        }

        body {
            font-family: Manrope, sans-serif;
            font-weight: 400;
        }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            font-family: Jost, sans-serif;
            font-weight: 700;
        }

        @media screen and (max-width: 1024px) {
        }

        .term-id-6 {
            --term-color: #8571ff;
        }

        .term-id-4 {
            --term-color: #ff6c6c;
        }

        .term-id-7 {
            --term-color: #5b95ff;
        }

        .term-id-5 {
            --term-color: #ff7534;
        }

        .term-id-3 {
            --term-color: #00ce9b;
        }</style>
    <link rel="stylesheet" id="elementor-icons-css"
          href="{{ asset('main/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}" media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
          href="main/wp-content/plugins/elementor/assets/css/frontend-lite.min.css" media="all">
    <link rel="stylesheet" id="elementor-post-5-css" href="main/wp-content/uploads/elementor/css/post-5.css"
          media="all">
    <link rel="stylesheet" id="elementor-post-496-css" href="main/wp-content/uploads/elementor/css/post-496.css"
          media="all">
    <link rel="stylesheet" id="fluentform-elementor-widget-css"
          href="main/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css" media="all">
    <link rel="stylesheet" id="elementor-post-213-css" href="main/wp-content/uploads/elementor/css/post-213.css"
          media="all">
    <link rel="stylesheet" id="elementor-post-150-css" href="main/wp-content/uploads/elementor/css/post-150.css"
          media="all">
    <link rel="stylesheet" id="elementor-post-1150-css" href="main/wp-content/uploads/elementor/css/post-1150.css"
          media="all">
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css?family=Manrope:400%7CJost:700&amp;display=swap&amp;ver=1669630655">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Manrope:400%7CJost:700&amp;display=swap&amp;ver=1669630655"
          media="all" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Manrope:400%7CJost:700&#038;display=swap&#038;ver=1669630655"/>
    </noscript>
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
          href="main/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
          href="main/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css"
          href="main/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css" media="all">
    <script src="main/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
    <link rel="https://api.w.org/" href="main/wp-json/">
    <link rel="alternate" type="application/json" href="main/wp-json/wp/v2/pages/496">
    <link rel="EditURI" type="application/rsd+xml" title="تحديد وضع اللاجئ" href="main/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="main/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.1.1">
    <meta name="generator" content="WooCommerce 7.1.1">
    <link rel="canonical" href="main/home-01/">
    <link rel="shortlink" href="main/?p=496">
    <link rel="alternate" type="application/json+oembed"
          href="main/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.rivaxstudio.com%2Froxeen%2Fmain%2Fhome-01%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="main/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.rivaxstudio.com%2Froxeen%2Fmain%2Fhome-01%2F&amp;format=xml">
    <meta name="generator" content="Redux 4.3.21">
    <meta name="description" content="Powerful &amp; Professional WordPress Theme For Moden Blog and Magazine">
    <meta property="og:title" content="Roxeen">
    <meta property="og:url" content="main/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Roxeen">
    <meta property="og:description" content="Powerful &amp; Professional WordPress Theme For Moden Blog and Magazine">
    <script type="application/ld+json">{
         "@context": "https://schema.org",
         "@type": "WebSite",
         "@id": "main/#website",
         "url": "main/",
         "name": "Roxeen",
         "description": "Powerful & Professional WordPress Theme For Moden Blog and Magazine",
         "potentialAction": { "@type": "SearchAction", "target": "main/?s={search_term_string}", "query-input": "required name=search_term_string" }
         }

    </script>
    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <link rel="icon" href="main/wp-content/uploads/2022/11/fav.png" sizes="32x32">
    <link rel="icon" href="main/wp-content/uploads/2022/11/fav.png" sizes="192x192">
    <link rel="apple-touch-icon" href="main/wp-content/uploads/2022/11/fav.png">
    <meta name="msapplication-TileImage" content="main/wp-content/uploads/2022/11/fav.png">
    <link type="text/css" rel="stylesheet" charset="UTF-8"
          href="https://translate.googleapis.com/translate_static/css/translateelement.css">
</head>
<body
    class="page-template-default page page-id-496 wp-embed-responsive theme-roxeen woocommerce-js rivax-smooth-scroll elementor-default elementor-kit-5 elementor-page elementor-page-496 e--ua-blink e--ua-chrome e--ua-webkit site-loaded"
    data-elementor-device-mode="mobile">
<div id="site">
    <div id="site-inner">
        <header id="site-header" class="normal-header">
            <div data-elementor-type="wp-post" data-elementor-id="150" class="elementor elementor-150">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-226c4a1 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="226c4a1" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ffb920d"
                            data-id="ffb920d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-c89634f social-layout-inline official-item-color-yes official-icon-bg-yes official-item-hover-shadow-yes social-icon-left social-subtitle-right social-move-up-item elementor-widget rivax-social-icons-widget"
                                    data-id="c89634f" data-element_type="widget"
                                    data-widget_type="rivax-social-icons.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-social-icons">
                                            <div class="social-item facebook">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-facebook-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="#" title="فيسبوك"></a>
                                            </div>
                                            <div class="social-item youtube">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-youtube-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="#" title="موقع YouTube"></a>
                                            </div>
                                            <div class="social-item behance">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-behance-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="#" title="بيهانس"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b0727dd"
                            data-id="b0727dd" data-element_type="column" style="">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-389d00f elementor-widget rivax-site-logo-widget"
                                    data-id="389d00f" data-element_type="widget"
                                    data-widget_type="rivax-site-logo.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-logo">
                                            <a rel="home" href="main/" title="روكسين">
                                                <picture class="rivax-logo-image">

                                                </picture>


                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-db976d2 elementor-widget elementor-widget-heading"
                                    data-id="db976d2" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>/*! elementor - v3.9.0 - 06-12-2022 */
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                            }
                                        </style>
                                        <p class="elementor-heading-title elementor-size-default"><font
                                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">مدونة
                                                    شخصية وورد الموضوع</font></font></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b1ff8f9 elementor-hidden-mobile"
                            data-id="b1ff8f9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-5144897 elementor-widget__width-auto elementor-widget elementor-widget-button"
                                    data-id="5144897" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="#" class="elementor-button-link elementor-button elementor-size-sm"
                                               role="button">
                                       <span class="elementor-button-content-wrapper">
                                       <span class="elementor-button-icon elementor-align-icon-left">
                                       <i aria-hidden="true" class="far fa-paper-plane"></i>			</span>
                                       <span class="elementor-button-text"><font style="vertical-align: inherit;"><font
                                                   style="vertical-align: inherit;">الإشتراك</font></font></span>
                                       </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-f4d6748 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="f4d6748" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-227c19a"
                            data-id="227c19a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-4d7a118 elementor-widget rivax-offcanvas-widget"
                                    data-id="4d7a118" data-element_type="widget"
                                    data-widget_type="rivax-offcanvas.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-offcanvas">
                                            <div class="offcanvas-opener-wrapper">
                                          <span class="offcanvas-opener">
                                          <span class="hamburger">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                          </span>
                                          </span>
                                            </div>
                                            <div class="offcanvas-wrapper position-left">
                                                <div class="offcanvas-container">
                                                    <div class="offcanvas-container-inner">
                                                        <span class="offcanvas-closer"></span>
                                                        <div class="offcanvas-content">
                                                            <div data-elementor-type="wp-post" data-elementor-id="415"
                                                                 class="elementor elementor-415">
                                                                <section
                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-a5b2a98 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                    data-id="a5b2a98" data-element_type="section"
                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;pyramids&quot;}">
                                                                    <div class="elementor-shape elementor-shape-bottom"
                                                                         data-negative="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 1000 100"
                                                                             preserveAspectRatio="none">
                                                                            <path class="elementor-shape-fill"
                                                                                  d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div
                                                                        class="elementor-container elementor-column-gap-default">
                                                                        <div
                                                                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a257447"
                                                                            data-id="a257447"
                                                                            data-element_type="column">
                                                                            <div
                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                <div
                                                                                    class="elementor-element elementor-element-0d09c89 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                    data-id="0d09c89"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="image-box.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <style>/*! elementor - v3.9.0 - 06-12-2022 */
                                                                                            .elementor-widget-image-box .elementor-image-box-content {
                                                                                                width: 100%
                                                                                            }

                                                                                            @media (min-width: 768px) {
                                                                                                .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper, .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                                                                    display: flex
                                                                                                }

                                                                                                .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                                                                    text-align: right;
                                                                                                    flex-direction: row-reverse
                                                                                                }

                                                                                                .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                                                                                                    text-align: left;
                                                                                                    flex-direction: row
                                                                                                }

                                                                                                .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                                                                                                    margin: auto
                                                                                                }

                                                                                                .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                                                                                                    align-items: flex-start
                                                                                                }

                                                                                                .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                                                                                                    align-items: center
                                                                                                }

                                                                                                .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
                                                                                                    align-items: flex-end
                                                                                                }
                                                                                            }

                                                                                            @media (max-width: 767px) {
                                                                                                .elementor-widget-image-box .elementor-image-box-img {
                                                                                                    margin-left: auto !important;
                                                                                                    margin-right: auto !important;
                                                                                                    margin-bottom: 15px
                                                                                                }
                                                                                            }

                                                                                            .elementor-widget-image-box .elementor-image-box-img {
                                                                                                display: inline-block
                                                                                            }

                                                                                            .elementor-widget-image-box .elementor-image-box-title a {
                                                                                                color: inherit
                                                                                            }

                                                                                            .elementor-widget-image-box .elementor-image-box-wrapper {
                                                                                                text-align: center
                                                                                            }

                                                                                            .elementor-widget-image-box .elementor-image-box-description {
                                                                                                margin: 0
                                                                                            }
                                                                                        </style>
                                                                                        <div
                                                                                            class="elementor-image-box-wrapper">
                                                                                            <figure
                                                                                                class="elementor-image-box-img">
                                                                                                <img width="150"
                                                                                                     height="150"
                                                                                                     src="main/wp-content/uploads/2022/11/bearded-begging-man-with-brunette-hair-looks-regretful-has-piercing-wearing-black-sweater-holds-palms-together-plead-something-isolated-yellow-wall-150x150.png"
                                                                                                     class="attachment-thumbnail size-thumbnail wp-image-924"
                                                                                                     alt=""
                                                                                                     loading="lazy">
                                                                                            </figure>
                                                                                            <div
                                                                                                class="elementor-image-box-content">
                                                                                                <span
                                                                                                    class="elementor-image-box-title"><font
                                                                                                        style="vertical-align: inherit;"><font
                                                                                                            style="vertical-align: inherit;">إريك دوفال</font></font></span>
                                                                                                <p class="elementor-image-box-description">
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;"><font
                                                                                                            style="vertical-align: inherit;">Lorem
                                                                                                            ipsum dolor
                                                                                                            sit amet،
                                                                                                            consectetur
                                                                                                            adipiscing
                                                                                                            elit. </font><font
                                                                                                            style="vertical-align: inherit;">Ut
                                                                                                            elit
                                                                                                            Tellus.</font></font>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-element elementor-element-2c15db6 social-layout-inline social-move-up-icon official-item-bg-yes social-icon-left social-subtitle-right elementor-widget rivax-social-icons-widget"
                                                                                    data-id="2c15db6"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="rivax-social-icons.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div class="rivax-social-icons">
                                                                                            <div
                                                                                                class="social-item facebook">
                                                                                                <div
                                                                                                    class="social-icon">
                                                                                                    <span
                                                                                                        class="icon"><i
                                                                                                            class="ri-facebook-fill"></i></span>
                                                                                                </div>
                                                                                                <a class="rivax-position-cover"
                                                                                                   href="#"
                                                                                                   title="فيسبوك"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="social-item whatsapp">
                                                                                                <div
                                                                                                    class="social-icon">
                                                                                                    <span
                                                                                                        class="icon"><i
                                                                                                            class="ri-whatsapp-line"></i></span>
                                                                                                </div>
                                                                                                <a class="rivax-position-cover"
                                                                                                   href="#"
                                                                                                   title="ال WhatsApp"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="social-item behance">
                                                                                                <div
                                                                                                    class="social-icon">
                                                                                                    <span
                                                                                                        class="icon"><i
                                                                                                            class="ri-behance-fill"></i></span>
                                                                                                </div>
                                                                                                <a class="rivax-position-cover"
                                                                                                   href="#"
                                                                                                   title="بيهانس"></a>
                                                                                            </div>
                                                                                            <div
                                                                                                class="social-item stackoverflow">
                                                                                                <div
                                                                                                    class="social-icon">
                                                                                                    <span
                                                                                                        class="icon"><i
                                                                                                            class="ri-stack-overflow-fill"></i></span>
                                                                                                </div>
                                                                                                <a class="rivax-position-cover"
                                                                                                   href="#"
                                                                                                   title="Stackoverflow"></a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <section
                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-cb0e2b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                    data-id="cb0e2b9" data-element_type="section">
                                                                    <div
                                                                        class="elementor-container elementor-column-gap-default">
                                                                        <div
                                                                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33db718"
                                                                            data-id="33db718"
                                                                            data-element_type="column">
                                                                            <div
                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                <div
                                                                                    class="elementor-element elementor-element-31bc860 elementor-widget rivax-site-logo-widget"
                                                                                    data-id="31bc860"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="rivax-site-logo.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div class="rivax-logo">
                                                                                            <a rel="home" href="main/"
                                                                                               title="روكسين">
                                                                                                <picture
                                                                                                    class="rivax-logo-image">
                                                                                                    <img
                                                                                                        src="main/wp-content/uploads/2022/10/Roxeen__Logo__Dark.png"
                                                                                                        alt="روكسين"
                                                                                                        width="300"
                                                                                                        height="60">
                                                                                                </picture>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-element elementor-element-d57a4c3 elementor-widget elementor-widget-heading"
                                                                                    data-id="d57a4c3"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="heading.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <p class="elementor-heading-title elementor-size-default">
                                                                                            <font
                                                                                                style="vertical-align: inherit;"><font
                                                                                                    style="vertical-align: inherit;">موضوع
                                                                                                    المدونة
                                                                                                    الشخصية</font></font>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-element elementor-element-cd1b4c4 elementor-widget rivax-navigation-widget"
                                                                                    data-id="cd1b4c4"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="rivax-navigation.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <nav
                                                                                            class="rivax-header-v-nav-wrapper">
                                                                                            <ul id="menu-main-menu"
                                                                                                class="rivax-header-v-nav">
                                                                                                <li id="menu-item-493"
                                                                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-493">
                                                                                                    <a href="#"><span><font
                                                                                                                style="vertical-align: inherit;"><font
                                                                                                                    style="vertical-align: inherit;">مسكن</font></font></span></a>
                                                                                                    <ul class="sub-menu">
                                                                                                        <li id="menu-item-1291"
                                                                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1291">
                                                                                                            <a href="{{route('index')}}"><span><font
                                                                                                                        style="vertical-align: inherit;"><font
                                                                                                                            style="vertical-align: inherit;">الصفحة الرئيسية افتراضي</font></font></span></a>
                                                                                                        </li>
                                                                                                        <li id="menu-item-553"
                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-496 current_page_item menu-item-553">
                                                                                                            <a href="{{route('index')}}"
                                                                                                               aria-current="page"><span><font
                                                                                                                        style="vertical-align: inherit;"><font
                                                                                                                            style="vertical-align: inherit;">الصفحة الرئيسية 1</font></font></span></a>
                                                                                                        </li>

                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li id="menu-item-158"
                                                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-158">
                                                                                                    <a href="#"><span><font
                                                                                                                style="vertical-align: inherit;"><font
                                                                                                                    style="vertical-align: inherit;">الصفحات</font></font></span></a>
                                                                                                    <ul class="sub-menu">
                                                                                                        <li id="menu-item-1242"
                                                                                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1242">
                                                                                                            <a href="main/together-we-can-make-the-world-a-better-place/"><span><font
                                                                                                                        style="vertical-align: inherit;"><font
                                                                                                                            style="vertical-align: inherit;">معرض بوست</font></font></span></a>
                                                                                                        </li>

                                                                                                    </ul>
                                                                                                </li>

                                                                                                <li id="menu-item-1088"
                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1088">
                                                                                                    <a href="{{route('about')}}"><span><font
                                                                                                                style="vertical-align: inherit;"><font
                                                                                                                    style="vertical-align: inherit;">معلومات عنا</font></font></span></a>
                                                                                                </li>
                                                                                                <li id="menu-item-1089"
                                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1089">
                                                                                                    <a href="{{route('contact.create')}}"><span><font
                                                                                                                style="vertical-align: inherit;"><font
                                                                                                                    style="vertical-align: inherit;">اتصل بنا</font></font></span></a>
                                                                                                </li>

                                                                                            </ul>
                                                                                        </nav>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="elementor-element elementor-element-86e203c elementor-widget elementor-widget-button"
                                                                                    data-id="86e203c"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="button.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div
                                                                                            class="elementor-button-wrapper">
                                                                                            <a href="main/contact/"
                                                                                               class="elementor-button-link elementor-button elementor-size-sm"
                                                                                               role="button">
                                                                           <span
                                                                               class="elementor-button-content-wrapper">
                                                                           <span class="elementor-button-text"><font
                                                                                   style="vertical-align: inherit;"><font
                                                                                       style="vertical-align: inherit;">اتصل بنا</font></font></span>
                                                                           </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-61d9307 elementor-hidden-tablet elementor-hidden-mobile"
                            data-id="61d9307" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-1f87868 elementor-widget rivax-navigation-widget"
                                    data-id="1f87868" data-element_type="widget"
                                    data-widget_type="rivax-navigation.default">
                                    <div class="elementor-widget-container">
                                        <nav class="rivax-header-nav-wrapper hover-style-1">
                                            <ul id="menu-main-menu-1" class="rivax-header-nav">
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-493">
                                                    <a href="{{route('index')}}"><span><font style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">الرئيسية</font></font></span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1291">
                                                            <a href="{{route('index')}}"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">الصفحة الرئيسية افتراضي</font></font></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-496 current_page_item menu-item-553">
                                                            <a href="{{route('index')}}" aria-current="page"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">الصفحة الرئيسية 1</font></font></span></a>
                                                        </li>


                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-158">
                                                    <a href="#"><span><font style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">الصفحات</font></font></span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1242">
                                                            <a href="main/together-we-can-make-the-world-a-better-place/"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">معرض بوست</font></font></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1245">
                                                            <a href="main/what-to-think-about-when-everything-goes-wrong/"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">اقتباس آخر</font></font></span></a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1088">
                                                    <a href="{{route('about')}}"><span><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">معلومات عنا</font></font></span></a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1089">
                                                    <a href="{{route('contact.create')}}"><span><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;"> اتصل بنا</font></font></span></a>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-07102f0"
                            data-id="07102f0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-017185e elementor-widget rivax-search-widget"
                                    data-id="017185e" data-element_type="widget"
                                    data-widget_type="rivax-search.default">
                                    <div class="elementor-widget-container" style="text-align: center; ">
                                        <div class="popup-search-wrapper style-1">
                                            <div class="popup-search-opener-wrapper">
                                                <span class="popup-search-opener"><i
                                                        class="ri-search-2-line"></i></span>
                                            </div>
                                            <div class="popup-search">
                                                <div class="popup-search-container">
                                                    <span class="popup-search-closer"></span>
                                                    <div class="popup-search-content">
                                                        <div class="popup-search-title-wrapper">
                                                            <h3><font style="vertical-align: inherit;"><font
                                                                        style="vertical-align: inherit;">اكتب واضغط على
                                                                        Enter للبحث</font></font></h3>
                                                        </div>
                                                        <div class="popup-search-form-wrapper">
                                                            <form action="main/" method="get" class="popup-search-form">
                                                                <input type="text" name="s" value=""
                                                                       class="search-field"
                                                                       aria-label="يبحث" required="">
                                                                <button type="submit" class="submit" aria-label="إرسال">
                                                                    <i class="ri-search-2-line"></i>
                                                                </button>
                                                            </form>
                                                        </div>
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
            </div>
        </header>
        <header id="site-sticky-header" class="fixed">
            <div data-elementor-type="wp-post" data-elementor-id="1150" class="elementor elementor-1150">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d0d8a7b elementor-section-content-middle elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d0d8a7b" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d6b1103"
                            data-id="d6b1103" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-4b3f1f3 elementor-widget rivax-site-logo-widget"
                                    data-id="4b3f1f3" data-element_type="widget"
                                    data-widget_type="rivax-site-logo.default">
                                    <div class="elementor-widget-container">


                                        <div class="rivax-logo">
                                            <a rel="home" href="main/" title="روكسين">
                                                <picture class="rivax-logo-image">

                                                    <img style="width: 40px; height: 40px;" src="{{ asset('setting_logos/'.$settings->logo) }}"

                                                    alt="روكسين" width="300" height="60">
                                                </picture>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1e1b01c"
                            data-id="1e1b01c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-009d6a6 elementor-widget rivax-navigation-widget"
                                    data-id="009d6a6" data-element_type="widget"
                                    data-widget_type="rivax-navigation.default">
                                    <div class="elementor-widget-container">
                                        <nav class="rivax-header-nav-wrapper hover-style-1">
                                            <ul id="menu-main-menu-2" class="rivax-header-nav">
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-493">
                                                    <a href="#"><span><font style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">الرئيسية</font></font></span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1291">
                                                            <a href="{{route('index')}}"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">الصفحة الرئيسية افتراضي</font></font></span></a>
                                                        </li>
                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1291">
                                                            <a href="{{route('index')}}"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">الصفحة الرئيسية 1</font></font></span></a>
                                                        </li>


                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-158">
                                                    <a href="#"><span><font style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">الصفحات</font></font></span></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1242">
                                                            <a href="main/together-we-can-make-the-world-a-better-place/"><span><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">معرض بوست</font></font></span></a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1088">
                                                    <a href="{{route('about')}}"><span><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">معلومات عنا</font></font></span></a>
                                                </li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1089">
                                                    <a href="{{route('contact.create')}}"><span><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">اتصل بنا</font></font></span></a>
                                                </li>


                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2766ec7"
                            data-id="2766ec7" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-7d794ab elementor-widget rivax-search-widget"
                                    data-id="7d794ab" data-element_type="widget"
                                    data-widget_type="rivax-search.default">
                                    <div class="elementor-widget-container">
                                        <div class="inline-search-form-wrapper">
                                            <form action="main/" method="get" class="inline-search-form">
                                                <input type="text" name="s" value="" class="search-field"
                                                        aria-label="يبحث" required="">
                                                <button type="submit" class="submit" aria-label="إرسال">
                                                    <i class="ri-search-2-line"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>
        @yield('content')
        <footer id="site-footer">
            <div data-elementor-type="wp-post" data-elementor-id="213" class="elementor elementor-213">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-9d9ff5d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="9d9ff5d" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-25f50e4"
                            data-id="25f50e4" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-c34133c rivax-align-center elementor-widget rivax-divider-heading-widget"
                                    data-id="c34133c" data-element_type="widget"
                                    data-widget_type="rivax-divider-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-divider-heading-wrap">
                                            <div class="rivax-divider-heading divider-style-1 ">
                                                <div class="divider divider-1"></div>
                                                <div class="divider divider-2"></div>
                                                <h2 class="title">
                                             <span class="title-inner">
                                             <span class="title-text"><font style="vertical-align: inherit;"><font
                                                         style="vertical-align: inherit;">
                                             تابعني في الاسنقرام            </font></font></span>
                                             </span>
                                                </h2>
                                                <div class="divider divider-3"></div>
                                                <div class="divider divider-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-c2644f2 elementor-widget rivax-instagram-widget"
                                    data-id="c2644f2" data-element_type="widget"
                                    data-widget_type="rivax-instagram.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-insta-wrapper layout-4">
                                            <div class="rivax-insta-header">
                                                <div class="rivax-insta-info"></div>
                                            </div>
                                            <div class="rivax-insta-images layout-1 hover-shape">
                                                <div class="insta-item">
                                                    <a target="_blank" href="https://www.instagram.com/rivaxstudio">
                                                        <img src="main/wp-content/uploads/2022/11/4266213-450x450.jpg"
                                                             width="450" height="450" alt="صورة الانستغرام">
                                                        <i class="ri-instagram-line"></i> </a>
                                                </div>
                                                <div class="insta-item">
                                                    <a target="_blank" href="https://www.instagram.com/rivaxstudio">
                                                        <img src="main/wp-content/uploads/2022/11/6230278-450x450.jpg"
                                                             width="450" height="450" alt="صورة الانستغرام">
                                                        <i class="ri-instagram-line"></i> </a>
                                                </div>
                                                <div class="insta-item">
                                                    <a target="_blank" href="https://www.instagram.com/rivaxstudio">
                                                        <img src="main/wp-content/uploads/2022/11/4302679-450x450.jpg"
                                                             width="450" height="450" alt="صورة الانستغرام">
                                                        <i class="ri-instagram-line"></i> </a>
                                                </div>
                                                <div class="insta-item">
                                                    <a target="_blank" href="https://www.instagram.com/rivaxstudio">
                                                        <img src="main/wp-content/uploads/2022/11/6214778-450x450.jpg"
                                                             width="450" height="450" alt="صورة الانستغرام">
                                                        <i class="ri-instagram-line"></i> </a>
                                                </div>
                                                <div class="insta-item">
                                                    <a target="_blank" href="https://www.instagram.com/rivaxstudio">
                                                        <img src="main/wp-content/uploads/2022/11/Scene...8-450x450.jpg"
                                                             width="450" height="450" alt="صورة الانستغرام">
                                                        <i class="ri-instagram-line"></i> </a>
                                                </div>
                                                <div class="insta-item">
                                                    <a target="_blank" href="https://www.instagram.com/rivaxstudio">
                                                        <img src="main/wp-content/uploads/2022/10/4513354-450x450.jpg"
                                                             width="450" height="450" alt="صورة الانستغرام">
                                                        <i class="ri-instagram-line"></i> </a>
                                                </div>
                                                <div class="rivax-insta-btn-wrap">
                                                    <a target="_blank" class="rivax-insta-btn button"
                                                       href="https://www.instagram.com/rivaxstudio">
                                                        <span class="btn-text"><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">اتبعني</font></font></span>
                                                    </a>
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
                    class="elementor-section elementor-top-section elementor-element elementor-element-bde4280 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="bde4280" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0a2fe06"
                            data-id="0a2fe06" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-01aaa3b elementor-widget rivax-site-logo-widget"
                                    data-id="01aaa3b" data-element_type="widget"
                                    data-widget_type="rivax-site-logo.default">
                                    <div class="elementor-widget-container" style="
    text-align: center;
">
                                        <div class="rivax-logo">
                                            <a rel="home" href="main/" title="روكسين">
                                                <picture class="rivax-logo-image">
                                                   <img style="position:relative; left: 140px" src="{{ asset('setting_logos/'.$settings->logo) }} "
                                                         alt="روكسين" width="300" height="60">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-7621e59 elementor-widget elementor-widget-heading"
                                    data-id="7621e59" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default"><font
                                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">بعيدًا
                                                    بعيدًا ، خلف الكلمة نهر صغير اسمه Duden حتى نصح كل الأقوياء Pointing
                                                    The Big Oxmox</font></font></p>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-2e6b656 social-layout-inline social-move-up-icon official-icon-color-yes social-icon-left social-subtitle-right elementor-widget rivax-social-icons-widget"
                                    data-id="2e6b656" data-element_type="widget"
                                    data-widget_type="rivax-social-icons.default">
                                    <div class="elementor-widget-container">

                                        <div class="rivax-social-icons">
                                            <div class="social-item facebook">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-facebook-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="{{$settings->facebook}}" title="فيسبوك"></a>
                                            </div>
                                            <div class="social-item instagram">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-instagram-line"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="{{$settings->facebook}}" title="انستغرام"></a>
                                            </div>
                                            <div class="social-item pinterest">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-pinterest-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="{{$settings->facebook}}" title="بينتيريست"></a>
                                            </div>
                                            <div class="social-item behance">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-behance-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="{{$settings->facebook}}" title="بيهانس"></a>
                                            </div>
                                            <div class="social-item stackoverflow">
                                                <div class="social-icon">
                                                    <span class="icon"><i class="ri-stack-overflow-fill"></i></span>
                                                </div>
                                                <a class="rivax-position-cover" href="{{$settings->facebook}}" title="Stackoverflow"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d1b4704"
                            data-id="d1b4704" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-c4767b4 rivax-align-left elementor-widget rivax-divider-heading-widget"
                                    data-id="c4767b4" data-element_type="widget"
                                    data-widget_type="rivax-divider-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-divider-heading-wrap">
                                            <div class="rivax-divider-heading divider-style-1 ">
                                                <div class="divider divider-1" style="position: relative;left: 350px"></div>
                                                <div class="divider divider-2" style="position: relative;left: 350px"></div>
                                                <h4 class="title">
                                             <span class="title-inner">
                                             <span class="title-text"><font style="vertical-align: inherit;"><font
                                                         style="vertical-align: inherit;">
                                             المشاركات الاخيرة            </font></font></span>
                                             </span>
                                                </h4>
                                                <div class="divider divider-3"style="position: relative;left: 350px"></div>
                                                <div class="divider divider-4"style="position: relative;left: 350px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-aa8bf6d elementor-widget rivax-post-elastic-widget"
                                    data-id="aa8bf6d" data-element_type="widget"
                                    data-widget_type="rivax-post-elastic.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-posts-container">
                                            <div class="rivax-posts-wrapper layout-grid">
                                                <div class="post-item">
                                                    <article

                                                        class="post-wrapper post-10 post type-post status-publish format-gallery has-post-thumbnail hentry category-lifestyle category-travel post_format-post-format-gallery">
                                                        <div class="image-outer-wrapper">
                                                            <div
                                                                class="post-counter-wrap counter-inside-image rivax-position-top-left">
                                                                <span class="post-counter"></span>
                                                            </div>

                                                            <div class="image-wrapper">
                                                                <a class="rivax-position-cover rivax-z-index-10"
                                                                   aria-label="ارتباط العنصر"
                                                                   href="main/together-we-can-make-the-world-a-better-place/"></a>
                                                                <img width="150" height="150"
                                                                     src="main/wp-content/uploads/2022/10/2315775-150x150.jpg"
                                                                     class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                     alt="" decoding="async" loading="lazy"
                                                                     title="معًا يمكننا أن نجعل العالم مكانًا أفضل"
                                                                     sizes="(max-width: 150px) 100vw, 150px">
                                                            </div>

                                                        </div>
                                                        <div class="content-wrapper">
                                                            <h5 class="title">
                                                                <a href="main/together-we-can-make-the-world-a-better-place/"
                                                                   class="title-animation-underline-fix"
                                                                   title="معًا يمكننا أن نجعل العالم مكانًا أفضل"><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">
                                                                            معًا يمكننا أن نجعل العالم مكانًا أفضل
                                                                             </font></font></a>
                                                            </h5>
                                                            <div class="meta-wrapper">
                                                                <div class="post-author-wrapper">
                                                                    <div class="author-wrapper">
                                                                        <div class="author-meta">
                                                                            <span class="by"><font
                                                                                    style="vertical-align: inherit;"><font
                                                                                        style="vertical-align: inherit;">بقلم </font></font></span>
                                                                            <a href="main/author/userdemo/"><font
                                                                                    style="vertical-align: inherit;"><font
                                                                                        style="vertical-align: inherit;">
                                                                                        إريك دوفال </font></font></a>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>

                                                </div>
                                                <div class="post-item">
                                                    <article
                                                        class="post-wrapper post-11 post type-post status-publish format-standard has-post-thumbnail hentry category-health category-technology">
                                                        <div class="image-outer-wrapper">
                                                            <div
                                                                class="post-counter-wrap counter-inside-image rivax-position-top-left">
                                                                <span class="post-counter"></span>
                                                            </div>
                                                            <div class="image-wrapper">
                                                                <a class="rivax-position-cover rivax-z-index-10"
                                                                   aria-label="ارتباط العنصر"
                                                                   href="main/if-someone-says-you-cant-do-it-do-it-twice/"></a>
                                                                <img width="150" height="150"
                                                                     src="main/wp-content/uploads/2022/10/5440925-1-150x150.jpg"
                                                                     class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                     alt="" decoding="async" loading="lazy"
                                                                     title="إذا قال شخص ما أنه لا يمكنك فعل ذلك ، فافعل ذلك مرتين"
                                                                     srcset="main/wp-content/uploads/2022/10/5440925-1-150x150.jpg 150w, main/wp-content/uploads/2022/10/5440925-1-300x300.jpg 300w, main/wp-content/uploads/2022/10/5440925-1-100x100.jpg 100w, main/wp-content/uploads/2022/10/5440925-1-450x450.jpg 450w, main/wp-content/uploads/2022/10/5440925-1-700x700.jpg 700w"
                                                                     sizes="(max-width: 150px) 100vw, 150px">
                                                            </div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <h5 class="title">
                                                                <a href="main/if-someone-says-you-cant-do-it-do-it-twice/"
                                                                   class="title-animation-underline-fix"
                                                                   title="إذا قال شخص ما أنه لا يمكنك فعل ذلك ، فافعل ذلك مرتين"><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">
                                                                            إذا قال شخص ما أنه لا يمكنك فعل ذلك ، فافعل
                                                                            ذلك مرتين </font></font></a>
                                                            </h5>
                                                            <div class="meta-wrapper">
                                                                <div class="post-author-wrapper">
                                                                    <div class="author-wrapper">
                                                                        <div class="author-meta">
                                                                            <span class="by"><font
                                                                                    style="vertical-align: inherit;"><font
                                                                                        style="vertical-align: inherit;">بقلم </font></font></span>
                                                                            <a href="main/author/userdemo/"><font
                                                                                    style="vertical-align: inherit;"><font
                                                                                        style="vertical-align: inherit;">
                                                                                        إريك دوفال </font></font></a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8d2dba6"
                            data-id="8d2dba6" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-d439888 rivax-align-left elementor-widget rivax-divider-heading-widget"
                                    data-id="d439888" data-element_type="widget"
                                    data-widget_type="rivax-divider-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-divider-heading-wrap">
                                            <div class="rivax-divider-heading divider-style-1 ">
                                                <div class="divider divider-1" style="position: relative;left: 350px"></div>
                                                <div class="divider divider-2" style="position: relative;left: 350px"></div>
                                                <h4 class="title">
                                             <span class="title-inner">
                                             <span class="title-text"><font style="vertical-align: inherit;"><font
                                                         style="vertical-align: inherit;">
                                             يبحث            </font></font></span>
                                             </span>
                                                </h4>
                                                <div class="divider divider-3" style="position: relative;left: 350px"></div>
                                                <div class="divider divider-4" style="position: relative;left: 350px"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-de885d5 elementor-widget elementor-widget-heading"
                                    data-id="de885d5" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default"><font
                                                style="vertical-align: inherit;"><font style="vertical-align: inherit;">البحث
                                                    عن شيء ما ...</font></font></p>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-b3c7bbe elementor-widget rivax-search-widget"
                                    data-id="b3c7bbe" data-element_type="widget"
                                    data-widget_type="rivax-search.default">
                                    <div class="elementor-widget-container">
                                        <div class="inline-search-form-wrapper">
                                            <form action="main/" method="get" class="inline-search-form">
                                                <input type="text" name="s" value="" class="search-field"
                                                        aria-label="يبحث" required="">
                                                <button type="submit" class="submit" aria-label="إرسال">
                                                    <i class="ri-search-2-line"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c2ad4dc elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c2ad4dc" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-21810f9"
                            data-id="21810f9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5fada5b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="5fada5b" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div
                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29596b0"
                                            data-id="29596b0" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-58d779d elementor-widget elementor-widget-heading"
                                                    data-id="58d779d" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <p class="elementor-heading-title elementor-size-default"><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">© 2022 ،   Oday A Muammer
                                                                    </font></font></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-582b41f"
                                            data-id="582b41f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-59c81fb elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="59c81fb" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <link rel="stylesheet"
                                                              href="main/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="{{route('about')}}"><span class="elementor-icon-list-text"><font
                                                                            style="vertical-align: inherit;"><font
                                                                                style="vertical-align: inherit;">من نحن</font></font></span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="{{route('contact.create')}}"><span class="elementor-icon-list-text"><font
                                                                            style="vertical-align: inherit;"><font
                                                                                style="vertical-align: inherit;">اتصل بنا</font></font></span>
                                                                </a>
                                                            </li>
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="#oPost"><span class="elementor-icon-list-text"><font
                                                                            style="vertical-align: inherit;"><font
                                                                                style="vertical-align: inherit;">المنشورات الحديثة</font></font></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
    </div>
</div>
<div id="back-to-top" class="show">
    <i class="ri-arrow-up-s-line"></i>
</div>
<div class="footer-canvas-menu-wrapper">
    <div class="footer-canvas-menu-bg"></div>
    <div class="footer-canvas-menu">
        <nav class="rivax-header-v-nav-wrapper">
            <ul id="menu-main-menu-3" class="rivax-header-v-nav">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-493">
                    <a href="#"><span><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">الرئيسية</font></font></span></a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1291">
                            <a href="{{route('index')}}"><span><font style="vertical-align: inherit;"><font
                                            style="vertical-align: inherit;">الصفحة الرئيسية افتراضي</font></font></span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-496 current_page_item menu-item-553">
                            <a href="{{route('index')}}" aria-current="page"><span><font
                                        style="vertical-align: inherit;"><font style="vertical-align: inherit;">الصفحة الرئيسية 1</font></font></span></a>
                        </li>

                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-158">
                    <a href="#"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">الصفحات</font></font></span></a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1242"><a
                                href="main/together-we-can-make-the-world-a-better-place/"><span><font
                                        style="vertical-align: inherit;"><font style="vertical-align: inherit;">معرض بوست</font></font></span></a>
                        </li>

                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1088"><a
                        href="{{route('about')}}"><span><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">معلومات عنا</font></font></span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1089"><a
                        href="{{route('contact.create')}}"><span><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">اتصل بنا</font></font></span></a></li>
            </ul>
        </nav>
    </div>
    <div class="footer-canvas-menu-btn-container">
        <div class="footer-canvas-menu-btn">
            <div class="inner">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">(function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<link rel="stylesheet" id="elementor-post-415-css" href="main/wp-content/uploads/elementor/css/post-415.css"
      media="all">
<script src="main/wp-content/themes/roxeen/assets/js/smooth-scroll.min.js" id="smooth-scroll-js"></script>
<script
    id="rivax-main-script-js-extra">var rivax_ajax_object = {"AjaxUrl": "https:\/\/demo.rivaxstudio.com\/roxeen\/main\/wp-admin\/admin-ajax.php"};</script>
<script src="main/wp-content/themes/roxeen/assets/js/main.js" id="rivax-main-script-js"></script>
<script src="main/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js"
        id="elementor-webpack-runtime-js"></script>
<script src="main/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"
        id="elementor-frontend-modules-js"></script>
<script src="main/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"
        id="elementor-waypoints-js"></script>
<script src="main/wp-includes/js/jquery/ui/core.min.js" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.9.0",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "a11y_improvements": true,
            "additional_custom_breakpoints": true,
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true,
            "kit-elements-defaults": true
        },
        "urls": {"assets": "https:\/\/demo.rivaxstudio.com\/roxeen\/main\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {"id": 496, "title": "Home%2001%20%E2%80%93%20Roxeen", "excerpt": "", "featuredImage": false}
    };</script>
<script src="main/wp-content/plugins/elementor/assets/js/frontend.min.js" id="elementor-frontend-js"></script>
<span id="elementor-device-mode" class="elementor-screen-only"></span><span id="elementor-device-mode"
                                                                            class="elementor-screen-only"></span>
<div id="goog-gt-tt" class="skiptranslate" dir="ltr">
    <div style="padding: 8px;">
        <div>
            <div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png"
                                   width="20" height="20" alt="Google Translate"></div>
        </div>
    </div>
    <div class="top" style="padding: 8px; float: left; width: 100%;">
        <h1 class="title gray">Original text</h1>
    </div>
    <div class="middle" style="padding: 8px;">
        <div class="original-text"></div>
    </div>
    <div class="bottom" style="padding: 8px;">
        <div class="activity-links"><span class="activity-link">Contribute a better translation</span></div>
        <div class="started-activity-container">
            <hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;">
            <div class="activity-root"></div>
        </div>
    </div>
    <div class="status-message" style="display: none;"></div>
</div>
<script src="main/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6"></script>
<div class="goog-te-spinner-pos">
    <div class="goog-te-spinner-animation">
        <svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
            <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33"
                    r="30"></circle>
        </svg>
    </div>
</div>

</body>
</html>
