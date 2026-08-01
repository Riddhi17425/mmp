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
    <title>High-Quality Filter Cartridges for Clean Water & Air</title>
    <link rel="icon" type="image/png" href="https://mmpyarn.com/public/front/images/favicon-mmp.png">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- swiper slider link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- fancybox css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- css links  -->
    <link rel="stylesheet" href="{{ asset('public/front/font/stylesheet.css') }}">
    <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    text-decoration: none;
}

:root {
    --para_black: #5E5F6E;
    --wb-black: #131316;
    --wb_white: #fff;
    --wb-border: #E9E9E9;
    --wb_grey: #BDBDBD;
    --wb_dark_blue: #17367F;
    --wb_bg_blue:#DAEBFF;
    --wb_border_blue:#5AAAFF;
}

body {
    /*font-family: 'Geist';*/
    font-family: Muli;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 28px;
    color: var(--para_black);
}

.error{
    color:red;
}
.custom_head{font-size: 39px;font-weight: 600;text-align: center;margin:60px 0 40px 0;color: var(--wb-black);line-height:46px; }

/* form */
.form_wrapper{background:url('../public/front/images/bg_img.png') var(--wb_dark_blue);
    background-repeat: no-repeat;
    background-position: right bottom;
    padding: 60px 0;
    width: 100%;
    background-size: auto;
}
.form_wrapper input:focus-visible,.form_wrapper select:focus-visible{outline: 0;}
.form_wrapper option{background-color: var(--wb_white); color: var(--wb-black);}
.custom_label{color: var(--wb_white);font-weight: 500;}
.custom_input {
    margin: 5px 0 24px;
    padding: 10px;
    border: 1px solid var(--wb-border);
    border-radius: 4px;
    font-size: 16px;
    height: 50px;
    background-color: var(--wb_dark_blue);
    color: var(--wb_white);
}
select{
    background-image: url("{{ asset('public/front/images/dropdown_arrow.svg')}}");
    background-position: right 30px center;
    background-repeat: no-repeat;
    background-size: auto 50%;
    outline: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
}
.submit-button {
    display: block;
    padding: 10px 40px;
    border: none;
    border-radius: 4px;
    font-size: 20px;
    cursor: pointer;
    border:1px solid var(--wb_dark_blue);
    transition: all 0.5s ease;
}
.submit-button:hover{background-color: var(--wb_dark_blue);color: var(--wb_white);transition: all 0.5s ease;border:1px solid var(--wb_white) ;}
/* form */

.bottom_space{margin-bottom: 75px;}
.custom_h2{
    font-size: 25px;
    font-weight: 600;
    color:var(--wb_grey);
    text-align: center;
    line-height: normal;
}
.swiper {
    width: 100%;
    height: 100%;
  }
  
.industry .swiper img{
    width:100%;
}
  
.swiper-slide {
    background-position: center;
    background-size: cover;
    width: 90%;
    height: 90%;
  }
  
.swiper-pagination{
    --swiper-pagination-bottom: 0px;
}
.partner .swiper-slide{width: auto !important;}

.prod_1,.prod_2,.prod_3,.prod_4,.prod_5,.prod_6,.prod_8,.prod_9{
    background-color: var(--wb_bg_blue);
    border: 1px solid var(--wb_dark_blue);
    border-radius: 6px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
.prod_info{padding: 24px 40px 0 40px;}
.prod_2 img, .prod_3 img{height: 400px;}
.prod_7{display: flex;align-items: center; background-color: var(--wb_bg_blue);border: 1px solid var(--wb_dark_blue);border-radius: 6px;text-align: center;padding: 42px;}
.prod_8{background-image: url(../public/front/images/cartridge-Photoroom\ 1.png);background-repeat: no-repeat;background-position: right bottom;padding-bottom: 260px;background-size: cover;}
.prod_9{background-image: url(../public/front/images/hfpf_prod.png);background-repeat: no-repeat;background-position:bottom;background-size: contain;padding-bottom: 260px;}
.wrapper{display: flex ;gap: 16px;}
.prod_8 img, .prod_9 img{display: none;}
.enq_btn{color: var(--wb_white);text-decoration: none;padding: 0px 15px 5px; margin-bottom:10px; background-color: var(--wb_dark_blue);border:1px solid var(--wb_dark_blue) ; border-radius: 6px;display: inline-block;font-size: 18px;transition: all 0.5s ease;}
.enq_btn:hover{color: var(--wb_dark_blue); border: 1px solid var(--wb_dark_blue);background-color: transparent; transition: all 0.5s ease;}
/* about css starts */
.about_wrapper{border-left: 1px solid var(--wb_border_blue);padding: 0 50px;position: relative;}
.about_wrapper::before{content:""; position: absolute; background-image: url(../public/front/images/blue_border.png);width: 10px; height: 100%; left:-6px;top:10%; background-repeat: no-repeat;}
.about_wrapper span{font-size: 16px;color: var(--wb_dark_blue);}
.about_img{position: relative;}
.vid_btn{position: absolute; top:35%;left: 35%;}
/* about css end */

/* specs css starts */
.specs_wrapper{display: flex;gap: 30px;justify-content: center;}
.specs{padding: 30px 38px 0; border: 1px solid var(--wb_border_blue);border-radius: 6px;text-align: center;}
.specs p{font-size: 24px;font-weight: 700;color:var(--wb-black);}
.specs span{color: var(--wb_dark_blue);}
/* specs css starts */

.customer .swiper-slide .swiper-wrapper{
    width: 300px;
    height: 300px;}
.customer .swiper-slide{
    border: 1px solid #ddd !important;
    width: 250px !important;
    height: 150px !important;
    object-fit: contain !important;
    padding: 19px 17px !important;
    border-radius: 22px !important;
}

/*.industry{background-color: var(--wb_bg_blue);padding: 100px 0 100px 60px;}*/
.industry{
    background:url('../public/front/images/bg_img.png') var(--wb_bg_blue);
    background-repeat: no-repeat;
    background-position: left bottom;
    padding: 76px 0 76px 60px;background-size: auto;
    background-blend-mode: overlay;
}

.my_indus .swiper {
    margin: 100px auto;
    width: 100%;
    height: 300px;
  }

  .my_indus .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }
  /* .my_indus .swiper-slide img{position: relative;} */
  .overlay {
    position: absolute; 
   top: 0; 
   /* background: rgba(0, 0, 0, 0.5);  */
   width: 100%;
   height:100%;
   transition: .5s ease;
   opacity:0;
   color: var(--wb_white);
   font-size: 18px;
   text-align: center;
   padding:20px;
   display:none;
 }
 /*.my_indus .swiper-slide:hover .overlay {*/
 /*   opacity: 1;*/
 /* }*/

.certificates{margin-bottom: 100px;}
.certi_slider .swiper-pagination-bullet{
    width:32px;height:6px;background-color: var(--wb_dark_blue);border-radius: 10px;
}


/* footer css */
.footer_wrapper{display: flex; gap: 50px;margin-bottom: 30px;}
.main_foot{background:url('../public/front/images/bg_img.png') var(--wb_dark_blue);
    background-repeat: no-repeat;
    background-position: right bottom;
    padding: 60px 100px;
    width: 100%;
    background-size: contain;
    color: var(--wb_white);
    border-radius: 6px;
    text-align: center;
}
.contacts{display:flex;justify-content:center;}
.main_foot a{text-decoration: none; color: var(--wb_white);}
.social_icons{
    display: flex;
    gap:24px;
    align-items: center;
    margin-top: 14px;
    justify-content: center;
}
.sec_foot{background-color: var(--wb_dark_blue);color: var(--wb_white); padding: 100px 45px;border-radius: 6px;text-align: center;}
.sec_foot h4{font-size: 44px;font-weight: 500;margin-bottom: 34px;text-align: center;line-height: normal;}
.sec_foot a{color: var(--wb_dark_blue);text-decoration: none;padding: 12px 26px; background-color: var(--wb_white);border-radius: 6px;display: inline-block;font-size: 20px;transition: all 0.5s ease; border:1px solid var(--wb_dark_blue);}
.sec_foot a:hover{background-color: var(--wb_dark_blue);color: var(--wb_white);transition: all 0.5s ease;border:1px solid var(--wb_white) ;transition: all 0.5s ease;}
       
       
       
       
@media only screen and (max-width: 1919px) {
  .prod_7{padding: 10px;}
  .prod_9,.prod_8{padding-bottom: 240px;}
  
}

@media only screen and (max-width: 1529px) {
    /*.custom_head{font-size: 60px;line-height: 71px;}*/
    .prod_2 img, .prod_3 img{height: 300px;}
    .prod_7{padding: 0;}
  }

 @media only screen and (max-width: 1365px) {
  /*.custom_head{font-size: 52px;line-height: 64px;}*/
  /*.custom_h2{font-size:28px;}*/
  .prod_7{padding: 10px;}
  .prod_9,.prod_8{padding-bottom: 216px;}
  .prod_info {padding: 24px 26px 0 26px;}
  }
 /*@media only screen and (max-width: 1279px) {*/
 /* .custom_h2{font-size:24px;}*/
 /* .prod_7{padding: 0px;}*/
 /* .specs{padding: 30px 20px;}*/
 /* .contacts div{margin-bottom: 10px;}*/
 /* }*/
  @media only screen and (max-width: 1279px) {
    .custom_head{font-size: 38px;line-height: 45px;}
    .custom_input{margin: 10px 0 20px;}
    .custom_h2{font-size: 20px;}
    .prod_info {padding: 24px 20px 0 20px;}
    .prod_7{flex-direction: column-reverse;}
    .prod_2 img, .prod_3 img {height: 160px;}
    .specs_wrapper{flex-wrap: wrap;}
    .specs {padding: 30px 25px 20px;}
    .footer_wrapper{flex-direction: column;}
   .prod_8, .prod_9{flex-direction: row;} 
    .wrapper{flex-direction: column;}
  }
  @media only screen and (max-width: 991px) {
    .custom_head{font-size: 32px;line-height: 43px; text-align: center;}
    .sec_foot h4{font-size: 32px; line-height: 43px;}
    .prod_8,.prod_9{background-image: none;padding-bottom: 0px; flex-direction:column;}
    .prod_8 img, .prod_9 img{display: block;margin:0 auto;}
  }
  @media only screen and (max-width: 575px) {
    .custom_head{margin-bottom: 25px;}
    .bottom_space{margin-bottom: 40px;}
    .form_wrapper{background-image: none;}
    .prod_2 img, .prod_3 img{height: 360px;}
    .prod_8,.prod_9{background-image: none;padding-bottom: 0px;}
    .prod_8 img, .prod_9 img{display: block;}
    .about_wrapper{border: none; padding: 0;}
    .about_wrapper::before{display: none;}
    .vid_btn{top: 30%;left: 30%;}
    .industry{padding: 50px 0 50px 10px;}
    .swiper-creative .swiper-slide{overflow: inherit !important;}
    .certificates{margin-bottom: 80px;}
    .main_foot{padding: 60px 10px;}
    .sec_foot{padding: 70px 24px;}
    .contacts{flex-direction:column;}
    .industry{background-image:none;}
  }
  @media only screen and (max-width: 479px){
      .vid_btn{top: 20%;left: 25%;}
  }

    </style>


</head>

<body>
    <!-- header -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5P83LKH6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main>
        <section class="heading mt-5">
            <div class="container text-center">
                <img src="{{ asset('public/front/images/Logo_mmp.svg')}}" alt="mmp">
                <h1 class="custom_head">In-House Manufacturing of Major Products with Precision and Accuracy</h1>
            </div>
        </section>
        <section class="form_wrapper bottom_space" id="inquiry">
            <div class="container">
                <form id="inquiry-form"  action="{{ route('landing-store') }}"   method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="custom_label" for="fname">Name *</label><br>
                            <input type="text" name="fname" class="custom_input w-100"  oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');"><br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="custom_label" for="mail">Email Id *</label><br>
                            <input type="email" name="email" class="custom_input w-100" ><br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="custom_label" for="phone">Contact No *</label><br>
                            <input type="tel" name="contact_number" class="custom_input w-100"  maxlength="15" oninput="this.value = this.value.replace(/[^0-9+]/g, '').slice(0, 15);"><br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="custom_label" for="product_type">Product Type *</label><br>
                            <select id="product_type" name="product_type" class="custom_input w-100" >
                                <option value="">Select type</option>
                                <option value="DREF Spinning Yarn">DREF Spinning Yarn</option>
                                <option value="Zero Foaming Yarn ">Zero Foaming Yarn </option>
                                <option value="Melt Blown Filter Cartridges">Melt Blown Filter Cartridges</option>
                                <option value="Wound Filter Cartridges">Wound Filter Cartridges</option>
                                <!--<option value="Oceanic Melt Blown Filter Cartridges">Oceanic Melt Blown Filter-->
                                <!--    Cartridges</option>-->
                                <option value="Core for Filter Cartridge">Core for Filter Cartridge</option>
                                <option value="Wound Filter Production Machine">Wound Filter Production Machine</option>
                                <option value="PP Pleated Filter Cartridges">PP Pleated Filter Cartridges</option>
                                <option value="Pleated Filter Bags">Pleated Filter Bags</option>
                                <option value="Pleated Cartridges">Pleated Cartridges</option>
                                <option value="Conventional Filter Bags">Conventional Filter Bags</option>
                                <option value="Dust Collector Filter Cages">Dust Collector Filter Cages</option>
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label class="custom_label" for="message">Message</label><br>
                            <input type="text" id="message" name="message" maxlength="300" class="custom_input w-100">
                        </div>
                        
                           <div class="col-lg-12 mb-2">
                        <div class="form-row">
                            <div class="g-recaptcha" data-sitekey="6Lcrw_4pAAAAAKFnbxxXtyUZUa12DlHursCRjuak"></div>
                        </div>
                        <p id="recaptcha-error" class="error" for="g-recaptcha-response" style="display:none;">Please verify the reCAPTCHA</p>
                    </div>
                        <div>
                            <input type="submit" value="Submit" class="submit-button">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="partner bottom_space">
            <div class="container">
                <h2 class="custom_h2 mb-3">YOUR TRUSTED PARTNER FOR QUALITY FILTRATION SOLUTIONS</h2>
                <img src="{{ asset('public/front/images/partner-img.png')}}" alt="partners" class="img-fluid bottom_space">
                <h2 class="custom_h2 mb-4">Our Brands</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/brand_6.png')}}" alt="mtex" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/brand_5.png')}}" alt="hydro wound" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/brand_4.png')}}" alt="lagoon" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/brand_3.png')}}" alt="oceanic" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/brand_2.png')}}" alt="pyoorote" class="img-fluid">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/brand_1.png')}}" alt="pleatex" class="img-fluid">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="products bottom_space">
            <div class="container-fluid">
                <h1 class="custom_head">Our Water Filtration Products</h1>
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 mb-4">
                        <div class="prod_1 mb-3">
                            <div class="prod_info">
                                <h2 class="custom_h2 text-dark">DREF Spinning Yarn</h2>
                                <p>High-performance filtration yarn for superior water clarity.</p>
                                <a href="#inquiry" class="enq_btn">Enquire Now</a>
                            </div>
                            <img src="{{ asset('public/front/images/dref_prod.png')}}" alt="dref" class="img-fluid">
                        </div>
                        <div class="prod_6 mb-3">
                            <div class="prod_info">
                                <h2 class="custom_h2 text-dark">Zero Foaming Yarn</h2>
                                <p>Foam-reducing agent optimizing wound filtration.</p>
                                <a href="#inquiry" class="enq_btn">Enquire Now</a>
                            </div>
                            <img src="{{ asset('public/front/images/zfy_prod.png')}}" alt="dref" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
                        <div class="wrapper mb-3">
                            <div class="prod_2">
                                <div class="prod_info">
                                    <h2 class="custom_h2 text-dark">Oceanic Melt Blown Filter Cartridges</h2>
                                    <p>Oceanic® NSF-certified filters are made of high-density virgin polypropylene and are designed for safe water filtering.</p>
                                    <a href="#inquiry" class="enq_btn">Enquire Now</a>
                                </div>
                                <img src="{{ asset('public/front/images/omb_prod.png')}}" alt="dref" class="img-fluid">
                            </div>
                            <div class="prod_3">
                                <div class="prod_info">
                                    <h2 class="custom_h2 text-dark">Melt Blown Filter Cartridges</h2>
                                    <p>Melt Blown Filter Cartridges or PP Spun Filters are designed for higher efficiency and improved filtration.</p>
                                    <a href="#inquiry" class="enq_btn">Enquire Now</a>
                                </div>
                                <img src="{{ asset('public/front/images/mbf_prod.png')}}" alt="dref" class="img-fluid">
                            </div>
                        </div>
                        <div class="prod_7 mb-3">
                            <img src="{{ asset('public/front/images/wfcm_prod.png')}}" alt="dref" class="img-fluid">
                            <div class="prod_info">
                                <h2 class="custom_h2 text-dark">Wound Filter Cartridge Machine</h2>
                                <p><strong>MMP</strong> is a leading Indian manufacturer of wound filter production machines, tailored to global market needs. Our advanced machine efficiently produces customizable wound filters in various sizes and materials.</p>
                                <a href="#inquiry" class="enq_btn">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
                        <div class="wrapper  mb-3">
                            <div class="prod_4">
                                <div class="prod_info">
                                    <h2 class="custom_h2 text-dark">PP Pleated Filter Cartridges</h2>
                                    <p>Pyoorite filters use virgin polypropylene for efficient filtration.</p>
                                    <a href="#inquiry" class="enq_btn">Enquire Now</a>
                                     <!--<p>For efficient filtering, virgin polypropylene is used to make pyoorite filters.</p>-->
                                </div>
                                <img src="{{ asset('public/front/images/pppfc_prod.png')}}" alt="dref" class="img-fluid">
                            </div>
                            <div class="prod_5">
                                <div class="prod_info">
                                    <h2 class="custom_h2 text-dark">Wound Filter Cartridges</h2>
                                    <p>Wound filters offer enhanced pollutant removal and deep filtration.</p>
                                    <a href="#inquiry" class="enq_btn">Enquire Now</a>
                                    <!--<p>The Wound Filter Cartridges are precisely developed to provide improved pollutant removal and greater depth filtration.</p>-->
                                </div>
                                <img src="{{ asset('public/front/images/wfc_prod.png')}}" alt="dref" class="img-fluid">
                            </div>
                        </div>
                        <div class="wrapper  mb-3">
                            <div class="prod_8">
                                <div class="prod_info">
                                    <h2 class="custom_h2 text-dark">Core for Filter Cartridge</h2>
                                    <!--<p>Lorem ipsum dolor sit amet consectetur. Aliquet tempor gravida quis viverra integer-->
                                    <!--    ornare et</p>-->
                                    <p>Robust filter cartridge cores in Polypropylene, Stainless Steel, and Tinned Steel.</p>
                                    <a href="#inquiry" class="enq_btn">Enquire Now</a>
                                        <img src="{{ asset('public/front/images/cfc_prod.png')}}" alt="dref" class="img-fluid">
                                </div>
                                 <!--<img src="{{ asset('public/front/images/cfc_prod.png')}}" alt="dref" class="img-fluid"> -->
                            </div>
                            <div class="prod_9">
                                <div class="prod_info">
                                    <h2 class="custom_h2 text-dark">High Flow Pleated Filter</h2>
                                    <!--<p>Lorem ipsum dolor sit amet consectetur. Aliquet tempor gravida quis viverra integer-->
                                    <!--    ornare et</p>-->
                                    <p>Multi-layered, chemically resistant, high-capacity pleated filter for superior flow.</p>
                                    <a href="#inquiry" class="enq_btn">Enquire Now</a>
                                        <img src="{{ asset('public/front/images/hfpf_prod_2.png')}}" alt="dref" class="img-fluid">
                                </div>
                                 <!--<img src="{{ asset('public/front/images/hfpf_prod_2.png')}}" alt="dref" class="img-fluid"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                        <div class="about_wrapper">
                            <span>Cleaner world for a Greener Tomorrow</span>
                            <h2 class="custom_head text-start mt-0">Filtration For Sustainable Future</h2>
                            <p><strong>mmp</strong> is driven by the purpose of improving the quality of life by innovating sustainable
                                cleaning technologies for air and water. Our manufacturing operations are spread across
                                India, with facilities in Kolkata, Mumbai, Chennai, and Ahmedabad.
                            </p>
                            <p>At our Kolkata plant, we have developed expertise in manufacturing Polypropylene String
                                Wound Filters, Melt Blown Filters, and Dust Collector Bags for industrial air
                                filtration. In Mumbai, we produce a wide range of air filtration products. Ahmedabad
                                serves as our manufacturing hub for Polypropylene String Wound Filters, Polypropylene
                                Melt Blown Filters, and DREF Friction Spun Yarn.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="about_img">
                            <img src="{{ asset('public/front/images/about_img.png')}}" alt="" class="img-fluid ">
                            <a class="vid_btn" data-fancybox="video-gallery" href="https://mmpfilter.com/public/front/images/MMP-Video-0607.mp4">
                                <img src="{{ asset('public/front/images//vid_btn.png')}}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container-fluid">
                <h2 class="custom_head">Why Choose Us?</h2>
                <div class="specs_wrapper bottom_space">
                    <div class="specs">
                        <img src="{{ asset('public/front/images/spec_1.svg')}}" alt="" class="img-fluid mb-3">
                        <p>More than <span>3 decades</span> of expertise</p>
                    </div>
                    <div class="specs">
                        <img src="{{ asset('public/front/images/spec_2.png')}}" alt="" class="img-fluid mb-3">
                        <p><span>NSF</span> Certified Melt Blown Filter Cartridges</p>
                    </div>
                    <div class="specs">
                        <img src="{{ asset('public/front/images/spec_3.svg')}}" alt="" class="img-fluid mb-3">
                        <p>Majority of our products are <span>Mfg. in-house</span></p>
                    </div>
                    <div class="specs">
                        <img src="{{ asset('public/front/images/spec_4.svg')}}" alt="" class="img-fluid mb-3">
                        <p><span>1st in India</span> to achieve melt blown filter
                            cartridge production.</p>
                    </div>
                    <div class="specs">
                        <img src="{{ asset('public/front/images/spec_5.svg')}}" alt="" class="img-fluid mb-3">
                        <p>Wide range of <span> quality filtration products</span> under single roof.</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="customer bottom_space">
            <div class="container-fluid">
                <h2 class="custom_h2 mb-4">Our Customers</h2>
                <div class="swiper customerSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg1.png')}}" alt="Reliance Industries Limited">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg2.png')}}" alt="Otsuka Holdings">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg3.png')}}" alt="Ramdev Chemical Industries">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg4.png')}}" alt="Adani">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg5.png')}}" alt="Indian Oil">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg6.png')}}" alt="ONGC">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg7.png')}}" alt="HP">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg8.png')}}" alt="Murugappa Group">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg9.png')}}" alt="RSWM Limited">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg10.png')}}" alt="RSPL">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg11.png')}}" alt="Allied Blenders & Distillers">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg12.png')}}" alt="Bayer">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('public/front/images/mg13.png')}}" alt="GFL - Gujarat Fluorochemicals Limited ">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <section class="industry bottom_space">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="industry_wrapper">
                            <h2 class="custom_head text-start mt-0">Your Industry, Our Solutions</h2>
                            <p><strong>mmp</strong> Filtration provides tailored filtration solutions for various industries. Our expertise and product range address industry-specific challenges, ensuring optimal performance and environmental protection.</p>
                            <p>Our expertise extends across a diverse range of industries, each with its unique filtration challenges. From the demanding environments of manufacturing and pharmaceuticals to the critical needs of food and beverage processing, we deliver tailored solutions. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="swiper my_indus">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_1.jpg')}}" class="img-fluid" />
                                    <div class="overlay">Maintaining the level of purity and quality is absolutely essential in the pharmaceutical industry. Filtration, a critical component of the pharmaceutical process, ensures that pharmaceutical products are safe and reliable.</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_2.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_3.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_4.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_5.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_6.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_7.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_8.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('public/front/images/indus_9.jpg')}}" class="img-fluid" />
                                    <div class="overlay">My Name is John</div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="certificates">
            <div class="container">
                <h2 class="custom_head">Quality and Standards, Our Certifications</h2>
                <div class="swiper certi_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="{{ asset('public/front/images/certi_1.png')}}">
                                <img src="{{ asset('public/front/images/certi_1.png')}}" class="img-fluid" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="{{ asset('public/front/images/certi_2.png')}}">
                                <img src="{{ asset('public/front/images/certi_2.png')}}" class="img-fluid" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="{{ asset('public/front/images/certi_3.png')}}">
                                <img src="{{ asset('public/front/images/certi_3.png')}}" class="img-fluid" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="{{ asset('public/front/images/certi_4.jpg')}}">
                                <img src="{{ asset('public/front/images/certi_4.jpg')}}" class="img-fluid" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="{{ asset('public/front/images/certi_5.jpg')}}">
                                <img src="{{ asset('public/front/images/certi_5.jpg')}}" class="img-fluid" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" href="{{ asset('public/front/images/certi_6.jpg')}}">
                                <img src="{{ asset('public/front/images/certi_6.jpg')}}" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer_wrapper">
                <div class="main_foot">
                    <img src="{{ asset('public/front/images/ft_logo.png')}}" alt="mmp" class="mb-2">
                    <p><strong>mmp</strong> Innovates Sustainable Filtration Solutions For Air And Water With The Goal Of Enhancing
                        Quality Of Life.</p>
                    <div class="contacts">

                        <div class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                                <path d="M24.55 27.1796C21.375 30.3671 14.075 28.2171 8.30002 22.3796C2.52502 16.5421 0.250021 9.24209 3.43752 6.06709L6.91252 2.57959L13.625 9.29209L11.125 11.7921C10.6227 12.3019 10.3411 12.9889 10.3411 13.7046C10.3411 14.4203 10.6227 15.1073 11.125 15.6171L15 19.4921C15.5104 19.9982 16.2 20.2821 16.9188 20.2821C17.6375 20.2821 18.3272 19.9982 18.8375 19.4921L21.3375 16.9921L28.05 23.7046L24.55 27.1796Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                            </svg>
                            <a href="tel:+919830030614" class="ms-2" title="919830030614" alt="919830030614">+91 9830030614</a>
                        </div>

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none" class="ms-3">
                                <path d="M6.64999 15.6172V2.49219H23.35V15.6172" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M10.225 8.45459H19.775" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M10.225 13.2297H19.775" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M6.65 4.87964L1.875 9.65464V10.8421V28.7421H28.125V10.8421V9.65464L23.35 4.87964" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                <path d="M1.875 10.8423L15 23.9673L28.125 10.8423" stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                            </svg>
                            <a href="mailto:sales@mmpfilter.com" class="ms-2" title="sales@mmpfilter.com" alt="sales@mmpfilter.com">sales@mmpfilter.com</a>
                        </div>

                    </div>
                    <div class="mt-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 30 31" fill="none">
                            <path d="M7.54062 19.7263L15.0001 28.1172L22.4596 19.7263C28.1808 13.2907 23.6117 3.11719 15.0001 3.11719C6.38847 3.11719 1.81935 13.2907 7.54062 19.7263Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.75 13.1172C18.75 15.1883 17.0711 16.8672 15 16.8672C12.929 16.8672 11.25 15.1883 11.25 13.1172C11.25 11.0461 12.929 9.36719 15 9.36719C17.0711 9.36719 18.75 11.0461 18.75 13.1172Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <a href="https://www.google.com/maps/place/34c,+Grey+St,+Raja+Nabakrishna+Street,+Sovabazar,+Darjipara,+Shobhabazar,+Kolkata,+West+Bengal+700005/@22.5954936,88.3657081,17z/data=!4m6!3m5!1s0x3a027633a36d6fcb:0x30b918d03a92edee!8m2!3d22.5954936!4d88.3657081!16s%2Fg%2F11v06pksdn" target="_blank">34 C, Sri Aurobindo Sarani Kolkata – 700005
                            West Bengal, India</a>
                    </div>
                    <div class="social_icons">
                        <a href="https://www.facebook.com/mmpfiltration" target="_blank"><img src="{{ asset('public/front/images/ft_insta.svg')}}" alt="instagram"></a>
                        <a href="https://www.instagram.com/mmpfiltration/" target="_blank"><img src="{{ asset('public/front/images/ft_fb.svg')}}" alt="facebook"></a>
                        <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQHilSqrjkZ_kQAAAYuQLTYg99cIu0_PGNw_AlhgxZG1CrZSmxC_CqVln6gn7SxtqA02ph3A-JHlDUln3GGFrrjx704gvihNwYBhH2jIsifmterM3kn2jOOK0g-bZ9c-Cf9Qze8=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F101063774%2Fadmin%2Ffeed%2Fposts%2F" target="_blank"><img src="{{ asset('public/front/images/ft_li.svg')}}" alt="linked in"></a>
                        
                    </div>
                </div>
                <div class="sec_foot">
                    <h4>Your Filtration Solutions Start Here</h4>
                    <a href="#inquiry">Request A Quote</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- cdn links  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- bootstrap links  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=API_KEY"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>

    <script>
   $(document).ready(function () {
    // Custom method for letters only
    $.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Please enter letters only.");

    $("#inquiry-form").validate({
        rules: {
            fname: {
                required: true,
                lettersOnly: true
            },
            email: {
                required: true,
                email: true
            },
            contact_number: {
                required: true,
                minlength: 10,
                maxlength: 15,
                digits: true
            },
            product_type: {
                required: true
            },
        },
        messages: {
            fname: {
                required: "Please enter your name.",
                lettersOnly: "Please enter letters only."
            },
            email: {
                required: "Please enter an email address.",
                email: "Please enter a valid email address."
            },
            contact_number: {
                required: "Please enter your phone number.",
                minlength: "Please enter at least 10 digits.",
                maxlength: "Please enter no more than 15 digits.",
                digits: "Please enter only digits."
            },
            product_type: {
                required: "Please select a product type."
            },
        },
        
        errorPlacement: function(error, element) {
            if (element.attr("name") === "g-recaptcha-response") {
                error.appendTo("#recaptcha-error");
            } else {
                error.insertAfter(element);
            }
        },
            submitHandler: function(form) {
                if (grecaptcha.getResponse().length === 0) {
                    $("#recaptcha-error").show();
                } else {
                    form.submit();
                }
            }
    });
});

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 45,
            freeMode: true,
            loop: true,
            allowTouchMove: true,
            autoplay: {
                delay: 1000,
            },
            breakpoints: {
                1920: {
                    slidesPerView: 5,
                },
                1536: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
                1366: {
                    slidesPerView: 4,
                },
                1280: {
                    slidesPerView: 4,
                },
                1199: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                991:{
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                765: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                575: {
                    slidesPerView: 2,
                    spaceBetween: 40,  
                },
                479: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                // 375: {
                //     slidesPerView: 1,
                //     spaceBetween:5,
                // }

            },


        });
    </script>
    <script>
        var swiper = new Swiper(".customerSwiper", {
            slidesPerView: "auto",
            spaceBetween: 20,
            freeMode: true,
            loop: true,
            allowTouchMove: true,
            autoplay: {
                delay: 1000,
            },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            breakpoints: {
            //     1920: {
            //         slidesPerView: 7,
            //     },
            //     1536: {
            //         slidesPerView: 6,
            //     },
            //     1366: {
            //         slidesPerView: 5,
            //     },
            //     1280: {
            //         slidesPerView: 5,
            //     },
            //     1199: {
            //         slidesPerView: 4,
            //         spaceBetween: 50,
            //     },
            //     991: {
            //         slidesPerView: 3.5,
            //         spaceBetween: 40,
            //     },
            //     765: {
            //         slidesPerView: 3.5,
            //         spaceBetween: 40,
            //     },
            //     575: {
            //         slidesPerView: 2,
            //         spaceBetween: 40,
            //     },
                479: {
                    spaceBetween: 20,
                },
                375: {
                    spaceBetween: 10,
                }

            },

        });
    </script>
    <script>
        var swiper = new Swiper(".certi_slider", {
            slidesPerView: 3,
            spaceBetween: 20,
            freeMode: false,
            allowTouchMove: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                991: {
                    spaceBetween: 30,
                },
                375:{
                    slidesPerView: 1,
                }

            },
        });
    </script>
    <script>
        var swiper = new Swiper(".my_indus", {
            slidesPerView: 2,
            spaceBetween: 5,
            grabCursor: true,
            loop: true,
            // autoplay: {
            //     delay: 3000,    
            // },
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: false,
                    // translate: [0, 0, -500],
                    translate: ["-110%", 0, -500],
                },
                next: {
                    // translate: ["100%", 0, 0],
                    translate: ["110%", 0, 0],
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },

        });
    </script>
</body>

</html>