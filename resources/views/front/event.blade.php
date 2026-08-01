@include('layouts.frontheader')

<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/event-banner-bg.jpg') }}" alt="Events" class="img-fluid product-page-header" />
    <div class="contact-head">
      <h1>Our Latest Events</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Events</li>
        </ol>
      </nav>
    </div>
  </div>
</section>


<!-- new html 23-10-2023 -->
<?php //dd($event);?>
<section class="event-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Let’s Connect</h3>
      </div>
    </div>
    <div class="row">
      @foreach($event as $key => $val)
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <?php
        if ($val->image) {
          if (strpos($val->image, ',') !== false) {
            $images = explode(',', $val->image);
          } else {
            $images[0] = $val->image;
          }
        }
        ?>
        <div class="image-container">
          <img src="{{ asset('public/event/'. $images[0]) }}" class="img-fluid w-100 event_img"  alt="{{ $val->alt }}" />
          <div class="after" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $key }}"></div>
        </div>
        <div>
          <!--<div class="text-border d-flex justify-content-between">-->
          <!--  <b>{{ $val->name }}</b>-->
          <!--  @if($key == 0)-->
          <!--      <a href="https://youtu.be/3xwGX5-APyA" data-fancybox target="_blank"><i class="fa-solid fa-circle-play"></i></a>-->
          <!--    @endif-->
          <!--</div>-->
            <div class="text-border">
               <div class="d-flex justify-content-between ">
                    <b>{{ $val->name }}</b>
               
                @if($val->name === 'EAW Water Expo 2025')
                    <a href="https://youtu.be/3xwGX5-APyA" data-fancybox target="_blank">
                        <i class="fa-solid fa-circle-play"></i>
                    </a>
                @endif
               </div>
                
                 @if($val->name === 'Weftec The Water Quality Event')
                    <p class="m-0 mt-2">MMP's major step into the international arena</p>
                @endif
            </div>

          <ul class="p-0 mt-3">
            <li class="d-flex align-items-start mb-2">
              <span><img src="{{ asset('public/front/images/contact-map.png') }}" alt="Contact Map" class="img-fluid me-2" /></span>
              <p class="m-0">{{ $val->place }}</p>
            </li>
            <li class="d-flex align-items-start mb-2">
              <span><img src="{{ asset('public/front/images/datepicker.png') }}" alt="Date Picker" class="img-fluid me-2" /></span>
              <p>{{ $val->date }}</p>
            </li>
          </ul>
        </div>
      </div>
      @endforeach
    </div>

    @foreach($event as $key => $val)
    <div class="modal fade" id="exampleModal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-{{ $key }}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel-{{ $key }}">
              <b>{{ $val->name }}</b>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="event-slider-modal">
              <?php
              if ($val->image) {
                if (strpos($val->image, ',') !== false) {
                  $images = explode(',', $val->image);
                } else {
                  $images[0] = $val->image;
                }
              }
              ?>
              @foreach($images as $k => $v)
              <div>
                <img src="{{ asset('public/event/'. $v) }}" alt="{{ $val->alt }}" class="img-fluid w-100 event_img" />
                <ul class="p-0 mt-3 justify-content-between">
                  <li class="d-flex align-items-start mb-2">
                    <span><img src="{{ asset('public/front/images/contact-map.png') }}" alt="Contact Map" class="img-fluid me-2" /></span>
                    <p class="m-0">{{ $val->place }}</p>
                  </li>
                  <li class="d-flex align-items-start mb-2">
                    <span><img src="{{ asset('public/front/images/datepicker.png') }}" alt="Date Picker" class="img-fluid me-2" /></span>
                    <p>{{ $val->date }}</p>
                  </li>
                </ul>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>


<script>
$('.modal').on('shown.bs.modal', function () {

    var $slider = $(this).find('.event-slider-modal');

    if (!$slider.hasClass('slick-initialized')) {
        $slider.slick({
            dots: false,
            arrows: false, // Arrows hide

            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,

            autoplay: true,
            autoplaySpeed: 3000,
            speed: 600,
            pauseOnHover: false,
            pauseOnFocus: false
        });
    } else {
        $slider.slick('setPosition');
        $slider.slick('slickPlay');
    }

});
</script>

@include('layouts.frontfooter')