@include('layouts.frontheader')

<!-- banner -->
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/Zero Foaming.jpg') }}" alt="Highflow Banner" width="100%" height="300px" />
    <div class="contact-head position-absolute">
      <h1>Zero Foaming Yarn</h1>
      <!--<nav aria-label="breadcrumb">-->
      <!--                  <ol class="breadcrumb">-->
      <!--                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
      <!--                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Products</a></li>-->
      <!--                      <li class="breadcrumb-item active" aria-current="page">Zero Foaming Polypropylene Yarn</li>-->
      <!--                  </ol>-->
      <!--              </nav>-->
      <div class="set-content">
      <p>Zero Foaming is a specialized material designed to enhance Wound Filtration processes by minimizing or eliminating foam formation.</p>
      </div>
       <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#inquiryModal" data-bs-whatever="@mdo">
                      <span>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                      </span>
                      <p>Enquire Now</p>
                    </button>
        </div>
        
        <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Inquire Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('productinquiry') }}" id="productinquiry">
                                @csrf
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="" required name="name" id="name" />
                                        <label for="name">Name</label>
                                        <span class="error-message"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="" id="product_name" required name="product_name" value="Zero Foaming Polypropylene Yarn" readonly/>
                                        <label for="floatingSelect">Product Name</label>
                                        <span class="error-message"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="email" placeholder="" name="email" required id="email" />
                                        <label for="inputField">Email</label>
                                        <span class="error-message"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="" name="phone" required id="phone" />
                                        <label for="">Contact No.</label>
                                        <span class="error-message"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required cols="" rows="" class="w-100" placeholder=""></textarea>
                                        <label for="">Message</label>
                                        <span class="error-message"></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6Lcrw_4pAAAAAKFnbxxXtyUZUa12DlHursCRjuak" id="captcha_productinquiry"></div>
                                        <span class="error-message" id="captcha-error"></span>
                                      </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center theme-btn">
                            <button type="button" id="productinquirysubmit" class="btn-add">
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><p>Send message</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </div>
</section>
<!-- banner end -->

<section class="manufacturing_area">
    <div class="container">
        <h2 class="inner-head">Zero Foaming Polypropylene Yarn </h2>
        <p class="category-content m-add"><b>mmp’s</b> manufactured Zero Foaming Polypropylene Yarn popularly known as FILATO 22, is a specialized material designed to enhance Wound Filtration processes by minimizing or eliminating foam formation. Foam formation is problematic as it reduces filtration efficiency, causes contamination, and leads to operational challenges. This property of Zero Foaming, along with other advantageous characteristics, makes it highly suitable for various industrial applications, particularly in filtration systems.</p>
       
        
      <div class="row align-items-center pt-4">
          <div class="col-lg-6">
                <div class="manufacturing">
            <div> <img src="{{ asset('public/front/images/Zero-Foaming-Polypropylene-Yarn_1.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
            <!--<div> <img src="{{ asset('public/front/images/Zero-Foaming-Polypropylene-Yarn_2.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>-->
            <div> <img src="{{ asset('public/front/images/Zero-Foaming-Polypropylene-Yarn_3.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
        </div>
          </div>
          <div class="col-lg-6">
             <h3><b class="blog-head">Zero Foaming Yarn Manufacturing Process</b></h3>
             <h4 class="short_title">Raw Material Selection</h4>
             <p class="short_dis">High-quality polypropylene resin with specific additives that inhibit foam formation is used.</p>
             <h4 class="short_title">Melt Spinning</h4>
             <p class="short_dis">The polypropylene is melted and extruded through a spinneret to form continuous filaments.</p>
             <h4 class="short_title">Cooling and Solidification</h4>
             <p class="short_dis">The filaments are rapidly cooled to solidify them uniformly.</p>
             <h4 class="short_title">Drawing and Orientation</h4>
             <p class="short_dis">The filaments are drawn to align polymer molecules, improving strength and nullifying foam formation.</p>
             <h4 class="short_title">Surface Treatment</h4>
             <p class="short_dis">Hydrophobic and anti-foaming treatments with FDA approved chemicals are applied to the fiber surface.</p>
             <h4 class="short_title">Quality Control</h4>
             <p class="short_dis">Fibers are tested for mechanical properties, foam resistance, and overall performance.</p>
             <h4 class="short_title">Packaging</h4>
             <p class="short_dis">The fibers are securely packaged to protect them during transport and storage and thereafter being used to manufacture our FILATO 22 Zero Foaming Polypropylene Yarn.</p>
          </div>
      </div>
    </div>
    <div class="filter_products">
        <video autoplay muted loop playsinline width="100%">
         <source src="{{ asset('public/front/images/filter_gif.mp4') }}" type="video/mp4">
    </video>
    </div>
</section>

<section class="characteristics">
    <div class="container">
        <h3 class="blog-head text-center">Zero Foaming Yarn Manufacturer</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Resistance.svg') }}" alt="Resistance" class="img-fluid" />
                <h3>Chemical Resistance</h3>
                 <p class="short_dis">Our Zero Foaming Polypropylene Yarn is highly resistant to a wide range of chemicals, including acids, alkalis, and organic solvents which makes it suitable for diverse filtration applications.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Safety.svg') }}" alt="Safety" class="img-fluid" />
                <h3>Non-toxicity and Food Safety</h3>
                 <p class="short_dis">Zero Foaming Polypropylene is non-toxic and can be used in food and beverage filtration, as well as in pharmaceutical applications.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Stability.svg') }}" alt="Stability" class="img-fluid" />
                <h3>Thermal Stability</h3>
                 <p class="short_dis">While not suitable for very high-temperature applications, <b>mmp’s</b> zero foaming polypropylene performs well in a moderate temperature range (typically up to 60°C). Our Zero Foaming Polypropylene Yarn retains its structural integrity and filtration efficiency within this range. 
</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Mechanical.svg') }}" alt="Mechanical" class="img-fluid" />
                <h3>Mechanical Strength</h3>
                 <p class="short_dis">Our Polypropylene yarn has excellent tensile strength, allowing it to withstand the winding process and operational pressures without breaking or deforming.
</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Density.svg') }}" alt="Low Density" class="img-fluid" />
                <h3>Low Density</h3>
                 <p class="short_dis">The low density of our Zero Foaming Yarn contributes to a lighter filter cartridge, which can be advantageous in handling and installation.
</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Elasticity.svg') }}" alt="Elasticity" class="img-fluid" />
                <h3>Flexibility and Elasticity</h3>
                 <p class="short_dis">The yarn is flexible enough to be tightly wound around the filter core and has sufficient elasticity to maintain its position and structural integrity during use.
</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Cost-effectiveness.svg') }}" alt="Cost-effectiveness" class="img-fluid" />
                <h3>Cost-effectiveness</h3>
                 <p class="short_dis">FILATO 22 Zero Foaming Polypropylene Yarn is relatively inexpensive compared to other materials, making it a cost-effective choice for disposable filter cartridges.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Consistent.svg') }}" alt="Consistent" class="img-fluid" />
                <h3>Consistent Quality and Performance</h3>
                 <p class="short_dis">Modern manufacturing processes ensure that our polypropylene yarn is produced with consistent diameter and density, crucial for uniform filtration performance.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Wide.svg') }}" alt="Wide" class="img-fluid" />
                <h3>Wide Range of Filtration Capabilities</h3>
                 <p class="short_dis">Our Zero Foaming Polypropylene yarn can be engineered to achieve various levels of filtration efficiency, from coarse to fine, by adjusting the yarn thickness, winding pattern, and density.
</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/Absorption.svg') }}" alt="Absorption" class="img-fluid" />
                <h3>Moisture Absorption</h3>
                 <p class="short_dis">Adequate moisture absorption of our Zero Foaming Polypropylene Yarn helps maintain the efficiency of the filter and prevents microbial growth, enhancing the filters lifespan and reliability.
</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                 <img src="{{ asset('public/front/images/UVResistance.svg') }}" alt="UVResistance" class="img-fluid" />
                <h3>UV Resistance</h3>
                 <p class="short_dis">Our Polypropylene has good resistance to ultraviolet (UV) light, which is beneficial for outdoor or high-exposure environments.</p>
            </div>
            
        </div>
        <p class="pt-4"><b>mmp’s</b> FILATO 22 Zero Foaming Polypropylene Yarn is an advanced solution designed to tackle foam formation challenges in wound filtration and other applications. Its unique properties make it highly effective, improving operational efficiency, product quality, and overall cost-effectiveness. This versatile, durable yarn is essential for applications where foam control is crucial.</p>
    </div>
</section>

@include('layouts.frontfooter')
<script>
    $('#productinquirysubmit').on('click', function () {
        // Check if the form is valid
        if ($('#productinquiry')[0].checkValidity()) {
            // Validate reCAPTCHA
            var recaptchaResponse = grecaptcha.getResponse();
            if (recaptchaResponse.length === 0) {
                $('#captcha-error').text('Please verify the CAPTCHA.');
            } else {
                $('#captcha-error').text('');
                $('#productinquiry').submit();
            }
        } else {
            $('.error-message').text('This field is required.');
        }
    });

    // Clear error messages on input
    $('input, textarea').on('input', function () {
        $(this).siblings('.error-message').text('');
    });
</script>