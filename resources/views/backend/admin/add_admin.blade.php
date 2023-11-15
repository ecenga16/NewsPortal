@extends('admin.admin_dashboard')
@section('admin')

<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Admin</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        


                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('admin.store')}}" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputEmail4" class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Add Category">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputEmail4" class="form-label">Email</label>
                                                    <input type="text" name="email" class="form-control" placeholder="Add Category">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputEmail4" class="form-label">Role</label>
                                                    <input type="text" name="role" class="form-control" value="admin">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="inputEmail4" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        
                        
                    </div> <!-- container -->

                </div> <!-- content -->




@endsection