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
    public function del($id){
        User::destroy($id);
        return redirect(route('user'))->with('message','Xóa Thành Công');
    }
}
