@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <div id="box-slide" class="owl-carousel owl-theme page-slider mrt-140">
        <div class="item" style="background-image:url({{ asset('main/slider/slide1.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h2 class="box-slide-title">WELCOME TO</h2>
                        <h3 class="box-slide-sub-title">DIGITAL TRADING OPTIONS</h3>
                        <p class="box-slide-description">Enjoy the best rates from your Cryptocurrency Investments</p>
                        <p>
                            <a href="{{ route('register') }}" class="slider btn btn-primary">Sign up</a>
                            <a href="{{ route('login') }}" class="slider btn btn-border">Login</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Item 1 end -->

        <div class="item" style="background-image:url({{ asset('main/slider/slide2.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h2 class="box-slide-title">We are the Leaders</h2>
                        <h3 class="box-slide-sub-title">of the cryptocurrency Investment Industry</h3>
                        <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking to manage your investment portfolio
                        </p>
                        <p>
                            <a href="{{ url('about') }}" class="slider btn btn-primary">About us</a>
                            <a href="{{ url('services') }}" class="slider btn btn-border">Services</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 2 end -->

        <div class="item" style="background-image:url({{ asset('main/slider/slide3.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h2 class="box-slide-title">Tell us what you need</h2>
                        <h3 class="box-slide-sub-title">We Care our Customers</h3>
                        <p class="box-slide-description">Our Customer care team are ready to solve your financial problems via our live chat</p>
                        <p>
                            <a href="{{ url('contact') }}" class="slider btn btn-primary">Contact us</a>
{{--                            <a href="#" class="slider btn btn-border">Contact Us</a>--}}
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
                    <h2 class="column-title title-small"><span>About us</span>Digital Trading Options</h2>
                    <p>We are a value-oriented investment firm that applies a private equity approach to investing in the public markets. Digital Trading Options manages long and Short term capital for Private investors, endowments, foundations, family, offices and other institutional investors.<br>
                        We invest in a concentrated long/short portfolio of equity securities of small to middle market companies. This strategy is the core of Digital Trading Options’s activities and has the flexibility to take advantage of the best public and private opportunities in this segment of the market. Digital Trading Options seeks to achieve investment gains through traditional trading with best rate in the the market.</p>
                    <div class="gap-15"></div>
                </div>

                <!-- Col end-->
                <div class="col-lg-6 text-md-center mrt-40">
                    <img class="img-fluid" src="{{ asset('main/home/h1.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('main/services/crypto.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-pie-chart2"></i>
                        </span>
                            <h3 class="service-title">Cryptocurrencies</h3>
                            <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                        </div>
                    </div>
                    <!-- Service1 end-->
                </div>

                <!-- Col 1 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/serv1.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-tax"></i>
                        </span>
                            <h3 class="service-title">Forex</h3>
                            <p>Options for investing cash including certificates of deposit and the money market funds. With CDs. </p>
                        </div>
                    </div>
                    <!-- Service2 end-->
                </div>
                <!-- Col 2 end-->

                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/options_trading.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-savings"></i>
                        </span>
                            <h3 class="service-title">Option Trading</h3>
                            <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
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
                            <img class="img-fluid" src="{{ asset('main/services/asset_management.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-mutual-fund"></i>
                        </span>
                            <h3 class="service-title">Asset Management</h3>
                            <p>With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.</p>
                        </div>
                    </div>
                    <!-- Service4 end-->
                </div>
                <!-- Col 4 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/commodities.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-loan"></i>
                        </span>
                            <h3 class="service-title">Commodities</h3>
                            <p>A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.</p>
                        </div>
                    </div>
                    <!-- Service5 end-->
                </div>

                <!-- Col 5 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/funds_management.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-consult"></i>
                        </span>
                            <h3 class="service-title">Funds Management</h3>
                            <p>Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.</p>
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

    <section id="call-to-action" class="call-to-action-bg bg-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <h3 class="call-to-action-title">Forex Cross Rates</h3>

                    <div class="tradingview-widget-container" style="width: 1100px; height: 400px;">
                        <iframe scrolling="no" allowtransparency="true" style="box-sizing: border-box; height: calc(368px); width: 1100px;" src="https://s.tradingview.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A1100%2C%22height%22%3A400%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%5D%2C%22isTransparent%22%3Afalse%2C%22colorTheme%22%3A%22light%22%2C%22utm_source%22%3A%22digitalmetricsinvest.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%7D" frameborder="0"></iframe>

                        <style>
                            .tradingview-widget-copyright {
                                font-size: 13px !important;
                                line-height: 32px !important;
                                text-align: center !important;
                                vertical-align: middle !important;
                                font-family: 'Trebuchet MS', Arial, sans-serif !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright .blue-text {
                                color: #2196f3 !important;
                            }

                            .tradingview-widget-copyright a {
                                text-decoration: none !important;
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:visited {
                                color: #9db2bd !important;
                            }

                            .tradingview-widget-copyright a:hover .blue-text {
                                color: #38acdb !important;
                            }

                            .tradingview-widget-copyright a:active .blue-text {
                                color: #299dcd !important;
                            }

                            .tradingview-widget-copyright a:visited .blue-text {
                                color: #2196f3 !important;
                            }
                        </style></div>

                </div>
            </div>
        </div>
    </section>

    <section class="ts-services solid-bg" id="ts-services">
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-12">
                    <h2 class="section-title border-title-left">Investment Strategies</h2>
                    <p>Digital Trading Options seeks to invest in assets that offer the potential for highly attractive risk adjusted returns. We will continue to focus primarily on:</p>
                </div>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_one" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-pie-chart2"></i></span><span class="tab-text-title">Best Consulting</span></span></a></li>
                            <!-- list 1 end-->
                            <li class="nav-item"><a class="nav-link animated fadeIn active show" href="#tab_two" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-loan"></i></span><span class="tab-text-title">Market Growth</span></span></a></li>
                            <!-- list 2 end-->
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_three" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-savings"></i></span><span class="tab-text-title">Saving Strategy</span></span></a></li>
                            <!-- list 3 end-->
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_four" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-consult"></i></span><span class="tab-text-title">Best Consulting</span></span></a></li>
                            <!-- list 4 end-->
                        </ul>
                        <!-- Nav-tabs end-->
                        <div class="tab-content">
                            <div class="tab-pane animated fadeInRight" id="tab_one">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle" style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Solution for your Financial needs</h3>
                                            <p>Compelling opportunities in strong secondary markets to capitalize on the changing demographics, preferences, and supply/demand imbalances through investments in Equity, Bonds, Crypto currency, Forex.</p>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 1 end-->
                            <div class="tab-pane animated fadeInRight active show" id="tab_two">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">We provide loan to Financial Needs</h3>
                                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                                error sit voluptatem accusantium doloremque laudantium.</p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle align-self-center" style="background-image:url(images/tabs/tab-shape.png);">
                                            <img class="img-center img-fluid" src="images/tabs/img2.png" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 2 end-->
                            <div class="tab-pane animated fadeInRight" id="tab_three">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle" style="background-image:url(images/tabs/tab-shape.png);">
                                            <img class="img-center img-fluid" src="images/tabs/img3.png" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Register for online invoicing</h3>
                                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                                error sit voluptatem accusantium doloremque laudantium.</p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 3 end-->
                            <div class="tab-pane animated fadeInRight" id="tab_four">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">We Provide Insurance Solutions</h3>
                                            <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
                                                error sit voluptatem accusantium doloremque laudantium.</p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle" style="background-image:url(images/tabs/tab-shape.png);">
                                            <img class="img-center img-fluid" src="images/tabs/img4.png" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 3 end-->
                        </div>
                        <!-- tab content-->
                        <div class="gap-60"></div>
                        <div class="text-center"><a class="btn btn-primary" href="#"> Check More Services</a></div>
                    </div>
                    <!-- Schedule tab end-->
                </div>
                <!-- Col end-->
            </div>
            <!-- Content row end-->
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
