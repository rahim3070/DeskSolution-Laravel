<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">        
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <title>Desk Solution</title>

        <!-- Favicons -->
        <link href="{{URL::to('public/asset_client/img/favicon.png')}}" rel="icon">
        <link href="{{URL::to('public/asset_client/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="{{URL::to('public/asset_client/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{URL::to('public/asset_client/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('public/asset_client/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('public/asset_client/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('public/asset_client/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{URL::to('public/asset_client/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{URL::to('public/asset_client/css/style.css')}}" rel="stylesheet">

        <!-- =======================================================
          Theme Name: BizPage
          Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>
    <body>
        <!-- Header -->
        <header id="header">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <h1><a href="{{URL::to('/')}}" class="scrollto">Desk Solution</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="{{URL::to('/')}}"><img src="{{URL::to('public/asset_client/img/logo.png')}}" alt="" title="" /></a>-->
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('about-us')}}">About Us</a></li>
                        <!--<li><a href="{{URL::to('services')}}">Services</a></li>-->
                        <li><a href="{{URL::to('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{URL::to('team')}}">Team</a></li>
                        <!-- <li class="menu-has-children"><a href="">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                                <li><a href="#">Drop Down 5</a></li>
                            </ul>
                        </li>-->
                        <li><a href="{{URL::to('contact-us')}}">Contact Us</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header>       

        @yield('client_content')

        <!-- Footer -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <?php
                    $contactus_info = DB::table('tbl_contact_us')
                            ->where('publication_status', 1)
                            ->where('deletion_status', 0)
                            ->get();
                    ?>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-info">
                            <h3>Desk Solution</h3>
                            @foreach($contactus_info as $v_info)
                            <p>{{$v_info->about_company}}</p>
                            @endforeach
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="ion-ios-arrow-right"></i> <a href="{{URL::to('/')}}">Home</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="{{URL::to('about-us')}}">About us</a></li>
                                <!--<li><i class="ion-ios-arrow-right"></i> <a href="{{URL::to('services')}}">Services</a></li>-->
                                <li><i class="ion-ios-arrow-right"></i> <a href="{{URL::to('portfolio')}}">Portfolio</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="{{URL::to('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>                            
                            @foreach($contactus_info as $v_info)
                            <p>
                                <strong>Address : </strong>{{$v_info->address}}<br>
                                <strong>Phone : </strong>{{$v_info->phone_number}}<br>
                                <strong>Email : </strong>{{$v_info->email}}<br>
                            </p>
                            @endforeach
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Our Newsletter</h4>
                            <?php
                            $newsletter_info = DB::table('tbl_newsletter')
                                    ->where('publication_status', 1)
                                    ->where('deletion_status', 0)
                                    ->get();
                            ?>                            
                            <marquee id="test" behavior="scroll" direction="up" scrolldelay="100" scrollamount="2" onMouseOver="document.all.test.stop()" onMouseOut="document.all.test.start()">
                                @foreach($newsletter_info as $v_info)
                                <a href="{{URL::to('newsletter-details/'.$v_info->newsletter_id)}}">
                                    <p>{{$v_info->heading}}</p>
                                </a>
                                @endforeach
                            </marquee>                            
                            <!-- <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Desk Solution</strong>. All Rights Reserved.
                </div>
                <!-- <div class="credits">
                    
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
                    
                    Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
                </div>-->
            </div>
        </footer>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="{{URL::to('public/asset_client/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/jquery/jquery-migrate.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/easing/easing.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/superfish/hoverIntent.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/superfish/superfish.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/wow/wow.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{URL::to('public/asset_client/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
        <!-- Contact Form JavaScript File -->
        <script src="{{URL::to('public/asset_client/contactform/contactform.js')}}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{URL::to('public/asset_client/js/main.js')}}"></script>

    </body>
</html>
