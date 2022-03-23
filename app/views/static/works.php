<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>How Does it Works</title>
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
				background-image: url(<?php echo URLROOT . '/public/updated/img/static/how-it-works.webp' ?>);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>How it Works</h1>
						<p class="text-gray">
							Dont think too much...we designed flexguru in a less complex manner
							which is easily understandable by each and everyone of you.
						</p>
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
				<h1>Students</h1>
				<p class="text-gray">
					Students are our primary resource in this process they are people
					who will get direct benifit from this unique platform
					after registering as a student students will be able to see
					the market place and able to choose a perfect tutor for them
					which aligns with their subject need and they can directly
					learn or they can make a special service request to customise
					the lesson he is going to learn.Inorder to process students
					have to make a payments but in our platform we built in a
					payment gateway to ease that process as well.
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
				<h1>Tutors</h1>
				<p class="text-gray">
					Without our Tutors this flexguru is impossible so we give
					high priority to our tutors to get maximum use from this
					plaform while providing service to the student community.
					after registering to our platform tutors can post service
					gigs from their dashboard so this gigs will be posted from
					their specialized ares .students will see the gig with relevent
					details and send a request it might be a direct request or special
					service request so according to the request tutor can make his next moves.
					All the payments will be deposited to the tutors account within a short
					period of time after the completion of the cource.
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
				<h1>Affiliate Marketer</h1>
				<p class="text-gray">
					Marketing is core functionality of any platform
					so to take FlexGuru to next level we are also
					using marketing processes but not traditional
					adverticements.We are using students , Tutors
					and influencers as our marketers and they will
					share the unique links to their contacts .
					If they managed to get traffic to the platform they will recieve
					a 5-20% commision on the payments.How cool is that.
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