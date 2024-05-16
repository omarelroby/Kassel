@extends('dashboard.layout.master')
@section('page_name','Add Admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-block">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="{{route('admins.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text"  required name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" required name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" id="password" required name="password"  class="form-control {{ ($errors->has('password')) ? 'border-danger' : ''}} ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" required id="password_confirmation" name="password_confirmation" class="form-control {{ ($errors->has('password_confirmation')) ? 'border-danger' : ''}} ">
                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <button type="submit"
                                                class="btn btn-primary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script src="https://cdn.ckeditor.com/4.14.0/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>

@endsection
