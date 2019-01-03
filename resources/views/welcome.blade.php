@extends('layouts.main')

@section('content')
    <!-- Slider Section Start -->
    <div class="slider index2">
        <div class="all-slide owl-item">
            <div class="single-slide" style="background-image:url({{asset('img/slides/gold_tracking_1.jpg')}});">
                <div class="slider-overlay"></div>
                <div class="slider-text">
                    <div class="slider-wraper">
                        <h1><span> secure</span> Asset tracking and <span> Verification</span> service</h1>
                        <p>We use our hardcore team coupled with cutting edge tech to track and secure your packages, both in-land and international</p>
                        <ul>
                            <li><a href="#">Read More</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image:url({{asset('img/slides/slide1.jpg')}});">
                <div class="slider-overlay"></div>
                <div class="slider-text">
                    <div class="slider-wraper">
                        <h1>Inland  <span>Haulage & Delivery</span> Service</h1>
                        <p>We deliver your goods right at your door step. </p>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Read More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="single-slide" style="background-image:url({{asset('img/slides/slide3.jpg')}});">
                <div class="slider-overlay"></div>
                <div class="slider-text">
                    <div class="slider-wraper">
                        <h1>Country to Country  <span>Sea Flight </span> Services</h1>
                        <p>over the years THSecurity company has help deliver millions of containers across the globe. </p>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Read More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->
    <!-- About Start -->
    <div class="about-sec pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-desc">
                        <div class="sec-title">
                            <h1><span>About </span>THSecurity Company</h1>
                            <p>If you are looking for a great shipping company then look no further than
                                THSecurity Services. We are the leading shipping and transport and package tracking
                                solutions company. Whether shipping to the USA or shipping from the USA we will provide
                                shipping solutions and the ability to track your packages.
                            </p>
                            <p>
                                For all your importing and
                                exporting requirements including customs clearance, freight forwarding, asset tracking,
                                container road transport and delivery. Give our friendly professional team a call today.

                            </p>
                        </div>
                        <div class="about-countup">
                            <div class="counting-inner">
                                <div class="countup-text">
                                    <h2 class="counter">683</h2>
                                    <h4>Package Reserves</h4>
                                </div>
                            </div>
                            <div class="counting-inner">
                                <div class="countup-text">
                                    <h2 class="counter">1124</h2>
                                    <h4>sucessful shipping</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-us-img">
                        <img src="{{asset('img/slides/about.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonial Section Start -->
    <div class="testimonial-sec pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-text">
                        <span class="tst-sbtitle">What our clients are saying about us</span>
                        <div class="sec-title">
                            <h1><span>Client</span> Review</h1>
                        </div>
                        <p>Over the years, we've worked hard to make our customers and clients happy, by continually
                        improving our services with client's interest. </p>

                    </div>
                </div>
                <div class="col-md-8 no-padding">
                    <div class="all-testimonial2">
                        <div class="single-testimonial2">
                            <p>THSecurity Services has been very instrumental in the transport of our minerals.
                            My company is deals with Gold, Diamond and Bauxite selling. The comfort and security that
                            they give is unmatched to any of my former patners. Excellent insightful tracking</p>
                            <div class="testimonial2">
                                <div class="inner">
                                    <div class="client-info">
                                        <h2>David Max</h2>
                                        <h3>Ceo & Founder Godia Stocks</h3>
                                    </div>
                                </div>
                                <div class="inner">
                                    <div class="testimonial2-client-img">
                                        <img src="{{asset('img/avatars/whiteman.jpg')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial2">
                            <p>Working with their inland haulage services has been a really good patnership since the
                                start of my business. Their service is swift and on-time, I have never experienced
                                a delay in stock delivery since I started with THSecurity company.
                            </p>
                            <div class="testimonial2">
                                <div class="inner">
                                    <div class="client-info">
                                        <h2>Kojo Maxwell</h2>
                                        <h3>Manager, Door-to-Door Delivery Limited</h3>
                                    </div>
                                </div>
                                <div class="inner">
                                    <div class="testimonial2-client-img">
                                        <img src="{{asset('img/avatars/maxwell.jpg')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

@endsection
