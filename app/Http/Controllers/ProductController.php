<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        

        // chỉ hiển thị status >0 để tránh lỗi sml
        // $product=Products::Where('status','>', '0')->get();

        
        $product=Products::paginate(10);
        $product->load('cate');
        return view('Admin.product.veiw',compact('product'));
    }
    public function addform(){
        $category=Categories::all();
        return view('Admin.product.add', compact('category'));
    }
    public function add(Request $request){
        $request->validate(
            [ 'name'=>'required',
            'price'=>'required|integer',
            'image'=>'required',
            'description'=>'required',
            ],[
            'name.required'=>'Tên Không Được Để Trống',
            'price.required'=>'Giá Không Được Để Trống',
            'image.required'=>'Ảnh Không Được Để Trống',
            'description.required'=>'Mô Tả Không Được Để Trống',
            ]
        );
        $prod=new Products();
        $prod->fill($request->all());
        $file = $request->image->getClientOriginalName();
        $newName=($prod->name.$file);
        $request->image->storeAs('public/image', $prod->name.$file);
        $prod->image=$newName;
        $prod->save();
        return redirect(route('product'))->with('message', 'Thêm Thành Công');
    }
    public function editform($id){
        $product=Products::where('id', $id)->first();
        $category=Categories::all();
        return view('Admin.product.edit', compact('category', 'product'));
    }
    public function edit(Request $request,$id){
        $request->validate(
            [ 'name'=>'required',
            'price'=>'required|integer',
            'description'=>'required',
            ],[
            'name.required'=>'Tên Không Được Để Trống',
            'price.required'=>'Giá Không Được Để Trống',
            'description.required'=>'Mô Tả Không Được Để Trống',
            ]
        );
        $prod=Products::find($id);
        $prodimg=$prod->image;
        $prod->fill($request->all());
        if($request->hasFile('image')){
            // dd($prodimg);
            File::delete(asset('public/image/'.$prodimg));
            $file = $request->image->getClientOriginalName();
            $newName=($prod->name.$file);
            $request->image->storeAs('public/image', $prod->name.$file);
            $prod->image=$newName;

        }
        else{
            $prod->image=$prodimg;
        }
        $prod->save();
        return redirect(route('product'))->with('message', 'Sửa Thành Công');
    }
    public function del($id){
        $prod=Products::find($id);
        File::delete($prod->image);
        $prod->delete();
        // Products::destroy($id);
        return redirect()->route('product')->with('message', 'Xóa Thành Công');
    }

}
