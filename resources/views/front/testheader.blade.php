@include('layouts.new_frontheader')

    <!-- about-banner -->
    <section class="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1>About Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->



      @include('layouts.frontfooter')