@php
$breaking_news = App\Models\Posts::where('breaking_news', 1)->get();
@endphp

@if($breaking_news->isNotEmpty())
    <div class="top-scroll-section5">
        <div class="container">
            <div class="alert" role="alert">
                <div class="scroll-section5">
                    <div class="row">
                        <div class="col-md-12 top_scroll2">
                            <div class="scroll5-left">
                                <div id="scroll5-left">
                                    <span> Lajmi Fundit :: </span>
                                </div>
                            </div>
                            <div class="scroll5-right">
                                <marquee direction="left" scrollamount="5px" onmouseover="this.stop()" onmouseout="this.start()">
                                    @foreach($breaking_news as $post)
                                        <a href="">
                                            <img src="{{ $post->news_image }}" alt="Logo" title="Logo" width="30px" height="auto">
                                            {{ $post->news_title }}
                                        </a>
                                    @endforeach
                                </marquee>
                            </div>
                            <div class="scroolbar5">
                                <button data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif