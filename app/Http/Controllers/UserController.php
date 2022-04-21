<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user=User::orderBy('id', 'desc')->paginate(10);
        return view('Admin.user.view',compact('user'));
    }
    public function addform(){
        
        return view('Admin.user.add');
    }
    public function add(Request $request){
        $request->validate(
            [ 'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            ],[
            'name.required'=>'Tên Không Được Để Trống',
            'email.required'=>'Email Không Được Để Trống',
            'password.required'=>'Password Không Được Để Trống',
            ]
        );
        $user=new User();
        $user->fill($request->all());
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect(route('user'))->with('message', 'Thêm Thành Công');
    }
    public function editform($id){
        $user=User::find($id)->first();
        return view('Admin.user.edit',compact('user'));
    }
    public function edit($id ,Request $request){
        $request->validate(
            [ 'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            ],[
            'name.required'=>'Tên Không Được Để Trống',
            'email.required'=>'Email Không Được Để Trống',
            'password.required'=>'Password Không Được Để Trống',
            ]
        );
        $user=User::find($id);
        $user->fill($request->all());
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect(route('user'))->with('message', 'Thêm Thành Công');
    }
    public function del($id){
        User::destroy($id);
        return redirect(route('user'))->with('message','Xóa Thành Công');
    }
}
