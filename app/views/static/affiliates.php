<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About us</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<?php
	session_start();
	if (isset($_SESSION['type'])) {
		if ($_SESSION['type'] == 'student') {
			include APPROOT . '/views/includes/student-navbar.php';
		} else if ($_SESSION['type'] == 'tutor') {
			include APPROOT . '/views/includes/tutor-navbar.php';
		} else if ($_SESSION['type'] == 'affiliate') {
			include APPROOT . '/views/includes/affiliate-navbar.php';
		} else {
			include APPROOT . '/views/includes/navbar.php';
		}
	} else {
		include APPROOT . '/views/includes/navbar.php';
	}
	?>
	<!-- Hero Section  -->

	<div class="detail-hero-section container fluid bg-cyan pl-0 pr-0" style="
				background-image: url(<?php echo URLROOT . '/public/updated/img/static/affiliate-program.webp' ?>);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>Affiliate Program</h1>
						<p class="text-gray">Become a Affiliate Markter at FlexGuru</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Hero Section -->
	<div class="container mt-xs-0 mt-lg-3 mb-5">
		<!-- Image Detail Box  -->
		<div class="row image-detail-box mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">

				<h1>Why FlexGuru for an Affiliate</h1>
				<p class="text-gray">
					Our platform provides opportunities for affiliate marketers to earn an extra passive
					income by promoting the site on their blog sites or social media platforms.

				</p>
			</div>
		</div>
		<!-- End of Image Detail Box -->
		<!-- Image Detail Box  -->
		<div class="row image-detail-box flex-row-reverse mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">

				<h1>How to get in</h1>
				<p class="text-gray">
					Registering as an affiliate marketer in flexguru is a very easy process.
					Just fill the registration form and verify the mail to get access to the website.

				</p>
			</div>
		</div>
		<!-- End of Image Detail Box -->
		<!-- Image Detail Box  -->
		<div class="row image-detail-box mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">

				<h1>How the affiliate process works</h1>
				<p class="text-gray">
					You can get an automatically generated unique link for you to share.
					Your traffic is calculated using that link. And you will get a 5% commission for your service.

				</p>
			</div>
		</div>
		<!-- End of Image Detail Box -->
	</div>
	<!-- End of Detail Box -->
	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>