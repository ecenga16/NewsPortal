@extends('frontend.home_dashboard')
@section('home')
@section('title')
{{$breadcat->category_name}}
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach($news as $item )
                <div class="custom-col-3">
                    <div class="author-wrpp">
                        <div class="authorNews-image">
                            <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}  ">
                                <img class="lazyload" src="{{ asset($item->news_image) }}">
                            </a>
                        </div>
                        <div class="authorPage-content">
                            <h2 class="authorPage-title">
                                <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }} ">{{
                                    $item->news_title }}</a>
                            </h2>
                            <div class="author-date">
                                <a href=" "> {{ $item->user->name }}</a> <span> <i class="las la-clock"></i>
                                    {{ $item->created_at->format('l M d Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $news->links('frontend.category.custom-pagination') }}



        </div>
    </div>
</div>
</div>
@endsection