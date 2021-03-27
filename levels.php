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
<!-- Page Banner Area Start -->
        <div class="page-banner-area section overlay gradient">
            <div class="container">
                <div class="row">
                    <div class="page-banner col-12">
                        <h2>Achievments</h2>
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="#">Achievments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Area End -->


<!-- Causes Area Start -->
<div id="causes-area" class="causes-area bg-dark section pt-120 pb-90">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title white text-center col-12 mb-80">
                <h2>LATEST ACHIEVMENTS</h2>
            </div>
        </div>
        <div class="row">
            <!--  Single Causes  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/black.png" alt="">
                        <!--  Title  -->
                        <h4><a href="#">Black</a></h4>
                        <!--  Country  -->
                        <span>WORK TO BE DONE TO ACCOMPLISH THIS AWARD:</span>
                        <!--  Content  -->
                        <p>Complete 2 tasks to accomplish 20 points to move to level Constant user</p>
                        <button class="button" href="#" id="primaryID5" onclick="showTask('taskBar5', 'btnHide5', 'primaryID5')">View Tasks</button>
                        <button style="display: none;" class="button" href="#" onclick="hideTask('taskBar5', 'btnHide5', 'primaryID5')" id="btnHide5">Hide Tasks</button>
                        <p style="display: none;" id="taskBar5"><b>Duration:</b> 0 Months. <b>Actions:</b> 1. Use our special Renewi Bags. 2.Get a freind to become a member <b>Rewrds:</b> A place on our website publicity</p>
                    </div>
                </div>
            </div>
            <!--  Single Causes  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/red.jpg" alt="">
                        <!--  Title  -->
                        <h4><a href="#">Red</a></h4>
                        <!--  Country  -->
                        <span>WORK TO BE DONE TO ACCOMPLISH THIS AWARD:</span>
                        <!--  Content  -->
                        <p>Complete 3 tasks to accomplish 60 points to move to level Orange</p>

                        <button class="button" href="#" id="primaryID1" onclick="showTask('taskBar1', 'btnHide1', 'primaryID1')">View Tasks</button>
                        <button style="display: none;" class="button" href="#" onclick="hideTask('taskBar1', 'btnHide1', 'primaryID1')" id="btnHide1">Hide Tasks</button>
                        <p style="display: none;" id="taskBar1"><b>Duration:</b> 3 Months. <b>Actions:</b> 1. Separate 30 kg of garbage. 2.30 % of your garbage is recyclable. 3. Bring your garbage to a dump location. <b>Rewrds:</b> Renewi recycling bags</p>
                    </div>
                </div>
            </div>
            <!--  Single Causes  -->
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/orange.jpg" alt="">
                        <!--  Title  -->
                        <h4><a href="#">Orange</a></h4>
                        <!--  Country  -->
                        <span>WORK TO BE DONE TO ACCOMPLISH THIS AWARD:</span>
                        <!--  Content  -->
                        <p>Complete 3 tasks to accomplish 90 points to move to level Yellow</p>
                        
                        <button class="button" href="#" id="primaryID2" onclick="showTask('taskBar2', 'btnHide2', 'primaryID2')">View Tasks</button>
                        <button style="display: none;" class="button" href="#" onclick="hideTask('taskBar2', 'btnHide2', 'primaryID2')" id="btnHide2">Hide Tasks</button>
                        <p style="display: none;" id="taskBar2"><b>Duration:</b> 6 Months. <b>Actions:</b> 1. Separate 50 kg of garbage. 2. 50% of your garbage is recyclable. 3. Show your garbage on social media with our hashtag. <b>Rewrds:</b> Special place on the website with companies who are “close” to becoming Green.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/yellow.jpg" alt="">
                        <!--  Title  -->
                        <h4><a href="#">Yellow</a></h4>
                        <!--  Country  -->
                        <span>WORK TO BE DONE TO ACCOMPLISH THIS AWARD:</span>
                        <!--  Content  -->
                        <p>Complete 2 tasks to accomplish 80 points to move to level Green</p>
                        
                        <button class="button" href="#" id="primaryID3" onclick="showTask('taskBar3', 'btnHide3', 'primaryID3')">View Tasks</button>
                        <button style="display: none;" class="button" href="#" onclick="hideTask('taskBar3', 'btnHide3', 'primaryID3')" id="btnHide3">Hide Tasks</button>
                        <p style="display: none;" id="taskBar3"><b>Duration:</b> 9 Months. <b>Actions:</b> 1. Separate 70 kg of garbage. 2. 70% of your garbage is recyclabl. <b>Rewrds:</b> Special place on the website with companies who are “close” to becoming Green.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="single-causes-dark">
                    <div class="wrap">
                        <!--  Image  -->
                        <img src="img/causes/green.png" alt="">
                        <!--  Title  -->
                        <h4><a href="#">Green</a></h4>
                        <!--  Country  -->
                        <span>WORK TO BE DONE TO ACCOMPLISH THIS AWARD:</span>
                        <!--  Content  -->
                        <p>Complete 2 tasks to accomplish 100 to achive the quality mark.</p>
                        
                        <button class="button" href="#" id="primaryID4" onclick="showTask('taskBar4', 'btnHide4', 'primaryID4')">View Tasks</button>
                        <button style="display: none;" class="button" href="#" onclick="hideTask('taskBar4', 'btnHide4', 'primaryID4')" id="btnHide4">Hide Tasks</button>
                        <p style="display: none;" id="taskBar4"><b>Duration:</b> 1 Year. <b>Actions:</b> 1. Be a member for a year. 2. Separate 100 kg of garbage. <b>Rewrds:</b> Certificate/quality mark for being a green company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Causes Area End -->




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
<!-- Added JS
============================================ -->
<script src="javascript.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/greensoul-preview/greensoul/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Mar 2021 19:15:02 GMT -->
</html>