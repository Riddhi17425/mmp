<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use DB;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::orderBy('created_at','desc')->where('is_delete', '0')->paginate(15);
        //dd($data);
        return view('admin.event.listingevent', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.event');
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
                'name' => 'required',
                'place' => 'required',
            ], 
            [
                'name.required' => 'Please enter the Product name.',
                'place .required' => 'Please enter the client company name.',
            ]
        );
        $post = new Event;
        $post->name = $request->get('name');
        $post->place   = $request->get('place');
        $post->date   = $request->get('date');
        $post->stall_no   = $request->get('stall_no');
        $post->alt   = $request->get('alt');

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $upload_images = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = public_path('/event');
                $file->move($path, $filename);
                $upload_images[] = $filename;
            }
           $post->image = implode(',', $upload_images);
        } 
        $post->save();
        return redirect('/admin/event')->with('success', 'Product Trust Added successfully');
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
        $datas = Event::find($id);
        return view('admin.event.editevent',compact('datas'));
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
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'place' => 'required',
            ],
            [
                'name.required' => 'Please enter the client name.',
                'place.required' => 'Please enter the category name.',
            ]
        );
        $post = Event::find($id);
        $post->name = $request->get('name');
        $post->place = $request->get('place');
        $post->date = $request->get('date');
        $post->stall_no  = $request->get('stall_no');
        $post->alt   = $request->get('alt');
        
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $upload_images = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $path = public_path('/event');
                $file->move($path, $filename);
                $upload_images[] = $filename;
            }
           $post->image = implode(',', $upload_images);
        }
        $post->update();
        return redirect('/admin/event')->with('success', 'Product Trust Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delet = Event::find($id);
        $delet->is_delete = '0';
        $delet->update();
        return redirect('/admin/event')->with('success', 'Product Trust Deleted successfully');
    }

    public function searcheventlist(Request $request){
        $data = DB::table('event')->where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')->get();
                }
            }]
        ])->paginate(10);
        return view('admin.event.listingevent',compact('data'));
    }
}