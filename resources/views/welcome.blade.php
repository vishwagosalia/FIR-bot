<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FIRBot</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
{{--    <script id="botmanWidget" src='{{asset('chat.js')}}'></script>--}}
    <link href="{{asset('chat.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html{
          scroll-behavior: smooth;
        }
    </style>

    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <script src= 'https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'> </script>
    
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">FIR Bot</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
{{--        <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>--}}
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="#portfolio">Crime Awareness</a></li>
          {{-- <li><a href="#team">Team</a></li> --}}
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/bg.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 style="font-size: 70px;">सद्रक्षणाय खलनिग्रहणाय</h2>
                <p style="font-size: 30px;">To Protect and to Serve.</p>
                <a href="#explore" class="btn-get-started scrollto">Explore</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
      <section id="explore"></section>
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Fir bot is crime registration system to help citizens to register a FIR without much tedious work of personally going to the police station to do so.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Crime Awareness</h3>
        </header>

        <div class="row portfolio-container">
            <div class="container-fluid">
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-hover" id="dataTable">
                    <thead>
                    <tr>
                      <th>City</th>
                      <th>State</th>
                      <th>Pincode</th>
                      <th>Complaint</th>
                      <th>Casualities</th>
                      <th>Stolen items</th>
                      <th>Time Happened</th>
                      <th>Crime Happened</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($firs as $fir)
                      <tr>
                        <td>{{ $fir->city }}</td>
                        <td>{{ $fir->state }}</td>
                        <td>{{ $fir->pincode }}</td>
                        <td>{{ $fir->complaint }}</td>
                        <td>{{ $fir->casualties }}</td>
                        <td>{{ $fir->items_stolen }}</td>
                        <td>{{ $fir->time_happened }}</td>
                        <td>{{ $fir->crime_happened }}</td>
                        {{--<td><a href="users.php?source=edit_user&user_id=$user_id" class="btn btn-info"><span class="fa fa-edit"></span></a></td>--}}
                        {{--<td><a href="users.php?source=delete_user&user_id=$user_id" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>--}}
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
                {{--<div class="row">--}}
                    {{--@foreach($data["articles"] as $item)--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<div class="shadow card bg-light ">--}}
                            {{--<img src="{{ $item['image'] }}" class="card-img-top" style="height:200px" alt=" ">--}}
                            {{--<div class="card-header">--}}
                                {{--<h5 class="card-title">--}}
                                    {{--{{ $item['title'] }}--}}
                                {{--</h5>--}}
                                {{--<a href="{{ $item['url'] }}" target="_blank" class="btn btn-primary">Read More</a>--}}
                            {{--</div>--}}
                        {{--</div><br>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            </div>
        </div>
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
   {{-- <section id="team">
     <div class="container">
       <div class="section-header wow fadeInUp">
         <h3>Team</h3>
         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
       </div>

       <div class="row"> --}}

         {{-- <div class="col-lg-3 col-md-6 wow fadeInUp">
           <div class="member">
             <img src="img/jai.jpeg" height=400 width=400 class="img-fluid" alt="">
             <div class="member-info">
               <div class="member-info-content">
                 <h4>Jai Gohil</h4>
                <span>Chief Executive Officer</span>
                
               </div>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
           <div class="member">
             <img src="img/psp.jpeg" class="img-fluid" alt="">
             <div class="member-info">
               <div class="member-info-content">
                 <h4>Pragalbha Patil</h4>
                <span>Product Manager</span>
               </div>
             </div>
           </div>
         </div> --}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--            <div class="member">--}}
{{--              <img style="transform: rotate(270deg);" src="img/dakshesh.JPG" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>Dakshesh Panchal</h4>--}}
{{--                  --}}{{-- <span>CTO</span> --}}
{{--                  --}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

         {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="2.0s">
           <div class="member">
             <img style="transform: rotate(270deg);" src="img/vishwa.JPG" class="img-fluid" alt="">
             <div class="member-info">
               <div class="member-info-content">
                 <h4>Vishwa Gosalia</h4>
                <span>Backend Developer</span>
               </div>
             </div>
           </div>
         </div> --}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--            <div class="member">--}}
{{--              <img style="transform: rotate(90deg);" src="img/smit.JPG" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>Smit Shah</h4>--}}
{{--                  --}}{{-- <span>CTO</span> --}}
{{--                  --}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--            <div class="member">--}}
{{--              <img style="transform: rotate(270deg);" src="img/khushboo.JPG" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>Khushboo Mehta</h4>--}}
{{--                  --}}{{-- <span>CTO</span> --}}
{{--                  --}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
       </div>

     </div>
   </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Feel free to contact us.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #contact -->

  </main>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
  <script src='{{asset('botman-widget.js')}}'></script>

</body>
</html>