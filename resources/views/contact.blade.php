<x-sub-layout>
<section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-up">
                        <figure class="service-rightcircle mb-0">
                            <img src="./assets/images/service-rightcircle.png" alt="" class="img-fluid">
                        </figure>
                        <h1 class="text-white">Contact Us</h1>
                        <p>Eoidunt eget semper nec ruam sed hendrerit morbi ac feliseao augue pellentesue morbi acer.</p>
                        <div class="box">
                            <span class="mb-0">Home</span>
                            <figure class="mb-0 arrow"><img src="./assets/images/button-arrow.png" alt="" class="img-fluid"></figure>
                            <span class="mb-0 box_span">Contact</span>
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
<!--Contact -->
<section class="contact-section">
    <figure class="offer-toplayer mb-0">
        <img src="./assets/images/offer-toplayer.png" alt="" class="img-fluid">
    </figure>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="contact_content" data-aos="fade-right">
                    <h6>Contact Info</h6>
                    <h2>Get in Touch</h2>
                    <div class="contact-box">
                        <div class="box-image">
                            <figure class="contact-location">
                                <img src="./assets/images/contact-location.png" alt="" class="img-fluid">
                            </figure> 
                        </div>
                        <div class="box-content">
                            <h4>Location:</h4>
                            <p class="text">2802 Pear Tree Ln, Garland, TX 75042</p>
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="box-image">
                            <figure class="contact-email">
                                <img src="./assets/images/contact-email.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Email:</h4>
                            <p>
                                <a href="mailto:support@jasonprivatelabel.com" class="mb-0 text-decoration-none">support@jasonprivatelabel.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-box box-mb">
                        <div class="box-image">
                            <figure class="contact-phone">
                                <img src="./assets/images/contact-phone.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Phone:</h4>
                            <p>
                                <a href="tel:4693709526" class="text-decoration-none text">(469)3709526</a>                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="need-section">
                @if (session('status') == 200)
                    <h4 class="font-medium text-green">
                        {{ __('SEND US A MESSAGE CONGRATULATION !!!') }}
                    </h4>
                @endif
                    <figure class="offer-circleimage mb-0">
                        <img src="./assets/images/offer-circleimage.png" alt="" class="img-fluid">
                    </figure>
                    <div class="need_content"> 
                        <h6 class="text-white">Write to us</h6>
                        <h2 class="text-white">send us a Message</h2>
                        <form id="contactpage" method="POST" action="{{ route('form.contact') }}">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-0">    
                                    <input type="text" class="form_style" placeholder="Your Name:" name="name" required> 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                    <input type="email" class="form_style" placeholder="Your Email:" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">    
                                    <textarea class="form_style" placeholder="Message" rows="3" name="message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="manage-button text-center">
                                <button type="submit" class="send_now text-white text-decoration-none">Send Now
                                    <i class="circle fa-thin fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                        <figure class="faq-image mb-0">
                            <img src="./assets/images/faq-image.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure class="offer-bottomlayer mb-0">
        <img src="./assets/images/offer-bottomlayer.png" alt="" class="img-fluid">
    </figure>
</section>
<!-- Map -->
<!-- <div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe src="https://www.google.com/maps/place/2802+Pear+Tree+Ln,+Garland,+TX+75042,+Hoa+K%E1%BB%B3/@32.9215077,-96.6728115,17z/data=!3m1!4b1!4m6!3m5!1s0x864c1e0c8df74371:0x8bbe1bb59069b2c3!8m2!3d32.9215032!4d-96.6702366!16s%2Fg%2F11c17nsk2b"
            width="1920" height="556" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div> -->
</x-sub-layout>
