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
    include APPROOT . '/views/includes/user-navbar.php';
    ?>

    <div class="user-dashboard container">
        <div class="row">
            <div class="col-12-xs col-4-lg">
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-card-header-image">
                            <img class="profile-card-header-image-img" src="https://avatarfiles.alphacoders.com/699/69905.png" alt="Kesara Karannagoda" />
                        </div>
                        <div class="profile-card-header__profile-name">
                            <span class="first-name"><?php echo $_SESSION['userdata']['firstname'] ?></span>
                            <span class="last-name"><?php echo $_SESSION['userdata']['lastname'] ?></span>
                        </div>
                        <div class="profile-card-header__profile-ratings">
                            <div class="star-bar">
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
                    <div class="profile-card-footer"></div>
                </div>
            </div>
            <div class="col-12-xs mt-xs-3 mt-lg-0 col-8-lg">
                <?php
                print_r($_SESSION);
                ?>
            </div>
            <div class="col-12-xs">
                <div class="social-media-bar display-f text-gray font-lg justify-content-center">
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

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>