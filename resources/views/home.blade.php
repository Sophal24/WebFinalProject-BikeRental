
@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Bike Rental</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="{{asset('style.css')}}">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="{{asset('css/colors.css')}}">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="{{asset('css/versions.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- building CSS -->
   <link rel="stylesheet" href="{{asset('css/building.css')}}">
   </head>
   <body class="building_version" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/loader-building2.gif" alt="">
      </div>
      <!-- end loader -->
      <!-- END LOADER -->
  {{--     <header class="header header_style_01">
         <nav class="megamenu navbar navbar-default" data-spy="affix">
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html"><img src="images/logo-icon.png" alt="image"><span style="margin-top: 15px; font-size: 25px;">LOL Bike Rental</span></a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li class="active"><a data-scroll href="#home">Home</a></li>
                     <li><a data-scroll href="#about">About Us</a></li>
                     <li><a data-scroll href="#projects">Our Bike <span class="hidden-xs">*</span></a></li>
                     <li><a data-scroll href="#services">Our Service</a></li>
                     
                     <li><a data-scroll href="#testimonials">Feedbacks</a></li>
                     <li><a data-scroll href="login.html">Login</a></li>
                     <li><a data-scroll href="#">Language</a></li>
                     
                  </ul>
               </div>
            </div>
         </nav>
      </header> --}}
      <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('uploads/building/slide-img1.png');">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center">
                  <div class="big-tagline">
                     <img class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <h2><span class="yellow">BR Welcome</span></h2>
                     <img style="margin-bottom:40px;" class="border-line-img" src="uploads/building/sep-line-white.png" alt="" />
                     <p class="lead" style="color: #FFC300;">You can't be sad while riding bicycles. Bikes are our best friend.</p>
                     <a data-scroll href="#services" class="btn btn-light btn-radius btn-brd">View all Services</a>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->

      <div id="about" class="section wb">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>About Us</h2>
                     <h5>WE ARE THE LEADERS IN THE BIKE RENTAL INDUSTRY !</h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <p class="lead">A bike rental or bike hire business rents out bicycles for short periods of time, usually for a few hours. Most rentals are provided by bike shops as a sideline to their main businesses of sales and service, but some shops specialize in rentals. </p>
                     <!-- <a href="#" class="read-more">Read More</a> -->
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row text-center about-row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_01.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Bike For Mountain Trip</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                     </div>
                     <!-- end service -->
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_02.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Motor Bike for Off-Road</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                     </div>
                     <!-- end service -->
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="service-widget">
                        <div class="post-media wow fadeIn">
                           <a href="uploads/building_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                           <img src="uploads/building_03.jpg" alt="" class="img-responsive img-rounded">
                        </div>
                        <h3>Bike For Forest Experience</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                     </div>
                     <!-- end service -->
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>

      <!-- our bike section -->
      <div id="projects" class="section">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>Our Bikes</h2>
                     <h5>Now you can Book the ride here.</h5>
                  </div>
                  <!-- end messagebox -->
               </div>



               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="container gal-container">


                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#1">
                              <img src="images/pro1.png" alt="#" />
                              </a>
                              <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro1.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the first one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>




                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#2">
                              <img src="images/pro2.png" alt="#" />
                              </a>
                              <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro2.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the second one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>



                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#3">
                              <img src="images/pro3.png" alt="#" />
                              </a>
                              <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro3.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the third one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>



                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#4">
                              <img src="images/pro4.png" alt="#" />
                              </a>
                              <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                       <div class="modal-body">
                                          <img src="images/pro4.png" alt="#" />
                                       </div>
                                       <div class="col-md-12 description">
                                          <h4>This is the fourth one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>



                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                           <div class="box">
                              <a href="#" data-toggle="modal" data-target="#5">
                              <img src="images/pro5.png" alt="#" />
                              </a>
                              <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                                       <div class="modal-body">
                                          <img src="images/pro5.png" alt="#" />
                                       </div>

                                       <div class="col-md-12 description">
                                          <h4>This is the fifth one on my Gallery</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div style="justify-content: center; align-items: center; display: flex;flex-direction: column; margin-bottom: 30px;">
         <button type="button" class="btn btn-primary" style="width: 200px; height: 50px;"><a href="book" style="text-decoration: none;"><p style="font-size: 30px;">Book</p></a></button>
         <p style="font-size: 30px;">Book</p>
      </div>
      
      <!-- end section -->

      <!-- end section -->
      <div id="services" class="parallax section db parallax-off no-padding-bottom"  >
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                  <div class="message-box">
                     <h2>Services</h2>
                     <h5>WE ARE THE LEADERS IN BIKE RENTAl INDUSTRY!</h5>
                  </div>
                  <!-- end messagebox -->
               </div>
               <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-inform">
                           <div class="icon-service">
                              <img src="images/icon1.png" alt="#" />
                           </div>
                           <div class="service-inform-text">
                              <h3>Service One</h3>
                              <p>Bicyle is the first option for our customer and it is the best alternatives for short-way trip.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-inform">
                           <div class="icon-service">
                              <img src="images/icon4.png" alt="#" />
                           </div>
                           <div class="service-inform-text">
                              <h3>Service Two</h3>
                              <p>Motor Bike the second option for our customer and it is the best alernatives for long-way trip.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 serv" style="background-color:#222;">
                  <div class="serv-blog">
                     <img src="images/sr1.png" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3>Manufacturing</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#181818;">
                  <div class="serv-blog">
                     <img src="images/sr2.png" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3>Fabrication</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#222;">
                  <div class="serv-blog">
                     <img src="images/sr3.png" alt="#" />
                  </div>
                  <div class="serv-blog-cont">
                     <h3>Construction</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
               
      <!-- end section -->
      <!-- footer -->
      <footer id="footer">
         <div id="footer-widgets" class="container style-1">
            <div class="row">
               <div class="col-md-4">
                  <div class="widget widget_text">
                     <h2 class="widget-title"><span>ABOUT US</span></h2>
                     <div class="textwidget">
                        <a class="navbar-brand" href="index-building.html"><img src="images/logo-icon.png" alt="image"><span>Bike Rental</span></a>
                        <p>We are here to provide you the bike rental service. It make you easy to to go on trip to somewhere you want. Just enjoy the ride of Good quality Bicycle and Motorbike.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_links">
                     <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                     <ul class="wprt-links clearfix col2">
                        <li><a data-scroll="" href="#home">Home</a></li>
                        <li><a data-scroll="" href="#about">About Us</a></li>
                        <li><a data-scroll="" href="#services">Our Bike</a></li>
                        <li><a data-scroll="" href="#projects">Our Services</a></li>
                        <li><a data-scroll="" href="#testimonials">Feedbacks</a></li>
                        <li><a data-scroll="" href="#price">Login</a></li>
                        <li><a data-scroll="" href="#contact">Contacts us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="widget widget_information">
                     <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                     <ul>
                        <li class="address clearfix">
                           <span class="hl">Address:</span>
                           <span class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                        </li>
                        <li class="phone clearfix">
                           <span class="hl">Phone:</span> 
                           <span class="text">+56 (0) 012 345 6789</span>
                        </li>
                        <li class="email clearfix">
                           <span class="hl">E-mail:</span>
                           <span class="text">business@support.com</span>
                        </li>
                     </ul>
                  </div>
                  <div class="widget widget_socials">
                     <div class="socials">
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="bottom" class="clearfix style-1">
            <div class="container">
               <div id="bottom-bar-inner" class="wprt-container">
                  <div class="bottom-bar-inner-wrap">
                     <div class="bottom-bar-content">
                        <div id="copyright">All Rights Reserved. Company Name © 2018</div>
                        <!-- /#copyright -->
                     </div>
                     <!-- /.bottom-bar-content -->
                     <div class="bottom-bar-menu pull-right">
                        <ul class="bottom-nav">
                           <li><a href="#/">HISTORY</a></li>
                           <li><a href="#/">FAQ</a></li>
                           <li><a href="#/">EVENTS</a></li>
                        </ul>
                     </div>
                     <!-- /.bottom-bar-menu -->
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="{{asset('js/all.js')}}"></script>
      <!-- ALL PLUGINS -->
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="{{asset('js/portfolio.js')}}"></script>
      <script src="{{asset('js/hoverdir.js')}}"></script>   
   </body>

@endsection
