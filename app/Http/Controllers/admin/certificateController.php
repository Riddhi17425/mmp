<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class certificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certi = Certificate::orderBy('created_at','desc')->where('is_delete', '0')->paginate(15);
        return view('admin.certificate.listingcertificate', compact('certi'));
    }

    /**s
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificate.certificate');
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
            'certificate_name' => 'required',
            'certificate_file' => 'required|file',
        ], [
                'certificate_name.required' => 'Please enter the certificate name.',
                'certificate_file.required' => 'Please enter the certificate file.',
            ]);

        $post = new Certificate;
        $post->certificate_name = $request->get('certificate_name');
        if($request->hasFile('certificate_file')) {
            $file = $request->file('certificate_file');
            $filename = $file->getClientOriginalName();
            $path = public_path('/CertificateFiles');
            $file->move($path, $filename);
            $post->certificate_file = $filename;
        }           
        $post->save();
        return redirect('/admin/certificate')->with('success', 'Certificate Added Successfully');
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
        $certificate = Certificate::find($id);
        return view('admin.certificate.editcertificate', compact('certificate'));
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
       
        $post = Certificate::find($id);
        $post->certificate_name = $request->get('certificate_name');

        if ($request->hasFile('certificate_logo')) {
            $files = $request->file('certificate_logo');
            $upload_images = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = public_path('/CertificateLogo');
                $file->move($path, $filename);
                $upload_images[] = $filename;
            }
            $post->certificate_logo = implode(',', $upload_images);
        }

        if ($request->hasFile('certificate_file')) {
            $files = $request->file('certificate_file');
            $upload_files = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = public_path('/CertificateFiles');
                $file->move($path, $filename);
                $upload_files[] = $filename;
            }
            $post->certificate_file = implode(',', $upload_files);
        }

        //dd($post);
        $post->update();
      
        return redirect('/admin/certificate')->with('success', 'Certificate Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delet = Certificate::find($id);
        $delet->is_delete = '1';
        $delet->update();
        return redirect('/admin/certificate')->with('success', 'Certificate Deleted Successfully');
    }
}
