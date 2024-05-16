
@extends('dashboard.layouts.app')
<!-- ============ Body content start ============= -->
@section('content')
    <div class="page-header page-header-light">

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('dashboard/index')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> @lang('collection.home')</a>
                    <span class="breadcrumb-item active">الصفحة الشخصية</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
    @include('dashboard.layouts.message')

    <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">@lang('collection.add')</h5>
            </div>

            <div class="card-body">

                <form action="{{url('dashboard/admin/profile/post')}}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

                        <div class="form-group row mb-4">
                            <label for="username" class="col-form-label col-lg-2 font-weight-semibold {{ $errors->has('username') ? 'text-danger' : ''}} "> الإسم</label>
                            <div class="col-lg-10">
                                <input type="text" id="username" name="username" value="{{$data->username}}" class="form-control {{ ($errors->has('username')) ? 'border-danger' : ''}} ">
                                @error('username')
                                <span class="form-text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="email" class="col-form-label col-lg-2 font-weight-semibold {{ $errors->has('email') ? 'text-danger' : ''}} "> @lang('collection.email')</label>
                            <div class="col-lg-10">
                                <input type="text" id="email" name="email" value="{{$data->email}}" class="form-control {{ ($errors->has('email')) ? 'border-danger' : ''}} ">
                                @error('email')
                                <span class="form-text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="email" class="col-form-label col-lg-2 font-weight-semibold {{ $errors->has('email') ? 'text-danger' : ''}} "> الصلاحية </label>
                            <div class="col-lg-10">
                                <input type="text" value="{{$role}}" class="form-control" readonly disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-4">
                            <label for="old_password" class="col-form-label col-lg-2 font-weight-semibold {{ $errors->has('old_password') ? 'text-danger' : ''}} "> كلمة المرور القديمة</label>
                            <div class="col-lg-10">
                                <input type="password" id="old_password" name="old_password" class="form-control {{ ($errors->has('old_password')) ? 'border-danger' : ''}} ">
                                @error('old_password')
                                <span class="form-text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-form-label col-lg-2 font-weight-semibold {{ $errors->has('password') ? 'text-danger' : ''}} "> كلمة المرور</label>
                            <div class="col-lg-10">
                                <input type="password" id="password" name="password"  class="form-control {{ ($errors->has('password')) ? 'border-danger' : ''}} ">
                                @error('password')
                                <span class="form-text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password_confirmation" class="col-form-label col-lg-2 font-weight-semibold {{ $errors->has('password_confirmation') ? 'text-danger' : ''}} "> تأكيد كلمة المرور</label>
                            <div class="col-lg-10">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control {{ ($errors->has('password_confirmation')) ? 'border-danger' : ''}} ">
                                @error('password_confirmation')
                                <span class="form-text text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">@lang('collection.submit') <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form inputs -->

    </div>

@endsection
<!-- ============ Body content End ============= -->
@section('js')
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $("#change-pwd").validate({
            // Specify the validation rules
            rules: {
                old_password: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength:8,
                },
                password_confirmation: {
                    required: true,
                },

            },
            // Specify the validation error messages
            messages: {
                old_password: {
                    required: 'يرجى ادخال كلمة المرور القديمة ',
                },
                password: {
                    required: 'يرجى ادخال كلمة المرور الجديدة ',
                    minlength:'كلمة المرور يجب أن تكون 8 حروف على الأقل',
                },
                password_confirmation: {
                    required: 'يرجى تأكيد كلمة المرور الجديدة ',
                },
            },
            submitHandler: function (form) {
                form.submit();
            },
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
            },
            errorElement: 'span',
            errorClass: 'text-danger',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else if (element.closest('.form-group').find('.cke').length) {
                    error.appendTo(element.closest('.form-group'));
                } else {
                    error.insertAfter(element);
                }
            }
        });
    </script>
    @endsection

