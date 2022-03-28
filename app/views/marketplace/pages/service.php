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
    <main>
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
        <div class="container service-page base-container mt-xs-1 mt-md-3">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-primary pointer" style="text-transform: capitalize;"><?php echo $data['gigdetails']['subject'] ?> > Lesson</p>
                </div>
                <div class="row mt-2 mb-1">
                    <div class="col-8-lg col-12-xs col-7-md pr-lg-2 mb-lg-3">
                        <h1 class="mb-2"><?php echo $data['gigdetails']['title'] ?></h1>
                        <div class="tutor-detail-bar display-f align-items-center">
                            <div class="mini-profile-picture-holder" style="background: url(<?php echo URLROOT . "/public/uploads/users/" . $data['gigdetails']['photourl'] ?>);">
                            </div>
                            <p class="tutor-name">
                                <?php echo $data['gigdetails']['firstname'] . ' ' . $data['gigdetails']['lastname'] ?>
                            </p><?php
                                if ($data['gigdetails']['verified'] == '1') {
                                    echo '<i class="fa fa-check-circle text-success"></i>';
                                } ?>
                            <span>&nbsp; | </span>
                            <div class="stars">
                                <?php
                                if ($data['reviews']['gigratings'][0]->rating == null) {
                                ?>
                                    <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                    <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                <?php
                                } else {
                                    if (fmod($data['reviews']['gigratings'][0]->rating, 1) == 0) {
                                        for ($i = 0; $i < round($data['reviews']['gigratings'][0]->rating); $i++) {
                                            echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                        }
                                    } else {
                                        for ($i = 0; $i < ceil($data['reviews']['gigratings'][0]->rating) - 1; $i++) {
                                            echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                        }
                                    }
                                    if (fmod((5 - $data['reviews']['gigratings'][0]->rating), 1) == 0) {
                                        for ($i = 0; $i < 5 - round($data['reviews']['gigratings'][0]->rating); $i++) {
                                            echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                        }
                                    } else {
                                        echo '<i class="fas fa-star-half-alt fa-lg text-orange"></i>';
                                        for ($i = 0; $i < round(4 - $data['reviews']['gigratings'][0]->rating); $i++) {
                                            echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <p class="ratings text-orange"><?php if ($data['reviews']['gigratings'][0]->rating == null) {
                                                                echo 'N/A';
                                                            } else {
                                                                echo number_format((float)$data['reviews']['gigratings'][0]->rating, 1, '.', '');
                                                            } ?> <span class="text-gray">(<?php echo $data['reviews']['gigratings'][0]->jobs ?>)</span></p>
                            <p class="text-success"><?php
                                                    if ($data['reviews']['inprogress'][0]->progress == 0) {
                                                    } else {
                                                        echo '&nbsp;&nbsp;' . $data['reviews']['inprogress'][0]->progress . ' Classes In Progress';
                                                    } ?>
                            </p>
                        </div>
                        <div class="service-cover-container" style="background: url(<?php echo URLROOT . '/public/uploads/services/' . $data['gigdetails']['image'] ?>);"></div>
                        <h2 class="mb-2 mt-3">About this service</h2>
                        <div class="text-gray">
                            <?php echo $data['gigdetails']['description'] ?>
                        </div>

                        <!-- tutor-details-block  -->
                        <h3 class="mt-3">About the Tutor</h3>
                        <div class="tutor-details mt-2">
                            <div class="tutor-details__header">
                                <div class="profile-picture-holder" style="background: url(<?php echo URLROOT . "/public/uploads/users/" . $data['gigdetails']['photourl'] ?>);">
                                </div>
                            </div>
                            <div class="tutor-details__body">
                                <p class="tutor-name font-md text-primary pointer"> <?php echo $data['gigdetails']['firstname'] . ' ' . $data['gigdetails']['lastname'] ?>&nbsp;<?php
                                                                                                                                                                                if ($data['gigdetails']['verified'] == '1') {
                                                                                                                                                                                    echo '<i class="fa fa-check-circle text-success"></i>';
                                                                                                                                                                                } ?></p>
                                <p class="tutor-position font-sm text-gray"><?php echo $data['gigdetails']['occupation'] . ', ' . $data['gigdetails']['workplace'] ?></p>
                                <div class="tutor-ratings">
                                    <div class="stars">
                                        <?php
                                        if ($data['reviews']['tutorratings'][0]->rating == null) {
                                        ?>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                            <i class="fa fa-solid fa-star fa-lg text-gray"></i>
                                        <?php
                                        } else {
                                            if (fmod($data['reviews']['tutorratings'][0]->rating, 1) == 0) {
                                                for ($i = 0; $i < round($data['reviews']['tutorratings'][0]->rating); $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                                }
                                            } else {
                                                for ($i = 0; $i < ceil($data['reviews']['tutorratings'][0]->rating) - 1; $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-orange"></i>';
                                                }
                                            }
                                            if (fmod((5 - $data['reviews']['tutorratings'][0]->rating), 1) == 0) {
                                                for ($i = 0; $i < 5 - round($data['reviews']['tutorratings'][0]->rating); $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                                }
                                            } else {
                                                echo '<i class="fas fa-star-half-alt fa-lg text-orange"></i>';
                                                for ($i = 0; $i < round(4 - $data['reviews']['tutorratings'][0]->rating); $i++) {
                                                    echo '<i class="fa fa-solid fa-star fa-lg text-gray"></i>';
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                    <p class="ratings text-orange"><?php if ($data['reviews']['tutorratings'][0]->rating == null) {
                                                                        echo 'N/A';
                                                                    } else {
                                                                        echo number_format((float)$data['reviews']['tutorratings'][0]->rating, 1, '.', '');
                                                                    } ?> <span class="text-gray">(<?php echo $data['reviews']['tutorratings'][0]->jobs ?>)</span></p>
                                </div>
                                <div class="tutor-contact mt-1">
                                    <button class="bg-white text-gray">Contact Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="tutor-bio-box">
                            <div class="tutor-bio-box__header row mb-md-2">
                                <div class="tutor-bio-box__header__location col-6-md col-12-xs">
                                    <p class="text-gray">From</p>
                                    <p class="text-black">Colombo</p>
                                </div>
                                <div class="tutor-bio-box__header__member-since col-6-md col-12-xs mt-xs-1 mt-md-0">
                                    <p class="text-gray">Member Since</p>
                                    <p class="text-black">Apr, 2019</p>
                                </div>
                            </div>
                            <div class="tutor-bio-box__body mt-1">
                                <p class="tutor-bio text-gray"><?php echo $data['gigdetails']['bio'] ?></p>
                            </div>
                        </div>
                        <!-- reviews  -->
                        <div class="row">
                            <div class="reviews">
                                <h2 class="font-xl mb-3">Reviews</h2>
                                <?php foreach ($data['reviews']['gigfeedbacks'] as $reviews) {
                                ?>
                                    <div class="review-box">
                                        <div class="header">
                                            <div class="photo" style="background-image: url('<?php echo URLROOT . "/public/uploads/users/" . $reviews->photourl ?>');">
                                            </div>
                                            <div class="name display-f" style="flex-direction: column;">
                                                <div class="display-f align-items-center">
                                                    <p class="text-black full-name"><?php echo $reviews->firstname . ' ' . $reviews->lastname ?></p>
                                                    <p class="text-orange ratings"><i class="fa fa-solid fa-star fa-lg text-orange"></i><?php echo '&nbsp;' . $reviews->turating ?></p>
                                                </div>
                                                <div class="username">
                                                    <p class="text-gray">@<?php echo $reviews->username ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="body text-gray">
                                            <p><?php echo $reviews->tureview ?></p>
                                        </div>
                                    </div><?php
                                        } ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-4-lg col-12-xs col-5-md pl-lg-1 mt-md-3">
                        <div class="service-details-box">
                            <h2 class="mb-1 mt-1">Service Details</h2>
                            <p class="text-gray mb-1">
                                This service include the following facilities:
                            </p>
                            <div class="service-details-box__body display-f flex-col">
                                <ul>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i><?php echo $data['gigdetails']['revisions'] ?> Revision Attempts.</p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i>Delivery within <?php echo $data['gigdetails']['duration'] ?> days.</p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i><?php echo $data['gigdetails']['medium'] ?> Medium</p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i><?php echo $data['gigdetails']['subject'] ?></p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i>Class conducted on <?php echo $data['gigdetails']['method'] ?>.</p>
                                    </li>
                                </ul>
                                <img class="mt-2" src="
                                <?php
                                if ($data['gigdetails']['method'] == 'zoom') {
                                    echo URLROOT . '/public/updated/img/services/zoom.webp';
                                } else if ($data['gigdetails']['method'] == 'teams') {
                                    echo URLROOT . '/public/updated/img/services/teams.svg';
                                } else if ($data['gigdetails']['method'] == 'google') {
                                    echo URLROOT . '/public/updated/img/services/meet.webp';
                                } else {
                                    echo URLROOT . '/public/updated/img/services/tutor.svg';
                                }
                                ?>" width="50" alt="method">
                                <?php if ($data['gigdetails']['method'] == 'other') {
                                ?>
                                    <h3 class="text-gray mt-2">Please contact the tutor about the class method.</h3>
                                <?php
                                } ?>
                                <form action="<?php echo URLROOT . '/service/checkout' ?>" method="POST">
                                    <input type="hidden" name="gigid" value="<?php echo $data['gigdetails']['gigid'] ?>" readonly>
                                    <input type="hidden" name="tuid" value="<?php echo $data['gigdetails']['tuid'] ?>" readonly>
                                    <input type="hidden" name="title" value="<?php echo $data['gigdetails']['title'] ?>" readonly>
                                    <input type="hidden" name="price" value="<?php echo $data['gigdetails']['price'] ?>" readonly>
                                    <input type="hidden" name="photourl" value="<?php echo $data['gigdetails']['photourl'] ?>" readonly>
                                    <input type="hidden" name="image" value="<?php echo $data['gigdetails']['image'] ?>" readonly>
                                    <input type="hidden" name="medium" value="<?php echo $data['gigdetails']['medium'] ?>" readonly>
                                    <input type="hidden" name="rating" value="<?php echo $data['gigdetails']['rating'] ?>" readonly>
                                    <input type="hidden" name="duration" value="<?php echo $data['gigdetails']['duration'] ?>" readonly>
                                    <input type="hidden" name="jobs" value="<?php echo $data['gigdetails']['jobs'] ?>" readonly>
                                    <input type="hidden" name="level" value="<?php echo $data['gigdetails']['level'] ?>" readonly>
                                    <input type="hidden" name="firstname" value="<?php echo $data['gigdetails']['firstname'] ?>" readonly>
                                    <input type="hidden" name="lastname" value="<?php echo $data['gigdetails']['lastname'] ?>" readonly>
                                    <input type="hidden" name="verified" value="<?php echo $data['gigdetails']['verified'] ?>" readonly>
                                    <button class="continue-purchase" style="width: 100%;" type="submit">Continue (LKR <?php echo $data['gigdetails']['price'] ?>)</button>
                                </form>

                                <button class="contact-tutor" onclick="location.href='<?php echo URLROOT . '/student' ?>'">Contact Tutor</button>
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