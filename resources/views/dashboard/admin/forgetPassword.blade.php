
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ذاستوك</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Global stylesheets -->
    <link rel="stylesheet" media="screen" href="{{asset('ar/fonts/DroidKufi/EARLY_ACCESS.css')}}" type="text/css"/>

    {{--        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">--}}
    <link href="{{asset('dashboard_assets/css/global/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard_assets/css/global/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard_assets/css/global/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard_assets/css/global/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dashboard_assets/css/global/components.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('dashboard_assets/js/global/jquery.min.js')}}"></script>

    <script src="{{asset('dashboard_assets/js/styling/uniform.min.js')}}"></script>

    <script src="{{asset('dashboard_assets/js/login.js')}}"></script>
    {{--    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">--}}
<!-- /global stylesheets -->
    @yield('css')
    <style>
        .bg-danger {
            background-color: #e81d25 !important;
        }

        .btn-primary {
            background-color: #040707 !important;
        }
        body {
            /*font-family: 'DroidArabicKufiRegular' !important;*/
            font-family: "DroidArabicKufi-Regular", sans-serif, Arial !important;
            font-weight: normal;
            font-style: normal;
            font-size: 0.913rem;;
        }

        a.active {
            background-color: #6b6f6e !important;
        }
        .sidebar-dark .nav-sidebar > .nav-item-open > .nav-link:not(.disabled) {
            background-color: #6b6f6e !important;
        }

    </style>
</head>

<body>
<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" action="{{url('dashboard/admin/forget-password/post')}}" method="POST">
                @csrf()
                @include('dashboard.layouts.message')
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img class="text-slate-300 p-3 mb-3 mt-1"
                                 width="100%" src="{{asset('assets/images/logo/logo.svg')}}" alt="" height="200px">
                            <h5 class="mb-0">إستعادة كلمة المرور</h5>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required>
                            @error('email')
                            <span class="form-text text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">إرسال <i class="icon-circle-left2 ml-2"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="{{url('dashboard/admin/login')}}">العودة لتسجيل الدخول</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login form -->
        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>

</html>
