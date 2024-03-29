<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Our Team</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
	<style>
		.profile-card {
			border: 0;
		}
	</style>
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
	<div class="container flexguru-team mt-5 mb-5">
		<div class="row">
			<div class="col-12-xs text-center">
				<h1 class="font-lg-xxl font-xs-lg mb-1 text-primary">
					Meet the FlexGuru Team
				</h1>
				<p class="text-gray font-lg-lg font-xs-md mb-xs-1 mb-lg-4">
					Undergraduate Students of University of Colombo School of Computing
				</p>
			</div>
		</div>
		<div class="row">
			<!-- Razzeen  -->
			<div class="col-3-lg col-12-xs display-f justify-content-center">
				<div class="profile-card text-center pr-1 pl-1">
					<div class="profile-card-header">
						<div class="profile-card-header-image">
							<img src="<?php echo URLROOT . '/public/updated/img/static/team/razzeen.webp' ?>" alt="Razzeen" class="profile-card-header-image-img" />
						</div>
					</div>
					<div class="profile-card-body">
						<div class="profile-card-body-name">Razeen Nizar</div>
						<div class="profile-card-body-position text-primary">
							Marketing Manager
						</div>
						<div class="profile-card-body-description text-gray mt-1 pr-xs-2 pl-xs-2 pr-lg-1 pl-lg-1">
							Induvidual who is interested in solving business problems and marketing the platform.
						</div>
						<div class="social-media-bar display-f text-gray font-lg justify-content-center">
							<div class="social-media-bar-item">
								<a href="https://www.facebook.com/profile.php?id=100009328684428">
									<i class="fab fa-facebook-f"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="https://www.linkedin.com/in/razeen-nizar-5838721a9">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Kesara  -->
			<div class="col-3-lg col-12-xs display-f justify-content-center">
				<div class="profile-card text-center pr-1 pl-1">
					<div class="profile-card-header">
						<div class="profile-card-header-image">
							<img src="<?php echo URLROOT . '/public/updated/img/static/team/kesara.webp' ?>" alt="Kesara" class="profile-card-header-image-img" />
						</div>
					</div>
					<div class="profile-card-body">
						<div class="profile-card-body-name">Kesara Karannagoda</div>
						<div class="profile-card-body-position text-primary">
							Full Stack Developer
						</div>
						<div class="profile-card-body-description text-gray mt-1 pr-xs-2 pl-xs-2 pr-lg-1 pl-lg-1">
							Induvidual who is intersted in solving complex problems using technology while maintaining the system.
						</div>
						<div class="social-media-bar display-f text-gray font-lg justify-content-center">
							<div class="social-media-bar-item">
								<a href="https://www.facebook.com/kesaralive">
									<i class="fab fa-facebook-f"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="https://www.linkedin.com/in/kesaralive">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Avishka  -->
			<div class="col-3-lg col-12-xs display-f justify-content-center">
				<div class="profile-card text-center pr-1 pl-1">
					<div class="profile-card-header">
						<div class="profile-card-header-image">
							<img src="<?php echo URLROOT . '/public/updated/img/static/team/avishka.webp' ?>" alt="Avishka" class="profile-card-header-image-img" />
						</div>
					</div>
					<div class="profile-card-body">
						<div class="profile-card-body-name">Avishka Hettiarachchi</div>
						<div class="profile-card-body-position text-primary">
							Front End Developer
						</div>
						<div class="profile-card-body-description text-gray mt-1 pr-xs-2 pl-xs-2 pr-lg-1 pl-lg-1">
							Managing director of the project Flexguru while doing front end researches of the platform
						</div>
						<div class="social-media-bar display-f text-gray font-lg justify-content-center">
							<div class="social-media-bar-item">
								<a href="https://www.facebook.com/avish.hettiarachchi.7">
									<i class="fab fa-facebook-f"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="https://www.linkedin.com/in/avishka-hettiarachchi">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Kavindu  -->
			<div class="col-3-lg col-12-xs display-f justify-content-center">
				<div class="profile-card text-center pr-1 pl-1">
					<div class="profile-card-header">
						<div class="profile-card-header-image">
							<img src="<?php echo URLROOT . '/public/updated/img/static/team/kavindu.webp' ?>" alt="Kavindu" class="profile-card-header-image-img" />
						</div>
					</div>
					<div class="profile-card-body">
						<div class="profile-card-body-name">Kavindu Galagedara</div>
						<div class="profile-card-body-position text-primary">
							Content Specialist
						</div>
						<div class="profile-card-body-description text-gray mt-1 pr-xs-2 pl-xs-2 pr-lg-1 pl-lg-1">
							specialized in delivering content according to the targetted customer while maanging the internal processes.
						</div>
						<div class="social-media-bar display-f text-gray font-lg justify-content-center">
							<div class="social-media-bar-item">
								<a href="https://www.facebook.com/kavindhu.galagedara">
									<i class="fab fa-facebook-f"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
							<div class="social-media-bar-item">
								<a href="#">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12-xs text-center">
				<h1 class="font-lg-xxl font-xs-xl mb-lg-2 mt-lg-5 mb-xs-1 mt-xs-3">
					Special Credits
				</h1>
				<h2 class="mb-1 mt-2">Supervisor of the project</h2>
				<p class="text-gray pl-lg-5 pr-lg-5">
					We want to convey our special gratitudes to supervisor of our project flexguru
					Mr.Kenneth thilakarathne sir.Who motivated and guoded us from the initial
					stages to get this far in this project.As a security expert he guided
					us to full fill all the non functional requrements easily whil make
					suring all the sequrity standers were met.
				</p>
				<h2 class="mb-1 mt-2">Co-Supervisor of the project</h2>
				<p class="text-gray pl-lg-5 pr-lg-5">
					Next we want to convey our special gratitudes to Co supervisor and mentor of our project flexguru
					Mrs.Piyumi senvirathne madam.Who motivated and guoded us from the initial
					stages to get this far in this project by completely monitoring us
					in each and every steps of us.She is the person who guided to get
					into this idea when we are trying to get into this e learning idustry
					by providing her teaching experiences as motivations.
				</p>
				<h3 class="mt-3" style="font-style: italic">Thank You!</h3>
			</div>
		</div>
	</div>

	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>