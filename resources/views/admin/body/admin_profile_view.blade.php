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

                                        <li class="breadcrumb-item active">Admin Profile</li>
                                    </ol>
                                    </div>
                                    <h4 class="page-title">Admin Profile</h4>
                                </div>
                            </div>
                        </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-4 col-xl-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{(!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo): url('upload/no-image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                                    alt="profile-image">

                                    <h4 class="mb-0">{{ strtoupper($adminData->name) }}</h4>
                                    <br>
                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                                    <div class="text-start mt-3">
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ strtoupper($adminData->name) }}</span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email}}</span></p>
                                    </div>                                    


                                </div>                                 
                            </div> <!-- end card -->



                        </div> <!-- end col-->

                        <div class="col-lg-8 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                        <div class="tab-pane" id="settings">
                                            <form>
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Admin Personal Info</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="lastname" class="form-label">User Name</label>
                                                                <input type="text" class="form-control" id="lastname" value="{{$adminData->name}}">
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="lastname" class="form-label">Admin Photo</label>
                                                                <input type="file" class="form-control" name="photo" id="example-fileinput">
                                                            </div>
                                                        </div> <!-- end col -->
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="lastname" class="form-label"></label>
                                                                <img src="{{(!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo): url('upload/no-image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                                            </div>
                                                        </div>
                                                    </div> <!-- end row -->


                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div> <!-- end tab-content -->
                                </div>
                            </div> <!-- end card-->

                        </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->



@endsection