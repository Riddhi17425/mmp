@include('layouts.frontheader')
    <!-- about-banner -->
    <section class="contact-banner position-relative">

        <img src="{{ asset('public/front/images/Blog.jpg') }}" alt="Blog" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Our Latest Blogs</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
        
    
<!--<img src="{{ asset('public/front/images/Cotact_us.jpg') }}" alt="Blog" class="img-fluid mobile-img" />-->
</section>
    
    
    
    <!--<section class="inner-banner-blog">-->
    <!--<div class="container-fluid p-0">-->
    <!--    <img src="{{ asset('public/front/images/blog-banner-bg.jpg') }}" alt="" class="img-fluid" />-->
    <!--    <div class="contact-head position-absolute">-->
    <!--    <h2>Blog</h2>-->
    <!--    <nav aria-label="breadcrumb">-->
    <!--        <ol class="breadcrumb">-->
    <!--            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
    <!--            <li class="breadcrumb-item active" aria-current="page">Blog</li>-->
    <!--        </ol>-->
    <!--    </nav>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- blog-content -->
    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <b class="blog-head">Keep up with Industry Trends</b>
                </div>
            </div>
            <div class="row">
                @foreach($blog as $val)
                <div class="col-md-4">
                    <div class="blog-img position-relative">
                        <a href="{{ url('/blogdetail/'.$val->url)}}">
                            <img src="{{ asset('public/blog_banner/'.$val->banner_image) }}" alt="{{ $val->title }}" class="mb-3 img-fluid"></a>
                        <div class="date-after">
                           
                                
                                
                            <!--<p>{{ $val->publish_date }}</p>-->
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none" class="me-1">
  <path d="M4 8.5H20M4 8.5V17.3002C4 18.4203 4 18.9801 4.21799 19.4079C4.40973 19.7842 4.71547 20.0905 5.0918 20.2822C5.5192 20.5 6.07899 20.5 7.19691 20.5H16.8031C17.921 20.5 18.48 20.5 18.9074 20.2822C19.2837 20.0905 19.5905 19.7842 19.7822 19.4079C20 18.9805 20 18.4215 20 17.3036V8.5M4 8.5V7.7002C4 6.58009 4 6.01962 4.21799 5.5918C4.40973 5.21547 4.71547 4.90973 5.0918 4.71799C5.51962 4.5 6.08009 4.5 7.2002 4.5H8M20 8.5V7.69691C20 6.57899 20 6.0192 19.7822 5.5918C19.5905 5.21547 19.2837 4.90973 18.9074 4.71799C18.4796 4.5 17.9203 4.5 16.8002 4.5H16M16 2.5V4.5M16 4.5H8M8 2.5V4.5" stroke="#666666" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
</svg> 
                             {{date('M',strtotime($val->publish_date))}}
                          {{date('d',strtotime($val->publish_date))}} 
                          {{date('Y',strtotime($val->publish_date))}}</p>
                        </div>
                        <a href="{{ url('/blogdetail/'.$val->url)}}"><h4 class="mb-3">{{ $val->title }}</h4></a>
                        <p>{!! $val->short_description !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end -->

@include('layouts.frontfooter')