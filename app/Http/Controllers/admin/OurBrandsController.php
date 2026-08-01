<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OurBrands;
use Illuminate\Http\Request;
use DB;

class OurBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = OurBrands::orderBy('created_at', 'desc')->where('is_delete', '0')->paginate(5);
        return view('admin.our_brands.displayourbrands', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.our_brands.ourbrands');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ], [
                'name.required' => 'Please enter the client name.',
                'logo.required' => 'Please enter the client name.',
                'logo.image' => 'The client logo must be an image file.',
                'logo.mimes' => 'The client logo must be a file of type: jpeg, png, jpg, gif.',
                'logo.max' => 'The client logo size should not exceed 2MB.',
            ]);

        $post = new OurBrands;
        $post->name = $request->get('name');
        if ($request->hasFile('logo')) {
            $file = $request->file('logo'); 
            $filename = uniqid() . '.png';
            $path = public_path('/OurBrands');
            $file->move($path, $filename);
            $post->logo = $filename;
        }
        $post->save();
        return redirect('admin/displayourbrands')->with('success', 'Client Added Successfully');
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
        $logo = OurBrands::find($id);
        return view('admin.our_brands.editourbrands', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $validatedData = $request->validate([
            'name' => 'required',
        ], [
                'name.required' => 'Please enter the client name.',
            ]);

        $post = OurBrands::find($id);
        $post->name = $request->get('name');

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = uniqid() . '.png';
            $path = public_path('/OurBrands');
            $file->move($path, $filename);
            $post->logo = $filename;
        }

        $post->update();

        return redirect('admin/displayourbrands')->with('success', 'Client Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delet = OurBrands::find($id);
        $delet->is_delete = '1';
        $delet->update();
        return redirect('/admin/displayourbrands')->with('success', 'Client Deleted Successfully');
    }

    public function searchbrandlist(Request $request){
        $client = DB::table('our_brands')->where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                    ->get();
                }
            }]
        ])->paginate(10);
        return view('admin.our_brands.displayourbrands',compact('client'));
    }
}

