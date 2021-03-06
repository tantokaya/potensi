<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Telusur Inovasi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
     <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ur-b4964695-8b2f-20dd-2ced-c9f6141de24c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Header -->
<header class="header-container">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="login-details clearfix">
                        <li><a href="#" class="agenticon">Agent Login</a></li>
                        <li><a href="#" class="customericon">Customer Login</a></li>
                        <li><a href="#" class="membericon">Not a Member?</a></li>
                        <li><a href="#" class="pri-color">Register Now</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="social-icon pull-right">
                        <a href="#" class="facebook fa fa-facebook"></a>
                        <a href="#" class="twitter fa fa-twitter"></a>
                        <a href="#" class="googleplus fa fa-google-plus"></a>
                        <a href="#" class="dribble fa fa-dribbble"> </a>
                    </div>
                </div>
            </div> 
        </div>     
    </div>
    <!-- Main Header -->
    <div class="main-header affix">
        <!-- moblie Nav wrapper -->
        <div class="mobile-nav-wrapper">
            <div class="container">
                <!-- logo -->
               <div id="logo"><a href="index.htm"><img src="img/logo.png" alt=""></a></div>                
                <!-- Moblie Menu Icon -->
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div> 
                <!-- main Nav -->
                <?php include "menu.php"; ?>
				<!-- Search  -->
                
            </div>
        </div>
    </div>  
</header>  
<!-- Banner -->
<div class="banner">
    <div class="container">
        <div class="center">
            <h1 class="title">Portal Telusur Inovasi</h1>
            <p>Etiam tristique ornare massa. Suspendisse in porta mauris. Phasellus quis libero eget diam tincidunt ornare. Suspendisse et libero urna. Cras auctor cursus purus, eget fringilla tellus dictum tempus. Ut gravida laoreet tincidunt. </p>
        </div>     
    </div>
</div>

<!-- Sub Banner -->    
<!--  
<section class="sub-banner newsection">
    <div class="container">
        <h2 class="title">POTENSI</h2>
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Events</a></li>
            <li>Event Left Sidebar</li>
        </ul>
    </div>
</section>
-->
<!-- Event Form -->
<section class="eventform newsection">
    <div class="container">
        <div class="row">
            <div class="col-md-9 eventform-con">
                <form>
                    <div class="form-input search-location">
                        <input type="text" value="" placeholder="Cari ">
                        <i class="icon icon-s fa fa-search"></i>
                        <button class="icon fa fa-globe"></button>
                    </div>                    
                </form>
				Daftarkan penelitian Anda <a href="#">disini</a>
            </div>
        </div>
    </div>
</section>
<!-- Events -->
<section class="events newsection">
    <div class="container">
        <div class="row">
			<!--AWAL KONTEN KANAN-->
			<?php echo $content;?>
			<!--AKHIR KONTEN KANAN-->
				<!-- col-md-3 -->
				<div class="col-md-3 col-sm-3 ">
					<aside id="aside" class="clearfix">

						<div class="header">
							<small>Bidang Fokus</small>
							<!--<h2 class="title">event or conference</h2>-->
							<span class="arrow-down"></span>
						</div>
						
						<div class="widget categories">

							<!--<h3 class="title">Filter by Categories</h3>-->
							<ul>
								<li><a href="#">Energi <span class="numbers">68</span></a></li>
								<li><a href="#">Teknologi Informasi<span class="numbers">10</span></a></li>
								<li><a href="#">Teknologi Material<span class="numbers">25</span></a></li
								 <li><a href="#">Kesehatan<span class="numbers">30</span></a></li>
								<li><a href="#">Pertahanan dan Keamanan<span class="numbers">100</span></a></li>
								<li><a href="#">Sosial<span class="numbers">5</span></a></li>
							</ul>
						</div>
                        
                    </aside>
					<aside id="aside" class="clearfix">

						<div class="header">
							<small>Berita Terkini</small>
							<!--<h2 class="title">event or conference</h2>-->
							<span class="arrow-down"></span>
						</div>
						
						<div class="widget categories">

							<!--<h3 class="title">Filter by Categories</h3>-->
							<ul>
								<li><a href="#">Berita 1 <span class="numbers">68</span></a></li>
								<li><a href="#">Berita 2<span class="numbers">10</span></a></li>
							</ul>
						</div>
                        
                    </aside>
                </div> 

            </div> 
        </div> 
    </section>
    <!-- footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">	
                <div class="widget col-md-3">
                    <div class="about">
                        <h2 class="title">About <span class="border"></span></h2>
                        <p>Vivamus ante nulla, ultrices ut molestie pellentesque, posuere eu ligula. In porttitor in turpis eu porttitor. </p> 
                    </div>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-map-marker"></i>1600 Pennsylvania Ave NW,
                            Washington, D.C., DC 20500, ABD</li>
                            <li> <i class="fa-li fa fa-phone fa-flip-horizontal"></i>+90 555 55 55</li>
                            <li><i class="fa-li fa fa-envelope-o "></i><a href="#">info@example.com</a></li>
                        </ul>           
                    </div>

                    <div class="widget col-md-3">
                        <h2 class="title">Recent Blog Posts<span class="border"></span></h2>
                        <div class="recent-blog">
                            <div class="recent-img">
                               <img src="img/70x70.gif" alt="">
                            </div>
                            <div class="recent-content">
                                <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                                <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                                <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                            </div>
                        </div>

                        <div class="recent-blog">
                            <div class="recent-img">
                               <img src="img/70x70.gif" alt="">
                            </div>
                            <div class="recent-content">
                                <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                                <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                                <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                            </div>
                        </div>

                        <div class="recent-blog">
                            <div class="recent-img">
                               <img src="img/70x70.gif" alt="">
                            </div>
                            <div class="recent-content">
                                <h3 class="title"><a href="#"> Lorem ipsum dolor sit amet consectetur. </a> </h3>
                                <p class="date"><i class="icon fa fa-calendar"></i>October 24th, 2013</p>
                                <p class="comment"><i class="icon fa fa-comment"></i><a href="#">23 Comments</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="widget lastest-tweets col-md-3">
                        <h2 class="title">Lastest Tweets<span class="border"></span></h2>
                        <ul class="fa-ul twitters"></ul>
                            </div>

                            <div class="widget col-md-3">
                                <h2 class="title">Flickr Photos<span class="border"></span></h2>
                                 <div class="flicker flickrwidget"></div>  
                            </div>

                        </div> 
                    </div>
                </footer> 
                <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.10.2.min.js"></script>
                
                <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
                <script src="<?php echo base_url();?>assets/js/main.js"></script>
            </body>
            </html>
