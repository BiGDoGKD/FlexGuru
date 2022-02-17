<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Marketplace</title>
	<?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
	<?php
	include APPROOT . '/views/includes/navbar.php';
	?>
	<!-- Hero Section  -->

	<div class="detail-hero-section container fluid bg-cyan pl-0 pr-0" style="
				background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
				background-size: cover;
				background-position: center;
			">
		<div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
			<div class="container">
				<div class="row">
					<div class="col-12-xs text-white text-center align-items-center">
						<div class="row">
							<div class="col-12-xs">
								<h2>Welcome to FlexGuru Marketplace</h2>
								<p class="text-gray mb-2">
									Best place to find your next Flexible Guru for your next
									project or event.
								</p>
							</div>
						</div>
						<form class="marketplace" action="#" method="get">
							<div class="search-bar row">
								<input type="text" class="col-11-lg col-12-xs" name="search" placeholder="Search for a service, tutor, or subject" />
								<button class="col-1-lg col-12-xs mt-xs-1 mt-lg-0 text-white bg-primary display-f align-items-center justify-content-center" type="submit" class="search-btn">
									<i class="fa fa-search mr-xs-1 mr-lg-0"></i>
									<span class="display-lg-n">Search</span>
								</button>
							</div>
						</form>
					</div>
					<div class="col-12-xs display-xs-n display-lg-f mt-lg-3">
						<div class="col-4-xs display-f justify-content-center">
							<button onclick="location.href='<?php echo URLROOT . '/info/tutor' ?>'" class="marketplace__help-btn">Become a Tutor</button>
						</div>
						<div class="col-4-xs display-f justify-content-center">
							<button onclick="location.href='<?php echo URLROOT . '/info/help' ?>'" class="marketplace__help-btn">Ask for Help</button>
						</div>
						<div class="col-4-xs display-f justify-content-center">
							<button onclick="location.href='<?php echo URLROOT . '/info/affiliates' ?>'" class="marketplace__help-btn">Affiliate Program</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Filter Bar  -->

	<div class="container marketplace__filter-bar display-xs-n display-lg-b">
		<div class="row">
			<div class="subject col-12-xs col-2-xl col-6-md display-f justify-content-center">
				Mathematics
			</div>
			<div class="subject col-12-xs col-2-xl col-6-md display-f justify-content-center">
				Science
			</div>
			<div class="subject col-12-xs col-2-xl col-6-md display-f justify-content-center">
				Technology
			</div>
			<div class="subject col-12-xs col-2-xl col-6-md display-f justify-content-center">
				Web Development
			</div>
			<div class="subject col-12-xs col-2-xl col-6-md display-f justify-content-center">
				Machine Learning
			</div>
			<div class="subject col-12-xs col-2-xl col-6-md display-f justify-content-center">
				UX/UI Designing
			</div>
		</div>
	</div>
	<!-- End of Filter Bar  -->

	<!-- Marketplace Details  -->
	<div class="marketplace__details container mt-xs-2">
		<div class="row">
			<div class="col-12-xs display-f justify-xs-content-center justify-lg-content-start">
				<h1 class="font-xs-xl font-lg-xxl">All Services</h1>
			</div>
			<style></style>
			<div class="advanced-filters col-12-xs col-6-lg">
				<div class="row justify-content-center pt-2 mb-2 pb-xs-0">
					<div class="col-3-md display-f justify-xs-content-center col-4-lg col-12-xs form-control">
						<select name="price" id="price" class="form-control">
							<option value="none">Price</option>
							<option value="low-high">Low-High</option>
							<option value="high-high">High-Low</option>
						</select>
					</div>
					<div class="col-3-md display-f justify-xs-content-center col-4-lg col-12-xs form-control">
						<select name="price" id="price" class="form-control">
							<option value="none">Tutor Level</option>
							<option value="low-high">Level 1</option>
							<option value="high-high">Level 2</option>
							<option value="high-high">Level 3</option>
						</select>
					</div>
					<div class="col-3-md display-f justify-xs-content-center col-4-lg col-12-xs form-control">
						<select name="price" id="price" class="form-control">
							<option value="none">Subject</option>
							<option value="math">Math</option>
							<option value="science">Science</option>
							<option value="technology">Technology</option>
							<option value="web-development">Web Development</option>
							<option value="machine-learning">Machine Learning</option>
							<option value="ux-ui-designing">UX/UI Designing</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Marketplace Details  -->

	<!-- Marketplace Section  -->
	<div class="marketplace container">
		<div class="row">
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-12-xs col-6-md col-4-lg col-3-xl display-f justify-content-center align-items-center p-1">
				<a href="#">
					<div class="service-gig">
						<div class="service-gig__header" style="
									background-image: url(https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg);
									background-size: cover;
									background-position: center;
								">
							Header
						</div>
						<div class="service-gig__body">
							<div class="service-gig__body__tutor-details">
								<div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(https://scontent.fcmb1-2.fna.fbcdn.net/v/t1.6435-9/122449448_697050650939469_6873584063804574562_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=174925&_nc_ohc=S1G6maLSXpgAX-yTTtA&_nc_ht=scontent.fcmb1-2.fna&oh=00_AT_llzl4n9U-KwnylYXrsh1qyWQbcuCzTXX5gytl8qWi_Q&oe=623363EF);
											background-size: cover;
											background-position: center;
										"></div>
								<div class="service-gig__body__tutor-details__tutor-name">
									<span class="name">Kesara Karannagoda</span>
									<span class="level">Level 2 Tutor&nbsp;

										<i class="fa fa-check-circle text-primary"></i></span>
								</div>
							</div>
							<div class="service-gig__body__gig-description">
								<p>I can teach you mathematics and science.</p>
							</div>
							<div class="service-gig__body__gig-details">
								<div class="service-gig__body__gig-details__star-ratings">
									<i class="fa fa-star"></i>&nbsp;4.6
								</div>
								<div class="service-gig__body__gig-details__services-given">
									(249)
								</div>
							</div>
							<div class="service-gig__footer">
								<div class="service-gig__footer__badge">
									<i class="fa fa-badge"></i>
								</div>
								<div class="service-gig__footer__price">
									LKR&nbsp;<span class="price-value">1500</span>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12-xs display-f pt-3 pb-5 justify-content-center">
				<div class="pagination">
					<a href="#">&laquo;</a>
					<a href="#">1</a>
					<a href="#" class="active">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">&raquo;</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Marketplace Section  -->

	<!-- End of Hero Section -->
	<?php
	include APPROOT . '/views/includes/footer.php';
	?>
</body>

</html>