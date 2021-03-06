<nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" href="index.html">
    <img src="{{asset('asset/img/brand/logo.png')}}" class="header-brand-img" alt="  Asta-Admin  logo">
    </a>
    <form class="form-inline mr-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-navicon"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
        </ul>
        <div class=" form-inline mr-auto horizontal" id="headerMenuCollapse">
            <div class="d-none d-lg-block">
                <ul class="nav">
                    <li class="nav-item with-sub">
                        <a class="nav-link mr-0" href="#">
                            <i class="fa fa-cog"></i>
                            <span> Settings</span>
                        </a>
                        <div class="sub-item dropdown-menu-right">
                            <ul>
                                <li>
                                    <a href="#">Setting 1</a>
                                </li>
                                <li>
                                    <a href="#">Setting 2</a>
                                </li>
                                <li>
                                    <a href="#">Setting 3</a>
                                </li>

                            </ul>
                        </div><!-- sub-item -->
                    </li>
                    <li class="nav-item with-sub">
                        <a class="nav-link" href="#"><i class="fa fa-cube"></i><span>Options</span></a>
                        <div class="sub-item dropdown-menu-right">
                            <ul>
                                <li>
                                    <a href="#">Option 1 </a>
                                </li>
                                <li>
                                    <a href="#">Option 2</a>
                                </li>
                                <li>
                                    <a href="#">Option 3</a>
                                </li>

                                <li class="sub-with-sub">
                                    <a href="#">Option 3</a>
                                    <ul>
                                        <li>
                                            <a href="#">Option 01</a>
                                        </li>
                                        <li>
                                            <a href="#">Option 02</a>
                                        </li>
                                        <li>
                                            <a href="#">Option 03</a>
                                        </li>
                                        <li>
                                            <a href="#">Option 04</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- dropdown-menu -->
                    </li>
                </ul>
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class=""><a href="#" class=" "></a>
            <form class="form-inline mr-auto">
                <div class="search-element">
                    <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search"tabindex="1">
                    <button class="btn btn-primary" type="submit"><i class="ion ion-search"></i></button>
                </div>
            </form>
        </li>
        <li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg "><i class="fa fa-envelope-o"></i></a><span class="pulse bg-danger"></span>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                    <div class="float-right">
                        <a href="#">View All</a>
                    </div>
                </div>
                <div class="dropdown-list-content">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                    <img alt="image" src="{{asset('asset/img/avatar/avatar-1.jpeg')}}" class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <div class="dropdownmsg d-flex">
                                <div class="">
                                    <b>Stewart Ball</b>
                                    <p>Your template awesome</p>
                                </div>
                                <div class="time">6 hours ago</div>
                            </div>

                        </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                    <img alt="image" src="{{asset('asset/img/avatar/avatar-2.jpeg')}}" class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <div class="dropdownmsg d-flex">
                                <div class="">
                                    <b>Jonathan North</b>
                                    <p>Your Order Shipped.....</p>
                                </div>
                                <div class="time">45 mins ago</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <img alt="image" src="{{asset('asset/img/avatar/avatar-4.jpeg')}}" class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <div class="dropdownmsg d-flex">
                                <div class="">
                                    <b>Victor Taylor</b>
                                    <p>Hi!, I' am web developer</p>
                                </div>
                                <div class="time"> 8 hours ago</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <img alt="image" src="{{asset('asset/img/avatar/avatar-3.jpeg')}}" class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <div class="dropdownmsg d-flex">
                                <div class="">
                                    <b>Ruth	Arnold</b>
                                    <p>Hi!, I' am web designer</p>
                                </div>
                                <div class="time"> 3 hours ago</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <img alt="image" src="{{asset('asset/img/avatar/avatar-5.jpeg')}}" class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <div class="dropdownmsg d-flex">
                                <div class="">
                                    <b>Sam	Lyman</b>
                                    <p>Hi!, I' am java developer</p>
                                </div>
                                <div class="time"> 15 mintues ago</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg"><i class="fa fa-bell-o"></i></a><span class="pulse bg-danger"></span>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">View All</a>
                    </div>
                </div>
                <div class="dropdown-list-content">
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users  text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>So many Users Visit your template</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-exclamation-triangle text-danger"></i>
                        <div class="dropdown-item-desc">
                            <b>Error message occurred....</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users text-warning"></i>
                        <div class="dropdown-item-desc">
                            <b> Adding new people</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-shopping-cart text-success"></i>
                        <div class="dropdown-item-desc">
                            <b>Your items Arrived</b>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-comment text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>So many Users Visit your template</b>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle">
            <a href="#" class="nav-link nav-link-lg full-screen-link">
                <i class="fa fa-expand"  id="fullscreen-button"></i>
            </a>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
        <img src="{{asset('admin/admin_image/'.Auth::guard('admin')->user()->profile_photo)}}" alt="profile-user" class="rounded-circle w-32">
        <div class="d-sm-none d-lg-inline-block">{{Auth::guard('admin')->user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('profile')}}" class="dropdown-item has-icon">
                    <i class="ion ion-android-person"></i> Profile
                </a>
                <a href="profile.html" class="dropdown-item has-icon">
                    <i class="ion-android-drafts"></i> Messages
                </a>
                <a href="profile.html" class="dropdown-item has-icon">
                    <i class="ion ion-gear-a"></i> Settings
                </a>
                <a href="#" class="dropdown-item has-icon">
                    <i class="ion-ios-redo"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
