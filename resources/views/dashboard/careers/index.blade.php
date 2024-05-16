@extends('dashboard.layouts.master')
@section('page_name','careers List')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">

            <div class="col-md-2">
                <a href="{{route('careers.create')}}" class="btn btn-primary font-weight-bold py-3  mb-7">
                    <i class="la la-plus"></i>
                    Add New Career
                </a>
            </div>

        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-block">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="indexTable" class="table table-bordered table-striped datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>العنوان(ar)</th>
                                    <th>الخبرة(ar)</th>
                                    <th>الموقع(ar)</th>
                                    <th>الوصف(ar)</th>
                                    <th>title(en)</th>
                                    <th>experience(en)</th>
                                    <th>location(en)</th>
                                    <th>description(en)</th>


                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($careers as $career)
                                <tr>
                                    <td>{{$career->id}}</td>
                                    <td>{{$career->translate('ar')->title}}</td>
                                    <td>{{$career->translate('ar')->experience}}</td>
                                    <td>{{$career->translate('ar')->location}}</td>
                                    <td>{!!$career->translate('ar')->description!!}</td>
                                    <td>{{$career->translate('en')->title}}</td>
                                    <td>{{$career->translate('en')->experience}}</td>
                                    <td>{{$career->translate('en')->location}}</td>
                                    <td>{!!$career->translate('en')->description!!}</td>

                                   <td>
                                        <form class="myform"  id="{{$career->id}}"  method="post"  action="{{route('careers.destroy',$career->id)}}">
                                            @csrf
                                        {!! method_field('Delete') !!}
                                          <a href="{{route('careers.edit',$career->id)}}" class="btn btn-icon btn-sm btn-success"><i class="la la-edit"></i></a>
                                        <button  class="btn btn-icon btn-sm btn-danger"><i class="la la-trash"></i></button>
                                        </form>

                                   </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$careers->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->



<script>
    $(document).ready(function() {

        $('.myform').submit(function() {
            if (confirm('Are you sure?')) {

                return true;
            }
            else
            {
                return false;
            }

            // your code here
        });
    });
</script>
@endsection
