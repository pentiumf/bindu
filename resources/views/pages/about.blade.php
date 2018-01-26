@extends('layouts.web')


@section('style')
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
        <link type="text/css" rel="stylesheet" href="libs/selectbox/css/jquery.selectbox.css">
        <link type="text/css" rel="stylesheet" href="libs/please-wait/please-wait.css"> -->




        <link type="text/css" rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="libs/animate/animate.css">
        <link type="text/css" rel="stylesheet" href="libs/slick-slider/slick.css">
        <link type="text/css" rel="stylesheet" href="libs/slick-slider/slick-theme.css">
        <link type="text/css" rel="stylesheet" href="libs/selectbox/css/jquery.selectbox.css">
        <link type="text/css" rel="stylesheet" href="libs/please-wait/please-wait.css">

        <style media="screen">
          #topPartnersWrap {
            padding: 50px 0;
          }
        </style>

        <!-- <link type="text/css" rel="stylesheet" href="libs/fancybox/css/jquery.fancybox.css?v=2.1.5">
        <link type="text/css" rel="stylesheet" href="libs/fancybox/css/jquery.fancybox-buttons.css?v=1.0.5">
        <link type="text/css" rel="stylesheet" href="libs/fancybox/css/jquery.fancybox-thumbs.css?v=1.0.7"> -->
@stop

@section('content')
<div id="wrapper-content">
                    <!-- MAIN CONTENT-->
                    <div class="main-content">
                        <section class="page-banner about-us-page">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <ol class="breadcrumb">
                                            <li><a href="index.html" class="link home">Home</a></li>
                                            <li class="active"><a href="about-us.html#" class="link">about us</a></li>
                                        </ol>
                                        <div class="clearfix"></div>
                                        <h2 class="captions">about us</h2></div>
                                </div>
                            </div>
                        </section>
                        <section class="about-us layout-2 padding-top padding-bottom about-us-4">
                            <div class="container">
                                <div class="row">
                                    <div class="wrapper-contact-style">
                                        <div class="col-lg-6 col-md-8">
                                            <h3 class="title-style-2">Epic journeys</h3>
                                            <div class="about-us-wrapper">
                                                <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                    duis aute irure dolor quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute.</p>
                                                <p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                                    duis aute irure dolor.</p>
                                                <div class="group-list">
                                                    <ul class="list-unstyled about-us-list">
                                                        <li>
                                                            <p class="text">First Class Flights</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">5 Star Accommodations</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Inclusive Packages</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Latest Model Vehicles</p>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-unstyled about-us-list">
                                                        <li>
                                                            <p class="text">Handpicked Hotels</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">Accesibility managment</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">10 Languages available</p>
                                                        </li>
                                                        <li>
                                                            <p class="text">+120 Premium city tours</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.4s" class="about-us-image wow zoomInRight"><img src="images/homepage/about-us-4.png" alt="" class="img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="videos padding-top padding-bottom page-our-values">
                            <div class="container">
                                <h3 class="title-style-2 white">Our Values</h3>
                                <div class="row">
                                    <div class="our-wrapper">
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-cruise"></i>
                                                <div class="main-our">
                                                    <p class="our-title">We offer daily tours </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-security-1"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Pygmy Itineraries</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-direction"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Best price guarantee </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-food-3"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Eco lodges & tours</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="our-wrapper">
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-transport-10"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Endangered Wildlife</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-people-6"></i>
                                                <div class="main-our">
                                                    <p class="our-title">We offer daily tours </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-man"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Epic journeys </p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            <div class="our-content"><i class="our-icon flaticon-food"></i>
                                                <div class="main-our">
                                                    <p class="our-title">Never lose your deposit</p>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elitea commodo consequat duis aute irure dolor consectetur eli</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="our-expert padding-top padding-bottom-50">
                            <div class="container">
                                <h3 class="title-style-2">our explore expert</h3>
                                <div class="wrapper-expert">
                                    <div class="item content-expert">
                                        <a href="about-us.html#" class="img-expert"><img src="images/homepage/about-5.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="about-us.html#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="about-us.html#" class="img-expert"><img src="images/homepage/about-6.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="about-us.html#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="about-us.html#" class="img-expert"><img src="images/homepage/about-7.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="about-us.html#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="about-us.html#" class="img-expert"><img src="images/homepage/about-8.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="about-us.html#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="about-us.html#" class="img-expert"><img src="images/homepage/about-7.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="about-us.html#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item content-expert">
                                        <a href="about-us.html#" class="img-expert"><img src="images/homepage/about-8.jpg" alt="" class="img-responsive img"></a>
                                        <div class="caption-expert"><a href="about-us.html#" class="title">Mark letto</a>
                                            <p class="text">Manager Tour Guide</p>
                                            <ul class="social list-inline">
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-facebook"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-twitter"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-pinterest-p"></i></a></li>
                                                <li><a href="about-us.html#" class="social-expert"><i class="expert-icon fa fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="about-tours padding-top padding-bottom">
                            <div class="container">
                                <div class="wrapper-tours">
                                    <div class="content-icon-tours">
                                        <div class="content-tours"><i class="icon flaticon-people"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">3750</div>
                                            </div>
                                            <div class="text">Happy Customers</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-suitcase"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">7740</div>
                                            </div>
                                            <div class="text">Flight To Travel</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-two"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">850</div>
                                            </div>
                                            <div class="text">Hotel to stay</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-transport"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">140</div>
                                            </div>
                                            <div class="text">Car Rental</div>
                                        </div>
                                        <div class="content-tours"><i class="icon flaticon-drink"></i>
                                            <div class="wrapper-thin"><span class="wrapper-icon-thin"><i class="icon-thin fa fa-circle-thin"></i></span>
                                                <div class="tours-title">8960</div>
                                            </div>
                                            <div class="text">Awesome Tours</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <section class="wrapper-open-position padding-top padding-bottom">
                            <div class="container">
                                <div class="wrapper-position">
                                    <h3 class="title-style-2">open position</h3>
                                    <div class="content-position">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12 col-xs-12 main-right">
                                                <div class="content-open">
                                                    <div class="main-position">
                                                        <div class="img-position">
                                                            <a href="about-us.html#" class="img-open"><img src="images/background/bg-team-open.jpg" alt="" class="img-responsive"></a>
                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            <li><a class="link"><i class="icon fa fa-facebook"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-twitter"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-tumblr"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-linkedin"></i></a></li>
                                                            <li><a class="link"><i class="icon fa fa-behance"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="wrapper-text-excel">
                                                        <div class="text-excel"> Business Excellence</div>
                                                        <ul class="list-text list-unstyled">
                                                            <li><a class="link-text"><i class="icon fa fa-angle-double-right"></i><span class="text-title">What we’re looking for:</span></a>
                                                                <p class="text">You will be working on a wide variety of projects, from branding, advertising, web design, and everything in between. Our style is very collaborative and informal so versatility and communication
                                                                    skills are key. You are a Designer with well-rounded design skills, a desire to learn, and a passion for solving problems of all shapes and sizes with thoughtful design.</p>
                                                            </li>
                                                            <li><a class="link-text"><i class="icon fa fa-angle-double-right"></i><span class="text-title">What you get to do everyday:</span></a>
                                                                <ul>
                                                                    <li><span>Create assets for the Zendesk website</span></li>
                                                                    <li><span>Concept ideas around the Zendesk brand</span></li>
                                                                    <li><span>Design and e xecute Zendesk online advertising</span></li>
                                                                    <li><span>Design presentations and printed materials</span></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="group-list group-number">
                                                    <ul class="list-unstyled about-us-list">
                                                        <li><span class="text">Accounting, Finance & Legal</span><span class="text-number">3</span></li>
                                                        <li><span class="text">Creative</span><span class="text-number">1</span></li>
                                                        <li><span class="text">Engineering & Product</span><span class="text-number">4</span></li>
                                                        <li><span class="text">Information Technology</span><span class="text-number">6</span></li>
                                                        <li><span class="text">Marketing & Sale</span><span class="text-number">2</span></li>
                                                        <li><span class="text">Account Management</span><span class="text-number">1</span></li>
                                                        <li><span class="text">Internships</span><span class="text-number">12</span></li>
                                                    </ul>
                                                </div>
                                                <div class="wrapper-llc">
                                                    <div class="llc-title">expooler SAN FRANCISCO LLC</div>
                                                    <div class="text">Create your travel agency, lodge, club, blog or destination website the quick and easy way.</div>
                                                    <ul class="list-llc list-unstyled">
                                                        <li><i class="icon fa fa-map-marker"></i><a href="about-us.html#" class="item">132, My Street, Kingston, New York </a></li>
                                                        <li><i class="icon fa fa-phone"></i>
                                                            <a href="about-us.html#" class="item">
                                                                <p class="ph-number">(+1) 369-258-147</p>
                                                                <p class="ph-number">(+1) 369-268-157</p>
                                                            </a>
                                                        </li>
                                                        <li><i class="icon fa fa-envelope-o"></i><a href="about-us.html#" class="item">recruit@explooer.com</a></li>
                                                    </ul>
                                                </div><a href="about-us.html#" class="view-more"><span class="more">View our company page</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section class="about-banner">
                            <div class="container" id="topPartnersWrap">
                                <h3 class="title-style-2">OUR TOP PARTNERS</h3>
                                <div class="wrapper-banner">
                                    <div class="content-banner">
                                        <a href="about-us.html#" class="img-banner"><img src="http://www.stickpng.com/assets/images/585e9ddbcb11b227491c34fc.png" alt="" class="img-responsive"></a>
                                        <a href="about-us.html#" class="img-banner"><img src="https://www.inria.fr/var/inria/storage/images/medias/sophia-antipolis/actualites-images/amadeus-logo/957928-1-fre-FR/amadeus-logo_vignette.gif" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="about-us.html#" class="img-banner"><img src="https://www.logodesignlove.com/images/evolution/british-airways-logo-old-01.jpg" alt="" class="img-responsive"></a>
                                        <a href="about-us.html#" class="img-banner"><img src="https://www.anari.aero/wp-content/uploads/2015/04/kenya-airways.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="about-us.html#" class="img-banner"><img src="http://www.fox21online.com/wp-content/uploads/2017/04/delta-logo-300x300.png" alt="" class="img-responsive"></a>
                                        <a href="about-us.html#" class="img-banner"><img src="https://s-media-cache-ak0.pinimg.com/originals/00/1f/84/001f84ec3ae8d59d1590b364b3e9858e.png" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="about-us.html#" class="img-banner"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Logo_ethiopian_airlines.svg/2000px-Logo_ethiopian_airlines.svg.png" alt="" class="img-responsive"></a>
                                        <a href="about-us.html#" class="img-banner"><img src="http://www.belgiansmaak.com/wp-content/uploads/2015/07/Brussels_Airlines_Logo.gif" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="content-banner">
                                        <a href="about-us.html#" class="img-banner"><img src="https://vignette.wikia.nocookie.net/logopedia/images/c/c4/Egyptair_logo.svg/revision/latest?cb=20100510190957" alt="" class="img-responsive"></a>
                                    </div>
                                    <!-- <div class="content-banner">
                                        <a href="about-us.html#" class="img-banner"><img src="images/logo/about-banner-6.png" alt="" class="img-responsive"></a>
                                        <a href="about-us.html#" class="img-banner"><img src="images/logo/about-banner-3.png" alt="" class="img-responsive"></a>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                        <section class="contact style-1">
                            <div class="container">
                                <div class="row">
                                    <div class="wrapper-contact-style">
                                        <div data-wow-delay="0.5s" class="contact-wrapper-images wow fadeInLeft"><img src="images/homepage/contact-people.png" alt="" class="img-responsive"></div>
                                        <div class="col-lg-6 col-sm-7 col-lg-offset-4 col-sm-offset-5">
                                            <div data-wow-delay="0.4s" class="contact-wrapper padding-top padding-bottom wow fadeInRight">
                                                <div class="contact-box">
                                                    <h5 class="title">contact us</h5>
                                                    <p class="text">Just pack and go! Let leave your travel plan to travel experts!</p>
                                                    <form class="contact-form"><input type="text" placeholder="Your Name" class="form-control form-input">
                                                        <!--label.control-label.form-label.warning-label(for="") Warning for the above !--><input type="email" placeholder="Your Email" class="form-control form-input">
                                                        <!--label.control-label.form-label.warning-label(for="") Warning for the above !--><textarea placeholder="Your Message" class="form-control form-input"></textarea>
                                                        <div class="contact-submit"><button type="submit" data-hover="SEND NOW" class="btn btn-slide"><span class="text">send message</span><span class="icons fa fa-long-arrow-right"></span></button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- BUTTON BACK TO TOP-->
                    <div id="back-top"><a href="about-us.html#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
                </div>
@stop


@section('script')

<!-- <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> -->
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/detect-browser/browser.js"></script>
        <script src="libs/smooth-scroll/jquery-smoothscroll.js"></script>
        <script src="libs/wow-js/wow.min.js"></script>
        <script src="libs/slick-slider/slick.min.js"></script>
        <script src="libs/selectbox/js/jquery.selectbox-0.2.js"></script>
        <script src="libs/please-wait/please-wait.min.js"></script>
        <script src="libs/fancybox/js/jquery.fancybox.js"></script>
        <script src="libs/fancybox/js/jquery.fancybox-buttons.js"></script>
        <script src="libs/fancybox/js/jquery.fancybox-thumbs.js"></script>






        <script type="text/javascript">

        jQuery(function($){
           "use strict";

   var SLZ = window.SLZ || {};


   /*=======================================
   =             MAIN FUNCTION             =
   =======================================*/

   SLZ.mainFunction = function(){
       // Slide section about expert
       $('.wrapper-expert').slick({
           infinite: true,
           slidesToShow: 4,
           slidesToScroll: 4,
           speed: 1500,
           dots: false,
           responsive: [
               {
                   breakpoint: 769,
                   settings: {
                       slidesToShow: 3,
                       slidesToScroll: 3,
                       dots: true
                   }
               },
               {
                   breakpoint: 601,
                   settings: {
                       slidesToShow: 2,
                       slidesToScroll: 2,
                       dots: true
                   }
               },
               {
                   breakpoint: 381,
                   settings: {
                       slidesToShow: 1,
                       slidesToScroll: 1,
                       dots: true
                   }
               }
           ]
       });
       // Slide section about banner
       $('.wrapper-banner').slick({
           infinite: true,
           slidesToShow: 6,
           slidesToScroll: 6,
           speed: 1500,
           dots: false,
           responsive: [
               {
                   breakpoint: 769,
                   settings: {
                       slidesToShow: 4,
                       slidesToScroll: 4
                   }
               },
               {
                   breakpoint: 481,
                   settings: {
                       slidesToShow: 2,
                       slidesToScroll: 2
                   }
               }
           ]
       });
   };
   /*=======================================
   =           END MAIN FUNCTION           =
   =======================================*/

   $(document).ready(function(){
       SLZ.mainFunction();
   });

   /*======================================
   =          END INIT FUNCTIONS          =
   ======================================*/

});

</script>
@stop
