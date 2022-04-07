<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category=Categories::paginate(10);
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
        return redirect(route('category'))->with('message', 'Thêm Thành Công');
    }
    public function editForm($id){
        $cate=Categories::where('id', $id)->first();
        return view('Admin.category.edit', compact('cate'));
    
    }
    public function edit(Request $request,$id){
        $request->validate(
            [ 'name'=>'required','image'=>'required'],
            ['name.required'=>'Tên Không Được Để Trống','image.required'=>'Ảnh Không Được Để Trống']
        );
        $cate=Categories::find($id);
        $cate->fill($request->all());
        $cate->save();
        return redirect(route('category'))->with('message', 'sửa Thành Công');
    }
    public function del($id){
        // xóa cate xóa luôn product lmao
        // Products::where('category', $id)->delete();
        // chuyển status về 0 ?????
        $products=Products::where('category', $id)->get();
        foreach($products as $p){
            $p->status = 0;
            $p->save();
        }
        Categories::destroy($id);
        return redirect()->route('category')->with('message', 'Xóa Thành Công');
    }
}
