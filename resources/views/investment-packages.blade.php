@extends('layouts.main')

@section('title')
    Investment Plans
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
                            <h1>Investment Plans</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Investment Plans</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing1" class="pricing pricing-1 bg-gray pb-90">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 text--center mb-70">
                        <h2 class="heading--title">Investment Plans</h2>
                        <p class="heading--desc mb-0">Sign up with our investment plans.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($packages as $package)
                    <div class="col-xs-12 col-sm-12 col-md-4 price-table wow fadeInUp" data-wow-delay="100ms">
                        <div class="pricing-panel">

                            <div class="pricing--heading text--center">
                                <div class="pricing--icon">
                                    <img src="{{ asset('main/assets/images/icons/BitcoinIcon4.png') }}" alt="Bitcoin Icon">
                                </div>
                                <h4>{{ $package->name }}</h4>
                                <div class="pricing--desc">
                                    @if(!empty($package->min))
                                    <p style="font-size: 18px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                                    @endif

                                    @if(!empty($package->max))
                                    <p style="font-size: 18px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                                    @endif

                                    @if(!empty($package->description))
                                    <p style="font-size: 18px;">{{ $package->description }}</p>
                                    @endif

                                    @if(!empty($package->roi))
                                    <p style="font-size: 18px;">{{ $package->roi }}</p>
                                    @endif

                                    @if(!empty($package->compound_roi))
                                    <p style="font-size: 18px;">{{ $package->compound_roi }}</p>
                                    @endif
                                </div>
                                <a class="btn btn--secondary btn--bordered btn--rounded"
                                   href="{{ route('register') }}">Invest Now</a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
