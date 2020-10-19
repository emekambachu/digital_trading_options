@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <div id="box-slide" class="owl-carousel owl-theme page-slider mrt-140">
        <div class="item" style="background-image:url({{ asset('main/images/slider/bg4.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h2 class="box-slide-title">27 Years Young</h2>
                        <h3 class="box-slide-sub-title">To Change Your World</h3>
                        <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent
                            like.
                        </p>
                        <p>
                            <a href="#" class="slider btn btn-primary">Our Service</a>
                            <a href="#" class="slider btn btn-border">Contact Us</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Item 1 end -->

        <div class="item" style="background-image:url({{ asset('main/images/slider/bg5.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h2 class="box-slide-title">We are the Leader</h2>
                        <h3 class="box-slide-sub-title">In Finance Industry</h3>
                        <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent
                            like.
                        </p>
                        <p>
                            <a href="#" class="slider btn btn-primary">Know Us</a>
                            <a href="#" class="slider btn btn-border">Contact Us</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 2 end -->

        <div class="item" style="background-image:url({{ asset('main/images/slider/bg6.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h2 class="box-slide-title">To Reach more People</h2>
                        <h3 class="box-slide-sub-title">We Care our Customers</h3>
                        <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent
                            like.
                        </p>
                        <p>
                            <a href="#" class="slider btn btn-primary">Get a Quote</a>
                            <a href="#" class="slider btn btn-border">Contact Us</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 3 end -->
    </div>
    <!-- Box owl carousel end-->

    <div class="about-pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-desc">
                    <h2 class="column-title title-small"><span>About us</span>Different kind of Financial firm</h2>
                    <p>The mission of the Bizipress Financial Planning Association is to setup, promote and implement high quality
                        standards for competence and ethical behavior for the financial advisory sector.</p>
                    <div class="gap-15"></div>
                    <p>It’s an approach that consistently drives best decisions. And Bizipress, we carry out those decisions free
                        from the pressure of product bias.</p>
                    <div class="ceo-signature">
                        <div class="ceo-desc">
                            <img class="img-fluid" src="{{ asset('main/images/pages/profile_image.png') }}" alt="">
                            <div class="ceo-designation">
                                <p>Daniel Statham</p>
                                <small>CEO Bizipress</small>
                            </div>
                        </div>
                        <!-- Desc End-->
                        <img class="img-fluid" src="{{ asset('main/images/pages/sign.png') }}" alt="">
                    </div>
                    <!-- Signature End-->
                </div>
                <!-- Col end-->
                <div class="col-lg-6 text-md-center mrt-40">
                    <img class="img-fluid" src="{{ asset('main/images/pages/work_circle.png') }}" alt="">
                </div>
                <!-- Col end-->
            </div>
            <!-- Main row end-->
        </div>
        <!-- Container 1 end-->
    </div>
    <!-- About pattern End-->

    <section class="ts-services" id="ts-services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Our Services</span>What We Do</h2>
                </div>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/images/services/service1.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-pie-chart2"></i>
                        </span>
                            <h3 class="service-title">Financial Planning</h3>
                            <p>Mutual funds pool money from many investors to purchase broad range of investments, forward thinking
                                tea such as stocks.</p>
                            <p><a class="link-more" href="#">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                    </div>
                    <!-- Service1 end-->
                </div>
                <!-- Col 1 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/images/services/service2.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-tax"></i>
                        </span>
                            <h3 class="service-title">Tax Planning</h3>
                            <p>Mutual funds pool money from many investors to purchase broad range of investments, forward thinking
                                tea such as stocks.</p>
                            <p><a class="link-more" href="#">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                    </div>
                    <!-- Service2 end-->
                </div>
                <!-- Col 2 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/images/services/service3.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-savings"></i>
                        </span>
                            <h3 class="service-title">Saving Strategy</h3>
                            <p>Mutual funds pool money from many investors to purchase broad range of investments, forward thinking
                                tea such as stocks.</p>
                            <p><a class="link-more" href="#">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                    </div>
                    <!-- Service3 end-->
                </div>
                <!-- Col 3 end-->
            </div>
            <!-- Content 1 row end-->
            <div class="gap-60"></div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/images/services/service4.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-mutual-fund"></i>
                        </span>
                            <h3 class="service-title">Mutual Funds</h3>
                            <p>Mutual funds pool money from many investors to purchase broad range of investments, forward thinking
                                tea such as stocks.</p>
                            <p><a class="link-more" href="#">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                    </div>
                    <!-- Service4 end-->
                </div>
                <!-- Col 4 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/images/services/service5.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-loan"></i>
                        </span>
                            <h3 class="service-title">Business Loan</h3>
                            <p>Mutual funds pool money from many investors to purchase broad range of investments, forward thinking
                                tea such as stocks.</p>
                            <p><a class="link-more" href="#">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                    </div>
                    <!-- Service5 end-->
                </div>
                <!-- Col 5 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/images/services/service6.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-consult"></i>
                        </span>
                            <h3 class="service-title">Insurance Consulting</h3>
                            <p>Mutual funds pool money from many investors to purchase broad range of investments, forward thinking
                                tea such as stocks.</p>
                            <p><a class="link-more" href="#">Read More <i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                    </div>
                    <!-- Service6 end-->
                </div>
                <!-- Col 6 end-->
            </div>
            <!-- Content Row 2 end-->
        </div>
        <!-- Container end-->
    </section>

    <section class="ts-facts-area solid-bg no-padding" id="ts-facts-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="intro-video">
                        <img class="img-fluid" src="{{ asset('main/images/intro-video.jpg') }}" alt="">
                        <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                            <div class="video-icon"><i class="icon icon-play"></i></div>
                        </a>
                    </div>
                    <!-- Intro video end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-6 col-md-12 ts-padding text-lg-left text-center">
                    <h2 class="column-title">25 Years of Experience</h2>
                    <p class="intro-desc">We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains.</p>
                    <div class="gap-20"></div>
                    <div class="row facts-wrapper text-center">
                        <div class="col-md-6">
                            <div class="ts-facts"><span class="facts-icon"><i class="icon icon-chart2"></i></span>
                                <div class="ts-facts-content">
                                    <h4 class="ts-facts-num"><span class="counterUp">85</span></h4>
                                    <p class="facts-desc">Business Growth %</p>
                                </div>
                            </div>
                            <!-- Facts end-->
                        </div>
                        <!-- Col 1 end-->
                        <div class="col-md-6">
                            <div class="ts-facts"><span class="facts-icon"><i class="icon icon-invest"></i></span>
                                <div class="ts-facts-content">
                                    <h4 class="ts-facts-num"><span class="counterUp">467</span></h4>
                                    <p class="facts-desc">Successful Investment</p>
                                </div>
                            </div>
                            <!-- Facts end-->
                        </div>
                        <!-- Col 1 end-->
                    </div>
                    <!--Row End -->
                    <div class="gap-30"></div>
                    <div class="row facts-wrapper text-center">
                        <div class="col-md-6">
                            <div class="ts-facts facts-col"><span class="facts-icon"><i class="icon icon-money-1"></i></span>
                                <div class="ts-facts-content">
                                    <h4 class="ts-facts-num"><span class="counterUp">2435</span></h4>
                                    <p class="facts-desc">Cases Completed</p>
                                </div>
                            </div>
                            <!-- Facts end-->
                        </div>
                        <!-- Col 1 end-->
                        <div class="col-md-6">
                            <div class="ts-facts"><span class="facts-icon"><i class="icon icon-deal"></i></span>
                                <div class="ts-facts-content">
                                    <h4 class="ts-facts-num"><span class="counterUp">139</span></h4>
                                    <p class="facts-desc">Running Projects</p>
                                </div>
                            </div>
                            <!-- Facts end-->
                        </div>
                        <!-- Col 1 end-->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Content Row 2 end-->
            </div>
            <!-- Col end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Fun fact end-->

    <section class="ts-featured-cases">
        <div class="container">
            <div class="section-title-vertical">
                <h2 class="section-title">Featured Cases</h2>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="owl-carousel owl-theme featured-cases-slide" id="featured-cases-slide">
                    <div class="item">
                        <div class="featured-projects-content">
                            <div class="featured-projects-text float-left">
                                <h2 class="column-title"><span>Marketing Growth</span> Modern Woodman Ltd.</h2>
                                <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                                    goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                                    you and make your dream come true.</p>
                                <p><a class="btn btn-primary" href="#"> Read More</a></p>
                            </div>
                            <div class="features-slider-img float-right">
                                <img class="img-fluid" src="{{ asset('main/images/slider-small/featured-slider1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Item 1 end-->
                    <div class="item">
                        <div class="featured-projects-content">
                            <div class="featured-projects-text pull-left">
                                <h2 class="column-title"><span>Tax Planning</span>Alpha Century Software Inc.</h2>
                                <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                                    goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                                    you and make your dream come true.</p>
                                <p><a class="btn btn-primary" href="#"> Read More</a></p>
                            </div>
                            <div class="features-slider-img pull-right">
                                <img src="{{ asset('main/images/slider-small/featured-slider2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 end-->
                    <div class="item">
                        <div class="featured-projects-content">
                            <div class="featured-projects-text float-left">
                                <h2 class="column-title"><span>Business Loan</span>Spider Microsystem</h2>
                                <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                                    goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                                    you and make your dream come true.</p>
                                <p><a class="btn btn-primary" href="#"> Read More</a></p>
                            </div>
                            <div class="features-slider-img float-right">
                                <img class="img-fluid" src="{{ asset('main/images/slider-small/featured-slider3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 end-->
                </div>
                <!-- Featured Projects slider end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Featured projects end-->

    <section class="quote-area bg-overlay overlay-color" id="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 qutoe-form-inner-left">
                    <div class="quote_form">
                        <h2 class="column-title title-white"><span>We are always ready</span> Request a call back</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Full Name" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email Address" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Row 1 end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Row end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" rows="6" name="comment" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Row end-->
                        <div class="form-group text-right mb-0">
                            <input class="button btn btn-primary" type="submit" value="Send Message">
                        </div>
                    </div>
                    <!-- Quote form end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-6 align-self-center">
                    <div class="owl-carousel owl-theme testimonial-slide owl-dark" id="testimonial-slide">
                        <div class="item">
                            <div class="quote-item quote-square"><span class="quote-text">The Bizipress loan has been  the most attractive loan products on the market, helping numerous businesses gain access to financing they would not be able to obtain conventionally and at extremely favorable rates and terms.</span>
                                <div class="quote-item-footer">
                                    {{--                                    <img class="testimonial-thumb" src="{{ asset('mainimages/clients/testimonial1.png') }}" alt="testimonial">--}}
                                    <div class="quote-item-info">
                                        <p class="quote-author">Gabriel Denis</p><span class="quote-subtext">Chairman, OKT</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote item end-->
                        </div>
                        <!-- Item 1 end-->
                        <div class="item">
                            <div class="quote-item quote-square"><span class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi aliquip consequat.</span>
                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('main/images/clients/testimonial2.png') }}" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Weldon Cash</h3><span class="quote-subtext">CFO, First Choice</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote item end-->
                        </div>
                        <!-- Item 2 end-->
                        <div class="item">
                            <div class="quote-item quote-square"><span class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut commodo consequat.</span>
                                <div class="quote-item-footer">
                                    <img class="testimonial-thumb" src="{{ asset('main/images/clients/testimonial3.png') }}" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Minter Puchan</h3><span class="quote-subtext">Director, AKT</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote item end-->
                        </div>
                        <!-- Item 3 end-->
                    </div>
                    <!-- Testimonial carousel end-->
                </div>
                <!-- Col end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Quote area end-->

    <section class="news" id="news">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Don't Miss</span>Our Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-post post-large">
                        <div class="latest-post-media">
                            <a class="latest-post-img" href="#">
                                <img class="img-fluid" src="{{ asset('main/images/news/news1.jpg') }}" alt="img">
                            </a><a class="post-cat" href="#">News</a>
                            <div class="post-body"><span class="post-item-date">20 Nov, 2017</span>
                                <h4 class="post-title"><a href="#">Spacex's interviewing process is rude as hell</a></h4><a class="btn btn-primary" href="#">Read More</a>
                            </div>
                            <!-- Post body end-->
                        </div>
                        <!-- Post media end-->
                    </div>
                    <!-- Latest post end-->
                </div>
                <!-- Col big news end-->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="latest-post">
                                <div class="post-body"><a class="post-cat" href="#">News</a>
                                    <h4 class="post-title"><a href="#">American Express finally ditches</a></h4><span class="post-item-date">20 Nov, 2017</span>
                                    <div class="post-text">
                                        <p>Earlier this year, the firm announced it had reached its goal of hiring.</p>
                                        <div class="text-right"><a href="#">Read More <i class="fa fa-long-arrow-right"> </i></a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest post end-->
                        </div>
                        <!-- Col end-->
                        <div class="col-lg-6">
                            <div class="latest-post">
                                <div class="post-body"><a class="post-cat" href="#">News</a>
                                    <h4 class="post-title"><a href="#">Disney buys 21st Century Fox</a></h4><span class="post-item-date">20 Nov, 2017</span>
                                    <div class="post-text">
                                        <p>Earlier this year, the firm announced it had reached its goal of hiring.</p>
                                        <div class="text-right"><a href="#">Read More <i class="fa fa-long-arrow-right"> </i></a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest post end-->
                        </div>
                        <!-- Col end-->
                    </div>
                    <!-- row end-->
                </div>
                <!-- Col small news end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- News end-->

    <section class="clients-area" id="clients-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 owl-carousel owl-theme text-center partners" id="partners-carousel">
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client1.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client2.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client3.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client4.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client5.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client6.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client7.png') }}" alt="">
                        </a>
                    </figure>
                </div>
                <!-- Owl carousel end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Partners end-->
@endsection
