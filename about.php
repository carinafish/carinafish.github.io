<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>About - Carina R. Fish | Geochemist</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.rawgit.com/jpswalsh/academicons/master/css/academicons.min.css">
		<link rel="icon" href="favicon.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<?php
		if($_POST["submit"]) {
		    $recipient="crfish@ucdavis.edu";
		    $subject="Website inquiry";
		    $sender=$_POST["sender"];
		    $senderEmail=$_POST["email"];
		    $message=$_POST["message"];

		    $mailBody="Name: $sender\nEmail: $email\n\n$message";

		    mail($recipient, $subject, $mailBody, "From: $sender <$email>");

		    $thankYou="<p>Thank you! Your message has been sent.</p>";
		}
		?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Carina R. Fish</strong></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="research.html">Research</a></li>
							<li><a href="news.html">In the News</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="about.php#contact" class="button primary fit">Contact Me</a></li>
							<li><a href="https://docs.google.com/viewer?url=https://github.com/carinafish/carinafish.github.io/blob/master/CRFishCV2018.pdf?raw=true" target="_blank" rel="noopener noreferrer" class="button fit">Download CV</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="banner" class="secondary">
								<div class="inner pb-0 mt-4">
									<header class="major mb-0" style="width: 7.8em;">
										<h1 style="font-size:2.5em;">About</h1>
									</header>
								<div class="image main fixed-height" style="display:block;" id="about-banner-image" alt="" /></div>
								</div>

							</section>

							<section class="b-t-0">
								<div class="inner pt-0">
									<div class="row align-items-center">
										<p class="col-9 col-12-small">As a geology Ph.D. candidate in the Department of Earth and Planetary Sciences at the University of California, Davis, my research seeks to understand the marine biogeochemical history of Cordell Bank National Marine Sanctuary. While I am primarily based out of Bodega Marine Laboratory, I get to visit the sparkling seas multiple times per year and even peek underneath the surface both in person and using ROVs. My career has afforded me varied pursuits and hats to wear, most proudly as a marine biogeochemist, SciComm enthusiast, environmental justice advocate, and PADI Divemaster.</p>
										<div class="col-3 col-6-small off-6-small mb-5">
											<a href="https://docs.google.com/viewer?url=https://github.com/carinafish/carinafish.github.io/blob/master/CRFishCV2018.pdf?raw=true" target="_blank" rel="noopener noreferrer" class="button fit">Download CV</a>
										</div>
									</div>

									<div class="row align-items-center">
										<div class="col-3 col-6-small off-6-small mb-5">
											<a href="research.html" class="button fit small">Research Interests</a>
										</div>
										<p class="col-9 col-12-small imp-small imp-xsmall">I credit my semester at The Island School for my love of the ocean, and my first research cruise from Bermuda to the Azores with the Langmuir group for my affinity for sea-going fieldwork. I have also dived for research both in Puerto Rico to collect and culture foraminifera, and in Indonesia to conduct a site comparison belt transect study. Besides research diving, I have worked as a divemaster in both Thailand and Malaysia.</p>
									</div>

									<div class="row align-items-center">
										<p class="col-9 col-12-small">A product of public schools, I seek to give back to the youth by engaging them with STEM fundamentals and exposing them to the breadth of marine sciences. I am passionate about environmental justice and delight in the creativity of science communication. I admire the environmental justice work of Dr. Robert Bullard, and aspire to have a career like that of Dr. Jane Lubchenco.</p>
										<div class="col-3 col-6-small off-6-small mb-5">
											<a href="news.html#scicomm" class="button fit small">SciComm</a>
										</div>
									</div>

									<div class="row align-items-center">
										<div class="col-3 col-6-small off-6-small mb-5">
											<a href="news.html#affliations" class="button fit small">Affiliations</a>
										</div>
										<p class="col-9 col-12-small imp-small imp-xsmall">I received my A.B. from Harvard College in 2013 where I was a joint concentrator in both Earth and Planetary Sciences & Environmental Sciences and Engineering. I completed an undergraduate thesis with Dr. Andrew Knoll, and worked as a research assistant in the Shaw structural geology group, the Langmuir solid earth geochemistry lab, and the Whitesides research group. I later worked at Columbia’s Lamont-Doherty Earth Observatory in the Hönisch paleoceanography group. In 2018, I was awarded both the Ford Foundation Predoctoral Fellowship as well as NOAA's Dr. Nancy Foster Scholarship. When not at sea or in the lab, I can be found dancing lindy hop in Golden Gate Park or hiking with my husky Cleo.</p>
									</div>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="about.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="sender" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa fa-envelope"></span>
										<a href="mailto:crfish@ucdavis.edu">crfish@ucdavis.edu</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt brands fa-linkedin"></span>
										<a target="_blank" rel="noopener noreferrer"
											href="https://linkedin.com/in/carina-fish">LinkedIn</a>
									</div>
									<div class="contact-method">
										<span class="icon alt brands fa-twitter"></span>
										<a target="_blank" rel="noopener noreferrer"
											href="https://twitter.com/Carina_Fish">Twitter</a>
									</div>
									<div class="contact-method">
										<span class="icon alt ai ai-researchgate"></span>
										<a target="_blank" rel="noopener noreferrer"
											href="https://researchgate.net/profile/Carina_Fish">ResearchGate</a>
									</div>
									<div class="contact-method">
										<span class="icon ai ai-orcid"></span>
										<a target="_blank" rel="noopener noreferrer"
											href="http://orcid.org/0000-0001-9400-3517">ORCID</a>
									</div>
									<div class="contact-method">
										<span class="icon alt ai ai-academia"></span>
										<a target="_blank" rel="noopener noreferrer"
											href="http://ucdavis.academia.edu/CarinaFish">Academia</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa fa-home"></span>
										<span>Bodega Marine Laboratory<br />
													2099 Westshore Road<br />
													Bodega Bay, CA 94923</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; Carina Fish</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
