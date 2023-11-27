@php
$cdate = new DateTime();
@endphp
<style>
.todayPrayer {
    display: table-cell;
    padding: 1rem 0;
    text-align: center;
    border: 1px solid #eee;
    border-collapse: collapse;
}
.large-2 {
    width: 16.66667%;
}
.box {
    background: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    margin-bottom: 1.25rem;
    border-radius: 4px;
    overflow: hidden;
    transition: all 0.4s ease-in-out;
}
span.todayPrayerName {
    font-size: 0.9rem;
    font-weight: 600;
    color: #1d5562;
}
.row::after {
    clear: both;
}
.medium-2 {
    width: 16.66667%;
}

</style>
<script>
    var latitude = 41.3275; // Tirana's latitude
    var longitude = 19.8187; // Tirana's longitude
    var method = 13; // Umm al-Qura University method

    var API = `https://api.aladhan.com/v1/timings?latitude=${latitude}&longitude=${longitude}&method=${method}`;

    fetch(API)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            if (!data || !data.data || !data.data.timings) {
                throw new Error('Invalid response format');
            }

            var prayerTimes = [
                data.data.timings.Fajr,
                data.data.timings.Sunrise,
                data.data.timings.Dhuhr,
                data.data.timings.Asr,
                data.data.timings.Maghrib,
                data.data.timings.Isha
            ];

            var currentTime = new Date();
            var currentHour = currentTime.getHours();
            var currentMinute = currentTime.getMinutes();
            var currentTimeString = currentHour + ':' + (currentMinute < 10 ? '0' : '') + currentMinute;

            for (var i = 0; i < prayerTimes.length; i++) {
    var prayerTime = prayerTimes[i];
    var prayerTimeDiv = document.getElementById('box');
    var prayerTimeId = '';

    switch (i) {
        case 0: prayerTimeId = 'fajrTime'; break;
        case 1: prayerTimeId = 'lindja'; break;
        case 2: prayerTimeId = 'yleja'; break;
        case 3: prayerTimeId = 'ikindia'; break;
        case 4: prayerTimeId = 'akshami'; break;
        case 5: prayerTimeId = 'jacia'; break;
    }

    if (currentTimeString === prayerTime) {
        prayerTimeDiv.style.backgroundColor = '#1d5562';
    } else {
        prayerTimeDiv.style.backgroundColor = '';
    }

    // Highlight the current prayer time
    if (isCurrentTimePassed(prayerTime, currentTimeString) && isCurrentTimePassed(currentTimeString, prayerTimes[i + 1])) {
        document.getElementById(prayerTimeId).style.color = '#FF0000';
    } else {
        document.getElementById(prayerTimeId).style.color = ''; 
    }
}

            // Update the HTML with prayer times
            document.getElementById('fajrTime').textContent = data.data.timings.Fajr;
            document.getElementById('lindja').textContent = data.data.timings.Sunrise;
            document.getElementById('yleja').textContent = data.data.timings.Dhuhr;
            document.getElementById('ikindia').textContent = data.data.timings.Asr;
            document.getElementById('akshami').textContent = data.data.timings.Maghrib;
            document.getElementById('jacia').textContent = data.data.timings.Isha;
        })
        .catch(error => console.error('Error fetching prayer times:', error));

    function isCurrentTimePassed(timeToCheck, currentTime) {
        var timeToCheckParts = timeToCheck.split(':');
        var currentTimeParts = currentTime.split(':');

        var timeToCheckMinutes = parseInt(timeToCheckParts[0]) * 60 + parseInt(timeToCheckParts[1]);
        var currentTimeMinutes = parseInt(currentTimeParts[0]) * 60 + parseInt(currentTimeParts[1]);

        return currentTimeMinutes >= timeToCheckMinutes;
    }
</script>
<header class="themesbazar_header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row mb-1 justify-content-between">
                    <!-- Prayers Section -->
                    <div class="col-sm-12 col-md-6">
                        <i class="lar la-calendar"></i>
                        {{ $cdate->format('l d-m-Y') }}
                        <div class="date">
                            <div class="row todayPrayersContainer">
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Imsaku</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="fajrTime"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">L. Diellit </span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="lindja"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Yleja</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="yleja"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Ikindia</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="ikindia"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Akshami</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="akshami"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Jacia</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="jacia"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Search Section -->
                    <div class="col-md-4 mt-5 d-none d-md-block">
                        <div class="header-social">
                            <ul>
                                <form class="header-search" action="{{ route('news.search') }}" method="post">
                                    @csrf 
                                
                                <input type="text"  name="search" placeholder=" Search Here " required="">
                                <button type="submit" value="Search"> <i class="las la-search"></i> </button>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="menu_section" id="myHeader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mobileLogo">
                    <a href=" " title="NewsFlash">
                        <img src="{{ asset('frontend/assets/images/logo.jpg') }}" alt="Logo" title="Logo" style="width: 30px !important; height: 30px !important;">
                    </a>
                </div>
            <div class="stellarnav dark desktop"><a href="https://newssitedesign.com/newsflash/#" class="menu-toggle full"><span class="bars"><span></span><span></span><span></span></span> </a><ul id="menu-main-menu" class="menu"><li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-89"><a href="{{route('homepage')}}" aria-current="page"> <i class="fa-solid fa-house-user"></i>  HOME</a></li>

            @php
                $categories = App\Models\Category::orderBy('category_name','ASC')->get();
            @endphp

            @foreach($categories as $category)
                <li id="menu-item-291" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-291">
                    <a href="{{url('category/' . $category['id'] . '/' . $category['category_slug'])}}">{{ $category->category_name }}</a>

                        @php
                            $subcategories = App\Models\Subcategory::where('category_id', $category->id)->orderBy('subcategory_name','ASC')->get();
                        @endphp    
                        <ul class="sub-menu">
                            @foreach($subcategories as $subcategory)
                                <li id="menu-item-294" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-294"><a href="{{url('subcategory/' . $subcategory['id'] . '/' . $subcategory['subcategory_slug'])}}">{{$subcategory->subcategory_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    <a class="dd-toggle" href=" "><span class="icon-plus"></span></a>
                </li>
            @endforeach

            </ul>
                <a class="dd-toggle" href=" "><span class="icon-plus"></span></a></li>
            </ul></div> </div>
        </div>
    </div>
</div>