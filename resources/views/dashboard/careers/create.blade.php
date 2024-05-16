@extends('dashboard.layouts.master')
@section('page_name','New Career')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">

        </div>
        <div class="content-body">

            <div class="card">
                <div class="card-block">
                    <div class="card-body">
                        <h1 style="color: #0a6aa1;text-align: center">NEW JOB</h1>
                        <form method="post" enctype="multipart/form-data" action="{{route('careers.store')}}">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="font-weight: bold;"   >Title</label>
                                        <input type="text"  required name="en[title]" value="{{old('ar.title')}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6" style="direction: rtl;">
                                    <div class="form-group">
                                        <label  style="font-weight: bold;"  >العنوان</label>
                                        <input type="text"  required name="ar[title]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5">
                                    <div class="form-group">
                                        <label style="font-weight: bold;"   >Location</label>
                                        <input type="text"  required name="en[location]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5" style="direction: rtl;">
                                    <div class="form-group">
                                        <label  style="font-weight: bold;"  >الموقع</label>
                                        <input type="text"  required name="ar[location]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5" >
                                    <div class="form-group">
                                        <label style="font-weight: bold;"   >Experience</label>
                                        <input type="text"  required name="en[experience]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5" style="direction: rtl;">
                                    <div class="form-group">
                                        <label  style="font-weight: bold;"  >الخبرة</label>
                                        <input type="text"  required name="ar[experience]" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-6 mt-5">
                                    <div class="form-group">
                                        <label style="font-weight: bold;"> Description</label>
                                        <textarea  rows="10"  required name="en[description]" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5" style="direction: rtl;">
                                    <div class="form-group">
                                        <label style="font-weight: bold;"> الوصف</label>
                                        <textarea  rows="10"  required name="ar[description]" class="form-control"></textarea>
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
    CKEDITOR.replace( 'ar[description]' );
    CKEDITOR.replace( 'en[description]' );
</script>

@endsection
