<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Become a Student</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<?php
	include APPROOT . '/views/includes/navbar.php';
	?>
	<!-- Hero Section  -->

	<div class="detail-hero-section container fluid bg-cyan pl-0 pr-0" style="
				background-image: url(https://cdn.pixabay.com/photo/2018/06/27/07/45/student-3500990_960_720.jpg);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>Become a Student</h1>
						<p class="text-gray">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit.
							Eveniet, distinctio.
						</p>
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
				<h1 class="mb-1">Want to Learn With ease?</h1>
				<h2 class="text-gray mb-2">Welcome to FlexGuru</h2>
				<p class="text-gray">
					We designed FlexGuru to open doors of oppurtunity to all Students
					,Tutors and Professionals in our country so you can provide your
					service with ease while earning money.
				</p>
				<p class="text-gray">
					Flexguru provides variety of areas to learn so students have the
					flexibility to learn most of the important things through our
					platform.
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
					Becoming a Student in Flexguru is a very simple task. Lets see.
				</h2>
				<ul class="text-gray pl-1">
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Just visit Flexguru
						website and Choose to register as a Student.
					</li>

					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Then you need to
						give some regular details in the form to sign up as a student.
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
						<i class="far fa-check text-primary mr-1"></i>Students do not need
						to provide any documents after filling the registration form.
					</li>
					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>After registering as
						a Student you have to verify your mail using the unique OTP sent
						to your mail.
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
						areas to learn
						<p class="mt-1">
							Our platform is not limited to specific areas of subjects like
							other E-learning platforms.
						</p>
					</li>

					<li class="mt-2">
						<i class="far fa-check text-primary mr-1"></i>Ranking process
						gives extra advantages
						<p class="mt-1">
							Ranking process gives extra advantage to loyal Students of our
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
							Students can make their payments any time using our payment
							gateway with many transwer options.
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