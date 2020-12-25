@extends('admin.layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route("profile")}}">Profile</a></li>
    <li class="breadcrumb-item active" aria-current="page">Settings</li>
    <li class="ml-auto d-lg-flex d-none">
        <span class="sparkline_bar mr-2 float-left"><canvas width="49" height="16" style="display: inline-block; width: 49px; height: 16px; vertical-align: top;"></canvas></span>
        <span class="float-left border-">
            <span class="mb-0 mt-1 mr-2">1,267</span><small class="mb-0 mr-3">[ Visitors ]</small>
        </span>
        <span class="sparkline_bar1 mr-2 float-left"><canvas width="49" height="16" style="display: inline-block; width: 49px; height: 16px; vertical-align: top;"></canvas></span>
        <span class="float-left">
            <span class="mb-0 mt-1 mr-2">215</span><small class="mb-0">[ Chats ]</small>
        </span>
    </li>
</ol>
<div class="row">
    <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Vertical Form</h4>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('admin.profile.update',$admin->id)}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                    <div class="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$admin->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                        </div>

                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$admin->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input type="file" name="profile_photo" class="form-control" id="exampleInputEmail1" value="{{$admin->profile_photo}}">
                    </div>
                    <input type="hidden" name="id" class="form-control" id="id" value="{{$admin->id}}">
                    <button type="submit" class="btn btn-primary mt-1 mb-0">Update</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
