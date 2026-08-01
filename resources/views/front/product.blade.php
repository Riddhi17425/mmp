@include('layouts.frontheader')
<!-- banner -->
<style>
    .set-content p {
        color: #fff;
        margin-bottom: 30px;
    }
</style>

<!-- banner -->
<section class="contact-banner position-relative">
      <img src="{{ asset('public/front/images/Polypropylene_Yarns_(PP-Yarns).jpg') }}"  alt="{{ $category->alt }}" class="img-fluid mobile-img"
             />
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/Dref-Spinning-banner-desk.jpg') }}"  alt="{{ $category->alt }}" class="img-fluid product-page-header"
             />
       
        <div class="contact-head product-contact-head">
            <h1>{{ $category->category_name }}</h1>

            <div class="row">
                <div class="col-md-9">
                    <div class="set-content">
                        <p>High-Performance Filtration Yarn Manufacturer
Specialized Polypropylene Yarns (PP Yarn), Zero Foaming Yarn & Cotton Yarn for Industrial and Medical Filtration
</p>
<!--                        <p> PP Yarn mmp manufactures durable, high-performance 100% polypropylene yarn for diverse industries.-->
<!--</p>-->
                        <!-- <p>Our water filtration technology plays a key role in industrial,-->
                        <!--    commercial as well as drinking water filter applications. Driven by-->
                        <!--    years of research & development, Fueled by Years of Research, we're Dedicated to Providing you with the Best Filtration Products.-->
                        <!--</p>-->
                    </div>
                    <div class="theme-btn justify-content-start ">
                        <button type="button" class="btn-add"  data-bs-toggle="modal" data-bs-toggle="modal"
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
<section class="filter-inner filter-inner-product ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-add">
                    <h2 class="inner-head">Filtration Yarn Manufacturer
</h2>
                    <p>At <b>mmp</b> Filtration, we bring innovation and excellence to the forefront of filtration technology through our advanced <strong>Filtration Yarns.</strong> Specially engineered for high-performance filtration systems, our yarns are designed to ensure superior efficiency, durability, and reliability across a wide range of industrial and commercial applications.
</p>
                    <p>As a trusted <b>PP Yarn Manufacturer & Supplier,</b> we offer customized solutions tailored to your needs, combining cutting-edge materials with industry-leading manufacturing practices.
</p>
                   
                </div>
            </div>
        </div>
       
    </div>
</section>
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
                    <h3>Features </h3>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="index-tab" data-bs-toggle="tab" data-bs-target="#index"
                    type="button" role="tab" aria-controls="index" aria-selected="false">
                    <h3>Applications </h3>
                </button>
            </li>

        </ul>
        <div class="tab-content details-tabs-content" id="myTabContent">
            <div class="tab-pane details-content-pane fade active show" id="home" role="tabpanel"
                aria-labelledby="home-tab">
                <p>Our filtration yarn portfolio includes high-performance <b>Polypropylene Yarns (PP Yarn)</b> and specialized <b>Zero Foaming PP Yarn,</b> each engineered to meet the rigorous demands of modern filtration systems. Manufactured using advanced <b>Dref Spinning Yarn</b> technology, our <b>polypropylene yarns</b> offer superior tensile strength, chemical resistance, and dimensional stability, making them ideal for the production of wound filter cartridges, pleated elements, and other filtration media. Variants such as <b>PP Filtration Yarn, Core Spun Yarn, and PP Filler Yarn</b> are widely used across industries for their reliability and efficiency. In addition, our premium <b>Filantro™ Zero Foaming Yarn</b> is designed to eliminate bubble formation in liquid filtration processes, ensuring optimal clarity and performance. Its anti-static and hydrophobic properties make it an excellent choice for high-precision applications where consistent, foam-free filtration is essential. As a trusted <b>PP Yarn Manufacturer & Supplier,</b> we deliver yarn solutions that are tailored for durability, purity, and exceptional filtration performance.
 </p>
            </div>
            <div class="tab-pane details-content-pane fade" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                
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
            
            <div class="tab-pane details-content-pane fade" id="index" role="tabpanel"
                aria-labelledby="index-tab">
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
</section>
<section class="Product-detail-faq">
    <div class="container">
        <h3 class="inner-head">FAQs About PP Yarns</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h4 class="accordion-header" id="flush-heading1">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse1" aria-expanded="true" aria-controls="flush-collapse1">
                        What is Polypropylene Yarn used for?
                    </button>
                </h4>
                <div id="flush-collapse1" class="accordion-collapse collapse show" aria-labelledby="flush-heading1"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><strong>Polypropylene yarn (PP Yarn)</strong> is commonly used in the production of filtration media, especially wound filter cartridges, thanks to its chemical resistance, tensile strength, and cost-efficiency.
</div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="flush-heading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                        What is Zero Foaming Yarn?
                    </button>
                </h4>
                <div id="flush-collapse2" class="accordion-collapse collapse " aria-labelledby="flush-heading2"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><strong>Zero Foaming PP Yarn</strong> is specially designed to reduce air entrapment and bubble formation in filters, making it ideal for high-clarity liquid filtration.
</div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="flush-heading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                        Is Dref Spinning better for filtration yarn?
                    </button>
                </h4>
                <div id="flush-collapse3" class="accordion-collapse collapse " aria-labelledby="flush-heading3"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes. <strong>Dref Spinning Yarn</strong> ensures low linting, high bulk, and uniform density, making it superior for filter cartridge manufacturing.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="flush-heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                        Do you supply in bulk to manufacturers?
                    </button>
                </h4>
                <div id="flush-collapse4" class="accordion-collapse collapse " aria-labelledby="flush-heading4"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Absolutely. As a leading <strong>PP Yarn Manufacturer & Supplier,</strong> we cater to bulk orders globally with consistent supply and customizable specifications.
</div>
                </div>
            </div>
            <div class="accordion-item">
                <h4 class="accordion-header" id="flush-heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                        Are your yarns food-safe?
                    </button>
                </h4>
                <div id="flush-collapse5" class="accordion-collapse collapse " aria-labelledby="flush-heading5"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes. We offer <strong>food-grade and anti-microbial polypropylene yarns,</strong> suitable for sensitive applications like food, beverage, and pharmaceuticals.</div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@include('layouts.frontfooter')

