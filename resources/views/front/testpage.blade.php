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

                  <h2 class="title_80">PP YARN EXCELLENCE</h2>

                  <p class="text-white">100% Premium virgin yarn for filter cartridges.<br> Durable,

                     chemical-resistant, and efficient.

                  </p>

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

                     and <b>domestic</b> applications.

                  </p>

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

                     a <b>clean atmosphere</b>.

                  </p>

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

            <div class="pagination-arrow">

               <svg width="36" height="36" viewBox="0 0 36 36" fill="none"

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

            <div class="pagination-arrow">

               <svg width="36" height="36" viewBox="0 0 36 36" fill="none"

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

            <div class="pagination-arrow">

               <svg width="36" height="36" viewBox="0 0 36 36" fill="none"

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

<section class="home_rating mt-100">

    <div class="ym-container">

        <div class="home_rating_head">

            <h2 class="title_54">
                The Trust We've Earned
            </h2>

            <div class="overall_rating">

                <span class="rating_number">{{ $avgRating }}</span>

                <div class="rating_stars">
                    @for($i = 1; $i <= 5; $i++)
                        <span>★</span>
                    @endfor
                </div>

                <span class="rating_count">
                    {{ $reviewCount }} reviews
                </span>

            </div>

        </div>

        <div class="home_water_slider" data-show="3">

            @foreach($reviews as $review)
            <div>
                <div class="rating_card">

                    <div class="rating_card_top">

                        <img src="{{ $review->image ? asset('public/reviews/'.$review->image) : 'https://i.pravatar.cc/70' }}" alt="">

                        <div>
                            <h4>{{ $review->customer_name }}</h4>

                            <div class="card_star">
                                @for($i = 1; $i <= $review->rating; $i++)
                                    <span>★</span>
                                @endfor
                            </div>
                        </div>

                    </div>

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
            </div>
            @endforeach

        </div>

    </div>

</section>

<style>

.review-text{
    margin:0;
}

.review-content{
    display:block;
    overflow:hidden;
    line-height:28px;
    max-height:140px; /* 5 Lines */
    word-break:break-word;
    transition:.3s;
}

.read-more{
    display:none;
    color:#0d6efd;
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
