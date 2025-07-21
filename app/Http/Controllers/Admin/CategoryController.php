<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    //all categories showing method
    public function index(){
       $data = DB::table('categories')->get();
       //return response()->json($data); get data showing json format
       return view('admin.category.category.index',compact('data'));
    }
}
