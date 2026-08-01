@include('layouts.frontheader')
<!-- banner -->
<style>
    .set-content p{
        color: #fff;
        margin-bottom: 30px;
    }
    
</style>
<!-- banner -->
<section class="contact-banner position-relative">
    <img src="{{ asset('public/front/images/Highflow_Pleated_Filter_Cartridge.jpg') }}" alt="Highflow Banner" class="img-fluid mobile-img" />
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/highflow-banner.jpg') }}" alt="Highflow Banner" class="img-fluid product-page-header" />
    <div class="contact-head product-contact-head">
      <h1>{{ $category->category_name}}</h1>
      <!--<nav aria-label="breadcrumb">-->
      <!--  <ol class="breadcrumb">-->
      <!--    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
      <!--    <li class="breadcrumb-item" aria-current="page">-->
      <!--    Products-->
      <!--    </li>-->
      <!--    <li class="breadcrumb-item active" aria-current="page">-->
      <!--    {{ $category->category_name}}-->
      <!--    </li>-->
      <!--  </ol>-->
      <!--</nav>-->
        <div class="row">
          <div class="col-md-9">
              <div class="set-content">
                    <p>Engineered for <b>Maximum Flow, High Dirt Holding,</b> and <b>Efficient Pleated Filtration.</b></p>
                    </div>
                    <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Enquire Now</p>
                      </button>
                    </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- banner end -->

<!-- filter-inner -->
<section class="filter-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-add">
                    <p>
                    High Flow Pleated Filter is renowned worldwide for efficient performance, featuring a multi-layered design, wide chemical compatibility, and robust construction for high dirt-holding capacity.
                    These systems ensure reliable and effective filtration for various applications. 
                    </p>
                   
                    <!--<p>-->
                    <!--   High Flow filter cartridges are used in a wide variety of applications where high flow rates and long Service life are primary requirements.-->
                    <!--</p>-->
                    <!--<div class="theme-btn justify-content-start ">-->
                    <!--  <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"-->
                    <!--    data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"-->
                    <!--        aria-hidden="true"></i></span>-->
                    <!--    <p>Enquire Now</p>-->
                    <!--  </button>-->
                    <!--</div>-->
                    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                  </div>
                </div>              
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="product-detail">
                    <div><img src="{{ asset('public/Product_Images/highflow-product.jpg') }}" alt="highflow Product" class="img-fluid" ></div>
                   </div>
            </div>
            <div class="col-md-7">
               <p>High Flow filter systems are successfully used around the world, is constructed with a high surface area melt-blown polypropylene media for low 
initial pressure drop, high dirt holding capacity, and high-efficiency performance.</p>
               <!--<p>MMP is the first manufacturer of wound polypropylene filter cartridge in india, and as on 2015, backward integrated, and started manufacturing the polypropylene yarn using the friction spinning technology.</p>-->
              <h2 class="dref-text">Features And Benefits</h2>
               <ul class="dref-spinning">
                <li> Multiple pleated layer construction, filtration configuration in-out</li>
                <li>High filtration area up to 9m2</li>
                <li>Wide range chemical compatibility</li>
                <li>  Nominally rated with retention ratings between High flow rate up to 113m3/hr (500GPM).  
 Inner core for high mechanical strength, outer cage to protect the pleated media, Robust outer cage.</li>
                <li>Wide chemical compatibility.</li>
                <li>End connections to fit all standard </li>
              
              </ul>
            </div>
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
    </div>
</section>
@include('layouts.frontfooter')
