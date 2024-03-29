<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Terms of Service</title>
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
	<div class="container pt-xs-2 pb-xs-5 pt-lg-3 pb-lg-5">
		<div class="row">
			<div class="col-12-xs">
				<h3 class="text-gray mb-1 mt-1">Agreement</h3>
				<h1 class="font-lg-xxl font-xs-xl mb-2">Terms of Service</h1>
				<style>
					.terms-and-conditions li {
						margin-top: 1rem;
					}
				</style>
				<ol class="terms-and-conditions text-gray">
					<li>
						These terms and conditions guide how we provide you with our
						services, including eLearning sessions.
					</li>
					<li>
						Before submitting your registration form to us, please read these
						terms carefully.
					</li>
					<li>
						You are advised to check our Websites regularly to view our most
						recent privacy policy agreement to ensure that you are aware of
						any changes to it because that may occur at any time.
					</li>

					<li>
						We develop, distribute and maintain the Product and will also
						provide login information to you. We will also manage your access
						to the services and provide you with assistance if needed.
					</li>
					<li>
						You do not copy, modify, transmit, distribute or in any way
						exploit the Product or any other copyrighted material provided
						other than for your training purposes. any other purposes are
						strictly prohibited by these conditions.
					</li>
					<li>
						You strictly do not permit anyone to copy, use, modify, transmit,
						distribute, or otherwise exploit the Products or any other
						copyrighted material in any way.
					</li>
					<li>
						We provide the material as-is and without any warranties, express
						or implied, except that which cannot be excluded by law. We also
						do not guarantee that the materials will be free from errors,
						including technical errors.
					</li>
					<li>
						We use third-party payment providers, depending on the way in
						which you make payments – Pay here. Payment for the Products must
						be made at the point of purchase.
					</li>
					<li>
						Please note that we must receive your payment in full before
						providing you with access to all types of services our platform
						provides.
					</li>
					<li>
						Your payment includes the licensing of the Products for a limited
						period of time that is appropriate for the eLearning content.
					</li>
					<li>
						We are unable to provide a refund if you fail to complete the
						content within the allocated time, except at our absolute and sole
						discretion.
					</li>
					<li>
						We reserve our right to review and change the pricing of any of
						our products. This will not affect products that have already been
						purchased.
					</li>
					<li>
						You must be a human to open an account. Accounts registered by
						“bots” or other automated methods are not permitted
					</li>
					<li>
						You are responsible for maintaining the security of your account
						and password. We view any actions taken by your account as taken
						by you. Flexguru will not be liable for any loss or damage from
						your failure to comply with this security obligation
					</li>
					<li>
						You will not partake in any behavior that victimizes, harasses,
						degrades, or intimidates an individual or group of individuals on
						the basis of religion, gender, sexual orientation, race,
						ethnicity, age, or disability
					</li>
					<li>
						You will not share software viruses or any other computer code,
						files, or programs that are designed or intended to disrupt,
						damage, or limit the functioning of any software, hardware, or
						telecommunications equipment or to damage or obtain unauthorized
						access to any data or other information of any third party.
					</li>
					<li>
						Teachers may earn revenue by publishing classes or offering
						special services through Flexguru. Payment will be deposited for
						every session.
					</li>
					<li>
						All security on our Website is treated seriously. Where
						applicable, we undertake security steps, including the use of SSL
						technology, on our back-end systems that store customer account
						information and protect data transmissions. However, this is not a
						guarantee that such data transmissions cannot be accessed,
						altered, or deleted due to firewall or other security software
						failures. If you have any further concerns about security, please
						email our Customer Service team at support@Flexguru.lk
					</li>
					<li>
						We use personal information to allow us to process your service
						requests, provide access to privileged areas of the Websites, send
						out newsletters, personalize your visit to our Websites and enable
						us to improve the services we offer. We may occasionally carry out
						market research and send you details of services and offers that
						we think may be of interest to you. If you do not wish to receive
						such information, please email support@flexguru.lk or,
						alternatively, when we send you an email, it will contain a
						provision for you to opt out of receiving any further information
						from us.
					</li>
					<li>
						All the ranking processes of Tutors and Students are done through
						a dedicated Flexguru algorithm and no individual involvements or
						requests are strictly prohibited to make changes in the ranking
						process
					</li>
					<li>
						We may change these terms and conditions from time to time. We
						will notify you of any changes by posting the new terms and
						conditions on our website.
					</li>
				</ol>
			</div>
		</div>
	</div>
	<!-- End of Detail Box -->
	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>