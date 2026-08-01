<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductTrust;
use Illuminate\Http\Request;
use DB;
class ProductTrustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductTrust::orderBy('created_at','desc')->where('is_delete', '0')->paginate(15);
        //dd($data);
        return view('admin.product_trust.listingproducttrust', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_trust.producttrust');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'product_name' => 'required',
                'category_name' => 'required',
            ], 
            [
                'product_name.required' => 'Please enter the Product name.',
                'category_name .required' => 'Please enter the client company name.',
            ]
        );
        $post = new ProductTrust;
        $post->product_name = $request->get('product_name');
        $post->category_name   = $request->get('category_name');

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $upload_images = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = public_path('/producttrust');
                $file->move($path, $filename);
                $upload_images[] = $filename;
            }
           $post->image = implode(',', $upload_images);
        } 
        $post->save();
        return redirect('/admin/producttrust')->with('success', 'Product Trust Added successfully');
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
        $datas = ProductTrust::find($id);
        return view('admin.product_trust.editproducttrust',compact('datas'));
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
    
        $post = ProductTrust::find($id);
        $post->product_name = $request->get('product_name');
        $post->category_name    = $request->get('category_name');
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $upload_images = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = public_path('/producttrust');
                $file->move($path, $filename);
                $upload_images[] = $filename;
            }
           $post->image = implode(',', $upload_images);
        }
        $post->update();
        return redirect('/admin/producttrust')->with('success', 'Product Trust Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ProductTrust::find($id);
        $delete->is_delete = '1';
        $delete->update();
        return redirect('/admin/producttrust')->with('success', 'Product Trust Deleted successfully');
    }

    public function searchproducttrustlist(Request $request){
        $whatclientsays = DB::table('product_trust')->where([
            ['product_name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('product_name', 'LIKE', '%' . $s . '%')
                        ->orWhere('category_name   ', 'LIKE', '%' . $s . '%')
                        ->get();
                }
            }]
        ])->paginate(10);
        return view('admin.product_trust.listingproducttrust',compact('whatclientsays'));
    }
}