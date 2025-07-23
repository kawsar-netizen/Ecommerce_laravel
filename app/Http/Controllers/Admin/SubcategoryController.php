<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
           public function __construct()
    {
        $this->middleware('auth');
    }

    //all subcategory showing method

    public function index(){
        //Query builder with one to one
        // $data = DB::table('subcategories')->leftJoin('categories','subcategories.category_id','categories.id')->select('subcategories.*','categories.category_name')->get();
        // Eloquent ORM
        $data=Subcategory::all();
       $category = Category::all();
       //$category = DB::table('categories')->get();
       return view('admin.category.subcategory.index',compact('data','category'));
    }

    //sub category store method

    public function store(Request $request){
        $validated = $request->validate([
        'subcategory_name' => 'required|max:55',
    ]);
        // Query builder
        // $data=array();
        // $data['category_id'] = $request->category_id;
        // $data['subcategory_name'] = $request->subcategory_name;
        // $data['subcat_slug'] = Str::slug($request->subcategory_name,'-');
        // dd($data);
        // DB::table('subcategories')->insert($data);

        // Eloquent ORM
        Subcategory::insert([
        "category_id"=> $request->category_id, 
        "subcategory_name"=> $request->subcategory_name, 
        "subcat_slug"=> Str::slug($request->subcategory_name,'-')
        ]);

        $notification = array('message'=>"Sub Category Inserted !!",'alert-type'=>"success");
        return redirect()->back()->with($notification);
    }

        //subcategory edit method

                public function edit($id){

                // Eloquent ORM
                // $data = Subcategory::findOrFail($id);
                // $category = Category::all();
                    
                //Query builder
                   $data = DB::table('subcategories')->where('id',$id)->first();
                   $category = DB::table('categories')->get();
                //    return response()->json($data); //get data showing json format
                 return view('admin.category.subcategory.edit',compact('data','category'));
                }


            // Sub Categories update method

            public function update(Request $request){
                // Query builder
                // $data=array();
                // $data['category_id'] = $request->category_id;
                // $data['subcategory_name'] = $request->subcategory_name;
                // $data['subcat_slug'] = Str::slug($request->subcategory_name,'-');
                // DB::table('subcategories')->where('id',$request->id)->update($data);

                //Eloquent ORM
                $data = Subcategory::findOrFail($request->id);
                $data->update([
                $data['category_id'] = $request->category_id,
                $data['subcategory_name'] = $request->subcategory_name,
                $data['subcat_slug'] = Str::slug($request->subcategory_name,'-')
                ]);
                $notification = array('message'=>"Sub Category Updated !!",'alert-type'=>"success");
                return redirect()->back()->with($notification);

            }

        //Sub Categories delete method

    public function destory($id){
        //Query builder
        // DB::table('subcategories')->where('id',$id)->delete();

        //Eloquent ORM
        $data = Subcategory::find($id);
        $data->delete();

        $notification = array('message'=>"Sub Category Deleted !!",'alert-type'=>"success");
        return redirect()->back()->with($notification);
    }
}
