@extends('admin.layouts.app')

@section('content')

<section class="section">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Team</li>
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Defalut Datatables</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered border-t0 w-100 text-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">name</th>
                                    <th class="wd-20p">Position</th>
                                    <th class="wd-15p">Start date</th>
                                    <th class="wd-15p">action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)

                                <tr>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->postion}}</td>
                                    <td>{{$team->created_at->toDateString()}}</td>
                                    <td>{{$team->created_at->toDateString()}}</td>
                                    <td> <a href="#" class="btn btn-action btn-primary">Edit</a>
                                        <a href="#" class="btn btn-action btn-primary">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <form action="{{route("team.create")}}" method="">
                      <button class="btn btn-success mt-1"><i class="fe fe-settings followbtn ml-1"></i> Settings</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
