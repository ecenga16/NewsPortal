@extends('admin.admin_dashboard')
@section('admin')

@php
$active_news = App\Models\Posts::where('status', 1)->get();
$inactive_news = App\Models\Posts::where('status', 0)->get();
$breaking_news = App\Models\Posts::where('breaking_news', 1)->get();
@endphp

<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{route('add.post')}}" class="btn btn-blue waves-effect waves-light">Add Post</a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Posts : {{$totalNewsCount}}</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                    <i class="fe-heart font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span>{{$totalNewsCount}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">All Posts</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                    <i class="fe-thumbs-up font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span>{{count($active_news)}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Active News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                    <i class="fe-thumbs-down font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span>{{count($inactive_news)}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Inactive News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                    <i class="fe-eye font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span>{{count($breaking_news)}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Breaking News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>

        <div class="col-sm-6 col-md-12">
            <!-- Data Table -->
            <div class="card">
                <div class="card-body p-0 p-md-3">
                    <div class="table-responsive">
                        <table class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th class="d-none d-md-table-cell">Category</th>
                                    <th class="d-none d-md-table-cell">User</th>
                                    <th class="d-none d-md-table-cell">Date</th>
                                    <th class="d-none d-md-table-cell">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_news as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset($item['news_image']) }}" class="img-fluid"
                                            style="max-width: 50px; height: auto;">
                                    </td>
                                    <td>{{ Str::limit($item['news_title'], 40) }}</td>
                                    <td class="d-none d-md-table-cell">
                                        {{ optional($item['category'])['category_name'] }}
                                    </td>
                                    <td class="d-none d-md-table-cell">{{ $item['user']['name'] }}</td>
                                    <td class="d-none d-md-table-cell">{{ $item['post_date'] }}</td>
                                    <td class="d-none d-md-table-cell">
                                        @if($item->status == '1')
                                        <span class="badge badge-pill bg-success">Active</span>
                                        @else
                                        <span class="badge badge-pill bg-danger">InActive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.post',$item->id) }}"
                                            class="btn btn-primary rounded-pill waves-effect waves-light">
                                            Edit
                                        </a>
                                        <a href="{{ route('post.delete',$item->id) }}"
                                            class="btn btn-danger rounded-pill waves-effect waves-light">
                                            Delete
                                        </a>
                                        @if($item['status'] == 1)
                                        <a href="{{ route('inactive.post',$item->id) }}"
                                            class="btn btn-primary rounded-pill waves-effect waves-light"
                                            title="Inactive">
                                            <i class="fa-solid fa-thumbs-up"></i>
                                        </a>
                                        @else
                                        <a href="{{ route('active.post',$item->id) }}"
                                            class="btn btn-primary rounded-pill waves-effect waves-light"
                                            title="Active">
                                            <i class="fa-solid fa-thumbs-down"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-11">
                            {{ $all_news->links('backend.posts.pagination') }}
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div> <!-- container -->
</div> <!-- content -->

@endsection