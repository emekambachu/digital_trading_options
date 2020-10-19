@extends('layouts.main')

@section('title')
    Registration Complete
@endsection

@section('contents')
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
        <div class="bg-section">
            <img src="{{ asset('header.jpg') }}" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-6 text-center">
                        <div class="title--heading">
                            <h1>Registration Complete</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Registration Complete</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured2" class="featured featured-2 about-2 pb-50">
        <div class="container">

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animated" data-wow-delay="100ms"
                     style="visibility: visible; animation-delay: 100ms; animation-name: fadeInLeft;">
                    <div class="heading heading-1">
                        <h2 class="heading--title">Registration Completed</h2>
                        <p class="heading--desc">Hello <strong>{{ Session::get('name') }}</strong><br>
                            Thanks you for taking the time to register on our trading platform.<br>
                            Your account will be approved in 24hours and you can start trading.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay="200ms"
                     style="visibility: visible; animation-delay: 200ms; animation-name: fadeInRight;">
                    <div class="about--img">
                        <img src="{{ asset('main/home/h1.jpg') }}" alt="featured">
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
