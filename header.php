<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Vikramshaala Solutions</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> -->
   <!--  <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="left-top">
						<div class="email-box">
							<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> hr@vikramashaala.com </a>
						</div>
						<div class="phone-box">
							<a href="tel:9972944966"><i class="fa fa-phone" aria-hidden="true"></i> +91 9972944966 </a>
						</div>
					</div>
				</div>
				<!-- <div class="col-md-6 col-sm-6">
					<div class="right-top">
						<div class="social-box">
							<ul>
								<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<ul>
						</div>
					</div> 
				</div> -->
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="images/logos/logo.png" alt="image" width="150"></a>
                </div>

               <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index" class=<?php echo $activePage == 'index' ? 'active' : '' ?> >Home</a></li>
                        <li><a href="about-us" class=<?php echo $activePage == 'about-us' ? 'active' : '' ?> >About us</a></li>
                        <li><a href="career" class=<?php echo $activePage == 'career' ? 'active' : '' ?> >Career</a></li>


                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="#">Action</a></li>
                                 <li> <a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                            
                      </li> -->


                        <li><a href="services" class=<?php echo $activePage == 'services' ? 'active' : ''  ?> >Our Services</a></li>
                        <li><a href="portfolio" class="<?php  echo $activePage == 'portfolio'  ? 'active' : ''  ?>">Portfolio</a></li>
                        <li><a href="features" class="<?php  echo $activePage == 'features' ? 'active' : ''  ?>">Features</a></li>
                        <li><a href="testimonials" class="<?php echo $activePage == 'testimonials' ? 'active' : ''  ?>">Testimonials</a></li>
                       <!-- <li><a href="pricing" class="<?php echo $activePage == 'pricing' ? 'active' : '' ?>">Pricing</a></li> -->
						<li><a href="contact-us" class="<?php echo $activePage == 'contact-us' ? 'active' : '' ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>