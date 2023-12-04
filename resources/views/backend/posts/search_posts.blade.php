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

                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Image</th>
                                                    <th>Title</th> 
                                                    <th>Category</th>
                                                    <th>User</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($news as $key => $item)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td><img src="{{asset($item['news_image'])}}" style="width:50px; height:50px;"></td>
                                                    <td>{{ Str::limit($item['news_title'], 40) }}</td>
                                                    <td>{{ optional($item['category'])['category_name'] }}</td>
                                                    <td>{{ $item['user']['name'] }}</td>
                                                    <td>{{ $item['post_date'] }}</td>
                                                    <td>
                                                        @if($item->status == '1')
                                                            <span class="badge badge-pill bg-success">Active</span>
                                                            @else
                                                                <span class="badge badge-pill bg-danger">InActive</span>
                                                        @endif
                                                    </td> 
                                                    <td>
                                                    <a href="{{ route('edit.post',$item->id) }}" class="btn btn-primary rounded-pill waves-effect waves-light">Edit</a>

                                                    <a href="{{route('post.delete',$item->id)}}" class="btn btn-danger rounded-pill waves-effect waves-light">Delete</a>
                                                    
                                                    @if($item['status'] == 1)
                                                        
                                                            <a href="{{route('inactive.post',$item->id)}}" class="btn btn-primary rounded-pill waves-effect waves-light" title="Inactive"><i class="fa-solid fa-thumbs-up"></i></a>
                                                    
                                                        @else
                                                    
                                                            <a href="{{route('active.post',$item->id)}}" class="btn btn-primary rounded-pill waves-effect waves-light" title="Active"><i class="fa-solid fa-thumbs-down"></i></a>

                                                    @endif
                                                    </td> 
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- <div class="row">
                                            <div class="col-6 offset-md-6"> 
                                                {{ $news->links('backend.posts.pagination') }}
                                            </div>
                                        </div> --}}
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                    </div> <!-- container -->
                </div> <!-- content -->

@endsection