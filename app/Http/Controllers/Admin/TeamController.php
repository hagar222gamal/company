<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Traits\imageTrait;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    use imageTrait;

    public function show()
    {
        $teams=Team::all();
        return view('admin.extend.team.team' , compact('teams'));
    }

    public function create()
    {

        return view('admin.extend.team.create');
    }

    public function store(TeamRequest $req)
    {

        $data=$req->all();
       // unset($data['image']);
        $data['image'] = $this->saveImage($req->image, 'admin/team');
       $teams=Team::create($data);
       return redirect()->route('team')->with(['success' => 'done']);

    }
}
