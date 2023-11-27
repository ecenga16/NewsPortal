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

<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}  "><img class="lazyload" src="{{ asset($item->news_image) }}" ></a>
</div>
<div class="authorPage-content">
<h2 class="authorPage-title">
<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }} ">{{ $item->news_title }}</a>
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
<div class="row">
<div class="col-lg-8 col-md-8">
<div class="post-nav"><ul class="pager"><li class="previous"><a href=" "><i class="las la-step-backward"></i>
</a></li><li><a href=" " title="previous"><i class="la la-backward" aria-hidden="true"></i>
</a></li><li><a href=" ">01</a></li><li class="active"><span class="active">02</span></li><li><a href=" ">03</a></li><li><a href=" ">04</a></li><li><a href=" " title="next"><i class="la la-forward" aria-hidden="true"></i>
</a></li><li class="next"><a href=" "><i class="las la-step-forward"></i>
</a></li></ul></div> </div>
</div>
</div>
 
</div>
</div>
</div>
</div>
@endsection