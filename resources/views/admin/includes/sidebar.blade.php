<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown">
            <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
            <img alt="image" src="{{asset('asset/img/avatar/avatar-1.jpeg')}}" class=" avatar-md rounded-circle">
                <span class="ml-2 d-lg-block">
                    <span class="text-dark app-sidebar__user-name mt-5">{{Auth::guard('admin')->user()->name}}</span><br>
                </span>
            </a>
        </div>
    </div>
    <ul class="side-menu">

            <a class="side-menu__item"  data-toggle="slide" href="{{route('admin.dashboard')}}"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Home</span><i class="angle fa fa-angle-right"></i></a>


        <li>
            <a class="side-menu__item" href="{{route('team')}}"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Team</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">UI Elements</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="elements.html" class="slide-item"> Elements</a></li>
                <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                <li><a href="toastr.html" class="slide-item"> Toastr</a></li>
                <li><a href="calender.html" class="slide-item"> Calendar</a></li>
                <li><a href="rangesliders.html" class="slide-item"> Rangeslider</a></li>
                <li><a href="modals.html" class="slide-item"> Modals</a></li>
                <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                <li><a href="users.html" class="slide-item"> Users List</a></li>
                <li><a href="mailinbox.html" class="slide-item"> Mail-inbox</a></li>
                <li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="icons-ion.html" class="slide-item"> Ion Icons</a></li>
                <li><a href="icons-fontawesome.html" class="slide-item"> Font Awesome</a></li>
                <li><a href="icons-feather.html" class="slide-item"> Feather Icons</a></li>
                <li><a href="icons-materialdesign.html" class="slide-item"> Material Design</a></li>
                <li><a href="icons-themify.html" class="slide-item"> Themify</a></li>
                <li><a href="icons-simpleline.html" class="slide-item"> Simple line</a></li>
                <li><a href="icons-pe7.html" class="slide-item"> pe7</a></li>
                <li><a href="icons-flag.html" class="slide-item"> Flag Icons</a></li>
                <li><a href="icons-weather.html" class="slide-item"> Weather Icons</a></li>
                <li><a href="icons-typicons.html" class="slide-item"> Typicons</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="table.html" class="slide-item">Basic Tables</a></li>
                <li><a href="datatables.html" class="slide-item"> Data Tables</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="formelements.html" class="slide-item"> Form Elements</a></li>
                <li><a href="formadvanced.html" class="slide-item"> Advanced Form</a></li>
                <li><a href="formeditor.html" class="slide-item"> Form Editor</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="chartjs.html" class="slide-item">Chart Js</a></li>
                <li><a href="flotcharts.html" class="slide-item"> Flot Charts</a></li>
                <li><a href="barcharts.html" class="slide-item"> Bar Charts</a></li>
                <li><a href="echart.html" class="slide-item"> ECharts</a></li>
                <li><a href="chartist.html" class="slide-item"> Chartist</a></li>
                <li><a href="morris.html" class="slide-item"> Morris Charts</a></li>
                <li><a href="othercharts.html" class="slide-item"> Other Charts</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="maps.html" class="slide-item"> Google Maps</a></li>
                <li><a href="vector-map.html" class="slide-item">Vector Maps</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pie-chart"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{route('profile')}}" class="slide-item"> Profile</a></li>
                <li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
                <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                <li><a href="shop.html" class="slide-item"> Shop</a></li>
                <li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
                <li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
                <li><a href="register.html" class="slide-item"> Register</a></li>
                <li><a href="login.html" class="slide-item"> Login</a></li>
                <li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
                <li><a href="reset.html" class="slide-item"> Reset Password</a></li>
                <li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
                <li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
                <li><a href="404.html" class="slide-item"> 404</a></li>
                <li><a href="505.html" class="slide-item"> 505</a></li>
                <li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
            </ul>
        </li>
    </ul>
</aside>
