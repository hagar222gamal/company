<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function getLogin()
    {
     return view('admin.auth.login');
    }

     public function save()
    {
        $admin= new Admin;
        $admin->name='hagar';
        $admin->email='hagar@hagar.com';
        $admin->password=bcrypt('123456789');
        $admin->save();
    }

    public function login(LoginRequest $request){

        $remember_me =$request->has('remember_me')?true:false;
        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
             return redirect() -> route('admin.dashboard');
         }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
         return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
