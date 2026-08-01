<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $data =  Blog::orderBy('created_at','desc')->where('is_delete','0')->paginate(15);
        return view('admin.blog.bloglisting',compact('data'));
    }

    public function addblog()
    {
        return view('admin.blog.addblog');
    }


    public function insertBlog(Request $request)
    {
    $payload = [
        'title' => $request->title,
        'description' => $request->description,
        'conclusion' => $request->conclusion,
        'url' => $request->url,
        'alt' => $request->alt,
        'publish_date' => date('Y-m-d', strtotime($request->publish_date)),
        'is_delete' => 0,
        'status' => $request->status,
        'short_description' => $request->short_description,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description
    ];

    if ($request->hasFile('banner_image')) {
        $bannerImage = $request->file('banner_image');
        $bannerImageName = 'banner_' . time() . '.' . $bannerImage->extension();
        $bannerImage->move(public_path('blog_banner'), $bannerImageName);
        $payload['banner_image'] = $bannerImageName;
    }

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = 'image_' . time() . '.' . $image->extension();
        $image->move(public_path('blog'), $imageName);
        $payload['image'] = $imageName;
    }

    if ($request->hasFile('cta_image')) {
        $ctaImage = $request->file('cta_image');
        $ctaImageName = 'cta_image_' . time() . '.' . $ctaImage->extension();
        File::ensureDirectoryExists(public_path('blog_cta_image'));
        $ctaImage->move(public_path('blog_cta_image'), $ctaImageName);
        $payload['cta_image'] = $ctaImageName;
    }

    if ($request->hasFile('og_image')) {
        $ogimage = $request->file('og_image');
        $ogimageName = 'og_image_' . time() . '.' . $ogimage->extension();
        $ogimage->move(public_path('blog_og_image'), $ogimageName);
        $payload['og_image'] = $ogimageName;
    }

    DB::table('blog')->insert($payload);

    return redirect('admin/blog')->with('success', 'Your Blog has been added successfully!');
    }

    public function deleteblog($id){
        $post = Blog::find($id);
        $post->is_delete = '1';
        $post->update();
        return redirect()->back()->with('success', 'Your Blog has been Deleted successfully!');
    }

    public function editblog($id){
        $data =  Blog::where('id',$id)->first();
        return view('admin.blog.editblog',compact('data'));
    }


    public function updateblog(Request $request)
    {
      
    
        $payload = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'conclusion' => $request->input('conclusion'),
            'url' => $request->input('url'),
            'alt' => $request->input('alt'),
            'publish_date' => date('Y-m-d', strtotime($request->input('publish_date'))),
            'status' => $request->input('status'),
            'short_description' => $request->input('short_description'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description')
        ];
    
        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageName = 'banner_' . time() . '.' . $bannerImage->extension();
            $bannerImage->move(public_path('blog_banner'), $bannerImageName);
            $payload['banner_image'] = $bannerImageName;
        }
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'image_' . time() . '.' . $image->extension();
            $image->move(public_path('blog'), $imageName);
            $payload['image'] = $imageName; 
        }

        if ($request->hasFile('cta_image')) {
            $ctaImage = $request->file('cta_image');
            $ctaImageName = 'cta_image_' . time() . '.' . $ctaImage->extension();
            File::ensureDirectoryExists(public_path('blog_cta_image'));
            $ctaImage->move(public_path('blog_cta_image'), $ctaImageName);
            $payload['cta_image'] = $ctaImageName;
        }
        
        if ($request->hasFile('og_image')) {
            $ogimage = $request->file('og_image');
            $ogimageName = 'og_image_' . time() . '.' . $ogimage->extension();
            $ogimage->move(public_path('blog_og_image'), $ogimageName);
            $payload['og_image'] = $ogimageName;
        }
    
        DB::table('blog')->where('id',$request->id)->update($payload);
    
        return redirect('admin/blog')->with('success', 'Your Blog has been updated successfully!');
    }
    

}
