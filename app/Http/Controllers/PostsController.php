<?php

namespace App\Http\Controllers;

use App\Models\Cate_Prod;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Products;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $post=Posts::paginate(10);
        $post->load('cate','prod');
        return view('Admin.post.view',compact('post'));
    }
    public function addform(){
        $cate=Categories::all();
        $prod=Products::all();
        return view('Admin.post.add',compact('cate','prod'));
        

    }
    public function del($id){
        Cate_Prod::where('post_id',$id)->delete();
        Posts::where('id', $id)->delete();
        return redirect(route('post'));
    }
}
