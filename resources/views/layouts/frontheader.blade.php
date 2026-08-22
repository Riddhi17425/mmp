<!DOCTYPE html>

<html lang="en">



<head>

     <!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-5P83LKH6');</script>

<!-- End Google Tag Manager -->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{!! $title ?? '' !!}</title>

    <meta name="description" content="{!! $description ?? '' !!}">

    <link href="{{ asset('public/front/images/favicon.png') }}" rel="icon">

    





@if (request()->is('/'))

    <!-- new dashboard links -->

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"

          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <!-- slick slider css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"

          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="

          crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"

          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="

          crossorigin="anonymous" referrerpolicy="no-referrer" />





    <!-- end new dashboard links -->



@else

    <!-- internal pages -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"

            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="

            crossorigin="anonymous"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"

          rel="stylesheet"

          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"

          crossorigin="anonymous">



    <link rel="stylesheet" href="{{ asset('public/front/css/slick.css') }}?v={{ time() }}" />

    <link rel="stylesheet" href="{{ asset('public/front/css/slick-theme.css') }}?v={{ time() }}" />

    <link rel="stylesheet" href="{{ asset('public/front/css/fancybox.min.css') }}?v={{ time() }}" />

    <link rel="stylesheet" href="{{ asset('public/front/css/mmp.style.css') }}?v={{ time() }}" />

    <link rel="stylesheet" href="{{ asset('public/front/css/mmp.responsive.css') }}?v={{ time() }}" />

    <!-- internal pages end -->

@endif



    <!-- comman links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap"

        rel="stylesheet">

    <!-- css -->

     <link rel="stylesheet" href="{{ asset('public/newpublic/css/offcanvas.css') }}">

    <link rel="stylesheet" href="{{ asset('public/newpublic/css/header.css') }}">

    <link rel="stylesheet" href="{{ asset('public/newpublic/css/header_responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('public/newpublic/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('public/newpublic/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('public/newpublic/css/footer.css') }}">

    <!-- gsap -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- end comman links -->





    <!--og tags start-->

    <meta property="og:title" content="{!! $title ?? '' !!}">

    <meta property="og:description" content="{!! $description ?? '' !!}">

    <meta property="og:image:width" content="1200">

    <meta property="og:image:height" content="627">

    <meta property="og:url" content="{{url()->current()}}" />

    <meta property="og:type" content="website">

    @if(!empty($og_image))

        <meta property="og:image" content="{{ asset('public/blog_og_image/' . $blogdetail->og_image) }}" />

    @elseif(!empty($data['products']->mobile_image))

     <meta property="og:image" content="{{ asset('public/Product_Mobile_Images/'.$data['products']->mobile_image) }}" />

    

    @else

         <meta property="og:image" content="{{ isset($ogimage) ? $ogimage : asset('public/front/images/air-filters.png') }}" />

    @endif

    <!--og tags ends-->



      <link rel="canonical" href="{{ url()->current() }}"> 

    <!--Schema tags start-->

    <script type="application/ld+json">

    {         

      "@context": "https://schema.org/",         

      "@type": "Organization",         

      "@id": "#Organization",         

      "url": "https://mmpfilter.com/",         

      "legalName": "mmp Filtration",         

      "name": "mmp Filtration",         

      "description": "MMP Filtration offers a wide range of filter cartridges, such as PP spun filters, wound filters, melt-blown filters, dref yarn, PP yarn, and wound filter cartridges, to meet your liquid filtration needs. ",         

      "image": "https://mmpfilter.com/public/front/images/dref-spinning.png",         

      "logo": "https://mmpfilter.com/public/front/images/logo.png",         

      "telephone": "+91 9830030614",         

      "email": "sales@mmpfilter.com",         

      "address": {             

        "@type": "PostalAddress",             

        "streetAddress": "34c, Grey St, Raja Nabakrishna Street, Sovabazar, Darjipara, Shobhabazar",             

        "addressLocality": "Kolkata",             

        "addressRegion": "West Bengal",             

        "addressCountry": "IN",             

        "postalCode": "700005 "        

      },         

      "sameAs": [             

        "https://www.facebook.com/mmpfiltration",          

        "https://www.youtube.com/@mmpfiltrationpvt.ltd.9372/featured",             

        "https://www.instagram.com/mmpfiltration/",             

        "https://www.linkedin.com/company/mmpfiltration/"      

      ] 

  } 

</script>



    <!-- Meta Pixel Code -->

    <script>

    !function(f,b,e,v,n,t,s)

    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

    n.callMethod.apply(n,arguments):n.queue.push(arguments)};

    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

    n.queue=[];t=b.createElement(e);t.async=!0;

    t.src=v;s=b.getElementsByTagName(e)[0];

    s.parentNode.insertBefore(t,s)}(window, document,'script',

    'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1683095025802352');

    fbq('track', 'PageView');

    </script>

    <noscript><img height="1" width="1" style="display:none"

    src="https://www.facebook.com/tr?id=1683095025802352&ev=PageView&noscript=1"

    /></noscript>

    <!-- End Meta Pixel Code -->







<!--Schema tags ends-->



</head>



<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5P83LKH6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <style>

        .lang_arr{position:absolute;right:5px;top:10px;z-index:-1;}

    </style>

    @php

    $categories = DB::table('categories')

        ->leftJoin('product', function($join) {

            $join->on('categories.id', '=', 'product.category_id')

                 ->where('product.is_delete', '=', '0');

        })

        ->where('categories.is_delete', '0')

        ->select('categories.id as category_id', 'categories.category_name','categories.category_url', 'product.id as product_id', 'product.product_name', 'product.producturl')

        ->get()

        ->groupBy('category_id');

    @endphp

    

    @if (request()->is('liquid-bag'))

        <header>

    @else

        <header class="{{ request()->is('/') ? '' : 'is-white' }}">

    @endif

        <div class="header-container">

            <nav>

                

                 @include('layouts.new_frontheader')

                <!-- LEFT MENU (DESKTOP) -->

                <ul class="nav-links d-none">

                    <li><span class="hamburger-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">

                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <rect x="0.5" y="0.5" width="35" height="35" rx="17.5" />

                                <line x1="9.5" y1="12.5" x2="26.5" y2="12.5" stroke-linecap="round" />

                                <line x1="9.5" y1="17.5" x2="26.5" y2="17.5" stroke-linecap="round" />

                                <line x1="9.5" y1="22.5" x2="26.5" y2="22.5" stroke-linecap="round" />

                            </svg>



                        </span></li>

                    <li>

                        <a data-menu-target="productsMenu">Products</a>

                    </li>

                    <li>

                        <a data-menu-target="industriesMenu">Industries</a>

                    </li>

                    <li><a href="{{ route('contact') }}">Contact Us</a></li>

                </ul>

                <div class="mobile_hamburger">

                    <span class="hamburger-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">

                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <rect x="0.5" y="0.5" width="35" height="35" rx="17.5" stroke="white" />

                            <line x1="9.5" y1="12.5" x2="26.5" y2="12.5" stroke="white" stroke-linecap="round" />

                            <line x1="9.5" y1="17.5" x2="26.5" y2="17.5" stroke="white" stroke-linecap="round" />

                            <line x1="9.5" y1="22.5" x2="26.5" y2="22.5" stroke="white" stroke-linecap="round" />

                        </svg>



                    </span>

                </div>



                <!-- LOGO -->

                <div class="mb_header logo d-lg-none">

                    <a href="{{ url('/') }}">

                        <img loading="lazy" src="{{ asset('public/newpublic/images/head-logo.svg') }}" alt="mmp" class="img-fluid logo_white">

                        <img loading="lazy" src="{{ asset('public/newpublic/images/head-logo-blue.svg') }}" alt="mmp" class="img-fluid logo_blue">

                    </a>

                </div>



                <div class="d-flex align-items-center gap-3">

                    <div>

                        <div class="language-select">

                            <svg style="cursor: pointer;" width="20" height="20" viewBox="0 0 32 32" fill="none"

                                xmlns="http://www.w3.org/2000/svg">

                                <path

                                    d="M16 28C18.66 27.9998 21.2446 27.1163 23.348 25.488C25.4515 23.8598 26.9546 21.5791 27.6213 19.004M16 28C13.34 27.9998 10.7554 27.1163 8.65197 25.488C6.54854 23.8598 5.04544 21.5791 4.37867 19.004M16 28C19.3133 28 22 22.6267 22 16C22 9.37334 19.3133 4 16 4M16 28C12.6867 28 10 22.6267 10 16C10 9.37334 12.6867 4 16 4M27.6213 19.004C27.868 18.044 28 17.0373 28 16C28.0033 13.9361 27.4718 11.9067 26.4573 10.1093M27.6213 19.004C24.0656 20.9752 20.0656 22.0064 16 22C11.784 22 7.82267 20.9133 4.37867 19.004M4.37867 19.004C4.12633 18.0226 3.9991 17.0133 4 16C4 13.86 4.56 11.8493 5.54267 10.1093M16 4C18.1283 3.99911 20.2186 4.56448 22.0563 5.63809C23.894 6.71169 25.4129 8.25489 26.4573 10.1093M16 4C13.8717 3.99911 11.7814 4.56448 9.94375 5.63809C8.10606 6.71169 6.58708 8.25489 5.54267 10.1093M26.4573 10.1093C23.5542 12.6239 19.8407 14.0055 16 14C12.0027 14 8.34667 12.5333 5.54267 10.1093"

                                    stroke="#ffffff" stroke-width="1.8" stroke-linecap="round"

                                    stroke-linejoin="round" />

                            </svg>



                            @include('layouts.language')

                            




                        </div>

                    </div>



                    <!-- RIGHT MENU (DESKTOP) -->

                    <div class="right_menu_desktop">

                        <button type="button" class="btn_3" id="openEnquiryPopup">

                            <span>Enquire Now</span>

                            <span></span>

                        </button>

                    </div>

                </div>

            </nav>

        </div>

    </header>

    <script>

document.addEventListener("DOMContentLoaded", function () {



    const dropdown = document.getElementById("dropdownList");

    const arrow = document.getElementById("lang-arr");



    const observer = new MutationObserver(function () {

        if (dropdown.classList.contains("show")) {

            arrow.style.transform = "rotate(180deg)";

        } else {

            arrow.style.transform = "rotate(0deg)";

        }

    });



    observer.observe(dropdown, { attributes: true });



});

</script>

    <script>

        document.addEventListener("DOMContentLoaded", function () {

        

            const headerBtn = document.getElementById("openEnquiryPopup");

            const enquiryPopup = document.getElementById("enqpoup");

        

            if (!headerBtn || !whatsappPopup) return;

        

            // Open popup from header button

            headerBtn.addEventListener("click", function (e) {

             

                e.preventDefault();

                enquiryPopup.classList.add("active");

            });

        

        });

    </script>

    <main>

        <!-- offcanvas -->

        <!-- Offcanvas Overlay -->

        <!-- Bootstrap Offcanvas -->

        <!--<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">-->

        <!--    <div class="offcanvas-header">-->

        <!--        <h5 class="offcanvas-title">Menu</h5>-->

        <!--        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>-->

        <!--    </div>-->

        <!--    <div class="offcanvas-body">-->

        <!--        <div class="menu-container">-->



                    <!-- MAIN MENU LEVEL -->

        <!--            <div class="menu-level active" id="mainMenu">-->

        <!--                <ul class="menu-list">-->

        <!--                    <li>-->

        <!--                        <a href="{{ route('about') }}">About</a>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <div class="menu-item" data-submenu="productsMenu">-->

        <!--                            <span class="menu-item-text">Products</span>-->

        <!--                            <span class="arrow-right">›</span>-->

        <!--                        </div>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <div class="menu-item" data-submenu="industriesMenu">-->

        <!--                            <span class="menu-item-text">Industries We Serve</span>-->

        <!--                            <span class="arrow-right">›</span>-->

        <!--                        </div>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <div class="menu-item" data-submenu="resourcesMenu">-->

        <!--                            <span class="menu-item-text">Resources</span>-->

        <!--                            <span class="arrow-right">›</span>-->

        <!--                        </div>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <a href="{{ route('partnership') }}">Partnership Opportunities</a>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <a href="{{ route('machinery') }}">Videos</a>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <a href="{{ route('certifications') }}">Certifications</a>-->

        <!--                    </li>-->

        <!--                    <li>-->

        <!--                        <a href="{{ route('contact') }}">Contact Us</a>-->

        <!--                    </li>-->

        <!--                </ul>-->

        <!--            </div>-->



                    <!-- PRODUCTS SUBMENU LEVEL -->

        <!--            <div class="menu-level hidden" id="productsMenu">-->

        <!--                <div class="submenu-header" data-back="mainMenu">-->

        <!--                    <span class="back-arrow">‹</span>-->

        <!--                    <span class="submenu-title">Products</span>-->

        <!--                </div>-->

                    

        <!--                <ul class="menu-list header_product_list">-->

                    

        <!--                    @foreach($categories as $category_id => $categoryGroup)-->

        <!--                        @php $category = $categoryGroup->first(); @endphp-->

                    

        <!--                        <li>-->

        <!--                            <button class="customaccordion">-->

        <!--                                {{ $category->category_name }}-->

        <!--                            </button>-->

                    

        <!--                            <div class="panel">-->

        <!--                                <ul class="submenu-list">-->

                    

        <!--                                    @foreach($categoryGroup as $product)-->

        <!--                                        @if($product->product_id)-->

                    

        <!--                                            @if(strtolower(trim($product->product_name)) == 'wound filter cartridge machine')-->

        <!--                                                <li>-->

        <!--                                                    <a href="{{ route('woundfiltercartridgemachine') }}">-->

        <!--                                                        {{ $product->product_name }}-->

        <!--                                                    </a>-->

        <!--                                                </li>-->

        <!--                                            @else-->

        <!--                                                <li>-->

        <!--                                                    <a href="{{ route('productdetail', ['url' => $product->producturl]) }}">-->

        <!--                                                        {{ $product->product_name }}-->

        <!--                                                    </a>-->

        <!--                                                </li>-->

        <!--                                            @endif-->

                    

        <!--                                        @endif-->

        <!--                                    @endforeach-->

                                            

        <!--                                    @if($category->category_url == 'water-filter-cartridges')-->

        <!--                                        <li>-->

        <!--                                            <a href="{{ url('/product-detail/liquid-filter-bags') }}">-->

        <!--                                                Liquid Filter Bag-->

        <!--                                            </a>-->

        <!--                                        </li>-->

        <!--                                    @endif-->

        <!--                                </ul>-->

        <!--                            </div>-->

        <!--                        </li>-->

                    

        <!--                    @endforeach-->

                    

                            <!-- Special Static Link -->

        <!--                    <li>-->

        <!--                        <a href="{{ route('woundfiltercartridgemachine') }}">-->

        <!--                            Wound Filter Cartridge Machine-->

        <!--                        </a>-->

        <!--                    </li>-->

                    

        <!--                </ul>-->

        <!--            </div>-->



                    <!-- INDUSTRIES SUBMENU LEVEL -->

        <!--            <div class="menu-level hidden" id="industriesMenu">-->

        <!--                <div class="submenu-header" data-back="mainMenu">-->

        <!--                    <span class="back-arrow">‹</span>-->

        <!--                    <span class="submenu-title">Industries We Serve</span>-->

        <!--                </div>-->

        <!--                <ul class="submenu-list">-->

        <!--                    <li><a href="{{ url('/pharma-industry') }}">Pharma Industry</a></li>-->

        <!--                    <li><a href="{{ url('/chemical-industry') }}">Chemical Industry</a></li>-->

        <!--                    <li><a href="{{ url('/water-treatment-industry') }}">Water Treatment Industry</a></li>-->

        <!--                    <li><a href="{{ url('/food-and-beverage-industry') }}">Food and Beverage Industry</a></li>-->

        <!--                    <li><a href="{{ url('/textile-industry') }}">Textile Industry</a></li>-->

        <!--                    <li><a href="{{ url('/dairy-industry') }}">Dairy Industry</a></li>-->

        <!--                    <li><a href="{{ url('/oil-and-gas-industry') }}">Oil and Gas Industry</a></li>-->

        <!--                    <li><a href="{{ url('/cement-industry') }}">Cement Industry</a></li>-->

        <!--                    <li><a href="{{ url('/power-plant-industry') }}">Power Plant Industry</a></li>-->

        <!--                </ul>-->

        <!--            </div>-->



                    <!-- RESOURCES SUBMENU LEVEL -->

        <!--            <div class="menu-level hidden" id="resourcesMenu">-->

        <!--                <div class="submenu-header" data-back="mainMenu">-->

        <!--                    <span class="back-arrow">‹</span>-->

        <!--                    <span class="submenu-title">Resources</span>-->

        <!--                </div>-->

        <!--                <ul class="submenu-list">-->

        <!--                    <li><a href="{{ url('blogs') }}">Blogs</a></li>-->

        <!--                    <li><a href="{{ route('event') }}">Events</a></li>-->

        <!--                    <li><a href="{{ route('casestudy') }}">Case Study</a></li>-->

        <!--                </ul>-->

        <!--            </div>-->



        <!--        </div>-->

        <!--    </div>-->

        <!--</div>-->

         <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">

            <div class="offcanvas-header">

                <h5 class="offcanvas-title">Menu</h5>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>

            </div>

            <div class="offcanvas-body">

                <div class="menu-container">



                    <!-- MAIN MENU LEVEL -->

                    <div class="menu-level active" id="mainMenu">

                        <ul class="menu-list">

                           

                            <li>

                                <div class="menu-item" data-submenu="productsMenu">

                                    <span class="menu-item-text">Products</span>

                                    <span class="arrow-right">›</span>

                                </div>

                            </li>

                            <li>

                                <div class="menu-item" data-submenu="industriesMenu">

                                    <span class="menu-item-text">Industries We Serve</span>

                                    <span class="arrow-right">›</span>

                                </div>

                            </li>

                            <li>

                                <div class="menu-item" data-submenu="resourcesMenu">

                                    <span class="menu-item-text">Resources</span>

                                    <span class="arrow-right">›</span>

                                </div>

                            </li>

                            

                             <li>

                                <a href="{{ route('about') }}">About Us</a>

                            </li>

                            

                            <li>

                                <a href="{{ route('partnership') }}">Partnership Opportunities</a>

                            </li>

                            <li>

                                <a href="{{ route('machinery') }}">Videos</a>

                            </li>

                            <li>

                                <a href="{{ route('certifications') }}">Certifications</a>

                            </li>

                            <li>

                                <a href="{{ route('contact') }}">Contact Us</a>

                            </li>

                        </ul>

                    </div>



                    <!-- PRODUCTS SUBMENU LEVEL -->

                    <div class="menu-level hidden" id="productsMenu">

                        <div class="submenu-header" data-back="mainMenu">

                            <span class="back-arrow">‹</span>

                            <span class="submenu-title">Products</span>

                        </div>

                    

                        <ul class="menu-list header_product_list">

                    

                            @foreach($categories as $category_id => $categoryGroup)

                                @php $category = $categoryGroup->first(); @endphp

                    

                                <li>

                                    <button class="customaccordion">

                                        {{ $category->category_name }}

                                    </button>

                    

                                    <div class="panel">

                                        <ul class="submenu-list">

                    

                                            @foreach($categoryGroup as $product)

                                                @if($product->product_id)

                    

                                                    @if(strtolower(trim($product->product_name)) == 'wound filter cartridge machine')

                                                        <li>

                                                            <a href="{{ route('woundfiltercartridgemachine') }}">

                                                                {{ $product->product_name }}

                                                            </a>

                                                        </li>

                                                    @else

                                                        <li>

                                                            <a href="{{ route('productdetail', ['url' => $product->producturl]) }}">

                                                                {{ $product->product_name }}

                                                            </a>

                                                        </li>

                                                    @endif

                    

                                                @endif

                                            @endforeach

                                            

                                            @if($category->category_url == 'water-filter-cartridges')

                                                <li>

                                                    <a href="{{ url('/product-detail/liquid-filter-bags') }}">

                                                        Liquid Filter Bag

                                                    </a>

                                                </li>

                                            @endif

                                        </ul>

                                    </div>

                                </li>

                    

                            @endforeach

                    

                            <!-- Special Static Link -->

                            <li>

                                <a href="{{ route('woundfiltercartridgemachine') }}">

                                    Wound Filter Cartridge Machine

                                </a>

                            </li>

                    

                        </ul>

                    </div>



                    <!-- INDUSTRIES SUBMENU LEVEL -->

                    <div class="menu-level hidden" id="industriesMenu">

                        <div class="submenu-header" data-back="mainMenu">

                            <span class="back-arrow">‹</span>

                            <span class="submenu-title">Industries We Serve</span>

                        </div>

                        <ul class="submenu-list">

                            <li><a href="{{ url('/pharma-industry') }}">Pharma Industry</a></li>

                            <li><a href="{{ url('/chemical-industry') }}">Chemical Industry</a></li>

                            <li><a href="{{ url('/water-treatment-industry') }}">Water Treatment Industry</a></li>

                            <li><a href="{{ url('/food-and-beverage-industry') }}">Food and Beverage Industry</a></li>

                            <li><a href="{{ url('/textile-industry') }}">Textile Industry</a></li>

                            <li><a href="{{ url('/dairy-industry') }}">Dairy Industry</a></li>

                            <li><a href="{{ url('/oil-and-gas-industry') }}">Oil and Gas Industry</a></li>

                            <li><a href="{{ url('/cement-industry') }}">Cement Industry</a></li>

                            <li><a href="{{ url('/power-plant-industry') }}">Power Plant Industry</a></li>

                        </ul>

                    </div>



                    <!-- RESOURCES SUBMENU LEVEL -->

                    <div class="menu-level hidden" id="resourcesMenu">

                        <div class="submenu-header" data-back="mainMenu">

                            <span class="back-arrow">‹</span>

                            <span class="submenu-title">Resources</span>

                        </div>

                        <ul class="submenu-list">

                            <li><a href="{{ url('blogs') }}">Blogs</a></li>

                            <li><a href="{{ route('event') }}">Events</a></li>

                            <li><a href="{{ route('casestudy') }}">Case Study</a></li>

                        </ul>

                    </div>



                </div>

            </div>

        </div>

        <!-- Custom JavaScript -->

        <script>

            // Track current menu

            let currentMenu = 'mainMenu';

            let targetMenuOnOpen = 'mainMenu'; // Which menu to show when offcanvas opens



            // Get elements

            const menuContainer = document.querySelector('.menu-container');

            const offcanvasElement = document.getElementById('offcanvasMenu');



            // Navigate to submenu

            function navigateToSubmenu(submenuId) {

                console.log('Navigating to:', submenuId);



                const currentMenuElement = document.getElementById(currentMenu);

                const nextMenuElement = document.getElementById(submenuId);



                if (!nextMenuElement) {

                    console.error('Menu not found:', submenuId);

                    return;

                }



                // Hide current menu with slide right animation

                currentMenuElement.classList.remove('active');

                currentMenuElement.classList.add('slide-out-right');



                setTimeout(() => {

                    currentMenuElement.classList.add('hidden');

                    currentMenuElement.classList.remove('slide-out-right');

                }, 300);



                // Show next menu with slide from left

                nextMenuElement.classList.remove('hidden');

                nextMenuElement.classList.add('slide-in-left');



                setTimeout(() => {

                    nextMenuElement.classList.remove('slide-in-left');

                    nextMenuElement.classList.add('active');

                }, 10);



                currentMenu = submenuId;

            }



            // Navigate back

            function navigateBack(targetMenuId) {

                console.log('Navigating back to:', targetMenuId);



                const currentMenuElement = document.getElementById(currentMenu);

                const previousMenuElement = document.getElementById(targetMenuId);



                if (!previousMenuElement) {

                    console.error('Menu not found:', targetMenuId);

                    return;

                }



                // Hide current menu with slide left animation

                currentMenuElement.classList.remove('active');

                currentMenuElement.classList.add('slide-in-left');



                setTimeout(() => {

                    currentMenuElement.classList.add('hidden');

                    currentMenuElement.classList.remove('slide-in-left');

                }, 300);



                // Show previous menu with slide from right

                previousMenuElement.classList.remove('hidden');

                previousMenuElement.classList.add('slide-out-right');



                setTimeout(() => {

                    previousMenuElement.classList.remove('slide-out-right');

                    previousMenuElement.classList.add('active');

                }, 10);



                currentMenu = targetMenuId;

            }



            // Reset to specific menu (used when opening offcanvas from header links)

            function resetToMenu(menuId) {

                console.log('Resetting to menu:', menuId);

                const allLevels = document.querySelectorAll('.menu-level');

                allLevels.forEach(level => {

                    level.classList.remove('active', 'slide-out-right', 'slide-in-left');

                    level.classList.add('hidden');

                });



                const targetMenu = document.getElementById(menuId);

                if (targetMenu) {

                    targetMenu.classList.remove('hidden');

                    targetMenu.classList.add('active');

                    currentMenu = menuId;

                }

            }



            // Reset to main menu

            function resetToMainMenu() {

                resetToMenu('mainMenu');

            }



            // Listen for clicks on header nav links with data-menu-target

            document.addEventListener('click', function (e) {

                const trigger = e.target.closest('[data-menu-target]');

                if (trigger) {

                    const menuTarget = trigger.getAttribute('data-menu-target');

                    console.log('Header link clicked, target menu:', menuTarget);

                    targetMenuOnOpen = menuTarget;

                }

            });



            // When offcanvas is shown, navigate to the target menu

            document.querySelectorAll('[data-menu-target]').forEach(link => {

    link.addEventListener('click', function (e) {



        e.preventDefault();



        const menuTarget = this.getAttribute('data-menu-target');



        const offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        offcanvas.show();



        // Wait for offcanvas animation to finish

        setTimeout(() => {

            resetToMenu(menuTarget);

        }, 300);



    });

});



            // Delegate click events for menu items

            menuContainer.addEventListener('click', function (e) {

                // Check if clicked on menu item with submenu

                const menuItem = e.target.closest('.menu-item');

                if (menuItem) {

                    e.preventDefault();

                    const submenuId = menuItem.getAttribute('data-submenu');

                    if (submenuId) {

                        navigateToSubmenu(submenuId);

                    }

                    return;

                }



                // Check if clicked on back button

                const submenuHeader = e.target.closest('.submenu-header');

                if (submenuHeader) {

                    e.preventDefault();

                    const backMenuId = submenuHeader.getAttribute('data-back');

                    if (backMenuId) {

                        navigateBack(backMenuId);

                    }

                    return;

                }

            });



            // Listen for offcanvas hide event to reset menu

            offcanvasElement.addEventListener('hidden.bs.offcanvas', function () {

                resetToMainMenu();

            });



            // console.log('Bootstrap Offcanvas menu with header links initialized');

        </script>

        <!-- offcanvas -->



        <!-- header scripts -->



        <!-- header script -->

        <script>

            // gsap

            const header = document.querySelector("header");



            let lastScroll = 0;

            let headerHeight = header.offsetHeight;



            window.addEventListener("scroll", () => {

                const currentScroll = window.pageYOffset;



                // SCROLL DOWN â†’ HIDE

                if (currentScroll > lastScroll && currentScroll > headerHeight + 200) {

                    gsap.to(header, {

                        y: -(headerHeight + 100),

                        duration: 0.35,

                        ease: "power2.out"

                    });

                }



                // SCROLL UP â†’ SHOW + GLASS

                if (currentScroll < lastScroll) {

                    gsap.to(header, {

                        y: 0,

                        duration: 0.35,

                        ease: "power2.out"

                    });

                    header.classList.add("is-glass");

                }



                // TOP â†’ RESET

                if (currentScroll <= 10) {

                    header.classList.remove("is-glass");

                    gsap.to(header, {

                        y: 0,

                        duration: 0.2

                    });

                }



                lastScroll = currentScroll;

            });

            // gsap

        </script>

        <!-- header script -->

          <script>

            var acc = document.getElementsByClassName("customaccordion");



            for (var i = 0; i < acc.length; i++) {

                acc[i].addEventListener("click", function () {



                    this.classList.toggle("active");



                    var panel = this.nextElementSibling;



                    if (panel.style.maxHeight) {

                        panel.style.maxHeight = null;

                    } else {

                        panel.style.maxHeight = panel.scrollHeight + "px";

                    }



                });

            }

        </script>

        <!-- header scripts -->