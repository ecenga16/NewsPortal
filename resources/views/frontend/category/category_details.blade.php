@extends('frontend.home_dashboard')
@section('home') 

<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="archive-topAdd">
</div>
</div>
</div>
 <div class="row">
<div class="col-lg-8 col-md-8">
<div class="rachive-info-cats">
<a href=" "><i class="las la-home"></i> </a> <i class="las la-chevron-right"></i> {{ $breadcat->category_name }}
</div>
<div class="row">

@foreach($news as $item)
@if($loop->index < 1 )
<div class="col-lg-8 col-md-8">
<div class="archive-shadow arch_margin">
<div class="archive1_image">
<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}"><img class="lazyload" src="{{ asset($item->news_image) }}" ></a>
<div class="archive1-meta">
<a href=" "><i class="la la-tags"> </i>
{{ $item->created_at->format('l M d Y') }}
</a>
</div>
</div>
<div class="archive1-padding">
<div class="archive1-title"><a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}">{{ $item->news_title }}</a></div>
<div class="content-details"> {!! Str::limit($item->news_details, 100) !!} <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}"> Read More </a>
</div>
</div>
</div>
</div>
@endif
@endforeach


<div class="col-md-4 col-sm-4">
<div class="row">

@foreach($newstwo as $item)
@if($loop->index > 0 )
<div class="archive1-custom-col-12">
<div class="archive-item-wrpp2">
<div class="archive-shadow arch_margin">
<div class="archive1_image2">
<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}"><img class="lazyload" src="{{ asset($item->image) }}"  ></a> <div class="archive1-meta">
<a href=" "><i class="la la-tags"> </i>
{{ $item->created_at->format('l M d Y') }}
</a>
</div>
</div>
<div class="archive1-padding">
<div class="archive1-title2"><a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}">{{ $item->news_title }}</a></div>
</div>
</div>
</div>
</div>
@endif
@endforeach


</div>
</div>
</div>



<div class="row">

@foreach($news as $item)
@if($loop->index > 1 )
<div class="archive1-custom-col-3">
<div class="archive-item-wrpp2">
<div class="archive-shadow arch_margin">
<div class="archive1_image2">
<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}"><img class="lazyload" src="{{ asset($item->image) }}"  ></a>
<div class="archive1-meta">
<a href=" "><i class="la la-tags"> </i>
{{ $item->created_at->format('l M d Y') }}
</a>
</div>
</div>
<div class="archive1-padding">
<div class="archive1-title2"><a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}"> {{ $item->news_title }} </a></div>
</div>
</div>
</div>
</div>
@endif
@endforeach




</div>
<div class="archive1-margin">
<div class="archive-content">
<div class="row">
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">
<span aria-current="page" class="page-numbers current">1</span>
<a class="page-numbers" href=" ">2</a>
<a class="next page-numbers" href=" ">Next »</a>
</div>
</div>

<br><br>

<div class="row">
<div class="col-lg-12 col-md-12"></div>
</div>
</div>

</div>
</div>
</div>



@endsection