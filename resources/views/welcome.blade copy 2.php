@extends("layouts.master")
@section("contents")
@section("headlinks")
<!-- Add Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add Slick Carousel Theme CSS (optional) -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>
    .service-carousel {
        position: relative;
        padding: 0 30px;
    }

    /* .slick-prev,
    .slick-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #000;
        color: #fff;
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 1;
        font-size: 16px;
    } */

    /* .slick-prev {
        left: 0;
    } */

    .slick-next {
        right: 0;
    }

    .service-slider .service {
        text-align: center;
    }

    .service-slider img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .service-slider h3 {
        margin-top: 10px;
        font-size: 18px;
    }

    .service-slider h3 span {
        display: block;
        font-size: 14px;
        color: #666;
    }

    .guide-wrapper .guide img {
        transition: transform 0.3s ease-in-out;
    }

    .guide-wrapper .guide:hover img {
        transform: scale(1.05);
    }

    .guide-wrapper .content {
        padding: 10px;
        text-align: center;
    }

    .guide-wrapper .content h6 {
        font-weight: 600;
        font-size: 1.1rem;
    }

    .guide-wrapper .content p {
        font-size: 0.9rem;
        color: #555;
    }

    .trusted-by {
        display: flex;
        justify-content: center;
        gap: 10px;
        list-style: none;
        padding: 0;
    }

    .trusted-by li {
        display: flex;
        align-items: center;
    }

    .trusted-by img {
        width: 100px;
        /* Adjust the size as needed */
        height: 100px;
        /* Ensures all images are square */
        object-fit: contain;
        /* Keeps logo proportions */
    }
</style>
@endsection
<!-- Begin Page Content -->
<section class="py-5 homepage-search-block position-relative"
    style="background: linear-gradient(#05675aad,#105e58b8),url('assets/images/bg.jpg'); background-position: center;background-size: cover;background-repeat: no-repeat;
    ">
    <div class="container">
        <div class="row py-lg-5">
            <div class="col-lg-8 m-auto ">
                <div class="homepage-search-title">
                    <h1 class="mb-3 text-shadow text-white font-weight-bold" style="text-align: center;">Connect with Top Freelance Talent Worldwide</h1>
                    <h5 class="mb-5 text-shadow text-white-50 font-weight-normal" style="text-align: center;">Countless individuals utilize BGG Entertainment to bring their concepts to life..
                    </h5>
                </div>
                <div class="homepage-search-form">
                    <form class="form-noborder">
                        <div class="form-row">
                            <div class="col-lg-10 col-md-10 col-sm-12 form-group">
                                <input type="text" name="query" placeholder="Search for any service..."
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
<!--       social -->
<ul class="trusted-by">
    <li><img src="{{ asset('assets/images/sponsors/sponsor1.jpg') }}" alt="Sponsor 1"></li>
    <li><img src="{{ asset('assets/images/sponsors/sponsor2.jpg') }}" alt="Sponsor 2"></li>
    <li><img src="{{ asset('assets/images/sponsors/sponsor3.jpg') }}" alt="Sponsor 3"></li>
    <li><img src="{{ asset('assets/images/sponsors/sponsor4.jpg') }}" alt="Sponsor 4"></li>
    <li><img src="{{ asset('assets/images/sponsors/sponsor5.jpg') }}" alt="Sponsor 5"></li>
    <li><img src="{{ asset('assets/images/sponsors/sponsor6.jpg') }}" alt="Sponsor 6"></li>
    <li><img src="{{ asset('assets/images/sponsors/sponsor7.jpg') }}" alt="Sponsor 7"></li>
    <li><img src="{{ asset('assets/images/sponsors/YHHM-logo.png') }}" alt="YHHM Logo"></li>
</ul>

<div class="services-wrapper bg-white py-5">
    <div class="container">
        <h2>Popular Professional Services</h2>
        <div class="service-carousel">
            <div class="service-slider">
                <!-- Service Items -->
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-01.jpg') }}" alt="Logo Design">
                        <h3><span>Build Your Brand</span>Logo Design</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-02.jpg') }}" alt="WordPress Customization">
                        <h3><span>Customize your site</span>WordPress</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-03.jpg') }}" alt="Voice Over">
                        <h3><span>Share your message</span>Voice Over</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-04.jpg') }}" alt="Whiteboard Animation">
                        <h3><span>Engage your audience</span>Whiteboard</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-05.jpg') }}" alt="Social Media Marketing">
                        <h3><span>Reach more customers</span>Social Media</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-04.jpg') }}" alt="Whiteboard Animation">
                        <h3><span>Engage your audience</span>Whiteboard</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-05.jpg') }}" alt="Social Media Marketing">
                        <h3><span>Reach more customers</span>Social Media</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-04.jpg') }}" alt="Whiteboard Animation">
                        <h3><span>Engage your audience</span>Whiteboard</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="service">
                        <img src="{{ asset('assets/images/service-05.jpg') }}" alt="Social Media Marketing">
                        <h3><span>Reach more customers</span>Social Media</h3>
                    </div>
                </div>
                <!-- Add more service items as needed -->
            </div>
            <!-- Navigation Buttons -->
            <button class="slick-prev" aria-label="Previous"></button>
            <button class="slick-next" aria-label="Next"></button>
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
                    <li><span><img src="{{ asset("assets/images/checkmark.svg") }}"> Trusted Professionals
                        </span>
                        Our freelancers go through a rigorous vetting process, ensuring you get only the best talent for your project.
                    </li>
                    <li><span><img src="{{ asset("assets/images/checkmark.svg") }}"> Transparent Pricing</span>
                        No surprises! With project-based pricing, you’ll know exactly what to expect without hidden costs.
                    </li>
                    <li><span><img src="{{ asset("assets/images/checkmark.svg") }}"> Flexible Collaboration
                        </span>Work on your terms. Hire freelancers for one-off projects or long-term collaboration. You decide!
                    </li>
                    <li><span><img src="{{ asset("assets/images/checkmark.svg") }}">Payment Protection</span> Pay securely through our platform. Funds are only released when you’re satisfied with the work delivered.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset("assets/images/homepage-img/home1.jpg") }}" class="video-img w-100">
            </div>
        </div>
    </div>
</div>
<!--    about section -->
<div class="market-wrapper py-5 bg-white">
    <div class="container">
        <h2 class="text-center">Discover Our Marketplace</h2>
        <ul class="categories-list mb-0">
            <li>
                <a href="#">
                    <img src="{{ asset('assets/images/graphics.svg') }}" alt="Graphics & Design" class="img-fluid" style="max-width: 50px; height: auto;">
                    Graphics & Design
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
            Inspiring work made on BGG Entertainment
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
<!-- <div class="guide-wrapper py-5">
    <div class="container">
        <h2>Guides to help you grow
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
</div> -->
<div class="guide-wrapper py-5">
    <div class="container">
        <h2>Guides to help you grow
            <a href="#" class="float-right">See More guides</a>
        </h2>
        <div id="guideCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-01.jpg') }}" class="d-block w-100" alt="Create a Website">
                                <div class="content">
                                    <h6>Create a Website</h6>
                                    <p>Building a stunning website from A to Z</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-02.jpg') }}" class="d-block w-100" alt="Grow With Digital Marketing">
                                <div class="content">
                                    <h6>Grow With Digital Marketing</h6>
                                    <p>Promoting your business online</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-03.jpg') }}" class="d-block w-100" alt="Build a Strong Brand">
                                <div class="content">
                                    <h6>Build a Strong Brand</h6>
                                    <p>Differentiating yourself from the competition</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-04.jpg') }}" class="d-block w-100" alt="Increase Sales">
                                <div class="content">
                                    <h6>Increase Sales</h6>
                                    <p>Optimize your sales funnel</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-05.jpg') }}" class="d-block w-100" alt="Customer Engagement">
                                <div class="content">
                                    <h6>Customer Engagement</h6>
                                    <p>Building lasting customer relationships</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-01.jpg') }}" class="d-block w-100" alt="Effective Ads">
                                <div class="content">
                                    <h6>Effective Ads</h6>
                                    <p>Targeting the right audience with ads</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-02.jpg') }}" class="d-block w-100" alt="SEO Optimization">
                                <div class="content">
                                    <h6>SEO Optimization</h6>
                                    <p>Maximize your search engine visibility</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-03.jpg') }}" class="d-block w-100" alt="E-Commerce Strategy">
                                <div class="content">
                                    <h6>E-Commerce Strategy</h6>
                                    <p>Build a thriving online store</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-01.jpg') }}" class="d-block w-100" alt="Mobile App Development">
                                <div class="content">
                                    <h6>Mobile App Development</h6>
                                    <p>Creating powerful mobile experiences</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="guide">
                                <img src="{{ asset('assets/images/guide-02.jpg') }}" class="d-block w-100" alt="Brand Marketing">
                                <div class="content">
                                    <h6>Brand Marketing</h6>
                                    <p>Building a lasting brand presence</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#guideCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#guideCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add Slick Carousel JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
        const $slider = $('.service-slider');

        $slider.slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            prevArrow: '.slick-prev',
            nextArrow: '.slick-next',
            draggable: true, // Enable dragging
            swipe: true, // Enable swipe
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });

        // Enable mouse wheel scrolling
        $slider.on('wheel', function(event) {
            event.preventDefault(); // Prevent default scrolling behavior

            if (event.originalEvent.deltaY < 0) {
                // Scroll up (previous slide)
                $slider.slick('slickPrev');
            } else {
                // Scroll down (next slide)
                $slider.slick('slickNext');
            }
        });
    });
</script>
<script>
    const guideItems = document.querySelectorAll('.guide');

    guideItems.forEach((item, index) => {
        item.addEventListener('mouseenter', () => {
            const carousel = document.getElementById('guideCarousel');
            const carouselInstance = new bootstrap.Carousel(carousel);
            carouselInstance.to(index);
        });
    });
</script>
@endsection