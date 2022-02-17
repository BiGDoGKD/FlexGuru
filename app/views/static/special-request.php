<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Special Service Request</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<?php
	include APPROOT . '/views/includes/navbar.php';
	?>
	<!-- Hero Section  -->

	<div class="detail-hero-section container fluid bg-cyan pl-0 pr-0" style="
				background-image: url(https://cdn.pixabay.com/photo/2016/08/15/08/40/apple-1594742_960_720.jpg);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs display-f flex-col text-white text-center align-items-center">
						<h1>What's Special?</h1>
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
		<div class="row image-detail-box mt-xs-2 mt-lg-0">
			<div class="col-6-lg col-12-xs p-lg-4 p-xs-2 p-md-5">
				<img src=<?php echo URLROOT . "/updated/img/register.svg" ?> alt="Register" />
			</div>
			<div class="col-6-lg col-12-xs p-lg-4 mt-xs-2 mt-lg-0">
				<h1>Title</h1>
				<p class="text-gray">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit.
					Exercitationem error rerum ipsa molestias temporibus dolor itaque
					laboriosam! Molestias fuga enim sed, facere facilis quam cum ab ex,
					aperiam nisi explicabo?
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
				<h1>Title</h1>
				<p class="text-gray">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
					at nesciunt necessitatibus veniam magnam soluta sapiente, laboriosam
					id unde est sint nobis et quo distinctio odio quisquam harum,
					asperiores ut!
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
				<h1>Title</h1>
				<p class="text-gray">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit.
					Perferendis maxime architecto voluptatum hic laborum consequatur
					adipisci enim saepe illum repudiandae deleniti, doloribus inventore
					cumque animi facere ullam id incidunt alias.
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