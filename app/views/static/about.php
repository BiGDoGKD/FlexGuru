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
				background-image: url(<?php echo URLROOT . '/public/updated/img/static/about-us.webp' ?>);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>About us</h1>
						<p>

							We are team of four undergraduate students of University of colombo School of Computing who are currently
							reading BSc in Information Systems degree program.We are strated creating this platform after
							considering the struggles faced by studnets in the COVID 19 pandamic.

						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Hero Section -->
	<div class="container mt-xs-0 mt-lg-3 mb-5">
		<!-- Detail Box  -->
		<div class="row flex-col detail-box">
			<h1>Our Vision</h1>
			<p class="text-gray">

				Flexible and Easily accessible education for everyone

			</p>
		</div>
		<!-- End of Detail Box -->
		<!-- Detail Box  -->
		<div class="row detail-box">
			<h1>Who we are</h1>
			<p class="text-gray">
				We are a complete resource for current or prospective students,
				Professionals, and Tutors. We give flexibility to the students and
				professionals to request or choose and learn the exact content they
				wish to learn. Without wasting valuable time by following a complete
				course or reading an entire book, we offer ranking for the students
				and tutors to improve their rating to get the best education while
				enjoying benefits from Flexguru. Customized learning requests are one
				of the uniqueness of our platform. Every student will be able to
				request the tutor while mentioning his needs and preferences in order
				to succeed easily.
			</p>
		</div>
		<!-- End of Detail Box -->
		<!-- Detail Box  -->
		<div class="row detail-box">
			<h1>How it all started</h1>
			<p class="text-gray">
				We found that there is an issue in the common E-education system after
				the pandemic strikes and students moving towards online learning.
				"Without a problem, there is no innovation" in that perspective the
				problem we figured out is, students and professionals get doubts in
				specific parts of the subject in the learning process but there are no
				perfect solutions to overcome it. According to our country, every
				student does not get enough resources while learning and clearing
				doubts. so we group of undergraduate students came up with this idea
				to help students and professionals to give an easily accessible and
				flexible education as our vision suggests with a personalized learning
				dashboard.
			</p>
		</div>
	</div>
	<!-- End of Detail Box -->
	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>