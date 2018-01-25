<?php 
$menu = [
	[
		'url' => '/',
		'title' => 'Home'
	],
	[
		'url' => '/',
		'title' => 'About',
		'submenu' => [
				[
					'url' => '/',
					'title' => 'About'
				],
				[
					'url' => '/',
					'title' => 'About'
				],
				[
					'url' => '/',
					'title' => 'About',
					'submenu' => [
						[
							'url' => '/',
							'title' => 'About'
						],
						[
							'url' => '/',
							'title' => 'About'
						]
					]
				]
		]
	],
	[
		'url' => '/',
		'title' => 'Project'
	],
	[
		'url' => '/',
		'title' => 'Portfolio'
	]
];

$featuresTitle = 'Dolor consequat feugiat amet veroeros';
$featuresSubTitle = 'Feugiat dolor nullam orci pretium phasellus justo';

$featureList = [
	[
		'icon' => 'fa-comment',
		'title' => 'Mattis velit diam vulputate',
		'text' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.' 
	],
	[
		'icon' => 'fa-refresh',
		'title' => 'Lorem ipsum dolor sit veroeros',
		'text' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.' 
	],
	[
		'icon' => 'fa-picture-o',
		'title' => 'Pretium phasellus justo lorem',
		'text' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.' 
	],
	[
		'icon' => 'fa-cog',
		'title' => 'Tempus sed pretium orci',
		'text' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.' 
	],
	[
		'icon' => 'fa-wrench',
		'title' => 'Aliquam consequat et feugiat',
		'text' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.' 
	],
	[
		'icon' => 'fa-check',
		'title' => 'Dolore laoreet aliquam mattis',
		'text' => 'Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.' 
	]
];

$featureListLenght = count($featureList);

$contact = [
	[
		'icon' => 'fa-home',
		'title' => 'Mailing Address',
		'text' => 'Untitled Corporation<br/>1234 Somewhere Rd #987<br/>Nashville, TN 00000-0000'
	],
	[	
		'icon' => 'fa-comment',
		'title' => 'Social',
		'link' => [
			'@untitled-corp',
			'linkedin.com/untitled',
			'facebook.com/untitled',
		]
	],
	[
		'icon' => 'fa-envelope',
		'title' => 'Email',
		'link' => [
			'info@untitled.tld'
		]
	],
	[
		'icon' => 'fa-phone',
		'title' => 'Phone',
		'text' => '(000) 555-0000'
	]
];

$contactLenght = count($contact);

?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Escape Velocity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Escape Velocity</a></h1>
								<p>A free responsive site template by HTML5 UP</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>

									<?php foreach ($menu as $item): ?>
										<li>
											<a href="<?=$item['url']?>"> <?=$item['title']?> </a>
											<?php if(isset($item['submenu']) and !empty($item['submenu'])):?>
												<ul>
													<?php foreach ($item['submenu'] as $subitem): ?>
														<li>
															<a href="<?=$subitem['url']?>"> <?=$subitem['title']?> </a>
															<?php if(isset($subitem['submenu']) and !empty($subitem['submenu'])):?>
																<ul>
																	<?php foreach ($subitem['submenu'] as $subitem2): ?>
																		<li>
																			<a href="<?=$subitem2['url']?>"> <?=$subitem2['title']?> </a>
																		</li>
																	<?php endforeach ?>
																</ul>
															<?php endif ?>
														</li>
													<?php endforeach ?>
												</ul>
											<?php endif ?>	
										</li>
									<?php endforeach ?>

								</ul>
							</nav>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">The Introduction</div>
					<section id="intro" class="container">
						<p class="style1">So in case you were wondering what this is all about ...</p>
						<p class="style2">
							Escape Velocity is a free responsive<br class="mobile-hide" />
							site template by <a href="http://html5up.net" class="nobr">HTML5 UP</a>
						</p>
						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="#" class="button style3 big">Proceed</a></li>
						</ul>
					</section>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">The Details</div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2><?= $featuresTitle ?></h2>
									<p><?= $featuresSubTitle ?></p>
								</header>
								<div class="feature-list">

									<?php for($i = 0; $i < $featureListLenght; $i++): ?>
												
										<?php if($i % 2 == 0): ?>
											<div class="row">
										<?php endif ?>

										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon <?= $featureList[$i]['icon'] ?>"><?= $featureList[$i]['title'] ?></h3>
												<p><?= $featureList[$i]['text'] ?></p>
											</section>
										</div>

										<?php if(!($i % 2 == 0) OR ($i+1 == $featureListLenght)): ?>
											</div>
										<?php endif ?>
									<?php endfor ?>

								<ul class="actions actions-centered">
									<li><a href="#" class="button style1 big">Get Started</a></li>
									<li><a href="#" class="button style2 big">More Info</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">The Endorsements</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Aliquam diam consequat</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="highlight">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Mattis tempus lorem</a></h3>
									<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
									<ul class="actions">
										<li><a href="#" class="button style1">Learn More</a></li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper" class="wrapper">
					<div class="title">The Rest Of It</div>
					<div id="footer" class="container">
						<header class="style1">
							<h2>Ipsum sapien elementum portitor?</h2>
							<p>
								Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
								Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
							</p>
						</header>
						<hr />
						<div class="row 150%">
							<div class="6u 12u(mobile)">

								<?php include 'contact_form.php' ?>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">
										<?php for($i = 0; $i < $contactLenght; $i++): ?>
													
											<?php if($i % 2 == 0): ?>
												<div class="row">
											<?php endif ?>

											<div class="6u 12u(mobile)">
													<section>
														<h3 class="icon <?= $contact[$i]['icon'] ?>"><?= $contact[$i]['title'] ?></h3>
														<p>
															<?php if (isset($contact[$i]['link']) and !empty($contact[$i]['link'])): ?>
																<?php foreach ($contact[$i]['link'] as $link): ?>
																	<a href="#"><?=$link?></a><br />
																<?php endforeach ?>
															<?php endif ?>

															<?php 
																if(isset($contact[$i]['text']) and !empty($contact[$i]['text'])){
																	echo $contact[$i]['text'];
																}
															?>
														</p>
													</section>
												</div>

											<?php if(!($i % 2 == 0) OR $i+1 == $contactLenght): ?>
												</div>
											<?php endif ?>
										<?php endfor ?>
									</section>
							</div>
						</div>
						<hr />
					</div>
					<div id="copyright">
						<ul>
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>