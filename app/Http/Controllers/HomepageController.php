<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $product=Products::where('status','<>',0)->paginate(10);
        return view('home',compact('product'));
    }
}
