@include('layouts.frontheader')

<style>
    strong a
    {
        color:#00a3ff;
    }
</style>

<!-- about-banner -->
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
      <img src="{{ asset('public/front/images/Blog.jpg') }}" alt="Blog" class="img-fluid" />
    <!--<img src="{{ asset('public/blog_banner/'.$blogdetail->banner_image) }}" alt="" class="img-fluid" />-->
    <div class="contact-head position-absolute">
      <h4 class="blog-page-head">Blog</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ url('blogs') }}">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $blogdetail->title }}</li>
        </ol>
    </nav>
    </div>
  </div>
</section>
<!-- about-banner end -->
<style>
p{
line-height: 28px !important;
}

.blog-detail ul {
  list-style: none !important;
}

.blog-detail ul li::before {
  content: "• ";
  color:  #00a3ff; 
}
.blog-page-head{
    color:#fff;
    font-size:60px;
    font-weight:700;
}
/*.blog-detail ul li {*/
/*  color: #00a3ff !important;*/
/*}*/
</style>
<!-- blog-detail -->
<section class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><b class="blog-head">{{ $blogdetail->title }}</b></h1>
                <p>{{date('M',strtotime($blogdetail->publish_date))}}
                          {{date('d',strtotime($blogdetail->publish_date))}} 
                          {{date('Y',strtotime($blogdetail->publish_date))}}</p>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-md-6">-->
        <!--        <div class="flato-img">-->
        <!--            <img src="{{ asset('public/blog_banner/'.$blogdetail->banner_image) }}" alt="flato pdf" class="img-fluid mb-3">-->
                    <!--<img src="{{ asset('public/blog_banner/'.$blogdetail->banner_image) }}" alt="flato pdf" class="img-fluid mb-3">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-md-6">-->
        <!--        <div>-->
        <!--            <p>{!! $blogdetail->description !!}</p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="flato-img">
                    <img src="{{ asset('public/blog/'. $blogdetail->image) }}" alt="{{ $blogdetail->alt }}" class="img-fluid mb-3">
                    <!--<img src="{{ asset('public/blog_banner/'.$blogdetail->banner_image) }}" alt="flato pdf" class="img-fluid mb-3">-->
                </div>
            </div>
            <div class="col-md-12">
                <div>
                    <p>{!! $blogdetail->description !!}</p>
                </div>
            </div>
            @if(!empty($blogdetail->cta_image))
            <div class="col-md-12">
                <div class="flato-img mt-4">
                 <a href="{{ url('contact') }}" target="_blank">   <img src="{{ asset('public/blog_cta_image/'. $blogdetail->cta_image) }}" alt="{{ $blogdetail->title }}" class="img-fluid mb-3"></a>
                </div>
            </div>
            @endif
            @if(!empty($blogdetail->conclusion)) 
            <div class="col-md-12">
                <div>
                    <p>{!! $blogdetail->conclusion !!}</p>
                </div>
            </div>
            @endif
        </div>
        <?php
         if ($blogdetail->url == 'filtration-is-a-very-important-part-of-our-life') {  ?>
          <div class="col-md-12 show_cfc">
           <img src="{{ asset('public/blog/FILATO-22-SPECIFICATIONS-pdf.jpg-1-1.png') }}" alt="flato pdf" class="img-fluid mb-3">
          <div>
        <?php  }  ?>
    </div> 
</section>
@php
    $faqItems = [];

    if (!empty($blogdetail->title_desc)) {
        $decodedFaqItems = json_decode($blogdetail->title_desc, true);

        if (is_array($decodedFaqItems)) {
            foreach ($decodedFaqItems as $item) {
              
                
                $questionRaw = isset($item['question']) ? strip_tags($item['question']) : '';

                // Remove numbering like: "1. ", "2) ", "3 - ", etc.
                $question = preg_replace('/^\s*\d+[\.\)\-]?\s*/', '', $questionRaw);
                
                // Clean extra spaces/tabs
                $question = trim(preg_replace('/\s+/', ' ', $question));
                
                $answer = isset($item['answer']) ? trim(preg_replace('/\s+/', ' ', strip_tags($item['answer']))) : '';

                if ($question !== '' && $answer !== '') {
                    $faqItems[] = [
                        'question' => $question,
                        'answer' => isset($item['answer']) ? $item['answer'] : '',
                        'schema_answer' => $answer,
                    ];
                }
            }
        }
    }

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($item) {
            return [
                '@type' => 'Question',
                'name' => $item['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $item['schema_answer'],
                ],
            ];
        }, $faqItems),
    ];
@endphp

<div class="container">
    @if(!empty($faqItems))
    <div class="FAQ_productList mb-5">
            <h2 class="mb-5">FAQs
            </h2>
        <div class="accordion" id="accordionExample">
                @foreach($faqItems as $key => $item)
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="heading{{ $key }}">
                            <button class="accordion-button {{ $key == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $key }}">
                                {{ $item['question'] }}
                            </button>
                        </h5>
                        <div id="collapse{{ $key }}" class="accordion-collapse collapse  {{ $key == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $item['answer'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach

          
        </div>
    </div>
    @endif
</div>
<!-- blog-detail-end -->

@if(!empty($faqItems))
<script type="application/ld+json">
{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif

@include('layouts.frontfooter')

<script></script>
