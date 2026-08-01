@include('layouts.frontheader')
<style>
    .thankyou-section{margin-top:90px;}
    
</style>
  <section class="thankyou-section pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center thank-contect">
                    <h3>thank you</h3>
                    <p class="text-center">Your enquiry has been submitted successfully.</p>
                    <p class="mb-5 text-center">We will get in touch with you shortly.</p>
                     <div class="theme-btn">
              <a href="{{ url('/') }}" class="btn-add"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                <p>Go To Home</p>
              </a>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.frontfooter')