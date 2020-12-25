 @extends('admin.layouts.app')

@section('content')

    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-muted">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">HR Dashboard</li>
            <li class="ml-auto d-lg-flex d-none">
                <span class="sparkline_bar mr-2 float-left"></span>
                <span class="float-left border-">
                    <span class="mb-0 mt-1 mr-2">1,267</span><small class="mb-0 mr-3">[ Visitors ]</small>
                </span>
                <span class="sparkline_bar1 mr-2 float-left"></span>
                <span class="float-left">
                    <span class="mb-0 mt-1 mr-2">215</span><small class="mb-0">[ Chats ]</small>
                </span>
            </li>
        </ol>

        <div class="row row-deck">
            <div class=" col-lg-12 col-md-12 col-xl-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Employee Details</h4>
                    </div>
                    <div class="card-body border-bottom">
                        <canvas id="bar-chart-grouped" ></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">New Hires </h4></div>
                    <div class="card-body p-4 border-bottom">
                        <div class="dash2 text-center">
                            <h6>Employees</h6>
                            <h4 class="mb-4 font-weight-bold">567</h4>
                            <div class="mb-2 ">
                                <input type="text" class="knob" value="80" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#fa292e">
                            </div>
                            <p>Total number of Hires.</p>
                            <div class="row mt-4">
                                <div class="col text-center">
                                    <h5 class="font-weight-bold ">10.9%</h5>
                                    <p class="mb-0 text-muted"><i class="fa fa-chevron-circle-up text-success mr-1"></i></span> this week</p>
                                </div><!-- col -->
                                <div class="col border-left text-center">
                                    <h5 class="font-weight-bold ">5.9%</h5>
                                    <p class="mb-0 text-muted"><i class="fa fa-chevron-circle-down text-danger mr-1"></i></span> last week</p>
                                </div><!-- col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">Revenue Per Staff</h4></div>
                    <div class="card-body">
                        <div class="dash2 ">
                            <div class="">
                                <p>Lorem ipsum dolor sit amet consectetur  .</p>
                                <div class="">
                                    <h3 class="text-primary mb-2 font-weight-bold">12,450</h3>
                                    <span class="text-success"><i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i><span>+24%</span></span><span class="text-muted ml-2">From Last Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="chart-wrapper p-0 mb-0">
                            <canvas id="widgetChart1" class="mb-0 p-0"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <div class="text-right">
                                <span class="badge badge-primary float-left mt-2">30% <i class="fa fa-caret-up"></i> </span>
                                <h2 class="mb-0 text-primary"> 6,382 </h2>
                                <p class="text-muted ">New Roles</p>
                            </div>
                            <div class="progress h-6">
                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-Primary w-80" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <div class="text-right">
                                <span class="badge badge-danger float-left mt-2">10% <i class="fa fa-caret-down"></i> </span>
                                <h2 class="mb-0 text-danger"> 654</h2>
                                <p class="text-muted ">Open Positions</p>
                            </div>
                            <div class="progress h-6">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-50" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <div class="text-right">
                                <span class="badge badge-success float-left mt-2">60% <i class="fa fa-caret-up"></i> </span>
                                <h2 class="mb-0 text-success"> 7,637</h2>
                                <p class="text-muted ">Today Roles</p>
                            </div>
                            <div class="progress h-6">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-80" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="widget-box-2">
                            <div class="widget-detail-2 text-right">
                                <span class="badge badge-warning float-left mt-2">25% <i class="fa fa-caret-down"></i> </span>
                                <h2 class="mb-0 text-warning"> 8,523</h2>
                                <p class="text-muted "> Candidates Placed</p>
                            </div>
                            <div class="progress h-6 mt-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-25"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-deck">
            <div class="col-lg-12 col-xl-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Revenue</h4>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <canvas id="Chart" class="h-400"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Activity</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-description">What're people doing right now</p>
                        <div class="list d-flex align-items-center border-bottom py-3">
                        <img alt="image" src="{{asset('asset/img/avatar/avatar-4.jpeg')}}" class="avatar rounded-circle ">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0">
                                <b>Lilly </b>posted in Website</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-danger mr-1"></i>
                                        <p class="mb-0">Very Nice!</p>
                                    </div>
                                    <small class="text-muted ml-auto">4 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom py-3">
                        <img alt="image" src="{{asset('asset/img/avatar/avatar-1.jpeg')}}" class="avatar rounded-circle ">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0">
                                <b>Thomos </b>posted in Material</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-danger mr-1"></i>
                                        <p class="mb-0">Hellooo!</p>
                                    </div>
                                    <small class="text-muted ml-auto">3 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom py-3">
                        <img alt="image" src="{{asset('asset/img/avatar/avatar-3.jpeg')}}" class="avatar rounded-circle ">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0">
                                <b>Marry cott </b>posted in photo</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-danger mr-1"></i>
                                        <p class="mb-0">That's Great!</p>
                                    </div>
                                    <small class="text-muted ml-auto">2 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center border-bottom py-3">
                        <img alt="image" src="{{asset('asset/img/avatar/avatar-5.jpeg')}}" class="avatar rounded-circle ">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0">
                                <b>Jacob Brown </b>posted in photo</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-danger mr-1"></i>
                                        <p class="mb-0">That's Great!</p>
                                    </div>
                                    <small class="text-muted ml-auto">2 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list d-flex align-items-center pt-3">
                        <img alt="image" src="{{asset('asset/img/avatar/avatar-2.jpeg')}}" class="avatar rounded-circle ">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0">
                                <b>John </b>posted in Status</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-danger mr-1"></i>
                                        <p class="mb-0">How are You!</p>
                                    </div>
                                    <small class="text-muted ml-auto">1 hours ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-deck">
            <div class="col-lg-12 col-xl-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Message Activity</h4>
                    </div>
                    <div class="card-body">
                        <div class="direct-chat-messages">
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-left">Victorina</span>
                                    <span class="direct-chat-timestamp float-right">19 Sep 7:40 Am</span>
                                </div>
                            <img class="direct-chat-img" src="{{asset('asset/img/avatar/avatar-1.jpeg')}}" alt="message user image">
                                <div class="direct-chat-text">
                                    Hello. How are you today?
                                </div>
                            </div>
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-right">Nathan	Roberts</span>
                                    <span class="direct-chat-timestamp float-left">19 Sep 8:05 Am</span>
                                </div>
                            <img class="direct-chat-img" src="{{asset('asset/img/avatar/avatar-2.jpeg')}}" alt="message user image">
                                <div class="direct-chat-text">
                                    Hey! I'm fine. Thanks for asking!
                                </div>
                            </div>
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-left">Victorina</span>
                                    <span class="direct-chat-timestamp float-right">19 Sep 8:15 Am</span>
                                </div>
                            <img class="direct-chat-img" src="{{asset('asset/img/avatar/avatar-1.jpeg')}}" alt="message user image">
                                <div class="direct-chat-text">
                                    Sweet! So, what do you wanna do today?
                                </div>
                            </div>

                            <div class="direct-chat-msg mb-0">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name float-left">Victorina</span>
                                    <span class="direct-chat-timestamp float-right">19 Sep 8:30 Am</span>
                                </div>
                            <img class="direct-chat-img" src="{{asset('asset/img/avatar/avatar-1.jpeg')}}" alt="message user image">
                                <div class="direct-chat-text">
                                     et quasi architecto beatae vitae dicta sunt explicabo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-8  col-12">
                <div class="card">
                    <div class="card-status bg-success br-tr-3 br-tl-3"></div>
                    <div class="card-header">
                        <h4 class="card-title">Projects</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr class="bg-light">
                                    <th class="w-1">No</th>
                                    <th>Product Id</th>
                                    <th>User name</th>
                                    <th>Order time</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">001</span></td>
                                    <td><a href="store.html" class="text-inherit">#MN67GNF6</a></td>
                                    <td>Maria Grant</td>
                                    <td>08.00am</td>
                                    <td>03 Dec 2018</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td>$26,908</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">002</span></td>
                                    <td><a href="store.html" class="text-inherit">#4FGB65GN</a></td>
                                    <td>Stewart Bower</td>
                                    <td>10.00pm</td>
                                    <td>24 Dec 2018</td>
                                    <td><span class="badge badge-secondary">On hold</span></td>
                                    <td>$15,987</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">003</span></td>
                                    <td><a href="store.html" class="text-inherit">#RGB654NH</a></td>
                                    <td>Kevin Gill</td>
                                    <td>8.00pm</td>
                                    <td>2 Jan 2019</td>
                                    <td><span class="badge badge-warning">Pending</span> </td>
                                    <td>$12,456</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">004</span></td>
                                    <td><a href="store.html" class="text-inherit">#FKH329DM</a></td>
                                    <td>Alex White</td>
                                    <td>2.00pm</td>
                                    <td>27 Jan 2018</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>$20,469</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">005</span></td>
                                    <td><a href="store.html" class="text-inherit">#RK291HDE</a></td>
                                    <td>Jacob Brown</td>
                                    <td>4.55pm</td>
                                    <td>1 Feb 2019</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td>$15,845</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">006</span></td>
                                    <td><a href="store.html" class="text-inherit">#FDE924HR</a></td>
                                    <td>John Doe</td>
                                    <td>6.15pm</td>
                                    <td>8 Feb 2019</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$21,737</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">007</span></td>
                                    <td><a href="store.html" class="text-inherit">#GRE237TU</a></td>
                                    <td>Sarah Miller</td>
                                    <td>10.00am</td>
                                    <td>17 Feb 2019</td>
                                    <td><span class="badge badge-secondary">On hold</span></td>
                                    <td>$15,562</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span class="text-muted">008</span></td>
                                    <td><a href="store.html" class="text-inherit">#HED283YR</a></td>
                                    <td>Nathan	Roberts</td>
                                    <td>2.55pm</td>
                                    <td>21 Feb 2019</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>$26,749</td>
                                </tr>
                                <tr>
                                    <td><span class="text-muted">009</span></td>
                                    <td><a href="store.html" class="text-inherit">#CBD567TS</a></td>
                                    <td>Roberts Games</td>
                                    <td>4.20pm</td>
                                    <td>16 Feb 2019</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>$16,752</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
