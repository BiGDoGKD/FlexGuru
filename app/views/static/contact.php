<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact us</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<nav class="visitor-navbar container">
		<div class="row pt-2 pb-2">
			<div class="col-2-md col-xs-12">
				<h2>FlexGuru</h2>
			</div>
			<div class="visitor-navbar__menu col-3-md display-md-f display-xs-n">
				<ul class="display-f align-items-center">
					<li>Services</li>
					<li>Help</li>
					<li>About</li>
				</ul>
			</div>
			<div class="col-4-md"></div>
			<div class="visitor-navbar__authentication col-3-md display-md-f display-xs-n">
				<button class="login br-xs ml-1 pl-1 pr-1">Login</button>
				<button class="signup br-xs ml-1 pl-1 pr-1">Sign Up</button>
			</div>
		</div>
	</nav>
	<!-- Hero Section  -->

	<div class="detail-hero-section container fluid bg-cyan pl-0 pr-0" style="
				background-image: url(https://cdn.pixabay.com/photo/2020/10/23/14/55/woman-5678999_960_720.jpg);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>Get in touch</h1>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit.
							Eveniet, distinctio.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Hero Section -->
	<!-- Contact Form -->
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-12-xs col-6-lg shadow-lg-sm shadow-xs-none p-xs-0 p-lg-3">
				<h1 class="font-xxl">Contact Us</h1>
				<form class="form-control" action="#">
					<div class="form-group">
						<label for="first-name">First Name</label>
						<input type="text" class="form-control" id="first-name" />
					</div>

					<div class="form-group">
						<label for="last-name">Last Name</label>
						<input type="text" class="form-control" id="last-name" />
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" />
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea style="resize:none" name="message" id="message" cols="30" rows="5"></textarea>
					</div>
					<div class="form-group">
						<label for="additional-details">Additional Details</label>
						<textarea name="additional-details" id="additional-details" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label for="city">City</label>
						<select id="city">
							<!-- districts in sri lanka  -->
							<option value="colombo">Colombo</option>
							<option value="kandy">Kandy</option>
							<option value="galle">Galle</option>
							<option value="matara">Matara</option>
							<option value="hambantota">Hambantota</option>
							<option value="jaffna">Jaffna</option>
							<option value="kalutara">Kalutara</option>
							<option value="nuwara eliya">Nuwara Eliya</option>
							<option value="kurunegala">Kurunegala</option>
							<option value="anuradhapura">Anuradhapura</option>
							<option value="polonnaruwa">Polonnaruwa</option>
							<option value="badulla">Badulla</option>
							<option value="gampaha">Gampaha</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control" id="submit">
							Submit
						</button>
					</div>
				</form>
			</div>
			<div class="col-12-xs col-6-lg pl-lg-4 text-xs-center mt-xs-3 mt-lg-4 text-lg-start">
				<h1>How Can We Help?</h1>
				<p class="mb-2 mt-2 text-gray">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
					distinctio.</p>
				<ul class="text-gray mb-3">
					<li class="mt-1"> <i class="far fa-map text-primary mr-1"></i> Colombo, Sri Lanka</li>
					<li class="mt-1"> <i class="far fa-phone text-primary mr-1"></i>(+94)-77-881-3384</li>
					<li class="mt-1"> <i class="far fa-envelope text-primary mr-1"></i>info@flexguru.lk</li>
				</ul>
				<style>
					.map-responsive {
						overflow: hidden;
						padding-bottom: 56.25%;
						position: relative;
						height: 0;
					}

					.map-responsive iframe {
						left: 0;
						top: 0;
						height: 100%;
						width: 100%;
						position: absolute;
					}
				</style>
				</p>

				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d700.1954829642344!2d79.86096490674404!3d6.902107934102717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity%20of%20Colombo%20School%20of%20Computing!5e0!3m2!1sen!2slk!4v1644943494131!5m2!1sen!2slk" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>

	<footer class="flexguru-footer container fluid bg-lightred pt-5 pb-5">
		<div class="container">
			<div class="row text-xs-center text-lg-start">
				<div class="col-12-xs col-6-md col-4-lg mt-xs-2 mt-lg-0 text-lg-start text-xs-center">
					<h1 class="text-primary">FlexGuru</h1>
					<p class="text-gray mt-1">
						info@flexguru.lk<br />
						Colombo, Sri Lanka
					</p>
					<p class="text-bold font-md mt-1" style="font-weight: 600">
						<a href="#">Privacy Policy</a>
					</p>
				</div>
				<div class="col-12-xs col-6-md col-2-lg mt-xs-2 mt-lg-0">
					<h3>Resources</h3>
					<ul class="text-gray">
						<li class="mt-1"><a href="#">Affiliate Program</a></li>
						<li class="mt-1"><a href="#">Service Request</a></li>
						<li class="mt-1"><a href="#">NewsFeed</a></li>
						<li class="mt-1"><a href="#">FaQ</a></li>
					</ul>
				</div>
				<div class="col-12-xs col-6-md col-2-lg mt-xs-2 mt-lg-0">
					<h3>Support</h3>
					<ul class="text-gray">
						<li class="mt-1"><a href="#">How it works</a></li>
						<li class="mt-1"><a href="#">Become a Tutor</a></li>
						<li class="mt-1"><a href="#">Become a Student</a></li>
						<li class="mt-1"><a href="#">Get Help</a></li>
					</ul>
				</div>
				<div class="col-12-xs col-6-md col-2-lg mt-xs-2 mt-lg-0">
					<h3>Company</h3>
					<ul class="text-gray">
						<li class="mt-1"><a href="#">Our Team</a></li>
						<li class="mt-1"><a href="#">Contact Us</a></li>
						<li class="mt-1"><a href="#">About Us</a></li>
						<li class="mt-1"><a href="#">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="col-12-xs col-6-md col-2-lg mt-xs-2 mt-lg-0">
					<h3>Follow Us</h3>
					<ul class="text-gray">
						<li class="mt-1"><a href="#">Facebook</a></li>
						<li class="mt-1"><a href="#">Twitter</a></li>
						<li class="mt-1"><a href="#">Instagram</a></li>
						<li class="mt-1"><a href="#">Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>