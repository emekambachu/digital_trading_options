@extends('layouts.main')

@section('title')
    Terms and Condition
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title">Terms and Condition</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Terms and Condition</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <div class="about-pattern">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small"><span>1</span>
                        <span style="color: #0E608C; font-weight: bold;">General</span></h2>
                    <p>The terms and conditions contained herein apply to the investment services of Digital Trading Options investment company made available through its official website at www.Digital Trading Options.co. All information made available to the investor/client pertaining to this Promotion, including information contained within websites of Digital Trading Options, form a legal agreement between the investor/client and Digital Trading Options.<br>
                        By electing to participate in any of the investment businesses of Digital Trading Options, you are indicating you agree to be bound by the terms and conditions contained herein and contained within website materials of Digital Trading Options, coupled with any Client Agreement(s) executed.<br>
                        Digital Trading Options reserves the right to amend these terms and conditions at any time. Such modifications shall become effective immediately at the time the amendment is executed and posted on the Digital Trading Options website. Digital Trading Options is not required to make announcements as to such amendments. </p>
                    <div class="gap-15"></div>
                </div>

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small"><span>2</span>
                        <span style="color: #0E608C; font-weight: bold;">Eligible Accounts</span></h2>
                    <p>To be eligible to participate in any of the services of Digital Trading Options, clients/investors or their representatives must be eighteen (18) years of age or older, or the legal age of majority in the client's/investor's home country, state or province; be legally entitled to use our services in accordance with applicable law; currently maintain a cryptocurrency account with a Wallet; and make a deposit with Digital Trading Options totaling no less than the stipulated account on the chosen investment product (the Initial Deposit) during the investment Period as defined herein.</p>
                    <div class="gap-15"></div>
                </div>

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small"><span>3</span>
                        <span style="color: #0E608C; font-weight: bold;">Account Restrictions</span></h2>
                    <p>If there are promotions of bonuses on accounts within Digital Trading Options, these promotions will be based on a One bonus per account per client. Also, accounts are only transferable with requests made, reviewed, and granted by the management of Digital Trading Options.</p>
                    <div class="gap-15"></div>
                </div>

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small"><span>4</span>
                        <span style="color: #0E608C; font-weight: bold;">Account Activation and Operation</span></h2>
                    <p>Digital Trading Options will credit all Eligible Accounts, as defined herein, with deposits (as made by investor) totaling an amount determined by the initial deposit made by client, as set forth in the table of plans. Such deposit must be made within 48 hours of creating an investment account or the said account shall be deleted.<br>
                        Client must complete the required lots (as stipulated in the chosen plan) prior to the activation of the investment account within 48 hours of opening the account. Charges on investment account operation and/or maintenance shall be deducted upon completion of investment cycle. Withdrawals can only be made after an account completes its initial investment cycle (IIC) as stipulated in the plan details.</p>
                    <div class="gap-15"></div>
                </div>

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small"><span>5</span>
                        <span style="color: #0E608C; font-weight: bold;">Release and Withdrawal Restrictions</span></h2>
                    <p>Client is unable to withdraw or transfer any funds from Client account before or during the initial investment cycle, unless there's a court order to withdraw the account, or Client gives the investment company a 48-hour prior notification of withdrawal by mail or phone call.<br>
                        Should Digital Trading Options receive a request by mail or phone to withdraw funds prior to the account cycle satisfying the stipulated time, it is then authorized to process such request only after it has debited the account in an amount equal to the operation and/or maintenance fee. Should Client make a withdrawal request during the initial investment cycle and prior to the completion of the cycle, any bonus shall be terminated.<br>
                        Digital Trading Options's Client agrees that Digital Trading Options is not liable for any market losses, including margin calls, as a result of a withdrawal made by Digital Trading Options in order to make payout or retain operation/maintenance charges.</p>
                    <div class="gap-15"></div>
                </div>

                <div class="col-lg-12 col-12 about-desc">
                    <h2 class="column-title title-small"><span>6</span>
                        <span style="color: #0E608C; font-weight: bold;">Exploitation, Misuse, Conditions</span></h2>
                    <p>Digital Trading Options offers its services and bonuses in good faith to its Clients actively investing within its market with exposure to economic risk. Client acknowledges that his/her subscription to the services of Digital Trading Options is for the purposes of investment only. Client's invested fund shall be utilized in legitimate trading within the market that Digital Trading Options offers.<br>
                        In need emergence of a new market, Client shall be notified before any form of diversification is inclined to the Client's fund. This condition also requires that the Client does not associate any abusive, exploitive or improper conduct (Exploitative Activity) while being subscribed to the Digital Trading Options investment offered services. Exploitative Activity shall include, without limitation:<br>
                        -- Client, by himself or acting with others (including an Introducing Broker, Money Manager), establishes an investment position or positions which have the purpose or effect of extracting the funds credited as part of the offered services; and/or the profits generated by such funds, without exposure to economic risk, including without limitation loss of the funds credited as part of the offered services or the Client's capital (or the capital of others).<br>

                        -- Client, whether personally or through a third-party, hedges investment position(s) for purposes of capturing credited funds on a risk-free basis, by utilizing additional trading account(s) at other institutions, whether maintained by Client or an associate thereof, or by utilizing an additional account at Digital Trading Options held by a third-party or alias, or by any other means<br>
                        Client agrees and acknowledges that the offered services shall be granted by Digital Trading Options only as a result of representations made by Client, including Client's representation that he/she will not undertake Exploitative Activity, as defined herein. Digital Trading Options shall have the authority to, at its sole discretion, elect to retroactively cancel the investment terms, remove any credited bonus/promotional funds from a Client's account and retroactively cancel any investment activity conducted, should Digital Trading Options determine the Client has undertaken Exploitative

                    </p>
                    <div class="gap-15"></div>
                </div>

            </div>
            <!-- Main row end-->
        </div>
        <!-- Container 1 end-->
    </div>
    <!-- About pattern End-->
@endsection
