<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]-->
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Michael Tourek</title>
	<meta name="description" content="Portfolio for actor Michael Tourek.">
<!--Helpers ==================================================================================== -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="michaeltourek.html">
	<meta property="og:description" content="Portfolio for actor Michael Tourek.">
	<meta property="og:url" content="https://www.michaeltourek.com/">
  	<meta property="og:site_name" content="Michael Tourek Portfolio">
  	<link rel="canonical" href="https://www.michaeltourek.com/">
  	<link rel="shortcut icon" type="image/x-icon" href="img/assets/favicon.ico">
<!-- CSS ======================================================================================= -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/screen_layout_large.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:533px)" href="css/screen_layout_small.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:888px)" href="css/screen_layout_medium.css" />
	<link href="https://fonts.googleapis.com/css?family=Lato|Slabo+27px" rel="stylesheet">
<!-- Javascipt for navigation toggle ============================================================ -->	
	<script  src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.sidebarBtn').click(function(){
				$('.sidebar').toggleClass('active');
				$('.sidebarBtn').toggleClass('toggle');
				$('.content').toggleClass('toggle');
				$('.contact').toggleClass('toggle');
				$('#top-nav').toggleClass('toggle');
				$('.form-container').toggleClass('toggle');
			})
		})
	</script>
	<script type="text/javascript" src="js/display.js"></script>
</head>
<body>
	<div class="container">
		<div class="sidebar">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="demo.html">Demo</a></li>
				<li><a href="headshots.html">Headshots</a></li>
				<li><a href="resume.html">Resume</a></li>
				<li><a href="films.html">Short Films</a></li>
				<li><a href="commercial.html">Commercial</a></li>
				<li><a href="stage.html">Stage</a></li>
				<li><a href="voice.html">Voice Over</a></li>
				<li><a href="gallery.html">Photo Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="https://www.facebook.com/miketourek/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/michaeltourek/" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
				<li><a href="http://www.imdb.com/name/nm0869627/?ref_=nv_sr_1/" target="_blank"><i class="fa fa-lg fa-imdb"></i></a></i></li>
				<li><a href="https://www.youtube.com/user/michaeltourek/" target="_blank"><i class="fa fa-lg fa-youtube"></i></a></li>
			</ul>
			<button class="sidebarBtn"><span></span></button>	
		</div>
		<div class="content">
			<h1 class="name"><span class="fname">Michael</span> <span class="lname">TOUREK</span></h1>
			<h2 class="sag">SAG-AFTRA, A.E.A</h2>
		</div>
		<div id="top-nav">
			<ul>
				<li><a href="#southeastern" class="box1" onclick="getSouth()">For Southeastern Representation Click Here</a></li>
				<li><a href="#newyork" class="box2" onclick="getNY()">For New York and LA Representation Click Here</a></li>
				<li><a href="#direct" class="box3" onclick="getDirect()">To Contact Directly Click Here</a></li>
			</ul>
		</div>
		<div class="form-container" id="southeastern">
            <div class="contact-form">
            	<h1>Southeastern</h1>
                <form id="contact-us" method="post" action="#">
                    <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                    <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                    <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                	<textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                	<button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                </form>
            </div>
        </div>
        <div class="form-container" id="newyork">
            <div class="contact-form">
            <h1>New York | LA</h1>
                <form id="contact-us" method="post" action="#">
                    <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                    <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                    <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                	<textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                	<button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                </form>
            </div>
        </div>
        <div class="form-container" id="direct">
            <div class="contact-form">
            <h1>Direct Contact</h1>
                <form id="contact-us" method="post" action="#">
                    <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                    <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                    <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                	<textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                	<button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                </form>
            </div>
        </div>
	</div>
</body>
</html>