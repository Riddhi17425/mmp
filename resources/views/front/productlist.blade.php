@include('layouts.frontheader')
<!-- banner -->
<style>
    .set-content p{
        color: #fff;
        margin-bottom: 30px;
    }
    
</style>

<section class="contact-banner position-relative">
    <img src="{{ asset('public/Category_Mobile_Images/'.$category->mobile_cat_image) }}" alt="{{ $category->alt}}" class="img-fluid mobile-img " />
  <div class="container-fluid p-0">
    <!--<img src="{{ asset('public/front/images/water-filter-bg.jpg') }}" alt="" class="img-fluid" />-->
        <img src="{{ asset('public/Category_Banner_Images/'.$category->banner_image) }}" alt="{{ $category->alt}}" class="img-fluid product-page-header" />

    <div class="contact-head product-contact-head">
        <!--<h1 style="margin-bottom: 10px;">{{ $category->category_name == 'Air Filters' ? 'Air Filter Cartridges' : $category->category_name }}</h1>-->
        <h1 style="margin-bottom: 10px;">
            @if($category->category_name == 'Air Filtration')
                Air Filter Cartridges
            @elseif($category->category_name == 'Water Filtration')
                Water Filter Cartridge
            @else
                {{ $category->category_name }}
            @endif
        </h1>
        <div class="set-content">
            @if($category->category_name == 'Air Filtration')
                <P><strong>mmp</strong> manufactures air filter cartridges, ensuring superior air quality, performance, and reliability for industrial filtration systems.</P>
            @elseif($category->category_name == 'Water Filtration')
               <P> Need water filter cartridges for water-related problems like hard water, heavy metals, chlorine, sediment, rust, dirt & impurities? <strong>mmp</strong> manufactures and supplies all types of NSF-certified replacement cartridges worldwide since 1994.
</P>
            @elseif($category->category_name == 'Filtration Yarn')
               <P>High-Performance Filtration Yarn Manufacturer Specialized Polypropylene Yarns (PP Yarn), Zero Foaming Yarn & Cotton Yarn for Industrial and Medical Filtration.</P>
            @endif
        </div>
        <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" id="banner_btn" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Enquire Now</p>
                      </button>
                    </div>
    
    </div>
  </div>
    
</section>


<!-- banner end -->

<!-- filter-content -->
<section class="filter-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            @if($category->category_name == 'Air Filtration')
            <h2 class="inner-head"> Dust Collector Air Filter Cartridges Manufacturer</h2>
                <P class="category-content m-add"><b>mmp’s</b> air filter cartridges and dust collectors filter bags are the most trusted choice for you because they come with features like efficient dust separation in air pollution control systems, which are designed with premium materials that modify to specific applications such as temperature, dust types, and moisture lock, our air filter elements and pleated air filter cartridges makes sure you experience unmatched protection with advanced coatings and high-temperature resistance. We manufacture a wide range of air filter cartridges for dust collection and air pollution control systems with state of the art production facilities. With over three decades of expertise, <b>mmp</b> is a pioneering manufacturer in India and we are one of the leading brand to introduce air filter cartridges and bags for air filtration, which are widely being used in dust collector filters. We are currently serving clients from all over the world including the USA, UK, UAE, and Australia, <b>mmp</b> offers you a diversified range that includes pleated air filter cartridges, pleated filter bags, dust collector filter bags, and dust collector filter cages, all the products have been designed to meet your diversified air filtration system needs with efficiency. As a trusted Air Filter Cartridge Manufacturer, <b>mmp</b> makes sure you get superior quality and performance for air pollution control equipment and industrial air cleaners. </P>
            @elseif($category->category_name == 'Water Filtration')
                <!--<P class="category-content m-add">mmp delivers a range of expert-approved, industry-leading water filter cartridges, designed to enable you with superior water clarity, taste, and protection.</P>-->
                <h2 class="inner-head"> Water Filter Cartridges Manufacturer</h2>
           <p class="category-content m-add"><b>mmp</b> 
            replacement water filters and cartridges are designed for multi-stage filtration systems to improve overall water quality by removing unwanted particles and impurities from the water supply, ensuring clean and safe drinking water. We provide a wide range of replacement water filter cartridges suitable for both domestic and industrial filtration systems to enhance water quality. <b>mmp</b> replacement cartridges are easy to install, long-lasting, and compatible with leading brands. Our filter cartridges are made from high-quality polypropylene, ensuring strength and durability for various applications. We also offer custom-designed water filter cartridges based on clients’ requirements for global markets, including the United States, UK, UAE, Australia, and more.</p>
            @elseif($category->category_name == 'Filtration Yarn')
                <!--<P class="category-content m-add">mmp delivers a range of expert-approved, industry-leading water filter cartridges, designed to enable you with superior water clarity, taste, and protection.</P>-->
                <h2 class="inner-head"> Filtration Yarn Manufacturer</h2>
           <p class="category-content">At <b>mmp</b> Filtration, we bring innovation and excellence to the forefront of filtration technology through our advanced <b>Filtration Yarns.</b> Specially engineered for high-performance filtration systems, our yarns are designed to ensure superior efficiency, durability, and reliability across a wide range of industrial and commercial applications.</p>
           <p class="category-content">As a trusted <b>PP Yarn Manufacturer & Supplier,</b> we offer customized solutions tailored to your needs, combining cutting-edge materials with industry-leading manufacturing practices.
</p>
           <!--<div class="theme-btn justify-content-start m-add">-->
           <!--           <a href="https://mmpfilter.com/water-filtration-product-brochure.pdf" target="_blank" class="btn-add"><span><i class="fa-solid fa-arrow-down"></i></span>-->
           <!--             <p>Download Brochure</p>-->
           <!--           </a>-->
           <!--         </div>-->
           
            @endif
        </div>
    </div>
    <div class="row">
        @foreach($data['product'] as $product)
        <?php if($product->product_image){
            if( strpos($product->product_image, ',') !== false ){
                $image = explode(',',$product->product_image);
            }else{
                $image[0] = $product->product_image;
            }
        }?>
        <div class="col-md-4">
           <div>
                <a href="{{ route('productdetail', ['url' => $product->producturl]) }}">
                <img src="{{ asset('public/Product_Images/' .$image[0]) }}" alt="{{ $product->alt }}" class="img-fluid">
                <h3>{{ $product->product_name }}</h3>
                </a>
                <p style="height:auto">{!! $product->product_shortdescription !!}</p>
                   <div class="ym_add">
                    <div class="theme-btn justify-content-start">
                       <a href="{{ route('productdetail', ['url' => $product->producturl]) }}" class="nav-link btn-add"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><p>View More
                       </p></a>
                    </div>
                  </div>
            <!--<div class="theme-btn prd_btn">-->
            <!--  <a href="#" class="btn-add" target="_blank"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>-->
            <!--    <p>Read More</p>-->
            <!--  </a>-->
            <!--</div>-->
           </div>
        </div>

        @endforeach
        @if($category->category_name == 'Air Filtration')
        <div class="col-md-4">
           <div>
                <a href="{{ url('/product-detail/liquid-filter-bags') }}">
                    <img src="{{ asset('public/Product_Images/Liquid-Filter-Bags.jpg') }}" alt="Liquid Filter Bag" class="img-fluid">
                    <h3>Liquid Filter Bag</h3>
                </a>
                <p style="height:auto">
                    High quality Liquid Filter Bags designed for industrial dust collection and air filtration applications with superior filtration efficiency.
                </p>
                <div class="ym_add">
                    <div class="theme-btn justify-content-start">
                        <a href="{{ url('/product-detail/liquid-filter-bags') }}" class="nav-link btn-add">
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <p>View More</p>
                        </a>
                    </div>
                </div>
           </div>
        </div>
        @endif
        
        
    </div>
  </div>
</section>
<!-- filter-content end -->

@if($category->category_name == 'Water Filtration')
<section class="additional-content">
    <div class="container">
    <div class="row">
       
        <div class="col-xl-12">
            <div class="products-feature-tabs">
            <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Product Description </h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Features</h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><h3>Applications</h3></button>
                </li>
            </ul>
            <div class="tab-content details-tabs-content" id="myTabContent">
                <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <p> Water filter cartridges supplied at <b>mmp</b> are effective in removing dirt, sediment and provide clean and safe water. These water filter cartridges are inserted into the housing, and they trap contaminants on their larger surface area. They are easy to fit and replace as well, and if they are changed regularly, it improves the efficiency of the machine.</p>
                   <h5>Key Components of Filter Cartridges:</h5>
                   <p>The primary component of Water filter cartridges removes contaminants. This Filter Media is made of polypropylene, polyester, and cotton.</p>
                   <p>Other components are End Caps, which hold the filter media in place and provide a seal between the cartridge and filter housings.</p>
                   <P>The core is an important structural component of the cartridge filter and serves two purposes: it supports the filter media and protects it from becoming crushed or damaged during high-pressure conditions. Filters are strong even when subjected to high-pressure conditions.</P>
                   <p>Gaskets/O-rings provide a barrier between the cartridge filter and the housing that prevents fluid from bypassing the filter. This barrier also prevents any leakage and keeps all of the incoming fluid directed through the filter media, so that the cartridge filters function at their most efficient.</p>
                </div>
                <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p>You want the very best for your water filtration needs! That's exactly what mmp's huge selection of premium quality replacement water filter cartridges will provide: continuing to operate those systems smoothly. Each of our solutions has been developed specifically for our clients in the USA, UK, UAE, and Australia with respect to the Residential, Commercial, and Industrial sectors. With years of experience as manufacturers and suppliers of water filter cartridges in India, we can provide numerous different sizes, micron ratings, and materials of filter cartridges for you to meet your system requirements.<b> mmp filter</b> cartridges provide high filtration efficiency by removing sediments, chemicals, and microorganisms from your water supply so that it is clean and safe for you.</p>
                    <p>We build our industrial water filter cartridges with durable materials compatible with a variety of chemicals; thus, they work equally well in all types of filtration applications, industrial or domestic. These filters are specifically designed to perform for a long time and are an economical method of providing clean and reliable water for your filtration systems.</p>
                </div>
                <div class="tab-pane details-content-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <table>
                        <tr>
                            <th>Application</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>Drinking Water</td>
                            <td>Ensures safe, clean water by removing harmful particles, bacteria, and chemicals, improving taste and quality.</td>
                        </tr>
                        <tr>
                            <td>Dairy Products</td>
                            <td>Maintains water purity during dairy processing, ensuring hygiene and preventing contamination in dairy products.</td>
                        </tr>
                        <tr>
                            <td>Food & Beverages</td>
                            <td>Provides clean, filtered water for food and beverage production, ensuring compliance with safety standards and enhancing product quality.</td>
                        </tr>
                        <tr>
                            <td>Industrial Water Treatment</td>
                            <td>Removes sediments, chemicals, and impurities from water used in industrial processes, improving system efficiency and prolonging equipment life.</td>
                        </tr>
                        <tr>
                            <td>Pharmaceutical</td>
                            <td>Provides ultra-pure water for ensuring compliance with stringent quality standards.</td>
                        </tr>
                        <tr>
                            <td>Chemical & Petrochemical</td>
                            <td>Filters water /liquids used in chemical processes, protecting equipment and ensuring safe, efficient production in chemical and petrochemical industries.</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-12">
            <div class="Product-detail-faq">
          <h4 class="inner-head"> Water Filter Cartridges – FAQs Answered  </h4>
             <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <p class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What is a cartridge filter?
                    </button>
                </p>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Cartridge filters are filters that are used in filtration systems to sanitize and purify water supplied by public and private sources, like a municipal source. When using a Cartridge filter, impurities that are present in the original water supply are captured within the filter, based on their micron size (size). Many contaminants can be present in the water supply at different sizes and the filter caries are built to trap these contaminants; therefore filters will capture impurities based on their size (microns).</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What Is The Greatest Micron Rating That A Cartridge Can Have?
                    </button>
                </p>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>Each water filtration product has a micron rating indicating the size of the holes in the filter media so that consumers can select which style of filter they want to purchase. The filters with a micron rating of 0.5 to 5 are best suited for consumers interested in high-quality filtration/absolute purity, while filters with a rating of 10-50 microns would be more appropriate for consumers who want to pre-filter or remove larger particles from their drinking water supply.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Does mmp Assist Their Industrial Customers In Selecting Water Filters?

                    </button>
                </p>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes, <b>mmp</b> provides support to its industrial customers in selecting the water filter that best meets their needs as well as those of their processes, including the types of filter cartridges that will be used in their system.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                       What Types of Water Filter Cartridges Does mmp Make?

                    </button>
                </p>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>For over forty years, <b>mmp</b> has manufactured various kinds of water filter cartridges, including pleated cartridges, wound cartridges, melted cartridge designs, PP spunbonded cartridges, resin bonded cartridges, grooved resin bonded cartridges, sediment cartridges, antimicrobial wound cartridges, high-flow pleated cartridges and polypropylene cartridges. Beyond their wide range of standard product offerings, they also provide machine design services for residential and commercial uses, as well as any custom-made items you might need.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                     Why Should You Change Your Old Filter Cartridges?
                    </button>
                </p>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To keep your filter system working properly replace your old cartridges. When cartridges are full, they cannot filter out contaminants effectively. Over time, all the contaminants that build up in the cartridge could result in lower quality water than originally provided. You should replace your cartridges regularly to improve the performance of your filters and prevent possible contaminants from being reintroduced into your filtration system.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                     What Are Replacement Filter Cartridges?
                    </button>
                </p>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>As the old filter cartridge reaches its end and is not functioning effectively, the replacement cartridge allows you to continue using the water filtration system and to maintain a supply of clean and safe drinking water.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                     What Steps to Follow When Replacing Water Filters?
                    </button>
                </p>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>First, You need to shut off all the water supply valves located at the filter system, take out the used water filter and throw it away, wash the inside of the housing with soap and warm water, install the new water filter cartridge where the old one was  and there will be no water flowing from the supply till you turn the supply back on. To ensure that you install the new filter correctly, refer to the installation guide provided by the manufacturer of the filter cartridge.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                     When Should a Water Filter Be Changed?

                    </button>
                </p>
                  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Water Filter Cartridges Generally Last Between 3 to 12 Months Based on Water Quality and Usage, However If You Have a Commercial System or a Higher Flow Rate, Your Cartridge Will Be Replaced Much Sooner Depending on Level of Contaminants Present.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      Is It Possible for mmp to Custom Build A Water Filter Cartridge Based Off a Customer's Needs?
                    </button>
                </p>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><b>mmp</b> Offers Custom Water Filter Cartridges according to Specific Customer Needs, keeping in mind the System You Are Using, Micron Rating, Material Used, Industry Application.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      What are The Important Certifications/Standards When Looking For A Water Filter/Cartridge?

                    </button>
                </p>
                  <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>When purchasing a cartridge, make sure to verify that it has received NSF Certification, FDA Approval, and ISO Certification.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      What Are The Advantages Of Using Water Filter Cartridges In A Professional Setting?
                    </button>
                </p>
                  <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Companies can use water filter cartridges to protect their machinery and to provide safe source water for their operations which decreases the cost of maintenance for their water-processing systems and improves their operational efficiency in regard to their Industrial, Commercial and Institutional applications.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                     Will Water Filters Eliminate Mixtures Of Bacteria And Other Chemicals?
                    </button>
                </p>
                  <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><strong>mmp</strong>’s premium-grade water filter cartridges effectively remove various chemical impurities exposing your product to contaminants such as bacteria, virus, chemicals etc. These water filter cartridges provide safe and healthy drinking water.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                     What Are Common Applications for mmp Water Filter Cartridges?

                    </button>
                </p>
                  <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Our water filter cartridges are used in residential systems, restaurants, food & beverage, pharmaceuticals, power plants, and industrial water treatment, providing reliable filtration across diverse sectors.</p>
                    </div>
                  </div>
                </div>
                <!--<div class="accordion-item">-->
                <!--  <p class="accordion-header" id="headingFourteen">-->
                <!--    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">-->
                <!--      Can Water Filter Cartridges Remove Bacteria and Chemicals?-->
                <!--    </button>-->
                <!--</p>-->
                <!--  <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">-->
                <!--    <div class="accordion-body">-->
                <!--      <p>Yes, high-quality cartridges from <strong>mmp</strong> can remove bacteria, viruses, chemicals, and impurities depending on the type and micron rating, ensuring safe, clean water.</p>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="accordion-item">-->
                <!--  <p class="accordion-header" id="headingFifteen">-->
                <!--    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">-->
                <!--      What Are Common Applications for mmp Water Filter Cartridges?-->
                <!--    </button>-->
                <!--</p>-->
                <!--  <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">-->
                <!--    <div class="accordion-body">-->
                <!--      <p>Used in residential systems, restaurants, food & beverage, pharmaceuticals, power plants, and industrial water treatment, providing reliable filtration across diverse sectors.</p>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endif
@if($category->category_name == 'Air Filtration')
<section class="additional-content">
    <div class="container">
    <div class="row">
       
        <div class="col-xl-12">
            <div class="products-feature-tabs">
            <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Product Description </h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Features</h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><h3>Applications</h3></button>
                </li>
            </ul>
            <div class="tab-content details-tabs-content" id="myTabContent">
                <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <p> Air filter cartridges, also called dust collector filters or industrial filter cartridges, are cylindrical components designed to remove dust, chemicals, contaminants, and other unwanted particles from the air. The air filters are designed to meet and exceed OEM specifications, especially in construction and operations. The air filters are robust, reliable, and can withstand any harsh environments. We have engineered air filter cartridges that can capture the range of airborne contaminants, from microscopic dust particles to potent allergens, and have successfully delivered improved air quality for your homes, commercials, or industrial spaces. Whether you need dust air filter cartridges, pleated air filter cartridges, or solutions for air pollution control systems, we have the right products for your every need. If you need any assistance or have any questions about our air filter elements or air filtration products, our experts are always ready to help you. </p>
                  
                </div>
                <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <p><strong>High-Efficiency Filtration:</strong> Captures fine dust and airborne contaminants with minimal pressure drop.</p>
                    <p><strong>Pleated Construction:</strong> Maximizes surface area for superior dust collection.</p>
                    <p><strong>Durable Build: </strong> Designed for long service life and resistance to extreme conditions.</p>
                    <p><strong>Easy Installation & Maintenance: </strong> Compatible with most dust collector filter cages for quick replacements.</p>
                    <p><strong>Versatile Compatibility: </strong> Suitable for various air pollution control systems and industrial air cleaner applications.</p>
                </div>
                <div class="tab-pane details-content-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                 <p>  Our pleated filter cartridges and dust collector filter bags are widely used in industries such as: </p>
                  <p> <strong>Cement & Construction:</strong> Efficient dust capture in cement plants and construction sites. </p>
                  <p> <strong>Metalworking & Welding:</strong> Ensures clean air in metal fabrication and welding processes. </p>
                    <p> <strong>Pharmaceutical & Food Processing:</strong> Helps maintain hygiene standards by removing airborne contaminants. </p>
                    <p> <strong>Power Plants & Energy Sector:</strong> Protects equipment and enhances operational efficiency. </p>
                    
                    <p> <strong>Automotive & Manufacturing:</strong> Essential for clean production environments. </p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-12">
            <div class="Product-detail-faq">
          <h4 class="inner-head"> FAQs About Air Filter Cartridges  </h4>
             <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <p class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are air filtration cartridges?
                    </button>
                </p>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Air filtration cartridges are cylindrical filters that remove contaminants, dust, and      other particles from the air. They are also known as dust collector filters or industrial cartridge filters.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What industries use air filter cartridges and bags?
                    </button>
                </p>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p>Air filter cartridges and bags are used in many industries, including cement, manufacturing, food processing, pharmaceutical and power generation, etc.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       <p> How do I select the right air filter cartridge?</p>
                    </button>
                </p>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To select the right air filter cartridge, consider factors like application, operating conditions, dust type, temperature, and compatibility with your air filtration system. </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <p>What materials are used in air filter cartridges?</p>
                    </button>
                </p>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><b>mmp</b> Filters uses high-quality materials such as spun-bonded polyester, cellulose, nanofiber media, and stainless steel cores in its air filter cartridges, ensuring durability, efficient dust capture, and performance under various operating conditions.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                       <p> How do air filter cartridges and bags improve air quality?</p>
                    </button>
                </p>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Air filter cartridges and bags improve air quality by physically trapping airborne particles like dust, pollen, pet dander, and other contaminants as air passes through them.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <p>How long do air filter cartridges last?</p>
                    </button>
                </p>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Normally it ranges from 30 days to 6 months but many factors affect the air filter cartridges like type of filter, the quality, and environmental factors like dust levels etc.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endif

@if($category->category_name == 'Filtration Yarn')
<section class="additional-content">
    <div class="container">
    <div class="row">
       
        <div class="col-xl-12">
            <div class="products-feature-tabs">
            <ul class="nav nav-tabs details-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><h3>Product Description </h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><h3>Features</h3></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><h3>Applications</h3></button>
                </li>
            </ul>
            <div class="tab-content details-tabs-content" id="myTabContent">
                <div class="tab-pane details-content-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <p>Our filtration yarn portfolio includes high-performance <b>Polypropylene Yarns (PP Yarn)</b> and specialized <b>Zero Foaming PP Yarn,</b> each engineered to meet the rigorous demands of modern filtration systems. Manufactured using advanced <b>Dref Spinning Yarn</b> technology, our <b>polypropylene yarns</b> offer superior tensile strength, chemical resistance, and dimensional stability, making them ideal for the production of wound filter cartridges, pleated elements, and other filtration media. Variants such as <b>PP Filtration Yarn, Core Spun Yarn</b> are widely used across industries for their reliability and efficiency. In addition, our premium <b>Filantro Zero Foaming Yarn</b> is designed to eliminate bubble formation in liquid filtration processes, ensuring optimal clarity and performance. Its anti-static and hydrophobic properties make it an excellent choice for high-precision applications where consistent, foam-free filtration is essential. As a trusted <b>PP Yarn Manufacturer & Supplier,</b> we deliver yarn solutions that are tailored for durability, purity, and exceptional filtration performance.
 </p>
                  
                </div>
                <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul style="list-style: disc; padding-left:23px">
                    <li>Made from 100% virgin polypropylene.</li>
                    <li>Manufactured using <strong>Dref spinning</strong> for uniformity and low shrinkage.</li>
                    <li>High tensile strength and excellent elongation characteristics.</li>
                    <li>Chemically inert, resistant to acids, alkalis, and organic solvents.</li>
                    <li>Anti-microbial and food-grade variants available.</li>
                    <li><strong>Zero foaming</strong> yarn variant minimizes air entrapment in liquids.</li>
                    <li>Environmentally safe and recyclable.</li>
                    
                </ul>
                </div>
                <div class="tab-pane details-content-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                 <p>Our <strong>PP Filtration Yarn</strong> is ideal for:</p>
                <ul style="list-style: disc; padding-left:23px">
                    <li>Manufacturing of <strong>wound filter cartridges.</strong></li>
                    <li>Water purification systems.</li>
                    <li>Pharmaceutical and laboratory-grade filters.</li>
                    <li>Beverage and food processing filtration.</li>
                    <li>Medical-grade sterile filters.</li>
                    <li>Paints, resins, and chemical filtration.</li>
                    <li>Oil & gas sector filtration media.</li>
                    <li>Domestic and industrial water treatment solutions.</li>
                </ul>
                <p>Whether you're looking for <strong>pp filler yarn</strong> or <strong>core spun yarn</strong> for specialty filters, our solutions deliver consistently high performance.</p>
                </div>
            </div>
        </div>
        </div>
          <div class="col-xl-12">
            <div class="Product-detail-faq">
              <h4 class="inner-head"> PP Yarns – FAQs Answered  </h4>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <p class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is Polypropylene Yarn used for?
                    </button>
                </p>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><strong>Polypropylene yarn (PP Yarn)</strong> is commonly used in the production of filtration media, especially wound filter cartridges, thanks to its chemical resistance, tensile strength, and cost-efficiency.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is Zero Foaming Yarn?
                    </button>
                </p>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p><strong>Zero Foaming PP Yarn</strong> is specially designed to reduce air entrapment and bubble formation in filters, making it ideal for high-clarity liquid filtration.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       <p> Is Dref Spinning better for filtration yarn?</p>
                    </button>
                </p>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes. <strong>Dref Spinning Yarn</strong> ensures low linting, high bulk, and uniform density, making it superior for filter cartridge manufacturing.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <p>Do you supply in bulk to manufacturers?</p>
                    </button>
                </p>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Absolutely. As a leading <strong>PP Yarn Manufacturer & Supplier,</strong> we cater to bulk orders globally with consistent supply and customizable specifications.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                       <p> Are your yarns food-safe?</p>
                    </button>
                </p>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes. We offer <strong>food-grade and anti-microbial polypropylene yarns,</strong> suitable for sensitive applications like food, beverage, and pharmaceuticals.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                       <p> Who is the best Polypropylene Yarns manufacturer?</p>
                    </button>
                </p>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>When selecting a Polypropylene Yarns manufacturer, look for proven expertise, consistent quality, and global supply capability. mmp is a trusted PP yarn supplier for filtration and industrial applications worldwide.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                       <p> What types of Polypropylene Yarn are available?</p>
                    </button>
                </p>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>At <strong>mmp</strong>, Polypropylene yarns are available in various types, including Anti-Microbial Polypropylene Filtration Yarn, Absorbent Bleached Cotton Yarn, Zero Foaming Polypropylene Yarn, and more.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                       <p> How to select the right Polypropylene Yarn supplier?</p>
                    </button>
                </p>
                  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Choose a Polypropylene Yarn (PPY) supplier that offers technical support, customization options, and certifications. For consistent quality and timely delivery, contact mmp today.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                       <p> Does mmp supply Polypropylene Yarn worldwide?</p>
                    </button>
                </p>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes, <strong>mmp</strong> supplies high-quality polypropylene yarns worldwide, serving industries like filtration, geotextiles, and textiles. As a leading filtration yarn supplier, <strong>mmp</strong> ensures reliable performance and global delivery.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <p class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                       <p> Are there customized polypropylene yarn options available?</p>
                    </button>
                </p>
                  <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes, many polypropylene yarn manufacturers and filtration yarn suppliers offer customized polypropylene yarn options. <strong>mmp</strong> provides customization in diameter, filament count, and material type for specific applications, with worldwide delivery.</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
    </div>
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

@if($category->category_name == 'Water Filtration')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is a cartridge filter?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Cartridge filters are filters that are used in filtration systems to sanitize and purify water supplied by public and private sources, like a municipal source. When using a Cartridge filter, impurities that are present in the original water supply are captured within the filter, based on their micron size (size). Many contaminants can be present in the water supply at different sizes and the filter caries are built to trap these contaminants; therefore filters will capture impurities based on their size (microns)."
    }
  },{
    "@type": "Question",
    "name": "What Is The Greatest Micron Rating That A Cartridge Can Have?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Each water filtration product has a micron rating indicating the size of the holes in the filter media so that consumers can select which style of filter they want to purchase. The filters with a micron rating of 0.5 to 5 are best suited for consumers interested in high-quality filtration/absolute purity, while filters with a rating of 10-50 microns would be more appropriate for consumers who want to pre-filter or remove larger particles from their drinking water supply."
    }
  },{
    "@type": "Question",
    "name": "Does mmp Assist Their Industrial Customers In Selecting Water Filters?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, mmp provides support to its industrial customers in selecting the water filter that best meets their needs as well as those of their processes, including the types of filter cartridges that will be used in their system."
    }
  },{
    "@type": "Question",
    "name": "What Types of Water Filter Cartridges Does mmp Make?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "For over forty years, mmp has manufactured various kinds of water filter cartridges, including pleated cartridges, wound cartridges, melted cartridge designs, PP spunbonded cartridges, resin bonded cartridges, grooved resin bonded cartridges, sediment cartridges, antimicrobial wound cartridges, high-flow pleated cartridges and polypropylene cartridges. Beyond their wide range of standard product offerings, they also provide machine design services for residential and commercial uses, as well as any custom-made items you might need."
    }
  },{
    "@type": "Question",
    "name": "Why Should You Change Your Old Filter Cartridges?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To keep your filter system working properly replace your old cartridges. When cartridges are full, they cannot filter out contaminants effectively. Over time, all the contaminants that build up in the cartridge could result in lower quality water than originally provided. You should replace your cartridges regularly to improve the performance of your filters and prevent possible contaminants from being reintroduced into your filtration system."
    }
  },{
    "@type": "Question",
    "name": "What Are Replacement Filter Cartridges?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "As the old filter cartridge reaches its end and is not functioning effectively, the replacement cartridge allows you to continue using the water filtration system and to maintain a supply of clean and safe drinking water."
    }
  },{
    "@type": "Question",
    "name": "What Steps to Follow When Replacing Water Filters?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "First, You need to shut off all the water supply valves located at the filter system, take out the used water filter and throw it away, wash the inside of the housing with soap and warm water, install the new water filter cartridge where the old one was and there will be no water flowing from the supply till you turn the supply back on. To ensure that you install the new filter correctly, refer to the installation guide provided by the manufacturer of the filter cartridge."
    }
  },{
    "@type": "Question",
    "name": "When Should a Water Filter Be Changed?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Water Filter Cartridges Generally Last Between 3 to 12 Months Based on Water Quality and Usage, However If You Have a Commercial System or a Higher Flow Rate, Your Cartridge Will Be Replaced Much Sooner Depending on Level of Contaminants Present."
    }
  },{
    "@type": "Question",
    "name": "Is It Possible for mmp to Custom Build A Water Filter Cartridge Based Off a Customer's Needs?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "mmp Offers Custom Water Filter Cartridges according to Specific Customer Needs, keeping in mind the System You Are Using, Micron Rating, Material Used, Industry Application."
    }
  },{
    "@type": "Question",
    "name": "What are The Important Certifications/Standards When Looking For A Water Filter/Cartridge?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "When purchasing a cartridge, make sure to verify that it has received NSF Certification, FDA Approval, and ISO Certification."
    }
  },{
    "@type": "Question",
    "name": "What Are The Advantages Of Using Water Filter Cartridges In A Professional Setting?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Companies can use water filter cartridges to protect their machinery and to provide safe source water for their operations which decreases the cost of maintenance for their water-processing systems and improves their operational efficiency in regard to their Industrial, Commercial and Institutional applications."
    }
  },{
    "@type": "Question",
    "name": "Will Water Filters Eliminate Mixtures Of Bacteria And Other Chemicals?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "mmp’s premium-grade water filter cartridges effectively remove various chemical impurities exposing your product to contaminants such as bacteria, virus, chemicals etc. These water filter cartridges provide safe and healthy drinking water."
    }
  },{
    "@type": "Question",
    "name": "What Are Common Applications for mmp Water Filter Cartridges?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our water filter cartridges are used in residential systems, restaurants, food & beverage, pharmaceuticals, power plants, and industrial water treatment, providing reliable filtration across diverse sectors."
    }
  }]
}
</script>

@endif
@if($category->category_name == 'Filtration Yarn')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is Polypropylene Yarn used for?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Polypropylene yarn (PP Yarn) is commonly used in the production of filtration media, especially wound filter cartridges, thanks to its chemical resistance, tensile strength, and cost-efficiency."
    }
  },{
    "@type": "Question",
    "name": "What is Zero Foaming Yarn?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Zero Foaming PP Yarn is specially designed to reduce air entrapment and bubble formation in filters, making it ideal for high-clarity liquid filtration."
    }
  },{
    "@type": "Question",
    "name": "Is Dref Spinning better for filtration yarn?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. Dref Spinning Yarn ensures low linting, high bulk, and uniform density, making it superior for filter cartridge manufacturing."
    }
  },{
    "@type": "Question",
    "name": "Do you supply in bulk to manufacturers?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely. As a leading PP Yarn Manufacturer & Supplier, we cater to bulk orders globally with consistent supply and customizable specifications."
    }
  },{
    "@type": "Question",
    "name": "Are your yarns food-safe?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes. We offer food-grade and anti-microbial polypropylene yarns, suitable for sensitive applications like food, beverage, and pharmaceuticals."
    }
  },{
    "@type": "Question",
    "name": "Who is the best Polypropylene Yarns manufacturer?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "When selecting a Polypropylene Yarns manufacturer, look for proven expertise, consistent quality, and global supply capability. mmp is a trusted PP yarn supplier for filtration and industrial applications worldwide."
    }
  },{
    "@type": "Question",
    "name": "What types of Polypropylene Yarn are available?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "At mmp, Polypropylene yarns are available in various types, including Anti-Microbial Polypropylene Filtration Yarn, Absorbent Bleached Cotton Yarn, Zero Foaming Polypropylene Yarn, and more."
    }
  },{
    "@type": "Question",
    "name": "How to select the right Polypropylene Yarn supplier?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Choose a Polypropylene Yarn (PPY) supplier that offers technical support, customization options, and certifications. For consistent quality and timely delivery, contact mmp today."
    }
  },{
    "@type": "Question",
    "name": "Does mmp supply Polypropylene Yarn worldwide?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, mmp supplies high-quality polypropylene yarns worldwide, serving industries like filtration, geotextiles, and textiles. As a leading filtration yarn supplier, mmp ensures reliable performance and global delivery."
    }
  },{
    "@type": "Question",
    "name": "Are there customized polypropylene yarn options available?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, many polypropylene yarn manufacturers and filtration yarn suppliers offer customized polypropylene yarn options. mmp provides customization in diameter, filament count, and material type for specific applications, with worldwide delivery."
    }
  }]
}
</script>

@endif
@if($category->category_name == 'Air Filtration')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What are air filtration cartridges?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Air filtration cartridges are cylindrical filters that remove contaminants, dust, and other particles from the air. They are also known as dust collector filters or industrial cartridge filters."
    }
  },{
    "@type": "Question",
    "name": "What industries use air filter cartridges and bags?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Air filter cartridges and bags are used in many industries, including cement, manufacturing, food processing, pharmaceutical and power generation, etc."
    }
  },{
    "@type": "Question",
    "name": "How do I select the right air filter cartridge?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To select the right air filter cartridge, consider factors like application, operating conditions, dust type, temperature, and compatibility with your air filtration system."
    }
  },{
    "@type": "Question",
    "name": "What materials are used in air filter cartridges?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "mmp Filters uses high-quality materials such as spun-bonded polyester, cellulose, nanofiber media, and stainless steel cores in its air filter cartridges, ensuring durability, efficient dust capture, and performance under various operating conditions."
    }
  },{
    "@type": "Question",
    "name": "How do air filter cartridges and bags improve air quality?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Air filter cartridges and bags improve air quality by physically trapping airborne particles like dust, pollen, pet dander, and other contaminants as air passes through them."
    }
  },{
    "@type": "Question",
    "name": "How long do air filter cartridges last?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Normally it ranges from 30 days to 6 months but many factors affect the air filter cartridges like type of filter, the quality, and environmental factors like dust levels etc."
    }
  }]
}
</script>


@endif