@include('layouts.frontheader')

    <!-- about-banner -->
    <section class="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1>About Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->

    <!-- banner-bottom -->
    <section class="green-world">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-7">
                    <!--<div class="green-world-content">-->
                    <!--    <p class="mb-3"><span class="blue-add">Quality Water</span> & <span class="green-add">Air Filtration Solutions</span></p>-->
                    <!--    <img src="{{ asset('public/front/images/about-content.png') }}" alt="About Us" class="img-fluid mb-3">-->
                    <!--</div>-->
                    <div class="sub-head-about d-flex">
                        <img src="{{ asset('public/front/images/about-water-icon.png') }}" alt="about water icon" class="water-icon img-fluid">
                        <h3 class="custom_pera">Filtration For<br/> Sustainable Future</h3>
                    </div>
                    <div class="pb-4">
                         <img src="{{ asset('public/front/images/about-left-img.png') }}" alt="about Left Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <!--<div class="about-content d-flex flex-column align-items-start">-->
                    <!--    <img src="{{ asset('public/front/images/about-water-icon.png') }}" alt="about water icon" class="img-fluid mb-4">-->
                    <!--   <b class="mb-4">Filtration For Sustainable Future</b>-->
                    <!--    <p><strong>mmp</strong> is driven by the purpose of improving the quality of life by innovating sustainable cleaning technologies for air and water. Our manufacturing operations are spread across India, with facilities in Kolkata, Mumbai, Chennai, and Ahmedabad.<br><br>-->

                    <!--        At our Kolkata plant, we have developed expertise in manufacturing Polypropylene String Wound Filters, Melt Blown Filters, and Dust Collector Bags for industrial air filtration. In Mumbai, we produce a wide range of air filtration products. Ahmedabad serves as our manufacturing hub for Polypropylene String Wound Filters, Polypropylene Melt Blown Filters, and DREF Friction Spun Yarn.<br><br>-->
                            
                    <!--        Our company holds the distinction of being the first in India to achieve Melt Blown Filter Cartridge production. Additionally, we are proud to have obtained NSF Certification for our manufactured Melt Blown filters.<br><br>-->
                            
                    <!--    Our expertise extends from designing to engineering and manufacturing global standard filtration solutions. With a well-knitted supply chain network, we have the edge to distribute our products anywhere in India. Additionally, we have marketing offices in Kolkata, Mumbai, Chennai, and Ahmedabad to provide end-to-end support to our customers</p>-->
                    <!--</div>-->
                    <p><strong>mmp</strong> is driven by the purpose of improving the quality of life by innovating sustainable cleaning technologies for air and water. Our manufacturing operations are spread across India, with facilities in Kolkata, Mumbai, Chennai, and Ahmedabad.</p>
                    <p>At our Kolkata plant, we have developed expertise in manufacturing Polypropylene String Wound Filters, Melt Blown Filters, and Dust Collector Bags for industrial air filtration. In Mumbai, we produce a wide range of air filtration products. Ahmedabad serves as our manufacturing hub for Polypropylene String Wound Filters, Polypropylene Melt Blown Filters, and DREF Friction Spun Yarn.</p>
                    <p>Our company holds the distinction of being the first in India to achieve Melt Blown Filter Cartridge production. Additionally, we are proud to have obtained <strong>NSF Certification</strong> for our manufactured Melt Blown filters.</p>
                </div>
            </div>
           
        </div>
         <div class="blue-bg-wrap">
                <p class="blue-pera">Our expertise extends from designing to engineering and manufacturing global standard filtration solutions. With a well-knitted supply chain network, we have the edge to distribute our products anywhere in India. Additionally, we have marketing offices in Kolkata, Mumbai, Chennai, and Ahmedabad to provide end-to-end support to our customers</p>
            </div>
    </section>
    <!-- banner-bottom-end -->

    <!-- location -->
    <section class="location">
         <!--<div class="brand-head">-->
         <!--     <div class="container">-->
         <!--       <h3 class="inner-head">Our Global Presence</h3>-->
         <!--     </div>-->
         <!-- </div>-->
            <img src="{{ asset('public/front/images/about_map.jpg') }}" alt="About Map" class="img-fluid">
    </section>
    <!-- location end -->

     <!-- our-brands -->
     <section class="our-brands">
        <div class="container">
          <div class="brand-head">
            <div class="row">
              <div class="col-md-12">
                <h3 class="inner-head">Our Patented Brands</h3>
              </div>
            </div>
          </div>
          <div class="brand-slider">
          @foreach($data['ourbrands'] as $brands)
          <div class="px-2 box-height">
            <img src="{{ asset('public/OurBrands/'.$brands->logo) }}" alt="{{$brands->name}}" class="img-fluid" />
          </div>
          @endforeach
          </div>
        </div>
      </section>
      <!-- our-brands end -->

      @include('layouts.frontfooter')