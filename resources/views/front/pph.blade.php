@include('layouts.frontheader')


<!-- banner -->
<section class="contact-banner position-relative">
     <img src="{{ asset('public/front/images/PPH_One_Piece_Filter_Housing.jpg
') }}" alt="Highflow Banner" class="img-fluid mobile-img" />
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/PPH-PVDF.jpg') }}" alt="Highflow Banner" height="300px" class="img-fluid product-page-header"/>
    <div class="contact-head  product-contact-head">
      <h1>PPH One Piece Filter Housing</h1>
      <div class="set-content">
      <p>PPH one-piece filter housing offers durable, industrial filtration solutions made from polypropylene. 
</p>
      </div>
         <div class="theme-btn justify-content-start">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal" 
                        data-bs-target=" #inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
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
                                                <input type="text" placeholder="" required name="name" id="name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                                                <label for="name">Name</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" id="product_name" required name="product_name" value="PPH-PVDF One Piece Filter" readonly/>
                                                <label for="floatingSelect">Product Name</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="email" placeholder="" name="email" required id="email" />
                                                <label for="inputField">Email</label>
                                                <span class="error-message" id="email-error"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" name="phone" required id="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"  />
                                                <label for="">Contact No.</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" name="city" required id="city" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"/>
                                                <label for="">City</label>
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
      <!--<nav aria-label="breadcrumb">-->
      <!--                  <ol class="breadcrumb">-->
      <!--                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
      <!--                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Products</a></li>-->
      <!--                      <li class="breadcrumb-item active" aria-current="page">PPH-PVDF One Piece Filter</li>-->
      <!--                  </ol>-->
      <!--              </nav>-->
    </div>
  </div>
</section>
<!-- banner end -->
<section class="pph">
    <div class="container">
          <p class="category-content m-add">These housings are engineered to withstand corrosion, chemicals, and high temperatures, making them dependable in challenging industrial environments Their streamlined construction simplifies installation and maintenance by reducing the number of components, ensuring consistent and efficient filtration. </p>
        <!--<div class="theme-btn justify-content-start ">-->
        <!--              <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"-->
        <!--                data-bs-target="" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"-->
        <!--                    aria-hidden="true"></i></span>-->
        <!--                <p>Enquire Now</p>-->
        <!--              </button>-->
        <!--</div>-->
        
         <div class="row align-items-center pt-4">
          <div class="col-lg-6">
                <div class="manufacturing">
            <div> <img src="{{ asset('public/front/images/PPH-PVDF-One-Piece-Filter_1.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
            <div> <img src="{{ asset('public/front/images/PPH-PVDF-One-Piece-Filter_2.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
            <div> <img src="{{ asset('public/front/images/PPH-PVDF-One-Piece-Filter_3.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
            <div> <img src="{{ asset('public/front/images/PPH-PVDF-One-Piece-Filter_4.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
            <div> <img src="{{ asset('public/front/images/PPH-PVDF-One-Piece-Filter_5.jpg') }}" alt="Manufacturing" class="img-fluid" /></div>
        </div>
          </div>
          <div class="col-lg-6">
           <table class="table table-bordered mb-0">
          <tbody>
            <tr>
              <td style="color: #fff;background: #023f88; width: 150px; ">Model</td>
              <td style="color: #fff;background: #023f88;"><p>MMP: Company, F: One-piece filter housing</td>
            </tr>
            <tr style="background: #F3F3F3;">
              <td> Filter Bag Size</td>
                <td>
                 <ul>
                  <li>1: φ7"x17"L(φ180x430mm)</li>
                  <li>2: φ7"x32"L(φ180x810mm)</li>
                  <li>3: φ4"x15"L(φ105x380mm)</li>
                  <li>4: φ6"x20"L(φ150x510mm)</li>
                  <li>6: φ7"x22"L(φ180x560mm)</li>
                 </ul>
                </td>
            </tr>
            <tr>
             <td>Upper Cover Style</td>
              <td>
                 <ul>
                  <li>A: Screw top cover, B: Lifting ring gland</li>
                  <li>AX: Screw top cover, the water inlet and</li>
                  <li>outlet are union type.</li>
                 </ul>
                </td>
            </tr>
         <tr style="background: #F3F3F3;">
             <td>Main Material</td>
              <td><ul><li>PPH</li></ul></td>
            </tr>
         <tr>
             <td>Upper Cover Joint</td>
              <td><ul>
                  <li>D: Internal tooth PT1/2</li>
                  <li>(with plug, without pressure gauge),</li>
                  <li>R: External tooth PT1/2 connector</li>
                  <li>(with pressure gauge),</li>
                  <li>E: Exhaust valve (with pressure gauge)</li>
                 </ul>
              </td>
            </tr>
         <tr style="background: #F3F3F3;">
             <td>Protection Switch</td>
              <td>
                  <ul>
                  <li>None: Without protection switch, K: Install protection</li>
                  <li>switch (micro switch type)</li>
                 </ul>
              </td>
            </tr>
        
          </tbody>
        </table>
          </div>
           <p class="category-content m-add">These filter housings find widespread application across various industries including pharmaceuticals, food and beverage production, water treatment, and chemical processing Their versatility is reflected in the range of sizes and configurations available, accommodating different types of filter cartridges and flow rates to suit specific operational requirements In pharmaceutical settings, these housings play a crucial role in maintaining purity during drug manufacturing processes. 
 </p>
        
        <p class="category-content m-add">They also contribute to the cleanliness and safety of products in the food and beverage industry by effectively removing contaminants Water treatment facilities rely on them to ensure the quality of drinking water, while chemical processing plants use them to separate impurities and maintain operational efficiency.
</p>
        
         <p class="category-content m-add">The strength of PPH one-piece filter housings lies not only in their material resilience but also in their straightforward design that minimizes the risk of leaks and enhances overall reliability By integrating durability with ease of use, these housing support essential industrial processes where cleanliness and consistency are paramount Their ability to withstand harsh conditions and to provide efficient filtration makes them indispensable components in modern manufacturing and processing operations. </p>
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
@include('layouts.frontfooter')
<script>
    $('#productinquirysubmit').on('click', function(event) {
        let isValid = true;

        // Name validation
        // if ($('#name').val().trim() === '') {
        //     $('#name').siblings('.error-message').text('This field is required.');
        //     isValid = false;
        // }
        
        // Name validation
        let name = $('#name').val().trim();
        if (name === '' || containsSpamContent(name)) {
            $('#name').siblings('.error-message').text('Enter valid name.');
            isValid = false;
        }

        // Email validation
        let email = $('#email').val().trim();
        let emailValidation = validateEmail(email);
        if (!emailValidation.valid) {
            $('#email-error').text(emailValidation.message);
            isValid = false;
        } else {
            $('#email-error').text('');
        }

        // Phone validation
        if ($('#phone').val().trim().length < 10) {
            $('#phone').siblings('.error-message').text('Enter a valid phone number.');
            isValid = false;
        }
        
        // Message validation
        let message = $('#message').val().trim();
        if (message === '' || containsSpamContent(message)) {
            $('#message').siblings('.error-message').text('Enter valid message.');
            isValid = false;
        }

        // City validation
        let city = $('#city').val().trim();
        if (city === '' || containsSpamContent(city)) {
            $('#city').siblings('.error-message').text('Enter valid city name.');
            isValid = false;
        }
        
        // // Message validation
        // if ($('#message').val().trim() === '') {
        //     $('#message').siblings('.error-message').text('This field is required.');
        //     isValid = false;
        // }
        // // City validation
        // if ($('#city').val().trim() === '') {
        //     $('#city').siblings('.error-message').text('This field is required.');
        //     isValid = false;
        // }

        // reCAPTCHA validation
        var recaptchaResponse = grecaptcha.getResponse();
        if (recaptchaResponse.length === 0) {
            $('#captcha-error').text('Please verify the CAPTCHA.');
            isValid = false;
        } else {
            $('#captcha-error').text('');
        }

        // Stop form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        } else {
            $('#productinquiry').submit();
        }
    });

    // Clear error messages on input
    $('input, textarea').on('input', function() {
        $(this).siblings('.error-message').text('');
    });

    // Email validation function
    function validateEmail(email)
     {
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var spamPatterns = [
                // /^[a-zA-Z]{8,}[0-9]{3,}@/,
                /^[0-9]+@/,
                /(temp-mail|10minutemail|mailinator|guerrillamail|yopmail|throwawaymail|form-check.online|nuself.eu|seismologiomail.com|ru|mailport.lat)/i,
                /^(test|demo|example|noreply|fake|admin|info|random|dummy)/i,
                /^(.)(\1){5,}@/
            ];
    
            if (!emailPattern.test(email)) {
                return { valid: false, message: "Please enter a valid email address." };
            }
    
            for (let pattern of spamPatterns) {
                if (pattern.test(email)) {
                    return { valid: false, message: "This email is not allowed." };
                }
            }
    
            return { valid: true, message: "" };
        }
        // Spam content validation
        function containsSpamContent(input) {
        let cleaned = input.trim().toLowerCase();
    
        // Reject if only special characters or if special characters repeated more than once
        if (/^[\s\*\#@!$%^&()_+\-=\[\]{};':"\\|,.<>\/?`~]+$/.test(cleaned)) {
            return true;
        }
    
        // Reject if same special character used more than once continuously
        if (/([#@!$%^&*()_+={}\[\]|\\:;"'<>,.?/~`-])\1{1,}/.test(cleaned)) {
            return true;
        }
    
        // Block content with just link(s) and short spammy content
        if (/^(https?:\/\/|www\.|<a\s+href=)/i.test(cleaned) && cleaned.length < 40) {
            return true;
        }
    
        // Custom spammy content patterns
        const spamPatterns = [
            /<a\s+href=/i,
            /snag\s+your\s+free/i,
            /hs=[a-z0-9]{20,}/i,
            /xxx/i,
            /^\*{3,}$/  // Only asterisks
        ];
    
        return spamPatterns.some(pattern => pattern.test(cleaned));
    }

</script>