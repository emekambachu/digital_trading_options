<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Digital Metrics Investments">
    <link href="{{ asset('digital_metrics_logoonly.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600,600i,700%7CRoboto:300i,400,400i,500,500i,700" rel="stylesheet" type="text/css">

    <link href="{{ asset('main/assets/css/external.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('main/assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('main/assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/assets/revolution/css/navigation.css') }}">


    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!--[if lt IE 9]>
          <script src="{{ asset('main/assets/js/html5shiv.js') }}"></script>
          <script src="{{ asset('main/assets/js/respond.min.js') }}"></script>
        <![endif]-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5ed3b23d8ee2956d73a63a0f/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <title>@yield('title') | Digital Metrics Investments</title>

    @yield('top-assets')
</head>
<body>
<div class="preloader">
    <div class="signal"></div>
</div>
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
        <nav id="primary-menu" class="navbar navbar-fixed-top">
            <div class="container">

                <div id="google_translate_element"></div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="{{ url('/') }}">
                        <img class="logo-light" src="{{ asset('digital_metrics_logo.png') }}" width="120" alt="Digital Metrics Investment Logo">
                        <img class="logo-dark" src="{{ asset('digital_metrics_logo.png') }}" width="120" alt="Digital Metrics Investment Logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-left nav-pos-right">
                        <li><a class="menu-item" href="{{ url('/') }}">Home</a></li>
                        <li><a class="menu-item" href="{{ url('investments') }}">Investment Plans</a></li>
                        <li><a class="menu-item" href="{{ url('about') }}">About us</a></li>
                        <li><a class="menu-item" href="{{ url('services') }}">Services</a></li>
                        <li><a class="menu-item" href="{{ url('contact') }}">Contact</a></li>
                    </ul>

                    <div class="module module-consultation pull-left">
                        <a href="{{ route('register') }}" class="btn btn--white btn--bordered btn--rounded">Sign up</a>
                    </div>
                    <div class="module module-consultation pull-left">
                        <a href="{{ route('login') }}" class="btn btn--white btn--bordered btn--rounded">Login</a>
                    </div>

                </div>

            </div>

        </nav>
    </header>

    @yield('contents')

    <footer id="footer" class="footer footer-1">

        <div class="footer--action">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="footer--action-container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-7 col-md-6">
                                    <h3>Multi-Platform Accessible</h3>
                                    <p>Accessible by iOS, Android, Windows and Mac platforms</p>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-6">
                                    <div class="action-button">
                                        <a href="#">
                                            <img src="{{ asset('main/assets/images/footer/app-store.png') }}" alt="app store">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('main/assets/images/footer/google-play.png') }}" alt="app store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row clearfix">

                    <div class="col-xs-12 col-sm-4 col-md-4 footer--widget widget-about">
                        <div class="widget-content">
                            <img class="footer-logo" src="{{ asset('digital_metrics_logo.png') }}" width="100" alt="logo">
                            <p>Trade Cryptocurrencies at the Best Rate by getting the best offer from all the exchanges at one place.</p>
                            <div class="copyright">
                                <span>© {{ date('Y') }}</span> Digital Metrics Investments
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 footer--widget widget-links">
                        <div class="widget-title">
                            <h5>Company</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ url('about') }}">About Us</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 footer--widget widget-newsletter">
                        <div class="widget-title">
                            <h5>Stay Updated</h5>
                        </div>
                        <div class="widget-content">
                            <form class="form-newsletter mailchimp">
                                <input type="email" name="email" class="form-control" placeholder="Subscribe Our Newsletter">
                                <button type="submit"><i class="fa fa-long-arrow-right"></i></button>
                            </form>
                            <div class="subscribe-alert"></div>
                            <div class="clearfix"></div>
                            <p>Get the latest updates and offers.</p>
                            <div class="footer-social-icon">
                                <a class="facebook" href="#">
                                    <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" href="#">
                                    <i class="fa fa-twitter"></i><i class="fa fa-twitter"></i>
                                </a>
                                <a class="instagram" href="#">
                                    <i class="fa fa-instagram"></i><i class="fa fa-instagram"></i>
                                </a>
                                <a class="linkedin" href="#">
                                    <i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>

        <div class="footer--bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text--center footer--copyright">
                        <div class="payment--methods text--center">
                            <a href="#" title="Visa"><img src="{{ asset('main/assets/images/footer/visa.png') }}" alt="Visa"></a>
                            <a href="#" title="Mastercard"><img src="{{ asset('main/assets/images/footer/mastercard.png') }}" alt="Mastercard"></a>
                            <a href="#" title="Paypal"><img src="{{ asset('main/assets/images/footer/paypal.png') }}" alt="Paypal"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="back-to-top" class="backtop"><i class="fa fa-long-arrow-up"></i></div>
</div>

<script src="{{ asset('main/assets/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('main/assets/js/plugins.js') }}"></script>
<script src="{{ asset('main/assets/js/bitcoinCalculators.js') }}"></script>
<script src="{{ asset('main/assets/js/bitcoinPrice.js') }}"></script>
<script src="{{ asset('main/assets/js/bitcoinChart.js') }}"></script>
<script src="{{ asset('main/assets/js/functions.js') }}"></script>

<script src="{{ asset('main/assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0') }}"></script>
<script src="{{ asset('main/assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('main/assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script src="{{ asset('main/assets/js/rsconfig.js') }}"></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
