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
                    <p class="text-primary pointer" style="text-transform: capitalize;"><?php echo $data['subject'] ?> > Lesson</p>
                </div>
                <div class="row mt-2 mb-1">
                    <div class="col-8-lg col-12-xs col-7-md pr-lg-2 mb-lg-3">
                        <h1 class="mb-2"><?php echo $data['title'] ?></h1>
                        <div class="tutor-detail-bar">
                            <div class="mini-profile-picture-holder" style="background: url(<?php echo URLROOT . "/public/uploads/users/" . $data['photourl'] ?>);">
                            </div>
                            <p class="tutor-name">
                                <?php echo $data['firstname'] . ' ' . $data['lastname'] ?>
                            </p><?php
                                if ($data['verified'] == '1') {
                                    echo '<i class="fa fa-check-circle text-success"></i>';
                                } ?>
                            <span>&nbsp; | </span>
                            <div class="stars">
                                <i class="fas text-orange fa-star"></i>
                                <i class="fas text-orange fa-star"></i>
                                <i class="fas text-orange fa-star"></i>
                                <i class="fas text-orange fa-star"></i>
                                <i class="fas text-gray fa-star"></i>
                            </div>
                            <p class="ratings text-orange"><?php if ($data['rating'] == 0) {
                                                                echo 'n/a';
                                                            } else {
                                                                echo $data['rating'];
                                                            } ?> <span class="text-gray">(<?php echo $data['jobs'] ?>)</span></p>
                        </div>
                        <div class="service-cover-container" style="background: url(<?php echo URLROOT . '/public/uploads/services/' . $data['image'] ?>);"></div>
                        <h2 class="mb-2 mt-3">About this service</h2>
                        <div class="text-gray">
                            <?php echo $data['description'] ?>
                        </div>

                        <!-- tutor-details-block  -->
                        <h3 class="mt-3">About the Tutor</h3>
                        <div class="tutor-details mt-2">
                            <div class="tutor-details__header">
                                <div class="profile-picture-holder" style="background: url(<?php echo URLROOT . "/public/uploads/users/" . $data['photourl'] ?>);">
                                </div>
                            </div>
                            <div class="tutor-details__body">
                                <p class="tutor-name font-md text-primary pointer"> <?php echo $data['firstname'] . ' ' . $data['lastname'] ?>&nbsp;<?php
                                                                                                                                                    if ($data['verified'] == '1') {
                                                                                                                                                        echo '<i class="fa fa-check-circle text-success"></i>';
                                                                                                                                                    } ?></p>
                                <p class="tutor-position font-sm text-gray"><?php echo $data['occupation'] . ', ' . $data['workplace'] ?></p>
                                <div class="tutor-ratings">
                                    <div class="stars">
                                        <i class="fas text-orange fa-star"></i>
                                        <i class="fas text-orange fa-star"></i>
                                        <i class="fas text-orange fa-star"></i>
                                        <i class="fas text-orange fa-star"></i>
                                        <i class="fas text-gray fa-star"></i>
                                    </div>
                                    <p class="ratings text-orange"><?php if ($data['rating'] == 0) {
                                                                        echo 'n/a';
                                                                    } else {
                                                                        echo $data['rating'];
                                                                    } ?> <span class="text-gray">(<?php echo $data['jobs'] ?>)</span></p>
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
                                <p class="tutor-bio text-gray"><?php echo $data['bio'] ?></p>
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
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i><?php echo $data['revisions'] ?> Revision Attempts.</p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i>Delivery within <?php echo $data['duration'] ?> days.</p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i><?php echo $data['medium'] ?> Medium</p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i><?php echo $data['subject'] ?></p>
                                    </li>
                                    <li>
                                        <p class="text-gray"><i class="fas text-primary fa-check"></i>Class conducted on <?php echo $data['method'] ?>.</p>
                                    </li>
                                </ul>
                                <img class="mt-2" src="
                                <?php
                                if ($data['method'] == 'zoom') {
                                    echo URLROOT . '/public/updated/img/services/zoom.webp';
                                } else if ($data['method'] == 'teams') {
                                    echo URLROOT . '/public/updated/img/services/teams.svg';
                                } else if ($data['method'] == 'google') {
                                    echo URLROOT . '/public/updated/img/services/meet.webp';
                                } else {
                                    echo URLROOT . '/public/updated/img/services/tutor.svg';
                                }
                                ?>" width="50" alt="method">
                                <?php if ($data['method'] == 'other') {
                                ?>
                                    <h3 class="text-gray mt-2">Please contact the tutor about the class method.</h3>
                                <?php
                                } ?>
                                <form action="<?php echo URLROOT . '/service/checkout' ?>" method="POST">
                                    <input type="hidden" name="gigid" value="<?php echo $data['gigid'] ?>" readonly>
                                    <input type="hidden" name="tuid" value="<?php echo $data['tuid'] ?>" readonly>
                                    <input type="hidden" name="title" value="<?php echo $data['title'] ?>" readonly>
                                    <input type="hidden" name="price" value="<?php echo $data['price'] ?>" readonly>
                                    <input type="hidden" name="photourl" value="<?php echo $data['photourl'] ?>" readonly>
                                    <input type="hidden" name="image" value="<?php echo $data['image'] ?>" readonly>
                                    <input type="hidden" name="medium" value="<?php echo $data['medium'] ?>" readonly>
                                    <input type="hidden" name="rating" value="<?php echo $data['rating'] ?>" readonly>
                                    <input type="hidden" name="duration" value="<?php echo $data['duration'] ?>" readonly>
                                    <input type="hidden" name="jobs" value="<?php echo $data['jobs'] ?>" readonly>
                                    <input type="hidden" name="level" value="<?php echo $data['level'] ?>" readonly>
                                    <input type="hidden" name="firstname" value="<?php echo $data['firstname'] ?>" readonly>
                                    <input type="hidden" name="lastname" value="<?php echo $data['lastname'] ?>" readonly>
                                    <input type="hidden" name="verified" value="<?php echo $data['verified'] ?>" readonly>
                                    <button class="continue-purchase" style="width: 100%;" type="submit">Continue (LKR <?php echo $data['price'] ?>)</button>
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