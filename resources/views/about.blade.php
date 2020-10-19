@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{ asset('header.jpg') }}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-6 text-center">
                        <div class="title--heading">
                            <h1>About us</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">About us</li>
                        </ol>
                    </div>
                </div>
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
                <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
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

                <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-bitcoin"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Cryptocurrencies</h3>
                            <p class="feature-card-desc">Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Option Trading</h3>
                            <p class="feature-card-desc">We offer the best Forex and options trading services operating closely with an expert team.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="BitcoinEcosystem" class="bg-dark mb-70">
        <div class="container">
            <div class="row clearfix">

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="heading heading-4 mb-50 text--left">
                        <h2 class="heading--title text-white">Our Values</h2>
                        <p class="heading--desc mb-0 text-md-left">
                            Digital Metrics Investment was founded on the principle of delivering superior long and short term returns at the lowest possible risk. DMI believes that having a world-class investor base of like-minded, high-quality organizations is key to investment success. The firm has an intense focus on building and cultivating a team oriented culture of always putting the client first, driving relentlessly to learn and excel and constantly striving for improvement.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="heading heading-4 mb-50 text--left">
                        <h2 class="heading--title text-white">Our Guiding Principles</h2>
                        <ul class="text-md-left">
                            <li>Put the interests of DMI’s investors first in everything the firm does. Acting as a fiduciary is a sacred trust that can never be broken.</li>

                            <li>Act with the highest level of integrity in every action DMI takes. The firm’s reputation is its most important asset.</li>

                            <li> Approach public investing with the same philosophy as if purchasing entire companies, by acquiring high-quality businesses that generate large amounts of compounding free cash flow at prices well below their intrinsic value.</li>

                            <li>Focus on building a world-class team and culture. The firm cares deeply about being regarded in the industry as first rate and as the best at every touch point.</li>

                            <li>Communicate with investment partners candidly and be as transparent as required for them to always understand what DMI is doing and why.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="featured2" class="featured featured-2 pb-50">
        <div class="container">
            <div class="row">

                <h2 class="heading--title text-dark mb-5">Philosophy</h2>

                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="100ms"
                     style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">How we are different</h3>
                            <p class="feature-card-desc">We believe in strategy over tactics, relationships over commissions, and service over self-promotion. Our primary consideration is the best interests of our clients. In the long and short term, this is best for the firm as well.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="200ms"
                     style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-industry"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Limit Economic Interest</h3>
                            <p class="feature-card-desc">Our advisors are not held to production quotas or incentivized with product-driven commissions. Being a fiduciary investment advisor means we are required to act in our clients’ best interests – and we wouldn’t have it any other way. Furthermore, we work on a flat fee basis with a nominal transaction cost, effectively removing any transactional interest and putting us on the same side of the table as our clients.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="300ms"
                     style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Clear Communication</h3>
                            <p class="feature-card-desc">Mutual understanding and confidence are built over time, and we consider keeping open, ongoing communications an essential part of our process.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp animated" data-wow-delay="400ms"
                     style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="feature-card-content pr-0">
                            <h3 class="feature-card-title">Investment Performance</h3>
                            <p class="feature-card-desc">We’re proud to facilitate the success of our clients’ portfolios under our supervision. Our ability to envision and implement customized investment strategies has helped us retain our clientele through their lives and into succeeding generations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured4" class="featured featured-3 featured-4 bg-overlay bg-overlay-dark5 pb-0">
        <div class="bg-section"><img src="{{ asset('main/assets/images/background/3.jpg') }}" alt="background"></div>
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
                    <div class="heading mb-60">
                        <h2 class="heading--title color-white">Investment Strategies</h2>
                        <p class="heading--desc color-white">Digital Metrics Investment seeks to invest in assets that offer the potential for highly attractive risk adjusted returns. We will continue to focus primarily on:</p>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">Compelling opportunities in strong secondary markets to capitalize on the changing demographics, preferences, and supply/demand imbalances through investments in Equity, Bonds, Crypto currency, Forex</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">Investments with more modest equity requirements ($5 to $95 million) that are often avoided by larger institutional investment funds.</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">
                                Growth markets including strong middle markets exhibiting job creation and stable economic performance.</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="feature-card-content">
                            <p class="feature-card-desc">
                                Distressed opportunities including non-performing loans, bank owned assets, and equity recapitalizations.</p>
                        </div>
                    </div>

                    <div class="feature-card wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="feature-card-icon">
                            <i class="fa fa-pie-chart"></i>
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

@endsection
