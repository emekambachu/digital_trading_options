@extends('layouts.users')

@section('title')
    Dashboard
    @endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard</h3>
            </div>

        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div id="tradingview_fe7fb"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget(
                            {
                                "width": 1500,
                                "height": 500,
                                "symbol": "NASDAQ:AAPL",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "dark",
                                "style": "1",
                                "locale": "en",
                                "toolbar_bg": "#f1f3f6",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_fe7fb"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget-one">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            </div>
                            <div class="w-content">
                                <span class="w-value">${{ $totalInvestments }}</span>
                                <span class="w-numeric-title">Total Investments</span>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="total-orders"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-one">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">

                        @foreach($transactions as $trans)
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>{{ $trans->description }}</h4>
                                        <p class="meta-date">{{ \Carbon\Carbon::parse($trans->created_at)->format('j F, Y') }}</p>
                                    </div>

                                </div>
                                @if(!empty($trans->debit))
                                <div class="t-rate rate-dec">
                                    <p><span>${{ number_format($trans->debit) }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline></svg></p></div>
                                @else
                                <div class="t-rate rate-inc">
                                    <p><span>${{ number_format($trans->credit) }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-arrow-up">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline></svg></p></div>
                                @endif
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Account Info</h5>
                    </div>

                    <div class="widget-content">
                        <div class="invoice-box">

                            <div class="acc-total-info">
                                <h5>Balance</h5>
                                <p class="acc-amount">${{ $user->wallet->amount }}</p>
                            </div>

                            <div class="inv-detail">
                                <div class="info-detail-1">
                                    <p>Withdrawals</p>
                                    <p>$ {{ $total_withdrawals ? $total_withdrawals->sum('amount') : 0 }}</p>
                                </div>
{{--                                <div class="info-detail-2">--}}
{{--                                    <p>Taxes</p>--}}
{{--                                    <p>$ 17.82</p>--}}
{{--                                </div>--}}
                            </div>

                            <div class="inv-action">
                                <a href="{{ url('users/withdrawal') }}" class="btn btn-dark">Withdraw</a>
{{--                                <a href="#" class="btn btn-danger">Transfer</a>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">--}}

{{--                <div class="widget widget-activity-four">--}}

{{--                    <div class="widget-heading">--}}
{{--                        <h5 class="">Recent Activities</h5>--}}
{{--                    </div>--}}

{{--                    <div class="widget-content">--}}

{{--                        <div class="mt-container mx-auto">--}}
{{--                            <div class="timeline-line">--}}

{{--                                <div class="item-timeline timeline-primary">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p><span>Updated</span> Server Logs</p>--}}
{{--                                        <span class="badge badge-danger">Pending</span>--}}
{{--                                        <p class="t-time">Just Now</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline timeline-success">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>--}}
{{--                                        <span class="badge badge-success">Completed</span>--}}
{{--                                        <p class="t-time">2 min ago</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-danger">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Backup <span>Files EOD</span></p>--}}
{{--                                        <span class="badge badge-danger">Pending</span>--}}
{{--                                        <p class="t-time">14:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-dark">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>--}}
{{--                                        <span class="badge badge-success">Completed</span>--}}
{{--                                        <p class="t-time">16:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-warning">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>--}}
{{--                                        <span class="badge badge-primary">In progress</span>--}}
{{--                                        <p class="t-time">17:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-secondary">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Rebooted Server</p>--}}
{{--                                        <span class="badge badge-success">Completed</span>--}}
{{--                                        <p class="t-time">17:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-warning">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Send contract details to Freelancer</p>--}}
{{--                                        <span class="badge badge-danger">Pending</span>--}}
{{--                                        <p class="t-time">18:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-dark">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Kelly want to increase the time of the project.</p>--}}
{{--                                        <span class="badge badge-primary">In Progress</span>--}}
{{--                                        <p class="t-time">19:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-success">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Server down for maintanence</p>--}}
{{--                                        <span class="badge badge-success">Completed</span>--}}
{{--                                        <p class="t-time">19:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-secondary">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Malicious link detected</p>--}}
{{--                                        <span class="badge badge-warning">Block</span>--}}
{{--                                        <p class="t-time">20:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline  timeline-warning">--}}
{{--                                    <div class="t-dot" data-original-title="" title="">--}}
{{--                                    </div>--}}
{{--                                    <div class="t-text">--}}
{{--                                        <p>Rebooted Server</p>--}}
{{--                                        <span class="badge badge-success">Completed</span>--}}
{{--                                        <p class="t-time">23:00</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="tm-action-btn">--}}
{{--                            <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Your Investments</h4>
                                <a href="{{ route('investments.create') }}">
                                    <button class="btn btn-success btn-sm" style="float: left;">Add New</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">Investment ID</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($investments as $invest)
                                    <tr>
                                        <td>{{ $invest->invest_id }}</td>
                                        <td>{{ $invest->investmentPackage ? $invest->investmentPackage->name : '' }}</td>
                                        <td>${{ number_format($invest->amount) }}</td>
                                        <td>{{ $invest->created_at->format('d M Y') }}</td>
                                        <td>
                                            @if($invest->is_approved)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-danger">Un-Approved</span>
                                            @endif
                                            </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
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
