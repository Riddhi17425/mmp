@include('layouts.frontheader')
<style>
   .set-content p{
   color: #fff;
   margin-bottom: 30px;
   }
   .mob_desk{display:none;}
   .video_banner h1{color:#17367f;}
   .video_banner p{color:#17367f;}
   @media screen and (max-width: 769px) {
   .desk_vid{display:none;}
   .mob_desk{display:block;}
   .video_banner h1{color:#fff;}
   .video_banner p{color:#fff;}
   }
</style>
<!-- banner -->
@if ($data['products']->producturl == 'melt-blown-filter-cartridges')
<!--<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#inquiryModal">-->
<section class="position-relative">
   <div class="video_banner">
      <video autoplay muted loop playsinline width="100%" class="mob_desk">
         <source src="{{ asset('public/front/images/Pleated_Filter_Bags_Verticle.mp4') }}" type="video/mp4">
         Your browser does not support the video tag.
      </video>
      <video autoplay muted loop playsinline width="100%" class="desk_vid">
         <source src="{{ asset('public/front/images/cta_vid_2.mp4') }}" type="video/mp4">
         Your browser does not support the video tag.
      </video>
      <!--<div class="col-lg-6">-->
      <div class="col-lg-6 col-md-6 contact-head product-contact-head">
         <h1 class="mb-3 mb-xl-4">MELT BLOWN FILTER CARTRIDGES</h1>
         <div class="set-content">
            <p>NSF-Certified PP Spun Filters for High Efficiency, Custom Fit, and Reliable Filtration.</p>
         </div>
         <div class="theme-btn justify-content-start ">
            <button type="button" class="btn-add" id="banner_btn" >
               <span>
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               </span>
               <p style="color:#17367f;">Enquire Now</p>
            </button>
         </div>
      </div>
      <!--</div>-->
   </div>
</section>
<!--</a>-->
@endif
<!-- <section class="contact-banner position-relative">-->
<!--     <img src="{{ asset('public/Product_Mobile_Images/'.$data['products']->mobile_image) }}" alt="{{ $data['products']->alt}}" class="img-fluid mobile-img" />-->
<!--  <div class="container-fluid p-0">-->
<!--    <img src="{{ asset('public/Product_Banner_Images/'.$data['products']->product_banner_image) }}" alt="{{ $data['products']->alt}}" class="img-fluid product-page-header" />-->
<!--    <div class="contact-head product-contact-head">-->
<!--              <h1>{{ $data['products']->product_name }}</h1>-->
<!--              <div class="set-content">-->
<!--                    {!! $data['products']->product_description !!}-->
<!--                    </div>-->
<!--                    <div class="theme-btn justify-content-start ">-->
<!--                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"-->
<!--                        data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"-->
<!--                            aria-hidden="true"></i></span>-->
<!--                        <p>Enquire Now</p>-->
<!--                      </button>-->
<!--                    </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
@if ($data['products']->producturl != 'melt-blown-filter-cartridges') 
<section class="contact-banner position-relative">
   <img src="{{ asset('public/Product_Mobile_Images/'.$data['products']->mobile_image) }}" alt="{{ $data['products']->alt}}" class="img-fluid mobile-img" />
   <div class="container-fluid p-0">
      <img src="{{ asset('public/Product_Banner_Images/'.$data['products']->product_banner_image) }}" alt="{{ $data['products']->alt}}" class="img-fluid product-page-header" />
      <div class="contact-head product-contact-head">
         <h1>{{ $data['products']->product_name }}</h1>
         <div class="set-content">
            {!! $data['products']->product_description !!}
         </div>
         <div class="theme-btn justify-content-start ">
            <button type="button" class="btn-add"  id="banner_btn">
               <span><i class="fa fa-angle-right"
                  aria-hidden="true"></i></span>
               <p>Enquire Now</p>
            </button>
         </div>
      </div>
   </div>
</section>
@endif
<!-- banner end -->
<!-- filter-inner -->
@php
$image = [];
if (!empty($data['products']->product_image)) {
$image = strpos($data['products']->product_image, ',') !== false 
? explode(',', $data['products']->product_image) 
: [$data['products']->product_image];
}
@endphp
@if(count($image) > 0)
@if($data['products']->producturl != 'wound-filter-machine')
<section class="filter-inner">
   <div class="container">
      <!-- Description -->
      <div class="row">
         <div class="col-md-12">
            <div class="m-add">
               {!! $data['products']->description !!}
            </div>
         </div>
      </div>
      <div class="row">
         <!-- LEFT: Image Section -->
         <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
            <div class="manufacturing">
               @foreach($image as $v)
               <div>
                  <img src="{{ asset('public/Product_Images/'.$v) }}" 
                     alt="{{ $data['products']->alt }}" 
                     class="img-fluid">
               </div>
               @endforeach
            </div>
            @if ($data['products']->producturl == 'pleated-filter-bags' || $data['products']->producturl == 'pleated-cartridges') 
            <p class="mt-2">
               Please inquire at 
               <a href="mailto:mumbai@mmpfilter.com">mumbai@mmpfilter.com</a> 
               for the specification sheet.
            </p>
            @endif
         </div>
         <!-- RIGHT: Technical Details -->
         <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
            {!! $data['products']->technical_details !!}
         </div>
      </div>
   </div>
</section>
@endif
@endif
@if ($data['products']->producturl == 'melt-blown-filter-cartridges') 
<!-- filter-inner end -->
<!--<video autoplay muted loop playsinline width="100%">-->
<!--         <source src="{{ asset('public/front/images/melt_blown_gif.mp4') }}" type="video/mp4">-->
<!--</video>-->
<!--<a href="{{route('contact')}}" target="_blank">-->
<!--<video autoplay muted loop playsinline width="100%">-->
<!--         <source src="{{ asset('public/front/images/cta_video.mp4') }}" type="video/mp4">-->
<!--</video>-->
<!--</a>-->
@endif
@if ($data['products']->producturl == 'pleated-filter-bags') 
<video autoplay muted loop playsinline width="100%">
   <source src="{{ asset('public/front/images/Gif_Animation_3.mp4') }}" type="video/mp4">
</video>
@endif
<!-- anti-microbial-wound-filter-cartridge -->
@if ($data['products']->producturl == 'anti-microbial-wound-filter-cartridges') 
<div class="application-item">
   <div class="container">
      <div class="theme-btn justify-content-start ">
         <button type="button" class="btn-add"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <span>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            <p style="color:#17367f;">Test Report</p>
         </button>
      </div>
      </a>
   </div>
</div>
@endif
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- <a href="{{ asset('public/front/images/ANTI MICROBIAL WOUND FILTER CARTRIDGE CERTIFICATE.png') }}"> -->
            <img class="img-fluid" src="{{ asset('public/front/images/ANTI MICROBIAL WOUND FILTER CARTRIDGE CERTIFICATE.png') }}" alt="image">
         </div>
      </div>
   </div>
</div>
<!-- high-flow-pleated-filter -->
<section>
   <div class="container">
      @if ($data['products']->producturl == 'high-flow-pleated-filter') 
      <div class="row">
         <div class="col-md-7">
            <h3 class="dref-text">Application</h3>
            <ul class="dref-spinning">
               <li>Sea water desalination</li>
               <li>Oil & Chemical</li>
               <li>Food and Beverages</li>
               <li>White Fuels</li>
               <li>Process Water</li>
               <li>Amine, Glycol</li>
               <li>Power plant water treatment</li>
               <li>Naphtha, HC Condensate</li>
               <li>RO Guard Pre-filtration</li>
               <li>Steel mill water treatment</li>
            </ul>
         </div>
         <div class="col-md-5">
            <div class="product-detail">
               <div><img src="{{ asset('public/front/images/data.png') }}" alt="Ordering Information" class="img-fluid" ></div>
            </div>
         </div>
      </div>
      @endif
   </div>
</section>
<!-- pph -->
@if ($data['products']->producturl == 'pph') 
<section>
   <div class="container">
      <div class="row align-items-center">
         <p class="category-content">These filter housings find widespread application across various industries including pharmaceuticals, food and beverage production, water treatment, and chemical processing Their versatility is reflected in the range of sizes and configurations available, accommodating different types of filter cartridges and flow rates to suit specific operational requirements In pharmaceutical settings, these housings play a crucial role in maintaining purity during drug manufacturing processes. 
         </p>
         <p class="category-content">They also contribute to the cleanliness and safety of products in the food and beverage industry by effectively removing contaminants Water treatment facilities rely on them to ensure the quality of drinking water, while chemical processing plants use them to separate impurities and maintain operational efficiency.
         </p>
         <p class="category-content">The strength of PPH one-piece filter housings lies not only in their material resilience but also in their straightforward design that minimizes the risk of leaks and enhances overall reliability By integrating durability with ease of use, these housing support essential industrial processes where cleanliness and consistency are paramount Their ability to withstand harsh conditions and to provide efficient filtration makes them indispensable components in modern manufacturing and processing operations. </p>
      </div>
      <div class="table-responsive">
         <h2><b class="blog-head">Specification</b></h2>
         <table class="table table-bordered">
            <thead>
               <tr class="">
                  <th>MODEL</th>
                  <th>IN-OUTLET (MM)</th>
                  <th>FILTER BAG (MM)</th>
                  <th>FILTER AREA (M2)</th>
                  <th>HOUSINGS CAPACITY/WEIGHT (L/KG)</th>
                  <th>MAXIMUM TRAFFIC (M3/H)</th>
                  <th>OPERATING TEMPERATURE (°C)</th>
                  <th>MAX PRESSURE (MPA)</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>MMPF-1A-P</td>
                  <td>50×50</td>
                  <td>180×430</td>
                  <td>0.25</td>
                  <td>20.3 / 15.3</td>
                  <td>20</td>
                  <td>90</td>
                  <td>0.8</td>
               </tr>
               <tr class="highlight">
                  <td>MMPF-2A-P</td>
                  <td>65×65</td>
                  <td>180×810</td>
                  <td>0.5</td>
                  <td>32 / 24.2</td>
                  <td>40</td>
                  <td>90</td>
                  <td>0.8</td>
               </tr>
               <tr>
                  <td>MMPF-2B-P</td>
                  <td>65×65</td>
                  <td>180×810</td>
                  <td>0.5</td>
                  <td>32 / 24.2</td>
                  <td>40</td>
                  <td>90</td>
                  <td>0.8</td>
               </tr>
               <tr class="highlight">
                  <td>MMPF-4A-P</td>
                  <td>40×40</td>
                  <td>105×380</td>
                  <td>0.12</td>
                  <td>6.5 / 5.9</td>
                  <td>12</td>
                  <td>90</td>
                  <td>0.8</td>
               </tr>
               <tr>
                  <td>MMPF-4AX-P</td>
                  <td>40×40</td>
                  <td>105×380</td>
                  <td>0.12</td>
                  <td>6.5 / 41</td>
                  <td>12</td>
                  <td>70</td>
                  <td>0.6</td>
               </tr>
               <tr class="highlight">
                  <td>MMPF-5A-P</td>
                  <td>50×50</td>
                  <td>150×510</td>
                  <td>0.3</td>
                  <td>2.8 / 10.8</td>
                  <td>22</td>
                  <td>90</td>
                  <td>0.8</td>
               </tr>
               <tr>
                  <td>MMPF-6A-P</td>
                  <td>65×65</td>
                  <td>180×560</td>
                  <td>0.35</td>
                  <td>24 / 18</td>
                  <td>25</td>
                  <td>90</td>
                  <td>0.8</td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</section>
<section class="product_add">
   <div class="container">
      <h2><b class="blog-head">Product Parameters</b></h2>
      <div class="row">
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">This filter housing uses a standard #2 filter bag
               (φ180*810MM) and can also switch to a 30"x5" cotton core filter, making it versatile for different filtration needs in various industries.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters1.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">This filter housing is built to meet global standards and works with filter bags from top brands like (EATON, FSI, and PALL) as well as many standard domestic filter bags. It's designed to handle various filtration needs reliably, ensuring effective performance in different industries.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters3.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">The barrel features a one-piece design,
               providing a solid and reliable structure
               without any welding points, effectively
               eliminating leakage issues. Its polished wall design prevents chemical liquid from
               crystallizing on the surface and makes manual cleaning easier.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters4.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">This filter housing is lightweight and made from imported PPH raw materials, ensuring robust corrosion resistance against a wide range of chemicals. In addition to PPH, advanced materials like ETFE have been developed, further expanding its durability and suitability.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters5.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">This filter housing incorporates UV-resistant materials that enhance its durability and make it
               suitable for use in all types of climates. The UV resistance helps protect the filter from degradation caused by sunlight exposure, ensuring reliable performance over extended periods.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters6.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">The screw-in upper cover allows the process of opening and closing the filter cartridge that results in quick filter bag replacement, enhancing efficiency and minimizing 
               maintenance downtime.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters7.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">The screw-in upper cover allows the process of opening and closing the filter cartridge that results in quick filter bag replacement, enhancing efficiency and minimizing 
               maintenance downtime.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters8.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">
               The increased space between the 
               net basket, the inner wall, and the bottom of the barrel enhances the liquid filtration flow channel, thereby reducing pump energy consumption.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters9.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">
               A sealing design is implemented between the filter bag ring and the inner wall of the net basket, as well as between the outer wall of the basket's upper mouth and the inner wall of the barrel. This prevents internal leakage and ensures precision filtration.
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters10.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">
               Ideal for operating within a pressure range of 116 PSI (8BAR) and temperatures up to 176°F (80°C). This filter housing can accommodate a broad spectrum of filtration precision, ranging from 0.1 to 800 microns..
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters11.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">
               The water inlet and outlet feature flanges are robust and durable,
               and compatible with standard pipe flanges used in various countries.    
            </p>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <img src="{{ asset('public/front/images/ProductParameters12.jpg') }}" alt="ProductParameters" class="img-fluid" />
            <p class="short_dis text-center">
               This filter housing finds extensive applications across urban sewage treatment, copper powder recovery, gold recovery, chemical petroleum industries, bioengineering,
               pharmaceuticals, electronics, electroplating, industrial wastewater treatment, seawater desalination, printing, dyeing, and
               papermaking sectors.
            </p>
         </div>
      </div>
   </div>
</section>
@endif 
<!--polypropylene-yarns-->
@if ($data['products']->producturl == 'polypropylene-yarns') 
<section class="products-feature-tabs" style="padding:35px 0">
   <div class="container">
      <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
               type="button" role="tab" aria-controls="home" aria-selected="true">
               <h3>Product Description </h3>
            </button>
         </li>
         <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
               type="button" role="tab" aria-controls="profile" aria-selected="false">
               <h3>Features  </h3>
            </button>
         </li>
      </ul>
      <div class="tab-content details-tabs-content" id="myTabContent">
         <div class="tab-pane details-content-pane fade active show" id="home" role="tabpanel"
            aria-labelledby="home-tab">
            <p>Polypropylene Yarn (PP Yarn) is one of the first versatile high-performance synthetic yarn in
               widespread use across various industries due to excellent strength, durability, and lightweight
               properties. Because it's manufactured from polypropylene, a thermoplastic polymer, this yarn is
               superior in terms of chemical, moisture, and abrasion resistance, making it perfect for demanding
               applications. 
            </p>
         </div>
         <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <p class="cursor-hover">PP Yarn by <b>mmp</b> is manufactured to provide reliable and high-performance
               solutions across a range of industries, delivering unmatched quality that you can trust. Here’s what
               makes our yarn stand out:
            </p>
            <ul style="list-style: disc; padding-left:23px">
               <li><strong>Built to Last:</strong> Our yarn is highly durable and can handle heavy-duty use across
                  various demanding applications.
               </li>
               <li><strong>Strong and Reliable:</strong> With exceptional tensile strength, it’s perfect for
                  industrial and commercial needs where sturdiness is key.
               </li>
               <li><strong>Light as a Feather: </strong> Despite its impressive strength, <b>mmp</b> PP Yarn is
                  lightweight, making it easy to handle and enhancing efficiency.
               </li>
               <li><strong>Tough in Harsh Conditions:</strong> Resistant to acids, alkalis, and most chemicals, it
                  thrives even in challenging environments.
               </li>
               <li><strong>Sun-Ready:</strong> UV-stable properties ensure the yarn won’t degrade under sunlight,
                  making it great for outdoor uses.
               </li>
               <li><strong>Tailored for You:</strong> We offer customizable options in colors, sizes, and
                  specifications to meet your exact needs.
               </li>
               <li><strong>Eco-Conscious Choice:</strong> Sustainability is important to us. That’s why <b>mmp</b> PP Yarn
                  is recyclable and designed with the environment in mind.
               </li>
               <li><strong>Affordable Excellence:</strong> Get the best of both worlds – premium quality at a
                  cost-effective price.
               </li>
               <li><strong>No Moisture Worries:</strong> Its moisture-resistant nature ensures consistent
                  performance, even in humid or wet conditions.
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
@endif  
<!-- anti-microbial-polypropylene-filtration-yarn -->
@if ($data['products']->producturl == 'anti-microbial-polypropylene-filtration-yarn') 
<div class="application-item">
   <div class="container">
      <!-- <a href="{{ asset('public/front/images/ANTI MICROBIAL WOUND FILTER CARTRIDGE CERTIFICATE.png') }}"> -->
      <div class="theme-btn justify-content-start ">
         <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <span>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </span>
            <p style="color:#17367f;">Test Report</p>
         </button>
      </div>
      </a>
   </div>
</div>
@endif  
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <!-- <a href="{{ asset('public/front/images/ANTI MICROBIAL WOUND FILTER CARTRIDGE CERTIFICATE.png') }}"> -->
            <img class="img-fluid" src="{{ asset('public/front/images/ANTI MICROBIAL WOUND FILTER CARTRIDGE CERTIFICATE.png') }}" alt="image">
         </div>
      </div>
   </div>
</div>
<!-- filter-inner end -->
@if (!empty($data['products']->tab_app) || !empty($data['products']->tab_features) || !empty($data['products']->tab_details))
<section class="products-feature-tabs">
   <div class="container">
      <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
         @if (!empty($data['products']->tab_details))
         <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
               <h3>Product Description </h3>
            </button>
         </li>
         @endif
         @if (!empty($data['products']->tab_features))
         <li class="nav-item" role="presentation">
            <button class="nav-link @if (empty($data['products']->tab_app)) active @endif" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
               <h3>Features</h3>
            </button>
         </li>
         @endif
         @if (!empty($data['products']->tab_app))
         <li class="nav-item" role="presentation">
            <button class="nav-link @if (empty($data['products']->tab_app) && empty($data['products']->tab_features)) active @endif" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
               <h3>Applications</h3>
            </button>
         </li>
         @endif
      </ul>
      <div class="tab-content details-tabs-content" id="myTabContent">
         @if (!empty($data['products']->tab_details))
         <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            {!! $data['products']->tab_details !!}
         </div>
         @endif
         @if (!empty($data['products']->tab_features))
         <div class="tab-pane details-content-pane fade @if (empty($data['products']->tab_app)) show active @endif" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            {!! $data['products']->tab_features !!}
         </div>
         @endif
         @if (!empty($data['products']->tab_app))
         <div class="tab-pane details-content-pane fade @if (empty($data['products']->tab_app) && empty($data['products']->tab_features)) show active @endif" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            {!! $data['products']->tab_app !!}
         </div>
         @endif
      </div>
   </div>
</section>
@endif
<!--certificate image -->
@if ($data['products']->producturl == 'pleated-filter-bags')
<section class="certificate-section">
   <div class="container">
      <div class="certificate-image-wrapper">
         <h2 class="inner-head">Customer Testimonial</h2>
         <img class="img-fluid certificate-img" src="{{ asset('public/front/images/pleated-certificate.webp') }}" alt="certificate image">
      </div>
   </div>
</section>
@endif

@if(isset($data['products']->faq) && !empty($data['products']->faq))
<section class="Product-detail-faq">
   <div class="container">
      @php
      $faqItems = [];
      if (!empty($data['products']->faq)) {
      $decodedFaqItems = json_decode($data['products']->faq, true);
      if (is_array($decodedFaqItems)) {
      foreach ($decodedFaqItems as $item) {
      $question = trim(strip_tags($item['question'] ?? ''));
      $answer = trim(strip_tags($item['answer'] ?? ''));
      if ($question && $answer) {
      $faqItems[] = [
      'question' => $question,
      'answer' => $answer,
      ];
      }
      }
      }
      }
      $faqSchema = [
      '@context' => 'https://schema.org',
      '@type' => 'FAQPage',
      'mainEntity' => array_map(function ($item) {
      return [
      '@type' => 'Question',
      'name' => $item['question'],
      'acceptedAnswer' => [
      '@type' => 'Answer',
      'text' => $item['answer'],
      ],
      ];
      }, $faqItems),
      ];
      @endphp
      @if(!empty($faqItems))
      <script type="application/ld+json">
         {!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
      </script>
      @endif
      <!--<h3 class="inner-head">FAQs About {{ $data['products']->product_name }}-->
      <!--</h3>-->
      <h3 class="inner-head">@if($data['products']->product_name == 'Dust Collector Filter Bags')
         {{ 'FAQs About Dust Collector Bags' }}
         @else
         FAQs About {{ $data['products']->product_name }}
         @endif
      </h3>
      <div class="accordion accordion-flush" id="accordionFlushExample">
         @php
         $faqs = json_decode($data['products']->faq);
         @endphp
         @foreach($faqs as $index => $faq)
         <div class="accordion-item">
            <h4 class="accordion-header" id="flush-heading{{ $index + 1 }}">
               <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index + 1 }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="flush-collapse{{ $index + 1 }}">
               {!! $faq->question !!}
               </button>
            </h4>
            <div id="flush-collapse{{ $index + 1 }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="flush-heading{{ $index + 1 }}" data-bs-parent="#accordionFlushExample">
               <div class="accordion-body">{!! $faq->answer !!}</div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
@endif

@if ($data['products']->producturl == 'mrb-series') 
<section class="order-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 col-md-12">
            <h2 class="mrb-head">Ordering Information</h2>
            <table class="table table-bordered mb-0 prod-table">
               <tbody>
                  <tr>
                     <td style="color: #fff;background: #17367F; width: 150px; border-radius:8px 0 0 0">Model</td>
                     <td style="color: #fff;background: #17367F;  width: 150px;">Micron</td>
                     <td style="color: #fff;background: #17367F;  width: 150px;">Length</td>
                     <td style="color: #fff;background: #17367F;  width: 150px; border-radius: 0 8px 0  0">Adapter</td>
                  </tr>
                  <tr style="background: #F3F3F3;">
                     <td class="inner-tab-text"> MRB </td>
                     <td class="inner-tab-text">5=5µm</td>
                     <td class="inner-tab-text">248 = 9.75inch</td>
                     <td class="inner-tab-text">DOE = Double Open End</td>
                  </tr>
               </tbody>
            </table>
            <p class="mrb-pera">P/N.: MRB-5-248-DOE</p>
         </div>
         <div class="col-xl-1">
         </div>
         <div class="col-xl-4 col-md-12">
            <p class="mrb-pera mt-3">*The information supplied above is based on analysis of production trend. This is subject to change without notice if future trends are adjusted. They are listed for information purposes only and not to be used as purchase specifications. Different lengths and micron ratings are available upon request.</p>
         </div>
      </div>
   </div>
</section>
<section class="feature-wrapper">
   <div class="container">
      <h2 class="mrb-head">Features and Benefits</h2>
      <div class="row">
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  1 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">Robust Structure </h3>
                  <p class="mrb-pera">Two-stage design ensures stability, resisting collapse under high pressure.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  2 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">High Dirt-Holding Capacity </h3>
                  <p class="mrb-pera">Enhanced retention extends service life and
                     efficiency.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  3 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">Varied Micron Ratings</h3>
                  <p class="mrb-pera">Available in
                     multiple sizes to meet diverse filtration needs.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  4 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">Chemical Resistance</h3>
                  <p class="mrb-pera">Compatible with a wide range of industrial chemicals for versatile use.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="application-wrapper">
   <div class="container">
      <p class="mrb-pera-app"><strong>mmp’s</strong> MRB Series Resin Bonded Filter Cartridges offer high dirt-holding capacity, graded porosity, and excellent chemical resistance. Designed for industrial use, they efficiently filter paints, adhesives, solvents, and viscous fluids under high-pressure conditions. <strong>mmp</strong> is a leading name in advanced filtration, delivering reliable and high-performance solutions across industries.</p>
      <div class="back-set">
         <div class="row">
            <div class="col-xl-2">
            </div>
            <div class="col-xl-4 col-md-7 col-sm-12">
               <h2 class="mrb-head text-white">Application</h2>
               <ul>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Paints / Inks / Coatings
                  </li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Emulsions / Adhesives / Resins
                  </li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Organic Solvents / Oil & Gas Fluids</li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Coolants / Various Chemicals Process</li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Water / Wastewater</li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> General Manufacturing Processes</li>
               </ul>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
               <div class="mid-box">
                  <img src="{{ asset('public/front/images/mrb-images/mrb-pendulam.png') }}" class="mid-img" >
                  <p class="mrb-pera text-center text-white">Cross-sectional view for
                     graded porosity of MRB series 
                     resin bonded filter
                  </p>
               </div>
            </div>
            <div class="col-xl-3 col-md-12 col-sm-6">
               <div class="mrb-image-position">
                  <img src="{{ asset('public/front/images/mrb-images/mrb-series.png') }}" class="mrb-img" >
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="industries-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 col-md-12 col-sm-12">
            <img src="{{ asset('public/front/images/mrb-images/left-imge-mrb.png') }}" class="img-fluid">
         </div>
         <div class="col-xl-5 col-md-12 col-sm-12">
            <h2 class="mrb-head">Use of Product in Various Industries</h2>
            <div class="industries-box">
               <div class="row d-flex">
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/chemical-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Chemical</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/petro-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Petrochemicals</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/paints-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Paints</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/coating-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Coatings</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/food-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Food</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/baverage-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Beverages</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/auto-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Automotive</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endif
@if ($data['products']->producturl == 'mab-series') 
<section class="order-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 col-md-12">
            <h2 class="mrb-head">Ordering Information</h2>
            <table class="table table-bordered mb-0 prod-table">
               <tbody>
                  <tr>
                     <td style="color: #fff;background: #17367F; width: 150px; border-radius:8px 0 0 0">Model</td>
                     <td style="color: #fff;background: #17367F;  width: 150px;">Micron</td>
                     <td style="color: #fff;background: #17367F;  width: 150px;">Length</td>
                     <td style="color: #fff;background: #17367F;  width: 150px; border-radius: 0 8px 0  0">Adapter</td>
                  </tr>
                  <tr style="background: #F3F3F3;">
                     <td class="inner-tab-text"> MRB </td>
                     <td class="inner-tab-text">5=5µm</td>
                     <td class="inner-tab-text">248 = 9.75inch</td>
                     <td class="inner-tab-text">DOE = Double Open End</td>
                  </tr>
               </tbody>
            </table>
            <p class="mrb-pera">P/N.: MAB-5-248-DOE</p>
         </div>
         <div class="col-xl-1">
         </div>
         <div class="col-xl-4 col-md-12">
            <p class="mrb-pera">*The information supplied above is based on analysis of production trend. This is subject to change without notice if future trends are adjusted. They are listed for information purposes only and not to be used as purchase specifications. Different lengths and micron ratings are available upon request.</p>
         </div>
      </div>
   </div>
</section>
<section class="feature-wrapper">
   <div class="container">
      <h2 class="mrb-head">Features and Benefits</h2>
      <div class="row">
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  1 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">Robust Structure </h3>
                  <p class="mrb-pera">Two-stage design ensures stability, resisting collapse under high pressure.</p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  2 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">High Dirt-Holding Capacity </h3>
                  <p class="mrb-pera">Enhanced retention extends service life and
                     efficiency.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  3 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">Varied Micron Ratings</h3>
                  <p class="mrb-pera">Available in
                     multiple sizes to meet diverse filtration needs.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="feature-box">
               <div class="feature-count">
                  <p class="count">  4 </p>
               </div>
               <div class="feature-text">
                  <h3 class="mrb-subhead mt-3">Chemical Resistance</h3>
                  <p class="mrb-pera">Compatible with a wide range of industrial chemicals for versatile use.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="application-wrapper">
   <div class="container">
      <p class="mrb-pera-app"><strong>mmp’s</strong> MAB Series Resin Bonded Filter Cartridges provide high-efficiency filtration with graded porosity, making sure of superior particle retention and extended service life. Built for high-pressure and high-temperature applications, they effectively filter paints, coatings, adhesives, solvents, and viscous fluids. <strong>mmp</strong> is a trusted leader in advanced industrial filtration, delivering innovative and reliable solutions across industries.</p>
      <div class="back-set">
         <div class="row">
            <div class="col-xl-2">
            </div>
            <div class="col-xl-4 col-md-7 col-sm-12">
               <h2 class="mrb-head text-white">Application</h2>
               <ul>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Paints / Inks / Coatings
                  </li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Emulsions / Adhesives / Resins
                  </li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Organic Solvents / Oil & Gas Fluids</li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Coolants / Various Chemicals Process</li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> Water / Wastewater</li>
                  <li class="mrb-bullet text-white"><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> General Manufacturing Processes</li>
               </ul>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
               <div class="mid-box">
                  <img src="{{ asset('public/front/images/mab-images/mab-pendulam.png') }}" class="mad-img-pandulam" >
                  <p class="mrb-pera text-center text-white">Cross-sectional view for
                     Multi-layer of MAB Series
                     Resin Bonded filter
                  </p>
               </div>
            </div>
            <div class="col-xl-3 col-md-12 col-sm-6">
               <div class="mrb-image-position">
                  <img src="{{ asset('public/front/images/mab-images/mab-series.png') }}" class="mab-img" >
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="industries-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-xl-7 col-md-12 col-sm-12">
            <img src="{{ asset('public/front/images/mab-images/mab-left-img.png') }}" class="img-fluid">
         </div>
         <div class="col-xl-5 col-md-12 col-sm-12">
            <h2 class="mrb-head">Use of Product in Various Industries</h2>
            <div class="industries-box">
               <div class="row">
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/chemical-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Chemical</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/petro-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Petrochemicals</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/paints-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Paints</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/coating-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Coatings</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/food-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Food</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/baverage-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Beverages</p>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-4">
                     <img src="{{ asset('public/front/images/mrb-images/auto-icon.png') }}" class="img-fluid">
                     <p class="mrb-pera">Automotive</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endif
@if ($data['products']->producturl == 'wound-filter-machine') 
<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 mb-4 mt-4">
            <!--<h2 class="text-start inner-head mb-3">1st Generation: Electromechanical Winding Machines</h2>-->
            <!--<h2 class="text-start inner-head mb-4">Wound Filter Cartridge Machine</h2>-->
            <p style="color:#212529; font-size: 20px;" class="mb-0">The Wound Filter Production Machine features advanced technology with a variable frequency motor, servo motor/drive, and automatic stop sensor. With versatile winding core and tube options, this machine ensures precise, gear-free filter pattern changes and low maintenance for efficient operation.</p>
         </div>
         <div class="col-md-5 mb-4">
            <div class="product-detail">
               <div><img src="{{ asset('public/front/images/Electromechanical-Winding-Machines.webp') }}" alt="Wound Filter" class="img-fluid" ></div>
            </div>
         </div>
         <div class="col-md-7 mb-4">
                <table class="table table-bordered mb-0">
                  <tbody>
                    <tr>
                      <td style="color: #fff;background: #023f88; width: 150px;">Technical Name</td>
                      <td style="background: rgb(2, 63, 136);"><font color="#ffffff">Software Supported Electronic String Wound Filter Machine</font></td></tr><tr style="background: #F3F3F3;"><td>Technical Details </td>
                      <td><ul><li>Encoder with variable frequency motor</li><li>Servo motor / Servo drive</li><li>Power : AC 220V/ 50HZ single phase</li><li>Winding Core Material :&nbsp;Polypropylene, Melt Blown, Stainless Steel, Tinned Steel</li><li>Winding Tube : 28mm</li><li>Winding length :&nbsp; 250/254mm, 500/508mm, 750/762mm, 1000/1016 mm</li><li>Automatic stop sensor</li><li>Winding OD Diameter : 200mm</li><li>The pattern and precision of winding by software</li><li>Ratio Input for winding filters</li><li>No gears required for changing filter pattern</li><li>Low maintenance required</li></ul></td>
                    </tr>
                  </tbody>
                </table>
            <!--<h2 class="dref-text mb-3">Key Features and Benefits</h2>-->
            <!--<ul class="dref-spinning" style="padding-left:2rem!important;">-->
            <!--   <li><strong>Precision Control:</strong> Equipped with a variable AC frequency drive and motor for enhanced precision and control over the winding process, with adjustable speeds.</li>-->
            <!--   <li><strong>Versatile Power Options:</strong> Operates on standard or single-phase power (AC 220V/50HZ).</li>-->
            <!--   <li><strong>Dual Spindle Operation:</strong> Features two spindles to produce two wound filter cartridges-->
            <!--      simultaneously, each with different or same lengths.-->
            <!--   </li>-->
            <!--   <li><strong>Advanced Automation:</strong> Automatic stop sensors and manual timing gear ensure precise-->
            <!--      winding patterns.-->
            <!--   </li>-->
            <!--   <li><strong>Material Adaptability:</strong> Supports winding core materials such as Polypropylene, Stainless Steel, or Tinned Steel.</li>-->
            <!--</ul>-->
            <!--<p class="dref-text pt-3">Discover the Power of Inline Filter Cartridge Winding Machine</p>-->
            <!--<div class="theme-btn justify-content-start">-->
            <!--   <a href="https://mmpfilter.com/public/front/images/Inline-Filter-Cartridge-Winding-Machine-Brochure.pdf" target="_black" class="nav-link btn-add dawnload-bnt">-->
            <!--      <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>-->
            <!--      <p>Download Brochure</p>-->
            <!--   </a>-->
            <!--</div>-->
         </div>
         <div class="col-md-5">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                  <svg width="62" height="60" viewBox="0 0 62 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M47.0652 53.0237C49.0703 51.0186 51.0754 49.0135 53.0805 47.0084C52.1893 45.8944 51.2982 44.7805 50.407 43.8893C49.7387 43.221 49.7387 42.5526 50.1842 41.6615C51.0754 39.8791 51.7438 38.0968 52.4121 36.3145C52.6349 35.4234 53.0805 34.9778 53.9716 34.9778C55.3084 34.9778 56.8679 34.755 58.2046 34.5322C58.2046 31.636 58.2046 28.9625 58.2046 26.0663C56.8679 25.8435 55.5312 25.8435 54.1944 25.6207C53.0805 25.6207 52.6349 25.1751 52.4121 24.2839C51.7438 22.5016 51.0754 20.7193 50.1842 18.937C49.7387 18.0459 49.7387 17.6003 50.407 16.9319C51.2982 15.818 52.1893 14.704 53.0805 13.8129C51.0754 11.8078 49.0703 9.8027 47.0652 7.7976C46.174 8.46596 45.0601 9.35712 44.169 10.2483C43.055 11.1394 42.3866 11.1394 41.4955 10.6938C39.936 9.8027 38.1537 9.13433 36.3714 8.46596C35.4802 8.24318 35.0346 7.57481 35.0346 6.68366C35.0346 5.34692 34.8118 4.01019 34.589 2.45067C31.6928 2.45067 29.0193 2.45067 26.1231 2.45067C26.1231 3.56462 25.9003 4.67856 25.9003 5.7925C25.6775 8.02039 25.6775 8.02039 23.8952 8.68875C22.3357 9.35712 20.7762 10.0255 19.2166 10.6938C18.3255 11.1394 17.6571 11.1394 16.9888 10.6938C15.8748 9.8027 14.7609 8.91154 13.6469 8.02039C11.8646 9.80269 9.85952 11.8078 7.85442 13.8129C8.74558 14.704 9.41394 15.818 10.3051 16.7091C11.1963 17.8231 11.1963 18.0459 10.5279 19.3826C10.3051 19.8282 10.0823 20.4965 9.63673 20.9421C9.41394 21.8333 8.52279 22.0561 8.07721 21.6105C7.40885 21.3877 6.96327 20.4965 7.40885 20.051C8.3 18.7142 7.85442 17.8231 6.74048 16.7091C6.2949 16.0408 5.84933 15.3724 5.18096 14.704C4.5126 13.8129 4.5126 13.3673 5.18096 12.6989C7.63164 10.0255 10.0823 7.57481 12.533 5.34692C13.4241 4.45577 13.8697 4.45577 14.7609 5.12414C15.652 6.01529 16.766 6.90644 17.8799 7.7976C18.1027 8.02039 18.5483 8.02039 18.9939 8.02039C20.3306 7.57481 21.6673 6.90644 22.7813 6.46087C23.004 6.23808 23.4496 6.01529 23.4496 5.56971C23.6724 4.23298 23.6724 3.11904 23.8952 1.78231C23.8952 0.445577 24.3408 0 25.6775 0C29.0193 0 32.584 0 35.9258 0C37.0397 0 37.2625 0.445577 37.4853 1.33673C37.7081 2.67346 37.7081 4.01019 37.9309 5.34692C37.9309 6.01529 38.1537 6.23808 38.822 6.46087C39.936 6.90644 41.0499 7.35202 42.1639 7.7976C42.8322 8.24318 43.2778 8.02039 43.9462 7.57481C44.8373 6.68366 45.7285 6.01529 46.6196 5.34692C47.5108 4.67856 47.9564 4.67856 48.8475 5.34692C51.2982 7.7976 53.5261 10.0255 55.9767 12.4762C56.8679 13.3673 56.8679 13.8129 55.9767 14.704C55.0856 15.5952 54.4172 16.7091 53.5261 17.6003C53.0805 18.0459 53.0805 18.2687 53.3033 18.937C53.9716 20.051 54.4172 21.3877 54.8628 22.7244C55.0856 23.17 55.3084 23.3928 55.754 23.3928C57.0907 23.3928 58.4274 23.6156 59.5414 23.6156C60.8781 23.8384 61.1009 24.0612 61.1009 25.3979C61.1009 27.403 61.1009 29.4081 61.1009 31.4132C61.1009 32.7499 61.1009 33.8639 61.1009 35.2006C61.1009 36.5373 60.6553 36.9829 59.3186 36.9829C57.9818 36.9829 56.8679 37.2057 55.5312 37.4285C55.3084 37.4285 54.8628 37.8741 54.64 38.0968C53.9716 39.2108 53.5261 40.5475 53.0805 41.8842C52.8577 42.3298 52.8577 42.5526 53.3033 42.9982C54.1944 44.1121 55.0856 45.0033 55.9767 46.1172C56.6451 47.0084 56.6451 47.454 55.9767 48.3451C53.5261 50.7958 51.2982 53.0237 48.8475 55.4743C47.9564 56.3655 47.5108 56.3655 46.3968 55.4743C45.5057 54.806 44.6145 53.9148 43.7234 53.2465C43.2778 52.8009 42.6094 52.5781 42.1639 53.0237C41.9411 53.2465 41.4955 53.2465 41.2727 53.4692C40.6043 53.692 39.936 53.4692 39.7132 52.8009C39.2676 52.1325 39.4904 51.4641 40.1588 51.2414C41.0499 50.7958 41.7183 50.3502 42.6094 49.9046C43.055 49.6818 43.7234 49.9046 44.169 50.1274C44.8373 51.0186 45.9513 52.1325 47.0652 53.0237Z" fill="#009EE3"/>
                     <path d="M29.2461 14.9274C25.2359 14.9274 21.2257 16.9325 18.1066 20.9427C17.2155 22.0566 16.5471 22.2794 15.8788 21.8339C15.2104 21.3883 15.2104 20.7199 16.1016 19.606C20.5573 13.8135 28.1321 11.14 35.2614 13.1451C42.1678 14.9274 47.5147 20.9427 48.1831 28.0719C49.0743 34.9784 46.6236 40.7709 41.0539 45.0039C40.6083 45.2267 39.9399 45.4494 39.4943 45.4494C38.3804 45.2266 38.3804 43.8899 39.2716 43.2216C41.0539 41.8848 42.6134 40.3253 43.7273 38.3202C49.7426 27.6264 42.3906 14.9274 29.2461 14.9274Z" fill="#009EE3"/>
                     <path d="M32.3605 30.0762C31.0237 31.4129 29.9098 32.5268 28.5731 33.8636C22.335 40.3244 15.8741 46.5625 9.63603 52.8006C8.52209 53.9145 8.07651 53.9145 7.40815 53.2462C6.73978 52.5778 6.96257 51.9094 7.85373 51.0183C15.4285 43.4435 22.7806 36.0914 30.3554 28.5166C30.5782 28.2938 30.5782 28.2938 30.8009 27.8483C30.1326 27.8483 29.687 27.8483 29.2414 27.8483C27.0135 27.8483 24.5629 27.8483 22.335 27.8483C21.221 27.8483 20.7755 27.4027 20.5527 26.5115C20.5527 25.8432 21.221 25.1748 22.1122 25.1748C25.8996 25.1748 29.687 25.1748 33.2516 25.1748C34.3656 25.1748 34.8111 25.6204 34.8111 26.7343C34.8111 30.5217 34.8111 34.3091 34.8111 37.8738C34.8111 38.9877 34.3656 39.4333 33.4744 39.4333C32.5833 39.4333 32.1377 38.7649 32.1377 37.651C32.1377 35.4231 32.1377 32.9724 32.1377 30.7445C32.1377 30.2989 32.1377 29.8534 32.1377 29.4078C32.5833 30.2989 32.3605 30.2989 32.3605 30.0762Z" fill="#009EE3"/>
                     <path d="M11.8638 30.5213C9.63588 32.7492 7.63078 34.7543 5.4029 36.9822C4.73453 37.6506 3.84338 38.5417 3.17501 39.2101C2.50665 39.8785 1.61549 40.1012 1.16991 39.4329C0.724338 38.9873 0.724338 38.0961 1.3927 37.4278C4.06617 34.7543 6.73963 32.0809 9.41309 29.4074C9.63588 29.1846 9.85867 28.9618 10.0815 28.2934C8.52194 28.2934 7.18521 28.2934 5.62569 28.2934C5.4029 28.2934 4.95732 28.2934 4.73453 28.2934C4.06617 28.2934 3.62059 27.8479 3.62059 27.1795C3.62059 26.5111 4.06617 25.8428 4.73453 25.8428C6.29405 25.8428 7.85357 25.8428 9.1903 25.8428C10.527 25.8428 11.8638 25.8428 13.2005 25.8428C14.0916 25.8428 14.5372 26.2883 14.5372 27.1795C14.5372 30.0758 14.5372 32.7492 14.5372 35.6455C14.5372 36.5366 14.0916 36.9822 13.2005 36.9822C12.5321 36.9822 12.0866 36.5366 11.8638 35.6455C11.8638 34.0859 11.8638 32.7492 11.8638 31.1897C11.8638 30.9669 11.8638 30.7441 11.8638 30.5213Z" fill="#009EE3"/>
                     <path d="M32.3601 50.5728C31.9145 51.0184 31.6917 51.0184 31.4689 51.2412C28.7955 53.9147 26.122 56.5881 23.4485 59.2616C22.5574 60.1527 21.889 60.1527 21.2206 59.7072C20.5523 59.0388 20.7751 58.3704 21.6662 57.4793C23.003 56.1425 24.3397 54.8058 25.4536 53.6919C26.7904 52.3551 28.3499 50.7956 29.6866 49.4589C29.9094 49.2361 29.9094 49.0133 30.355 48.7905C28.7955 48.7905 27.4587 48.7905 26.122 48.7905C25.6764 48.7905 25.2308 48.7905 24.7853 48.7905C24.1169 48.7905 23.6713 48.3449 23.6713 47.4538C23.6713 46.7854 24.1169 46.3398 24.7853 46.3398C25.8992 46.3398 26.7904 46.3398 27.9043 46.3398C29.6866 46.3398 31.4689 46.3398 33.2512 46.3398C34.3652 46.3398 34.8107 46.7854 34.8107 47.8994C34.8107 50.5728 34.8107 53.4691 34.8107 56.1425C34.8107 56.8109 34.588 57.4793 33.9196 57.4793C33.474 57.4793 33.0284 57.2565 32.5829 57.0337C32.3601 56.5881 32.3601 56.1425 32.3601 55.9198C32.3601 54.1374 32.3601 52.5779 32.3601 50.5728Z" fill="#009EE3"/>
                  </svg>
                  <h3 class="dref-text">High Efficiency</h3>
                  <p class="short_dis">Maximizes production output with minimal downtime.</p>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                  <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M28.9515 -0.000976562C29.1569 -0.000976562 29.5679 0.2045 29.7734 0.2045C30.8008 0.615459 31.4172 1.43739 31.4172 2.67026C31.4172 3.90314 31.4172 5.13601 31.4172 6.16341C31.8282 6.16341 32.0337 6.36888 32.4446 6.36888C34.2939 6.77984 36.1432 7.60176 37.7871 8.62915C37.9926 8.83463 38.198 8.83463 38.198 8.62915C39.02 7.80724 39.6364 7.1908 40.4583 6.36888C41.4857 5.13601 43.335 5.34149 44.3624 6.36888C45.1843 7.1908 45.8008 7.80724 46.6227 8.62915C47.4446 9.45107 47.6501 10.8894 47.2391 11.9168C47.0337 12.1223 47.0337 12.3278 46.8282 12.5333C46.0063 13.3552 45.1843 14.1771 44.5679 14.7935C44.3624 14.999 44.3624 14.999 44.5679 15.2045C45.8008 17.0538 46.6227 19.3141 47.2391 21.5744C47.2391 21.5744 47.2391 21.5744 47.2391 21.7798C47.4446 21.7798 47.4446 21.7798 47.6501 21.7798C48.6775 21.7798 49.7049 21.7798 50.7323 21.7798C52.3761 21.7798 53.4035 23.2182 53.4035 24.4511C53.4035 25.4785 53.4035 26.7114 53.4035 27.7387C53.4035 29.1771 52.3761 30.6155 50.7323 30.41C49.4994 30.41 48.472 30.41 47.2391 30.41C46.8282 32.0538 46.4172 33.4922 45.5953 35.136C45.1843 34.725 44.9789 34.5196 44.5679 34.3141C44.1569 33.9031 44.1569 33.9031 44.3624 33.2867C44.9789 31.8483 45.3898 30.41 45.5953 28.9716C45.5953 28.5607 45.8008 28.5607 46.2117 28.5607C47.6501 28.5607 49.2939 28.5607 50.7323 28.5607C51.3487 28.5607 51.5542 28.3552 51.7597 27.7387C51.7597 26.9168 51.7597 26.0949 51.7597 25.273C51.7597 25.0675 51.7597 24.6566 51.7597 24.4511C51.7597 23.8346 51.3487 23.6292 50.7323 23.6292C49.2939 23.6292 47.6501 23.6292 46.2117 23.6292C46.0063 23.6292 46.0063 23.6292 45.8008 23.6292C45.5953 23.2182 45.5953 22.6018 45.3898 22.1908C44.9789 19.7251 43.9515 17.6703 42.5131 15.6155C42.1022 14.7935 42.1022 14.7935 42.7186 14.3826C43.746 13.3552 44.7734 12.3278 45.5953 11.5059C46.0063 11.0949 46.0063 10.8894 45.8008 10.4785V10.273C44.9789 9.45108 44.1569 8.62917 43.335 7.80725C42.9241 7.39629 42.5131 7.60177 42.1022 8.01273C41.0748 9.04012 39.8419 10.273 38.8145 11.3004L38.609 11.5059C38.4035 11.3004 38.198 11.3004 37.9926 11.0949C35.5268 9.45108 33.0611 8.42368 30.1843 8.01273C29.7734 8.01273 29.7734 7.80724 29.7734 7.60176C29.7734 6.1634 29.7734 4.51957 29.7734 3.08122C29.7734 2.46478 29.5679 2.25929 28.9515 2.25929C27.9241 2.25929 26.6912 2.25929 25.6638 2.25929C25.0474 2.25929 24.8419 2.67025 24.8419 3.28669C24.8419 4.72505 24.8419 6.36889 24.8419 7.80725C24.8419 8.01273 24.8419 8.01272 24.8419 8.2182C21.5542 8.62916 18.6775 9.86204 16.0063 11.9168C15.5953 11.3004 15.3898 10.8894 15.1843 10.6839C14.1569 9.65655 13.335 8.83465 12.3076 7.80725C11.8967 7.39629 11.4857 7.39628 11.0748 7.60176L10.8693 7.80725C10.2528 8.42369 9.6364 9.04013 8.81448 9.86204C8.609 10.0675 8.609 10.273 8.40352 10.4785C8.19804 10.8894 8.40352 11.0949 8.609 11.3004C9.84188 12.3278 10.8693 13.5607 12.1022 14.5881C12.3076 14.7935 12.3076 14.7936 12.1022 14.999C11.0748 16.6429 10.0474 18.0812 9.43092 19.9305C9.01996 21.1634 8.81448 22.1908 8.40352 23.4237H8.19804C6.55421 23.4237 5.11585 23.4237 3.47201 23.4237C2.85558 23.4237 2.6501 23.6292 2.44462 24.2456C2.44462 25.273 2.44462 26.5059 2.44462 27.5333C2.44462 28.1497 2.85558 28.3552 3.26653 28.3552C4.91037 28.3552 6.34873 28.3552 7.99256 28.3552C8.19804 28.3552 8.40352 28.3552 8.40352 28.7661C8.81448 30.8209 9.22544 32.6703 10.2528 34.3141C10.6638 35.136 11.2802 36.1634 11.8967 36.9853C11.8967 36.9853 11.8967 36.9853 12.1022 37.1908C11.8967 37.3963 11.6912 37.6018 11.4857 37.8072C10.4583 38.8346 9.6364 39.6566 8.609 40.684C8.19804 41.0949 8.19804 41.3004 8.40352 41.7114C8.40352 41.9168 8.609 42.1223 8.81448 42.1223C9.43092 42.7388 10.0474 43.3552 10.6638 43.9716C10.8693 44.1771 11.0748 44.3826 11.2802 44.3826C11.6912 44.5881 11.8967 44.3826 12.1022 44.1771C13.1295 42.9442 14.3624 41.9168 15.3898 40.8894C15.5953 40.684 15.5953 40.684 15.8008 40.8894C17.2391 41.9168 18.883 42.9442 20.7323 43.3552C21.7597 43.7661 22.9926 43.9716 24.02 44.1771C24.2254 44.1771 24.4309 44.3826 24.4309 44.5881C24.4309 46.2319 24.4309 47.6703 24.4309 49.3141C24.4309 49.9305 24.6364 50.136 25.2528 50.136C25.4583 50.136 25.4583 50.136 25.6638 50.136C26.4857 50.136 27.5131 50.136 28.335 50.136C28.5405 50.136 28.746 50.136 28.9515 49.9305C29.3624 49.7251 29.3624 49.5196 29.3624 49.1086C29.3624 47.4648 29.3624 46.0264 29.3624 44.3826C29.3624 44.1771 29.3624 43.9716 29.7734 43.9716C31.2117 43.7662 32.6501 43.3552 33.883 42.7388H34.0885C34.4994 43.1497 34.9104 43.5607 35.3213 44.1771C34.7049 44.3826 34.2939 44.5881 33.6775 44.7936C32.8556 44.999 32.2391 45.2045 31.4172 45.41C31.2117 45.41 31.0063 45.6155 31.2117 45.8209C31.2117 46.8483 31.2117 47.8757 31.2117 49.1086C31.2117 50.547 29.9789 51.7798 28.746 51.7798C27.5131 51.7798 26.2802 51.7798 25.0474 51.7798C23.8145 51.7798 22.3761 50.547 22.5816 49.1086C22.5816 48.0812 22.5816 46.8483 22.5816 45.8209C22.5816 45.6155 22.5816 45.6155 22.3761 45.6155C20.1158 44.999 18.0611 44.1771 16.0063 42.9442C16.0063 42.9442 16.0063 42.9442 15.8008 42.9442C15.8008 42.9442 15.5953 42.9442 15.5953 43.1497C14.7734 43.9716 14.1569 44.5881 13.335 45.41C12.3076 46.6429 10.6638 46.4374 9.43092 45.6155C9.22544 45.41 9.01996 45.41 9.01996 45.2045C8.40352 44.5881 7.78708 43.9716 6.96516 43.1497C6.14325 42.1223 5.93777 40.8894 6.34873 39.862C6.96517 40.0675 7.17064 39.862 7.37612 39.6566C8.19804 38.8346 8.81448 38.2182 9.6364 37.3963C9.6364 37.3963 9.84188 37.1908 10.0474 37.1908C9.6364 36.5744 9.43092 36.1634 9.22544 35.7525C8.40352 34.1086 7.78708 32.6703 7.37612 30.8209C7.37612 30.6155 7.17064 30.6155 6.96516 30.6155C5.93777 30.6155 4.70489 30.6155 3.67749 30.6155C2.23914 30.6155 1.41722 29.5881 1.00626 28.5607C1.00626 28.3552 1.00626 28.3552 0.800781 28.1497C0.800781 26.9168 0.800781 25.4785 0.800781 24.2456C0.800781 24.0401 0.800781 24.0401 1.00626 23.8346C1.41722 22.6018 2.44462 21.7798 3.67749 21.7798C4.49941 21.7798 5.32133 21.7798 5.93777 21.7798C6.34873 21.7798 6.75969 21.7798 7.17064 21.7798C7.17064 21.5744 7.17064 21.5744 7.17064 21.5744C7.5816 19.5196 8.40352 17.4648 9.6364 15.6155C9.84188 15.41 9.84188 15.2045 9.6364 14.999C8.81448 14.3826 8.19804 13.5607 7.5816 12.9442C6.34873 11.9168 6.55421 10.0675 7.37612 9.04012C8.19804 8.2182 9.01996 7.1908 9.84188 6.57436C10.8693 5.75244 12.5131 5.54697 13.746 6.77985C14.3624 7.60177 15.1843 8.2182 16.0063 9.04012C16.2117 9.2456 16.2117 9.2456 16.4172 9.04012C18.2665 7.80725 20.3213 6.98532 22.5816 6.57436C22.7871 6.57436 22.7871 6.36889 22.7871 6.16341C22.7871 5.13601 22.7871 3.90314 22.7871 2.87574C22.7871 1.64286 23.4035 0.820935 24.4309 0.409976C24.6364 0.409976 24.8419 0.2045 25.0474 0.2045C26.4857 -0.000979701 27.7186 -0.000976562 28.9515 -0.000976562Z" fill="#009EE3"/>
                     <path d="M52.5819 59.9999C51.5545 59.7944 51.1435 59.178 50.5271 58.3561C46.0065 53.4246 41.2805 48.2876 36.76 43.3561C34.9106 41.5067 33.2668 39.452 31.4175 37.6026C31.212 37.3972 31.212 37.3972 31.0065 37.3972C27.1024 38.63 23.4038 38.2191 19.9106 35.5479C17.2394 33.4931 15.801 30.6163 15.3901 27.3287C15.1846 24.6574 15.801 22.1917 17.2394 19.9314C17.2394 19.9314 17.4449 19.7259 17.4449 19.5204C17.8558 19.9314 18.0613 20.3424 18.4723 20.5478C20.3216 22.3972 22.3764 24.452 24.2257 26.3013C24.6367 26.7122 24.6367 27.3287 24.2257 27.7396C23.8147 28.1506 23.1983 28.1506 22.7873 27.5342C21.1435 25.8903 19.7052 24.452 18.0613 22.8081L17.8558 22.6026C17.6504 23.2191 17.4449 23.8355 17.4449 24.452C16.623 29.3835 19.7052 34.315 24.6367 35.5479C26.8969 36.1643 29.1572 35.9588 31.212 34.9314C31.4175 34.7259 31.623 34.7259 31.8284 34.9314C34.0887 37.3972 36.349 39.6574 38.4038 42.1232C42.5134 46.6437 46.623 50.9588 50.5271 55.4794C51.1435 56.0958 51.76 56.7122 52.3764 57.3287C52.7873 57.7396 53.1983 57.7396 53.6093 57.3287C55.0476 55.8903 56.486 54.452 57.9243 53.0136C58.3353 52.6026 58.3353 52.1917 57.9243 51.7807C53.4038 47.6711 48.8832 43.3561 44.3627 39.2465C41.486 36.5752 38.6093 33.904 35.7326 31.2328C35.5271 31.0273 35.5271 31.0273 35.7326 30.8218C37.9928 26.9177 37.3764 22.3972 34.4997 19.315C31.4175 16.0273 26.8969 15.4109 23.1983 17.0547L23.4038 17.2602C25.0476 18.904 26.6915 20.5479 28.3353 22.1917C28.5408 22.3972 28.7463 22.8081 28.7463 23.0136C28.7463 23.4246 28.5408 23.63 28.1298 23.8355C27.7189 24.041 27.5134 23.8355 27.1024 23.63C26.486 23.0136 25.6641 22.1917 25.0476 21.5752C23.4038 19.9314 21.9654 18.493 20.3216 16.8492L20.1161 16.6437C20.7326 16.2328 21.349 15.8218 22.1709 15.4109C28.9517 11.9177 37.3764 15.8218 39.0202 23.4246C39.4312 25.6848 39.2257 28.1506 38.4038 30.2054C38.4038 30.4109 38.4038 30.6163 38.4038 30.6163C43.3353 35.1369 48.0613 39.452 52.9928 43.9725C55.2531 46.0273 57.5134 48.0821 59.7737 50.1369C60.1846 50.5479 60.5956 51.1643 60.5956 51.7807C60.5956 51.9862 60.5956 52.3972 60.5956 52.6026C60.3901 53.2191 60.1846 53.8355 59.5682 54.2465C58.5408 55.2739 57.3079 56.5068 56.2805 57.5342C55.4586 58.3561 54.8421 59.178 53.8147 59.3835C53.1983 59.9999 52.9928 59.9999 52.5819 59.9999Z" fill="#009EE3"/>
                     <path d="M47.6477 46.2314C47.8531 46.4369 48.0586 46.4369 48.2641 46.6424C50.1134 48.4917 51.9627 50.341 53.812 52.1904C54.223 52.6013 54.223 53.2177 53.812 53.6287C53.4011 54.0397 52.7847 54.0397 52.3737 53.6287C50.5244 51.7794 48.6751 49.9301 46.8257 48.0808C46.6203 47.8753 46.4148 47.4643 46.6203 47.0534C46.8257 46.6424 47.2367 46.2314 47.6477 46.2314Z" fill="#009EE3"/>
                  </svg>
                  <h3 class="dref-text">Customization </h3>
                  <p class="short_dis">Adjustable settings to match specific filter sizes and production needs.</p>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M29.9038 38.1111C25.4087 38.1111 21.6953 34.3978 21.6953 29.9027C21.6953 25.4076 25.4087 21.8896 29.9038 21.8896C34.3989 21.8896 37.9168 25.603 37.9168 29.9027C37.9168 34.3978 34.3989 38.1111 29.9038 38.1111Z"
                        fill="#009EE3" />
                     <path
                        d="M33.4219 9.57715C42.6075 10.9452 49.2525 18.9583 50.0343 26.385C49.2525 26.385 48.6662 26.385 48.0799 26.385C47.8844 26.385 47.689 25.9941 47.689 25.7986C46.5163 20.9127 43.7802 17.1993 39.6759 14.6586C37.917 13.4859 36.158 12.7042 34.2036 12.3133C33.8128 12.1179 33.4219 11.9224 33.6173 11.5315C33.4219 10.7498 33.4219 10.1635 33.4219 9.57715Z"
                        fill="#009EE3" />
                     <path
                        d="M26.3858 50.2286C18.7637 49.2514 10.9461 42.411 9.77344 33.6162C10.5552 33.6162 11.1415 33.6162 11.9233 33.6162C12.1187 33.6162 12.3142 34.0071 12.3142 34.2025C13.8777 40.2612 17.3956 44.3654 23.0633 46.9061C24.0405 47.297 25.0177 47.4924 25.9949 47.8833C26.3858 48.0788 26.5813 48.0787 26.5813 48.4696C26.1904 49.0559 26.3858 49.6423 26.3858 50.2286Z"
                        fill="#009EE3" />
                     <path
                        d="M33.4219 50.2277C33.4219 49.4459 33.4219 48.8596 33.4219 48.2733C33.4219 48.0778 33.8128 47.8824 34.0082 47.6869C37.5261 46.7097 40.6531 45.1462 42.9984 42.4101C45.1483 40.0648 46.7118 37.3286 47.4935 34.2016C47.689 33.6153 47.8844 33.4198 48.2753 33.6153C48.6662 33.6153 49.2525 33.6153 49.6434 33.6153C49.6434 33.6153 49.6434 33.6153 49.8388 33.6153C49.2525 40.8466 42.4121 48.8596 33.4219 50.2277Z"
                        fill="#009EE3" />
                     <path
                        d="M26.1866 9.57715C26.1866 10.3589 26.1866 10.9452 26.1866 11.5315C26.1866 11.727 25.7957 11.9224 25.6003 11.9224C21.8869 12.8996 18.7599 14.6586 16.2192 17.5902C14.2648 19.9355 12.8967 22.4762 12.1149 25.4078C11.9195 26.1895 11.7241 26.385 11.1377 26.385C10.5514 26.385 10.1605 26.385 9.57422 26.385C10.5514 18.9583 17.3918 10.9452 26.1866 9.57715Z"
                        fill="#009EE3" />
                     <path
                        d="M9.38111 31.0757C6.84039 31.0757 4.29967 31.0757 1.56352 31.0757C0.586319 31.0757 0 30.6849 0 29.9031C0 29.1213 0.586319 28.7305 1.56352 28.7305C6.64495 28.7305 11.7264 28.7305 17.0033 28.7305C17.1987 28.7305 17.1987 28.7305 17.3941 28.7305C18.1759 28.7305 18.7622 29.3168 18.7622 29.9031C18.7622 30.4894 18.1759 31.0757 17.3941 31.0757C14.658 31.0757 11.9218 31.0757 9.38111 31.0757Z"
                        fill="#009EE3" />
                     <path
                        d="M31.0718 9.38111C31.0718 11.9218 31.0718 14.4625 31.0718 17.0033C31.0718 17.1987 31.0718 17.3941 31.0718 17.785C30.8764 18.3713 30.4855 18.7622 29.8992 18.7622C29.3129 18.7622 28.922 18.3713 28.7266 17.785C28.7266 17.5896 28.7266 17.3941 28.7266 17.0033C28.7266 11.9218 28.7266 6.84039 28.7266 1.75896C28.7266 1.56352 28.7266 1.36808 28.7266 1.17264C28.7266 0.390877 29.3129 0 29.8992 0C30.4855 0 31.0718 0.390877 31.0718 1.17264C31.0718 1.36808 31.0718 1.75896 31.0718 1.9544C31.0718 4.49511 31.0718 7.03583 31.0718 9.38111Z"
                        fill="#009EE3" />
                     <path
                        d="M50.4241 31.0757C47.6879 31.0757 45.1472 31.0757 42.411 31.0757C41.6293 31.0757 41.043 30.4894 41.043 29.9031C41.043 29.3168 41.6293 28.7305 42.411 28.7305C42.6065 28.7305 42.8019 28.7305 42.8019 28.7305C47.4925 28.7305 51.9876 28.7305 56.6782 28.7305C57.2645 28.7305 57.6553 28.7305 58.2417 28.7305C59.0234 28.7305 59.6097 29.3168 59.6097 29.9031C59.6097 30.6849 59.0234 31.0757 58.2417 31.0757C55.7009 31.0757 53.1602 31.0757 50.4241 31.0757Z"
                        fill="#009EE3" />
                     <path
                        d="M31.0718 50.6184C31.0718 53.1591 31.0718 55.6999 31.0718 58.436C31.0718 59.4132 30.681 59.9995 29.8992 59.9995C29.1174 59.9995 28.7266 59.4132 28.7266 58.436C28.7266 53.1591 28.7266 48.0777 28.7266 42.8008C28.7266 41.8236 29.1174 41.2373 29.8992 41.2373C30.681 41.2373 31.0718 41.8236 31.0718 42.8008C31.0718 45.3415 31.0718 47.8823 31.0718 50.6184Z"
                        fill="#009EE3" />
                  </svg>
                  <h3 class="dref-text">Precision</h3>
                  <p class="short_dis">Advanced timing gears deliver uniform and accurate winding patterns.</p>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 pb-3">
                  <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M39.5196 18.2051C39.5196 23.5629 35.1539 28.127 29.5977 28.127C24.2399 28.127 19.8742 23.5629 19.6758 18.2051C19.6758 13.0457 23.843 8.48164 29.5977 8.2832C34.9555 8.2832 39.5196 12.6488 39.5196 18.2051ZM29.5977 26.5395C34.1618 26.5395 37.9321 22.7692 37.9321 18.2051C37.9321 13.641 34.1618 9.87071 29.5977 9.87071C25.0336 9.87071 21.2633 13.641 21.2633 18.2051C21.0648 22.7692 24.8352 26.5395 29.5977 26.5395Z" fill="#009EE3"/>
                     <path d="M28.6046 20.3864C30.3906 18.402 31.9781 16.4177 33.5656 14.6317L33.764 14.4333C34.1609 14.0364 34.5578 14.0364 34.9546 14.2348C35.3515 14.6317 35.3515 15.0286 34.9546 15.4255C33.9625 16.6161 32.9703 17.6083 31.9781 18.7989C31.1843 19.7911 30.1921 20.7833 29.3984 21.7755C28.8031 22.3708 28.6046 22.3708 28.0093 21.9739C26.8187 20.9817 25.6281 20.188 24.4374 19.1958C23.8421 18.7989 23.8421 18.402 24.0406 18.0052C24.239 17.6083 24.8343 17.6083 25.2312 18.0052C26.4218 18.7989 27.414 19.5927 28.6046 20.3864Z" fill="#009EE3"/>
                     <path d="M41.5063 51.9391C41.1095 53.9234 40.1173 54.7172 38.1329 55.1141C37.9344 55.1141 37.736 55.511 37.736 55.7094C37.3391 56.7016 36.7438 57.4953 35.7516 57.8922C35.1563 58.0906 34.3626 57.8922 33.7672 57.8922C33.7672 58.0906 33.5688 58.2891 33.3704 58.4875C32.7751 59.6781 31.5844 60.2735 30.3938 59.8766C29.0047 59.4797 28.0125 58.6859 27.0204 57.8922C26.6235 57.6938 26.425 57.4953 25.8297 57.6938C24.8375 58.0907 23.4485 57.6938 22.8532 56.7016C22.6547 56.3047 22.4563 56.3047 22.0594 56.5031C20.6703 56.9 19.4797 56.3047 18.8844 55.1141C18.686 54.9156 18.4875 54.7172 18.2891 54.7172C16.7016 54.7172 15.9078 54.1219 15.3125 52.5344C15.3125 52.3359 14.9156 52.1375 14.9156 52.1375C12.7328 51.9391 11.7406 49.9547 12.7328 47.9703C13.3281 46.7797 13.3281 46.7797 12.3359 45.9859C11.5422 45.3906 10.7484 44.9937 9.95468 44.9937C8.96249 44.7953 8.16874 44.3984 7.17655 44.0015C6.97811 44.0015 6.58124 43.8031 6.3828 44.0015C5.58905 44.2 4.79529 44.0015 4.19998 43.6047C3.40623 42.8109 2.41404 42.2156 1.62029 41.4218C0.628095 40.6281 0.429657 39.239 1.42185 38.2468C3.60467 35.4687 5.78748 32.889 7.9703 30.1109C9.35937 28.3249 10.7484 26.7374 12.1375 24.9515C12.3359 24.7531 12.3359 24.5546 12.3359 24.5546C12.1375 23.5624 12.3359 22.5702 12.9313 21.7765C13.3281 20.7843 13.3281 19.9905 12.7328 19.1968C12.3359 18.7999 12.1375 18.403 11.9391 18.0062C11.3438 17.014 11.5422 16.0218 12.3359 15.228C12.5344 15.0296 12.7328 14.6327 13.1297 14.4343C14.3203 13.6405 14.5188 12.4499 14.3203 11.0608C14.1219 10.6639 14.1219 10.0686 14.3203 9.67176C14.5188 8.67957 14.9156 8.08426 15.9078 7.68738C16.5031 7.48894 17.0985 7.09206 17.8922 6.89362C18.4875 6.69519 18.8844 6.29831 19.0828 5.703C19.2813 5.10768 19.4797 4.51237 19.6781 3.91705C20.2735 2.72643 21.0672 2.1311 22.4563 2.32954C23.0516 2.32954 23.6469 2.32956 24.2422 2.52799C25.036 2.72643 25.4329 2.32955 26.0282 1.93267C26.425 1.5358 26.8219 1.13892 27.2188 0.742048C28.211 -0.0517046 29.2032 -0.250152 30.1954 0.345162C30.7907 0.5436 31.1876 0.940477 31.7829 1.33735C32.3782 1.73423 32.7751 1.73424 33.3704 1.5358C33.9657 1.33736 34.3626 1.13892 34.9579 0.940483C36.3469 0.543606 37.3391 0.742044 38.1329 1.93267C38.3313 2.13111 38.5298 2.32955 38.5298 2.72643C39.1251 3.91706 40.1173 4.51237 41.3079 4.51237C41.7048 4.51237 41.9032 4.51237 42.3001 4.71081C43.6892 4.90925 44.4829 5.90143 44.6813 7.29049C44.6813 7.88581 44.6813 8.48113 44.8798 9.07644C45.0782 9.47332 45.2767 9.87019 45.6735 10.2671C46.0704 10.6639 46.6657 11.0608 47.261 11.2593C48.4517 12.053 48.6501 13.0452 48.2532 14.4343C48.0548 15.0296 47.8564 15.6249 47.6579 16.0218C47.4595 16.6171 47.4595 17.2124 47.8564 17.6093C48.2532 18.2046 48.4517 18.6015 48.8485 19.1968C49.4439 20.3874 49.4439 21.1812 48.4517 22.1733C48.0548 22.7687 47.4595 23.1655 47.0626 23.5624C50.2376 27.5312 53.4126 31.4999 56.5876 35.4687C57.3814 36.4609 58.1751 37.4531 58.9689 38.4453C59.9611 39.8343 59.9611 41.025 58.572 42.0172C57.7783 42.6125 56.9845 43.4062 56.1908 44.0015C55.397 44.5968 54.4048 44.7953 53.4126 44.2C53.2142 44.0015 52.8173 44.0015 52.6189 44.2C51.4282 44.5969 50.436 44.9937 49.2454 45.3906C49.047 45.3906 48.8485 45.5891 48.6501 45.7875C47.8564 46.3828 46.8642 46.9781 46.0704 47.5734C45.872 47.5734 45.872 47.9703 45.872 47.9703C45.4751 50.1531 44.2845 51.5422 41.5063 51.9391ZM18.2891 29.1187C19.8766 29.714 21.2657 30.3093 22.6547 30.9046C24.0438 31.5 25.4329 31.6984 26.8219 30.7062C27.0204 30.7062 27.2188 30.5077 27.4172 30.5077C29.0047 29.9124 30.5922 29.5156 32.3782 29.714C34.1641 29.9124 35.9501 30.1109 37.736 29.5155C38.7282 29.3171 39.7204 28.9202 40.7126 28.7218C40.1173 27.1343 40.3157 26.3406 41.5063 25.3484C42.8954 24.1577 44.2845 23.364 45.2767 21.7765C45.6735 21.3796 46.0704 20.9827 46.4673 20.5859C46.8642 20.189 46.8642 19.5937 46.6657 19.1968C46.2688 18.7999 46.0704 18.2046 45.6735 17.8077C45.0782 17.014 45.0782 16.0218 45.2767 15.0296C45.4751 14.6327 45.6735 14.0374 45.872 13.6405C46.2688 12.6483 46.0704 12.4499 45.2767 11.8546C44.8798 11.4577 44.2845 11.2593 43.8876 10.8624C43.0938 10.2671 42.697 9.47332 42.4985 8.48113C42.4985 8.08426 42.4985 7.48894 42.3001 7.09206C42.1016 5.90143 41.9032 5.703 40.7126 5.50456C40.3157 5.50456 39.9188 5.50455 39.7204 5.30611C38.3313 5.10768 37.3391 4.71081 36.7438 3.52018C36.5454 3.12331 36.3469 2.72643 36.1485 2.52799C35.5532 1.73424 35.3548 1.5358 34.3626 1.93267C33.9657 2.13111 33.3704 2.32956 32.9735 2.52799C31.9813 2.92487 30.9891 2.72642 29.9969 2.13111C29.6001 1.73423 29.0047 1.53579 28.6079 1.13892C28.211 0.742041 27.6157 0.940477 27.2188 1.33735C26.8219 1.73423 26.425 1.93267 26.2266 2.32954C25.4329 3.32173 24.4407 3.71862 23.25 3.52018C22.8532 3.52018 22.4563 3.32173 22.0594 3.32173C21.0672 3.1233 20.6703 3.32173 20.2735 4.31392C20.075 4.7108 19.8766 5.30612 19.8766 5.703C19.4797 6.89363 18.686 7.48894 17.6938 7.88581C17.0985 8.08425 16.5031 8.2827 15.9078 8.48113C15.3125 8.67957 15.1141 9.07645 15.1141 9.67176C15.1141 10.0686 15.1141 10.2671 15.1141 10.664C15.5109 12.2515 15.1141 13.6405 13.725 14.8311C12.3359 16.0218 12.3359 16.2202 13.3281 17.8077C13.3281 18.0062 13.5266 18.0061 13.5266 18.2046C14.3203 19.3952 14.5188 20.5858 13.9234 21.7765C13.725 22.1734 13.725 22.5702 13.5266 22.7687C14.3203 22.9671 15.1141 23.1655 15.7094 23.5624C16.7016 24.1577 17.4953 24.9515 18.2891 25.7452C19.2813 26.7374 19.4797 27.7296 18.686 28.9203C18.4875 28.9203 18.4875 28.9202 18.2891 29.1187ZM13.725 45.589C13.9234 45.3906 13.9234 45.3906 13.9234 45.1922C14.5188 44.2 15.3125 43.6047 16.5031 43.8031C17.6938 44.0015 18.4875 44.5969 18.8844 45.7875C18.8844 45.9859 19.2813 46.1844 19.4797 46.1844C20.4719 46.3828 21.2657 46.7797 21.861 47.7719C21.861 47.9703 22.0594 48.1687 22.2578 47.9703C23.4485 47.7719 24.4407 48.3672 25.2344 49.3594C25.4329 49.3594 25.4329 49.3594 25.4329 49.3594C26.6235 48.9625 27.8141 49.1609 28.6079 50.1531C29.2032 50.9469 29.4016 52.3359 28.6079 53.3281C28.0125 54.1219 27.6157 54.9156 27.0204 55.9078C28.0125 56.5031 29.0047 57.0985 29.9969 57.6938C30.1954 57.6938 30.3938 57.8922 30.3938 57.8922C30.9891 58.0906 31.386 57.8922 31.7829 57.2969C31.9813 56.7016 31.9813 56.3047 31.386 56.1063C30.7907 55.7094 30.1954 55.3125 29.6001 54.9156C29.2032 54.7172 29.2032 54.3203 29.6001 53.9234C29.7985 53.5266 30.1954 53.5266 30.5922 53.725C30.7907 53.725 30.9891 53.9234 30.9891 54.1219C31.7829 54.7172 32.5766 55.3125 33.3704 55.9078C34.561 56.7016 35.5532 56.3047 35.9501 55.1141C36.1485 54.7172 35.9501 54.5187 35.7516 54.3203C34.561 53.5266 33.5688 52.7328 32.3782 51.9391C31.7829 51.5422 31.7829 51.1453 31.9813 50.7484C32.3782 50.3516 32.7751 50.3516 33.1719 50.7484C34.1641 51.5422 35.3548 52.3359 36.3469 53.1297C36.7438 53.3281 36.9423 53.5266 37.3391 53.5266C38.1329 53.725 39.1251 53.3281 39.522 52.5344C39.9188 51.7406 39.7204 51.3438 38.7282 50.7484C37.5376 49.9547 36.3469 49.1609 35.3548 48.1687C35.1563 47.9703 34.9579 47.5734 34.9579 47.375C34.9579 47.1765 35.3548 46.7797 35.5532 46.7797C35.7516 46.7797 36.1485 46.9781 36.3469 47.1766C37.736 48.1687 38.9266 49.1609 40.3157 50.1531C41.1095 50.7484 42.3001 50.55 42.8954 49.7563C43.4907 48.9625 43.2923 47.7719 42.4985 47.1766C40.911 45.9859 39.522 44.7953 37.9344 43.6047C35.9501 42.2156 34.1641 40.6281 31.7829 39.8344C29.7985 39.0406 27.8141 39.0406 26.0282 40.2312C25.4329 40.6281 24.6391 41.025 24.0438 41.4218C23.25 41.8187 22.4563 42.0172 21.4641 41.8187C20.2735 41.6203 19.2813 41.2234 19.0828 40.0328C18.686 38.8421 18.8844 37.85 19.8766 36.8578C20.2735 36.4609 20.6703 36.064 20.8688 35.6671C21.6625 34.6749 22.2578 33.8812 23.0516 32.889C21.0672 32.0953 19.2813 31.3015 17.2969 30.7062C17.0985 30.7062 16.9 30.9046 16.7016 31.1031C14.1219 34.2781 11.7406 37.2546 9.16093 40.4296C8.56562 41.2234 7.9703 42.0172 7.17655 43.0093C7.9703 43.4062 8.76405 43.8031 9.55781 43.8031C10.7484 44.0015 11.7406 44.3984 12.5344 45.1922C13.1297 44.9937 13.3281 45.3906 13.725 45.589ZM51.2298 42.2156C51.0314 42.0172 51.0314 41.8187 50.8329 41.6203C47.8564 38.0484 45.0782 34.2781 42.1016 30.7062C41.7048 30.3093 41.3079 30.1109 40.911 30.3093C37.9344 31.4999 34.9579 31.6984 31.7829 31.3015C31.386 31.3015 30.7907 31.3015 30.3938 31.3015C28.6079 31.4999 26.8219 32.4921 25.2344 33.2859C24.8375 33.4843 24.6391 33.6828 24.4407 34.0796C23.25 35.4687 22.2578 36.6593 21.2657 38.0484C20.6703 38.8421 20.8688 39.8343 21.861 40.0328C22.6547 40.2312 23.4485 40.2312 24.0438 39.8344C24.8375 39.4375 25.8297 38.8421 26.6235 38.4453C28.211 37.4531 29.9969 37.4531 31.7829 37.85C34.1641 38.4453 36.3469 39.8343 38.3313 41.4218C40.1173 42.8109 41.9032 44.2 43.6892 45.589C44.086 45.9859 44.4829 45.9859 44.8798 45.7875C45.6735 45.1922 46.4673 44.7953 47.261 44.2C47.6579 44.0015 48.0548 43.6046 48.4517 43.4062C49.047 42.8109 50.0392 42.6125 51.2298 42.2156ZM17.4953 27.3327C17.2969 27.1343 17.2969 26.9359 17.0985 26.7374C16.3047 26.1421 15.5109 25.3484 14.7172 24.753C14.1219 24.1577 13.725 24.3562 13.3281 24.9515C9.55781 29.5156 5.98592 34.0796 2.2156 38.6437C1.62029 39.239 1.81872 39.6359 2.41404 40.2312C3.20779 40.8265 3.8031 41.4218 4.59686 42.0172C5.39061 42.6125 5.58905 42.6125 6.18436 41.8187C9.95468 37.2547 13.5266 32.6906 17.2969 27.9281C17.2969 27.9281 17.4953 27.7296 17.4953 27.3327ZM57.3814 39.4375C57.1829 39.239 57.1829 38.8421 56.9845 38.6437C55.7939 37.2546 54.8017 35.8656 53.6111 34.4765C51.0314 31.3015 48.4517 28.1265 46.0704 24.9515C45.4751 24.3562 45.2767 24.3562 44.6813 24.753C43.8876 25.3484 43.0938 25.9437 42.3001 26.539C41.7048 27.1343 41.7048 27.3327 42.1016 28.1265C43.6892 30.1109 45.2767 32.0952 46.8642 34.0796C48.8485 36.6593 51.0314 39.239 53.0157 41.8187C53.4126 42.414 53.8095 42.414 54.4048 42.0172C55.1986 41.4218 56.1907 40.6281 56.9845 40.0328C57.1829 40.0328 57.1829 39.8343 57.3814 39.4375ZM16.3047 51.7406C16.3047 52.5344 16.7016 52.7328 17.0985 52.9312C17.6938 53.1297 18.0906 52.9312 18.2891 52.5344C18.8844 51.5422 19.6781 50.3516 20.2735 49.1609C20.6703 48.3672 20.4719 47.9703 19.6781 47.5734C19.0828 47.375 18.4875 47.375 18.0906 48.1687C17.4953 49.1609 16.9 50.1531 16.5031 50.9469C16.5031 51.3437 16.5031 51.7406 16.3047 51.7406ZM17.4953 46.5812C17.4953 45.7875 17.0985 45.3906 16.5031 45.3906C15.9078 45.1922 15.5109 45.3906 15.3125 45.9859C14.7172 46.9781 14.1219 47.9703 13.725 48.7641C13.3281 49.5578 13.3281 50.1531 14.1219 50.55C14.7172 50.9469 15.3125 50.7484 15.9078 49.9547C16.5031 49.1609 16.9 48.1687 17.4953 47.1766C17.2969 46.9781 17.4953 46.5812 17.4953 46.5812ZM23.8453 50.9469C23.8453 50.1531 23.4485 49.9547 22.8532 49.7563C22.2578 49.5578 21.861 49.7562 21.6625 50.3515C21.0672 51.3437 20.4719 52.3359 20.075 53.1297C19.6781 53.9234 19.6781 54.5187 20.4719 54.9156C21.0672 55.3125 21.861 54.9156 22.2578 54.3203C22.6547 53.5266 23.25 52.7328 23.6469 51.9391C23.6469 51.3437 23.8453 51.1453 23.8453 50.9469ZM24.8375 56.3047C25.036 56.1062 25.4329 56.1063 25.6313 55.7094C26.2266 54.7172 26.8219 53.5266 27.4172 52.5344C27.8141 51.9391 27.6157 51.3437 27.0204 50.9469C26.425 50.55 25.8297 50.7484 25.4329 51.3437C24.8375 52.3359 24.2422 53.5266 23.6469 54.5188C23.25 55.3125 23.8453 56.3047 24.8375 56.3047Z" fill="#009EE3"/>
                  </svg>
                  <h3 class="dref-text">Reliability </h3>
                  <p class="short_dis">Heavy-duty build with low-maintenance operation ensures long-lasting performance.
                  </p>
               </div>
            </div>
         </div>
         <!-- <div class="col-md-7">-->
         <!--        <div><img src="{{ asset('public/front/images/WoundFilter_table.png') }}" alt="" class="img-fluid" ></div>-->
         <!--</div>-->
         <div class="col-md-7 machine-table">
            <h3 class="text-start inner-head mb-4">TECHNICAL SPECIFICATIONS</h3>
            <table class="table table-striped ">
               <tbody>
                  <tr>
                     <th scope="row">Machine Name</th>
                     <td>String Wound Filter Machine</td>
                  </tr>
                  <tr>
                     <th scope="row">Drive and Motor</th>
                     <td>Variable AC frequency drive and motor</td>
                  </tr>
                  <tr>
                     <th scope="row">Power</th>
                     <td >220V/50HZ, Single Phase</td>
                  </tr>
                  <tr>
                     <th scope="row">Winding Core Material</th>
                     <td >Polypropylene, Stainless Steel, or Tinned Steel</td>
                  </tr>
                  <tr>
                     <th scope="row">Winding Tube Diameter</th>
                     <td >28mm</td>
                  </tr>
                  <tr>
                     <th scope="row">Winding Lengths Available</th>
                     <td >222, 235, 250, 254, 500, 508, 750, 762, 1000, 1016, 1270, 1778 mm</td>
                  </tr>
                  <tr>
                     <th scope="row">Automatic Stop Sensor</th>
                     <td >Activates at desired cartridge diameter</td>
                  </tr>
                  <tr>
                     <th scope="row">Winding Outer Diameter (OD)</th>
                     <td >45 mm 200 mm</td>
                  </tr>
                  <tr>
                     <th scope="row">Pattern and Precision</th>
                     <td >Achieved through timing gears</td>
                  </tr>
                  <tr>
                     <th scope="row">Maintenance</th>
                     <td >Designed for minimal maintenance</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <div class="mt-4">
          <h2 class="text-start inner-head mb-3">Filter Cartridge Making Machine Manufacturer</h2>
          <p>With over <b>3 decades of expertise, mmp filter</b> is a trusted manufacturer of industrial filter cartridges and advanced cartridge production machines. To meet the growing global demand in countries like the <b>USA, UK, UAE, Australia,</b> and more, mmp has introduced the <b>SMARTWIND 360° (20” Cartridge Machine)</b> designed for high-speed and precision output. This innovative machine features a <b>3-spindle system</b> that produces <b>three 20-inch filter cartridges simultaneously,</b> ensuring faster production, micron-level accuracy, and consistent winding quality. It is an ideal solution for industries looking to improve productivity, reduce manufacturing time, and maintain superior filtration performance.  </p>
          
          <h3 class="custom_pera">Operation of the SMARTWIND 360° 3-Spindle Machine</h3>
          <p>The <b>SMARTWIND 360°</b> offers complete flexibility to design your own cartridge winding patterns, multi-layer structures, and micron ratings, making it an ideal solution for the <b>modern filtration industry</b> focused on quality, speed, and performance. </p>
          <b>SMARTWIND Machine Key Advantages </b>
          <ul class="dref-spinning mt-2">
              <li>Fully Automated Production Process</li>
              <li>Micron Precision Range: 1–100 µm</li>
              <li> Cartridge Length Support: 10" to 40" </li>
              <li>Works with PP Yarn and Cotton Yarn </li>
              <li>High-Speed Spindles for Maximum Production Capacity</li>
              <li>Energy-Saving Operation with Minimal Maintenance </li>
          </ul>
      </div>
      
      <!--<div class="row">-->
      <!--    <h2 class="text-start inner-head mb-3">3rd Generation: Smartwind 360 Fully Automatic Multi-Layer Winding-->
      <!--        Machine</h2>-->
      <!--<h2 class="text-start inner-head mb-3">Smartwind 360 Fully Automatic Multi-Layer Winding-->
      <!--    Machine</h2>-->
      <!--    <p>With a commitment to continuous innovation, <strong>mmp Filtration</strong> launched the Smartwind 360, a next-generation, fully automatic, multi-layer wound filter making machine.</p>-->
      <!--    <div class="col-md-5 mb-4">-->
      <!--        <div class="product-detail">-->
      <!--            <div class="manufacturing">-->
      <!--                    <div><img src="{{ asset('public/front/images/Smartwind-360-Fully-Automatic-Multi-Layer-Winding-Machine.webp') }}" alt="Wound Filter"-->
      <!--                    class="img-fluid"></div>-->
      <!--<div>-->
      <!--   <img src="{{ asset('public/front/images/3rd_3spindle_Machine.jpg') }}" alt="Wound Filter" class="img-fluid" >-->
      <!--</div>-->
      <!--<div>-->
      <!--   <img src="{{ asset('public/front/images/3rd_2spindle_Machine.jpg') }}" alt="Wound Filter" class="img-fluid" >-->
      <!--</div>-->
      <!--            </div>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--    <div class="col-md-7 mb-4">-->
      <!--        <h2 class="dref-text mb-3">Key Features </h2>-->
      <!--        <ul class="dref-spinning" style="padding-left:2rem!important;">-->
      <!--            <li><strong>360 Multi-Layer Winding:</strong> Yarn winding from all angles, providing complete-->
      <!--                coverage and optimized layering.</li>-->
      <!--            <li><strong>Advanced Programmability:</strong> Precise rhombus pattern definition in axial and-->
      <!--                circumferential directions.</li>-->
      <!--            <li><strong>Custom Micron Control:</strong> Repeatable micron ratings through programmable yarn-->
      <!--                spacing and cartridge length.</li>-->
      <!--            <li><strong> Structural & Functional Benefits:</strong>-->
      <!--                <ul>-->
      <!--                    <li>Enhanced filtration depth through multiple layers.</li>-->
      <!--                    <li>Improved mechanical strength.</li>-->
      <!--                    <li>Superior bonding between layers.</li>-->
      <!--                </ul>-->
      <!--            </li>-->
      <!--        </ul>-->
      <!--    </div>-->
      <!--    <h2 class="text-start inner-head my-3">Advanced Wound Filter Production Machine for Cartridge Manufacturing</h2>-->
      <!--    <p><b>mmp</b> is a leading wound filter cartridge machine manufacturer, supplying worldwide. From our first electromechanical systems to the SMARTWIND 360° multi-layer platform, <b>mmp</b> has consistently advanced winding technology to meet evolving filtration demands. Our commitment to precision, performance, and efficiency positions us as a pioneer in programmable, automated filter cartridge solutions. We offer wound filter cartridge machines globally, including the USA, UK, UAE, Italy, Russia, Canada, Australia, and more.</p>-->
      <!--</div>-->
   </div>
</section>
@endif
<script>
   document.addEventListener("DOMContentLoaded", function () {
   
       const banner_btn = document.getElementById("banner_btn");
       const enquiryPopup = document.getElementById("enqpoup");
   
       if (!banner_btn || !whatsappPopup) return;
   
       // Open popup from header button
       banner_btn.addEventListener("click", function (e) {
        
           e.preventDefault();
           enquiryPopup.classList.add("active");
       });
   
   });
</script>
@include('layouts.frontfooter')