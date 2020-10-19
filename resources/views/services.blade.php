@extends('layouts.main')

@section('title')
    Services
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
                            <h1>Services</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="blog blog-grid pb-60">
        <div class="container">

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
@endsection
