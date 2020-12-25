@extends('admin.layouts.app')

@section('content')
<div class="app-content">
    <section class="section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20 text-white">
                    <div class="card-body text-center profile-bg">
                        <div class="text-center">
                            <div class="userprofile social">
                                <div class="userpic"> <img src="{{Auth::guard('admin')->user()->profile_photo}}" alt="" class="userpicimg"> </div>
                                <h3 class="username">{{Auth::guard('admin')->user()->name}}</h3>
                                <p>Web Designer, USA</p>
                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="text-center mb-2">
                                    <span><i class="fa fa-star text-primary"></i></span>
                                    <span><i class="fa fa-star text-primary"></i></span>
                                    <span><i class="fa fa-star text-primary"></i></span>
                                    <span><i class="fa fa-star-half-o text-primary"></i></span>
                                    <span><i class="fa fa-star-o text-primary"></i></span>
                                </div>
                                <div class="socials text-center"> <a href="" class="btn btn-circle btn-facebook ">
                                    <i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
                                    <i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
                                    <i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <p><b>Name :</b>  {{Auth::guard('admin')->user()->name}}</p>
                        <p><b>Emial :</b> {{Auth::guard('admin')->user()->email}}</p>
                        <p><b>Phone :</b>{{Auth::guard('admin')->user()->number}}</p>
                        <p><b>Address : </b> {{Auth::guard('admin')->user()->address}}</p>
                        <p class="mb-0"><b>Story : </b> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row d-flex">
                            <div class="col-lg-6">
                                <ul class="nav nav-pills countlist mb-0" role="tablist">
                                  <li>
                                        <h4>7238<br>
                                      <small class="text-muted">Followers</small> </h4>
                                  </li>
                                  <li>
                                    <h4>281<br>
                                      <small class="text-muted">Following</small> </h4>
                                  </li>
                                  <li>
                                    <h4>9043<br>
                                      <small class="text-muted">Activity</small> </h4>
                                  </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="float-right d-none d-lg-block">
                                 {{--  <button class="btn btn-primary mt-1"><i class="fe fe-users followbtn ml-1"></i> Follow</button> --}}
                                <form action="{{route('profile.edit',Auth::guard('admin')->user())}}" method="GET">
                                    @csrf
                                    <button class="btn btn-success mt-1"><i class="fe fe-settings followbtn ml-1"></i> Settings</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top p-4">
                        <h5 class="media-heading mt-1">About</h5>
                        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
                        <p class="mb-3">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        <div class="">
                            <form>
                                <textarea class="form-control" placeholder="What are you doing right now?"></textarea>
                                <br>
                                <ul class="nav nav-pills pull-left">
                                    <li><a href="#" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-volume-up"></i></a></li>
                                    <li><a href="#" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                    <li><a href="#" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                </ul>
                                <button type="submit" class="btn btn-sm btn-success pull-right"><i class="fa fa-share ml-1"></i> Share</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card skills">
                    <h5 class="card-header">Skills</h5>
                    <div class="card-body mt-0">
                        <div class="chats-wrap media-list">
                            <div class="chat-details mt-0 p-2 mb-1">
                                <h4 class="mb-0">
                                    <span class="h6 font-weight-normal">Html</span>
                                    <span class="float-right p-1  btn btn-sm text-default">
                                    <b>80</b>%</span>
                                </h4>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar  bg-primary w-80"></div>
                                </div>
                            </div>
                            <div class="chat-details  p-2 mb-1">
                                <h4 class="mb-0">
                                    <span class="h6 font-weight-normal"> Wordpress</span>
                                    <span class="float-right p-1  btn btn-sm text-default">
                                        <b>50</b>%</span>
                                </h4>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                            <div class="chat-details  p-2 mb-1">
                                <h4 class="mb-0">
                                    <span class="h6 font-weight-normal"> jQuery</span>
                                    <span class="float-right p-1  btn btn-sm text-default">
                                        <b>50</b>%</span>
                                </h4>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-secondary w-50"></div>
                                </div>
                            </div>
                            <div class="chat-details  p-2 mb-1">
                                <h4 class="mb-0">
                                    <span class="h6 font-weight-normal"> Photoshop</span>
                                    <span class="float-right p-1  btn btn-sm text-default">
                                        <b>90</b>%</span>
                                </h4>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-success w-90"></div>
                                </div>
                            </div>
                            <div class="chat-details p-2 mb-1">
                                <h4 class="mb-0">
                                    <span class="h6 font-weight-normal">Angular js</span>
                                    <span class="float-right p-1  btn btn-sm text-default">
                                        <b>30</b>%</span>
                                </h4>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-danger w-30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Recently Connected</h4>
                    </div>
                    <div class="card-body pt-3 pb-3">
                        <div class="memberblock mb-0">
                            <div class="row ">
                                <div class="col-lg-4 pl-1 pr-1 m-t-5 m-b-5">
                                    <a href="" class="member"> <img src="assets/img/avatar/avatar-2.jpeg" alt="">
                                        <div class="memmbername">Ajay Sriram</div>
                                    </a>
                                </div>
                                <div class="col-lg-4 pl-1 pr-1 m-t-5 m-b-5">
                                    <a href="" class="member"> <img src="assets/img/avatar/avatar-3.jpeg" alt="">
                                        <div class="memmbername">Rajesh Sriram</div>
                                    </a>
                                </div>
                                <div class="col-lg-4 pl-1 pr-1 m-t-5 m-b-5">
                                    <a href="" class="member"> <img src="assets/img/avatar/avatar-4.jpeg" alt="">
                                        <div class="memmbername">Manish Sriram</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-4 pl-1 pr-1 mb-0 m-t-5 m-b-5">
                                    <a href="" class="member"> <img src="assets/img/avatar/avatar-6.jpg" alt="">
                                        <div class="memmbername">John Sriram</div>
                                    </a>
                                </div>
                                <div class="col-lg-4 pl-1 pr-1 mb-0 m-t-5 m-b-5">
                                    <a href="" class="member"> <img src="assets/img/avatar/avatar-5.jpeg" alt="">
                                        <div class="memmbername">Chandra Amin</div>
                                    </a>
                                </div>
                                <div class="col-lg-4 pl-1 pr-1 mb-0 m-t-5 m-b-5">
                                    <a href="" class="member"> <img src="assets/img/avatar/avatar-1.jpeg" alt="">
                                        <div class="memmbername">Julian	Knox</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 profile-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="media mt-0">
                                    <div class="media-left"> <a href="javascript:void(0)"> <img src="assets/img/avatar/avatar-2.jpeg" alt="" class="media-object"> </a> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Lucky Sans<br>
                                        <small class="text-muted"><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>
                                        <ul class="nav nav-pills pull-left">
                                            <li><a href="" title=""><i class="fa fa-thumbs-o-up"></i> 794</a></li>
                                            <li><a href="" title=""><i class="fa fa-commenting-o"></i> 253</a></li>
                                            <li><a href="" title=""><i class="fa fa-share"></i> 24</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 commentsblock mt-2 pb-2">
                                <div class="media">
                                    <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="assets/img/avatar/avatar-3.jpeg" class="media-object"> </a> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Astha Smith</h4>
                                        <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                                    </div>
                                </div>
                                <div class="media overflow-hidden">
                                    <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="assets/img/avatar/avatar-2.jpeg" class="media-object"> </a> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Lucky Sans</h4>
                                        <p>Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </p>

                                        <div class="media">
                                            <div class="media-left"> <a href="javascript:void(0)"> <img alt="64x64" src="assets/img/avatar/avatar-3.jpeg" class="media-object"> </a> </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Astha Smith</h4>
                                                <p>tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                <ul class="nav nav-pills pull-left">
                                                    <li><a href="" title=""><i class="fa fa-thumbs-o-up"></i> 94</a></li>
                                                    <li><a href="" title=""><i class="fa fa-commenting-o"></i> 53</a></li>
                                                    <li><a href="" title=""><i class="fa fa-share"></i> 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class=" border">
                            <div class="col-md-12">
                                <div class="media">
                                    <div class="media-left"> <a href="javascript:void(0)"> <img src="assets/img/avatar/avatar-2.jpeg" alt="" class="media-object"> </a> </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"> Lucky Sans<br>
                                        <small class="text-muted"><i class="fa fa-clock-o"></i> Yesterday, 2:00 am</small> </h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio. </p>
                                        <ul class="nav nav-pills pull-left">
                                            <li><a href="" title=""><i class="fa fa-thumbs-o-up"></i> 385</a></li>
                                            <li><a href="" title=""><i class="fa fa-commenting-o"></i> 75</a></li>
                                            <li><a href="" title=""><i class="fa fa-share"></i> 32</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="status-upload mt-2 mb-3 d-inline-block w-100">
                                    <form>
                                        <label>Comment</label>
                                        <textarea class="form-control" placeholder="Comment here"></textarea>
                                        <br>
                                        <ul class="nav nav-pills pull-left">
                                            <li><a href="#" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-volume-up"></i></a></li>
                                            <li><a href="#" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                            <li><a href="#" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                        </ul>
                                        <button type="submit" class="btn btn-primary btn-sm pull-right"> Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
