@include('layouts.frontheader')
<!-- about-banner -->
    <section class="contact-banner position-relative">
    <div class="container-fluid p-0">
        <img src="{{ asset('public/front/images/machinery-we-manufacture.jpg') }}" alt="Partnership" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Videos</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Videos</li>
                </ol>
            </nav>
        </div>
    </div>
</section>



    <!-- Partnership-content -->
    <section class="partner_content">
        <div class="container">
        <div class="row">
            @if($youtubeAvailable && count($videos))
                @foreach($videos as $video)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <iframe width="100%" height="250"
                            src="https://www.youtube.com/embed/{{ $video['videoId'] }}"
                            frameborder="0" allowfullscreen>
                        </iframe>
                        <h6 class="mt-2">{{ $video['title'] }}</h6>
                    </div>
                @endforeach
            @else
             <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/E2lcl6aRrpw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/F5WNyOo5jo4"
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/wwysmMvlEb8"
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            @endif

        </div>
    </div>
    </section>



   
@include('layouts.frontfooter')