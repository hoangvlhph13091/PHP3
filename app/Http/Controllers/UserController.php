<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user=User::paginate(10);
        return view('Admin.user.view',compact('user'));
    }
}
