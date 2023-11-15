@extends('admin.admin_dashboard')
@section('admin') 

 <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <a href="{{route('add.admin')}}" class="btn btn-blue waves-effect waves-light">Add Admin</a>
                </ol>
            </div>
                                    <h4 class="page-title">All Admins</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">


        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th> 
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>


            <tbody>
            	@foreach($all_admins as $key=> $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role }}</td>
                    <td>
                        @if($item->status == 'active')
                            <span class="badge badge-pill bg-success">Active</span>
                            @else
                                <span class="badge badge-pill bg-danger">InActive</span>
                        @endif
                    </td> 
                    <td>
                    <a href="{{ route('edit.admin',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

                    <a href="{{route('delete.admin',$item->id)}}" class="btn btn-danger rounded-pill waves-effect waves-light">Delete</a>

                    </td> 
                </tr>
                @endforeach

            </tbody>
        </table>

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->



                    </div> <!-- container -->

                </div> <!-- content -->

@endsection