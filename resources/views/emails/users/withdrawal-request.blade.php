
<img src="{{ asset('digital_metrics_logo.png') }}" width="200">

<h3>Dear {{ $name }},</h3>

<p>
    You made a withdrawal request of ${{ $amount }}<br>
</p>

<p><strong>Below are your withdrawal details:</strong></p>
<ul>
    <li><strong>Amount:</strong> ${{ $amount }}</li>
    <li><strong>Status:</strong> {{ $is_approved ? 'Approved' : 'Unapproved' }}</li>
</ul>

<p align="center">Need more information?<br>
    Please contact <strong>info@digitalmetricsinvest.com</strong>.</p>
