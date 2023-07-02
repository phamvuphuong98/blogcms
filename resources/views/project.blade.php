a<x-sub-layout>
<section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <figure class="service-rightcircle mb-0">
                            <img src="./assets/images/service-rightcircle.png" alt="" class="img-fluid">
                        </figure>
                        <h1 class="text-white">OUR PROJECTS</h1>
                        <p>Below are some of our passion projects aimed at meeting customer needs and satisfaction</p>
                        <div class="box">
                            <span class="mb-0">Home</span>
                            <figure class="mb-0 arrow"><img src="./assets/images/button-arrow.png" alt="" class="img-fluid"></figure>
                            <span class="mb-0 box_span">Project</span>
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
<section class="project-section projectpage-section">
    <figure class="offer-toplayer mb-0">
        <img src="./assets/images/offer-toplayer.png" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project_content" data-aos="fade-right">
                    <h6>RECENT PROJECTS</h6>
                    <h2>Our Latest Projects</h2>
                    <figure class="offer-circleimage mb-0">
                        <img src="./assets/images/offer-circleimage.png" alt="" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
        <div class="project_wrapper">
            <div class="row" data-aos="fade-up">
            @if(count($portfolios) > 0)
                @foreach ($portfolios as $portfolio)
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <a href="{{ '/project/'.$portfolio->slug }}" >
                    <div class="case-box overlay">
                        <div class="overlay-image">
                            <figure class="image mb-0">
                                <img alt="" src="{{ asset('storage/'.$portfolio->banner) }}">
                            </figure>
                        </div>
                        <div class="content">
                            <span class="text-white">Listing Optimization</span>
                            <a href="{{ '/project/'.$portfolio->slug }}" class="item-link"><h5 class="text-white">{{ $portfolio->title }}</h5></a>
                        </div>
                    </div>
</a>
                </div>
                @endforeach
            @else
                <p>Nothing !!!</p>
            @endif
            </div>
        </div>
    </div>
    <figure class="offer-bottomlayer mb-0">
        <img src="./assets/images/offer-bottomlayer.png" alt="" class="img-fluid">
    </figure>
</section>
</x-sub-layout>
