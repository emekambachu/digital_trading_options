@extends('layouts.main')

@section('title')
    Sign Up
@endsection

@section('top-assets')
    <script src="{{ asset('js/countries.js') }}" type="text/javascript"></script>
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
                            <h1>Register</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Sign up</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-pad contact-page">
        <div class="container">
            <div class="col-md-12">

                @include('includes.alerts')

                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Full Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                           name="name" value="{{ old('name') }}" placeholder="Your Name *" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="text"
                                           name="email" value="{{ old('email') }}"
                                           placeholder="Email Address *" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                        </div>

                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Mobile Number</label>
                                    <input class="form-control @error('mobile') is-invalid @enderror" type="tel" name="mobile"
                                           value="{{ old('mobile') }}" placeholder="Mobile Number">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Image</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                        </div>

                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" name="password_confirmation"
                                           autocomplete="new-password" placeholder="Confirm Password" required>
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                        </div>

                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label>Bitcoin Wallet Address (Optional)</label>
                                    <input class="form-control @error('bitcoin_wallet') is-invalid @enderror" type="text"
                                           name="bitcoin_wallet" placeholder="Address" value="{{ old('bitcoin_wallet') }}">
                                    @error('bitcoin_wallet')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-12 -->
                        </div>

                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-md-4">
                                <div class="form-grp">
                                    <label>Country</label>
                                    <select class="form-control" id="country" name="country" required></select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-4">
                                <div class="form-grp">
                                    <label>State</label>
                                    <select class="form-control" id="state" name="state"></select>
                                    @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-6 -->

                            <script language="javascript">
                                populateCountries("country", "state");
                                populateCountries("country2");
                            </script>

                            <div class="col-md-4">
                                <div class="form-grp">
                                    <label>Address</label>
                                    <input class="form-control @error('address') is-invalid @enderror" type="text"
                                           name="address" placeholder="Address" value="{{ old('address') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div><!-- /.form-grp -->
                            </div><!-- /.col-md-12 -->
                        </div>

                        <button type="submit" class="btn btn--primary btn--block">Sign up</button>
                </form>
            </div><!-- /.col-md-8 -->

        </div><!-- /.container -->
    </section>
@endsection
