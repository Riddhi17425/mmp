<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CaseStudyController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\certificateController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\LandingInqController;
use App\Http\Controllers\admin\OurBrandsController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductTrustController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductFrontController;
use App\Http\Controllers\superAdminController;
use App\Http\Controllers\usersController;
use App\Models\Review;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/user-country', function () {

    try {
        $response = Http::timeout(5)->get('https://ipapi.co/json/');
        return $response->json();

    } catch (\Exception $e) {

        return response()->json([
            'country_code' => 'IN',
        ]);

    }

});
Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return '✅ All Laravel caches cleared successfully!';
});

//Front route
Route::get('/', [dashboardController::class, 'index']);
Route::get('/case-studies', [dashboardController::class, 'casestudy'])->name('casestudy');
Route::get('/casestudy-detail/{url}', [dashboardController::class, 'casestudydetail'])->name('casestudy.detail');

Route::get('/about', [dashboardController::class, 'about'])->name('about');
//Route::get('/pph',[dashboardController::class,'pph'])->name('pph');
// Route::get('/zerofoaming',[dashboardController::class,'zerofoaming'])->name('zerofoaming');
Route::get('/zero-foaming-yarn', [dashboardController::class, 'zerofoaming'])->name('zerofoaming');
Route::get('/filter-cartridges-in-usa', [dashboardController::class, 'cartridges_in_usa'])->name('filter-cartridges-in-usa');
Route::get('/certifications', [dashboardController::class, 'certifications'])->name('certifications');
Route::get('/partnership-opportunities', [dashboardController::class, 'partnership'])->name('partnership');

Route::get('/blogs', [dashboardController::class, 'blog'])->name('blog');
Route::get('/blogdetail/{url}', [dashboardController::class, 'blogdetail'])->name('blogdetail');

Route::get('/landing-filter-cartridges', [dashboardController::class, 'landingpage'])->name('landing-page');
Route::post('/landing-store', [dashboardController::class, 'landingStore'])->name('landing-store');

Route::get('/contact', [dashboardController::class, 'contact'])->name('contact');
Route::get('/pp-filtration-yarn-in-usa', [dashboardController::class, 'pp_yarn_in_usa'])->name('pp-filtration-yarn-in-usa');
Route::get('/melt-blown-filter-cartridges-in-usa', [dashboardController::class, 'melt_cartridges_in_usa'])->name('melt-blown-filter-cartridges-in-usa');
Route::get('/wound-filter-cartridges-in-usa', [dashboardController::class, 'wound_cartridges_in_usa'])->name('wound-filter-cartridges-in-usa');
Route::get('/wound-filter-cartridges-machine-in-usa', [dashboardController::class, 'wound_cartridges_machine_in_usa'])->name('wound-filter-cartridges-machine-in-usa');

Route::get('/mrb-series', [dashboardController::class, 'mrb'])->name('mrb');
Route::get('/mab-series', [dashboardController::class, 'mab'])->name('mab');
Route::post('/contactstore', [dashboardController::class, 'contactstore'])->name('contactstore');

Route::get('/thank-you', [dashboardController::class, 'thankyou'])->name('thank-you');
Route::get('/product/{url}', [ProductFrontController::class, 'index'])->name('product');
Route::get('/product-detail/liquid-filter-bags', [dashboardController::class, 'liquidbag'])->name('liquidbag');

Route::get('/product-detail/{url}', [ProductFrontController::class, 'productdetail'])->name('productdetail');
Route::get('/wound-filter-cartridge-machine', [ProductFrontController::class, 'woundfiltercartridgemachine'])->name('woundfiltercartridgemachine');

Route::get('/career', [dashboardController::class, 'career'])->name('career');
Route::post('/careerstore', [dashboardController::class, 'careerstore'])->name('careerstore');

Route::match(['get', 'post'], '/testmail', [dashboardController::class, 'testmail'])->name('testmail');

Route::get('/product-detail/pleatex-pleated-cartridges', function () {
    return redirect('/product-detail/pleated-cartridges', 301);
});
Route::get('/product-detail/cartridge', function () {
    return redirect('/product-detail/core-for-filter-cartridge', 301);
});

Route::get('/testpage', function () {
    $reviews = Review::where('status', 'Active')
        ->where('is_delete', '0')
        ->orderBy('sort_order', 'asc')
        ->orderBy('created_at', 'desc')
        ->get();

    $avgRating   = $reviews->count() ? round($reviews->avg('rating'), 1) : 5.0;
    $reviewCount = $reviews->count();

    return view('front.testpage', compact('reviews', 'avgRating', 'reviewCount'));
});

// Define a dynamic route for more flexible redirection (if needed)
Route::get('/product-detail/{slug}', function ($slug) {
    $slugMapping = [
        'pleatex-pleated-cartridges' => 'pleated-cartridges',
        'cartridge'                  => 'core-for-filter-cartridge',
    ];

    if (array_key_exists($slug, $slugMapping)) {
        return redirect('/product-detail/' . $slugMapping[$slug], 301);
    }

    return abort(404);
});

Route::post('/productinquiry', [ProductFrontController::class, 'productinquiry'])->name('productinquiry');
Route::post('/headerinquiry', [dashboardController::class, 'headerinquiry'])->name('headerinquiry');
Route::post('/whatsaapinquiry', [dashboardController::class, 'whatsaapinquiry'])->name('whatsaapinquiry');
Route::get('/events', [dashboardController::class, 'event'])->name('event');
Route::get('/water-and-air-filtration-products', [dashboardController::class, 'machinery'])->name('machinery');
Route::get('/pharma-industry', [ProductFrontController::class, 'pharmaindustry'])->name('pharmaindustry');
Route::get('/chemical-industry', [ProductFrontController::class, 'chemicalindustry'])->name('chemicalindustry');
// Route::get('/watertreatment-industry',[ProductFrontController::class,'Watertreatmentindustry'])->name('Watertreatmentindustry');
Route::get('/water-treatment-industry', [ProductFrontController::class, 'Watertreatment'])->name('Watertreatment');
// Route::get('/foodbeverage-industry',[ProductFrontController::class,'foodbeverageindustry'])->name('foodbeverageindustry');
Route::get('/food-and-beverage-industry', [ProductFrontController::class, 'foodbeverage'])->name('foodbeverage');
Route::get('/textile-industry', [ProductFrontController::class, 'textiletndustry'])->name('textiletndustry');
Route::get('/dairy-industry', [ProductFrontController::class, 'dairyindustry'])->name('dairyindustry');
Route::get('/oil-and-gas-industry', [ProductFrontController::class, 'oilandgasindustry'])->name('oilandgasindustry');
//Route::get('/oil-and-gas-industry',[ProductFrontController::class,'oilindustry'])->name('oilindustry');
Route::get('/cement-industry', [ProductFrontController::class, 'cementindustry'])->name('cementindustry');
Route::get('/power-plant-industry', [ProductFrontController::class, 'powerindustry'])->name('powerindustry');

Route::get('login', [dashboardController::class, 'login'])->name('login');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', [usersController::class, 'user'])->name('user');
    Route::get('/admin/dashboard', [dashboardController::class, 'admin'])->name('/admin/dashboard');
    Route::get('/superAdmin', [superAdminController::class, 'superAdmin'])->name('superAdmin');

    Route::get('/admin/dashboard', [adminController::class, 'admin'])->name('admin/dashboard');

    //our Brands route
    Route::get('/admin/displayourbrands', [OurBrandsController::class, 'index'])->name('admin/displayourbrands');
    Route::get('/admin/ourbrands', [OurBrandsController::class, 'create'])->name('admin/ourbrands');
    Route::post('/admin/storebrands', [OurBrandsController::class, 'store'])->name('admin/storebrands');
    Route::get('/admin/editbrands/{id}', [OurBrandsController::class, 'edit'])->name('admin/editbrands');
    Route::post('/admin/updatebrands', [OurBrandsController::class, 'update'])->name('admin/updatebrands');
    Route::get('/admin/deletebrands/{id}', [OurBrandsController::class, 'destroy'])->name('admin/deletebrands');
    Route::get('/admin/searchbrandlist', [OurBrandsController::class, 'searchbrandlist'])->name('admin/searchbrandlist');

    //blog route
    Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin/blog');
    Route::get('/admin/addblog', [BlogController::class, 'addblog'])->name('admin/addblog');
    Route::post('/admin/insertblog', [BlogController::class, 'insertblog'])->name('admin/insertblog');
    Route::get('/admin/deleteblog/{id}', [BlogController::class, 'deleteblog'])->name('admin/deleteblog');
    Route::get('/admin/editblog/{id}', [BlogController::class, 'editblog'])->name('admin/editblog/{id}');
    Route::post('/admin/updateblog', [BlogController::class, 'updateblog'])->name('admin/updateblog');

    //Product Trust route
    Route::get('/admin/producttrust', [ProductTrustController::class, 'index'])->name('admin/producttrust');
    Route::get('/admin/addproducttrust', [ProductTrustController::class, 'create'])->name('admin/addproducttrust');
    Route::post('/admin/storeproducttrust', [ProductTrustController::class, 'store'])->name('admin/storeproducttrust');
    Route::get('/admin/editproducttrust/{id}', [ProductTrustController::class, 'edit'])->name('admin/editproducttrust');
    Route::post('/admin/updateproducttrust', [ProductTrustController::class, 'update'])->name('admin/updateproducttrust');
    Route::get('/admin/deleteproducttrust/{id}', [ProductTrustController::class, 'destroy'])->name('admin/deleteproducttrust');
    Route::get('/admin/searchproducttrustlist', [ProductTrustController::class, 'searchproducttrustlist'])->name('admin/searchproducttrustlist');

    //certificate route
    Route::get('/admin/certificate', [certificateController::class, 'index'])->name('admin/certificate');
    Route::get('/admin/addcertificate', [certificateController::class, 'create'])->name('admin/addcertificate');
    Route::post('/admin/storecertificate', [certificateController::class, 'store'])->name('admin/storecertificate');
    Route::get('/admin/editcertificate/{id}', [certificateController::class, 'edit'])->name('admin/editcertificate');
    Route::post('/admin/updatecertificate{id}', [certificateController::class, 'update'])->name('admin/updatecertificate');
    Route::get('/admin/deletecertificate/{id}', [certificateController::class, 'destroy'])->name('admin/deletecertificate');

    //Event route
    Route::get('/admin/event', [EventController::class, 'index'])->name('admin/event');
    Route::get('/admin/addevent', [EventController::class, 'create'])->name('admin/addevent');
    Route::post('/admin/storeevent', [EventController::class, 'store'])->name('admin/storeevent');
    Route::get('/admin/editevent/{id}', [EventController::class, 'edit'])->name('admin/editevent');
    Route::post('/admin/updateevent', [EventController::class, 'update'])->name('admin/updateevent');
    Route::get('/admin/deleteevent/{id}', [EventController::class, 'destroy'])->name('admin/deleteevent');
    Route::get('/admin/searcheventlist', [EventController::class, 'searcheventlist'])->name('admin/searcheventlist');

    //product route
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin/product');
    Route::get('/admin/addproduct', [ProductController::class, 'create'])->name('admin/addproduct');
    Route::post('/admin/storeproduct', [ProductController::class, 'store'])->name('admin/storeproduct');
    Route::get('/admin/editproduct/{id}', [ProductController::class, 'edit'])->name('admin/editproduct');
    Route::post('/admin/updateproduct/{id}', [ProductController::class, 'update'])->name('admin/updateproduct');
    Route::get('/admin/deleteproduct/{id}', [ProductController::class, 'destroy'])->name('admin/deleteproduct');

    //category route
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin/category');
    Route::get('/admin/addcategory', [CategoryController::class, 'create'])->name('admin/addcategory');
    Route::post('/admin/storecategory', [CategoryController::class, 'store'])->name('admin/storecategory');
    Route::get('/admin/editcategory/{id}', [CategoryController::class, 'edit'])->name('admin/editcategory');
    Route::post('/admin/updatecategory{id}', [CategoryController::class, 'update'])->name('admin/updatecategory');
    Route::get('admin/deletecategories/{id}', [CategoryController::class, 'destroy'])->name('admin/deletecategories');

    //video route
    Route::get('/admin/video', [VideoController::class, 'index'])->name('admin/video');
    Route::get('/admin/addvideo', [VideoController::class, 'create'])->name('admin/addvideo');
    Route::post('/admin/storevideo', [VideoController::class, 'store'])->name('admin/storevideo');
    Route::get('/admin/editvideo/{id}', [VideoController::class, 'edit'])->name('admin/editvideo');
    Route::post('/admin/updatevideo{id}', [VideoController::class, 'update'])->name('admin/updatevideo');
    Route::get('admin/deletevideos/{id}', [VideoController::class, 'destroy'])->name('admin/deletevideos');

    //subcategory route
    Route::get('/admin/subcategory', [SubCategoryController::class, 'index'])->name('admin/subcategory');
    Route::get('/admin/addsubcategory', [SubCategoryController::class, 'create'])->name('admin/addsubcategory');
    Route::post('/admin/storesubcategory', [SubCategoryController::class, 'store'])->name('admin/storesubcategory');
    Route::get('/admin/editsubcategory/{id}', [SubCategoryController::class, 'edit'])->name('admin/editsubcategory');
    Route::post('/admin/updatesubcategory{id}', [SubCategoryController::class, 'update'])->name('admin/updatesubcategory');
    Route::get('admin/deletesubcategories/{id}', [SubCategoryController::class, 'destroy'])->name('admin/deletesubcategories');

    Route::get('/admin/landinginq', [LandingInqController::class, 'index'])->name('admin/landinginq');
    Route::get('admin/deletelandinginq/{id}', [LandingInqController::class, 'destroy'])->name('admin/deletelandinginq');

    //faq route
    Route::get('/admin/faq', [FaqController::class, 'index'])->name('admin/faq');
    Route::get('/admin/addfaq', [FaqController::class, 'addfaq'])->name('admin/addfaq');
    Route::post('/admin/insertfaq', [FaqController::class, 'insertfaq'])->name('admin/insertfaq');
    Route::get('/admin/deletefaq/{id}', [FaqController::class, 'deletefaq'])->name('admin/deletefaq');
    Route::get('/admin/editfaq/{id}', [FaqController::class, 'editfaq'])->name('admin/editfaq/{id}');
    Route::post('/admin/updatefaq', [FaqController::class, 'updatefaq'])->name('admin/updatefaq');

    //casestudy route
    Route::get('/admin/casestudy', [CaseStudyController::class, 'index'])->name('admin/casestudy');
    Route::get('/admin/addcasestudy', [CaseStudyController::class, 'addcasestudy'])->name('admin/addcasestudy');
    Route::post('/admin/insertcasestudy', [CaseStudyController::class, 'insertcasestudy'])->name('admin/insertcasestudy');
    Route::get('/admin/deletecasestudy/{id}', [CaseStudyController::class, 'deletecasestudy'])->name('admin/deletecasestudy');
    Route::get('/admin/editcasestudy/{id}', [CaseStudyController::class, 'editcasestudy'])->name('admin/editcasestudy/{id}');
    Route::post('/admin/updatecasestudy', [CaseStudyController::class, 'updatecasestudy'])->name('admin/updatecasestudy');

// review route
    Route::get('/admin/review', [ReviewController::class, 'index'])->name('admin/review');
    Route::get('/admin/addreview', [ReviewController::class, 'create'])->name('admin/addreview');
    Route::post('/admin/storereview', [ReviewController::class, 'store'])->name('admin/storereview');
    Route::get('/admin/editreview/{id}', [ReviewController::class, 'edit'])->name('admin/editreview');
    Route::post('/admin/updatereview', [ReviewController::class, 'update'])->name('admin/updatereview');
    Route::get('/admin/deletereview/{id}', [ReviewController::class, 'destroy'])->name('admin/deletereview');

});
