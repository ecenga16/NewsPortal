@php
$id = Auth::user()->id;
$userid = App\Models\User::find($id);
$status = $userid->status;
@endphp
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @if($status == 'active')
                <li class="menu-title mt-2">Menu</li>


                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span> Categories </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('all.category')}}">All Categories</a>
                            </li>
                            <li>
                                <a href="{{route('add.category')}}">Add Category</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span> Subategories </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('all.subcategory')}}">All Subcategories</a>
                            </li>
                            <li>
                                <a href="{{ route('add.subcategory') }}">Add SubCategory</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarEcommerce2" data-bs-toggle="collapse">
                        <i class="mdi mdi-file-document-outline"></i>
                        <span> Posts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce2">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('all.news.post')}}">All Posts</a>
                            </li>
                            <li>
                                <a href="{{ route('add.post') }}">Add New Post</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#banner" data-bs-toggle="collapse">
                        <i class="fas fa-image"></i>
                        <span> Banner Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="banner">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.banners') }}">All Banner</a>
                            </li>


                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-image-multiple"></i>
                        <span> Gallery </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.photos') }}">Images</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#video" data-bs-toggle="collapse">
                        <i class="mdi mdi-video-vintage"></i>
                        <span> Video Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="video">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.video.gallery') }}">Video Gallery</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#video" data-bs-toggle="collapse">
                        <i class="mdi mdi-television"></i>
                        <span> Live Tv Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="video">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('update.live.tv') }}">Update Live TV</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#seo" data-bs-toggle="collapse">
                        <i class="mdi mdi-search-web"></i>
                        <span> Seo Setting </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="seo">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('seo.setting') }}">Update SEO</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Setting</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-settings"></i>
                        <span> Setting Admin User </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('all.admin')}}">All Admin</a>
                            </li>
                            <li>
                                <a href="{{route('add.admin')}}">Add Admin</a>
                            </li>
                        </ul>
                    </div>
                </li>

                @else
                @endif
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>