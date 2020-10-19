@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <section id="slider" class="slider slide-overlay-black">

        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>

                    <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">

                        <img src="{{ asset('main/slider/slide3.jpg') }}" alt="Slide Background Image" width="1920" height="1280">

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-110','-100','-110','-110']" data-fontsize="['16','16','16','12']" data-lineheight="['25','25','25','25']" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--subheadline">Asset and Financial Management platform</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']" data-fontsize="['60', '50', '40', '30']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--headline">Digital Metrics <br>Investments</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','100']" data-fontsize="['16', '16', '16', '12']" data-lineheight="['25','25','25','25']" data-width="none" data-height="none" data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--bio">Just Enjoy Your Best Rates While We Are Doing The Rest For You</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['160','110','40','20']" data-y="['middle','middle','middle','middle']" data-voffset="['160','160','190','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--primary btn--rounded mr-30" href="{{ route('register') }}">Sign up</a>
                                <a class="btn btn--primary btn--rounded mr-30" href="{{ url('investments') }}">Investments</a>
                            </div>
                        </div>
                    </li>

                    <li data-transition="zoomin" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">

                        <img src="{{ asset('main/assets/images/sliders/slide-bg/2.jpg') }}"
                             alt="Slide Background Image" width="1920" height="1280">

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-110','-100','-110','-110']" data-fontsize="['16','16','16','12']" data-lineheight="['25','25','25','25']" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":750,"speed":750,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--subheadline">Instant, Secure & Private</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']" data-fontsize="['60', '50', '40', '30']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-transform_idle="o:1;" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--headline">Find & Compare The Best <br>Investment Rates</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','100']" data-fontsize="['16', '16', '16', '12']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--bio">Build Your Financial Future</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['160','110','40','20']" data-y="['middle','middle','middle','middle']" data-voffset="['160','160','190','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--white btn--bordered btn--rounded" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </li>

                    <li data-transition="slideoverleft" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">

                        <img src="{{ asset('main/slider/slide1.jpg') }}" alt="Slide Background Image" width="1920" height="1280">

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['70','50','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-13','-13','-13','10']" data-fontsize="['60', '50', '40', '30']" data-lineheight="['6','60','60','60']" data-width="none" data-height="none" data-transform_idle="o:1;" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="slide--headline">Invest in your <br>Future</div>
                        </div>

                        <div class="tp-caption" data-x="['left','left','left','left']" data-hoffset="['160','110','40','20']" data-y="['middle','middle','middle','middle']" data-voffset="['160','160','190','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                            <div class="slide-action">
                                <a class="btn btn--white btn--bordered btn--rounded" href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="featured2" class="featured featured-2 about-2 pb-50">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
                    <div class="heading heading-1">
                        <h2 class="heading--title">About Digital Metrics Investments</h2>
                        <p class="heading--desc">We are a value-oriented investment firm that applies a private equity approach to investing in the public markets. DMI manages long and Short term capital for Private investors, endowments, foundations, family, offices and other institutional investors.<br><br>

                            We invest in a concentrated long/short portfolio of equity securities of small to middle market companies. This strategy is the core of DMI’s activities and has the flexibility to take advantage of the best public and private opportunities in this segment of the market. Digital Metrics Investment seeks to achieve investment gains through traditional trading with best rate in the the market.</p>
                        <a class="btn btn--gradient btn--rounded" href="{{ url('about') }}">More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInRight;">
                    <div class="about--img">
                        <img src="{{ asset('main/home/h1.jpg') }}" alt="featured">
                    </div>
                </div>
            </div>

            <div class="row mt-80">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-1 mb-10">
                        <h2 class="heading--title">Our Role</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay="100ms"
                     style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Investing</h3>
                            <p class="feature-card-desc">A wide selection of investment product be it foreign exchange markets, bitcoin, gold, oil, stocks, real estates or IRAs. Where instead of tying an investment to a particular portfolio we help to diversify to different portfolios.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Trading</h3>
                            <p class="feature-card-desc">With a Powerful trading tools, resources and support. Our experts traders boast of a 75 to 90 percent winning ratio on creating profits monthly (guaranteed) for a life time till the initial capital is taken away by the investor or next of kin.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-exchange"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Advisor Network</h3>
                            <p class="feature-card-desc">Specialized guidance from independent local advisor for high-net-worth investors. Our agents are always readily available to assist and give great support to investors 24 hours.</p>
                        </div>
                    </div>
                </div>

{{--                <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp animated" data-wow-delay="300ms"--}}
{{--                     style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">--}}
{{--                    <div class="feature-card">--}}
{{--                        <div class="feature-card-icon">--}}
{{--                            <i class="fa fa-exchange"></i>--}}
{{--                        </div>--}}
{{--                        <div class="feature-card-content pr-0">--}}
{{--                            <h3 class="feature-card-title">Cryptocurrencies</h3>--}}
{{--                            <p class="feature-card-desc">Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp animated" data-wow-delay="300ms"--}}
{{--                     style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">--}}
{{--                    <div class="feature-card">--}}
{{--                        <div class="feature-card-icon">--}}
{{--                            <i class="fa fa-exchange"></i>--}}
{{--                        </div>--}}
{{--                        <div class="feature-card-content pr-0">--}}
{{--                            <h3 class="feature-card-title">Option Trading</h3>--}}
{{--                            <p class="feature-card-desc">We offer the best Forex and options trading services operating closely with an expert team.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </section>

    <section id="BitcoinEcosystem" class="bg-dark mb-70">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-4 mb-50 text--center">
                        <h2 class="heading--title text-white">Forex Cross Rates</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Forex Rates</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                            "width": 1100,
                            "height": 400,
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
    </section>

    <section id="blog" class="blog blog-grid pb-60">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-3 mb-50 text--center">
                        <h2 class="heading--title">Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="100ms"
                     style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('main/assets/images/blog/grid/1.jpg') }}" alt="entry image">
                                <div class="entry--overlay"></div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--title">
                                <h4><a href="#">Cryptocurrencies</a></h4>
                            </div>
                            <div class="entry--bio">
                                Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('main/services/serv1.jpg') }}" alt="entry image">
                                <div class="entry--overlay"> </div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--title">
                                <h4><a href="#">Forex</a></h4>
                            </div>
                            <div class="entry--bio">
                                Options for investing cash including certificates of deposit and the money market funds. With CDs.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="300ms"
                     style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('main/services/options_trading.jpg') }}" alt="entry image">
                                <div class="entry--overlay"> </div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--title">
                                <h4><a href="#">Option Trading</a></h4>
                            </div>
                            <div class="entry--bio">
                                We offer the best Forex and Options trading services operating closely with an expert team.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('main/services/asset_management.jpg') }}" alt="entry image">
                                <div class="entry--overlay"></div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--title">
                                <h4><a href="#">Asset Management</a></h4>
                            </div>
                            <div class="entry--bio">
                                With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('main/services/commodities.jpg') }}" alt="entry image">
                                <div class="entry--overlay"> </div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--title">
                                <h4><a href="#">Commodities</a></h4>
                            </div>
                            <div class="entry--bio">
                                A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="blog-entry">
                        <div class="entry--img">
                            <a href="#">
                                <img src="{{ asset('main/services/funds_management.jpg') }}" alt="entry image">
                                <div class="entry--overlay"> </div>
                            </a>
                        </div>
                        <div class="entry--content">
                            <div class="entry--title">
                                <h4><a href="#">Funds Management</a></h4>
                            </div>
                            <div class="entry--bio">
                                Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="featured3" class="featured featured-3  pb-0">
        <div class="bg-section">
            <img src="{{ asset('main/home/bg1.jpg') }}" alt="background">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeIn" data-wow-delay="100ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Sign Up For Free</h3>
                            <p class="feature-card-desc text-white">Create your account and fill in all necessary information.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeIn" data-wow-delay="200ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-area-chart"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Select an Investment Plan</h3>
                            <p class="feature-card-desc text-white">Select your desired investment plan and returns</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeIn" data-wow-delay="300ms">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <div class="feature-card-content">
                            <h3 class="feature-card-title">Start Trading</h3>
                            <p class="feature-card-desc text-white">Start trading and get your funds in your wallet</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                        {
                            "width": 1150,
                            "height": 450,
                            "symbolsGroups": [
                            {
                                "name": "Indices",
                                "originalName": "Indices",
                                "symbols": [
                                    {
                                        "name": "FOREXCOM:SPXUSD",
                                        "displayName": "S&P 500"
                                    },
                                    {
                                        "name": "FOREXCOM:NSXUSD",
                                        "displayName": "Nasdaq 100"
                                    },
                                    {
                                        "name": "FOREXCOM:DJI",
                                        "displayName": "Dow 30"
                                    },
                                    {
                                        "name": "INDEX:NKY",
                                        "displayName": "Nikkei 225"
                                    },
                                    {
                                        "name": "INDEX:DEU30",
                                        "displayName": "DAX Index"
                                    },
                                    {
                                        "name": "FOREXCOM:UKXGBP",
                                        "displayName": "FTSE 100"
                                    }
                                ]
                            },
                            {
                                "name": "Commodities",
                                "originalName": "Commodities",
                                "symbols": [
                                    {
                                        "name": "CME_MINI:ES1!",
                                        "displayName": "S&P 500"
                                    },
                                    {
                                        "name": "CME:6E1!",
                                        "displayName": "Euro"
                                    },
                                    {
                                        "name": "COMEX:GC1!",
                                        "displayName": "Gold"
                                    },
                                    {
                                        "name": "NYMEX:CL1!",
                                        "displayName": "Crude Oil"
                                    },
                                    {
                                        "name": "NYMEX:NG1!",
                                        "displayName": "Natural Gas"
                                    },
                                    {
                                        "name": "CBOT:ZC1!",
                                        "displayName": "Corn"
                                    }
                                ]
                            },
                            {
                                "name": "Bonds",
                                "originalName": "Bonds",
                                "symbols": [
                                    {
                                        "name": "CME:GE1!",
                                        "displayName": "Eurodollar"
                                    },
                                    {
                                        "name": "CBOT:ZB1!",
                                        "displayName": "T-Bond"
                                    },
                                    {
                                        "name": "CBOT:UB1!",
                                        "displayName": "Ultra T-Bond"
                                    },
                                    {
                                        "name": "EUREX:FGBL1!",
                                        "displayName": "Euro Bund"
                                    },
                                    {
                                        "name": "EUREX:FBTP1!",
                                        "displayName": "Euro BTP"
                                    },
                                    {
                                        "name": "EUREX:FGBM1!",
                                        "displayName": "Euro BOBL"
                                    }
                                ]
                            },
                            {
                                "name": "Forex",
                                "originalName": "Forex",
                                "symbols": [
                                    {
                                        "name": "FX:EURUSD"
                                    },
                                    {
                                        "name": "FX:GBPUSD"
                                    },
                                    {
                                        "name": "FX:USDJPY"
                                    },
                                    {
                                        "name": "FX:USDCHF"
                                    },
                                    {
                                        "name": "FX:AUDUSD"
                                    },
                                    {
                                        "name": "FX:USDCAD"
                                    }
                                ]
                            }
                        ],
                            "colorTheme": "light",
                            "isTransparent": false,
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->

            </div>
        </div>
    </section>

    <section id="featured4" class="featured featured-3 featured-4 pb-0">
        <div class="bg-section"><img src="" alt="background"></div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="heading mb-60">
                        <h2 class="heading--title" style="color: #FFB400;">Investment Strategies</h2>
                        <p class="heading--desc">Digital Metrics Investment seeks to invest in assets that offer the potential for highly attractive risk adjusted returns. We will continue to focus primarily on:</p>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart" style="color: #FFB400;"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">Compelling opportunities in strong secondary markets to capitalize on the changing demographics, preferences, and supply/demand imbalances through investments in Equity, Bonds, Crypto currency, Forex</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart" style="color: #FFB400;"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">Investments with more modest equity requirements ($5 to $95 million) that are often avoided by larger institutional investment funds.</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart" style="color: #FFB400;"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">
                                Growth markets including strong middle markets exhibiting job creation and stable economic performance.</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart" style="color: #FFB400;"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">
                                Distressed opportunities including non-performing loans, bank owned assets, and equity recapitalizations.</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart" style="color: #FFB400;"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">
                                Select development opportunities within high barrier to entry locations in major metropolitan areas and growing secondary cities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 pr-0 wow fadeInRight" data-wow-delay="100ms">
                    <div class="featured-img">
                        <img src="{{ asset('main/home/bg2.jpg') }}" alt="chart">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="infoCards" class="info-cards">
        <div class="container">

            <h2>Our Approach</h2>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-content">
                            <h3 class="info-card-title" style="color: #FFB400;">Services For Individuals</h3>
                            <p class="info-card-desc">
                                * Pre- and Post-Retirement Planning<br>
                                * Fee-Based Portfolio Management<br>
                                * IRAs & Roth IRAs<br>
                                * Fee-Based Investment Planning<br>
                                * Wealth Transfer and Charitable Planning.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-content">
                            <h3 class="info-card-title" style="color: #FFB400;">
                                Asset Management Strategies</h3>
                            <p class="info-card-desc">
                                * Private Investment Management (PIM)<br>
                                * Fee-Based Portfolio Management<br>
                                * Tax-Efficient Investment Strategies
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-content">
                            <h3 class="info-card-title" style="color: #FFB400;">
                                Corporate Services</h3>
                            <p class="info-card-desc">
                                * Cash Management<br>
                                * Retirement Plan Services
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-content">
                            <h3 class="info-card-title" style="color: #FFB400;">
                                Services for Endowments and Foundations</h3>
                            <p class="info-card-desc">
                                * Investment Policy Analysis<br>
                                * Retirement Plan Services<br>
                                * Philanthropic-Donor Services
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-content">
                            <h3 class="info-card-title" style="color: #FFB400;">
                                Services for Endowments and Foundations</h3>
                            <p class="info-card-desc">
                                * Investment Policy Analysis<br>
                                * Retirement Plan Services<br>
                                * Philanthropic-Donor Services
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="info-card">
                        <div class="info-card-content">
                            <h3 class="info-card-title" style="color: #FFB400;">
                                Liability Management</h3>
                            <p class="info-card-desc">
                                * Access to Lending Services through Private Investors seeking to expand their business relationship
                                * Loan Services
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="consultation" class="consultation consultation-1 pb-0">
        <div class="bg-section">
            <img src="{{ asset('main/assets/images/background/7.jpg') }}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-2 mb-50">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-7 wow flipInX" data-wow-delay="100ms">
                                <h2 class="heading--title text-white"><span class="text-theme">Discover</span><span class="text-white"> Thousands of Trading & Investment Opportunities.</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                                <p class="heading--desc">Our market depth and knowledge are attributed to our acquired experience on trading floors of many exchanges. With over $5.3 Trillion traded daily in the foreign exchange market and over $200 billion traded in the cryptospace, we are dedicated to giving our clients their own share of the profits regularly.</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                                <p class="heading--desc">Over the years, we have developed a reputation for integrity, quality and excellence in portfolio management. we are dedicated to offering unparalleled portfolio management services to a wide range of investors worldwide. Our services make use of the best pricing, execution and liquidity channels in the global financial market; which is pivotal in the fast paced world of finance and investment. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="consultation-form mb-55 bg-white text-center">
                        <div class="consultation--desc">
                            Request a Consultation
                        </div>
                        <form class="mb-0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <input type="text" class="form-control" name="consultater-name" id="consultater-name" placeholder="Your Name" required="">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <input type="email" class="form-control" name="consultater-email" id="consultater-email" placeholder="Email">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-select">
                                        <i class="fa fa-angle-down"></i>
                                        <select class="form-control" name="Cryptocurreny" id="Cryptocurreny">
                                            <option value="Cryptocurrencies">Cryptocurrencies</option>
                                            <option value="Stocks">Stocks</option>
                                            <option value="Asset Management">Asset Management</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" name="consultater-message" id="message" rows="2" placeholder="Request Details:"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="submit" value="Submit Request" name="submit" class="btn btn--primary btn--block">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </section>


{{--    <section id="clients1" class="clients clients-1 pb-85 bg-gray">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-clients wow fadeInUp" data-wow-delay="100ms">--}}

{{--                <div class="col-xs-12 col-sm-6 col-md-2 client">--}}
{{--                    <img class="center-block" src="{{ asset('main/assets/images/clients/1.png') }}" alt="client">--}}
{{--                </div>--}}


{{--                <div class="col-xs-12 col-sm-6 col-md-2 client">--}}
{{--                    <img class="center-block" src="{{ asset('main/assets/images/clients/2.png') }}" alt="client">--}}
{{--                </div>--}}


{{--                <div class="col-xs-12 col-sm-6 col-md-2 client">--}}
{{--                    <img class="center-block" src="{{ asset('main/assets/images/clients/3.png') }}" alt="client">--}}
{{--                </div>--}}


{{--                <div class="col-xs-12 col-sm-6 col-md-2 client">--}}
{{--                    <img class="center-block" src="{{ asset('main/assets/images/clients/4.png') }}" alt="client">--}}
{{--                </div>--}}


{{--                <div class="col-xs-12 col-sm-6 col-md-2 client">--}}
{{--                    <img class="center-block" src="{{ asset('main/assets/images/clients/5.png') }}" alt="client">--}}
{{--                </div>--}}


{{--                <div class="col-xs-12 col-sm-6 col-md-2 client">--}}
{{--                    <img class="center-block" src="{{ asset('main/assets/images/clients/6.png') }}" alt="client">--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section id="blog" class="blog blog-grid pb-60">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-3 mb-50 text--center">
                        <p class="heading--subtitle">Don’t Miss Latest</p>
                        <h2 class="heading--title">News & Headlines</h2>
                        <p class="heading--desc mb-0">Follow our latest news and thoughts which focuses exclusively on investment strategy guide, blockchain tech, crypto-trading and mining.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <a class="fx-widget" data-widget="newsfeed" data-lang="en" data-post-date-color="#999" data-post-description-color="#333333" data-post-title-color="#333333" data-widget-bg-color="#FFF" data-show-image data-width="1500" data-height="855" data-show-date data-title-font-size="18" data-intro-font-size="16" data-category="news" data-section="currencies" data-base-url="https://www.fxempire.com" data-url="//www.fxempire.com" href="https://www.fxempire.com" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;"> <span style="color:#999999;display:inline-block;margin-top:10px;font-size:12px;">Powered By </span> <img style="width:87px; height:14px;" src="https://www.fxempire.com/logo-full.svg" alt="FX Empire logo" /> </a> <script async charset="utf-8" src="https://widgets.fxempire.com/widget.js" ></script>

            </div>

        </div>

    </section>
@endsection
