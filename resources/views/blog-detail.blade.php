<x-sub-layout>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <figure class="service-rightcircle mb-0">
                            <img src="{{ asset('assets/images/service-rightcircle.png') }}" alt="" class="img-fluid">
                        </figure>
                        <h1 class="text-white">{{ $post->title }}</h1>
                        <div class="box">
                            <span class="mb-0">Home</span>
                            <figure class="mb-0 arrow"><img src="{{ asset('assets/images/button-arrow.png') }}" alt="" class="img-fluid"></figure>
                            <span class="mb-0 box_span">Blog</span>
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
    <section class="blog-posts single-post">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div id="blog" class="single-post01">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image" data-aos="fade-up">
                                    <a href="#">
                                        <img alt="" src="{{ asset('storage/'.$post->image) }}">
                                    </a>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <h2 class="single-post-heading font_weight_600">{{ $post->title }}</h2>
                                    <div class="post-meta">
                                        <span class="post-meta-date color01"><i class="fa fa-calendar-o"></i>{{ $post->created_at }}</span>
                                        <span class="post-meta-category color01"><a href=""><i class="fa fa-tag"></i>{{ $post->category->name }}</a></span>
                                        <!-- <div class="post-meta-share float-right">
                                            <ul class="list-unstyled m-0">
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fab fa-facebook-square"></i>
                                                    </a></li>
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fab fa-twitter-square"></i>
                                                    </a></li>
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fab fa-instagram"></i>
                                                    </a></li>
                                                <li class="d-inline-block align-top"><a href="#">
                                                        <i class="fas fa-envelope-square"></i>
                                                    </a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <p class="text-size-16">{!! $post->content !!}</p>
                                </div>
                                <div class="row form-gray-fields">
                                    <div class="col-lg-12">
                                        <div class="form-group text-center">
                                            <a class="btn font_weight_600" href="/contact">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-tags">
                                    <a href="#">Life</a>
                                    <a href="#">Sport</a>
                                    <a href="#">Tech</a>
                                    <a href="#">Travel</a>
                                    <!--post-tags-->
                                </div>
                                <!-- <div class="post-navigation">
                                    <a href="#" class="post-prev">
                                        <div class="post-prev-title"><span>Previous Post</span></div>
                                    </a>
                                    <a href="#" class="post-next">
                                        <div class="post-next-title"><span>Next Post</span></div>
                                    </a>
                                </div> -->
                                <div class="comments" id="comments">
                                    <div class="comment_number text-uppercase font_weight_600">
                                        Comments
                                    </div>
                                    <div class="comment-list">
                                        <div class="fb-comments" data-href="{{ url()->current() }}" data-width="" data-numposts="5"></div>
                                    </div>
                                </div>
                                <!-- 
                                <div class="respond-form" id="respond">
                                    <div class="respond-comment text-uppercase font_weight_600">
                                        Leave a <span>Comment</span>
                                    </div>
                                    <form class="form-gray-fields">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="name">Name</label>
                                                    <input class="form-control required" name="senderName" placeholder="Enter name" id="name" aria-required="true" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="email">Email</label>
                                                    <input class="form-control required email" name="senderEmail" placeholder="Enter email" id="email" aria-required="true" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="website">Website</label>
                                                    <input class="form-control website" name="senderWebsite" placeholder="Enter Website" id="website" aria-required="false" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="upper font_weight_600" for="comment">Your comment</label>
                                                    <textarea class="form-control required" name="comment" rows="9" placeholder="Enter comment" id="comment" aria-required="true"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group text-center">
                                                    <button class="btn font_weight_600" type="submit">Submit Comment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-3">
                    <div class="theiaStickySidebar">
                        <!-- <div class="widget widget-newsletter">
                            <form id="widget-search-form-sidebar" class="form-inline">
                                <div class="input-group">
                                    <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                                    <div class="input-group-append">
                                        <span class="input-group-btn">
                                            <button type="submit" id="widget-widget-search-form-button" class="btn"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                                    </li> -->
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    @if (count($post_like_cats) > 0)
                                        <ul>
                                            <div class="tab-pane fade show active" id="popular" role="tabpanel">
                                                <div class="post-thumbnail-list">
                                                @foreach ($post_like_cats as $post_like_cat)
                                                    <div class="post-thumbnail-entry">
                                                        <img data-aos="fade-up" alt="" src="{{ asset('storage/'.$post_like_cat->image) }}">
                                                        <div class="post-thumbnail-content">
                                                            <a href="{{ '/post/'.$post_like_cat->slug }}">{{ $post_like_cat->title }}</a>
                                                            <span class="post-date"><i class="far fa-clock"></i> {{ $post_like_cat->created_at }}</span>
                                                            <span class="post-category"><i class="fa fa-tag"></i> {{ $post_like_cat->category->name }}</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @if (count($categries) > 0)
                        <div class="widget widget-categories">
                            <div class="widget-title font_weight_600">Categories</div>
                            <ul>
                                @foreach ($categries as $categry)
                                    <li class="cat-item">
                                        <a href="#">{{ $categry->name }}</a>
                                        <span class="cat-count-span"></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- <div class="widget widget-tweeter">
                            <h4 class="widget-title font_weight_600">Recent Tweets</h4>
                            <div id="twitter-cnt">
                                <ul>
                                    <li>Rule number 1: Don't overthink it
                                        <a href="#" target="_blank" title="Visit this link">https://t.co/T9Vg7b9XuI</a>
                                        <small>Sep/12/2019</small>
                                    </li>
                                    <li>Smart OR Stylish? How do you balance design principles with design trends? <a href="#" target="_blank" title="Visit this link">https://t.co/yBb0HKiksq</a>
                                        <a href="https://t.co/kR5EhraUuK" target="_blank" title="Visit this link">https://t.co/kR5EhraUuK</a>
                                        <small>Sep/10/2019</small>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        @if (count($tags) > 0)
                        <div class="widget widget-tags">
                            <h4 class="widget-title font_weight_600">Tags</h4>
                            <div class="tags">
                                @foreach ($tags as $tag)
                                    <a href="#">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-sub-layout>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '105102095959415',
      xfbml      : true,
      version    : 'v11.0'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>