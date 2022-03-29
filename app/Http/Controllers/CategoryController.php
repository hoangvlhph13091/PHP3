<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category=Categories::all();
        return view('Admin.category.veiw',compact('category'));
    }
    public function addForm(){
        return view('Admin.category.add');
    }
    public function add(Request $request){
        $request->validate(
            [ 'name'=>'required','image'=>'required'],
            ['name.required'=>'Tên Không Được Để Trống','image.required'=>'Ảnh Không Được Để Trống']
        );
        $cate=new Categories();
        $cate->fill($request->all());
        $cate->save();
        return redirect(route('category'));
    }
    public function editForm($id){
        $cate=Categories::where('id', $id);
        dd($cate);
    
    }
    public function del($id){
        Categories::destroy($id);
        return redirect()->route('category')->with('message', 'Xóa Thành Công');
    }
}
