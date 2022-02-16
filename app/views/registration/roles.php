<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Flexguru Roles</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<?php
	include APPROOT . '/views/includes/navbar.php';
	?>

	<!-- User Role Selection for Registration -->

	<div class="container registration-roles pb-5">
		<div class="row mt-lg-5 mt-xs-2">
			<div class="col-12-xs">
				<h1 class="font-lg-xxl font-xs-xl mb-1">Select user type</h1>
				<p class="text-gray">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
					tempore.
				</p>
			</div>
		</div>
		<div class="row mt-lg-5 mt-xs-3 mb-xs-3 mb-lg-5">
			<div class="col-4-lg col-12-xs display-f justify-content-center">
				<div onclick="location.href='<?php echo URLROOT ?>/registration/tutor'" class="registration-roles__role-card shadow-lg-md shadow-xs-sm display-f flex-lg-col justify-content-center align-items-center p-xs-1 p-lg-3 br-lg">
					<div class="registration-roles__role-card__image mr-xs-2 mr-lg-0">
						<img class="filter-primary" src=<?php echo URLROOT . "/updated/img/roles/tutor-main.svg" ?> alt="Tutor Icon" />
					</div>
					<div class="registration-roles__role-card__title">
						<h2 class="font-md text-gray">Tutor</h2>
					</div>
				</div>
			</div>
			<div class="col-4-lg col-12-xs display-f justify-content-center">
				<div onclick="location.href='<?php echo URLROOT ?>/registration/student'" class="registration-roles__role-card shadow-lg-md shadow-xs-sm display-f flex-lg-col justify-content-center align-items-center p-xs-1 p-lg-3 br-lg">
					<div class="registration-roles__role-card__image mr-xs-2 mr-lg-0">
						<img class="filter-primary" src=<?php echo URLROOT . "/updated/img/roles/student-main.svg" ?> alt="Tutor Icon" />
					</div>
					<div class="registration-roles__role-card__title">
						<h2 class="font-md text-gray">Student</h2>
					</div>
				</div>
			</div>
			<div class="col-4-lg col-12-xs display-f justify-content-center">
				<div onclick="location.href='<?php echo URLROOT ?>/registration/affiliate'" class="registration-roles__role-card shadow-lg-md shadow-xs-sm display-f flex-lg-col justify-content-center align-items-center p-xs-1 p-lg-3 br-lg">
					<div class="registration-roles__role-card__image mr-xs-2 mr-lg-0">
						<img class="filter-primary" src=<?php echo URLROOT . "/updated/img/roles/affiliate-main.svg" ?> alt="Tutor Icon" />
					</div>
					<div class="registration-roles__role-card__title">
						<h2 class="font-md text-gray">Affiliate</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12-xs">
				<p class="text-gray pr-lg-2 pl-lg-2">
					Accepting
					<a href='<?php echo URLROOT ?>/info/terms' class="text-primary">terms and conditions</a> is
					mandatory for registration. Lorem, ipsum dolor sit amet consectetur
					adipisicing elit. Itaque, cum! Lorem ipsum dolor sit amet.
				</p>
			</div>
		</div>
	</div>

	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>