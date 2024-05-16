@extends('dashboard.layout.master')
@section('page_name','Categories List')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left">

                    <a href="{{url('dashboard/admins/create')}}" class="btn btn-danger font-weight-bold py-3 px-6">
                        <i class="la la-plus"></i>
                        Add Admin
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
                                        <th>Name</th>
                                        <th>Email</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $admin)
                                        <tr>
                                            <td>{{$admin->id}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>

                                            <td>
                                                <form class="myform"  id="{{$admin->id}}"  method="post"  action="{{route('admins.destroy',$admin->id)}}">
                                                    @csrf
                                                    {!! method_field('Delete') !!}
                                                    <a href="{{route('admins.edit',$admin->id)}}" class="btn btn-icon btn-sm btn-success"><i class="la la-edit"></i></a>

                                                    @if(Auth::guard('admin')->user()->id!=$admin->id)
                                                    <button  class="btn btn-icon btn-sm btn-danger"><i class="la la-trash"></i></button>

                                                        @endif
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
