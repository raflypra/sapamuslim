
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sapa Muslim</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sapa Muslim" />
	<meta name="keywords" content="Sapa Muslim" />
	<meta name="author" content="sapamuslim.com" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- ADDON.css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" style="padding: 15px 0 !important;" role="banner">
		<div class="container">
			<div class="header-inner">
				<a href="<?=base_url()?>">
					<img src="<?=base_url()?>assets/images/logo.png" height="50px">
				</a>
				<!-- <h1><i class="sl-icon-energy"></i><a href="index.html">Lesser</a></h1> -->
				<nav role="navigation" style="padding: 10px !important;">
					<ul>
						<li><a class="<?=($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home' ? 'active':'')?>" href="<?=base_url()?>">Home</a></li>
						<li><a class="<?=($this->uri->segment(1) == 'about' ? 'active':'')?>" href="<?=base_url()?>about">About Us</a></li>
						<?php if(count($this->session->userdata(config_item('session_id'))) == '0'):?>
						<li><a class="<?=($this->uri->segment(1) == 'register' ? 'active':'')?>" href="#">Register</a></li> 
						<li><a class="<?=($this->uri->segment(1) == 'login' ? 'active':'')?>" href="<?=base_url()?>login">Login</a></li>
						<?php else: ?>
						<li><a class="<?=($this->uri->segment(1) == 'host' ? 'active':'')?>" href="<?=base_url()?>host/host_area/<?=$this->session->userdata(config_item('session_id'))->host_id?>">Host Area</a></li> 
						<li><a class="<?=($this->uri->segment(1) == 'login' ? 'active':'')?>" href="<?=base_url()?>login/logout">Logout</a></li>
						<?php endif;?>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	<?=$_content;?>
	
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<!-- <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>About Us</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Our Services</h3>
				<ul class="float">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Branding &amp; Identity</a></li>
					<li><a href="#">Free HTML5</a></li>
					<li><a href="#">HandCrafted Templates</a></li>
				</ul>
				<ul class="float">
					<li><a href="#">Free Bootstrap Template</a></li>
					<li><a href="#">Free HTML5 Template</a></li>
					<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
					<li><a href="#">HandCrafted Templates</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Follow Us</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
					<li><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
					<li><a href="#"><i class="icon-google-plus"></i> Google Plus</a></li>
					<li><a href="#"><i class="icon-instagram"></i> Instagram</a></li>
				</ul>
			</div> -->
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; <?=date('Y')?> Sapa Muslim. All Rights Reserved.</p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	<!-- JS -->
	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?=base_url()?>assets/js/jssor.slider-21.1.6.mini.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>

	<script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:1900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <script src="<?=base_url()?>assets/js/page.js"></script>

	</body>
</html>

