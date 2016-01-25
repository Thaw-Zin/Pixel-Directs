<?php
ini_set("SMTP", "pixeldirects.com");
ini_set("smtp", "25");
//print($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$email_to = "thawzin@pixeldirects.com";      
	$name = $_POST['username'];
	$email_from = $_POST['useremail'];
	$email_subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$email_message = "Form details below.\n\n";
	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}
	$email_message .= "Name: ".clean_string($name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Subject: ".clean_string($email_subject)."\n";
	$email_message .= "Phone: ".clean_string($phone)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";
           	//print($email_message);
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
            //print($headers);
	if(@mail($email_to, $email_subject, $email_message, $headers))
		$successful = 'Thank you for your enquiry. We will contact you shortly.';
        //print($successful);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script>
		//window.devicePixelRatio = 2;
	</script>
	<title>Pixel Directs</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta name="description" content="A creative agency based in Yangon, Myanmar." />
	<meta name="keywords"  content="Design agency, digital media, social media, POSM design, retail design, creative design" />
	<meta name="robots" content="index,follow">
    <meta name="author" content="Pixel Directs">
    <meta name="distribution" content="global">
	<!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Pixel Directs">
    <meta name="twitter:description" content="A creative agency based in Yangon, Myanmar">
    <meta name="twitter:url" content="http://www.pixeldirects.com" />
    <meta name="twitter:creator" content="@pixel direct">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">
    <!-- Open Graph data -->
    <meta property="og:title" content="Pixel Directs" />
    <meta property="og:url" content="http://www.pixeldirects.com/" />
    <meta property="og:type" content="company" />
    <meta property="og:description" content="A creative agency based in Yangon, Myanmar." />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:site_name" content="Pixel Directs" />
    <!-- Meta tag end -->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> 
	<!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->  
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" /> 
	<link rel="stylesheet" type="text/css" href="css/examples.css" />
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />	
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> 
	<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$( "#speed").selectmenu();
			$( "#speed1").selectmenu();
			$( "#files").selectmenu();
			$( "#number")
			.selectmenu()
			.selectmenu( "menuWidget")
			.addClass( "overflow" );

			$('.portfolio a').hover(function() {
				$(this).find("img:last").fadeToggle();
			});

            $(".open-popup").fullScreenPopup();
       //      $(document).on('click','.open-popup',function(){
       //      	$('html').bind('touchmove', function(e) {
			    //     e.preventDefault();
			    // });  
       //      	$('html').addClass('noscroll');
       //      	$('body').addClass('noscroll');
       //      });
            // $(document).on('click','.fsp-close',function(){
            // 	//$('html').unbind('touchmove'); 
            // 	$('html').removeClass('noscroll');
            // 	$('body').removeClass('noscroll');
            // });
		});
	</script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
		var myCenter=new google.maps.LatLng(16.777719, 96.137055);
		function initialize()
		{
			var mapProp = {
				center: myCenter,
				zoom:17,
				scrollwheel: false,
		      //draggable: false,
		      mapTypeId: google.maps.MapTypeId.ROADMAP
		  };
		  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		  var marker = new google.maps.Marker({
		  	position: myCenter,
		  	title:'Click to zoom'
		  });
		  marker.setMap(map);
			// Zoom to 9 when clicking on marker
			google.maps.event.addListener(marker,'click',function() {
				map.setZoom(9);
				map.setCenter(marker.getPosition());
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script>
	var map;
	function initialize() {
		var mapOptions = {
			zoom: 17,
			scrollwheel: false,
			draggable: false,
			center: new google.maps.LatLng(16.777719, 96.137055),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById('map_canvas'),
			mapOptions);
		var marker = new google.maps.Marker({
			position: myCenter,
			title:'Click to zoom'
		});
		marker.setMap(map);
			// Zoom to 9 when clicking on marker
			google.maps.event.addListener(marker,'click',function() {
				map.setZoom(9);
				map.setCenter(marker.getPosition());
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<style type="text/css">
	
	.noscroll{
        position:fixed !important;
		overflow-y:hidden !important;
	}
	</style>
</head>
<body>	
	<div class="container-fluid">			
		<div class="main-menu">
			<div id="menu">			
				<ul>
					<li data-menuanchor="pixeldirect" class="menu-logo"><a href="#pixeldirect"><img src="images/logo.jpg" data-at2x="images/logo@2x.jpg"></a></li>
					<li data-menuanchor="WhatWeDo" class="menu-align"><a href="#WhatWeDo">WHAT WE DO</a></li>
					<li data-menuanchor="WhatWeDid"><a href="#WhatWeDid">WHAT WE DID</a></li>
					<li data-menuanchor="WhereWeAre"><a id="where" href="#WhereWeAre">WHERE WE ARE</a></li>
					<!-- <li data-menuanchor="WeAreHiring" class="hiring"><a href="#WeAreHiring">WE'RE HIRING</a></li> -->
					<li data-menuanchor="WhereWeAre" class="hiring"><a id="chatus" href="#WhereWeAre">CONTACT US</a></li>
				</ul>
			</div>
		</div> 
		<!--   ////////////// mobile menu /////////// -->
		<div class="mb-menu">
			<nav id="sub-nav" class="navbar navbar-default navbar-fixed-top nav-color" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand clear-padding" href="#pixeldirect" data-menuanchor="pixeldirect"> <img id="brand" src="images/mb_logo.png" data-at2x="images/mb_logo@2x.png"> </a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>    
				</div>
				<div id="menu2" class="navbar-collapse collapse">
					<ul  class="nav navbar-nav navbar-left">
						<li data-menuanchor="WhatWeDo" data-toggle="collapse" data-target=".navbar-collapse" ><a href="#WhatWeDo">WHAT WE DO</a></li>
						<li data-menuanchor="WhatWeDid" data-toggle="collapse" data-target=".navbar-collapse"><a  href="#WhatWeDid">WHAT WE DID</a></li>
						<li data-menuanchor="WhereWeAre" data-toggle="collapse" data-target=".navbar-collapse"><a  href="#WhereWeAre">WHERE WE ARE</a></li>  
						<!-- <li data-menuanchor="WeAreHiring" data-toggle="collapse" data-target=".navbar-collapse"><a id="six" class="hiring2" href="#WeAreHiring">WE'RE HIRING</a></li> -->
						<li data-menuanchor="WhereWeAre" data-toggle="collapse" data-target=".navbar-collapse"><a id="six" class="hiring2"  href="#WhereWeAre">CONTACT US</a></li>  
					</ul>
				</div>
			</nav>
		</div> 

		<div id="container-fluid">
			<div id="fullpage">
				<div class="section">
					<div class="container" style="width:100%; height:100%">
						<div class="row">
							<div class="col-lg-12">
								<p class="logo"><img src="images/logo.jpg" alt="Logo" title="Pixel Directs"></p>
								<div class="page-title" style="display:none;"  id="box0">
									<h1 class="home-text">PIXEL DIRECTS</h1>
									<span> A Creative Agency</span>
								</div>
								<div id="pixy">
									<img src="images/Pixie-with-mat.png"> 
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div id="button-bottom">
									<ul>
										<li data-menuanchor="WhatWeDo"><a href="#WhatWeDo">What We Do</a></li>
										<li data-menuanchor="WhatWeDid"><a href="#WhatWeDid">What We Did</a></li>
										<li data-menuanchor="WhereWeAre"><a href="#WhereWeAre">Where We Are</a></li>
									</ul> 
								</div>	
							</div>
						</div>
					</div>
				</div>

				<!-- * -->
				<div class="section cloud-bg">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="content-title" id="box1">		
									<h2>PASSION NEVER FAILS</h2>
									<span><i> The only way to do great work is to love what you do - Steve Jobs.</i></span>
								</div>
							</div>
						</div>
						<div class="row" id= "pitch2" >
							<div class="col-md-3 col-xs-3 icon">
								<img src="images/icons/IconDesign.png" data-at2x="images/icons/retina/IconDesign@2x.png" class="img-responsive" style="margin:0 auto;" id="box2"> 
								<h3 id="box3"> BRANDING </h3>
								<span id="box31"> Design</span>
								<p id="box4"> Brand Identity <br> Brand Guidelines <br> Stationery Kit</p>
							</div>
							<div class="col-md-3 col-xs-3 icon">
								<img src="images/icons/IconStrategy.png" data-at2x="images/icons/retina/IconStrategy@2x.png" class="img-responsive" style="margin:0 auto;" id="box2">
								<h3 id="box3"> CORPORATE</h3>
								<span id="box31"> Design</span>
								<p id="box4"> Company Profile<br> Portfolio & Presentation <br> Infographics</p>
							</div>
							<div class="col-md-3 col-xs-3 icon">
								<img src="images/icons/IconMarketing.png" data-at2x="images/icons/retina/IconMarketing@2x.png" class="img-responsive" style="margin:0 auto;" id="box2"> 
								<h3 id="box3"> MARKETING</h3>
								<span id="box31"> Design</span>
								<p id="box4"> Marketing Collateral<br> Social Media Page<br> Point of Sales Marketing</p>
							</div>
							<div class="col-md-3 col-xs-3 icon">
								<img src="images/icons/IconMedia.png" data-at2x="images/icons/retina/IconMedia@2x.png" class="img-responsive" style="margin:0 auto;" id="box2">
								<h3 id="box3"> MULTIMEDIA</h3>
								<span id="box31"> Design</span>
								<p id="box4"> Responsive Web<br> Web & Social Content <br> Video Production</p>
							</div>
						</div>

					</div>
					<p  class="scroll-down" id="box5"> <i>Scroll down to see <br> what we did</i></p>
				</div>
				<div class="section portfolio">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="0" id='goslider'>
									<img src="images/portfolio/coca-cola.png" class="img-responsive"> 
									<img src="images/logos/coca-cola.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="1" id='goslider'> 
									<img src="images/portfolio/maxplus.png" class="img-responsive">
									<img src="images/logos/maxplus.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="2" id='goslider'> 
									<img src="images/portfolio/nescafe.png" class="img-responsive">
									<img src="images/logos/nescafe.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="3" id='goslider'>
									<img src="images/portfolio/milo.png" class="img-responsive">
									<img src="images/logos/milo.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="4" id='goslider'>
									<img src="images/portfolio/urbanity-events.png" class="img-responsive">
									<img src="images/logos/urbanity-events.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="5" id='goslider'>
									<img src="images/portfolio/awba.png" class="img-responsive">
									<img src="images/logos/awba.png" class="img-responsive">
								</a>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="6" id='goslider'>
									<img src="images/portfolio/wattmohn-shweyi.png" class="img-responsive">
									<img src="images/logos/wattmohn-shweyi.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="7" id='goslider'>
									<img src="images/portfolio/ykko.png" class="img-responsive">
									<img src="images/logos/ykko.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="8" id='goslider'> 
									<img src="images/portfolio/mandalay-sf.png" class="img-responsive">
									<img src="images/logos/mandalay-sf.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="9" id='goslider'>
									<img src="images/portfolio/seingayhar.png" class="img-responsive">
									<img src="images/logos/seingayhar.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="10" id='goslider'>
									<img src="images/portfolio/les-lunes.png" class="img-responsive">
									<img src="images/logos/les-lunes.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="11" id='goslider'>
									<img src="images/portfolio/connections-sf.png" class="img-responsive">
									<img src="images/logos/connections-sf.png" class="img-responsive" id="logo">
								</a>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="12" id='goslider'>
									<img src="images/portfolio/nuriboost.png" class="img-responsive"> 
									<img src="images/logos/nuriboost.png" class="img-responsive">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="13" id='goslider'>
									<img src="images/portfolio/bahahosi.png" class="img-responsive" id="hover">
									<img src="images/logos/bahahosi.png" class="img-responsive" id="logo">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="14" id='goslider'>
									<img src="images/portfolio/win-min.png" class="img-responsive" id="hover">
									<img src="images/logos/win-min.png" class="img-responsive" id="logo">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="15" id='goslider'>
									<img src="images/portfolio/fame.png" class="img-responsive" id="hover">
									<img src="images/logos/fame.png" class="img-responsive" id="logo">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="16" id='goslider'>
									<img src="images/portfolio/oriental-highway.png" class="img-responsive" id="hover">
									<img src="images/logos/oriental-highway.png" class="img-responsive" id="logo">
								</a>
							</div>
							<div class="col-lg-2 col-sm-4">
								<a href="#" data-target="#myCarousel" data-slide-to="17" id='goslider'>
									<img src="images/portfolio/discover-myanmar.png" class="img-responsive" id="hover">
									<img src="images/logos/discover-myanmar.png" class="img-responsive" id="logo">
								</a>
							</div>
						</div>
					</div>
					<!-- Slider Start -->
					<div id="slider">
						
						<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" style="width:100%;">
							<div class="carousel-inner">
								<div class="item active row" data-id="1">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#fe0000;">
											<img src="images/portfolio/slider/coca-cola/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 nopadding harf-part" style="background-color:#ffcc00;">
												<img src="images/portfolio/slider/coca-cola/1.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#333333;">
												<img src="images/portfolio/slider/coca-cola/2.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#f6f6f6;">
												<img src="images/portfolio/slider/coca-cola/3.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="2">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#ff7e00;">
											<img src="images/portfolio/slider/maxplus/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 nopadding harf-part" style="background-color:#81ba41;">
												<img src="images/portfolio/slider/maxplus/1.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#48cdbb;">
												<img src="images/portfolio/slider/maxplus/2.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#ffd500;">
												<img src="images/portfolio/slider/maxplus/3.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="3">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#ec2027;">
											<img src="images/portfolio/slider/nescafe/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 nopadding full-part" style="background-color:#343434;">
												<img src="images/portfolio/slider/nescafe/1.png" class="img-responsive">
											</div>

										</div>
									</div>
								</div>

								<div class="item row" data-id="4">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#00b74d;">
											<img src="images/portfolio/slider/milo/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding harf-part" style="background-color:#e2d720;">
												<img src="images/portfolio/slider/milo/1.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding harf-part" style="background-color:#fff;">
												<img src="images/portfolio/slider/milo/2.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="5">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#8cd4e1;">
											<img src="images/portfolio/slider/urbanity/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#f7f2e4;">
												<img src="images/portfolio/slider/urbanity/1.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#e6d6c3;">
												<img src="images/portfolio/slider/urbanity/2.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#d2a37d;">
												<img src="images/portfolio/slider/urbanity/3.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#c57c46;">
												<img src="images/portfolio/slider/urbanity/4.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="6">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#c7cbb0;">
											<img src="images/portfolio/slider/awba/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#ebc84d;">
												<img src="images/portfolio/slider/awba/1.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="7">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#ebe8e8;">
											<img src="images/portfolio/slider/wattmohn/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#333232;">
												<img src="images/portfolio/slider/wattmohn/1.png" class="img-responsive">
											</div>
										</div>
										
									</div>
								</div>

								<div class="item row" data-id="8">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#005131;">
											<img src="images/portfolio/slider/ykko/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding harf-part" style="background-color:#a2c17a;">
												<img src="images/portfolio/slider/ykko/1.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding harf-part" style="background-color:#e6de6b;">
												<img src="images/portfolio/slider/ykko/2.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="9">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#dcbf5a;">
											<img src="images/portfolio/slider/mandalaysf/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#b04f62;">
												<img src="images/portfolio/slider/mandalaysf/1.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#c98b89;">
												<img src="images/portfolio/slider/mandalaysf/2.png" class="img-responsive">
											</div> 
										</div>
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#e1c2b6;">
												<img src="images/portfolio/slider/mandalaysf/3.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#f0e3d5;">
												<img src="images/portfolio/slider/mandalaysf/4.png" class="img-responsive">
											</div> 
										</div>
									</div>
								</div>

								<div class="item row" data-id="10">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#ecde7e;"> 
											<img src="images/portfolio/slider/seingayhar/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#52516f;">
												<img src="images/portfolio/slider/seingayhar/1.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="11">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#e9dada;">
											<img src="images/portfolio/slider/leslunes/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#bcb33c;">
												<img src="images/portfolio/slider/leslunes/1.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="12">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#3b3c3c;">
											<img src="images/portfolio/slider/connectionsf/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#d34902;">
												<img src="images/portfolio/slider/connectionsf/1.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="13">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#000;">
											<img src="images/portfolio/slider/nutriboost/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#c3d655;">
												<img src="images/portfolio/slider/nutriboost/1.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#b4cc38;">
												<img src="images/portfolio/slider/nutriboost/2.png" class="img-responsive">
											</div> 
										</div>
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding harf-part" style="background-color:#e1ecb2;">
												<img src="images/portfolio/slider/nutriboost/3.png" class="img-responsive">
											</div>
										</div> 
									</div>
								</div>

								<div class="item row" data-id="14">
									<div class="col-lg-4 col-sm-4 nopadding"> 
										<div class="slider-logo" style="background-color:#f7f6f6;">
											<img src="images/portfolio/slider/hotelbahosi/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#e4c7bb;">
												<img src="images/portfolio/slider/hotelbahosi/1.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#f6eeeb;">
												<img src="images/portfolio/slider/hotelbahosi/2.png" class="img-responsive">
											</div> 
										</div>
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#cf9986;">
												<img src="images/portfolio/slider/hotelbahosi/3.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#bc4831;">
												<img src="images/portfolio/slider/hotelbahosi/4.png" class="img-responsive">
											</div> 
										</div> 
									</div>
								</div>

								<div class="item row" data-id="15">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#2f4858;">
											<img src="images/portfolio/slider/waminn/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#fbb041;">
												<img src="images/portfolio/slider/waminn/1.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="16">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#00b065;">
											<img src="images/portfolio/slider/fame/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding full-part" style="background-color:#5ec9de;">
												<img src="images/portfolio/slider/fame/1.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="17">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#76d3af;">
											<img src="images/portfolio/slider/orientalhighway/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#ffcb09;">
												<img src="images/portfolio/slider/orientalhighway/1.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#0fa3cd;">
												<img src="images/portfolio/slider/orientalhighway/2.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-sm-12 nopadding harf-part" style="background-color:#393939;">
												<img src="images/portfolio/slider/orientalhighway/3.png" class="img-responsive">
											</div>
										</div>
									</div>
								</div>

								<div class="item row" data-id="18">
									<div class="col-lg-4 col-sm-4 nopadding">
										<div class="slider-logo" style="background-color:#e1c44f;">
											<img src="images/portfolio/slider/discovermyanmar/logo.png" class="img-responsive">
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#eaefda;">
												<img src="images/portfolio/slider/discovermyanmar/1.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#b1d4b5;">
												<img src="images/portfolio/slider/discovermyanmar/2.png" class="img-responsive">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#65bf79;">
												<img src="images/portfolio/slider/discovermyanmar/3.png" class="img-responsive">
											</div>
											<div class="col-lg-6 col-sm-6 nopadding" style="background-color:#00ad49;">
												<img src="images/portfolio/slider/discovermyanmar/4.png" class="img-responsive">
											</div> 
										</div>
									</div>
								</div>

							</div>
							<!-- Arrow -->
						</div>
						<!-- Slider Arrow -->
						<span class="slider-arrow">
							<p class="action-next"> Next</p>
							<a class="left" href="#myCarousel" data-slide="prev" id="close_slider">
								<i class="fa fa-remove"></i> 
							</a>
							<a class="left" href="#myCarousel" data-slide="prev" id="prev_slider">
								<i class="fa fa-chevron-left"></i> 
							</a>
							<a class="right" href="#myCarousel" data-slide="next" id="next_slider">
								<i class="fa fa-chevron-right"></i> 
							</a>
						</span>
						<!-- Arrow End -->
					</div>
					<!-- Slider End -->
				</div>
				
				<!-- * -->
				<div class="section">
					<div class="container-fluid" style="height:100%;">
						<div class="row" id="section4">
							<div class="col-lg-12">
								<div class="content-title">		
									<h2>BASE IN DOWNTOWN YANGON</h2>
									<span><i> Just a walking distance from Junction Mawtin shopping center at Lanmadaw.</i></span>
								</div>
							</div>
						</div>

						<div class="row location">
							<div class="col-lg-6 location-text col-md-6">
								<div class="location-txt-box">
									<p class="location-title" style="margin-top:0px !important;">DIRECTION:</p> 
									<p> You can find us at Anawratha Rd, just before turning to Kannar Rd. We are conviniently located next to Lanmadaw Yunan BBQ and 3 floors above a homey restaurant called Golden Light.</p>
									<p class="location-title"> ADDRESS:</p>
									<p> No.32, 4th Floor, Building 350-4, Anawratha Road, Lanmadaw Township, 11131, Yangon, Union of Myanmar</p>
									<p class="location-title"> PHONE:</p>
									<p id="chat" class="chat"> LET'S CHAT </p>
									<p> +95 (9) 250055192<br> +95 (9) 43139214</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6" style="padding-left:0;">
								<div id="googleMap"> </div> 
								<div class="contact-form"> 	
									<div class="data-form">
										<form role="form" method="post" action="">
											<table width="100%">
												<p class="pull-left" style="margin-left:2%; margin-bottom:1em;"> LET'T CHAT </p>
												<tr>
													<td>
														<div class="form-group">
															<fieldset>
																<select id="speed" name="subject">
																	<option selected="selected">ABOUT BRANDING</option>
																	<option>ABOUT CORPORATE</option>
																	<option>ABOUT MARKETING</option>
																	<option>ABOUT MULTIMEDIA</option>
																</select>    
															</fieldset>
														</div> 
													</td>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" id="inputName" name="username" placeholder="NAME">
														</div> 
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-group">
															<input type="email" class="form-control" id="inputEmail" name="useremail" placeholder="EMAIL">
														</div> 
													</td>
													<td>
														<div class="form-group">
															<input type="text" class="form-control" id="inputPhone" name="phone" placeholder="PHONE">
														</div> 
													</td>
												</tr>
												<tr>
													<td colspan="2"> 
														<div class="form-group">
															<textarea rows="5" class="form-control" id="message" name="message" placeholder="YOUR MESSAGE IS HERE" ></textarea>
														</div> 
													</td>
												</tr>
												<tr>
													<td> </td>
													<td><div class="controls">
														<p class="pull-right send"><input type="submit" name="sub" value="SEND NOW" id="send-btn"></p>
													</div></td>
												</tr>
											</table>
										</form>
									</div>
								</div>
							</div>
							<div class="container-fluid footer">
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-xs-7">
									<p class="copyright">MADE IN MYANMAR | &copy 2015 PIXEL DIRECTS CO.LTD</p>
								</div>
								<div class="col-md-5 col-xs-5">
									<p class="social-icon"><img src="images/twitter.png"> <a href="https://www.facebook.com/PixelDirects" target="_blank"><img src="images/facebook.png"></a> <img src="images/youtube.png"></p>
								</div>
							</div>  
						</div>
					</div>
						</div>
					</div>

				</div>

			</div>
		</div> 

		<!-- Mobile  Responsive -->
		<div id="mobile">
			<a class="anchor" id="top" name="pixeldirect"></a>
			<div id="zero">
				<div class="first-page">
					<p class="firstpage-logo"> <img src="images/logo.jpg"></p>
					<div class="page-title">
						<h2 class="home-text">PIXEL DIRECTS</h2>
						<span> A Creative Agency</span>
					</div>
					<p id="mb-pixy" ><img src="images/Pixie-with-mat.png" class="img-responsive" style="margin:0 auto; margin-top:3em;"></p>
				</div>
			</div>
			<a class="anchor" id="top" name="WhatWeDo"> </a>
			<div id="one">
				<div class="content-title">
					<h2>PASSION NEVER FAILS</h2>
					<span><i> The only way to do great work is to love what you do - Steve Jobs.</i></span>
				</div>
				<div id="pitch2" class="row no-right">
					<div class="col-md-3">
						<img src="images/icons/IconDesign.png"> 
						<h3> BRANDING</h3>
						<span>Design</span>
						<p> Brand Identity <br> Brand Guidelines <br> Stationery Kit</p>
					</div>
					<div class="col-md-3">
						<img src="images/icons/IconStrategy.png">
						<h3> CORPORATE</h3>
						<span>Design</span>
						<p> Company Profile <br> Portfolio & Presentation <br>Infographics</p>
					</div>
					<div class="col-md-3">
						<img src="images/icons/IconMarketing.png"> 
						<h3> MARKETING</h3>
						<span>Design</span>
						<p> Marketing Collateral <br> Social Media Page <br> Point of Sales Marketing</p>
					</div>
					<div class="col-md-3">
						<img src="images/icons/IconMedia.png">
						<h3> MULTIMEDIA</h3>
						<span>Design</span>
						<p> Responsive Web<br> Web & Social Content <br>Video Production</p>
					</div>
				</div>   
			</div>

			<a class="anchor" id="top" name="WhatWeDid"></a>
			<div id="two">
				<div id="WhatWeDid" class="carousel slide" data-ride="carousel" data-min-item-width="350">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/portfolio/coca-cola.png" alt="Coca Cola">
							<div class="carousel-caption">
								<a href="#popup_cola" class="btn btn-success btn-sm open-popup">More Detail </a>
							</div>
						</div>
						<div class="item">
							<img src="images/portfolio/maxplus.png" alt="Max Plus">
                            <div class="carousel-caption">
                                <a href="#popup_maxplus" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
						</div>
						<div class="item">
							<img src="images/portfolio/nescafe.png" alt="Nescafe">
                            <div class="carousel-caption">
                                <a href="#popup_nescafe" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
						</div>
						<div class="item">
							<img src="images/portfolio/milo.png" alt="Milo">
                            <div class="carousel-caption">
                                <a href="#popup_milo" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
						</div>
                        <div class="item">
                            <img src="images/portfolio/urbanity-events.png" alt="urbanity events">
                            <div class="carousel-caption">
                                <a href="#popup_urbanity" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/awba.png" alt="Awba">
                            <div class="carousel-caption">
                                <a href="#popup_awba" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/wattmohn-shweyi.png" alt="Wattmohn Shweyi">
                            <div class="carousel-caption">
                                <a href="#popup_wattmohn" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/ykko.png" alt="YKKO">
                            <div class="carousel-caption">
                                <a href="#popup_ykko" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/mandalay-sf.png" alt="mandalay SF">
                            <div class="carousel-caption">
                                <a href="#popup_mandalaysf" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/seingayhar.png" alt="Seingayhar">
                            <div class="carousel-caption">
                                <a href="#popup_seingayhar" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/les-lunes.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_leslunes" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/connections-sf.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_connectionsf" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/nuriboost.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_royaltaste" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/bahahosi.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_bahosi" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/win-min.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_winmin" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/fame.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_fame" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/oriental-highway.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_oriental" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/portfolio/discover-myanmar.png" alt="Les Lunes">
                            <div class="carousel-caption">
                                <a href="#popup_discover" class="btn btn-success btn-sm open-popup">More Detail </a>
                            </div>
                        </div>
					</div>
					<a class="left carousel-control" href="#WhatWeDid" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><img src="images/left-arrow.png" style="margin-left:-1em;"></span>
					</a>
					<a class="right carousel-control" href="#WhatWeDid" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><img src="images/right-arrow.png" style="margin-left:-1em; margin-top:-2px;"></span>
					</a>
				</div>
                <!-- Slider Popup -->
                <div id="popup_cola" style="display:none;">
                    <div><img src="images/portfolio/slider/coca-cola/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/coca-cola/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/coca-cola/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/coca-cola/mobile/4.png" class="img-responsive"></div>
                </div>
                <div id="popup_maxplus" style="display:none;">
                    <div><img src="images/portfolio/slider/maxplus/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/maxplus/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/maxplus/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/maxplus/mobile/4.png" class="img-responsive"></div>
                </div>
                <div id="popup_nescafe" style="display:none;">
                    <div><img src="images/portfolio/slider/nescafe/mobile/1.png" class="img-responsive"></div>
                </div>
                <div id="popup_milo" style="display:none;">
                    <div><img src="images/portfolio/slider/milo/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/milo/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/milo/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/milo/mobile/4.png" class="img-responsive"></div>
                </div>
                <div id="popup_urbanity" style="display:none;">
                    <div><img src="images/portfolio/slider/urbanity/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/urbanity/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/urbanity/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/urbanity/mobile/4.png" class="img-responsive"></div>
                </div>
                <div id="popup_awba" style="display:none;">
                    <div><img src="images/portfolio/slider/awba/mobile/1.png" class="img-responsive"></div>
                </div>
                <div id="popup_wattmohn" style="display:none;">
                    <div><img src="images/portfolio/slider/wattmohn/mobile/1.png" class="img-responsive"></div>
                </div>
                <div id="popup_ykko" style="display:none;">
                    <div><img src="images/portfolio/slider/ykko/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/ykko/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/ykko/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/ykko/mobile/4.png" class="img-responsive"></div>
                </div> 
                <div id="popup_mandalaysf" style="display:none;">
                    <div><img src="images/portfolio/slider/mandalaysf/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/mandalaysf/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/mandalaysf/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/mandalaysf/mobile/4.png" class="img-responsive"></div>
                </div>
                <div id="popup_seingayhar" style="display:none;">
                    <div><img src="images/portfolio/slider/seingayhar/mobile/1.png" class="img-responsive"></div>
                </div>
                <div id="popup_leslunes" style="display:none;">
                    <div><img src="images/portfolio/slider/leslunes/mobile/1.png" class="img-responsive"></div>
                </div> 
                <div id="popup_connectionsf" style="display:none;">
                    <div><img src="images/portfolio/slider/connectionsf/mobile/1.png" class="img-responsive"></div>
                </div>
                <div id="popup_royaltaste" style="display:none;">
                    <div>
                    	<img src="images/portfolio/slider/nutriboost/mobile/1.png" class="img-responsive">
                    	<img src="images/portfolio/slider/nutriboost/mobile/2.png" class="img-responsive">
                    </div>
                </div> 
                <div id="popup_bahosi" style="display:none;">
                    <div><img src="images/portfolio/slider/hotelbahosi/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/hotelbahosi/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/hotelbahosi/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/hotelbahosi/mobile/4.png" class="img-responsive"></div>
                </div>
                <div id="popup_winmin" style="display:none;">
                    <div><img src="images/portfolio/slider/waminn/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/waminn/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/waminn/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/waminn/mobile/4.png" class="img-responsive"></div>
                </div> 
                <div id="popup_fame" style="display:none;">
                    <div><img src="images/portfolio/slider/fame/mobile/1.png" class="img-responsive"></div>
                </div> 
                <div id="popup_oriental" style="display:none;">
                    <div><img src="images/portfolio/slider/orientalhighway/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/orientalhighway/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/orientalhighway/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/orientalhighway/mobile/4.png" class="img-responsive"></div>
                </div> 
                <div id="popup_discover" style="display:none;">
                    <div><img src="images/portfolio/slider/discovermyanmar/mobile/1.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/discovermyanmar/mobile/2.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/discovermyanmar/mobile/3.png" class="img-responsive"></div>
                    <div><img src="images/portfolio/slider/discovermyanmar/mobile/4.png" class="img-responsive"></div>
                </div> 
                <!-- End Slider Popup -->
			</div>
			<br>
			<a class="anchor" id="top" name="WhereWeAre"> &nbsp</a>
			<div id="four">
				<div class="content-title" style="margin-top:0%; margin-bottom:5%;">		
					<h2>BASE IN DOWNTOWN YANGON</h2>
					<span><i> Just a walking distance from Junction Mawtin shopping center at Lanmadaw.</i></span>
				</div>	
				<div class="row">
					<div class="col-md-6 col-xs-6 location-text">
						<div class="location-txt-box"><!-- <a href="#" class="pull-right" id="viewmap">VIEW MAP </a> -->
							<p class="location-title" style="margin-top:0px !important;">DIRECTION:<p> 
								<p> You can find us at Anawratha Rd, just before turning to Kannar Rd. We are conviniently located next to Lanmadaw Yunan BBQ and 3 floors above a homey restaurant called Golden Light.</p>
								<p class="location-title"> ADDRESS:</p>
								<p> No.32, 4th Floor, Building 350-4, Anawratha Road, Lanmadaw Township, 11131, Yangon, Union of Myanmar</p>
								<p class="location-title"> PHONE:</p>
								<div>
									<p id="chat1" class="pull-right">LET'S CHAT ! </p>
									<p> +95 (9) 250055192<br> +95 (9) 43139214</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-6 flip-container" style="padding-left:0px;">
							<div id="map_canvas" style="height:22em;"></div>
							<div class="contact-form1"> 	
								<div class="data-form">
									<form role="form">
										<table width="100%">
											<p class="pull-left" style="margin-left:2%; margin-bottom:1em; font-size:1em;"> LET'T CHAT </p> 
											<tr>
												<td style="text-align:left;"><div class="form-group">
													<fieldset>
														<select name="speed" id="speed1">
															<option selected="selected">ABOUT BRANDING</option>
															<option>ABOUT CORPORATE</option>
															<option>ABOUT MARKETING</option>
															<option>ABOUT MULTIMEDIA</option>
														</select>    
													</fieldset>
												</div> 
											</td>
											<td><div class="form-group">
												<input type="email" class="form-control" id="inputName" placeholder="NAME">
											</div> 
										</td>
									</tr>
									<tr>
										<td><div class="form-group">
											<input type="email" class="form-control" id="inputEmail" placeholder="EMAIL">
										</div> 
									</td>
									<td><div class="form-group">
										<input type="email" class="form-control" id="inputPhone" placeholder="PHONE">
									</div> 
								</td>
							</tr>
							<tr>
								<td colspan="2"> <div class="form-group">
									<textarea rows="4" class="form-control" id="message" placeholder="YOUR MESSAGE IS HERE" ></textarea>
								</div> </td>
							</tr>
							<tr>
								<td> </td>
								<td><div class="controls">
									<p class="pull-right send"><input type="submit" name="sub" value="SEND NOW" id="send-btn"></p>
								</div>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</div>
</div>
</div>
	<div class="mb-footer">
		<p class="copyright">MADE IN MYANMAR | &copy 2015 PIXEL DIRECTS CO.LTD</p>
		<p class="social-icon"><img src="images/twitter.png"> <a href="https://www.facebook.com/PixelDirects" target="_blank"><img src="images/facebook.png"></a> <img src="images/youtube.png"></p>
	</div>
</div> 
<!-- Mobile End -->
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
<script type="text/javascript" src="js/jquery.easings.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="js/jquery.fullscreen-popup.js"></script> 
<script type="text/javascript" src="js/app.js"></script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35590079-1', 'auto');
  ga('send', 'pageview');
</script>
<script type="application/ld+json">
	{ "@context" : "http://schema.org",
	  "@type" : "Organization",
	  "name" : "Pixel Directs",
	  "url" : "http://www.pixeldirects.com",
	  "contactPoint" : [
	    { "@type" : "ContactPoint",
	      "telephone" : "+95 (9) 250055192",
	      "contactType" : "customer support"
	    } ],
	  "sameAs" : [ "https://www.facebook.com/PixelDirects"]
	}
</script>
<script type="text/javascript" src="js/retina.min.js"></script> 
</body>
</html>
