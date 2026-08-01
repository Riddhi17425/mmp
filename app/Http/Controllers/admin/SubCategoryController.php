<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategory =  SubCategory::orderBy('created_at','desc')->where('is_delete','0')->paginate(15);
        return view('admin.subcategory.subcategoryindex',compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.subcategory.addsubcategory');

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
            'subcategory_name' => 'required',    
            ], 
            [
                'subcategory_name.required' => 'Please enter the product name.',
            ]);
        $store = new SubCategory;
        $store->subcategory_name = $request->get('subcategory_name');

        $store->url = $request->get('url');
        $store->description = $request->get('description');
        $store->save();
        return redirect('/admin/subcategory')->with('success', 'Category Added Successfully');
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
        $subcategory = SubCategory::find($id);
        return view('admin.subcategory.subeditcategory', compact('subcategory'));
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
        $store = SubCategory::find($id);
        $store->subcategory_name = $request->get('subcategory_name');
        $store->url = $request->get('url');
        $store->description = $request->get('description');
        $store->update();
        return redirect('/admin/subcategory')->with('success', 'Category Updated Successfully');
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
        $subcategory = SubCategory::find($id);
        $subcategory->is_delete = '1';
        $subcategory->update();
        return redirect()->back()->with('success', 'Your Category has been Deleted successfully!');
    }
}
