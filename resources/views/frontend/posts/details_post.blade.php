@extends('frontend.home_dashboard')
@section('home')

@section('title')

{{$news['news_title']}}

@endsection
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8">

			<div class="single-add">
			</div>


			<h1 class="single-page-title">
				{{$news['news_title']}}</h1>
			<div class="row g-2">
				<div class="col-lg-1 col-md-2 ">
					<div class="reportar-image">
						<img src="{{asset('backend/assets/images/lazy.jpg')}}">
					</div>
				</div>
				<div class="col-lg-11 col-md-10">
					<div class="reportar-title">
						{{$news['user']['name']}}</a>

					</div>
					<div class="viwe-count">
						<ul>
							<li><i class="la la-clock-o"></i> Created at : {{ $news['created_at']->format('d-m-y') }}
							</li>
							</li>
							<li>/ <i class="la la-eye"></i>
								{{$news['view_count']}}
								Read
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="single-image">
				<a href=" "><img class="lazyload" src="{{asset($news['news_image'])}}"></a>

			</div>

			<div class="single-page-add2">
				<div class="themesBazar_widget">
					<div class="textwidget">
						<p><img loading="lazy" class="aligncenter size-full wp-image-74"
								src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
					</div>
				</div>
			</div>

			<button id="inc">+</button>
			<button id="dec">-</button>

			<news-font>
				<div class="single-details">
					{!!$news['news_details']!!}
				</div>
			</news-font>
			<div class="singlePage2-tag">
				<span> Tags : </span>
				@foreach($tags_all as $tag)
				<a href=" " rel="tag">{{ ucwords($tag) }}</a>
				@endforeach
			</div>
			<div class="single-add">
				<div class="themesBazar_widget">
					<div class="textwidget">
						<p><img loading="lazy" class="aligncenter size-full wp-image-74"
								src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
					</div>
				</div>
			</div>

			<h3 class="single-social-title">Share News</h3>
			<div class="single-page-social">
				<a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"
					title="Facebook"><i class="lab la-facebook-f"></i></a>
				<a href="whatsapp://send?text={{ url()->current() }}" target="_blank" title="WhatsApp"><i
						class="lab la-whatsapp"></i></a>
				<a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" target="_blank" title="Twitter"><i
						class="lab la-twitter"></i></a>
				<a href="https://www.linkedin.com/shareArticle?url={{ url()->current() }}" target="_blank"
					title="LinkedIn"><i class="lab la-linkedin-in"></i></a>
			</div>

			<script>
				function printFunction() {
        window.print();
    }
			</script>



			<hr>





			<div class="single_relatedCat">
				<div class="single_relatedCat_t">Related News </div>
			</div>
			<div class="row">

				@foreach($relatedNews as $item)
				<div class="themesBazar-3 themesBazar-m2">
					<div class="related-wrpp">
						<div class="related-image">

							<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}">
								<img class="lazyload" src="{{asset($item['news_image'])}}">
							</a>
						</div>
						<h4 class="related-title">
							<a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}">{{
								$item->news_title }} </a>
						</h4>
						<div class="related-meta">
							<a href=" "><i class="la la-tags"> </i>
								{{ $news->created_at->format('l M d Y') }}
							</a>
						</div>
					</div>
				</div>
				@endforeach



			</div>
		</div>
		<div class="col-lg-4 col-md-4">

			<div class="header-social mb-3 d-none d-md-block">
				<ul>
					<form class="header-search" action="{{ route('news.search') }}" method="post">
						@csrf

						<input type="text" name="search" placeholder="Search Here">
						<button type="submit" value="Search"> <i class="las la-search text-white"></i> </button>
					</form>
				</ul>
			</div>
			<div class="sitebar-fixd" style="position: sticky; top: 0;">
				<div class="siteber-add">
					<div class="themesBazar_widget">
						<div class="textwidget">
							<p><img loading="lazy" class="aligncenter size-full wp-image-74"
									src="assets/images/biggapon-1.gif" alt="" width="100%" height="auto"></p>
						</div>
					</div>
				</div>
				<div class="singlePopular">
					<ul class="nav nav-pills" id="singlePopular-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<div class="nav-link active" data-bs-toggle="pill" data-bs-target="#archiveTab_recent"
								role="tab" aria-controls="archiveRecent" aria-selected="true"> Te fundit </div>
						</li>
						<li class="nav-item" role="presentation">
							<div class="nav-link" data-bs-toggle="pill" data-bs-target="#archiveTab_popular" role="tab"
								aria-controls="archivePopulars" aria-selected="false"> Me te lexuarat </div>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="pills-tabContentarchive">
					<div class="tab-pane fade active show" id="archiveTab_recent" role="tabpanel"
						aria-labelledby="archiveRecent">

						<div class="archiveTab-sibearNews">


							@foreach($newposts as $newsitem)
							<div class="archive-tabWrpp archiveTab-border">
								<div class="archiveTab-image ">
									<a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}"><img
											class="lazyload" src="{{ asset($newsitem->news_image) }}"></a>
								</div>
								<h4 class="archiveTab_hadding">
									<a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}">
										<span style="font-size: 16px;">{{ $newsitem->news_title }}</span>
									</a>
								</h4>


							</div>
							@endforeach

						</div>
					</div>
					<div class="tab-pane fade" id="archiveTab_popular" role="tabpanel"
						aria-labelledby="archivePopulars">
						<div class="archiveTab-sibearNews">

							@foreach($pop_posts as $newsitem)
							<div class="archive-tabWrpp archiveTab-border">
								<div class="archiveTab-image ">
									<a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}"><img
											class="lazyload" src="{{ asset($newsitem->news_image) }}"></a>
								</div>
								<h4 class="archiveTab_hadding">
									<a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}">
										<span style="font-size: 16px;">{{ $newsitem->news_title }}</span>
									</a>
								</h4>

							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="siteber-add2">
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
	var size = 16;
	function setFontSize(s){
		size = s;
		$('news-font').css('font-size','' + size + 'px');
	}
	function increaseFontSize(){
		setFontSize(size + 5);
	}
	function decreaseFontSize(){
		if (size > 5)  
			setFontSize(size - 5);
		}
	$('#inc').click(increaseFontSize);
    $('#dec').click(decreaseFontSize);
	setFontSize(size);
	 
 
</script>


@endsection