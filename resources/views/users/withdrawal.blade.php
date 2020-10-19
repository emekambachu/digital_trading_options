@extends('layouts.users')

@section('title')
    Withdrawal
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3>Withdrawal</h3>
            </div>

        </div>

        <div class="row layout-top-spacing">

            <div id="flStackForm" class="col-lg-6 col-md-6 col-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Withdraw Amount</h4>
                            </div>
                            <p>Payment will be made to your Bitcoin Wallet Address</p>
                            @include('includes.alerts')
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method="post" action="{{ url('users/withdraw-amount') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="validationDefault01">Bitcoin Address</label>
                                <input name="bitcoin_address" type="text" class="form-control" id="validationDefault01" required="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="validationDefault01">Amount</label>
                                <input name="amount" type="number" class="form-control" id="validationDefault01" required="">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Proceed</button>
                        </form>

                    </div>
                </div>
            </div>

            <div id="card_2" class="col-md-5 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">

                    <div class="widget-content widget-content-area">

                        <div class="card component-card_2">

                            <div class="card-body">
                                <p class="card-text"> Make payment using the bitcoin address below</p>
                                <h5 class="card-title">1BxLSTsk4mgvspTmC3YPdEJts2JRJ9YzTL</h5>
                            </div>
                            <img width="200" src="{{ asset('bitcoin_scan.jpeg') }}" class="card-img-top" alt="widget-card-2">

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © {{ date('Y') }}
                    <a target="_blank" href="{{ url('/') }}">Digital Metrics Investments</a>, All rights reserved.</p>
            </div>
        </div>

    </div>
@endsection
