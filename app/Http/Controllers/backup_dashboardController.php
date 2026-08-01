<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductTrust;
use App\Models\OurBrands;
use App\Models\Event;
use App\Models\Contact;
use App\Models\HeaderInquiry;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
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

class dashboardController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function login(){
         return view('auth.login');
     }
     public function admin(){
         return view('admin.admin');
     }
    public function index()
    {
        // dd(phpinfo());
        $title = "MMP Filtration: Manufacturer of PP Yarn and Filter Cartridges";
        $description = "MMP Filtration, established in 1994, is a prominent manufacturer, supplier & exporter of PP Yarn, Filter Cartridges, Filter Housings, and Spun Filters in India.";
        $data['producttrust'] = ProductTrust::where('is_delete','0')->get();
        $data['ourbrands'] = OurBrands::where('is_delete','0')->get();
        $data['event'] = Event::where('is_delete','0')->latest()->take(2)->get();
        $data['video'] = Video::where('is_delete','0')->get();
        // dd($data['video']);
        $data['blog'] = DB::table('blog')->where('is_delete', '0')->select('id', 'title', 'image','banner_image', 'short_description', 'publish_date', 'url','alt','alt_banner')->orderBy('id', 'desc')->take(3)->get();
        
        return view('front.dashboard',compact('data','title', 'description'));
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
 
    public function about(){
        $title = "About Us: mmp Filter";
        $description = "Since our inception in 1994, mmp has grown to become one of India's premier manufacturers of filter cartridges & filtration systems, serving various industries";
        $data['ourbrands'] = OurBrands::where('is_delete','0')->get();
        return view('front.about',compact('data','title', 'description'));
    } 
    public function machinery(){
        $title = "Machinery We Manufacture | mmp filtration";
        $description = "mmp, a leading wound filter cartridge machinery manufacturer, offers simple, flexible machines that wind various yarns like polypropylene, cotton, and polyester.";
        return view('front.Machinery-we-manufacture',compact('title', 'description'));
    } 
    public function pph(){
        $title = "PPH One Piece Filter Housing";
        $description = "mmp is a trusted manufacturer of high-quality PPH One Piece Filter Housings, offering durable and efficient solutions for various industrial filtration needs.";
        return view('front.pph',compact('title', 'description'));
    } 
    public function zerofoaming(){
        $title = "Zero Foaming Yarn | mmp filtration ";
        $description = "Leading PP Yarns Manufacturer mmp offers Zero Foaming Yarn for unmatched durability & performance. Choose our yarn solutions for industrial & commercial needs.";
        return view('front.zerofoaming',compact('title', 'description'));
    } 
     public function cartridges_in_usa(){
        $title = "Buy Water Filter Cartridges Online In USA";
        $description = "Looking for water filter cartridges in your city in USA? MMP offers filter cartridges like melt-blown, wound filter & PP filtration yarn for over 20 years.";
        return view('front.filter-cartridges-in-usa ',compact('title', 'description'));
    } 
    public function certifications(){
        $title = "Certifications | MMP Filtration";
        $description = "MMP Filtration Pvt Ltd, NSF Certified for MELT BLOWN CARTRIDGES - OCEANIC® & LAGOON®, meets NSF/ANSI/CAN-61 & 372 standards for safe drinking water system components. ";
        $data['certificates'] = DB::table('certificate')->where('is_delete','0')->orderBy('id', 'desc')->get();
        //dd($data['certificates']);
        return view('front.certifications',compact('data','title', 'description'));
    } 

       public function blog(){
        $title="Blog - Discover the Latest Insights from mmp Filtration";
        $description="Latest news, insights, and trends in filtration technology. Our team of experts offers actionable advice to leverage filtration solutions and drive business success."; 
        $blog = DB::table('blog')->where('is_delete', '0')->select('id', 'title', 'image','banner_image', 'short_description', 'publish_date', 'url','alt')->orderBy('id', 'desc')->get();
        //dd($blog);
        return view('front.blog', compact('blog', 'title', 'description'));
    }

    public function blogdetail($url){
        $blogdetail = Blog::where('url',$url)->first();
        //dd($blogdetail);
        $title = $blogdetail->meta_title;
        $description = $blogdetail->meta_description;
        $og_image = $blogdetail->og_image;
        // dd($og_image);
        return view('front.blog-detail',compact('blogdetail', 'title', 'description','og_image')); 
    } 
    public function contact(){
        $title = "Contact us for any kind of filtration requirements at MMP Filtration";
        $description = "At MMP Filtration, we are happy to address any of your requirements and queries for filter cartridges and filter housings. Contact us now.";
        $productname = Product::get();
        //dd($productname);
        return view('front.contact',compact('productname','title', 'description'));
    } 
    public function partnership(){
        $title = "";
        $description = "";
        $productname = Product::get();
        //dd($productname);
        return view('front.partnership',compact('productname','title', 'description'));
    } 

    // public function contactstore(Request $request){
    //     $payoad = ['name'=>$request->name,'email'=>$request->email,'product_type'=>$request->product_type, 'phone'=>$request->phone,'message'=>$request->message];
    //     DB::table('contact')->insert($payoad);
    //     $info = [
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'phone' => $request->input('phone'),
    //         'product_type' => $request->input('product_type'),
    //         'message' => $request->input('message'),
    //     ];
        
    //     $data['thankyou'] = 'Thank you ' . $info['name'] . ' for reaching out to MMP filter. We have received your inquiry. We will contact you soon for the same.';
        
    //     Mail::send('mail.thankyou', $data, function ($message) use ($info) {
    //         $message->to($info['email'])
    //             ->subject('Thank You');
    //     });
        
    //      Mail::send('mail.inquirydata', ['inquiryquote' => $info], function ($message) use ($info) {
    //         $message->to('arvind@intelliworkz.tech')
    //             ->subject('Contact Us Details');
    //     });
    //      return redirect('thank-you');
    // }
    
    
    
//     public function contactstore(Request $request){
//     $rules = [
//         'name' => 'required',
//         'email' => 'required|email',
//         'product_type' => 'required',
//         'phone' => 'required',
//         'message' => 'required',
//     ];

//     $messages = [
//         'name.required' => 'The name field is required.',
//         'email.required' => 'The email field is required.',
//         'email.email' => 'The email field must be a valid email address.',
//         'product_type.required' => 'The product type field is required.',
//         'phone.required' => 'The phone field is required.',
//         'message.required' => 'The message field is required.',
//     ];

//      $validator = Validator::make($request->all(), $rules, $messages);

//     if ($validator->fails()) {
//         return redirect()->back()
//             ->withErrors($validator)
//             ->withInput();
//     }

//     $recaptchaResponse = $request->input('g-recaptcha-response');
//     $secretKey = config('services.recaptcha.secret');

//     $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
//         'secret' => $secretKey,
//         'response' => $recaptchaResponse,
//         'remoteip' => $request->ip(),
//     ]);

//     $responseBody = json_decode((string) $response->getBody());

  
//     $payload = [
//         'name' => $request->name,
//         'email' => $request->email,
//         'product_type' => $request->product_type,
//         'phone' => $request->phone,
//         'message' => $request->message,
//     ];

//     $data['thankyou'] = 'Thank you ' . $payload['name'] . ' for reaching out to MMP filter. We have received your inquiry. We will contact you soon for the same.';

//     Mail::send('mail.thankyou', $payload, function ($message) use ($payload) {
//         $message->to($payload['email'])
//             ->subject('Thank You');
//     });

//     Mail::send('mail.inquirydata', ['inquiryquote' => $payload], function ($message) use ($payload) {
//         $message->to('webdeveloper3.intelliworkz@gmail.com')
//             ->subject('Contact Us Details');
//     });

//     DB::table('contact')->insert($payload);

//     return redirect('thank-you');
// }


public function contactstore(Request $request) {
    $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'product_type' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ];

    $messages = [
        'name.required' => 'Please enter a Name.',
        'email.required' => 'Please enter Email.',
        'email.email' => 'The email must be a valid email address.',
        'product_type.required' => 'Please enter Product Type.',
        'phone.required' => 'Please enter Phone No..',
        'message.required' => 'Please enter Message.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Generate the timestamp in the required format
    $timestamp = Carbon::now()->format('Y-m-d H:i:s');

    $info = [
        'name' => $request->name,
        'email' => $request->email,
        'product_type' => $request->product_type,
        'phone' => $request->phone,
        'message' => $request->message,
        'created_at' => $timestamp,
    ];

    // Store using the model
    Contact::create($info);

    // Send data to external API
    $client = new Client();
    $response = $client->post('https://sheetdb.io/api/v1/brpqt35mo45m0', [
        'json' => [$info]
    ]);
    $responseData = json_decode($response->getBody(), true);

    if ($responseData['created'] == 1) {
         return redirect('thank-you');
    } else {
        return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
    }
}



    // public function contactstore(Request $request){
            
    //         $validatedData = $request->validate(
    //             [
    //               'name' => 'required',
    //                 'email' => 'required|email',
    //                 'product_type' => 'required',
    //                 'phone' => 'required',
    //                 'message' => 'required',
    //             ],
    //             [
    //                 'name.required' => 'Please enter a Name.',
    //                 'email.required' => 'Please enter Email.',
    //                 'phone.required' => 'Please enter Phone No..',
    //                 'product_type.required' => 'Please enter Product Type.',
    //                 'message.required' => 'Please enter Message.',
    //             ]
    //         );
    //         // dd($request->all());
    //         $contact = [
    //             'name' => $request->name, 
    //             'email' => $request->email, 
    //             'phone' => $request->phone, 
    //             'product_type' => $request->product_type, 
    //             'message' => $request->message, 
    //         ];
    //         Contact::create($contact);
             
    //             $client = new Client();
    //             $response = $client->post('https://sheetdb.io/api/v1/g2zob36ab7l9b', [
    //                 'json' => [$contact]
    //             ]);
    //             $responseData = json_decode($response->getBody(), true);
    //             // dd($responseData);
    //                 if ($responseData['created'] == 1) {
                        
    //                   return redirect()->route('thank-you')->with('success', 'Your inquiry sent successfully');
            
    //                 } else {
    //                     return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
    //                 }
    //         }

    
    
    // public function event(){
    //     $event = Event::where('is_delete','0')->orderBy('id', 'DESC')->get();
    //     dd($event);
    //     return view('front.event',compact('event'));
    // } 

  public function event(){
        $title="Events - mmp Filtration";
        $description="Explore our newest events and stay updated!"; 
        $event = Event::where('is_delete','0')->orderBy('id', 'DESC')->get();
        return view('front.event',compact('event', 'title', 'description'));
    } 
    public function thankyou(){
        $title = "";
        $description = "";
        return view('front.thank-you',compact('title', 'description'));
    } 
    
 
//   public function headerinquiry(Request $request) {
//     $rules = [
//         'name' => 'required',
//         'email' => 'required|email',
//         'product_name' => 'required',
//         'phone' => 'required',
//         'message' => 'required',
//     ];

//     $messages = [
//         'name.required' => 'The name field is required.',
//         'email.required' => 'The email field is required.',
//         'email.email' => 'The email field must be a valid email address.',
//         'product_name.required' => 'The product name field is required.',
//         'phone.required' => 'The phone field is required.',
//         'message.required' => 'The message field is required.',
//     ];

//     $validator = Validator::make($request->all(), $rules, $messages);

//     if ($validator->fails()) {
//         return redirect()->back()
//             ->withErrors($validator)
//             ->withInput();
//     }

//      $info = [
//         'name' => $request->name,
//         'email' => $request->email,
//         'product_name' => $request->product_name,
//         'phone' => $request->phone,
//         'message' => $request->message,
//     ];

//     $client = new Client();
//     $response = $client->post('https://sheetdb.io/api/v1/g2zob36ab7l9b', [
//         'json' => [$info]
//     ]);
//     $responseData = json_decode($response->getBody(), true);
//       $data['thankyou'] = 'Thank you ' . $info['name'] . ' for reaching out to MMP filter. We have received your inquiry. We will contact you soon for the same.';
        
//         Mail::send('mail.thankyou', $data, function ($message) use ($info) {
//             $message->to($info['email'])
//                 ->subject('Thank You');
//         });
        
//          Mail::send('mail.productdata', ['inquiryquote' => $info], function ($message) use ($info) {
//             $message->to('sales@mmpfilter.com','arvind@intelliworkz.tech')
//                 ->subject('Product Inquiry Details');
//         });
//     DB::table('header_inquiry')->insert($info);

//      if ($responseData['created'] == 1) {
        
//         return redirect('thank-you');
//     } else {
//         return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
//     }
// }

public function headerinquiry(Request $request) {
    $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'product_type' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ];

    $messages = [
        'name.required' => 'Please enter a Name.',
        'email.required' => 'Please enter Email.',
        'email.email' => 'The email must be a valid email address.',
        'product_type.required' => 'Please enter Product Type.',
        'phone.required' => 'Please enter Phone No..',
        'message.required' => 'Please enter Message.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Generate the timestamp in the required format
    $timestamp = Carbon::now()->format('Y-m-d H:i:s');

    $info = [
        'name' => $request->name,
        'email' => $request->email,
        'product_type' => $request->product_type,
        'phone' => $request->phone,
        'company_name' => $request->company_name,
        'message' => $request->message,
        'created_at' => $timestamp, // Add formatted timestamp
    ];

    // Store using the model
    HeaderInquiry::create($info);

    // Send data to external API
    $client = new Client();
    $response = $client->post('https://sheetdb.io/api/v1/brpqt35mo45m0', [
        'json' => [$info] // Send the info array with created_at in required format
    ]);
    $responseData = json_decode($response->getBody(), true);

    if ($responseData['created'] == 1) {
         return redirect('thank-you');
    } else {
        return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
    }
}

 public function landingpage(){
        return view('front.landing-page');
    }
    
    public function landingStore(Request $request){
         $rules = [
        'fname' => 'required',
        'email' => 'required',
        'product_type' => 'required',
        'contact_number' => 'required',
    ];

    $messages = [
        'fname.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'email.email' => 'The email field must be a valid email address.',
        'contact_number.required' => 'The phone field is required.',
        'product_type.required' => 'The Product Type field is required.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }
     $info = [
        'fname' => $request->fname,
        'email' => $request->email,
        'contact_number' => $request->contact_number,
        'product_type' => $request->product_type,
        'message' => $request->message,
    ];
     
        DB::table('inquiries')->insert($info);
        
        $client = new Client();
        $response = $client->post('https://sheetdb.io/api/v1/r4cbm3fs0b05j', [
            'json' => [$info]
        ]);
        $responseData = json_decode($response->getBody(), true);
    
        if ($responseData['created'] == 1) {
            return redirect()->route('thank-you')->with('success', 'Your inquiry was sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
        }
    }



//     public function landingStore(Request $request){
//          $rules = [
//         'fname' => 'required',
//         'email' => 'required',
//         'product_type' => 'required',
//         'contact_number' => 'required',
//     ];

//     $messages = [
//         'fname.required' => 'The name field is required.',
//         'email.required' => 'The email field is required.',
//         'email.email' => 'The email field must be a valid email address.',
//         'contact_number.required' => 'The phone field is required.',
//         'product_type.required' => 'The Product Type field is required.',
//     ];

//     $validator = Validator::make($request->all(), $rules, $messages);

//     if ($validator->fails()) {
//         return redirect()->back()
//             ->withErrors($validator)
//             ->withInput();
//     }
//      $info = [
//         'fname' => $request->fname,
//         'email' => $request->email,
//         'contact_number' => $request->contact_number,
//         'product_type' => $request->product_type,
//         'message' => $request->message,
//     ];
//       $data['thankyou'] = 'Thank you ' . $info['fname'] . ' for reaching out to MMP filter. We have received your inquiry. We will contact you soon for the same.';
        
//         Mail::send('mail.thankyou', $data, function ($message) use ($info) {
//             $message->to($info['email'])
//                 ->subject('Thank You');
//         });
        
//          Mail::send('mail.landinginqData', ['inquiryquote' => $info], function ($message) use ($info) {
//             $message->to('sales@mmpfilter.com')
//                 ->subject('Landing Inquiry Details');
//         });
//     DB::table('inquiries')->insert($info);

//     return redirect('thank-you');
// }
}