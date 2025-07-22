<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use Illuminate\Support\Str;

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

    //Categories store method

    public function store(Request $request){
        $validated = $request->validate([
        'category_name' => 'required|unique:categories|max:55',
    ]);
        // Query builder
        // $data=array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = Str::slug($request->category_name,'-');
        // DB::table('categories')->insert($data);

        //Eloquent ORM
        Category::insert([
        "category_name"=> $request->category_name, 
        "category_slug"=> Str::slug($request->category_name,'-')
        ]);
        $notification = array('message'=>"Category Inserted !!",'alert-type'=>"success");
        return redirect()->back()->with($notification);

    }

    //category edit method

    public function edit($id){
        //Query builder
    //    $data = DB::table('categories')->where('id',$id)->first();
    //    return response()->json($data); //get data showing json format

        // Eloquent ORM
        try {
            $data = Category::findOrFail($id);
                    return response()->json($data);
            } catch (\Exception $e) {
                    return response()->json(['error' => $e->getMessage()], 500);
            }
    }
    
    //Categories update method

    public function update(Request $request){
        // Query builder
        // $data=array();
        // $data['category_name'] = $request->category_name;
        // $data['category_slug'] = Str::slug($request->category_name,'-');
        // DB::table('categories')->where('id',$request->id)->update($data);

        //Eloquent ORM
        $data = Category::findOrFail($request->id);
        $data->update([
                    "category_name"=> $request->category_name, 
                    "category_slug"=> Str::slug($request->category_name,'-')
        ]);
        $notification = array('message'=>"Category Updated !!",'alert-type'=>"success");
        return redirect()->back()->with($notification);

    }

    //Categories delete method

    public function destory($id){
        //Query builder
        // DB::table('categories')->where('id',$id)->delete();

        //Eloquent ORM
        $data = Category::find($id);
        $data->delete();

        $notification = array('message'=>"Category Deleted !!",'alert-type'=>"success");
        return redirect()->back()->with($notification);
    }

}
