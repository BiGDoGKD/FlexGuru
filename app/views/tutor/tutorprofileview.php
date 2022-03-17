<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>

    <div class="user-dashboard container mt-2 mb-2">
        <div class="row">
            <div class="col-12-xs col-4-lg">
                <div class="profile-card br-xs">
                    <div class="profile-card-header">
                        <div class="profile-card-header-image">
                            <img class="profile-card-header-image-img" src="<?php echo URLROOT . '/public/img/studentprofileview/user.png' ?>" id="userimg" alt="Kesara Karannagoda" />
                        </div>
                        <div class="profile-card-header__profile-name">
                            <span class="first-name"><?php echo $_SESSION['userdata']['firstname'] ?></span>
                            <span class="last-name"><?php echo $_SESSION['userdata']['lastname'] ?></span>
                        </div>
                        <div class="profile-card-header__profile-handle">
                            <span class="username text-gray font-md">
                                <?php echo '@' . $_SESSION['userdata']['username'] ?>
                            </span>
                        </div>
                        <div class="profile-card-header__profile-ratings">
                            <div class="star-bar display-f justify-content-center">
                                <div class="star-bar__star-container">
                                    <i class="fa fa-solid fa-star fa-lg text-orange"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-orange"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-orange"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-orange"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-gray" style="position: relative"><i style="
													position: absolute;
													top: 50%;
													left: 50%;
													transform: translate(-50%, -50%);
													z-index: 1;
												" class="fa fa-star-half text-orange"></i></i>
                                </div>
                            </div>
                            <div class="rating-count text-gray">
                                <span class="base-value font-lg text-black">4.5</span>
                                <span class="feedback-count">(
                                    <span class="feedback-count__count">12</span>
                                    <span class="feedback-count__text">feedbacks</span>
                                    )
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="profile-card-body">
                        <div class="profile-card-address">
                            <p class="label">
                                <i class="fa fa-solid fa-location-arrow fa-lg text-gray"></i>
                                From
                            </p>
                            <p class="city"><?php echo $_SESSION['userdata']['city'] ?></p>
                        </div>
                        <div class="profile-card-duration">
                            <span class="label">
                                <i class="fa fa-solid fa-user fa-lg text-gray"></i> Member
                                since</span>
                            <span class="date"><?php
                                                echo date('M, Y', strtotime(date($_SESSION['userdata']['startdate'])));
                                                ?></span>
                        </div>
                    </div>
                    <div class="profile-card-footer">
                        <div class="social-block cardcol-12-xs mt-2 br-xs">
                            <h1 class="font-md bold text-center text-gray mb-1 mt-1">Connect with Social Media</h1>
                            <div class="social-media-bar display-f text-gray font-lg justify-content-around">
                                <div class="social-media-bar-item">
                                    <a href="#">
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
            <div class="tutor-dashboard col-12-xs pl-lg-2 mt-xs-3 mt-lg-0 col-8-lg">
                <div class="tutor-dashboard__active-sessions col-12-xs">
                    <span class="session-count">Active Sessions - 0</span>
                    <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions">Check Sessions</button>
                </div>
                <?php $approval = true; ?>
                <?php if ($approval) { ?>
                    <div class="tutor-dashboard__create-gig col-12-xs mt-1 mb-1">
                        <span class="title">Total Gigs - 0</span>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/tutor/publish' ?>'">Create a Gig</button>
                    </div>
                <?php } else { ?>
                    <div class="tutor-dashboard__approval-status mt-1 mb-1">
                        <p class="text-error">
                            <span class="font-lg-lg font-xs-md">Approval Inprogress...</span>
                            You need to pass the approval process to be able to start tutoring. <i><u class="text-primary"><a href="#">learn more.</a></u></i>
                        </p>
                    </div>
                <?php
                } ?>

                <div class="tutor-dashboard__gig-details row">

                    <div class="service-gig-container col-4-lg col-6-md col-12-xs p-1">
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
                    </div>
                    <div class="service-gig-container col-4-lg col-6-md col-12-xs p-1">
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
                    </div>
                    <div class="service-gig-container col-4-lg col-6-md col-12-xs p-1">
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
                    </div>
                </div>
                <?php
                // print_r($_SESSION);
                ?>
            </div>

        </div>
    </div>
    </div>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>