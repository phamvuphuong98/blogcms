<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</head>
<x-sub-layout>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt="" class="img-fluid">
                        </figure>
                        <h1 class="text-white">{{ $portfolio->title }}</h1>
                        <div class="box">
                            <span class="mb-0">Home</span>
                            <figure class="mb-0 arrow"><img src="{{ asset('assets/images/button-arrow.png') }}" alt="" class="img-fluid"></figure>
                            <span class="mb-0 box_span">Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <figure class="banner-circleright mb-0">
        <img src="{{ asset('assets/images/banner-circleright.png') }}" class="img-fluid" alt="">
    </figure>
    <figure class="sub-bannerrightlayer mb-0">
        <img src="{{ asset('assets/images/sub-bannerrightlayer.png') }}" alt="" class="img-fluid">
    </figure>
    </div>
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content">
                        <h2>LISTING COPYWRITING</h2>
                        <p>{!! $portfolio->description !!}</p>
                    </div>
                </div>
            </div>
            <!--container-->
        </div>
        @if (!!($portfolio->product_photos))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content">
                        <h2>PRODUCT PHOTOS</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="three-column col-xl-12">
                    <div class="row">
                        @foreach ($portfolio->product_photos as $product_photo)
                            <div class="col-xl-4 col-lg-4">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$product_photo) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$product_photo) }}" src="{{ asset('storage/'.$product_photo) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content">
                        <h2>A+ CONTENT (EBC DESGIN)</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="three-column col-xl-12">
                    @if (!!($portfolio->a_content_longs))
                    <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        @foreach ($portfolio->a_content_longs as $a_content_long)
                            <div id="blog" class="col-xl-12">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$a_content_long) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$a_content_long) }}" src="{{ asset('storage/'.$a_content_long) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                    @if (!!($portfolio->a_contents))
                    <div class="row">
                        @foreach ($portfolio->a_contents as $a_content)
                            <div class="col-xl-4 col-lg-4">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$a_content) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$a_content) }}" src="{{ asset('storage/'.$a_content) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                    @if (!!($portfolio->brand_story_longs))
                    <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        @foreach ($portfolio->brand_story_longs as $brand_story_long)
                            <div id="blog" class="col-xl-12">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$brand_story_long) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$brand_story_long) }}" src="{{ asset('storage/'.$brand_story_long) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif

                    @if (!!($portfolio->brand_stories))
                    <div class="row">
                        <div class="col-12">
                            <div class="offer_content">
                                <h2>BRAND STORY</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($portfolio->brand_stories as $brand_story)
                            <div class="col-xl-4 col-lg-4">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$brand_story) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$brand_story) }}" src="{{ asset('storage/'.$brand_story) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @if (!!($portfolio->videos))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content">
                        <h2>VIDEO</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portfolio->videos as $video)
                    <div class="col-xl-6">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <iframe width="560" height="315" src="{{ $video }}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        @if (!!($portfolio->social_post_designs))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content">
                        <h2>SOCIAL POST DESGIN</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="col-xl-12">
                    <div class="row">
                        @foreach ($portfolio->social_post_designs as $social_post_design)
                            <div class="col-xl-3 col-lg-6">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$social_post_design) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$social_post_design) }}" src="{{ asset('storage/'.$social_post_design) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if (!!($portfolio->packging_designs))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offer_content">
                        <h2>PACKAGING DESGIN</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="three-column col-xl-12">
                    @foreach ($portfolio->packging_designs as $packging_design)
                        <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div id="blog" class="col-xl-12">
                                <div class="float-left w-100 post-item border mb-4">
                                    <div class="post-item-wrap position-relative">
                                        <div class="post-image">
                                            <a href="{{ asset('storage/'.$packging_design) }}">
                                                <img data-fancybox="gallery" data-src="{{ asset('storage/'.$packging_design) }}" src="{{ asset('storage/'.$packging_design) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </section>
</x-sub-layout>
<script>

</script>