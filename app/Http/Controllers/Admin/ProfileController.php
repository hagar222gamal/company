<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Admin $admin)
    {
      return view('admin.extend.profile' , compact($admin));
    }
}
