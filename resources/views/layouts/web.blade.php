<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- SEO -->
    <meta name="description" content="The Best Travel & Tour Agency.">
    <meta name="keywords" content="travel and tour, hotels, ">
    <meta name="author" content="Bindu Travels">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icons -->
    <link rel="icon" href="{{asset('images/logo.jpg')}}" sizes="32x32">

    <!-- Styles -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css'>
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>

  <!-- nav -->
  <nav id="homeNavbar">
    <div class="home-navbar-wrapper">
      <div class="navbar-wrapper clearfix">
        <div class="navbar-logo">
          <a href="{{route('home.index')}}"><img src="{{asset('images/logo.jpg')}}" alt=""></a>
        </div>
        <div class="navbar-routes">
          <ul>
            <li><a href="{{route('home.index')}}">Home</a></li>
            <li><a href="{{route('home.aboutUs')}}">About Us</a></li>
            <li><a href="{{route('home.tours')}}">Tours</a></li>
            <li><a href="">Flights</a></li>
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Special Offers</a></li>
            <li><a href="{{route('home.contactUs')}}">Contact Us</a></li>

          </ul>
        </div>
        <div class="navbar-auth">
          <a href="#">Login / Signup</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- nav -->

  <div id="webContent">
    <div class="web-content-wrapper">
      @yield('content')
    </div>
  </div>


  <!-- footer -->
  <footer>
     <div class="footer-top">

       <div class="footer-top-content clearfix">

         <div class="footer-top-float">
           <h3>Contact Us</h3>
           <ul>
             <li>Address of company <br>
                Lorem ipsum dolor sit amet,<br>
                Lorem ipsum dolor sit amet,<br>
                Accra Ghana</li>
             <li><a href="tel:+233540124713">+233 66666666</a></li>
             <li><a href="tel:+233302432124">+233 00000000</a></li>
             <li><a href="mailto:info@bindutravels.com">info@bindutravels.com</a></li>
           </ul>
         </div>

         <div class="footer-top-float">
           <h3>Message To Our Customers</h3>
           <p>Lorem ipsum dolor sit amet,
             consectetur adipisicing elit, sed do
             eiusmod tempor incididunt ut labore et
             dolore magna aliqua. Ut enim ad minim
             veniam.
           </p>
         </div>

         <div class="footer-top-float">
           <h3>Our Top Clients</h3>
           <ul>
             <li>Company Name</li>
             <li>Company Name</li>
             <li>Company Name</li>
             <li>Company Name</li>
             <li>Company Name</li>
           </ul>
         </div>

       </div>

     </div>


     <div class="footer-bottom">
       <div class="footer-bottom-adds">
         <!-- <div id="topFooterAdds" class="owl-carousel owl-theme">
             <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/south_african_airways_bvjso1.png" alt=""></div>
             <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/KLM-logo-219x286_a8zubo.png" alt=""></div>
             <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/iata_egclbb.png" alt=""></div>
             <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/emirates_logo_sn5own.png" alt=""></div>
             <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/delta_airlines_iljxuo.png" alt=""></div>
         </div> -->
         <div id="footerSocial">
           <ul>
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-youtube"></i></a></li>
           </ul>
           <br>
           <span>© Bindu Travels 2017.</span>
         </div>
       </div>
     </div>
   </footer>
<!-- footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js'></script>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>
