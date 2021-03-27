<?php
session_start();
if(isset($_SESSION['userLoggedSuccess'])){
    echo "<script>alert('".$_SESSION['userLoggedSuccess']."')</script>";
    unset($_SESSION['userLoggedSuccess']);
}
?>
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/greensoul-preview/greensoul/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 19:14:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green Soul</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- CSS -->
    <!-- Bootstrap CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Icon Font CSS
	============================================ -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Plugins CSS
	============================================ -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Style CSS
	============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizer JS
	============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!-- Body main wrapper start -->
<div class="wrapper fix">

<!-- Header Area Start -->
<div id="header-area" class="header-area section">

<!-- Header Top Start -->
<div class="header-top">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Header Top Left -->
            <div class="header-top-left col-md-auto col-12">
                <p><span>Phone:</span> +945 588 9966</p>
                <p><span>Email:</span> greensoul@email.com</p>
            </div>
            <!-- Header Top Right -->
            <div class="header-top-right col-md-auto col-12 d-none d-md-flex">
                <!-- Header Social -->
                <div class="header-social d-md-none d-lg-flex">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <?php
                        if(isset($_SESSION['userActive']) && $_SESSION['userActive'] == true){
                            echo '<a href="#"><i class="fa fa-user"></i></a>';
                        }
                    ?>
                </div>
                <!-- Header Quote Button -->
                <a href="contact.php" class="get-quote">get a qoute</a>
            </div>
        </div>
    </div>
</div>
<!-- Header Top End -->

<!-- Header Bottom Start -->
<div class="header-bottom">
    <div class="container">
        <div class="row">
			<!-- Logo -->
			<div class="header-logo col align-self-center"><a class="logo" href="index.php"><img src="img/logo.png" alt=""></a></div>
			<!-- Main Menu -->
			<div id="main-menu" class="main-menu col-auto d-none d-lg-block">
				<nav>
					<ul>
						<li><a href="index.php">home</a></li>
						<li><a href="about.php">about</a></li>
						<li><a href="levels.php">Achievments</a></li>
                        <li><a href="contact.php">Contact</a></li>
						<li><a href="registration.php">Register</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</nav>
			</div>
			<!-- Header Search Wrapper -->
			<div class="header-search-wrapper col-auto">
				<!-- Search Toggle -->
				<button class="search-toggle"><i class="zmdi zmdi-search-for"></i></button>
				<!-- Header Search Wrapper -->
				<div class="header-search">
					<form action="#" id="header-search-form">
						<input type="text" placeholder="Search here...">
						<button><i class="zmdi zmdi-search"></i></button>
					</form>
				</div>
			</div>
			<!-- Mobile Menu -->
			<div class="mobile-menu col-12 d-lg-none"></div>
        </div>
    </div>
</div>
<!-- Header Bottom End -->

</div>
<!-- Header Area End -->

<!-- Hero Area Start -->
<div id="hero-area" class="hero-area section">
    <!-- Hero Slider -->
    <div id="hero-slider" class="nivoSlider">
        <img src="img/hero/1.jpg" alt="" title="#herocaption-1" />
        <img src="img/hero/2.jpg" alt="" title="#herocaption-2" />
    </div>
    <!-- Hero Slider Caption -->
    <div id="herocaption-1" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <!-- Hero Content -->
                <div class="hero-content col-12">
                    <h1 class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="0.5s">We’re green soul <br>& We Care You</h1>
                    <p class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1s">There are many variations of passages of Lorem Ipsum available, but the majority ha suffd alteration in some form, by injected humour, or randomised words whic't look even slightly believable. If you are going to use a passage.</p>
                    <a href="#" class="learn-more wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1.5s">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Slider Caption -->
    <div id="herocaption-2" class="nivo-html-caption">
        <div class="container">
            <div class="row">
                <!-- Hero Content -->
                <div class="hero-content col-12">
                    <h1 class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="0.5s">We’re green soul <br>& We Care You</h1>
                    <p class="wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1s">There are many variations of passages of Lorem Ipsum available, but the majority ha suffd alteration in some form, by injected humour, or randomised words whic't look even slightly believable. If you are going to use a passage.</p>
                    <a href="#" class="learn-more wow cusFadeInRight" data-wow-duration=".5s" data-wow-delay="1.5s">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Service Area Start -->
<div id="service-area" class="service-area section pt-120 pb-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <h1>1500+</h1>
                <h2>People Working with Us</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
        </div>
        <div class="row">
			<!--  Single Service  -->
			<div class="single-service text-center col-lg-3 col-md-6 col-12">
				<img src="img/service/1.png" alt="">
				<h4>Recycling</h4>
				<p>There are many v ofpasages of Lorem Ipsum available, but the majority have sufred</p>
			</div>
			<!--  Single Service  -->
			<div class="single-service text-center col-lg-3 col-md-6 col-12">
				<img src="img/service/2.png" alt="">
				<h4>Organic</h4>
				<p>There are many v ofpasages of Lorem Ipsum available, but the majority have sufred</p>
			</div>
			<!--  Single Service  -->
			<div class="single-service text-center col-lg-3 col-md-6 col-12">
				<img src="img/service/3.png" alt="">
				<h4>Eco System</h4>
				<p>There are many v ofpasages of Lorem Ipsum available, but the majority have sufred</p>
			</div>
			<!--  Single Service  -->
			<div class="single-service text-center col-lg-3 col-md-6 col-12">
				<img src="img/service/4.png" alt="">
				<h4>Biology</h4>
				<p>There are many v ofpasages of Lorem Ipsum available, but the majority have sufred</p>
			</div>
        </div>
    </div>
</div>
<!-- Service Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area bg-dark section">
    <!--  About Image  -->
    <div class="about-image"><img src="img/about/about.jpg" alt=""></div>
    <div class="container">
        <div class="row">
            <!--  About Content  -->
            <div class="about-content col-lg-6 col-12 ml-auto pt-110 pb-110">
                <h2>Over More than</h2>
                <h1>150+ Projects WorldWide</h1>
                <p>Contrary to popular belief, Lorem Ipsum is not simply ranm text. It has roots in a piece of classical Latin literature from C, making it over 2000 years old. Richard McClintock,</p>
                <p>a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more</p>
                <a href="#" class="button white">JOIN NOW</a>
                <a href="#" class="button">view details</a>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Project Area Start -->
<div id="project-area" class="project-area section pt-120 pb-90">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <h2>RECENT PROJECT</h2>
            </div>
        </div>
        <div class="row">
            <!--  Single Project  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-project">
                    <!--  Image  -->
                    <img src="img/project/1.jpg" alt="">
                    <!--  Title  -->
                    <h4><a href="project-details.php">All the Lorem Ipsum Gener</a></h4>
                    <!--  Tags  -->
                    <div class="tags fix">
                        <a href="#">Energy</a>
                        <a href="#">Green</a>
                        <a href="#">Solar</a>
                    </div>
                    <!--  Content  -->
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClitock,</p>
                    <!--  Button  -->
                    <a class="button" href="project-details.php">Learn More</a>
                </div>
            </div>
            <!--  Single Project  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-project">
                    <!--  Image  -->
                    <img src="img/project/2.jpg" alt="">
                    <!--  Title  -->
                    <h4><a href="project-details.php">It is a long established fact</a></h4>
                    <!--  Tags  -->
                    <div class="tags fix">
                        <a href="#">Energy</a>
                        <a href="#">Green</a>
                        <a href="#">Solar</a>
                    </div>
                    <!--  Content  -->
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClitock,</p>
                    <!--  Button  -->
                    <a class="button" href="project-details.php">Learn More</a>
                </div>
            </div>
            <!--  Single Project  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-project">
                    <!--  Image  -->
                    <img src="img/project/3.jpg" alt="">
                    <!--  Title  -->
                    <h4><a href="project-details.php">All the Lorem Ipsum Gener</a></h4>
                    <!--  Tags  -->
                    <div class="tags fix">
                        <a href="#">Energy</a>
                        <a href="#">Green</a>
                        <a href="#">Solar</a>
                    </div>
                    <!--  Content  -->
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClitock,</p>
                    <!--  Button  -->
                    <a class="button" href="project-details.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project Area End -->

<!-- Donation Area Start -->
<div id="donation-area" class="donation-area section pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--  Donation Section Title  -->
                <div class="donation-title text-center fix">
                    <h3>NEED URGENT DONATION FOR</h3>
                    <h1>PROTECT & CARE OUR ENVIRONMENT</h1>
                </div>
                <!--  Donation Form  -->
                <div class="donation-form">
                    <form action="#" id="donation-form">
                        <div class="input-box input-3"><input type="text" placeholder="YOUR NAME"></div>
                        <div class="input-box input-3"><input type="email" placeholder="EMAIL"></div>
                        <div class="input-box input-3">
                            <select>
                                <option value="1">SELECT PROJECT</option>
                                <option value="2">PROJECT NUMBER 1</option>
                                <option value="3">PROJECT NUMBER 2</option>
                                <option value="4">PROJECT NUMBER 3</option>
                                <option value="5">PROJECT NUMBER 4</option>
                                <option value="6">PROJECT NUMBER 4</option>
                            </select>
                        </div>
                        <div class="input-box input-3">
                            <select>
                                <option value="1">SELECT AMOUNT</option>
                                <option value="2">$1000</option>
                                <option value="3">$1500</option>
                                <option value="4">$2000</option>
                                <option value="5">$2500</option>
                                <option value="6">$3000</option>
                            </select>
                        </div>
                        <div class="input-box input-3"><input type="submit" value="donate now"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donation Area End -->

<!-- Causes Area Start -->
<div id="causes-area" class="causes-area bg-dark section pt-120 pb-90">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title white text-center col-12 mb-80">
                <h2>LATEST CAUSES</h2>
            </div>
        </div>
        <div class="row">
            <!--  Single Causes  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/1.jpg" alt="">
                        <!--  Title  -->
                        <h4><a href="causes-details.php">All the Lorem Ipsum Gener</a></h4>
                        <!--  Country  -->
                        <span>Brazil</span>
                        <!--  Content  -->
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <!--  Button  -->
                        <a class="button" href="#">donate</a>
                    </div>
                    <!--  Donation Amount  -->
                    <div class="donation-amount fix">
                        <p class="total float-left">Target: <span>$5000</span> </p>
                        <p class="raise float-right">Raised: <span>$2000</span> </p>
                    </div>
                </div>
            </div>
            <!--  Single Causes  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/2.jpg" alt="">
                        <!--  Title  -->
                        <h4><a href="causes-details.php">Contrary to popular belief</a></h4>
                        <!--  Country  -->
                        <span>Bangladesh</span>
                        <!--  Content  -->
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <!--  Button  -->
                        <a class="button" href="#">donate</a>
                    </div>
                    <!--  Donation Amount  -->
                    <div class="donation-amount fix">
                        <p class="total float-left">Target: <span>$5000</span> </p>
                        <p class="raise float-right">Raised: <span>$2000</span> </p>
                    </div>
                </div>
            </div>
            <!--  Single Causes  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/3.jpg" alt="">
                        <!--  Title  -->
                        <h4><a href="causes-details.php">It is a long established fact</a></h4>
                        <!--  Country  -->
                        <span>Brazil</span>
                        <!--  Content  -->
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <!--  Button  -->
                        <a class="button" href="#">donate</a>
                    </div>
                    <!--  Donation Amount  -->
                    <div class="donation-amount fix">
                        <p class="total float-left">Target: <span>$5000</span> </p>
                        <p class="raise float-right">Raised: <span>$2000</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Causes Area End -->

<!-- FunFact Area Start -->
<div id="funfact-area" class="funfact-area section pt-120 pb-100">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <h2>SOME FACTS</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center flex-wrap col-auto">
                <!--  Single Fact  -->
                <div class="single-fact">
                    <img src="img/funfact/1.png" alt="">
                    <span class="border"></span>
                    <h1><span class="counter">54514</span></h1>
                    <p>PROJECTS</p>
                </div>
                <!--  Single Fact  -->
                <div class="single-fact">
                    <img src="img/funfact/2.png" alt="">
                    <span class="border"></span>
                    <h1>$<span class="counter">58785</span></h1>
                    <p>DONATIONS</p>
                </div>
                <!--  Single Fact  -->
                <div class="single-fact">
                    <img src="img/funfact/3.png" alt="">
                    <span class="border"></span>
                    <h1>$<span class="counter">28785</span></h1>
                    <p>RAISED</p>
                </div>
                <!--  Single Fact  -->
                <div class="single-fact">
                    <img src="img/funfact/4.png" alt="">
                    <span class="border"></span>
                    <h1><span class="counter">504</span></h1>
                    <p>DONATORS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FunFact Area End -->

<!-- Video Area Start -->
<div id="video-area" class="video-area section overlay pt-150 pb-150">
    <div class="container">
        <div class="row">
            <!--  Video Wrapper  -->
            <div class="video-wrapper col-12 text-center">
                <h1>WATCH OUR LATEST CAMPAIGN VIDEO</h1>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of clssical Latin literature from 45 BC, making it over 2000 years old.</p>
                <a class="video-popup" href="https://www.youtube.com/watch?v=mcixldqDIEQ"><i class="zmdi zmdi-play-circle-outline"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Video Area End -->

<!-- Event Gallery Area Start -->
<div id="event-gallery-area" class="event-gallery-area section pt-120 pb-70">
    <div class="container">
        <div class="row">
            <!--  Event Wrapper  -->
            <div class="event-wrapper col-xl-5 col-lg-6 col-12 mb-50">
                <!--  Block Title  -->
                <h3 class="block-title">Latest Events</h3>
                <!--  Single Event List  -->
                <div class="event-list fix">
                    <div class="date float-left">
                        <h1>20</h1>
                        <h4>june</h4>
                    </div>
                    <div class="content fix">
                        <a href="causes-details.php">Cites of the word in class</a>
                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                    </div>
                </div>
                <!--  Single Event List  -->
                <div class="event-list fix">
                    <div class="date float-left">
                        <h1>23</h1>
                        <h4>june</h4>
                    </div>
                    <div class="content fix">
                        <a href="causes-details.php">long established fact that</a>
                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                    </div>
                </div>
                <!--  Single Event List  -->
                <div class="event-list fix">
                    <div class="date float-left">
                        <h1>25</h1>
                        <h4>june</h4>
                    </div>
                    <div class="content fix">
                        <a href="causes-details.php">Contrary to popular belief</a>
                        <p>There are many variations of passages of Lorem Ipsum available,</p>
                    </div>
                </div>
            </div>
            <!--  Small Gallery Wrapper  -->
            <div class="small-gallery-wrapper ml-auto col-lg-6 col-12 mb-40">
                <!--  Block Title  -->
                <h3 class="block-title">PHOTO GALLERY</h3>
                <div class="row row-5">
                    <!--  Gallery Item  -->
                    <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                        <a href="img/gallery/big-1.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-1.jpg" alt=""></a>
                    </div>
                    <!--  Gallery Item  -->
                    <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                        <a href="img/gallery/big-2.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-2.jpg" alt=""></a>
                    </div>
                    <!--  Gallery Item  -->
                    <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                        <a href="img/gallery/big-3.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-3.jpg" alt=""></a>
                    </div>
                    <!--  Gallery Item  -->
                    <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                        <a href="img/gallery/big-4.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-4.jpg" alt=""></a>
                    </div>
                    <!--  Gallery Item  -->
                    <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                        <a href="img/gallery/big-5.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-5.jpg" alt=""></a>
                    </div>
                    <!--  Gallery Item  -->
                    <div class="col-md-4 col-sm-3 col-xs-6 mb-10">
                        <a href="img/gallery/big-6.jpg" class="gallery-item gallery-popup"><img src="img/gallery/small-thumb-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Event Gallery Area End -->

<!-- Client Area Start -->
<div id="client-area" class="client-area bg-dark section pt-115 pb-115">
    <div class="container">
		<!--  Client Slider  -->
		<div class="client-slider row">
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/1.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/2.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/3.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/4.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/5.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/1.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/2.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/3.png" alt=""></div>
			<!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/4.png" alt=""></div>
			<!--  Client Item  -->                    <!--  Client Item  -->
			<div class="client-item col-12"><img src="img/clients/5.png" alt=""></div>
		</div>
	</div>
</div>
<!-- Client Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pt-120 pb-90">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-12 mb-80">
                <h2>LATEST NEWS</h2>
            </div>
        </div>
        <div class="row">
            <!--  Blog Item  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="blog-item">
                    <!--  Image  -->
                    <a href="blog-details.php" class="image"><img src="img/blog/1.jpg" alt=""></a>
                    <!--  Content  -->
                    <div class="content">
                        <h4><a href="blog-details.php">All the Lorem Ipsum Gener</a></h4>
                        <!--  Meta  -->
                        <div class="meta fix">
                            <span>28 January 2016</span>
                            <span><a href="#">3 Comment</a></span>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <a href="blog-details.php" class="read-more">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <!--  Blog Item  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="blog-item">
                    <!--  Image  -->
                    <a href="blog-details.php" class="image"><img src="img/blog/2.jpg" alt=""></a>
                    <!--  Content  -->
                    <div class="content">
                        <h4><a href="blog-details.php">Finibus Bonorum et Malorum</a></h4>
                        <!--  Meta  -->
                        <div class="meta fix">
                            <span>28 January 2016</span>
                            <span><a href="#">3 Comment</a></span>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <a href="blog-details.php" class="read-more">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <!--  Blog Item  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="blog-item">
                    <!--  Image  -->
                    <a href="blog-details.php" class="image"><img src="img/blog/3.jpg" alt=""></a>
                    <!--  Content  -->
                    <div class="content">
                        <h4><a href="blog-details.php">The standard Lorem Ipsuma</a></h4>
                        <!--  Meta  -->
                        <div class="meta fix">
                            <span>28 January 2016</span>
                            <span><a href="#">3 Comment</a></span>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <a href="blog-details.php" class="read-more">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

<!-- Footer Top Area Start -->
<div id="footer-top-area" class="footer-top-area bg-dark section pt-100 pb-50">
    <div class="container">
        <div class="row">
            <!--  Footer Widget  -->
            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                <!--  About Widget  -->
                <div class="about-widget">
                    <img src="img/logo-2.png" alt="">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                    <!-- Footer Social -->
                    <div class="footer-social fix">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                    <a href="#" class="button">Donate now</a>
                </div>
            </div>
            <!--  Footer Widget  -->
            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                <h3>Latest News</h3>
                <!--  Latest News Widget  -->
                <div class="footer-news">
                    <a href="#" class="image float-left"><img src="img/blog/footer/1.jpg" alt=""></a>
                    <div class="content fix">
                        <a href="#">Finibus Bonorum Malorum</a>
                        <p>Contrary to popular belief, Lorm Ipsum is not simply random</p>
                    </div>
                </div>
                <div class="footer-news">
                    <a href="#" class="image float-left"><img src="img/blog/footer/2.jpg" alt=""></a>
                    <div class="content fix">
                        <a href="#">The Standard lorem ipsum</a>
                        <p>Contrary to popular belief, Lorm Ipsum is not simply random</p>
                    </div>
                </div>
            </div>
            <!--  Footer Widget  -->
            <div class="footer-widget col-lg-4 col-md-6 col-12 mb-50">
                <h3>Flickr Photos</h3>
                <!--  Flickr Widget  -->
                <ul class="flickr-gallery">
                    <li><a href="#"><img src="img/flickr/1.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/2.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/3.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/4.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/5.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/6.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/7.jpg" alt=""></a></li>
                    <li><a href="#"><img src="img/flickr/2.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Footer Top Area End -->

<!-- Footer Bottom Area Start -->
<div id="footer-bottom-area" class="footer-bottom-area section">
<!-- Footer Top Area End -->
    <div class="container">
        <div class="row justify-content-between">
            <!-- Copyright -->
            <div class="copyright col-md-auto col-12">
                <p>Copyright &copy; <span>Green Soul</span> 2019. All right reserved</p>
            </div>
            <!-- Author Credit -->
            <div class="author-credit col-md-auto col-12">
                <p>Created by <a href="https://hastech.company/">Hastech</a> With <i class="fa fa-heart"></i></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom Area End -->

</div>
<!-- Body main wrapper end -->

<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="js/ajax-mail.js"></script>
<!-- Main JS
============================================ -->
<script src="js/main.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/greensoul-preview/greensoul/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 19:15:02 GMT -->
</html>