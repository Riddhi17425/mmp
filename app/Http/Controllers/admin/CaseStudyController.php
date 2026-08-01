<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CaseStudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data =  CaseStudy::orderBy('created_at','desc')->where('is_delete','0')->paginate(15);
        return view('admin.casestudy.casestudylisting',compact('data'));
    }

    public function addcasestudy()
    {
        return view('admin.casestudy.addcasestudy');
    }


    public function insertcasestudy(Request $request)
    {
    $payload = [
        'title' => $request->title,
        'description' => $request->description,
        'url' => $request->url,
        'alt' => $request->alt,
        'long_description' => $request->long_description,
        'is_delete' => 0,
        'short_description' => $request->short_description,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description
    ];

    if ($request->hasFile('banner_image')) {
        $bannerImage = $request->file('banner_image');
        $bannerImageName = 'banner_' . time() . '.' . $bannerImage->extension();
        $bannerImage->move(public_path('casestudy_banner'), $bannerImageName);
        $payload['banner_image'] = $bannerImageName;
    }

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = 'image_' . time() . '.' . $image->extension();
        $image->move(public_path('casestudy'), $imageName);
        $payload['image'] = $imageName;
    }
    if ($request->hasFile('og_image')) {
        $ogimage = $request->file('og_image');
        $ogimageName = 'og_image_' . time() . '.' . $ogimage->extension();
        $ogimage->move(public_path('casestudy_og_image'), $ogimageName);
        $payload['og_image'] = $ogimageName;
    }

    DB::table('casestudy')->insert($payload);

    return redirect('admin/casestudy')->with('success', 'Your Case Study has been added successfully!');
    }

    public function deletecasestudy($id){
        $post = CaseStudy::find($id);
        $post->is_delete = '1';
        $post->update();
        return redirect()->back()->with('success', 'Your Case Study has been Deleted successfully!');
    }

    public function editcasestudy($id){
        $data =  CaseStudy::where('id',$id)->first();
        return view('admin.casestudy.editcasestudy',compact('data'));
    }


    public function updatecasestudy(Request $request)
    {
      
    
        $payload = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'url' => $request->input('url'),
            'alt' => $request->input('alt'),
             'long_description' => $request->long_description,
            'short_description' => $request->input('short_description'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description')
        ];
    
        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageName = 'banner_' . time() . '.' . $bannerImage->extension();
            $bannerImage->move(public_path('casestudy_banner'), $bannerImageName);
            $payload['banner_image'] = $bannerImageName;
        }
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'image_' . time() . '.' . $image->extension();
            $image->move(public_path('casestudy'), $imageName);
            $payload['image'] = $imageName; 
        }
        
        if ($request->hasFile('og_image')) {
            $ogimage = $request->file('og_image');
            $ogimageName = 'og_image_' . time() . '.' . $ogimage->extension();
            $ogimage->move(public_path('casestudy_og_image'), $ogimageName);
            $payload['og_image'] = $ogimageName;
        }
    
        DB::table('casestudy')->where('id',$request->id)->update($payload);
    
        return redirect('admin/casestudy')->with('success', 'Your Case Study has been updated successfully!');
    }
    

}
