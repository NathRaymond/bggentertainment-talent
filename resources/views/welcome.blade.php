 @extends("layouts.master")
 @section("headlinks")

 @endsection
 @section("contents")
 <section class="py-5 homepage-search-block position-relative"
     style="background: linear-gradient(#05675aad,#105e58b8),url('assets/images/homepage-img/home_img1.jpg'); background-position: center;background-size: cover;background-repeat: no-repeat;
    ">
     <div class="container">
         <div class="row py-lg-5">
             <div class="col-lg-8 mx-auto">
                 <div class="homepage-search-title">
                     <h1 class="mb-3 text-shadow text-white font-weight-bold" style="text-align: center; font-size:21px !important; line-height: 35px !important;">The BGG ENTERTAINMENT App is a platform for visibility in which vendors, gifted creatives & business owners can market their skillsets’ & vendor services in Africa and the USA for now.</h1>
                     </h5>
                 </div>
                 <div class="homepage-search-form">
                     <form class="form-noborder">
                         <div class="form-row">
                             <div class="col-lg-10 col-md-10 col-sm-12 form-group">
                                 <input type="text" placeholder="Find Services..."
                                     class="form-control border-0 form-control-lg shadow-sm">
                             </div>
                             <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                                 <button type="submit"
                                     class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i
                                         class="fa fa-search"></i></button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <ul class="trusted-by" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor1.jpg') }}" alt="Sponsor 1" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor2.jpg') }}" alt="Sponsor 2" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor3.jpg') }}" alt="Sponsor 3" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/kayi.webp') }}" alt="Kayi" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor4.jpg') }}" alt="Sponsor 4" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor5.jpg') }}" alt="Sponsor 5" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor6.jpg') }}" alt="Sponsor 6" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/sponsor7.jpg') }}" alt="Sponsor 7" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
     <li style="list-style: none;">
         <img src="{{ asset('assets/images/sponsors/eko_hotel.jpeg') }}" alt="Eko Hotel" style="width: 60px; height: 60px; object-fit: contain;">
     </li>
 </ul>

 <div class="services-wrapper bg-white py-5">
     <div class="container">
         <h2>Popular Professional Services</h2>
         <div class="row service-slider">
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-01.jpg") }}">
                     <h3><span>Build Your Brand</span> Logo Design</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-02.jpg") }}">
                     <h3><span>Customize your site</span> wordpress</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-03.jpg") }}">
                     <h3><span>share your message</span> voice over</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-04.jpg") }}">
                     <h3><span>engage your audience</span> whiteboard</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-05.jpg") }}">
                     <h3><span>reach more customers</span> social media</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-01.jpg") }}">
                     <h3><span>Build Your Brand</span> Logo Design</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-02.jpg") }}">
                     <h3><span>Customize your site</span> wordpress</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-03.jpg") }}">
                     <h3><span>share your message</span> voice over</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-04.jpg") }}">
                     <h3><span>engage your audience</span> whiteboard</h3>
                 </div>
             </div>
             <div class="col">
                 <div class="service">
                     <img src="{{ asset("assets/images/service-05.jpg") }}">
                     <h3><span>reach more customers</span> social media</h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--       services-->
 <!--    about section -->
 <div class="container">
     <div class="about-section py-5">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <h2>Get Work Done fater On Miver
                     , <br>With Confidence
                 </h2>
                 <ul>
                     <li><span><img src="{{ asset("assets/images/checkmark.svg") }}"> Payment Protection, Guaranteed</span>
                         Payment is released to the freelancer once you’re pleased and approve the work you get.
                     </li>
                     <li><span><img src="{{ asset("assets/images/checkmark.svg") }}"> Know The Price Upfront
                         </span>Find any service within minutes and know exactly what you’ll pay. No hourly rates, just a fixed price.
                     </li>
                     <li><span><img src="{{ asset("assets/images/checkmark.svg") }}"> We’re Here For You 24/7</span>Miver
                         is here for you, anything from answering any questions to resolving any issues, at any time.
                     </li>
                 </ul>
             </div>
             <div class="col-md-6">
                 <img src="{{ asset("assets/images/video.svg") }}" class="video-img w-100">
             </div>
         </div>
     </div>
 </div>
 <!--    about section -->
 <div class="market-wrapper py-5 bg-white">
     <div class="container">
         <h2 class="text-center">Explore the marketplace</h2>
         <ul class="categories-list mb-0">
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/graphics.svg") }}" alt="" loading="lazy">Graphics &amp; Design
                 </a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/online-marketing.svg") }}" alt="Digital Marketing" loading="lazy">Digital Marketing
                 </a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/writing-translation.svg") }}" alt="Writing &amp; Translation" loading="lazy">Writing &amp; Translation
                 </a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/video-animation.svg") }}" alt="Video &amp; Animation" loading="lazy">Video &amp; Animation
                 </a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/music-audio.svg") }}" alt="Music &amp; Audio" loading="lazy">Music &amp; Audio</a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/programming.svg") }}" alt="Programming &amp; Tech" loading="lazy">Programming &amp; Tech
                 </a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/business.svg") }}" alt="Business" loading="lazy">Business</a>
             </li>
             <li>
                 <a href="#">
                     <img src="{{ asset("assets/images/lifestyle.svg") }}" alt="Lifestyle" loading="lazy">Lifestyle
                 </a>
             </li>
         </ul>
     </div>
 </div>
 <!--     market   -->
 <!--       freelancer projects -->
 <div class="freelance-projects py-5">
     <div class="container">
         <h2>
             Get Inspired With Projects Made By Our Freelancers
             <a href="#" class="float-right">See More ></a>
         </h2>
         <div class="row freelance-slider">
             <div class="col">
                 <div class="freelancer">
                     <img src="{{ asset("assets/images/senatopcustudio.jpg") }}">
                     <div class="freelancer-footer">
                         <img src="{{ asset("assets/images/user/s7.png") }}">
                         <h5>Logo Design
                             <span>by <i>John</i></span>
                         </h5>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="freelancer">
                     <img src="{{ asset("assets/images/vnuggz.jpg") }}">
                     <div class="freelancer-footer">
                         <img src="{{ asset("assets/images/user/s8.png") }}">
                         <h5>Web &amp; Mobile Design
                             <span>by <i>John</i></span>
                         </h5>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="freelancer">
                     <img src="{{ asset("assets/images/digitalgeria.jpg") }}">
                     <div class="freelancer-footer">
                         <img src="{{ asset("assets/images/user/s1.png") }}">
                         <h5>Packaging Design
                             <span>by <i>John</i></span>
                         </h5>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="freelancer">
                     <img src="{{ asset("assets/images/artsi3d.jpg") }}">
                     <div class="freelancer-footer">
                         <img src="{{ asset("assets/images/user/s2.png") }}">
                         <h5>Brand Style Guides
                             <span>by <i>John</i></span>
                         </h5>
                     </div>
                 </div>
             </div>
             <div class="col">
                 <div class="freelancer">
                     <img src="{{ asset("assets/images/designerheather.jpg") }}">
                     <div class="freelancer-footer">
                         <img src="{{ asset("assets/images/user/s3.png") }}">
                         <h5>Illustration
                             <span>by <i>John</i></span>
                         </h5>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--       freelancer projects -->
 <!--       testimonials -->
 <div class="testi-wrap py-5 border-top border-bottom">
     <div class="container">
         <div class="testimonial">
             <div class="video-modal">
                 <div class="picture-wrapper">
                     <img src="{{ asset("assets/images/1440-haerfest-2x.jpg") }}">
                 </div>
             </div>
             <div class="text-content">
                 <p>"Being a small but growing brand, we have to definitely do a lot more with less. And when you want to create a business bigger than yourself, you’re going to need help. And that’s what Miver
                     does"
                 </p>
                 <span>Tim and Dan Joo, Co-founders</span>
                 <img alt="Company logo" src="{{ asset("assets/images/haerfest-logo.png") }}" loading="lazy">
             </div>
         </div>
     </div>
 </div>
 <!--       testimonials -->
 <!--       guides  -->
 <div class="guide-wrapper py-5">
     <div class="container">
         <h2>
             Miver
             Guides
             <a href="#" class="float-right">See More guides></a>
         </h2>
         <div class="row">
             <div class="col-md-4">
                 <a href="#" class="guide">
                     <img src="{{ asset("assets/images/guide-01.jpg") }}">
                     <div class="content">
                         <h6>Create a Website</h6>
                         <p>Building a stunning website from A to Z</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4">
                 <a href="#" class="guide">
                     <img src="{{ asset("assets/images/guide-02.jpg") }}">
                     <div class="content">
                         <h6>Grow With Digital Marketing</h6>
                         <p>Promoting your business online</p>
                     </div>
                 </a>
             </div>
             <div class="col-md-4">
                 <a href="#" class="guide">
                     <img src="{{ asset("assets/images/guide-03.jpg") }}">
                     <div class="content">
                         <h6>Build a Strong Brand</h6>
                         <p>Differentiating yourself from the competition</p>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </div>
 <div>
     <div class="get-started">
         <div class="content">
             <h2>Find Freelance Services For Your Business Today</h2>
             <p>We've got you covered for all your business needs</p>
             <a href="#" class="c-btn c-fill-color-btn">Get Started</a>
         </div>
     </div>
 </div>
 @endsection
 @section("scripts")

 @endsection