<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>BioLink - <?= $page ?></title>

	<meta name="description" content="Bio de ExostFlash pour en savoir plus sur lui !">
	<meta name="keywords" content="ExostFlash biolink code escrime discord insta bio">
	<meta name="author" content="ExostFlash">

	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="author" content="ExostFlash" />
	<meta name="description" content="BioLink" />

	<!-- Twitter data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ExostFlash">
	<meta name="twitter:title" content="BioLink">
	<meta name="twitter:description" content="BioLink">
	<meta name="twitter:image" content="assets/images/social.html">

	<!-- Open Graph data -->
	<meta property="og:title" content="BioLink" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://exostflash.ovh/BIOLINK/ExostFlash" />
	<meta property="og:image" content="assets/images/favicons/apple-touch-icon-144x144.png" />
	<meta property="og:description" content="BioLink" />
	<meta property="og:site_name" content="BioLink" />

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="144x144" href="/BIOLINK/IMG/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/BIOLINK/IMG/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/BIOLINK/IMG/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="57x57" href="/BIOLINK/IMG/favicons/apple-touch-icon-57x57.png">
	<link rel="shortcut icon" href="/BIOLINK/IMG/favicons/favicon.png" type="image/png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css?v=12" />
	<link rel="stylesheet" type="text/css" href="assets/styles/style-dark.css?v=11" />

	<script src="https://kit.fontawesome.com/dc1f03fbd3.js" crossorigin="anonymous"></script>

</head>

<body class="bg-triangles">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader__wrap">
			<div class="circle-pulse">
				<div class="circle-pulse__1"></div>
				<div class="circle-pulse__2"></div>
			</div>
			<div class="preloader__progress"><span></span></div>
		</div>
	</div>

	<center>
		<select class="select" id="selectbox" data-selected="" onchange="changerLangue()">
			<option value="" disabled="disabled">Sélectionnez une langue</option>
			<option id="FR" selected value="FR">Français</option>
			<option id="EN" value="EN">English</option>
		</select>
	</center>
	<script>
		function changerLangue() {
			var selectbox = document.getElementById("selectbox");
			var selectedValue = selectbox.options[selectbox.selectedIndex].value;

			if (selectedValue === "FR") {
				window.location.href = "?lang=FR&page=<?= $page ?>";
			} else if (selectedValue === "EN") {
				window.location.href = "?lang=EN&page=<?= $page ?>";
			}
		}
	</script>

	<main class="main">
		<div class="container gutter-top">
			<div class="row sticky-parent">
				<!-- Sidebar -->
				<aside class="col-12 col-md-12 col-xl-3">
					<div class="sidebar box shadow pb-0 sticky-column">
						<svg class="avatar avatar--180" viewBox="0 0 188 188">
							<g class="avatar__box">
								<image xlink:href="assets/img/avatar/exostflash.png" height="100%" width="100%" />
							</g>
						</svg>
						<div class="text-center">
							<h3 class="title title--h3 sidebar__user-name"><span class="weight--500"></span>ExostFlash</h3>
							<div class="badge badge--dark">Il/Lui</div>

							<!-- Social -->
							<div class="scroll_social_overflow">
								<div class="social scroll_social">
									<a class="social__link" title="Linkedin" target="_blank" href="https://www.linkedin.com/in/amaury-maizy">
										<i class="font-icon icon-linkedin2"></i>
									</a>
									<a class="social__link" title="GitHub" target="_blank" href="https://github.com/ExostFlash">
										<i class="font-icon icon-github"></i></i>
									</a>
									<a class="social__link" title="Instagram" target="_blank" href="https://www.instagram.com/exostflash/">
										<i class="font-icon icon-instagram"></i>
									</a>
									<a class="social__link" title="Discord" target="_blank" href="https://discord.com/invite/zCDpgrW28F">
										<i class="font-icon"><i class="fa-brands fa-discord"></i></i>
									</a>
									<a class="social__link" title="PayPal" target="_blank" href="https://www.paypal.com/paypalme/exostflash">
										<i class="font-icon"><i class="fa-brands fa-paypal"></i></i>
									</a>
									<a class="social__link" title="FaceBook" target="_blank" href="https://www.facebook.com/ExostFlash2003">
										<i class="font-icon icon-facebook"></i>
									</a>
									<a class="social__link" title="SnapChat" target="_blank" href="https://www.snapchat.com/add/exostflash2003">
										<i class="font-icon"><i class="fa-brands fa-snapchat"></i></i>
									</a>
									<a class="social__link" title="TikTok" target="_blank" href="https://www.tiktok.com/@_exostflash_">
										<i class="font-icon"><i class="fa-brands fa-tiktok"></i></i>
									</a>
									<a class="social__link" title="X" href="https://twitter.com/ExostFlash">
										<i class="font-icon"><i class="fa-brands fa-x-twitter"></i></i>
									</a>
									<a class="social__link" title="Amazon" target="_blank" href="https://www.amazon.fr/hz/wishlist/ls/2PWFEW8ACVWPU?ref_=wl_share">
										<i class="font-icon"><i class="fa-brands fa-amazon"></i></i>
									</a>
									<a class="social__link" title="OnlyFan" target="_blank" href="https://onlyfans.com/exostflash2">
										<i class="font-icon"><i class="fa-brands fa-searchengin fa-flip"></i></i>
									</a>
								</div>
							</div>
						</div>

						<div class="sidebar__info box-inner">
							<ul class="contacts-block">
								<li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="Anniversaire">
									<i class="font-icon icon-calendar"></i>04/12/2003&nbsp; <span id="age">(age)</span>
								</li>
								<li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="Addresse">
									<i class="font-icon icon-location"></i>Toulouse, France
								</li>
								<li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="E-mail">
									<a target="_blank" href="mailto:exostflash@gmail.com"><i class="font-icon icon-envelope"></i>exostflash@gmail.com</a>
								</li>
								<li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="Téléphone" hidden>
									<i class="font-icon icon-phone"></i>+33 6.00.00.00.00
								</li>
							</ul>

							<a hidden class="btn" href="#"><i class="font-icon icon-download"></i> Download CV</a>
						</div>
					</div>
				</aside>

				<!-- Content -->
				<div class="col-12 col-md-12 col-xl-9">
					<div class="box shadow pb-0">
						<!-- Menu -->
						<div class="circle-menu">
							<div class="hamburger">
								<div class="line"></div>
								<div class="line"></div>
								<div class="line"></div>
							</div>
						</div>
						<div class="inner-menu js-menu">
							<ul class="nav">
								<li class="nav__item"><a id="about" href="?lang=<?= $lang ?>&page=about">Présentation</a></li>
								<li class="nav__item"><a id="resume" href="?lang=<?= $lang ?>&page=resume">Carrière</a></li>
								<li class="nav__item"><a id="blog" href="?lang=<?= $lang ?>&page=blog">Blog</a></li>
								<li class="nav__item"><a id="contact" href="?lang=<?= $lang ?>&page=contact">Contact</a></li>
							</ul>
						</div>