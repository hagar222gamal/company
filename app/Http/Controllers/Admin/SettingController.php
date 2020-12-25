<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\Admin;
use App\Traits\imageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    use imageTrait;

    public function edit($id)
    {
        $admin=Admin::find($id);

        if (!$admin) {
            abort(404, 'Not found');
        }
        return view('admin.extend.sitting', compact('admin'));
    }
    public function update(AdminUpdateRequest $req,$id)
    {

            $admin = Admin::find($id);
            //dd($admin);

            if (!$admin) {
                abort(404, 'Not found');
            }
            $data =$req->all(); //array
            if($req->has('passsword')&&$req->get('password')!='')
            {
                $data['password'] =Hash::make($req->password);//
            }
            else{
                unset($data['password']);
            }
            if($req->hasFile('profile_photo'))
            {
                $data['profile_photo']=$this->saveImage($req->profile_photo,'admin/admin_image'); //1.png =>258855.png
                //unset($data['profile_photo'])
            }

            //name=>data['name] ..email=>data['email'] password=>data

            $admin->update($data);


            return redirect()->route('profile');

    }

    }

