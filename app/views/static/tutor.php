<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Become a Tutor</title>
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
				background-image: url(<?php echo URLROOT . '/public/updated/img/static/become-a-tutor.webp' ?>);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>Become a Tutor</h1>
						<p class="text-gray">
							Happy and Satisfactionary earning while providing
							service to students whole over the island
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Hero Section -->

	<div class="container mt-xs-0 mt-lg-3 mb-5">
		<!-- Image Detail Box  -->
		<div class="row image-detail-box flex-row-reverse mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">
				<h1 class="mb-1">Do you want to be a freelance tutor?</h1>
				<h2 class="text-gray mb-2">Welcome to FlexGuru</h2>
				<p class="text-gray">
					We designed FlexGuru to open doors of oppurtunity to all Students
					,Tutors and Professionals in our country so you can provide your
					service with ease while earning money.
				</p>
				<p class="text-gray">
					Flexguru provides variety of areas to teach so tutors have the
					flexibility to teach their best skill
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
				<h2 class="mb-3">
					Becoming a tutor in Flexguru is a very simple task. Lets see.
				</h2>
				<ul class="text-gray pl-1">
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Just visit Flexguru
						website and Choose to register as a tutor.
					</li>

					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Then you need to
						give some regular details in the form to sign up as a tutor.
					</li>
				</ul>
			</div>
		</div>
		<!-- End of Image Detail Box -->
		<!-- Image Detail Box  -->
		<div class="row image-detail-box flex-row-reverse mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">
				<ul class="text-gray pl-1">
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Tutor need to submit
						some documents to our system for verification process.
					</li>
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Tutor registration
						has a manual verification process and tutors have to prove the
						validity of their qualifications.
					</li>
				</ul>
			</div>
		</div>
		<!-- End of Image Detail Box -->
		<!-- Image Detail Box  -->
		<div class="row image-detail-box mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">
				<ul class="text-gray pl-1">
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>You will recieve a
						five digit OTP to verify your Email.
					</li>
				</ul>
			</div>
		</div>
		<!-- End of Image Detail Box -->
	</div>
	<div class="container pb-5">
		<div class="row">
			<div class="col-12-xs">
				<h1>Why you have to choose FlexGuru...</h1>
				<ul class="text-gray pl-1">
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Wide variety of
						areas to teach
						<p class="mt-1">
							Flexguru provides variety of areas to teach so tutors have the
							flexibility to teach their best skill
						</p>
					</li>

					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Ranking process to
						give tutors extra advantages
						<p class="mt-1">
							Ranking process gives extra advantage to loyal tutors of our
							platform
						</p>
					</li>
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Flexible and
						customisable shedules
						<p class="mt-1">
							Tutors and students can chat and able to fix a flexible time to
							the sessions
						</p>
					</li>
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Secure payment
						options through a secured gateway.
						<p class="mt-1">
							Get paid on time, every time. Payment is transferred to you upon
							completion.
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>