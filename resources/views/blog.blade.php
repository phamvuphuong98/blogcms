<x-sub-layout>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <figure class="service-rightcircle mb-0">
                            <img src="./assets/images/service-rightcircle.png" alt="" class="img-fluid">
                        </figure>
                        <h1 class="text-white">OUR BLOGS</h1>
                        <div class="box">
                            <span class="mb-0">Home</span>
                            <figure class="mb-0 arrow"><img src="./assets/images/button-arrow.png" alt="" class="img-fluid"></figure>
                            <span class="mb-0 box_span">Blogs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <figure class="banner-circleright mb-0">
        <img src="./assets/images/banner-circleright.png" class="img-fluid" alt="">
    </figure>
    <figure class="sub-bannerrightlayer mb-0">
        <img src="./assets/images/sub-bannerrightlayer.png" alt="" class="img-fluid">
    </figure>
    </div>
    <section class=" blog-posts">
        <div class="container">
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="col-xl-12">
                    <div class="row">
                        @if (count($posts) > 0)
                        @foreach ($posts as $post)
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="{{ '/post/'.$post->slug }}">
                                            <img alt="" src="{{ asset('storage/'.$post->image) }}">
                                        </a>
                                        <span class="post-meta-category">
                                            <a href="">{{ $post->category->name }}</a>
                                        </span>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date">
                                            <i class="fa fa-calendar-o"></i>{{ $post->created_at }}</span>
                                        <h2>
                                            <a href="{{ '/post/'.$post->slug }}">{{ $post->title }}</a>
                                        </h2>
                                        <!-- <p class="text-size-16 content-limit">{!! $post->content !!}</p> -->
                                        <a href="{{ '/post/'.$post->slug }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-sub-layout>