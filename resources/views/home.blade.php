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
                        <h4 class="box-slide-title">WELCOME TO</h4>
                        <h5 class="box-slide-sub-title">DIGITAL TRADING OPTIONS</h5>
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
                        <h4 class="box-slide-title">We are the Leaders</h4>
                        <h5 class="box-slide-sub-title">of the cryptocurrency Investment Industry</h5>
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
                        <h4 class="box-slide-title">Tell us what you need</h4>
                        <h5 class="box-slide-sub-title">We Care our Customers</h5>
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
                    <h2 class="column-title title-small"><span>About us</span>
                        <span style="color: #0E608C; font-weight: bold;">Digital Trading Options</span></h2>
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
                    <h2 class="section-title"><span>Our Services</span>
                        <strong style="color: #0E608C;">What We Do</strong></h2>
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
                <div class="col-lg-12 align-self-center">
                    <h3 class="call-to-action-title">Forex Cross Rates</h3>

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright">
                            <a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank">
                                <span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                            {
                                "width": "100%",
                                "height": "450",
                                "currencies": [
                                "EUR",
                                "USD",
                                "JPY",
                                "GBP",
                                "CHF",
                                "AUD",
                                "CAD",
                                "NZD",
                                "CNY"
                            ],
                                "isTransparent": false,
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div>
            </div>
        </div>
    </section>

    <section class="ts-services" id="ts-services" style="background-color: #dbe4fd;">
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-12">
                    <h2 class="section-title border-title-left">Investment Strategies</h2>
                    <p style="color: #393939; font-weight: bold;">Digital Trading Options seeks to invest in assets that offer the potential for highly attractive risk adjusted returns. We will continue to focus primarily on:</p>
                </div>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_one" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-pie-chart2"></i></span><span class="tab-text-title">Financial Consulting</span></span></a></li>
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
                                            <h3 class="tab-content-title">Opportunities for your Financial needs</h3>
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
                                            <h3 class="tab-content-title">We provide Equity</h3>
                                            <p>Investments with more modest equity requirements ($5 to $95 million) that are often avoided by larger institutional investment funds.</p>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle align-self-center" style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img2.png') }}" alt="">
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
                                        <div class="bg-contain-verticle"
                                             style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Market Performance</h3>
                                            <p>Growth markets including strong middle markets exhibiting job creation and stable economic performance.</p>
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
                                            <p>Distressed opportunities including non-performing loans, bank owned assets, and equity recapitalization.</p>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle"
                                             style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 3 end-->
                        </div>
                        <!-- tab content-->
                    </div>
                    <!-- Schedule tab end-->
                </div>
                <!-- Col end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>

    <section class="ts-facts-area no-padding" id="ts-facts-area" style="background-color: #dbe4fd; padding-top: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="intro-video">
                        <img class="img-fluid" src="{{ asset('main/images/intro-video.jpg') }}" alt="">
                        <a class="popup" href="https://www.youtube.com/embed/FRSIXQv7Y7g?autoplay=1&amp;loop=1">
                            <div class="video-icon"><i class="icon icon-play"></i></div>
                        </a>
                    </div>
                    <!-- Intro video end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-6 col-md-12 ts-padding text-lg-left text-center">
                    <h2 class="column-title">Market Overview</h2>

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "width": "700",
                                "height": "500",
                                "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                                "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                                "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                                "tabs": [
                                {
                                    "title": "Indices",
                                    "symbols": [
                                        {
                                            "s": "FOREXCOM:SPXUSD",
                                            "d": "S&P 500"
                                        },
                                        {
                                            "s": "FOREXCOM:NSXUSD",
                                            "d": "Nasdaq 100"
                                        },
                                        {
                                            "s": "FOREXCOM:DJI",
                                            "d": "Dow 30"
                                        },
                                        {
                                            "s": "INDEX:NKY",
                                            "d": "Nikkei 225"
                                        },
                                        {
                                            "s": "INDEX:DEU30",
                                            "d": "DAX Index"
                                        },
                                        {
                                            "s": "FOREXCOM:UKXGBP",
                                            "d": "FTSE 100"
                                        }
                                    ],
                                    "originalTitle": "Indices"
                                },
                                {
                                    "title": "Commodities",
                                    "symbols": [
                                        {
                                            "s": "CME_MINI:ES1!",
                                            "d": "S&P 500"
                                        },
                                        {
                                            "s": "CME:6E1!",
                                            "d": "Euro"
                                        },
                                        {
                                            "s": "COMEX:GC1!",
                                            "d": "Gold"
                                        },
                                        {
                                            "s": "NYMEX:CL1!",
                                            "d": "Crude Oil"
                                        },
                                        {
                                            "s": "NYMEX:NG1!",
                                            "d": "Natural Gas"
                                        },
                                        {
                                            "s": "CBOT:ZC1!",
                                            "d": "Corn"
                                        }
                                    ],
                                    "originalTitle": "Commodities"
                                },
                                {
                                    "title": "Bonds",
                                    "symbols": [
                                        {
                                            "s": "CME:GE1!",
                                            "d": "Eurodollar"
                                        },
                                        {
                                            "s": "CBOT:ZB1!",
                                            "d": "T-Bond"
                                        },
                                        {
                                            "s": "CBOT:UB1!",
                                            "d": "Ultra T-Bond"
                                        },
                                        {
                                            "s": "EUREX:FGBL1!",
                                            "d": "Euro Bund"
                                        },
                                        {
                                            "s": "EUREX:FBTP1!",
                                            "d": "Euro BTP"
                                        },
                                        {
                                            "s": "EUREX:FGBM1!",
                                            "d": "Euro BOBL"
                                        }
                                    ],
                                    "originalTitle": "Bonds"
                                },
                                {
                                    "title": "Forex",
                                    "symbols": [
                                        {
                                            "s": "FX:EURUSD"
                                        },
                                        {
                                            "s": "FX:GBPUSD"
                                        },
                                        {
                                            "s": "FX:USDJPY"
                                        },
                                        {
                                            "s": "FX:USDCHF"
                                        },
                                        {
                                            "s": "FX:AUDUSD"
                                        },
                                        {
                                            "s": "FX:USDCAD"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                </div>
                <!-- Content Row 2 end-->
            </div>
            <!-- Col end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Fun fact end-->

    <section class="ts-features no-padding" style="margin-top: 20px;">
        <div class="container-fluid">

                <h2 class="section-title">Our Approach</h2>

            <div class="row">
                <div class="col-lg-4 feature-box1" style="background-image: url({{ asset('main/images/features/feature1.jpg') }});">
                    <div class="ts-feature text-center">
                        <div class="ts-feature-info"><i class="icon icon-consut2"></i>
                            <h3 class="ts-feature-title">Services For Individuals</h3>
                            <p> * Pre- and Post-Retirement Planning<br>
                                * Fee-Based Portfolio Management<br>
                                * IRAs & Roth IRAs<br>
                                * Fee-Based Investment Planning<br>
                                * Wealth Transfer and Charitable Planning.</p>
                        </div>
                    </div>
                    <!-- feature 1 end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-4 feature-box2" style="background-image: url({{ asset('main/images/features/feature2.jpg') }});">
                    <div class="ts-feature text-center">
                        <div class="ts-feature-info"><i class="icon icon-chart2"></i>
                            <h3 class="ts-feature-title">Asset Management Strategies</h3>
                            <p> * Private Investment Management (PIM)<br>
                                * Fee-Based Portfolio Management<br>
                                * Tax-Efficient Investment Strategies </p>
                        </div>
                    </div>
                    <!-- feature 2 end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-4 feature-box3" style="background-image: url({{ asset('main/images/features/feature3.jpg') }});">
                    <div class="ts-feature text-center">
                        <div class="ts-feature-info"><i class="icon icon-clock3"></i>
                            <h3 class="ts-feature-title">Services for Endowments and Foundations</h3>
                            <p> * Investment Policy Analysis<br>
                                * Retirement Plan Services<br>
                                * Philanthropic-Donor Services </p>
                        </div>
                    </div>
                    <!-- feature 3 end-->
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </section>

    <section id="call-to-action" class="call-to-action-bg bg-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <h3 class="call-to-action-title">Cryptocurrency Market Overview</h3>
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "400",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>

    <section class="main-container" id="main-container" style="padding-top: 5px;">
        <div class="ts-price-box">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="section-title"><span>Our</span>Investment Plans</h2>
                    </div>
                    <!-- Col End -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-boxed">

                            @foreach($packages as $package)
                            <div class="single-price-box">
                                <div class="pricing-plan" style="background-color: #ebf1ff; margin-bottom: 5px;">
                                    <div class="pricing-header border-left" style="background-color: #2154CF;">
                                        <h2 class="plan-name">{{ $package->name }}</h2>
                                        <h3 class="plan-price">
                                            @if(!empty($package->min))
                                                <p style="font-size: 18px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                                            @endif

                                            @if(!empty($package->max))
                                            <p style="font-size: 18px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                                            @else
                                            <p style="font-size: 18px;">and above</p>
                                            @endif
                                        </h3>
                                    </div>
                                    <ul class="list-unstyled">
                                        @if(!empty($package->option1))
                                        <li style="font-size: 18px;">{{ $package->option1 }}
                                            <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->option2))
                                            <li style="font-size: 18px;">{{ $package->option2 }}
                                                <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->option3))
                                            <li style="font-size: 18px;">{{ $package->option3 }}
                                                <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->referral_bonus))
                                        <li style="font-size: 18px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                        @endif

                                        @if(!empty($package->expert_advice))
                                            <li style="font-size: 18px;">{{ $package->expert_advice }}</li>
                                        @endif
                                    </ul>
                                    <div>
                                        <a target="_self" href="{{ route('register') }}" class="btn btn-primary">Sign up</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ts-testimonial-slide" class="ts-testimonial-slide solid-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slide owl-carousel owl-theme">
                        <div class="row quote-item-area">
                            <div class="col-md-5">
                                <div class="quote-thumb">
                                    <img class="quote-thumb-img" src="{{ asset('main/testimonial/aljazeera.png') }}">

                                </div>
                                <!-- Quote thumb end -->
                            </div>
                            <!-- Col end -->

                            <div class="col-md-7">
                                <div class="quote-item-content">
                                    <h3 class="quote-name">Aljazeera Finance, 2019 </h3>
                                    <p class="quote-message">
                                        Digital Trading Options' Financial performance continues to rise against the market's down trend. They have proven to have a solid plan for investors.</p>
                                </div>
                                <!-- Quote content end -->
                            </div>
                            <!-- Col end -->
                        </div>

                        <div class="row quote-item-area">
                            <div class="col-md-5">
                                <div class="quote-thumb">
                                    <img class="quote-thumb-img" src="{{ asset('main/testimonial/bbcuk.png') }}">

                                </div>
                                <!-- Quote thumb end -->
                            </div>
                            <!-- Col end -->

                            <div class="col-md-7">
                                <div class="quote-item-content">
                                    <h3 class="quote-name">BBC News, UK.</h3>
                                    <p class="quote-message">
                                        Digital Trading Options has been the most attractive cryptocurrency and investment platform on the Forex market as at 2017. </p>
                                </div>
                                <!-- Quote content end -->
                            </div>
                            <!-- Col end -->
                        </div>

                        <div class="row quote-item-area">
                            <div class="col-md-5">
                                <div class="quote-thumb">
                                    <img class="quote-thumb-img" src="{{ asset('main/testimonial/cnbc.png') }}">

                                </div>
                                <!-- Quote thumb end -->
                            </div>
                            <!-- Col end -->

                            <div class="col-md-7">
                                <div class="quote-item-content">
                                    <h3 class="quote-name">CNBC International</h3>
                                    <p class="quote-message">Digital Trading Options achieve 43% returns in revenue from Stocks, Cryptocurrencies and Forex Trading.</p>
                                </div>
                                <!-- Quote content end -->
                            </div>
                            <!-- Col end -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quote-area bg-overlay overlay-color" id="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 qutoe-form-inner-left">
                    <div class="quote_form">
                        <h2 class="column-title title-white"><span>We are always ready</span> Request Consultation</h2>
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
                            <div class="quote-item quote-square"><span class="quote-text">Digital Trading Options has been the most attractive Crypto trading and forex platform currently on the market, helping numerous businesses gain access to financing which they would not be able to obtain conventionally and at extremely favorable rates and terms.</span>
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

    <section class="main-container">
        <div class="container">
            <div class="col-md-12">
                <h2 class="section-title">News and Updates</h2>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-md-12">
                    <div class="feedgrabbr_widget" id="fgid_71e82e89566823ac785c365ed"></div>
                    <script>if (typeof (fg_widgets) === "undefined") fg_widgets = new Array(); fg_widgets.push("fgid_71e82e89566823ac785c365ed");</script>
                    <script async src="https://www.feedgrabbr.com/widget/fgwidget.js"></script>
                </div>

            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Featured projects end-->

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
