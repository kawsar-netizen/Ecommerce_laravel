<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class CategoryController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    //all categories showing method
    public function index(){
    //    $data = DB::table('categories')->get();//Query builder
    $data = Category::all(); //Eloquent ORM
    //    return response()->json($data); get data showing json format
       return view('admin.category.category.index',compact('data'));
    }
}
