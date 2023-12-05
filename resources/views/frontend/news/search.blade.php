@extends('frontend.home_dashboard')

@section('home')
@section('title')
Search Page
@endsection

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
                <a href=" "><i class="las la-home"></i> </a> <i class="las la-chevron-right"></i> Search By {{ $item }}
            </div>

            <div class="row">
                @foreach($news as $item)
                <div class="archive1-custom-col-3">
                    <div class="archive-item-wrpp2">
                        <div class="archive-shadow arch_margin">
                            <div class="archive1_image2">
                                <a href=" "><img class="lazyload" src="{{ asset($item->news_image) }}"></a>
                                <div class="archive1-meta">
                                    <a href=" "><i class="la la-tags"> </i>{{ $item->created_at->format('M d Y') }}</a>
                                </div>
                            </div>
                            <div class="archive1-padding">
                                <div class="archive1-title2"><a
                                        href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }} ">{{
                                        $item->news_title }} </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <br><br>

            <div class="row">
                <div class="col-lg-12 col-md-12"></div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="header-social mb-3">
                <ul>
                    <form class="header-search" action="{{ route('news.search') }}" method="post">
                        @csrf
                        <input type="text" name="search" placeholder="Search Here">
                        <button type="submit" value="Search"> <i class="las la-search text-white"></i> </button>
                    </form>
                </ul>
            </div>

            <div class="sitebar-fixd" style="position: sticky; top: 0;">
                <div class="archivePopular">
                    <ul class="nav nav-pills" id="archivePopular-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active" data-bs-toggle="pill" data-bs-target="#archiveTab_recent"
                                role="tab" aria-controls="archiveRecent" aria-selected="true"> LATEST </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular" role="tab"
                                aria-controls="archivePopulars" aria-selected="false"> POPULAR </div>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="pills-tabContentarchive">
                    <div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel"
                        aria-labelledby="archiveRecent">
                        <div class="archiveTab-sibearNews">
                            @foreach($newnewspost as $key=> $newsitem)
                            <div class="archive-tabWrpp archiveTab-border">
                                <div class="archiveTab-image ">
                                    <a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}"><img
                                            class="lazyload" src="{{ asset($newsitem->image) }}"></a>
                                </div>
                                <h4 class="archiveTab_hadding"><a
                                        href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}">{{
                                        $newsitem->news_title }} </a></h4>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="archiveTab_popular" role="tabpanel"
                        aria-labelledby="archivePopulars">
                        <div class="archiveTab-sibearNews">
                            @foreach($newspopular as $key=> $newsitem)
                            <div class="archive-tabWrpp archiveTab-border">
                                <div class="archiveTab-image ">
                                    <a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}"><img
                                            class="lazyload" src="{{ asset($newsitem->image) }}"></a>
                                </div>
                                <h4 class="archiveTab_hadding"><a
                                        href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}">{{
                                        $newsitem->news_title }} </a></h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="siteber-add2">
                    <div class="themesBazar_widget">
                        <h3 style="margin-top:5px"> Search By Date </h3>
                    </div>
                    <form class="wordpress-date" action="{{ route('search-by-date') }}" method="post">
                        @csrf
                        <input type="date" id="wordpress" placeholder="Select Date" autocomplete="off" name="date"
                            class="hasDatepicker">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection