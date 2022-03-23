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
    include APPROOT . '/views/includes/student-navbar.php';
    ?>

    <main>
        <div class="user-dashboard container base-container mt-3 mb-3">
            <div class="row">
                <div class="col-12-xs col-4-lg">
                    <div class="profile-card br-xs">
                        <div class="profile-card-header">
                            <div class="profile-card-header-image">
                                <img class="profile-card-header-image-img" src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" id="userimg" alt="Kesara Karannagoda" />
                                <div class="profile-card-header-image__upload" onclick="openModal()">
                                    <i class="fa fa-camera"></i>

                                </div>
                                <?php include APPROOT . '/views/includes/modals/modal-profile-picture.php'; ?>
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
                    <div class="tutor-dashboard__create-gig col-12-xs mt-1 mb-1">
                        <span class="title">Total Gigs - 0</span>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/gigs/mygigs' ?>'">My Gigs</button>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/gigs/publish' ?>'">Create a Gig</button>
                    </div>


                    <div class="tutor-dashboard__gig-details row">
                        <!-- starts  -->
                        <?php
                        if (!$data) {
                        ?>
                            <div class="container row br-xs basic-border pt-2 pb-3 pr-2 pl-2">
                                <div class="col-7-lg col-12-xs">
                                    <h2 class="text-black font-lg mt-2 mb-1">FlexGuru helps you to improve</h2>
                                    <span class="mb-1">
                                        <b class="text-gray"> How to be succesfull in Flexguru in simple steps</b>
                                    </span>
                                    <p class="font-md text-gray">The key to your success on Flexguru is the brand you build for yourself through
                                        your Flexguru reputation. We gathered some tips and resources to help you
                                        become a leading tutor on Flexguru. <a class="text-primary" href="#"><u>learn more...</u></a> </p>
                                </div>
                                <div class="col-5-lg col-12-xs pl-2 pr-2 pt-1">
                                    <img src="<?php echo URLROOT . '/public/img/studentprofileview/study.svg' ?>" id="study_img" alt="">

                                </div>
                            </div>

                            <?php
                        } else {
                            $i = 1;
                            foreach ($data as $gig) {
                                $service = (array)$gig;
                            ?>

                                <div class="service-gig-container col-4-lg col-6-md col-12-xs p-1" onclick="location.href='<?php echo URLROOT . '/marketplace/service/' . $service['gigid'] ?>'">
                                    <div class="service-gig">
                                        <div class="service-gig__header" style="
									background-image: url(<?php echo URLROOT . '/public/uploads/services/' . $service['image'] ?>);
									background-size: cover;
									background-position: center;
								">

                                        </div>
                                        <div class="service-gig__body">
                                            <div class="service-gig__body__tutor-details">
                                                <div class="service-gig__body__tutor-details__tutor-profile-picture" style="
											background-image: url(<?php echo URLROOT . "/public/uploads/users/" . $service['photourl'] ?>);
											background-size: cover;
											background-position: center;
										"></div>
                                                <div class="service-gig__body__tutor-details__tutor-name">
                                                    <span class="name"><?php echo $service['firstname'] . " " . $service['lastname'] ?></span>
                                                    <span class="level"><?php
                                                                        if ($service['rating'] == '0') {
                                                                            echo 'New Tutor';
                                                                        } else {
                                                                            echo 'Level ' . $service['rating'] . ' Tutor';
                                                                        } ?>&nbsp;

                                                        <?php
                                                        if ($service['verified'] == '1') {
                                                            echo '<i class="fa fa-check-circle text-success"></i>';
                                                        } ?></span>
                                                </div>
                                            </div>
                                            <div class="service-gig__body__gig-description">
                                                <p><?php echo $service['title'] ?></p>
                                            </div>
                                            <div class="service-gig__body__gig-details">
                                                <div class="service-gig__body__gig-details__star-ratings">
                                                    <i class="fa fa-star"></i>&nbsp;<?php
                                                                                    if ($service['rating'] == '0') {
                                                                                        echo 'n/a';
                                                                                    } else {
                                                                                        echo $service['rating'];
                                                                                    } ?>
                                                </div>
                                                <div class="service-gig__body__gig-details__services-given">
                                                    <?php
                                                    if ($service['jobs'] == '0') {
                                                        echo '(<i>new service</i>)';
                                                    } else {
                                                        echo '(' . $service['jobs'] . ')';
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="service-gig__footer">
                                                <div class="service-gig__footer__badge">
                                                    <div class="service-gig__footer__badge__medium">
                                                        <?php echo $service['medium'] ?>
                                                    </div>
                                                </div>
                                                <div class="service-gig__footer__price">
                                                    LKR&nbsp;<span class="price-value"><?php echo $service['price'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                                $i++;
                            }
                        } ?>
                        <!-- ends  -->
                    </div>

                </div>

            </div>
        </div>
    </main>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>