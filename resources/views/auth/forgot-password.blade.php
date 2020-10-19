@extends('layouts.main')

@section('title')
    Recover Password
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
                            <h1>Forgot Password</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Forgot Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-pad contact-page">
        <div class="container">
            <div class="col-md-8">
                <form method="POST" action="{{ url('recover-password') }}">
                    @csrf
                    <div class="row">

                        @include('includes.alerts')

                        <div class="col-md-8">
                            <div class="form-grp">
                                <label>Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                       value="{{ old('email') }}" placeholder="Email Address *" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-8" style="margin-top: 6px;">
                            <button type="submit" class="btn btn--primary btn--block">Recover Password</button>
                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->

                </form>
            </div><!-- /.col-md-8 -->

        </div><!-- /.container -->
    </section>
@endsection
