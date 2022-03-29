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
        <?php
        $sturating = $data['result'][0]->sturating;
        $stuclasses = $data['result'][0]->stuclasses;
        ?>
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
                            <?php if (empty($data)) { ?>
                                <div class="profile-card-header__profile-ratings">
                                    <div class="star-bar display-f justify-content-center">
                                        <div class="star-bar__star-container">

                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>


                                            <!-- <i class="fas fa-star-half-alt fa-lg text-orange"></i> -->
                                        </div>
                                    </div>
                                    <div class="rating-count text-gray">
                                        <span class="base-value font-md text-black"> N/A
                                            <span class="feedback-count text-gray">
                                                <span class="feedback-count__count"> 0</span>
                                                <span class="feedback-count__text">feedbacks</span>
                                            </span>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="profile-card-header__profile-ratings">
                                    <div class="star-bar display-f justify-content-center">
                                        <div class="star-bar__star-container">

                                            <?php
                                            if ($sturating == null) {
                                            ?>
                                                <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                                <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                                <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                                <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                                <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <?php
                                            } else {
                                                if (fmod($sturating, 1) == 0) {
                                                    for ($i = 0; $i < round($sturating); $i++) {
                                                        echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                                    }
                                                } else {
                                                    for ($i = 0; $i < ceil($sturating) - 1; $i++) {
                                                        echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                                    }
                                                }
                                                if (fmod((5 - $sturating), 1) == 0) {
                                                    for ($i = 0; $i < 5 - round($sturating); $i++) {
                                                        echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                                    }
                                                } else {
                                                    echo '<i class="fas fa-star-half-alt fa-lg text-orange"></i>';
                                                    for ($i = 0; $i < round(4 - $sturating); $i++) {
                                                        echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                                    }
                                                }
                                            }
                                            ?>

                                            <!-- <i class="fas fa-star-half-alt fa-lg text-orange"></i> -->
                                        </div>
                                    </div>
                                    <div class="rating-count text-gray">
                                        <span class="base-value font-lg text-black"> <?php
                                                                                        if ($sturating == null) {
                                                                                            echo 'N/A';
                                                                                        } else {
                                                                                            echo number_format((float)$sturating, 1, '.', '');
                                                                                        }
                                                                                        ?></span>
                                        <span class="feedback-count">(
                                            <span class="feedback-count__count"> <?php echo $stuclasses; ?></span>
                                            <span class="feedback-count__text">feedbacks</span>
                                            )
                                        </span>
                                    </div>
                                </div>
                            <?php } ?>
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

                    <div class="tutor-dashboard__create-gig col-12-xs mt-1 mb-1">
                        <span class="title">Special Service Requests</span>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/gigs/mygigs' ?>'">My Requests</button>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/student/request' ?>'">Create a Special Service Request</button>
                    </div>


                    <div class="tutor-dashboard__gig-details row">
                        <!-- starts  -->

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