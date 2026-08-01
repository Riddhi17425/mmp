@include('layouts.frontheader')
<style>
    .blog-page-head {
    color: #fff;
    font-size: 60px;
    font-weight: 700;
}
</style>

<!-- about-banner -->
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
      <img src="{{ asset('public/front/images/case_studie_banner.png') }}" alt="Case Study" class="img-fluid product-page-header" />
    <div class="contact-head">
      <h4 class="blog-page-head">Case Study </h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ url('case-studies') }}">Case Study </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $casestudydetail->title }}</li>
        </ol>
    </nav>
    </div>
  
  </div>
</section>
<!-- casestudy-detail -->
<section class="casestudy-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><b class="blog-head mb-3">{{ $casestudydetail->title }}</b></h1>
                {!! $casestudydetail->description !!}
               
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="flato-img">
                    <img src="{{ asset('public/casestudy/'. $casestudydetail->image) }}" alt="{{ $casestudydetail->alt }}" class="img-fluid mb-3">
                    
                </div>
            </div>
            <div class="col-md-12">
                <div>
                 <p>{!! $casestudydetail->long_description !!}</p>
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- blog-detail-end -->

@include('layouts.frontfooter')