<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $video =  Video::orderBy('created_at','desc')->where('is_delete','0')->paginate(15);
        return view('admin.video.videoindex',compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.video.addvideo');

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
            'video_name' => 'required',    
            ], 
            [
                'video_name.required' => 'Please enter the product name.',
            ]);
        $store = new Video;
        $store->video_name = $request->get('video_name');
        $store->video_url = $request->get('video_url');
       
        $store->save();
        return redirect('/admin/video')->with('success', 'video Added Successfully');
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
        $video = Video::find($id);
        return view('admin.video.editvideo', compact('video'));
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
        $store = Video::find($id);
        $store->video_name = $request->get('video_name');
        $store->video_url = $request->get('video_url');
     
        $store->update();
        return redirect('/admin/video')->with('success', 'video Updated Successfully');
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
        $video = Video::find($id);
        $video->is_delete = '1';
        $video->update();
        return redirect()->back()->with('success', 'Your video has been Deleted successfully!');
    }
}
