@include('layouts.frontheader')
    <!-- about-banner -->
    <section class="contact-banner position-relative">

        <img src="{{ asset('public/front/images/case_studie_banner.png') }}" alt="Case Study" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Case Study </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Case Study</li>
                </ol>
            </nav>
        </div>
        
    
<!--<img src="{{ asset('public/front/images/Cotact_us.jpg') }}" alt="Blog" class="img-fluid mobile-img" />-->
</section>
    <section class="blog-content">
        <div class="container">
            <div class="row g-md-5">
                 @foreach($casestudy as $val)
                    <div class="col-md-6">
                        <div class="blog-img position-relative">
                            
                                
                                <img src="{{ asset('public/casestudy_banner/'.$val->banner_image) }}" alt="{{ $val->title }}" class="mb-4 w-100 img-fluid"></a>
                                
                                <h4 class="mb-3">{{ $val->title }}</h4>
                                <div class="casestudy-short-desc">{!! $val->short_description !!}</div>
                            
                            <div class="theme-btn justify-content-start">
                                <a href="{{ url('/casestudy-detail/'.$val->url) }}" class="nav-link btn-add">
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <p>Read More</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- end -->

@include('layouts.frontfooter')