<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('created_at', 'desc')->where('is_delete', '0')->paginate(15);
        return view('admin.products.productlisting', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category     = Category::all();
        $productColor = [];
        //dd($category);
        return view('admin.products.addproduct', compact('category', 'productColor'));

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
            'product_name' => 'required',
            'producturl'   => 'required',
        ]);

        $post                           = new Product;
        $post->category_id              = $request->get('category_id');
        $post->product_name             = $request->get('product_name');
        $post->alt                      = $request->get('alt');
        $post->product_description      = $request->get('product_description');
        $post->product_shortdescription = $request->get('product_shortdescription');
        $post->meta_title               = $request->get('meta_title');
        $post->meta_description         = $request->get('meta_description');
        $post->producturl               = $request->get('producturl');

        // FAQs (unchanged)
        $faqs = [];
        if ($request->has('faq_questions') && $request->has('faq_answers')) {
            foreach ($request->get('faq_questions') as $index => $question) {
                $answer = $request->get('faq_answers')[$index] ?? null;
                if (! empty($question) && ! empty($answer)) {
                    $faqs[] = ['question' => $question, 'answer' => $answer];
                }
            }
        }
        $post->faq = ! empty($faqs) ? json_encode($faqs) : null;

        // NEW: repeatable tab blocks
        $post->product_tabs = $this->buildTabs($request);

        if ($request->hasFile('product_banner_image')) {
            $file     = $request->file('product_banner_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/Product_Banner_Images'), $filename);
            $post->product_banner_image = $filename;
        }
        if ($request->hasFile('mobile_image')) {
            $file     = $request->file('mobile_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/Product_Mobile_Images'), $filename);
            $post->mobile_image = $filename;
        }

        $post->save();

        return redirect('/admin/product')->with('success', 'Product Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $data     = Product::find($id);
        $values   = [];

        if ($data) {
            $values = explode(',', $data->product_color);
        }

        return view('admin.products.editproduct', compact('data', 'category', 'values'));
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
        $post                           = Product::find($id);
        $post->category_id              = $request->get('category_id');
        $post->product_name             = $request->get('product_name');
        $post->alt                      = $request->get('alt');
        $post->product_description      = $request->get('product_description');
        $post->product_shortdescription = $request->get('product_shortdescription');
        $post->meta_title               = $request->get('meta_title');
        $post->meta_description         = $request->get('meta_description');
        $post->producturl               = $request->get('producturl');

        $faqs = [];
        if ($request->has('faq_questions') && $request->has('faq_answers')) {
            foreach ($request->get('faq_questions') as $index => $question) {
                $answer = $request->get('faq_answers')[$index] ?? null;
                if (! empty($question) && ! empty($answer)) {
                    $faqs[] = ['question' => $question, 'answer' => $answer];
                }
            }
        }
        $post->faq = ! empty($faqs) ? json_encode($faqs) : null;

        $post->product_tabs = $this->buildTabs($request, $post->product_tabs);

        if ($request->hasFile('product_banner_image')) {
            $file     = $request->file('product_banner_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/Product_Banner_Images'), $filename);
            $post->product_banner_image = $filename;
        }
        if ($request->hasFile('mobile_image')) {
            $file     = $request->file('mobile_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/Product_Mobile_Images'), $filename);
            $post->mobile_image = $filename;
        }

        $post->update();

        return redirect('/admin/product')->with('success', 'Product Updated Successfully');
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
        $data            = Product::find($id);
        $data->is_delete = '1';
        //dd($data);
        $data->update();

        return redirect()->back()->with('success', 'Your product has been Deleted successfully!');

    }

    private function buildTabs(Request $request, $existingTabsJson = null)
    {
        if (! $request->has('items')) {
            return $existingTabsJson;
        }

        $existingTabs = [];
        if ($existingTabsJson) {
            $existingTabs = is_array($existingTabsJson) ? $existingTabsJson : json_decode($existingTabsJson, true);
        }

        $tabs = [];
        foreach ($request->get('items') as $index => $item) {
            $images = [];

            // keep previously uploaded images for this block if present
            if (isset($existingTabs[$index]['product_image']) && ! empty($item['keep_existing_image'])) {
                $images[] = $existingTabs[$index]['product_image'];
            }

            if ($request->hasFile("items.$index.product_image")) {
                foreach ($request->file("items.$index.product_image") as $img) {
                    $filename = time() . '_' . $img->getClientOriginalName();
                    $img->move(public_path('/Product_Images'), $filename);
                    $images[] = $filename;
                }
            }

            $tabs[] = [
                'tab_name'          => $item['tab_name'] ?? '',
                'description'       => $item['description'] ?? '',
                'tab_details'       => $item['tab_details'] ?? '',
                'tab_features'      => $item['tab_features'] ?? '',
                'tab_app'           => $item['tab_app'] ?? '',
                'technical_details' => $item['technical_details'] ?? '',
                'product_image'     => implode(',', $images),
            ];
        }

        return ! empty($tabs) ? json_encode($tabs) : null;
    }

}
