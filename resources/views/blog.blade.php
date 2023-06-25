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
                                        <p class="text-size-16 content-limit">{{ $post->content }}</p>
                                        <a href="{{ '/post/'.$post->slug }}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div id="blogslider" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img src="assets/images/post-featured2.jpg" alt="">
                                                <!--carousel-item-->
                                            </div>
                                            <div class="carousel-item active">
                                                <img src="assets/images/post-featured.jpg" alt="">
                                                <!--carousel-item-->
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/images/post-featured3.jpg" alt="">
                                                <!--carousel-item-->
                                            </div>
                                            <!--carousel-inner-->
                                        </div>
                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#blogslider" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#blogslider" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                        <!--blogslider-->
                                    </div>
                                    <span class="post-meta-category"><a href="">Technology</a></span>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                        <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="assets/images/post-featured4.jpg"> </a> <span class="post-meta-category">
                                            <a href="#">Science</a>
                                        </span>
                                        <!--post-image-->
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date">
                                            <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments">
                                            <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                        </span>
                                        <h2><a href="#">Standard post with a single image </a></h2>
                                        <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-audio position-relative">
                                        <a href="#">
                                            <img alt="" src="assets/images/post-featured3.jpg"> </a>
                                        <span class="post-meta-category">
                                            <a href="">Audio</a>
                                        </span>
                                        <audio class="position-absolute" controls="">
                                            <source src="horse.ogg" type="audio/ogg">
                                            <source src="assets/audio/horse.mp3" type="audio/mpeg">
                                        </audio>
                                        <!--post-audio-->
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments">
                                            <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                        </span>
                                        <h2>
                                            <a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a>
                                        </h2>
                                        <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                        <div class="embed-container"><iframe src="https://player.vimeo.com/video/157467640?background=1"></iframe></div>
                                        <span class="post-meta-category"><a href="">Video</a></span>
                                        <!--post-video-->
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">This is a example post with Vimeo video</a></h2>
                                        <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                        <div class="fluid-width-video-wrapper">
                                            <iframe width="560" height="376" src="https://www.youtube.com/embed/dA8Smj5tZOQ"></iframe>
                                            <!--fluid-width-video-wrapper-->
                                        </div>
                                        <span class="post-meta-category"><a href="">Video</a></span>
                                        <!--post-video-->
                                    </div>
                                    <div class="float-left w-100 post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">This is a example post with YouTube</a></h2>
                                        <p class="text-size-16">Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula ac sagittis ante posuere ac pharetra laoreet commodo dolor porta.</p>
                                        <a href="single-post.html" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-sub-layout>