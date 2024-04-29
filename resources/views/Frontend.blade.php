<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Leave Tracker</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto">Dreamers Academy
                    </a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li><a href="{{ route('login') }}">Login </a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header>
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url('https://thumbs.dreamstime.com/b/education-home-school-elearning-student-girl-pointing-laptop-studying-development-computer-math-internet-263416548.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Ignite Their Potential: </h2>
                                    <h2> in Dreamers Academy's Creative Coding Courses!</h2>
                                <p>"At Dreamers Academy, we believe in nurturing young minds and empowering them to dream big. Our Creative Coding Courses are designed to ignite creativity, foster innovation, and equip children with essential coding skills for the future. </p>
                                <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('https://img.freepik.com/premium-photo/portrait-school-kids-using-laptop-library_107420-57852.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Discover Coding Wonders:</h2>
                                <h2>  "Dreamers Academy's Engaging Courses Await!"</h2>
                                <p>Dreamer Academy invites your child to unlock the wonders of coding in our engaging courses. Designed to ignite curiosity and foster creativity, our medium offers interactive learning experiences that make coding fun and accessible. </p>
                                <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('frontend/img/intro-carousel/3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                            <h2>Dreamers Academy</h2>
                            <h2> Where Young Minds Code Their Dreams into Reality!</h2>
                                <p>"At Dreamers Academy, we're on a mission to inspire the next generation of innovators. Our medium is coding, our canvas is creativity, and our students are the dreamers of tomorrow. </p>
                                <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('frontend/img/intro-carousel/4.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Dreamers Academy: Where Coding Sparks Creativity!</h2>
                                <p>At Dreamers Academy, we believe in the power of coding to ignite creativity and inspire innovation. Our medium-sized coding courses offer the perfect blend of structure and exploration, providing children with the tools they need to turn their dreams into reality.</p>
                                <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('frontend/img/intro-carousel/5.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Dreamers Academy: Where Creativity Meets Code</h2>
                                <p>At Dreamer Academy, we're passionate about cultivating creativity through coding. Our medium-sized classes provide the perfect environment for children to explore the exciting world of programming while unleashing their imagination. </p>
                                <a href="{{ route('login') }}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="frontend/lib/jquery/jquery.min.js"></script>
    <script src="frontend/lib/jquery/jquery-migrate.min.js"></script>
    <script src="frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/lib/superfish/superfish.min.js"></script>
    <script src="frontend/lib/wow/wow.min.js"></script>
    <script src="frontend/js/main.js"></script>

</body>

</html>