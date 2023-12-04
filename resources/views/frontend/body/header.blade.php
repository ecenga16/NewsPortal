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
    background-color: white;
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
span.todayPrayerTime {
    font-size: 0.9rem;
}
.row::after {
    clear: both;
}
.medium-2 {
    width: 16.66667%;
}

.align-bottom-custom {
    display: flex;
    align-items: center;
    justify-content: flex-end;

}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.donate-button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 5px;
    background: linear-gradient(to right, #3498db, #2ecc71);
    color: #fff;
    border: 2px solid #3498db;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1s ease-out;
    transition: background 0.3s, color 0.3s, border-color 0.3s, transform 0.3s;
}

.donate-button:hover {
    background: linear-gradient(to right, #2980b9, #27ae60);
    color: #fff;
    border-color: #2980b9;
    transform: scale(1.2);
}

</style>
<script>
    function fetchPrayerTimes() {
        console.log('Button clicked!');
        const city = document.getElementById('cityInput').value;
        window.fetchAndDisplayPrayerTimes(city);
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault();

            const city = document.getElementById('cityInput').value;
            fetchAndDisplayPrayerTimes(city);
        });

        window.fetchAndDisplayPrayerTimes = function (city) {
            const apiKey = "6bba7cc8778c98be3c08672a88c5a045";
            const apiUrl = `https://muslimsalat.com/${city}/daily.json?key=${apiKey}&callback=displayPrayerTimes`;

            const script = document.createElement('script');
            script.src = apiUrl;

            document.head.appendChild(script);
        }

        window.displayPrayerTimes = function (times) {
            var prayerTimesElement = document.querySelector('.prayerTimesExample');

            if (prayerTimesElement) {
                document.getElementById('title').innerText = times.title;

                document.getElementById('fajr').innerText = times.items[0].fajr;
                document.getElementById('shurooq').innerText = times.items[0].shurooq;
                document.getElementById('dhuhr').innerText = times.items[0].dhuhr;
                document.getElementById('asr').innerText = times.items[0].asr;
                document.getElementById('maghrib').innerText = times.items[0].maghrib;
                document.getElementById('isha').innerText = times.items[0].isha;

                document.head.removeChild(script);
            } else {
                console.error('Element with class "prayerTimesExample" not found');
            }
        };

        fetchAndDisplayPrayerTimes('Tirana');
    });
</script>
<header class="themesbazar_header" style="background-color:#1d5562;">
    <div class="container" >
        <div class="row" >
            <div class="col-12">
                <div class="row mb-1 justify-content-between">
                    <!-- Prayers Section -->
                    <div class="col-sm-12 col-md-6">
                        <div class="prayerTimesExample">
                        <i class="lar la-calendar" style="color:#FFFFFF"></i>
                        <span style="color:#FFFFFF"> {{ $cdate->format('l d-m-Y') }}</span>
                        <div><span id="title" style="color:#FFFFFF"></span></div>
                        <div class="row" >
                            <div class="col-6">
                                <form>
                                <input type="text" id="cityInput" class="form-control" placeholder="Enter City">
                            </div>
                            <div class="col-6 md-col-4">
                                <button class="btn btn-success" type="button" onclick="fetchPrayerTimes()">Get Prayer Times</button>
                            </form>
                            </div>
                           
                        </div>
                        <div><span id="title"></span></div>

                        <div class="date ml-md-2">
                            <div class="row todayPrayersContainer">
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Imsaku</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="fajr"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">L. Diellit</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="shurooq"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Yleja</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="dhuhr"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Ikindia</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="asr"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Akshami</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="maghrib"></span></div>
                                </div>
                                <div class="large-2 medium-2 small-2 columns todayPrayer" id="box">
                                    <div class="todayPrayerNameContainer"><span class="todayPrayerName">Jacia</span></div>
                                    <div class="todayPrayerDetailContainer"><span class="todayPrayerTime" id="isha"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!-- Search Section -->
                    <div class="col-md-4 align-bottom-custom mb-3">
                        <a href="{{ route('donate.page') }}" class="donate-button animated mt-3 mt-md-5 mr-md-5 mx-auto">Donate Now</a>
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