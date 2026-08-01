@include('layouts.frontheader')
<!-- about-banner -->
    <section class="contact-banner position-relative">
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/partnership_banner.jpg') }}" alt="Partnership" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Partnership Opportunities</h1>
            <!--<nav aria-label="breadcrumb">-->
            <!--    <ol class="breadcrumb">-->
            <!--        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
            <!--        <li class="breadcrumb-item active" aria-current="page">Partnership</li>-->
            <!--    </ol>-->
            <!--</nav>-->
        </div>
    </div>
</section>

    <!-- Partnership-content -->
    <section class="partner_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                     <p>With over 30 years of experience, Hydro<span style="font-size:30px;">&#174;</span> Wound is a trusted name in the filtration industry. We are proud to be the only company in India that manufactures most of the necessary raw materials for wound filter cartridges. Our expertise and commitment to quality ensure that our products meet the highest standards.</p>
                </div>
                <div class="col-lg-12">
                    <div class="partner_head">
                        <div class="logo">
                            <img src="{{ asset('public/front/images/partnership_1.png') }}" alt="Partnership" class="mb-3"/>
                            <h3>In-House Manufacturing</h3>
                            <p style="max-width:500px;">We produce all essential components, including yarn, cores, wound filter cartridge
                            machine and of course our Hydro<span style="font-size:30px;">&#174;</span> wound cartridges too.</p>
                        </div>
                        <div class="partner_heading">
                            <h2>Why Choose<br> Hydro&reg; Wound ?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                     <img src="{{ asset('public/front/images/partner_Hydro_ Wound.png') }}" alt="Partnership" class="img-fluid my-5" />
                </div>
                <div class="col-lg-12">
                    <div class="partner_wrap">
                        <div class="partner_head">
                            <div class="logo">
                                <img src="{{ asset('public/front/images/partnership_2.png') }}" alt="Partnership" class="mb-2"/>
                                <h3>Customized Solutions</h3>
                                <p >We offer customized solutions to meet<br> specific filtration requirements.</p>
                            </div>
                            <div class="logo">
                                <img src="{{ asset('public/front/images/partnership_3.png') }}" alt="Partnership" class="mb-2 ms-5"/>
                                <h3>Proven Track Record</h3>
                                <p style="max-width:330px;">Our long-standing presence in the market is a testament to our reliability and expertise.</p>
                            </div>
                        </div>
                        <div class="partner_heading mt-5">
                            <b class="blog-head text-center">Our filters are ideal for various applications</b>
                            <div class="partner_head px-5">
                                <div class="text-center">
                                    <img src="{{ asset('public/front/images/partnership_4.png') }}" alt="Partnership"/>
                                    <p>Chemical</p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('public/front/images/partnership_5.png') }}" alt="Partnership"/>
                                    <p>Petroleum</p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('public/front/images/partnership_6.png') }}" alt="Partnership"/>
                                    <p>Water Treatment</p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('public/front/images/partnership_7.png') }}" alt="Partnership"/>
                                    <p>Food & Dairy </p>
                                </div>
                                <div class="text-center">
                                    <img src="{{ asset('public/front/images/partnership_8.png') }}" alt="Partnership"/>
                                    <p>Pharmaceuticals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="partner_feature">
                            <b class="blog-head partner_title">Key Features</b>
                            <div class="partner_head">
                                <div class="logo mb-3">
                                    <img src="{{ asset('public/front/images/partnership_9.png') }}" alt="Partnership" class="mb-2"/>
                                    <h3>Superior Filtration</h3>
                                    <p style="max-width:350px;">Our filters provide exceptional dirt-holding capacity and high flow rates.</p>
                                    </div>
                                <div class="logo mb-3">
                                    <img src="{{ asset('public/front/images/partnership_10.png') }}" alt="Partnership" class="mb-2"/>
                                    <h3>Durability</h3>
                                    <p style="max-width:350px;">Made with high-quality polypropylene / Absorbent bleached cotton our cartridges are built to last.</p>
                                </div>
                                <div class="logo mb-3">
                                    <img src="{{ asset('public/front/images/partnership_11.png') }}" alt="Partnership" class="mb-2"/>
                                    <h3>Versatility</h3>
                                    <p style="max-width:350px;">Suitable for a wide range of filtration needs, ensuring clean and safe operations.</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <b class="blog-head text-center mt-5">Partnership Opportunities</b>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/front/images/partnership_12.png') }}" alt="Partnership" class="img-fluid"/>
                </div>
                <div class="col-lg-6">
                    <p class="partner_quote"><b><i>Hydro<span style="font-size:30px;">&#174;</span> Wound offers more than just top-quality products. For businesses interested in manufacturing their own fully professional filter cartridges, we provide:</b></i></p>
                    <ul style="list-style:disc;" class="my-4">
                        <li class="mb-2"><strong>Raw Materials:</strong> High-grade yarn and cores.</li>
                        <li class="mb-2"><strong>Manufacturing Machines:</strong> State-of-the-art machinery for producing wound filter cartridges.</li>
                        <li class="mb-2"><strong>Technical Support:</strong>Comprehensive guidance and support to ensure successful production.</li>
                    </ul>
                    <div class="theme-btn justify-content-start ms-4">
                      <button href="#" type="button" id="banner_btn" class="btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <p>Enquire Now</p>
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->
    
    
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