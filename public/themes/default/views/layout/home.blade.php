<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ Config::get('site.name')}}</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="{{ URL::to('sf')}}/flat-ui/images/favicon.ico">
        <link rel="stylesheet" href="{{ URL::to('sf')}}/flat-ui/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" href="{{ URL::to('sf')}}/flat-ui/css/flat-ui.css">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/common-files/css/icon-font.css">
        <!-- end -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/common-files/css/animations.css">

        <!-- If you don't use any of these blocks just remove unnecessary CSS files -->
        <!-- content -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-content/css/style.css">
        <!-- footer -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-footer/css/style.css">
        <!-- header -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-header/css/style.css">
        <!-- price -->
        <link rel="stylesheet" href="{{ URL::to('sf')}}/ui-kit/ui-kit-price/css/style.css">

        {{ HTML::style('css/typography.css')}}
        {{ HTML::style('css/home.css')}}

    </head>

    <body>

        <div class="page-wrapper">
            <!-- header-11 -->
            <header class="header-11">
                <div class="container">
                    <div class="row">
                        <div class="navbar col-sm-12" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle"></button>
                                <a class="brand" href="#"><img src="{{ URL::to('/')}}/img/logo@2x.png" width="50" height="50" alt=""> {{ Config::get('site.name')}}</a>
                            </div>
                            <div class="collapse navbar-collapse pull-right">
                                <ul class="nav pull-left">
                                    <li class="active"><a href="#">HOME</a></li>
                                    <li><a href="#">COMPANY</a></li>
                                    <li><a href="#">PORTFOLIO</a></li>
                                    <li><a href="#">BLOG</a></li>
                                    <li><a href="#">CONTACT</a></li>
                                </ul>
                                <form class="navbar-form pull-left">
                                    <a class="btn btn-primary" href="{{ URL::to('login') }}">SIGN IN</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="header-11-sub bg-midnight-blue">
                <div class="background" style="background-image:url({{ URL::to('sf')}}/common-files/img/Comp.jpg)">
                    &nbsp;
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3>Because You are THE BOZZ.</h3>
                            <p>
                                Your business is getting bigger by minutes, meaning, small tasks become more and more tedious and time consuming,and organizing is a daunting task.
                            </p>
                            <p>
                                Let's make it lean, let's make it mean. Like a BOZZ.
                            </p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1 ">
                            <p>Already have an account ? Please sign in</p>
                            <div class="signup-form">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your E-mail">
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-info">Sign In</button>
                                    </div>
                                </form>
                            </div>
                            <p>If you haven't got an account, then let's get started</p>
                            <div class="signup-form">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your E-mail">
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div>
                                            <input type="password" class="form-control" placeholder="Confirmation">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-info">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="additional-links">
                                By signing up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- price-1 -->
            <section class="price-1">
                <div class="container">
                    <h3>Take a look to our Packages</h3>
                    <p class="lead">
                        Pick one that suit your business, if you need more just contact us, we'll be happy to assist and help you get the most of our offerings.
                    </p>
                    <div class="row plans">
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">General Retail</div>
                                <div class="price">19$/month</div>
                                <div class="description">
                                    <ul>
                                        <li>Point Of Sales</li>
                                        <li>Multi Product Catalog</li>
                                        <li>Inventory</li>
                                        <li>Transaction</li>
                                        <li>Invoicing & Expense Tracking</li>
                                        <li>Reporting
                                            <ul>
                                                <li>Transaction Report</li>
                                                <li>Sales Report</li>
                                                <li>Inventory Status Report</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn disabled" href="#">Your Current Plan</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Professional</div>
                                <div class="price">39$/month</div>
                                <div class="description">
                                    10,000 messages<br>
                                    <b>unlimited</b> data<br>
                                    <b>unlimited</b> users<br>
                                    first 30 day free
                                </div>
                                <a class="btn btn-primary" href="#">Change to this Plan</a>

                                <div class="ribbon">NEW</div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="plan">
                                <div class="title">Business</div>
                                <div class="price">59$/month</div>
                                <div class="description">
                                    10,000 messages<br>
                                    <b>unlimited</b> data<br>
                                    <b>unlimited</b> users<br>
                                    first 100 day free
                                </div>
                                <a class="btn btn-primary" href="#">Change to this Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- content-13  -->
            <section class="content-13 subscribe-form bg-turquoise">
                <div class="container">
                    <div class="row">
                        <form>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Enter your e-mail" spellcheck="false">
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-large btn-primary" type="submit">
                                    Subscribe now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- footer-2 -->
            <footer class="footer-2 bg-midnight-blue">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Company</a>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-btns pull-right">
                        <a href="#"><div class="fui-vimeo"></div><div class="fui-vimeo"></div></a>
                        <a href="#"><div class="fui-facebook"></div><div class="fui-facebook"></div></a>
                        <a href="#"><div class="fui-twitter"></div><div class="fui-twitter"></div></a>
                    </div>
                    <div class="additional-links">
                        Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </footer>
        </div>



        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ URL::to('sf')}}/common-files/js/jquery-1.11.1.min.js"></script>
        <script src="{{ URL::to('sf')}}/flat-ui/js/bootstrap.min.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/modernizr.custom.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/page-transitions.js"></script>
        <script src="{{ URL::to('sf')}}/common-files/js/startup-kit.js"></script>
    </body>
</html>