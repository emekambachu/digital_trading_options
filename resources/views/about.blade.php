@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title">About Us</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>About Us</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

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

    <section class="main-container" id="main-container">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="column-title title-small"><span>Our</span>Values</h2>
                    <p>Digital Metrics Investment was founded on the principle of delivering superior long and short term returns at the lowest possible risk. DMI believes that having a world-class investor base of like-minded, high-quality organizations is key to investment success. The firm has an intense focus on building and cultivating a team oriented culture of always putting the client first, driving relentlessly to learn and excel and constantly striving for improvement.</p>
                    <div class="gap-15"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ts-feature-box">
                                <div class="ts-feature-info">
                                    <h3 class="ts-feature-title">Mission</h3>
                                    <p>Offering comprehensive and flexible assets to investors within the Cryptocurrency market, with low friction, transparency and reliability and with highest possible return on investment.</p>
                                </div>
                            </div>
                            <!-- feature box-1 end-->
                        </div>
                        <!-- col-1 end-->
                        <div class="col-lg-6">
                            <div class="ts-feature-box">
                                <div class="ts-feature-info">
                                    <h3 class="ts-feature-title">Partnerships</h3>
                                    <p>We have built partnerships overtime with other successful companies with complimenting corporate and social goals as our company. Our partners Include companies like Genesis Mining, BITFINEX, Ethereum, IDEX, Binance, SwissBank, and a few others mentioned within the partnership section of this brochure.</p>
                                </div>
                            </div>
                            <!-- feature box-2 end-->
                        </div>
                        <!-- col-2 end-->
                    </div>
                    <!-- container row end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('main/images/pages/about_2.png') }}" alt="">
                </div>
                <!-- Col end-->
            </div>
            <!-- Main row end-->
        </div>

        <div class="gap-80"></div>

        <div class="ts-facts-area-bg bg-overlay">
            <div class="container">
                <div class="row facts-wrapper text-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="ts-facts-bg"><span class="facts-icon"><i class="icon icon-money-1"></i></span>
                            <div class="ts-facts-content">
                                <h4 class="ts-facts-num"><span>Our Guiding Principles</span></h4>
                                <p class="facts-desc">
                                    Put the interests of DTO’s investors first in everything the firm does. Acting as a fiduciary is a sacred trust that can never be broken.<br>
                                    Act with the highest level of integrity in every action DTO takes. The firm’s reputation is its most important asset.<br>
                                    Approach public investing with the same philosophy as if purchasing entire companies, by acquiring high-quality businesses that generate large amounts of compounding free cash flow at prices well below their intrinsic value.<br>
                                    Focus on building a world-class team and culture. The firm cares deeply about being regarded in the industry as first rate and as the best at every touch point.<br>
                                    Communicate with investment partners candidly and be as transparent as required for them to always understand what DMI is doing and why.
                                </p>
                            </div>
                        </div>
                        <!-- Facts 1 end-->
                    </div>
                    <!-- Col 1 end-->

                </div>
                <!-- Row end-->
            </div>
            <!-- Container 2 end-->
        </div>
    </section>

    <section class="ts-features-col">
        <div class="container">

            <h2 class="column-title title-small"><span>Our</span>Philosophy</h2>

            <div class="row">
                <div class="col-lg-4">
                    <div class="ts-feature text-center box-primary">
                        <div class="ts-feature-info"><i class="icon icon-consut2"></i>
                            <h3 class="ts-feature-title">How We are Different</h3>
                            <p>We believe in strategy over tactics, relationships over commissions, and service over self-promotion. Our primary consideration is the best interests of our clients. In the long and short term, this is best for the firm as well.</p>
                        </div>
                    </div>
                    <!-- feature 1 end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-4">
                    <div class="ts-feature text-center box-secondary">
                        <div class="ts-feature-info"><i class="icon icon-chart2"></i>
                            <h3 class="ts-feature-title">Limit Economic Interest</h3>
                            <p>Our advisors are not held to production quotas or incentivized with product-driven commissions. Being a fiduciary investment advisor means we are required to act in our clients’ best interests – and we wouldn’t have it any other way. Furthermore, we work on a flat fee basis with a nominal transaction cost, effectively removing any transactional interest and putting us on the same side of the table as our clients.</p>
                        </div>
                    </div>
                    <!-- feature 2 end-->
                </div>
                <!-- Col end-->

                <div class="col-lg-4">
                    <div class="ts-feature text-center box-dark">
                        <div class="ts-feature-info"><i class="icon icon-clock3"></i>
                            <h3 class="ts-feature-title">Clear Communication</h3>
                            <p>Mutual understanding and confidence are built over time, and we consider keeping open, ongoing communications an essential part of our process.</p>
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
@endsection
