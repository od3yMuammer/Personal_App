@extends('admin.layouts.app')
@section('title')
    عرض المنشورات المضاف
@endsection
@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
@endsection
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">عرض
                        المنشورات المضاف</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('admin.dashboard.index')}}" class="text-muted text-hover-primary">الرئيسية</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.posts.index') }}" class="text-muted text-hover-primary">المنشورات
                                المضاف</a>

                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-sm fw-bold btn-primary">منشور جديد</a>
                    {{-- <a href="{{ route('admin.posts.trash') }}" class="btn btn-sm fw-bold btn-danger">سلة المهملات</a> --}}
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
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
                            <!--begin::Card header-->
                            <div class="card-header pt-7" id="kt_chat_contacts_header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                    <span class="svg-icon svg-icon-1 me-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                                fill="currentColor"></path>
                                            <path opacity="0.3"
                                                d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <h2>المنشورات المضاف</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-5">
                                <style>
                                    table.dataTable thead th,
                                    table.dataTable thead td,
                                    table.dataTable tfoot th,
                                    table.dataTable tfoot td {
                                        text-align: right;
                                    }
                                </style>





                                <table id="kt_datatable_dom_positioning"
                                    class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                    <thead>
                                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                                            <th>متسلسل</th>
                                            <th>اسم المنشور</th>
                                            <th>القسم</th>
                                            <th>صورة المنشور</th>
                                            <th>تاريخ الإضافة</th>
                                            <th>الحالة</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->section->name }}</td>
                                                <td><img src="{{ url('post_images/'.$post->image) }}" style="width: 50px; height: 50px; object-fit: cover;"></td>                                                <td>{{ $post->created_at }}</td>
                                                <td>
                                                    @if ($post->deleted_at == null)
                                                        <span class="badge bg-success">نشط</span>
                                                    @else
                                                        <span class="badge bg-danger">معطل</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    @if (!$post->trashed())
                                                        <a class="btn btn-info"
                                                            href="{{ route('admin.posts.edit', $post->id) }}">تعديل</a>
                                                    @else
                                                        <form method="post"
                                                            action="{{ route('admin.posts.forceDelete', $post->id) }}">
                                                            @csrf
                                                            @method('HEAD')
                                                            <input type="submit"
                                                                class="btn btn-xs btn-danger btn-flat show_confirm"
                                                                href="{{ route('admin.posts.forceDelete', $post->id) }}"
                                                                value="حذف نهائي">
                                                        </form>
                                                    @endif

                                                </td>
                                                <td>
                                                    @if ($post->trashed())
                                                        <a href="{{ route('admin.posts.restore', $post->id) }}"
                                                            class="btn btn-success" onclick="notify()">استعادة</a>
                                                    @else
                                                        <form method="post"
                                                            action="{{ route('admin.posts.destroy', $post->id) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit"
                                                                class="btn btn-xs btn-danger btn-flat show_confirm"
                                                                href="{{ route('admin.posts.destroy', $post->id) }}"
                                                                value="حذف">
                                                        </form>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>












                            </div>
                            <!--end::Card body-->
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

@section('scripts')
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toastr-top-center",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    <script type="text/javascript">
        $("#kt_datatable_dom_positioning").DataTable({
            "post": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `هل أنت متأكد أنك تريد حذف العنصر؟`,
                    text: "بعد حذف العنصر لن تتمكن من الوصول إليه مجددًا",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        toastr.success("تم حذف العنصر بنجاح");
                        form.submit();

                    }
                });
        });
    </script>
    <script type="text/javascript">
        function notify() {
            toastr.success("تمت عملية استعادة العنصر بنجاح");

        }
    </script>
@endsection
