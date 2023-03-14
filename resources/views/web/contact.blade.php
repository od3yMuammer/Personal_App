@extends('web.layouts.parent')

@section('title')
    اتصل بنـا
@endsection

@section('content')
    <main class="main-wrapper">
        <div class="content-wrapper">
            <div data-elementor-type="wp-page" data-elementor-id="1058" class="elementor elementor-1058">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-3eb9268 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3eb9268" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-0cca250"
                            data-id="0cca250" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-59078bf rivax-align-center elementor-widget rivax-divider-heading-widget"
                                    data-id="59078bf" data-element_type="widget"
                                    data-widget_type="rivax-divider-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-divider-heading-wrap">
                                            <div class="rivax-divider-heading divider-style-17 ">
                                                <div class="divider divider-1"></div>
                                                <div class="divider divider-2"></div>
                                                <h2 class="title">
<span class="title-inner">
<span class="title-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
أرسل لنا رسالة            </font></font></span>
</span></h2>
                                                <div class="divider divider-3"></div>
                                                <div class="divider divider-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-afaf8ff rivax-align-left elementor-widget rivax-divider-heading-widget"
                                    data-id="afaf8ff" data-element_type="widget"
                                    data-widget_type="rivax-divider-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="rivax-divider-heading-wrap">
                                            <div class="rivax-divider-heading divider-style-1 ">
                                                <div class="divider divider-1"></div>
                                                <div class="divider divider-2"></div>
                                                <h2 class="title">
<span class="title-inner">
<span class="title-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
لنتحدث عن كل شيء!            </font></font></span>
</span></h2>
                                                <div class="divider divider-3"></div>
                                                <div class="divider divider-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-ca1533c elementor-widget elementor-widget-text-editor"
                                    data-id="ca1533c" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <style>/*! elementor - v3.9.0 - 06-12-2022 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                background-color: #818a91;
                                                color: #fff
                                            }

                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                color: #818a91;
                                                border: 3px solid;
                                                background-color: transparent
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                margin-top: 8px
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                display: inline-block
                                            }</style>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-88c7d53 fluentform-widget-submit-button-custom elementor-widget elementor-widget-fluent-form-widget"
                                    data-id="88c7d53" data-element_type="widget"
                                    data-widget_type="fluent-form-widget.default">
                                    <div class="elementor-widget-container">

                                        <div
                                            class="fluentform-widget-wrapper hide-fluent-form-labels fluentform-widget-align-default">
                                            <div class="fluentform fluentform_wrapper_1">

                                                @if (count($errors) > 0)
                                                    <script>
                                                        toastr.error("هناك خطأ ما في الحقول المدخلة");
                                                    </script>

                                                    <div class="alert alert-danger text-center"
                                                         role="alert">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                @if ($message = Session::get('success'))
                                                    <div class="alert alert-success text-center"
                                                         role="alert">
                                                        تم إرسال رسالتك بنجاح!
                                                    </div>
                                                @endif

                                                @if ($message = Session::get('danger'))
                                                    <div class="alert alert-success text-center"
                                                         role="alert">
                                                        لم يتم إرسال الرسالة!
                                                    </div>
                                                @endif

{{--                                                <form action="{{ route('contact.store') }}"--}}
{{--                                                      method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-xl-12 text-start">--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <label for="exampleFormControlInput1"--}}
{{--                                                                       class="form-label">الاسم</label>--}}
{{--                                                                <input type="text"--}}
{{--                                                                       class="form-control @error('sender_name') is-invalid @enderror "--}}
{{--                                                                       id="exampleFormControlInput1"--}}
{{--                                                                       name="sender_name"--}}
{{--                                                                       value="{{ old('sender_name') }}"--}}
{{--                                                                       placeholder="أدخل الاسم كاملًا">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <label for="exampleFormControlInput2"--}}
{{--                                                                       class="form-label">رقم--}}
{{--                                                                    المحمول</label>--}}
{{--                                                                <input type="nubmer" min="11111"--}}
{{--                                                                       class="form-control @error('sender_phone') is-invalid @enderror "--}}
{{--                                                                       id="exampleFormControlInput2"--}}
{{--                                                                       name="sender_phone"--}}
{{--                                                                       value="{{ old('sender_phone') }}"--}}
{{--                                                                       placeholder="أدخل رقم المحمول الخاص بك">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <label for="exampleFormControlInput3"--}}
{{--                                                                       class="form-label">البريد--}}
{{--                                                                    الإلكتروني</label>--}}
{{--                                                                <input type="email"--}}
{{--                                                                       class="form-control @error('sender_email') is-invalid @enderror "--}}
{{--                                                                       id="exampleFormControlInput3"--}}
{{--                                                                       name="sender_email"--}}
{{--                                                                       value="{{ old('sender_email') }}"--}}
{{--                                                                       placeholder="على سبيل المثال: name@example.com">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <label--}}
{{--                                                                    for="exampleFormControlTextarea1"--}}
{{--                                                                    class="form-label">نص--}}
{{--                                                                    الرسالة</label>--}}
{{--                                                                <textarea class="form-control @error('message_text') is-invalid @enderror " id="exampleFormControlTextarea1"--}}
{{--                                                                          rows="3" name="message_text" placeholder="اكتب نص الرسالة هنا..">{{ old('message_text') }}</textarea>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="mb-3">--}}
{{--                                                                <input type="submit"--}}
{{--                                                                       class="btn btn-success"--}}
{{--                                                                       value="أرسل الرسالة">--}}
{{--                                                                <input type="reset"--}}
{{--                                                                       class="btn btn-danger"--}}
{{--                                                                       value="تفريغ الحقول">--}}
{{--                                                            </div>--}}

{{--                                                            <br>--}}
{{--                                                            <br>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}



{{--                                                </form>--}}


                                                    <form action="{{ route('contact.store') }}" method="POST" class="w-75">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">الاسم</label>
                                                            <input type="text" class="form-control @error('sender_name') is-invalid @enderror " id="exampleFormControlInput1" placeholder="ادخل الاسم كاملا"    name="sender_name"
                                                                   value="{{ old('sender_name') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">رقم المحمول</label>
                                                            <input type="num" class="form-control @error('sender_phone') is-invalid @enderror "
                                                                   id="exampleFormControlInput1" placeholder="ادخل رقم المحمول" name="sender_phone"
                                                                   value="{{ old('sender_phone') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">البريد الالكتروني</label>
                                                            <input type="email"  class="form-control @error('sender_email') is-invalid @enderror "
                                                                   id="exampleFormControlInput1" placeholder="ادخل بريدك الالكتروني"  name="sender_email"
                                                                   value="{{ old('sender_email') }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">الرسالة</label>
                                                            <textarea class="form-control @error('message_text') is-invalid @enderror " name="message_text" id="exampleFormControlTextarea1" rows="3" placeholder="ادخل نص الرسالة هنا"> {{ old('message_text') }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="submit"
                                                                   class="btn btn-success"
                                                                   value="أرسل الرسالة">
                                                            <input type="reset"
                                                                   class="btn btn-danger"
                                                                   value="تفريغ الحقول">
                                                        </div>
                                                    </form>


                                                <div id="fluentform_1_errors"
                                                     class="ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors"></div>
                                            </div>
                                            <script type="text/javascript">window.fluent_form_ff_form_instance_1_1 = {
                                                    "id": "1",
                                                    "settings": {
                                                        "layout": {
                                                            "labelPlacement": "top",
                                                            "helpMessagePlacement": "with_label",
                                                            "errorMessagePlacement": "inline",
                                                            "cssClassName": "",
                                                            "asteriskPlacement": "asterisk-right"
                                                        }, "restrictions": {"denyEmptySubmission": {"enabled": false}}
                                                    },
                                                    "form_instance": "ff_form_instance_1_1",
                                                    "form_id_selector": "fluentform_1",
                                                    "rules": {
                                                        "names[first_name]": {
                                                            "required": {
                                                                "value": false,
                                                                "message": "This field is required"
                                                            }
                                                        },
                                                        "names[middle_name]": {
                                                            "required": {
                                                                "value": false,
                                                                "message": "This field is required"
                                                            }
                                                        },
                                                        "names[last_name]": {
                                                            "required": {
                                                                "value": false,
                                                                "message": "This field is required"
                                                            }
                                                        },
                                                        "email": {
                                                            "required": {
                                                                "value": true,
                                                                "message": "This field is required"
                                                            },
                                                            "email": {
                                                                "value": true,
                                                                "message": "This field must contain a valid email"
                                                            }
                                                        },
                                                        "subject": {
                                                            "required": {
                                                                "value": false,
                                                                "message": "This field is required"
                                                            }
                                                        },
                                                        "message": {
                                                            "required": {
                                                                "value": true,
                                                                "message": "This field is required"
                                                            }
                                                        }
                                                    }
                                                };</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-41f103e"
                            data-id="41f103e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-c6581b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="c6581b4" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-40b5868"
                                            data-id="40b5868" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-f3799ee rivax-align-center elementor-widget rivax-divider-heading-widget"
                                                    data-id="f3799ee" data-element_type="widget"
                                                    data-widget_type="rivax-divider-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="rivax-divider-heading-wrap">
                                                            <div class="rivax-divider-heading divider-style-1 ">
                                                                <div class="divider divider-1"></div>
                                                                <div class="divider divider-2"></div>
                                                                <h3 class="title">
<span class="title-inner">
<span class="title-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
اتصل بنا            </font></font></span>
</span></h3>
                                                                <div class="divider divider-3"></div>
                                                                <div class="divider divider-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-c48a657 elementor-widget elementor-widget-text-editor"
                                                    data-id="c48a657" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container"><p><font
                                                                style="vertical-align: inherit;"><font
                                                                    style="vertical-align: inherit;">لا تتردد في الاتصال
                                                                    بي مع أي سؤال أو مخاوف.</font></font></p></div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-e936079 social-layout-inline official-icon-color-yes social-icon-left social-subtitle-right social-move-up-item elementor-widget rivax-social-icons-widget"
                                                    data-id="e936079" data-element_type="widget"
                                                    data-widget_type="rivax-social-icons.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="rivax-social-icons">
                                                            <div class="social-item telegram">
                                                                <div class="social-icon">
                                                                    <span class="icon"><i class="ri-telegram-fill"></i></span>
                                                                </div>
                                                                <a class="rivax-position-cover" href="#"
                                                                   title="برقية"></a></div>
                                                            <div class="social-item whatsapp">
                                                                <div class="social-icon">
                                                                    <span class="icon"><i class="ri-whatsapp-line"></i></span>
                                                                </div>
                                                                <a class="rivax-position-cover" href="#"
                                                                   title="ال WhatsApp"></a></div>
                                                            <div class="social-item instagram">
                                                                <div class="social-icon">
                                                                    <span class="icon"><i class="ri-instagram-line"></i></span>
                                                                </div>
                                                                <a class="rivax-position-cover" href="#"
                                                                   title="انستغرام"></a></div>
                                                            <div class="social-item youtube">
                                                                <div class="social-icon">
                                                                    <span class="icon"><i
                                                                            class="ri-youtube-fill"></i></span></div>
                                                                <a class="rivax-position-cover" href="#"
                                                                   title="موقع YouTube"></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-cc87be1 elementor-widget-divider--separator-type-pattern elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="cc87be1" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <style>/*! elementor - v3.9.0 - 06-12-2022 */
                                                            .elementor-widget-divider {
                                                                --divider-border-style: none;
                                                                --divider-border-width: 1px;
                                                                --divider-color: #2c2c2c;
                                                                --divider-icon-size: 20px;
                                                                --divider-element-spacing: 10px;
                                                                --divider-pattern-height: 24px;
                                                                --divider-pattern-size: 20px;
                                                                --divider-pattern-url: none;
                                                                --divider-pattern-repeat: repeat-x
                                                            }

                                                            .elementor-widget-divider .elementor-divider {
                                                                display: flex
                                                            }

                                                            .elementor-widget-divider .elementor-divider__text {
                                                                font-size: 15px;
                                                                line-height: 1;
                                                                max-width: 95%
                                                            }

                                                            .elementor-widget-divider .elementor-divider__element {
                                                                margin: 0 var(--divider-element-spacing);
                                                                flex-shrink: 0
                                                            }

                                                            .elementor-widget-divider .elementor-icon {
                                                                font-size: var(--divider-icon-size)
                                                            }

                                                            .elementor-widget-divider .elementor-divider-separator {
                                                                display: flex;
                                                                margin: 0;
                                                                direction: ltr
                                                            }

                                                            .elementor-widget-divider--view-line_icon .elementor-divider-separator, .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                                align-items: center
                                                            }

                                                            .elementor-widget-divider--view-line_icon .elementor-divider-separator:after, .elementor-widget-divider--view-line_icon .elementor-divider-separator:before, .elementor-widget-divider--view-line_text .elementor-divider-separator:after, .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                                display: block;
                                                                content: "";
                                                                border-bottom: 0;
                                                                flex-grow: 1;
                                                                border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                            }

                                                            .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator > .elementor-divider__svg:first-of-type {
                                                                flex-grow: 0;
                                                                flex-shrink: 100
                                                            }

                                                            .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                                content: none
                                                            }

                                                            .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                                margin-left: 0
                                                            }

                                                            .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator > .elementor-divider__svg:last-of-type {
                                                                flex-grow: 0;
                                                                flex-shrink: 100
                                                            }

                                                            .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                                content: none
                                                            }

                                                            .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                                margin-right: 0
                                                            }

                                                            .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                                border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                            }

                                                            .elementor-widget-divider--separator-type-pattern {
                                                                --divider-border-style: none
                                                            }

                                                            .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator, .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after, .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before, .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                                width: 100%;
                                                                min-height: var(--divider-pattern-height);
                                                                -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                                mask-size: var(--divider-pattern-size) 100%;
                                                                -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                                mask-repeat: var(--divider-pattern-repeat);
                                                                background-color: var(--divider-color);
                                                                -webkit-mask-image: var(--divider-pattern-url);
                                                                mask-image: var(--divider-pattern-url)
                                                            }

                                                            .elementor-widget-divider--no-spacing {
                                                                --divider-pattern-size: auto
                                                            }

                                                            .elementor-widget-divider--bg-round {
                                                                --divider-pattern-repeat: round
                                                            }

                                                            .rtl .elementor-widget-divider .elementor-divider__text {
                                                                direction: rtl
                                                            }

                                                            .e-con-inner > .elementor-widget-divider, .e-con > .elementor-widget-divider {
                                                                width: var(--container-widget-width);
                                                                --flex-grow: var(--container-widget-flex-grow)
                                                            }</style>
                                                        <div class="elementor-divider"
                                                             style="--divider-pattern-url: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpath d='M0,6c6,0,6,13,12,13S18,6,24,6'/%3E%3C/svg%3E&quot;);">
<span class="elementor-divider-separator">
</span></div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-364b253 rivax-align-center elementor-widget rivax-divider-heading-widget"
                                                    data-id="364b253" data-element_type="widget"
                                                    data-widget_type="rivax-divider-heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="rivax-divider-heading-wrap">
                                                            <div class="rivax-divider-heading divider-style-1 ">
                                                                <div class="divider divider-1"></div>
                                                                <div class="divider divider-2"></div>
                                                                <h3 class="title">
<span class="title-inner">
<span class="title-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
ابقى على تواصل            </font></font></span>
</span></h3>
                                                                <div class="divider divider-3"></div>
                                                                <div class="divider divider-4"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-f7c7a3a elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="f7c7a3a" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <link rel="stylesheet"
                                                              href="https://demo.rivaxstudio.com/roxeen/main/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
<i aria-hidden="true" class="far fa-map"></i>				</span></div>
                                                            <div class="elementor-icon-box-content"><h5
                                                                    class="elementor-icon-box-title">
<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
عنوان					</font></font></span></h5>
                                                                <p class="elementor-icon-box-description"><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">
                                                                            ديتر ويلهاوزن ، D-11179 برلين</font></font>
                                                                </p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-584f17b elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="584f17b" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
<i aria-hidden="true" class="fas fa-phone-volume"></i>				</span></div>
                                                            <div class="elementor-icon-box-content"><h5
                                                                    class="elementor-icon-box-title">
<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
لنتحدث					</font></font></span></h5>
                                                                <p class="elementor-icon-box-description"><font
                                                                        style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">
                                                                            +49 241 241</font></font></p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-cd465f2 elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                    data-id="cd465f2" data-element_type="widget"
                                                    data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
<i aria-hidden="true" class="far fa-envelope"></i>				</span></div>
                                                            <div class="elementor-icon-box-content"><h5
                                                                    class="elementor-icon-box-title">
<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
الدعم العام					</font></font></span></h5>
                                                                <p class="elementor-icon-box-description">
                                                                    <font style="vertical-align: inherit;"><font
                                                                            style="vertical-align: inherit;">demo@rivaxstudio.com</font></font>
                                                                </p></div>
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
                </section>
            </div>
        </div>
    </main>
@endsection
