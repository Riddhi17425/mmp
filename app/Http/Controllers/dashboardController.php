<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\CaseStudy;
use App\Models\Contact;
use App\Models\Event;
use App\Models\HeaderInquiry;
use App\Models\OurBrands;
use App\Models\Product;
use App\Models\ProductTrust;
use App\Models\Review;
use App\Models\WhatsappInquiry;
use DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class dashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function login()
    // {
    //     return view('auth.login');
    // }
    public function admin()
    {
        return view('admin.admin');
    }
    public function index()
    {
        $title       = "mmp: Manufacturer of PP Yarn and Filter Cartridges";
        $description = "mmp, established in 1994, is a prominent manufacturer, supplier & exporter of PP Yarn, Filter Cartridges, Filter bags, and PP Spun Filters in India.";
        $ogimage     = asset('public/front/images/water-filter-cartridges.png');

        $data['producttrust'] = ProductTrust::where('is_delete', '0')->get();
        $data['ourbrands']    = OurBrands::where('is_delete', '0')->get();
        $data['event']        = Event::where('is_delete', '0')->latest()->take(2)->get();
        $data['blog']         = DB::table('blog')
            ->where('is_delete', '0')
            ->where('status', 'Active')
            ->select('id', 'title', 'image', 'banner_image', 'short_description', 'publish_date', 'url', 'alt', 'alt_banner')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        // Water Filtration
        $waterCategory = \App\Models\Category::where('category_url', 'water-filter-cartridges')->first();
        $waterProducts = [];

        if ($waterCategory) {
            $waterProducts = \App\Models\Product::where('category_id', $waterCategory->id)
                ->where('is_delete', '0')
                ->latest()
                ->take(10)
                ->get();
        }

        // Air Filtration
        $airCategory = \App\Models\Category::where('category_url', 'air-filter-cartridges')->first();
        $airProducts = [];

        if ($airCategory) {
            $airProducts = \App\Models\Product::where('category_id', $airCategory->id)
                ->where('is_delete', '0')
                ->latest()
                ->take(10)
                ->get();
        }

        $data['waterProducts'] = $waterProducts;
        $data['airProducts']   = $airProducts;

        $channelId = "UCZWezCSt2lwGIYdii8JS-rA";
        $feedUrl   = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";

        $videoList        = [];
        $youtubeAvailable = false;

        $context = stream_context_create([
            'http' => [
                'timeout'       => 5,
                'ignore_errors' => true,
            ],
        ]);

        $feedContent = @file_get_contents($feedUrl, false, $context);

        if ($feedContent !== false) {
            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($feedContent);

            if ($xml && isset($xml->entry)) {
                foreach ($xml->entry as $entry) {
                    $videoId = str_replace("yt:video:", "", (string) $entry->id);

                    $videoList[] = [
                        'title'     => (string) $entry->title,
                        'videoId'   => $videoId,
                        'published' => (string) $entry->published,
                        'embedUrl'  => "https://www.youtube.com/embed/{$videoId}",
                    ];
                }

                if (! empty($videoList)) {
                    $youtubeAvailable = true;
                }
            }
        }

        $data['video']            = collect($videoList)->sortByDesc('published');
        $data['youtubeAvailable'] = $youtubeAvailable;

        //client-reviews
        $reviews = Review::where('status', 'Active')
            ->where('is_delete', '0')
            ->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        $data['reviews']     = $reviews;
        $data['avgRating']   = $reviews->count() ? round($reviews->avg('rating'), 1) : 0;
        $data['reviewCount'] = $reviews->count();

        return view('front.dashboard', compact('data', 'title', 'description', 'ogimage'));
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

    public function about()
    {
        $title             = "About mmp Filtration | Clean Water Solutions";
        $description       = "mmp Filtration, since 1994, has provided top-quality filter cartridge solutions—trusted by industries across India for clean water and air filtration.";
        $ogimage           = asset('public/front/images/about-content.png');
        $data['ourbrands'] = OurBrands::where('is_delete', '0')->get();
        return view('front.about', compact('data', 'title', 'description', 'ogimage'));
    }
    // public function machinery(){
    //     $data['video'] = Video::where('is_delete','0')->get();
    //     $title = "Water & Air Filtration Products";
    //     $description = "MMP offers a wide range of water and air filtration products, designed to meet diverse filtration needs. Explore our solutions and watch our videos here.";
    //     return view('front.Machinery-we-manufacture',compact('data', 'title', 'description'));
    // }
    public function machinery()
    {
        $channelId = "UCZWezCSt2lwGIYdii8JS-rA";
        $feedUrl   = "https://www.youtube.com/feeds/videos.xml?channel_id={$channelId}";

        $videos           = [];
        $youtubeAvailable = false;

        // ---- SAFE HTTP FETCH ----
        $context = stream_context_create([
            'http' => [
                'timeout'       => 5,
                'ignore_errors' => true,
            ],
        ]);

        $feedContent = @file_get_contents($feedUrl, false, $context);

        if ($feedContent !== false) {

            libxml_use_internal_errors(true);
            $xml = simplexml_load_string($feedContent);

            if ($xml && isset($xml->entry)) {
                foreach ($xml->entry as $entry) {
                    $videoId = str_replace("yt:video:", "", (string) $entry->id);

                    $videos[] = [
                        'title'     => (string) $entry->title,
                        'videoId'   => $videoId,
                        'published' => (string) $entry->published,
                    ];
                }

                if (! empty($videos)) {
                    $youtubeAvailable = true;
                }
            }
        }

        $title       = "Water & Air Filtration Products";
        $description = "MMP offers a wide range of water and air filtration products.";

        return view(
            'front.Machinery-we-manufacture',
            compact('videos', 'youtubeAvailable', 'title', 'description')
        );
    }

    public function pph()
    {
        $title       = "PPH One Piece Filter Housing: mmp Filter";
        $description = "Shop PPH One Piece Filter Housing from MMP Filter – a durable, high-performance industrial filtration solution made from premium polypropylene (PPH).";
        $ogimage     = asset('public/front/images/PPH_One_Piece_Filter_Housing.png');
        return view('front.pph', compact('title', 'description', 'ogimage'));
    }
    public function zerofoaming()
    {
        $title       = "Zero Foaming Yarn | mmp filtration ";
        $description = "Leading PP Yarns Manufacturer mmp offers Zero Foaming Yarn for unmatched durability & performance. Choose our yarn solutions for industrial & commercial needs.";
        return view('front.zerofoaming', compact('title', 'description'));
    }
    public function cartridges_in_usa()
    {
        $title       = "Buy Water Filter Cartridges Online in USA | MMP®";
        $description = "Enjoy clean water with MMP®. From drinking water filters to industrial cartridges, MMP® delivers high-performance, reliable filtration solutions across USA.";
        $ogimage     = asset('public/front/images/usa-images/melt-blown-filter-cartridges.jpg');
        return view('front.filter-cartridges-in-usa ', compact('title', 'description', 'ogimage'));
    }
    public function certifications()
    {
        $title                = "Our Certifications: mmp Filtration";
        $description          = "mmp offers NSF-certified MELT BLOWN CARTRIDGES – OCEANIC® & LAGOON® – compliant with NSF/ANSI/CAN-61 & 372 for safe drinking water systems.";
        $data['certificates'] = DB::table('certificate')->where('is_delete', '0')->orderBy('id', 'desc')->get();
        //dd($data['certificates']);
        return view('front.certifications', compact('data', 'title', 'description'));
    }

    public function blog()
    {
        $title       = "Latest Blog on Water & Air Filter Cartridges";
        $description = "Read our latest blog to discover everything you need to know about water and air filter cartridges, their types, uses, and benefits for various applications.";
        $blog        = DB::table('blog')->where('is_delete', '0')->where('status', 'Active')->select('id', 'title', 'image', 'banner_image', 'short_description', 'publish_date', 'url', 'alt')->orderBy('id', 'desc')->get();
        $ogimage     = asset('public/front/images/Blog.jpg');
        //dd($blog);
        return view('front.blog', compact('blog', 'title', 'description', 'ogimage'));
    }

    public function blogdetail($url)
    {
        $data = DB::table('blog')
            ->leftjoin('faq', 'faq.blog_id', '=', 'blog.id')
            ->where('blog.url', $url)
            ->get();

        $blogdetail = $data[0];
        //dd($blogdetail);
        $title       = $blogdetail->meta_title;
        $description = $blogdetail->meta_description;
        $og_image    = $blogdetail->og_image;
        return view('front.blog-detail', compact('blogdetail', 'title', 'description', 'og_image'));
    }
    public function contact()
    {
        $title       = "Contact us for any kind of filtration requirements";
        $description = "Have questions about filter cartridges or housings? MMP Filtration is here to help with expert support and solutions. Get in touch with us today!";
        $productname = Product::where('is_delete', '0')->get();
        //dd($productname);
        return view('front.contact', compact('productname', 'title', 'description'));
    }
    public function pp_yarn_in_usa()
    {
        $title       = "Polypropylene Yarn | PP Yarn in USA";
        $description = "We offer a wide range of PP yarns in the USA for industries like water treatment, air filtration, pharmaceuticals, and chemical processing.";
        $ogimage     = asset('public/front/images/usa-images/Core-Spun-Yarn.png');
        return view('front.pp-filtration-yarn-in-usa', compact('title', 'description', 'ogimage'));
    }
    public function melt_cartridges_in_usa()
    {
        $title       = "Melt Blown Filter Cartridges | PP Spun Cartridge Filter";
        $description = "Looking for quality melt-blown filter cartridges? MMP Filter is your reliable supplier of high-demonstrated melt-blown filter cartridges";
        $ogimage     = asset('public/front/images/melt-blown-filter-cartridges_1.jpg');
        return view('front.melt-blown-filter-cartridges-in-usa', compact('title', 'description', 'ogimage'));
    }
    public function wound_cartridges_in_usa()
    {
        $title       = "Wound Filter Cartridges | String-Wound Filter Cartridges";
        $description = "MMP wound filter cartridges deliver reliable filtration for water, food, chemical, and petroleum industries to meet strict American standards.";
        $ogimage     = asset('public/front/images/usa-images/wound-filter-cartridges.jpg');
        return view('front.wound-filter-cartridges-in-usa', compact('title', 'description', 'ogimage'));
    }
    public function wound_cartridges_machine_in_usa()
    {
        $title       = "Wound Filter Cartridges Machine in USA";
        $description = "mmp’s advanced wound filter-making machine produces filters in various sizes and materials, offering customizable solutions tailored for USA businesses.";
        $ogimage     = asset('public/front/images/usa-images/WoundFilter_product.jpg');
        return view('front.wound-filter-cartridges-machine-in-usa', compact('title', 'description', 'ogimage'));
    }

    public function mrb()
    {
        $title       = "";
        $description = "";
        return view('front.mrb', compact('title', 'description'));
    }
    public function mab()
    {
        $title       = "";
        $description = "";
        return view('front.mab', compact('title', 'description'));
    }
    public function career()
    {
        $title       = "";
        $description = "";
        $productname = Product::where('is_delete', '0')->get();
        return view('front.career', compact('productname', 'title', 'description'));
    }
    public function liquidbag()
    {
        $title       = "Bag Filter: Industrial Liquid & Dust Filtration Solutions";
        $description = "mmp offers a wide range of liquid filtration bag filters in various types, sizes & micron ratings for all industries, customized to meet client needs worldwide.";
        return view('front.liquidbag', compact('title', 'description'));
    }
    public function partnership()
    {
        $title       = "Partnership Opportunities: mmp Filtration";
        $description = "With 30+ years of expertise, MMP leads India’s filtration industry, offering raw materials for wound filter cartridges—trusted for quality & innovation.";
        $productname = Product::get();
        //dd($productname);
        return view('front.partnership', compact('productname', 'title', 'description'));
    }

    //  public function contactstore(Request $request) {
    //     $rules = [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'product_type' => 'required',
    //         'phone' => 'required',
    //         'message' => 'required',
    //     ];

    //     $messages = [
    //         'name.required' => 'Please enter a Name.',
    //         'email.required' => 'Please enter Email.',
    //         'email.email' => 'The email must be a valid email address.',
    //         'product_type.required' => 'Please enter Product Type.',
    //         'phone.required' => 'Please enter Phone No..',
    //         'message.required' => 'Please enter Message.',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $timestamp = Carbon::now()->format('Y-m-d H:i:s');

    //     Contact::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'product_type' => $request->product_type,
    //         'phone' => $request->phone,
    //         'company_name' => $request->company_name,
    //         'city' => $request->city,
    //         'message' => $request->message,
    //         'created_at' => $timestamp,
    //     ]);

    //     $sheetsData = [
    //         'from_type' => "Contact inquiry",
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'product' => $request->product_type,
    //         'phone' => $request->phone,
    //         'company_name' => $request->company_name,
    //         'city' => $request->city,
    //         'message' => $request->message,
    //         'formattedDate' => $timestamp,
    //     ];

    //     try {
    //         Http::withHeaders(['Content-Type' => 'application/json'])
    //             ->post('https://script.google.com/macros/s/AKfycbzdSw8fxF7U4fJsc8CuT3_KEUwsgj1CqBAw_VJJ7xIedeeHx1bO3WIowVdin2YZhrYzuQ/exec', $sheetsData);
    //     } catch (\Exception $e) {
    //         \Log::error('Google Sheets Exception:', [
    //             'message' => $e->getMessage(),
    //             'trace' => $e->getTraceAsString(),
    //             'data_sent' => $sheetsData
    //         ]);
    //     }

    //     return redirect('thank-you');
    // }

    public function contactstore(Request $request)
    {
        if ($request->filled('website_url')) {
            return redirect()->back()->withErrors(['spam' => 'Spam detected'])->withInput();
        }
        // Validation rules
        $rules = [
            'name'           => 'required',
            'email'          => 'required|email',
            'product_type'   => 'required',
            'phone'          => 'required',
            //'message'        => 'required',
            'simple_captcha' => 'required|numeric',
            'captcha_sum'    => 'required|numeric',
        ];

        $messages = [
            'name.required'           => 'Please enter a Name.',
            'email.required'          => 'Please enter Email.',
            'email.email'             => 'The email must be a valid email address.',
            'product_type.required'   => 'Please enter Product Type.',
            'phone.required'          => 'Please enter Phone No.',
            //'message.required'        => 'Please enter Message.',
            'simple_captcha.required' => 'Please solve the captcha.',
            'simple_captcha.numeric'  => 'Captcha answer must be a number.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // Check Laravel validation first
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Captcha validation
        if ((int) $request->simple_captcha !== (int) $request->captcha_sum) {
            return redirect()->back()
                ->withErrors(['simple_captcha' => 'Captcha answer is incorrect.'])
                ->withInput();
        }

        $timestamp = Carbon::now()->format('Y-m-d H:i:s');

        // Store in database
        Contact::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'product_type' => $request->product_type,
            'phone'        => $request->phone,
            'company_name' => $request->company_name,
            'city'         => $request->city,
            'message'      => $request->message,
            'created_at'   => $timestamp,
        ]);

        // Store in Google Sheet
        $sheetsData = [
            'from_type'     => "Contact inquiry",
            'name'          => $request->name,
            'email'         => $request->email,
            'product'       => $request->product_type,
            'phone'         => $request->phone,
            'company_name'  => $request->company_name,
            'city'          => $request->city,
            'message'       => $request->message,
            'formattedDate' => $timestamp,
        ];

        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbzdSw8fxF7U4fJsc8CuT3_KEUwsgj1CqBAw_VJJ7xIedeeHx1bO3WIowVdin2YZhrYzuQ/exec', $sheetsData);
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception:', [
                'message'   => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'data_sent' => $sheetsData,
            ]);
        }

        return redirect('thank-you');
    }

    public function event()
    {
        $title       = "MMP Filtration | Events & Exhibitions";
        $description = "Discover mmp Filtration's latest events, exhibitions, and industry showcases. Stay updated on innovations, partnerships, and global participation.";
        $event       = Event::where('is_delete', '0')->orderBy('id', 'DESC')->get();
        return view('front.event', compact('event', 'title', 'description'));
    }
    public function thankyou()
    {
        $title       = "";
        $description = "";
        return view('front.thank-you', compact('title', 'description'));
    }

    // public function headerinquiry(Request $request)
    // {
    //     // Simple honeypot to prevent spam bots
    //     if ($request->filled('website_url')) {
    //         return redirect()->back()->withErrors(['spam' => 'Spam detected'])->withInput();
    //     }

    //     $rules = [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'product_type' => 'required|string|max:255',
    //         'phone' => 'required|string|min:10|max:15',
    //         'company_name' => 'nullable|string|max:255',
    //         'message' => 'nullable|string|max:1000',
    //     ];

    //     $messages = [
    //         'name.required' => 'Please enter a Name.',
    //         'name.string' => 'Name must be a valid string.',
    //         'email.required' => 'Please enter Email.',
    //         'email.email' => 'The email must be a valid email address.',
    //         'product_type.required' => 'Please enter Product Type.',
    //         'phone.required' => 'Please enter Phone No.',
    //         'phone.string' => 'Phone number must be valid.',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $timestamp = Carbon::now()->format('Y-m-d H:i:s');

    //     HeaderInquiry::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'product_type' => $request->product_type,
    //         'phone' => $request->phone,
    //         'company_name' => $request->company_name,
    //         'message' => $request->message,
    //         'created_at' => $timestamp,
    //     ]);

    //     $sheetsData = [
    //         'from_type' => 'home inquiry',
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'product' => $request->product_type,
    //         'phone' => $request->phone,
    //         'company_name' => $request->company_name,
    //         'message' => $request->message,
    //         'formattedDate' => $timestamp,
    //     ];

    //     try {
    //         Http::withHeaders(['Content-Type' => 'application/json'])
    //             ->post('https://script.google.com/macros/s/AKfycbzdSw8fxF7U4fJsc8CuT3_KEUwsgj1CqBAw_VJJ7xIedeeHx1bO3WIowVdin2YZhrYzuQ/exec', $sheetsData);
    //     } catch (\Exception $e) {
    //         \Log::error('Google Sheets Exception:', [
    //             'message' => $e->getMessage(),
    //             'trace' => $e->getTraceAsString(),
    //             'data_sent' => $sheetsData
    //         ]);
    //     }

    //     return redirect('thank-you');
    // }

    public function headerinquiry(Request $request)
    {
        // Honeypot
        if ($request->filled('website_url')) {
            return redirect()->back()->withErrors(['spam' => 'Spam detected'])->withInput();
        }

        $rules = [
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'product_type'   => 'required|string|max:255',
            'phone'          => 'required|digits_between:10,15',
            'company_name'   => 'nullable|string|max:255',
            'message'        => 'nullable|string|max:1000',
            'simple_captcha' => 'required|numeric',
        ];

        $messages = [
            'simple_captcha.required' => 'Captcha is required',
            'simple_captcha.numeric'  => 'Captcha must be number',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ✅ Captcha Check
        if ((int) $request->simple_captcha !== (int) $request->captcha_sum) {
            return redirect()->back()
                ->withErrors(['simple_captcha' => 'Wrong captcha answer'])
                ->withInput();
        }

        $timestamp = Carbon::now()->format('Y-m-d H:i:s');

        HeaderInquiry::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'product_type' => $request->product_type,
            'phone'        => $request->phone,
            'company_name' => $request->company_name,
            'city'         => $request->city,
            'message'      => $request->message,
            'created_at'   => $timestamp,
        ]);

        $sheetsData = [
            'from_type'     => 'home inquiry',
            'name'          => $request->name,
            'email'         => $request->email,
            'product'       => $request->product_type,
            'phone'         => $request->phone,
            'company_name'  => $request->company_name,
            'city'          => $request->city,
            'message'       => $request->message,
            'formattedDate' => $timestamp,
        ];

        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbzdSw8fxF7U4fJsc8CuT3_KEUwsgj1CqBAw_VJJ7xIedeeHx1bO3WIowVdin2YZhrYzuQ/exec', $sheetsData);
        } catch (\Exception $e) {
            \Log::error('Google Sheets Error', ['msg' => $e->getMessage()]);
        }

        return redirect('thank-you');
    }

    public function whatsaapinquiry(Request $request)
    {
        if (! empty($request->website_url)) {
            return back()->with('error', 'Invalid form submission.');
        }

        $request->validate([
            'message'     => 'nullable',
            'full_number' => 'required|regex:/^\+?[0-9]{10,15}$/',
        ]);

        WhatsappInquiry::create([

            'message' => $request->message,
            'number'  => $request->full_number,
        ]);

        $timestamp = Carbon::now()->format('Y-m-d H:i:s');

        // Google Sheet expects:
        // form_type, contact, message, date
        $sheetsData = [
            'form_type' => 'whatsapp inquiry',
            'contact'   => $request->full_number,
            'message'   => $request->message,
            'date'      => $timestamp,
        ];

        // Send to Google Sheets
        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbxDicdm1Gw3w6-SrEhclAXbJ18Kfmhg3jUhKXCJg2NviqikZJiP8-T61sSXMLnXfBBs/exec',
                    $sheetsData
                );
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception (WhatsApp Inquiry):', [
                'message'   => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'data_sent' => $sheetsData,
            ]);
        }

        $number      = '919830030614'; // Or use $request->number if needed
        $message     = 'Inquiry from the website.';
        $whatsappUrl = "https://api.whatsapp.com/send/?phone={$number}&text=" . urlencode($message) . "&type=phone_number&app_absent=0";

        return redirect()->away($whatsappUrl);

    }

    public function landingpage()
    {
        return view('front.landing-page');
    }

    public function landingStore(Request $request)
    {
        $rules = [
            'fname'          => 'required',
            'email'          => 'required',
            'product_type'   => 'required',
            'contact_number' => 'required',
        ];

        $messages = [
            'fname.required'          => 'The name field is required.',
            'email.required'          => 'The email field is required.',
            'email.email'             => 'The email field must be a valid email address.',
            'contact_number.required' => 'The phone field is required.',
            'product_type.required'   => 'The Product Type field is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $info = [
            'fname'          => $request->fname,
            'email'          => $request->email,
            'contact_number' => $request->contact_number,
            'product_type'   => $request->product_type,
            'message'        => $request->message,
        ];

        DB::table('inquiries')->insert($info);

        $client   = new Client();
        $response = $client->post('https://sheetdb.io/api/v1/r4cbm3fs0b05j', [
            'json' => [$info],
        ]);
        $responseData = json_decode($response->getBody(), true);

        if ($responseData['created'] == 1) {
            return redirect()->route('thank-you')->with('success', 'Your inquiry was sent successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
        }
    }

    public function careerstore(Request $request)
    {
        $rules = [
            'name'                 => 'required',
            'email'                => 'required|email',
            'product_type'         => 'required',
            'phone'                => 'required|min:11',
            'message'              => 'required',
            'filename'             => 'required|file|mimes:pdf,doc,docx|max:25600', // 25MB
            'g-recaptcha-response' => 'required|captcha',
        ];

        $messages = [
            'name.required'                 => 'Please enter a Name.',
            'email.required'                => 'Please enter Email.',
            'email.email'                   => 'The email must be a valid email address.',
            'product_type.required'         => 'Please enter Product Type.',
            'phone.required'                => 'Please enter Phone No..',
            'phone.min'                     => 'Phone number must be at least 10 digits.',
            'message.required'              => 'Please enter Message.',
            'filename.required'             => 'Please upload your resume.',
            'filename.mimes'                => 'Only PDF, DOC, and DOCX files are allowed.',
            'filename.max'                  => 'File must be less than 25MB.',
            'g-recaptcha-response.required' => 'Please complete the CAPTCHA.',
            'g-recaptcha-response.captcha'  => 'CAPTCHA validation failed.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $filename = null;
        if ($request->hasFile('filename')) {
            $file     = $request->file('filename');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $file->move(public_path('uploads/cv'), $filename);
        }

        $career = Career::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'product_type' => $request->product_type,
            'phone'        => $request->phone,
            'message'      => $request->message,
            'filename'     => $filename,
        ]);

        // Google Sheets API
        $sheetsData = [
            'from_type'     => "Career inquiry",
            'name'          => $request->name,
            'email'         => $request->email,
            'product'       => $request->product_type,
            'phone'         => $request->phone,
            'message'       => $request->message,
            'formattedDate' => now()->format('Y-m-d H:i:s'),
        ];

        try {
            Http::withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbzdSw8fxF7U4fJsc8CuT3_KEUwsgj1CqBAw_VJJ7xIedeeHx1bO3WIowVdin2YZhrYzuQ/exec', $sheetsData);
        } catch (\Exception $e) {
            \Log::error('Google Sheets Exception:', [
                'message'   => $e->getMessage(),
                'trace'     => $e->getTraceAsString(),
                'data_sent' => $sheetsData,
            ]);
        }

        return redirect('thank-you');
    }

    public function testmail()
    {
        try {
            Mail::raw('This is a test mail from MMP Filter.', function ($message) {
                $message->to('webdeveloper3.intelliworkz@gmail.com')
                    ->subject('Test Mail');
            });

            return 'Mail sent successfully!';
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return 'Mail sending failed: ' . $e->getMessage();
        }
    }

    public function casestudy()
    {
        // return 111;
        $title       = "Case Studies | Explore Our Success Stories";
        $description = "Discover our case studies showcasing the filtration solutions and seamless experience for our clients in the water & air filtration systems.";
        $casestudy   = DB::table('casestudy')->where('is_delete', '0')->select('id', 'title', 'image', 'banner_image', 'short_description', 'long_description', 'url', 'alt')->orderBy('id', 'desc')->get();

        return view('front.casestudy', compact('casestudy', 'title', 'description'));
    }

    public function casestudydetail($url)
    {
        $casestudydetail = CaseStudy::where('is_delete', '0')->where('url', $url)->first();

        if (! $casestudydetail) {
            abort(404);
        }

        $title       = $casestudydetail->meta_title ?? '';
        $description = $casestudydetail->meta_description ?? '';

        return view('front.casestudy-detail', compact('casestudydetail', 'title', 'description'));
    }

    public function testpage()
    {

        return view('front.testpage');
    }

}
