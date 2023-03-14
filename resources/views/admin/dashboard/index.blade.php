@extends('admin.layouts.app')

@section('title')
لوحة التحكم
@endsection

@section('content')
<br>
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Contacts App- View Contact-->
                <div class="row">
                    <!--begin::Content-->
                    <div class="col-xl-12">
                        <!--begin::Contacts-->
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!--begin::Card body-->
                            <div class="card-body pt-5">

                                <!--begin:Form-->
                                <h1 class="text-warning">Hello Oday Muammer</h1>
                                <!--end::Form-->

                            </div>

                            <a href="{{route('admin.posts.index')}}" class="btn btn-success w-25">المنشورات</a>
                            <br>
                            <br>
                            <br>
                            <br>
                            <a href="{{route('admin.sections.index')}}" class="btn btn-warning w-25">الاقسام</a>
{{--                            <!--end::Card body-->--}}

                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <a href="{{route('admin.settings.index')}}" class="btn btn-primary w-25">الاعدادات</a>
                        </div>
                        <!--end::Contacts-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Contacts App- View Contact-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
@endsection
