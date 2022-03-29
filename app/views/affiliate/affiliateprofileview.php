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
    include APPROOT . '/views/includes/affiliate-navbar.php';
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
                                        if ($data['tutor']['class'][0]->rating == null) {
                                        ?>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                        <?php
                                        } else {
                                            if (fmod($data['tutor']['class'][0]->rating, 1) == 0) {
                                                for ($i = 0; $i < round($data['tutor']['class'][0]->rating); $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                                }
                                            } else {
                                                for ($i = 0; $i < ceil($data['tutor']['class'][0]->rating) - 1; $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                                }
                                            }
                                            if (fmod((5 - $data['tutor']['class'][0]->rating), 1) == 0) {
                                                for ($i = 0; $i < 5 - round($data['tutor']['class'][0]->rating); $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                                }
                                            } else {
                                                echo '<i class="fas fa-star-half-alt fa-lg text-orange"></i>';
                                                for ($i = 0; $i < round(4 - $data['tutor']['class'][0]->rating); $i++) {
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
                                                                                    if ($data['tutor']['class'][0]->rating == null) {
                                                                                        echo 'N/A';
                                                                                    } else {
                                                                                        echo number_format((float)$data['tutor']['class'][0]->rating, 1, '.', '');
                                                                                    }
                                                                                    ?></span>
                                    <span class="feedback-count">(
                                        <span class="feedback-count__count"> <?php echo $data['tutor']['class'][0]->jobs; ?></span>
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
                            <p class="city"><?php echo $_SESSION['userdata']['city']  ?></p>
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

                <div class="col-12-xs" style="display:flex;">
                    <div class="col-4-lg col-12-xs p-lg-4 p-xs-2 p-md-4">
                        <img src=<?php echo URLROOT . "/public/img/affiliate/blog.svg" ?> alt="Register" />
                    </div>
                    <div>
                        <h2 style="padding: 80px;"> Referral Code : <?php echo $_SESSION['roledata']['affiliatelink'] ?> </h2>
                    </div>
                </div>
                <div class="tutor-dashboard__active-sessions col-12-xs">
                    <span class="session-count"><b>Hey <?php echo $_SESSION['userdata']['username'] . " !"  ?> Welcome to the Affiliate Marketing Program of FlexGuru.</b><br><br>Exclusive deals and a library of banners and other resources are available to help you promote your link.
                        You can earn money by referring new users. With 1:1 help, you can track your progress on a live dashboard and optimize your revenue.
                    </span>

                </div>
                <?php $approval = true; ?>
                <?php if ($approval) { ?>
                    <div class="tutor-dashboard__create-gig col-12-xs mt-1 mb-1">
                        <span class="title">Total Earnings </span>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/affiliate/referrallinks' ?>'">Get Referral Links for your sites </button>
                        <button class="bg-primary br-xs text-white  pl-2 pr-2 pt-1 pb-1 check-sessions" onclick="location.href=' <?php echo URLROOT . '/affiliate/withdrawearnings' ?>'">Withdraw Earnings </button>
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


                <?php
                // print_r($_SESSION);
                ?>
            </div>

        </div>
    </div>


    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>