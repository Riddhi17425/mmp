<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category =  Category::orderBy('created_at','desc')->where('is_delete','0')->paginate(15);
        return view('admin.category.categoryindex',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.addcategory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'category_name' => 'required',    
            ], 
            [
                'category_name.required' => 'Please enter the product name.',
            ]);
        $store = new Category;
        $store->category_name = $request->get('category_name');
        // $store->description = $request->get('description');
        $store->category_url = $request->get('category_url');
        $store->meta_title = $request->get('meta_title');
        $store->meta_description = $request->get('meta_description');
        
        if($request->hasFile('banner_image')) {
        $file = $request->file('banner_image');
        $filename = $file->getClientOriginalName();
        $path = public_path('/Category_Banner_Images');
        $file->move($path, $filename);
        $store->banner_image = $filename;
        }     
        if($request->hasFile('mobile_cat_image')) {
        $file = $request->file('mobile_cat_image');
        $filename = $file->getClientOriginalName();
        $path = public_path('/Category_Mobile_Images');
        $file->move($path, $filename);
        $store->banner_image = $filename;
        }     
        $store->save();
        return redirect('/admin/category')->with('success', 'Category Added Successfully');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::find($id);
        return view('admin.category.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $store = Category::find($id);
        $store->category_name = $request->get('category_name');
        // $store->description = $request->get('description');
        $store->category_url = $request->get('category_url');
        $store->meta_title = $request->get('meta_title');
        $store->meta_description = $request->get('meta_description');
        
        if($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Category_Banner_Images');
            $file->move($path, $filename);
            $store->banner_image = $filename;
        }   
        if($request->hasFile('mobile_cat_image')) {
        $file = $request->file('mobile_cat_image');
        $filename = $file->getClientOriginalName();
        $path = public_path('/Category_Mobile_Images');
        $file->move($path, $filename);
        $store->mobile_cat_image = $filename;
        }     
        $store->update();
        return redirect('/admin/category')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->is_delete = '1';
        $category->update();
        return redirect()->back()->with('success', 'Your Category has been Deleted successfully!');
    }
}
