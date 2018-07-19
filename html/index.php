<?php
if isset($_POST['f_name']) &&
	isset($_POST['l_name']) &&
	isset($_POST['phone']) &&
	isset($_POST['email']) &&
	isset($_POST['message']){

			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name']);
			$phone = $_POST['phone']);
			$email = $_POST['email']);
			$message = $_POST['message'];

		if (!empty($f_name) &&
			!empty($l_name) &&
			!empty($phone) &&
			!empty($email) &&
			!empty($message) ) {

				if (strlen($f_name)>20 ||
					strlen($l_name)>20 ||
					strlen($phone)>20 ||
					strlen($email)>50) ||
					strlen($message)>1000{
					echo "Sorry, 1 or more fields over max length";
			 } else {

				 $to = "lucas.spenard@gmail.com";
				 $subject= "Website Contact Form";
				 $body=$f_name.$l_name"\n".$phone."\n".
				 $email."\n".$message;
				 $headers = 'From: '.$f_name.$l_name;

				 if (@mail($to, $subject, $body, $headers)){
					 echo "Thanks, I will be in contact soon";
				 } else {
					 echo "Sorry, message was not delivered";
				 }
			 }
		}

}




?>
<html>
	<head>
		<a name="#top"/>
		<title>About Me- Lucas Spenard</title>
		<link rel="shortcut icon" href="favicon_ytF_icon.ico" type="image/x-icon" sizes="16x16">

		<link rel="icon" href="favicon_ytF_icon.jpg" type="image/jpg" sizes="16x16">

		<link rel="icon" href="favicon_ytF_icon.png" type="image/png" sizes="16x16">

		<link rel="icon" href="favicon_ytF_icon.gif" type="image/gif" sizes="16x16">
<!-- Start Device Icon Links-->
		<link rel="apple-touch-icon" sizes="180x180" href="favicons.zip/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicons.zip/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicons.zip/favicon-16x16.png">
		<link rel="manifest" href="favicons.zip/manifest.json">
		<link rel="mask-icon" href="favicons.zip/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">
<!-- End Device Icon Links-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="../css/style.css" rel="stylesheet" type="text/css">

    <link rel="canonicle" href="aboutme.html">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
<!--Navigation Start-->
	<header>

		<div id="phone_logo">
			<i class="fa fa-phone fa-2x" aria-hidden="true"></i><a href="tel:+1-602-295-1854" id="phone">(602) 295-1854</a>
		</div>
		<div id="menu">
			<div id="logo">
				<img src="../img/logo_small.png" alt="bird logo">
			</div>
			<div id="menu_bar">
				<button type="button" id="menu_button" class="moveButton" disabled="true"><span id="button_text" >ME<br>NU</span></button>

			</div>
		</div>
		<div id="social_media">
			<a href="https://facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
			<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
			<a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
			<a href="https://github.com" target="_blank"><i class="fa fa-github fa-2x"></i></a>
		</div>

<div class="menuModal"></div>
	</header>
<!--Navigation End-->
	<main>
<!--About Me Start-->



			<section id="about_me" >
				<section id="main_style">
					<h1>Lucas Spenard</h1>
					<p>Front End Dev / Digital Marketing</p>

						<section class="buttons" id="aboutme_btn">
							<h3>About Me</h3>
						</section>
				</section>
			</section>
			<video src="../vid/MilkyWaywithTreeVidevo.mp4" autoplay="true" loop="true" type="video/mp4">
			</video>

<!--About Me End -->
<!--Services Start-->
			<section id="services_wrapper">
				<section id="services">
					<section class="text">
						<h2>What I can do.</h2>
						<p>I create a unique process for each client to, ensure that business objectives are met,</br> success is achieved and people are happy.</p>
					</section>
				<section id="table_wrapper">
					<div class="services_wrapper">
						<i class="fa fa-code fa-5x" aria-hidden="true"></i>
						<h3>Web Dev</h3>
					</div>
					<div class="services_wrapper">
						<i class="fa fa-bullseye fa-5x" aria-hidden="true"></i>
						<h3>PPC</h3>
					</div>
					<div class="services_wrapper">
						<i class="fa fa-paint-brush fa-5x" aria-hidden="true"></i>
						<h3>Design</h3>
					</div>
					<div class="services_wrapper">
						<i class="fa fa-search fa-5x" aria-hidden="true"></i>
						<h3>SEO</h3>
					</div>
				</section>
				<br><br>
			</section>
		</section>
<!--Services End-->
<!--Second Header Start-->
<section id="contact">
	<section id="second">

		<section id="second_style">
			<h2>Let's work together</h2>
			<p>I'm always happy and excited to discuss new projects.</br>
			Let me know if you need help on your web projects or feel like your brand needs something fresh.
			</p>
			<section class="buttons" id="contact_btn">
				  <h3>Get in touch</h3>
			</section>

			<form action="index.html" method="POST" id="contact_form">
				<button type="button" id="form_close_btn">X</button>
				<h2>Contact Me</h2>


				<label>First Name:</label><br>
				<input type="text" name="f_name" maxlength="20" placeholder="John..."><br>

				<label>Last Name:</label><br>
				<input type="text" name="l_name"
				maxlength="20" placeholder="Smith..."><br>

				<label>Phone:</label><br>
				<input type="text" name="phone" maxlength="20"placeholder="555-555-5555..."><br>

				<label>Email:</label><br>
				<input type="text" name="email" maxlength="50" placeholder="you@yourwebsite.com..."><br>

				<label>Message:</label><br>
				<textarea name="message" maxlength="1000" placeholder="start typing..." cols="50" rows="10" id="message"></textarea><br>

				<input type="submit" id="form_btn"></input>


			</form>
		</section>

	</section>
</section>
<!--Second Header End-->
<!--My Portfolio Start-->
			<section id="my_portfolio" class="clearfix">
				<h2>My Work</h2>
				<p>I create a unique process for each client to ensure that business objectices are met, </br>
				success is achieved and people are happy.</p>
				<section class="portfolio_wrapper" >
					<img src="../img/t1.jpg" alt="phone on laptop">
					<img src="../img/t2.jpg" alt="paper with writing tools">
					<img src="../img/t3.jpg" alt="man holding paper and pen">
					<br>
					<img src="../img/b1.jpg" alt="laptop with bookshelf in background">
					<img src="../img/b2.jpg" alt="man looking at mobile phone">
					<img src="../img/b3.jpg" alt="art pad with a">
			</section>
<!--My Portfolio End-->

		</main>
		<footer>
<!--Contact Start-->


			<section id="footer" >
				<section id="footer_wrap">
					<p>Lucas Spenard &copy; 2017 </br>
						All Rights Reserved</br>
						Phoenix, AZ</br>
					<a href="#top">Back to Top</a></p>
				</section>
			</section>
			</div>
<!--Contact End-->
		</footer>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"type="text/javascript">
		</script>

		<script type="text/javascript" src="../javascript/script2.js">
		</script>

	</body>
</html>
