<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	$number = $_POST['number'];
	$message = $_POST['message'];
	$from = 'ACM | NC A & T Chapter';
	$to = 'acmncat@gmail.com';
	$subject = "Message from  $name";
	$subject2 = "Message ACM | NC A & T Chapter ";
	$body2 = " Thank you $name for contacting us. We will be in contact with you very soon!";

	$headers = "From:  $from | $email" . "\r\n" .
		"Reply-To: $email " . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	$headers2 = "From: $from " . "\r\n" .
		"Reply-To: noreply@csacm.ncat.edu" . "\r\n" .
		'X-Mailer: PHP/' . phpversion();


	$body = "From: $name\n E-Mail: $email\n Phone: $number\n Message:\n $message";
	// Check if name has been entered
	if (!$_POST['name']) {
		//$errName='<p class="urgent">Please enter your name</p>';
		$popup  = "Please Complete Entire Form";
	}

	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		//$errEmail='<p class="urgent">Please enter a valid email address</p>';
		$popup  = "Please Complete Entire Form";
	}
	//Check if message has been entered
	if (!$_POST['number']) {
		//$errNum='<p class="urgent">Please enter your number</p>';
		$popup  = "Please Complete Entire Form";
	}
	//Check if message has been entered
	if (!$_POST['message']) {
		//$errMessage='<p class="urgent">Please enter your name</p>';
		$popup = "Please Complete Entire Form";
	}

	// If there are no errors, send the email
	if (!$popup) {
		if (mail($to, $subject, $body, $headers)) {
			$popup  = "Message sent successfully!";

			mail($email, $subject2, $body2, $headers2);

		} else {
			$popup  = "There was an error sending your
			message. Please try again later.";
		}
	}
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ACM - NC A & T </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.html">ACM - NC A & T Chapter</a> </h1>
					<nav id="nav">
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#sigs">SIGs</a></li>
							<li><a href="#leadership">Leadership</a></li>
							<li><a href="#calendar">Events</a></li>
							<li><a href="#contact">Contact</a></li>
							<!--<li><a href="elements.html">Elements</a></li>
							<li><a href="generic.html">Generic</a></li> -->
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="home">
					<h2> The Association for Computing Machinery</h2>
					<p class="urgent">**First General Body Meeting: January 20th, 2016 @ 7:00 PM McNair Hall**</p>
					<ul class="actions">
						<li><a href="#contact" class="button">Join Our Chapter!</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section id="about" class="box special">
						<span class="image minifeat"><img src="images/ACM.png" alt="" /></span>
						<header class="major">
							<h2>About ACM</h2>
							<p>ACM, the world's largest educational and scientific computing society,
								delivers resources that advance computing as a science and a profession.
								ACM provides the computing field's premier Digital Library and serves its
								members and the computing profession with leading-edge publications,
								conferences, and career resources.
								<a href="http://www.acm.org/about-acm/about-the-acm-organization">Learn More about ACM...
								</a>
							</p><br/>
							<br/>
							<h2>Our Chapter</h2>
							<p>Here at <a href="http://www.ncat.edu">NC A & T</a>, our number one goal is to ensure
								that all of our members are well equipped for the workforce upon receiving their
								respective degrees. We do so by hosting weekly meetings, tutoring sessions, and
								countless chapter events such as hack-a-thons and interview workshops. From developing
								fully responsive websites to creating the next big startup company, there is
								truly never a dull moment in this chapter.
								<br/><br/>
								If you are interested in joining, we meet every Wednesday at 7:00 PM in McNair Hall. For more
								information, <a href="#contact">contact</a> us today!
							</p>
						</header>
						<span class="image featured"><img src="images/NCAT.jpg" alt="" /></span>
					</section>

					<!-- SIGs -->
					<section id="sigs" class="box special">
						<header class="major major">
							<h2>Special Interest Groups</h2>
							<p>ACM’s Special Interest Groups (SIGs) represent the major areas of the dynamic computing field.
								A primary source of original research and personal perspectives from the world's leading
								thinkers in computing and information technology, they foster technical communities within
								their respective specialties across countries and continents.
								<br/><br/>
								ACM’s SIGs are invested in advancing the skills of their members, keeping them abreast of
								emerging trends. They offer opportunities for networking with colleagues, staying connected
								to peers and negotiating the strategic challenges of the digital age.
								<br/><br/>
								This year, we want to see what SIGs interest our members most. Check out the
								<a href="http://www.acm.org/special-interest-groups/sigs-by-knowledge-area">full list</a>
								of SIGs to see where you may fit in then <a href="mailto:acmncat@gmail.com">email</a> us to
								let us know which one it is.</p>
						</header>

					</section>

					<section id="leadership" class="box special features">
						<header>
							<h2>Leadership</h2>
						</header>

						<div class="features-row">
							<section>
								<span class="image minifeat2"><img src="images/Brandon.jpeg" alt="" /></span>
								<h3><a href="mailto:bllong@aggies.ncat.edu">Brandon Long</a><br><i>President</i></h3>
								<p>Brandon, from Stone Mountain, GA,  currently works as a Software Engineer Co-op at
									Oracle in Morrisville, NC. Meanwhile, he also continues to be a full-time distance
									learning student and is a freelance web developer.</p>
							</section>
							<section>
								<span class="image minifeat2"><img src="images/Zach.jpg" alt="" /></span>
								<h3><a href="mailto:zscafare@aggies.ncat.edu">Zachary Cafarelli</a></br><i>Vice President</i></h3>
								<p>Zach is a Sophomore in Computer Science from Fayetteville, NC.  Outside of class, he is
									an online Computer Science Tutor for Varsity Tutors and he also builds websites in his free time. </p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="image minifeat2"><img src="images/Jason.JPG" alt="" /></span>
								<h3><a href="mailto:jamichae@aggies.ncat.edu">Jason Michael</a><br><i>Secretary</i></h3>
								<p>Jason is a Sophomore Computer Science student from Winston-Salem, NC. He enjoys working
									on a variety of things, from games, to apps, to websites. He hopes to pursue a career
									in software development upon graduating.</p>
							</section>
							<section>
								<span class="image minifeat2"><img src="images/DomFiller.jpeg" alt="" /></span>
								<h3><a href="mailto:debuckne@aggies.ncat.edu">Dominique Buckner</a><br><i>Treasurer</i></h3>
								<p>Dominique is a current Sophomore in Computer Science from Fayetteville, NC. This semester
								she will be working as a research student for the Robotics Lab <a href="http://techlav.ncat.edu">TECHLAV</a>
								here on campus and will also be working as Tech Assistant for McNair Hall.</p>
							</section>
						</div>
						<div class="features-row2">
							<section class="center">
								<span class="image minifeat2"><img src="images/ID.jpeg" alt="" /></span>
								<h3><a href="mailto:iainyang@aggies.ncat.edu">Idorenyin Inyang</a><br><i>Webmaster</i></h3>
								<p>ID is a Computer Science Sophomore from Dallastown, PA. During his breaks away from the
								books, he enjoys going back to his hometown to volunteer as the alum mentor for his old Robotics
									team. He has accepted an intership position with Cisco Systems for the Summer of 2016.</p>
							</section>
						</div>
					</section>


				<!--
					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Sed lorem adipiscing</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Accumsan integer</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Sed lorem adipiscing</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Accumsan integer</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Accumsan integer</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

					-->
					<!-- Calendar -->
						<section id="calendar" class="box special">
							<header class="major">
								<h2 >Upcoming Events</h2>
								<p>Be sure to add all events to your personal calendar so that you stay up to date with
								the chapter!</p>
							</header>

							<div class="frame">
								<iframe src="https://calendar.google.com/calendar/embed?src=acmncat%40gmail.com&amp;
							title=ACM%20-%20NC%20A%20%26%20T%20Calendar&amp;bgcolor=%233C96C5&amp;&ctz=America/New_York"
										style="border: 0" width="600" height="600" frameborder="0" scrolling="no"></iframe>
							</div>

						</section>

					<!-- Contact -->
						<section id="contact" class="box special">
							<p class="urgent2"><?php echo $popup; ?></p>
							<header class="major">
								<h2>Contact Us</h2>
								<p>Interested in joining our chapter or getting more information?
									Shoot us an email now and we will gladly get you squared away!</p>
							</header>

							<div class="frame2 center">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.8519929275576!2d-79.77836495006436!3d36.
								07271398000721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885318dafd76d187%3A0x6f496adeb7bbf526!2sMcNai
								r+Hall%2C+Greensboro%2C+NC+27401!5e0!3m2!1sen!2sus!4v1452031536687"  width="600" height="450" frameborder=""
										style="border:0" allowfullscreen></iframe>
							</div>
							<br/><br/>

							<form method="post" action="">
								<div class="row uniform 50%">
									<div class="6u 12u(mobilep)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u 12u(mobilep)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u 12u(mobilep)">
										<input type="text" name="number" id="number" value="" placeholder="Number" />
									</div>
								</div>
								<div class="row uniform 50%">
									<div class="12u">
										<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
									</div>
								</div>
								<div class="row uniform">
									<div class="12u">
										<ul class="actions align-center">
											<li><input type="submit" id="submit" name="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
				</section>

			<!-- CTA -->
				<section id="cta">
					<h3>Advancing Computing as a Science & Profession</h3>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; 2016 ACM NC A & T Chapter</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>