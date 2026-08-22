@include('layouts.frontheader')



<section class="hero position-relative">

    <!-- Hero Slider -->

    <div class="hero-slider">

        <!-- Slide 1: PP Yarn -->

        <div>

            <div class="hero_wrapper">

                <!-- <img loading="lazy"src="{{ asset('public/newpublic/images/hero_1.png') }}" alt="mmp" class="img-fluid hero_img"> -->

                <picture>

                    <source media="(max-width:465px)" srcset="{{ asset('public/newpublic/images/pp-yarn-m.webp') }}">

                    <img loading="eager" src="{{ asset('public/newpublic/images/PP-YARN-EXCELLENCE.webp') }}" alt="ppyarn" class="img-fluid hero_img">

                </picture>

                <div class="hero_content">

                    <div class="hero_title">

                        <h2 class="title_80">PP YARN </h2>

                        <p class="text-white">100% Premium virgin yarn for filter cartridges.<br> Durable,

                            chemical-resistant, and efficient.</p>

                        <div class="btn_wrapper">

                            <a href="{{ url('contact') }}" class="btn_3">

                                <span>Contact Us</span>

                                <span></span>

                            </a>

                            <a href="{{ url('product-detail/polypropylene-yarns')}}" class="btn_3">

                                <span>View Product</span>

                                <span></span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Slide 2: Water Filter Cartridges -->

        <div>

            <div class="hero_wrapper">

                <picture>

                    <source media="(max-width:465px)" srcset="{{ asset('public/newpublic/images/water-filter-m.webp') }}">

                    <img loading="eager" src="{{ asset('public/newpublic/images/Water-Filter-Cartridges.webp') }}" alt="water filter" class="img-fluid hero_img">

                </picture>

                <div class="hero_content">

                    <div class="hero_title">

                        <h2 class="title_80">Water Filter Cartridges</h2>

                        <p class="text-white">High-performance water filter cartridges for <b>industrial</b>,<br> <b>commercial</b>

                            and <b>domestic</b> applications.</p>

                        <div class="btn_wrapper">

                            <a href="{{ url('contact') }}" class="btn_3">

                                <span>Contact Us</span>

                                <span></span>

                            </a>

                            <a href="{{ url('product/water-filter-cartridges') }}" class="btn_3">

                                <span>View Product</span>

                                <span></span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Slide 3: Air Filters -->

        <div>

            <div class="hero_wrapper">

                <picture>

                    <source media="(max-width:465px)" srcset="{{ asset('public/newpublic/images/air-filter-m.webp') }}">

                    <img loading="eager" src="{{ asset('public/newpublic/images/Air-Filter-Cartridges.webp') }}" alt="air filter" class="img-fluid hero_img">

                </picture>

                <div class="hero_content">

                    <div class="hero_title">

                        <h2 class="title_80">Air Filters Cartridges</h2>

                        <p class="text-white">High-performance <b>air filter system</b> for <b>industrial</b><br> safety

                            and

                            a <b>clean atmosphere</b>.</p>

                        <div class="btn_wrapper">

                            <a href="{{ url('contact') }}" class="btn_3">

                                <span>Contact Us</span>

                                <span></span>

                            </a>

                            <a href="{{ url('product/air-filter-cartridges') }}" class="btn_3">

                                <span>View Product</span>

                                <span></span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Slide 4: Wound Filter Machine -->

        <div>

            <div class="hero_wrapper">

                <picture>

                    <source media="(max-width:465px)" srcset="{{ asset('public/newpublic/images/Wound-Filter-Machine-m.webp') }}">

                    <img loading="eager" src="{{ asset('public/newpublic/images/Wound_Filter_Machine.webp') }}" alt="Wound Filter Machine" class="img-fluid hero_img">

                </picture>

                <div class="hero_content">

                    <div class="hero_title">

                        <h2 class="title_80">Wound Filter Machine</h2>

                        <p class="text-white">Simplify production with <b>custom winding</b>, easy<br> operation and

                            <b>efficient filter output</b>.

                        </p>

                        <div class="btn_wrapper">

                            <a href="{{ url('contact') }}" class="btn_3">

                                <span>Contact Us</span>

                                <span></span>

                            </a>

                            <a href="{{ url('wound-filter-cartridge-machine') }}" class="btn_3">

                                <span>View Product</span>

                                <span></span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



    </div>

    <!-- Custom Pagination -->

    <div class="custom-pagination">

        <div class="pagination-item active" data-slide="0">

            <div class="pagination-content">

                <div class="pagination-text">

                    <div class="pagination-number">01</div>

                    <div class="pagination-title">PP <br>Yarn</div>

                </div>

                <div class="pagination-arrow">

                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <rect width="36" height="36" rx="18" fill="#17367F" />

                        <path d="M15.3535 23.9336L20.6458 18.0002L15.3535 12.0668" stroke="white" stroke-linecap="round"

                            stroke-linejoin="round" />

                    </svg>



                </div>

            </div>

            <div class="progress-bar"></div>

        </div>



        <div class="pagination-item" data-slide="1">

            <div class="pagination-content">

                <div class="pagination-text">

                    <div class="pagination-number">02</div>

                    <div class="pagination-title">Water Filter <br> Cartridges</div>

                </div>

                <div class="pagination-arrow"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"

                        xmlns="http://www.w3.org/2000/svg">

                        <rect width="36" height="36" rx="18" fill="#17367F" />

                        <path d="M15.3535 23.9336L20.6458 18.0002L15.3535 12.0668" stroke="white" stroke-linecap="round"

                            stroke-linejoin="round" />

                    </svg>

                </div>

            </div>

            <div class="progress-bar"></div>

        </div>



        <div class="pagination-item" data-slide="2">

            <div class="pagination-content">

                <div class="pagination-text">

                    <div class="pagination-number">03</div>

                    <div class="pagination-title">Air Filters<br> Cartridges</div>

                </div>

                <div class="pagination-arrow"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"

                        xmlns="http://www.w3.org/2000/svg">

                        <rect width="36" height="36" rx="18" fill="#17367F" />

                        <path d="M15.3535 23.9336L20.6458 18.0002L15.3535 12.0668" stroke="white" stroke-linecap="round"

                            stroke-linejoin="round" />

                    </svg>

                </div>

            </div>

            <div class="progress-bar"></div>

        </div>



        <div class="pagination-item" data-slide="3">

            <div class="pagination-content">

                <div class="pagination-text">

                    <div class="pagination-number">04</div>

                    <div class="pagination-title">Wound Filter <br> Machine</div>

                </div>

                <div class="pagination-arrow"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"

                        xmlns="http://www.w3.org/2000/svg">

                        <rect width="36" height="36" rx="18" fill="#17367F" />

                        <path d="M15.3535 23.9336L20.6458 18.0002L15.3535 12.0668" stroke="white" stroke-linecap="round"

                            stroke-linejoin="round" />

                    </svg>

                </div>

            </div>

            <div class="progress-bar"></div>

        </div>

    </div>

</section>

<!-- patent section        -->

<section class="our_patent_section">

    <div class="ym-container">

        <div class="our_patent_wrapper">

            <div>
                <p class="mb-0">Our Registered <br>Brands</p>
            </div>

            <div>

                <div class="patent_slider">

                    <div>

                        <img loading="lazy" src="{{ asset('public/newpublic/images/hw.png') }}" alt="hydro wound" class="img-fluid">

                    </div>

                    <div>

                        <img loading="lazy" src="{{ asset('public/newpublic/images/lagon.png') }}" alt="hydro wound" class="img-fluid">

                    </div>

                    <div>

                        <img loading="lazy" src="{{ asset('public/newpublic/images/ocean.png') }}" alt="hydro wound" class="img-fluid">

                    </div>

                    <div>

                        <img loading="lazy" src="{{ asset('public/newpublic/images/mtex.png') }}" alt="hydro wound" class="img-fluid">

                    </div>

                    <div>

                        <img loading="lazy" src="{{ asset('public/newpublic/images/Pleatex.png') }}" alt="hydro wound" class="img-fluid">

                    </div>

                    <div>

                        <img loading="lazy" src="{{ asset('public/newpublic/images/pyoorote.png') }}" alt="hydro wound" class="img-fluid">

                    </div>

                </div>

            </div>

            <div>

                <img loading="lazy" src="{{ asset('public/newpublic/images/nsf.webp') }}" alt="" class="img-fluid">

            </div>

        </div>

    </div>

</section>

<section class="home_about mt-100">

    <div class="ym-container">

        <div class="title_head">

            <h1 class="title_54">Advanced Filtration Solutions – <br>Air & Water Filter Cartridges</h1>

        </div>

        <div class="home_about_grid">

            <div class="home_abt_left">

                <img loading="lazy" src="{{ asset('public/newpublic/images/home_about.png') }}" alt="Advanced Filtration Solutions" class="img-fluid h-100">

            </div>

            <div class="home_abt_right">

                <h3 class="title_30">More than 3 decades of expertise in industrial Filter Cartridges</h3>

                <div class="home_abt_para">

                    <div class="col">

                        <p>Since 1994, <b>mmp</b> Filtration has pioneered the industry by providing

                            precision-engineered air and water solutions built for the most challenging

                            environments.</p>

                        <p>Leveraging decades of expertise, we manufacture a diverse range of high-performance

                            products that ensure operational excellence and durability.</p>

                        <p>Our commitment to innovation and quality has established us as a global leader in

                            protecting industrial processes through advanced filtration technology.</p>

                    </div>

                    <div class="col">

                        <p>In 2003, <b>mmp</b> Filtration Pvt. Ltd. was established to meet the growing business

                            demands with enhanced efficiency and cost reduction. Presently, <b>mmp</b> Filtration

                            stands as one of India's leading manufacturers, specializing in advanced air and

                            water filtration solutions. Our commitment to customers is clear – when you partner

                            with <b>mmp</b>, you can expect quality, expertise, and a high level of customer

                            satisfaction.</p>

                    </div>

                </div>

                <div class="home_abt_counter">

                    <div class="counter_box">

                        <div class="title_60">500<span>+</span></div>

                        <p class="mb-0">Enterprise Clients</p>

                    </div>

                    <div class="counter_box">

                        <div class="title_60">25</div>

                        <p class="mb-0">Countries Served</p>

                    </div>

                    <div class="counter_box">

                        <div class="title_60">1M+</div>

                        <p class="mb-0">Filters Delivered</p>

                    </div>

                    <div class="counter_box">

                        <div class="title_60">30</div>

                        <p class="mb-0">Years Experience</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- water filtration products -->

<section class="home_water mt-100">

    <div class="ym-container">

        <div class="title_head">

            <div class="row top_title">

                <div class="col-lg-11">

                    <h2 class="title_54">Water Filtration Products</h2>

                    <p class="mb-0 pl-60">

                        At <b>mmp</b> Filtration, we manufacture complete water filtration products under

                        one

                        roof—from

                        <b>PP yarn and PP cores to winding machines and wound filter cartridges</b>.

                        Our yarn is precisely wound on the core to create consistent depth filtration with

                        reliable

                        performance.

                        We also offer <strong>NSF-certified</strong> melt blown filter cartridges, ensuring trusted quality

                        for

                        demanding

                        water filtration applications.

                        With <b>mmp</b>, you get everything you need—components and finished cartridges from a

                        single,

                        dependable manufacturer.

                    </p>

                </div>

                <div class="col">

                    <a href="{{ url('product/water-filter-cartridges') }}" class="btn_1">View All</a>

                </div>

            </div>

        </div>

        <div class="home_water_wrapper">

            <div class="home_water_slider">

                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/melt-blown-filter-cartridges.jpg') }}"

                                     alt="Melt Blown Filter Cartridges"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/melt-blown-filter-cartridges') }}">

                                    <h4 class="title_20">Melt Blown Filter Cartridges</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/wound-filter-cartridges%20(1).jpg') }}"

                                     alt="Wound Filter Cartridges"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/wound-filter-cartridges') }}">

                                    <h4 class="title_20">Wound Filter Cartridges</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/Core-for-filter-Cartridges.jpg') }}"

                                     alt="Core for Filter Cartridge"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/core-for-filter-cartridge') }}">

                                    <h4 class="title_20">Core for Filter Cartridge</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/wound-filter-machine.jpg') }}"

                                     alt="Wound Filter Production Machine"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/wound-filter-machine') }}">

                                    <h4 class="title_20">Wound Filter Production Machine</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/highflow-product.jpg') }}"

                                     alt="High Flow Pleated Filter"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/high-flow-pleated-filter') }}">

                                    <h4 class="title_20">High Flow Pleated Filter</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/pp-pleated-filter-cartridges.jpg') }}"

                                     alt="PP Pleated Filter Cartridges"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/pp-pleated-filter-cartridges') }}">

                                    <h4 class="title_20">PP Pleated Filter Cartridges</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/PPH-PVDF-One-Piece-Filter_2.jpg') }}"

                                     alt="PPH One Piece Filter Housing"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/pph-one-piece-filter-housing') }}">

                                    <h4 class="title_20">PPH One Piece Filter Housing</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/mrb-product-img.jpg') }}"

                                     alt="Resin Bonded Filter Cartridges"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/resin-bonded-filter-cartridges') }}">

                                    <h4 class="title_20">Resin Bonded Filter Cartridges</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/mab-product.jpg') }}"

                                     alt="Grooved Resin Bonded Filter Cartridges"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/grooved-resin-bonded-filter-cartridges') }}">

                                    <h4 class="title_20">Grooved Resin Bonded Filter Cartridges</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ asset('public/Product_Images/anti_microbial_cartidage.png') }}"

                                     alt="Anti-Microbial Wound Filter Cartridge"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/anti-microbial-wound-filter-cartridges') }}">

                                    <h4 class="title_20">Anti-Microbial Wound Filter Cartridge</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>



            </div>

        </div>

    </div>

</section>

<!-- air filtration products -->

<section class="home_water mt-100">

    <div class="ym-container">

        <div class="title_head">

            <div class="row top_title">

                <div class="col-lg-11">

                    <h2 class="title_54">Air Filtration Products</h2>

                    <p class="mb-0 pl-60">

                        We manufacture a complete range of air filtration products for industrial dust

                        collection and pollution control—all in-house for consistent quality and dependable

                        performance.

                        From <b>pleated cartridges and pleated filter bags to dust collector filter bags and

                            filter cages</b>,

                        our products are engineered to improve dust capture, maintain airflow, and extend

                        service life in demanding plant conditions.

                    </p>

                </div>

                <div class="col">

                    <a href="{{ url('product/air-filter-cartridges') }}" class="btn_1">View All</a>

                </div>

            </div>

        </div>

        <div class="home_water_wrapper">

            <div class="home_water_wrapper">

            <div class="home_water_slider">

                @foreach($data['airProducts'] as $item)

                    @php

                        $imgSrc = asset('public/front/images/no-image.png');



                        if (!empty($item->product_image)) {

                            $images = explode(',', $item->product_image);

                            $firstImage = trim($images[0]);



                            if (filter_var($firstImage, FILTER_VALIDATE_URL)) {

                                $imgSrc = $firstImage;

                            } else {

                                $imgSrc = asset('public/Product_Images/' . $firstImage);

                            }

                        }

                    @endphp



                    <div>

                        <div class="home_water_slide">

                            <div>

                                <img loading="lazy"

                                     src="{{ $imgSrc }}"

                                     alt="{{ $item->product_alt ?? $item->product_name }}"

                                     class="img-fluid">

                            </div>

                            <div>

                                <a href="{{ url('product-detail/' . $item->producturl) }}">

                                    <h4 class="title_20">{{ $item->product_name }}</h4>

                                </a>

                                <br>

                                <button type="button" class="btn_3 btn_2 homepd">

                                    <span>Enquire Now</span>

                                    <span></span>

                                </button>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        </div>

    </div>

</section>



<!-- industries we serve -->

<section class="mt-100 home_iws">

    <div class="ym-container">

        <div class="title_head">

            <div class="row top_title">

                <div class="col-lg-11">

                    <h2 class="title_54 text-white">Industries We Serve:</h2>

                    <p class=" pl-60 text-white">

                        <b>mmp</b> Filtration is among <b>India’s trusted filter cartridge manufacturers,

                            exporters,

                            and suppliers</b>, serving critical filtration needs across industries.

                        Our products support air and water filtration applications where consistent quality,

                        dependable performance, and process protection are essential.

                    </p>

                    <p class="mb-0 pl-60 text-white">

                        Combining technical expertise with practical manufacturing capability, we offer a wide

                        range of filtration solutions including wound filter cartridges, melt blown cartridges,

                        PP pleated cartridges, spun cartridges, resin bonded filters, sediment filters,

                        high-flow pleated filters, and more.

                    </p>

                </div>

            </div>

        </div>

        <div class="iws_1">

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-pharma.svg') }}" alt="Pharma" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Pharma</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('pharma-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-chemical.svg') }}" alt="Chemical" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Chemical</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('chemical-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-water-treatment.svg') }}" alt="Water-Treatment" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Water-Treatment</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('water-treatment-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-food&bevrages.svg') }}" alt="Food & Beverages" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Food & Beverages</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('food-and-beverage-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-textile.svg') }}" alt="Textile" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Textile</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('textile-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <div class="iws_2">

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-dairy.svg') }}" alt="Dairy" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Dairy</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('dairy-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-oil&gas.svg') }}" alt="Oil & Gas" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Oil & Gas</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('oilandgas-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-cement.svg') }}" alt="Cement" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Cement</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('cement-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-poer-plant.svg') }}" alt="Power Plant" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Power Plant</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('power-plant-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <div class="home_iws_slider">



            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-pharma.svg') }}" alt="Pharma" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Pharma</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('pharma-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-chemical.svg') }}" alt="Chemical" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Chemical</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('chemical-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-water-treatment.svg') }}" alt="Water-Treatment" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Water-Treatment</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('water-treatment-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-food&bevrages.svg') }}" alt="Food & Beverages" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Food & Beverages</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('food-and-beverage-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-textile.svg') }}" alt="Textile" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Textile</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('textile-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>



            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-dairy.svg') }}" alt="Dairy" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Dairy</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('dairy-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-oil&gas.svg') }}" alt="Oil & Gas" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Oil & Gas</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('oilandgas-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-cement.svg') }}" alt="Cement" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Cement</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('cement-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="iws_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/iws-poer-plant.svg') }}" alt="Power Plant" height="70" width="70">

                <div class="d-flex align-items-center justify-content-between">

                    <h5 class="title_20 text-white">Power Plant</h5>

                    <div class="styled-wrapper">

                        <a href="{{ url('power-plant-industry') }}">

                            <button class="button">

                                <div class="button-box">

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                    <span class="button-elem">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"

                                            viewBox="0 0 26 26" fill="none">

                                            <path

                                                d="M7 1L18.7115 12.3538C18.8025 12.4367 18.8751 12.5368 18.9248 12.6479C18.9744 12.7591 19 12.8789 19 13C19 13.1211 18.9744 13.2409 18.9248 13.3521C18.8751 13.4632 18.8025 13.5633 18.7115 13.6462L7 25"

                                                stroke="#00A3FF" stroke-width="2" stroke-linecap="round"

                                                stroke-linejoin="round"></path>

                                        </svg>

                                    </span>

                                </div>

                            </button>

                        </a>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- our usps -->

<section class="mt-100">

    <div class="ym-container">

        <div class="title_head">

            <h2 class="title_54">Our USPs</h2>

        </div>

        <div class="usp_grid">

            <div class="usp_grid_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/usp1.svg') }}" alt="usp" height="60" width="60">

                <p class="mb-0 title_24">More than 3 Decades of Experience in Filtration Solutions</p>

            </div>

            <div class="usp_grid_box">

                <img style="object-fit: contain; width:fit-content" loading="lazy" src="{{ asset('public/newpublic/images/nsf.webp') }}" alt="usp" height="60">

                <p class="mb-0 title_24">NSF Certified Products</p>

            </div>

            <div class="usp_grid_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/usp3.svg') }}" alt="usp" height="60" width="60">

                <p class="mb-0 title_24">Experienced and Dedicated Team</p>

            </div>

            <div class="usp_grid_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/usp4.svg') }}" alt="usp" height="60" width="60">

                <p class="mb-0 title_24">Global Service Provider</p>

            </div>

            <div class="usp_grid_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/usp5.svg') }}" alt="usp" height="60" width="60">

                <p class="mb-0 title_24">Customizable Filtration Solutions</p>

            </div>

            <div class="usp_grid_box">

                <img loading="lazy" src="{{ asset('public/newpublic/images/usp6.svg') }}" alt="usp" height="60" width="60">

                <p class="mb-0 title_24">Wide Industry Coverage</p>

            </div>

        </div>

        <!-- <div class="home_usp_slider">

            <div>

                <div class="usp_grid_box">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/usp1.svg') }}" alt="usp" height="60" width="60">

                    <p class="mb-0 title_24">More than 3 Decades of Experience in Filtration Solutions</p>

                </div>

            </div>

            <div>

                <div class="usp_grid_box">

                    <img style="object-fit: contain; width:fit-content" loading="lazy" src="{{ asset('public/newpublic/images/nsf.webp') }}" alt="usp" height="60">

                    <p class="mb-0 title_24">NSF Certified Products</p>

                </div>

            </div>

            <div>

                <div class="usp_grid_box">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/usp3.svg') }}" alt="usp" height="60" width="60">

                    <p class="mb-0 title_24">Experienced and Dedicated Team</p>

                </div>

            </div>

            <div>

                <div class="usp_grid_box">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/usp4.svg') }}" alt="usp" height="60" width="60">

                    <p class="mb-0 title_24">Global Service Provider</p>

                </div>

            </div>

            <div>

                <div class="usp_grid_box">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/usp5.svg') }}" alt="usp" height="60" width="60">

                    <p class="mb-0 title_24">Customizable Filtration Solutions</p>

                </div>

            </div>

            <div>

                <div class="usp_grid_box">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/usp6.svg') }}" alt="usp" height="60" width="60">

                    <p class="mb-0 title_24">Wide Industry Coverage</p>

                </div>

            </div>

        </div> -->

    </div>

</section>

<!-- home cta -->

<section class="mt-100">

    <div class="ym-container">

        <div class="home_cta">

            <div>

                <p class="text-white">At <b>mmp</b> Filtration, we help industries lower filtration costs

                    without compromising performance. With in-house manufacturing and direct supply, you get

                    dependable quality, consistent specifications, and better pricing for bulk requirements.

                    Whether you need standard filter cartridges or application-specific solutions, our team

                    supports you with the right product selection and fast quotations.</p>

                <ul class="cta_list">

                    <li>Direct Manufacturer Pricing</li>

                    <li>Bulk & Project Order Support</li>

                    <li>Custom Sizes & Micron Options</li>

                </ul>

            </div>

            <div>

                <div class="home_cta_quote">

                    <p class="mb-0">Ready to optimize your filtration cost?</p>

                    <h3 class="title_56">Get a Free Quote</h3>

                    <button type="button" id="request_btn" class="btn_3">

                        <span>Request Wholesale Pricing</span>

                        <span></span>

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>

<script>

        document.addEventListener("DOMContentLoaded", function () {



            const request_btn = document.getElementById("request_btn");

            const enquiryPopup = document.getElementById("enqpoup");



            if (!request_btn || !whatsappPopup) return;



            // Open popup from header button

            request_btn.addEventListener("click", function (e) {



                e.preventDefault();

                enquiryPopup.classList.add("active");

            });



        });

    </script>


@if($data['reviewCount'] > 0)
<section class="home_rating mt-100">
    <div class="ym-container">
        <div class="home_rating_head">
            <h2 class="title_54">The Trust We've Earned</h2>

            <div class="overall_rating">
                <span class="rating_number">{{ $data['avgRating'] }}</span>

                <div class="rating_stars">
                    @for($i = 1; $i <= 5; $i++)
                        <span>★</span>
                    @endfor
                </div>

                <span class="rating_count">{{ $data['reviewCount'] }} reviews</span>
            </div>
        </div>

        <div class="home_water_slider" data-show="3">
            @foreach($data['reviews'] as $review)
                <div class="rating_card">
                    <div class="rating_card_top">
                        @if($review->image)
                        <img src="{{ asset('public/reviews/'.$review->image) }}" alt="{{ $review->customer_name }}">
                    @else
                        @php
                            $nameParts = explode(' ', trim($review->customer_name));
                            $initials = strtoupper(substr($nameParts[0] ?? '', 0, 1) . substr(end($nameParts), 0, 1));

                            // Generate a consistent color based on the name
                            $colors = ['#F87171','#FBBF24','#34D399','#60A5FA','#A78BFA','#F472B6','#FB923C','#4ADE80','#38BDF8','#C084FC'];
                            $colorIndex = crc32($review->customer_name) % count($colors);
                            $bgColor = $colors[$colorIndex];
                        @endphp
                        <div class="avatar-initials" style="background-color: {{ $bgColor }};">
                            {{ $initials }}
                        </div>
                    @endif
                        <div>
                            <h4>{{ $review->customer_name }}</h4>
                            <div class="card_star">
                                @for($i = 1; $i <= $review->rating; $i++)
                                    <span>★</span>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <!--<p>{{ $review->review_text }}</p>-->
                     <p class="review-text">
                        <span class="review-content">
                            {{ $review->review_text }}
                        </span>

                        <span class="read-more"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title="{{ $review->review_text }}">
                            Read More
                        </span>
                    </p>
                </div>
            @endforeach
        </div>
        
    </div>
</section>
@endif




<!-- customer sldier -->

<section class="mt-100">

    <div class="ym-container">

        <div class="title_head text-center">

            <h3 class="title_54 mx-auto">Our Customers</h3>

            <p class="mb-0 text-center">Trusted by India's largest enterprises and global corporations for critical

                filtration solutions</p>

        </div>

        <div class="home_customer">

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/otsuka.png') }}" alt="otsuka" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/ongc.png') }}" alt="ongc" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/hp.png') }}" alt="hp" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/murugappa.png') }}" alt="murugappa" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/rswm.png') }}" alt="rswm" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/abd.png') }}" alt="abd" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/gfl.png') }}" alt="gfl" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/ramdev.png') }}" alt="ramdev" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/rspl.png') }}" alt="rspl" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/indian-oil.png') }}" alt="indian-oil" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/reliance.png') }}" alt="reliance" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/adani.png') }}" alt="adani" class="img-fluid">

                </div>

            </div>

            <div>

                <div class="cus_slide">

                    <img loading="lazy" src="{{ asset('public/newpublic/images/bayer.png') }}" alt="bayer" class="img-fluid">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- home blog -->

<section class="mt-100">

    <div class="ym-container">

        <div class="title_head">

            <h2 class="title_54">Latest from Our Knowledge Hub</h2>

        </div>

        <div class="home_blogslider">

            @foreach($data['blog'] as $val)

            <div>

                <div class="home_blog_slide">

                    <div class="blog_card">

                        <div>

                            <img loading="lazy" src="{{ asset('public/blog/'.$val->image) }}" alt="{{ $val->alt_banner }}" class="img-fluid">

                        </div>

                        <div class="blog_card_info">

                            <h3 class="title_24">{{ $val->title }}</h3>

                            <p>{!! $val->short_description !!}</p>

                            <a href="{{ url('/blogdetail/'.$val->url)}}" target="_blank" class="btn_3 btn_2">

                                <span>Read More</span>

                                <span></span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>





<!-- modal home page video html srart -->



<style>



.modal_home_video .modal-backdrop.show {

    opacity: 0.7 !important;

    backdrop-filter: blur(5px);

    transition: opacity 0.4s ease;

}





.modal_home_video.fade .modal-dialog {

    transform: translateY(30px) scale(0.95);

    transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);

    opacity: 0;

}



.modal_home_video.show .modal-dialog {

    transform: translateY(0) scale(1);

    opacity: 1;

}





.modal_home_video .promoVideo {

    display: block;

    border-radius: 12px;

    box-shadow: 0 20px 50px rgba(0,0,0,0.3);

    opacity: 0;

    transition: opacity 0.8s ease-in-out;

}



.modal_home_video .promoVideo.video-ready {

    opacity: 1;

    border:2px solid white;

}

.avatar-initials {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 600;
    font-size: 24px;
    font-family: inherit;
    flex-shrink: 0;
    text-transform: uppercase;
}



</style>



<div class="modal fade modal_home_video" id="autoOpenModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl">

        <div class="modal-content" style="background: transparent; border: none;">

            <div class="modal-body p-0">

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"

                        style="position: absolute; right: 15px; top: 15px; z-index: 999; filter: invert(1) !important;"></button>



                <video muted loop playsinline class="w-100 d-none d-lg-block promoVideo" id="desktopVideo" preload="auto">

                    <source src="{{ asset('public/newpublic/images/mmp-filter-home-page-video.mp4') }}" type="video/mp4">

                    Your browser does not support the video tag.

                </video>



                <video muted loop playsinline class="w-100 d-lg-none promoVideo" id="mobileVideo" preload="auto" poster="{{ asset('public/newpublic/images/mmp-filter-home-page-video-phone.png') }}">

                    <source src="{{ asset('public/newpublic/images/mmp-filter-home-page-video-phone.mp4') }}" type="video/mp4">

                    Your browser does not support the video tag.

                </video>

            </div>

        </div>

    </div>

</div>





<script>

document.addEventListener("DOMContentLoaded", function() {

    const modalElement = document.getElementById('autoOpenModal');

    const videos = document.querySelectorAll('.promoVideo'); // Dono videos ko select kiya

    const myModal = new bootstrap.Modal(modalElement);



    // 1. Modal open delay

    setTimeout(() => {

        myModal.show();

    }, 1000);



    // 2. Jab modal show ho

    modalElement.addEventListener('shown.bs.modal', function() {

        videos.forEach(video => {

            // Sirf wahi video play hogi jo screen par visible hai

            if (window.getComputedStyle(video).display !== 'none') {

                video.play().then(() => {

                    video.classList.add('video-ready');

                }).catch(error => {

                    console.log("Autoplay blocked", error);

                });

            }

        });

    });



    // 3. Jab modal band ho

    modalElement.addEventListener('hidden.bs.modal', function() {

        videos.forEach(video => {

            video.pause();

            video.currentTime = 0;

            video.classList.remove('video-ready');

        });

    });

});

    </script>



<!-- modal home page vddeo script end-->





<script>

document.addEventListener("click", function (e) {

    const btn = e.target.closest(".homepd");

    if (!btn) return;



    e.preventDefault();



    const popup = document.getElementById("enqpoup");

    if (!popup) return;



    popup.classList.add("active");

});

</script>

<style>

.review-text{
    margin:0;
}

.review-content{
    display:block;
    overflow:hidden;
    line-height:28px;
    max-height:140px; 
    word-break:break-word;
    transition:.3s;
}

.read-more{
    display:none;
    color:#00a3ff;
    cursor:pointer;
    font-weight:600;
    margin-left:5px;
}

.tooltip-inner{
    max-width:350px;
    white-space:normal;
    text-align:left;
}

</style>

<script>

document.addEventListener("DOMContentLoaded", function () {

    // Bootstrap Tooltip
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
        new bootstrap.Tooltip(el);
    });

    function checkReviewHeight(){

        document.querySelectorAll(".review-text").forEach(function(item){

            let content = item.querySelector(".review-content");
            let readMore = item.querySelector(".read-more");

            // Save original height
            let originalHeight = content.style.maxHeight;

            // Remove max-height temporarily
            content.style.maxHeight = "none";

            let fullHeight = content.scrollHeight;

            // Restore 5 line height
            content.style.maxHeight = originalHeight || "140px";

            if(fullHeight > 145){
                readMore.style.display = "inline";
            }else{
                readMore.style.display = "none";
            }

        });

    }

    // First Load
    checkReviewHeight();

    // Window Resize
    window.addEventListener("resize", function(){
        checkReviewHeight();
    });

    // If Slick Slider Exists
    if(window.jQuery){

        $('.home_water_slider').on('init afterChange setPosition', function(){
            setTimeout(function(){
                checkReviewHeight();
            },100);
        });

    }

});

</script>

@include('layouts.frontfooter')

@include('layouts.frontfooterlinks')
