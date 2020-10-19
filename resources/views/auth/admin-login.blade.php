@extends('layouts.main')

@section('title')
    Admin Login
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
                            <h1>Admin Login</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Admin Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-pad contact-page">
        <div class="container">
            <div class="col-md-12">
                <form method="POST" action="{{ route('admin-login') }}">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-grp">
                                <label>Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                                       value="{{ old('username') }}" placeholder="Username *" required>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-grp">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                                       placeholder="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.form-grp -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-12" style="margin-top: 6px;">
                            <button type="submit" class="btn btn--primary btn--block">Login</button>
                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->
                    <div class="form-result"></div><!-- /.form-result -->
                </form>
            </div><!-- /.col-md-8 -->

        </div><!-- /.container -->
    </section>
@endsection
