<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductInquiry;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Log;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;
use SheetDB\SheetDB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class ProductFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
    
        $category = Category::where('category_url', $url)->first();
        $title=$category->meta_title;
        $ogimage = !empty($category->mobile_cat_image) 
        ? asset('public/Category_Mobile_Images/' . $category->mobile_cat_image) 
        : '';
        $description=$category->meta_description; 
        //dd($category);
        if ($category->category_url == 'polypropylene-yarns') {
            $ogimage = asset('public/front/images/Polypropylene_Yarns_(PP%20Yarns).png');
            return view('front.product', ['category' => $category , 'title' => $title , 'description' => $description, 'ogimage'=> $ogimage]);
        }
        if ($category->category_url == 'high-flow-pleated-filter') {
             $ogimage = asset('public/front/images/Highflow_Pleated_Filter_Cartridge-mobile.png');
            return view('front.highflow-pleated-filter', ['category' => $category , 'title' => $title , 'description' => $description, 'ogimage'=> $ogimage]);
        }

        $data['product'] = Product::where('category_id', $category->id)->get();
        //dd($data['product']);
        return view('front.productlist', compact('data', 'category','title','description', 'ogimage'));
    }
    
    public function productdetail($url)
    {
        
        if ($url === 'cages-dust-collector-filter-bags') {
            return redirect('https://mmpfilter.com/product-detail/dust-collector-filter-cages', 301);
        }
        
        $data['product_name'] = Product::where('is_delete', '0')->get();
        $data['products'] = Product::where('producturl', $url)->where('is_delete', '0')->first();
    
        if (!$data['products']) {
            abort(404, 'Product not found');
        }
        $cat = Category::find($data['products']->category_id);
    
        if (!$cat) {
            abort(404, 'Category not found');
        }
    
        $title = $data['products']->meta_title;
        $description = $data['products']->meta_description;
        $ogimage = $data['products']-> mobile_image;
        return view('front.product-detail', compact('data', 'cat', 'title', 'description', 'ogimage'));
    }
    

    public function productinquiry(Request $request) {
        $timestamp = Carbon::now()->format('Y-m-d H:i:s');
    
        $info = [
            'name' => $request->name,
            'email' => $request->email,
            'product_name' => $request->product_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'message' => $request->message,
            'created_at' => $timestamp,
        ];
    
        ProductInquiry::create($info);
    
        $sheetsData = [
            'from_type' => "Product inquiry",
            'name' => $request->name,
            'email' => $request->email,
            'product' => $request->product_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'company_name' => '',
            'message' => $request->message,
            'formattedDate' => $timestamp,
        ];
    
        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbzdSw8fxF7U4fJsc8CuT3_KEUwsgj1CqBAw_VJJ7xIedeeHx1bO3WIowVdin2YZhrYzuQ/exec', $sheetsData);
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data_sent' => $sheetsData
            ]);
        }
    
        return redirect('thank-you');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $data = Product::where('id',$id)->first();
        //$images = [];
        // dd($data['cert']->certificate_logo);
        return view('front.productfront',compact('data')); 

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
    }
    
    public function pharmaindustry(){
        $title = "Filtration Solution For Pharma Industry" ;
        $description = "mmp provides advanced filtration solutions for pharma industry, removing impurities & microbes with membrane, depth, and sterile filters for product safety." ;
        $ogimage = asset('public/front/images/filter-cartridges-in-Pharma.jpg');
      return view('front.pharma-Industry',compact('title', 'description', 'ogimage'));
    }
   
    public function chemicalindustry(){
        $title = "Chemical Industry: Filtration Solutions for Industries " ;
        $description = "mmp offers chemical filtration solutions to remove impurities from liquids or gases, using filters that separate solids or neutralize chemicals. Contact Us" ;
         $ogimage = asset('public/front/images/MMp_chemical_img.png');
        return view('front.chemical-Industry',compact('title', 'description', 'ogimage'));
    }
    
    public function Watertreatment(){
        $title = "Water & Wastewater Treatment Industry" ;
        $description = "MMP Water Treatment Systems offer advanced solutions to remove bacteria, metals & contaminants—delivering clean, safe water for homes & industries." ;
         $ogimage = asset('public/front/images/challenges-in-water-treatment.png');
        return view('front.tratment',compact('title', 'description', 'ogimage'));
    }

    public function foodbeverage(){
        $title = "Food and Beverage Filtration Solutions | mmp Filter" ;
        $description = "mmp filtration is widely used in the food & beverage industry to remove contaminants from raw materials, final products, and packaging for safety and quality." ;
        $ogimage = asset('public/front/images/food-filtration-solutions.png');
        return view('front.foodbeverage',compact('title', 'description', 'ogimage'));
    }
    
    public function textiletndustry(){
        $title = "Filtration Solutions for Textile Industry" ;
        $description = "MMP filtration in textiles separates solids from liquids or gases, ensuring purity, boosting efficiency, and reducing pollution across production stages." ;
        $ogimage = asset('public/front/images/texttile-1.png');
        return view('front.Textile-Industry',compact('title', 'description', 'ogimage'));
    }
    
    public function dairyindustry(){
        $title = "Dairy Industry: Filtration solutions for Dairy" ;
        $description = "For over 3 decades, mmp has specialized in membrane process solutions for the dairy industry—quality, efficiency, and innovation." ;
        $ogimage = asset('public/front/images/filtration-for-the-modern-dairy-industry.png');
        return view('front.Dairy-Industry',compact('title', 'description', 'ogimage'));
    }
    
    public function oilandgasindustry(){
        $title = "Oil & Gas Filtration and Separation Solutions" ;
        $description = "mmp provides industry-specific filtration solutions for oil & gas—ensuring product quality, equipment protection, and regulatory compliance." ;
         $ogimage = asset('public/front/images/oil-and-gas-industry-filtration.png');
        return view('front.oilindustry',compact('title', 'description', 'ogimage'));
    }
    
    public function cementindustry(){
        $title = "Filtration Solutions For Cement Industry" ;
        $description = "mmp systems for the cement industry capture particulate matter from exhaust gases using pleated bag filters and cartridges to reduce dust and emissions." ;
        $ogimage = asset('public/front/images/cement-applications.png');
        return view('front.Cement-Industry',compact('title', 'description', 'ogimage'));
    }
   
    public function powerindustry(){
        $title = "Filtration Solutions For Power Plant: mmp Filter" ;
        $description = "MMP offers comprehensive filtration solutions for power generation, ensuring efficient water treatment and clarity in critical industrial processes." ;
        $ogimage = asset('public/front/images/filtration-solutions-for-power-plant.png');
        return view('front.powerplant',compact('title', 'description', 'ogimage'));
    }
     public function woundfiltercartridgemachine(){
        $title = "Wound Filter Cartridge Machine" ;
        $description = "mmp's Wound Filter Cartridge Machine ensures precision, efficiency, and durability, delivering high-quality filtration solutions for all industries. Contact Us." ;
        $ogimage = asset('public/front/images/Wound_Filter_Cartridge_Machine-1.png');
        return view('front.Wound-Filter-Cartridge-Machine',compact('title', 'description', 'ogimage'));
    }
}
