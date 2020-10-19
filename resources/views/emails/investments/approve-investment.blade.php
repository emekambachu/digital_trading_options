
<img src="{{ asset('digital_metrics_logo.png') }}" width="200">

<h3>Hello {{ $name }}</h3>

<p>
    @if($is_approved)
    Your Investment of ${{ $amount }} has been Approved.<br>
    @else
    Your investment of ${{ $amount }} has been Cancelled.
    @endif
</p>

<p align="center">Need more information?<br>
    Please contact <strong>info@digitalmetricsinvest.com</strong>.</p>
