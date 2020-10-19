@extends('layouts.main')

@section('title')
    Contact us
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
                            <h1>Contact us</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contactInfo" class="contact contact-info bg-white text--center pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="contact--info">
                        <h3>Our Address</h3>
                        <p>555 West 5th street, 35th Floor,<br> Los Angeles, California
                        <a class="link--styled" href="#">Get Directions</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="contact--info">
                        <h3>Our Email</h3>
                        <p>Main Email : info@digitalmetricsinvest.com</p>
                        <a class="link--styled" href="#">Send a Message</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="contact--info">
                        <h3>Our Support</h3>
                        <p>Main Support : support@digitalmetricsinvest.com</p>
                        <a class="link--styled" href="#">Open a Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
