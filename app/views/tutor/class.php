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
    <main class="class">
        <div class="base-container container mt-2">
            <div class="row">
                <div class="col-12-xs col-10-lg">
                    <div class="order-box">
                        <div class="order-box__header">
                            <div class="order-box__header__details">
                                <h1 class="text-primary"><i class="fas fa-users-class"></i> Class #FLEXGURU00<?php echo $data['class']->classid ?></h1>
                                <p class="order-box__header__details__student-id font-lg text-gray">student: @<?php echo $data['student']->username ?> | <span class="order-box__header__details__date"><?php echo $data['class']->purchasedate ?></span></p>
                            </div>
                            <div class="order-box__header__price">
                                <h1 class="font-xl">LKR <?php echo $data['class']->fee ?>.00</h1>
                            </div>
                        </div>
                        <div class="order-box__body">
                            <div class="table-home pt-3 pb-3">
                                <div class="table-container">
                                    <div class="table-box">
                                        <div class="table-self">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            Gig ID
                                                        </th>
                                                        <th scope="col">
                                                            Title
                                                        </th>
                                                        <th scope="col">
                                                            Subject
                                                        </th>
                                                        <th scope="col">
                                                            Revisions
                                                        </th>
                                                        <th scope="col">
                                                            Duration
                                                        </th>
                                                        <th scope="col">
                                                            Amount
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="col">
                                                            <?php echo $data['gig']->gigid ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $data['gig']->title ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $data['gig']->subject ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $data['gig']->revisions ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $data['gig']->duration ?> days
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $data['class']->fee ?>.00
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" scope="col">

                                                        </td>
                                                        <td scope="col"></td>
                                                        <td colspan="2" scope="col">
                                                            <button class="btn">Total: <?php echo $data['class']->fee ?></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Class Status  -->
                    <section class="class-status mt-1 mb-1 <?php

                                                            if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                echo 'border-info';
                                                            } else {
                                                                if ($data['class']->status == 'pending') {
                                                                    echo 'border-info';
                                                                } else if ($data['class']->status == 'cancelled') {
                                                                    echo 'border-error';
                                                                } else if ($data['class']->status == 'completed') {
                                                                    echo 'border-success';
                                                                } else if ($data['class']->status == 'expired') {
                                                                    echo 'border-error';
                                                                } else if ($data['class']->status == 'in-progress') {
                                                                    echo 'border-primary';
                                                                }
                                                            }

                                                            ?>">
                        <div class="status-text">

                            <p class="<?php

                                        if ($data['class']->reviewphase && !$data['class']->sturating) {
                                            echo 'text-info';
                                        } else {
                                            if ($data['class']->status == 'pending') {
                                                echo 'text-info';
                                            } else if ($data['class']->status == 'cancelled') {
                                                echo 'text-error';
                                            } else if ($data['class']->status == 'completed') {
                                                echo 'text-success';
                                            } else if ($data['class']->status == 'expired') {
                                                echo 'text-error';
                                            } else if ($data['class']->status == 'in-progress') {
                                                echo 'text-primary';
                                            }
                                        }

                                        ?>">
                                <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                    echo 'IN REVIEW PHASE';
                                } else {
                                    echo $data['class']->status;
                                } ?>
                            </p>
                        </div>
                    </section>



                    <?php if ($data['class']->reviewphase && !$data['class']->sturating && $data['class']->turating) { ?>
                        <!-- Review Section Starts  -->
                        <section class="review-section mt-3 mb-3">
                            <div class="review-section__header">
                                <h1 class="text-black font-xl">Add a Review</h1>
                            </div>
                            <div class="review-section__body">
                                <div class="review-section__body__rating">
                                    <div class="stars font-xs-lg font-md-xl">
                                        <a><i class="fas fa-star"></i></a>
                                        <a><i class="fas fa-star"></i></a>
                                        <a><i class="fas fa-star"></i></a>
                                        <a><i class="fas fa-star"></i></a>
                                        <a><i class="fas fa-star"></i></a>
                                    </div>
                                </div>
                                <div class="review-section__body__review">
                                    <form class="form-control" method="POST" action="<?php if ($_SESSION['userdata']['role'] == 'st') {
                                                                                            echo URLROOT . '/student/feedback/' . $data['class']->classid;
                                                                                        } else if ($_SESSION['userdata']['role'] == 'tu') {
                                                                                            echo URLROOT . '/tutor/feedback/' . $data['class']->classid;
                                                                                        } ?>" id="feedbackForm">
                                        <div class="form-group col-12-xs">
                                            <input class="form-control star-count" type="hidden" name="<?php if ($_SESSION['userdata']['role'] == 'st') {
                                                                                                            echo 'turating';
                                                                                                        } else if ($_SESSION['userdata']['role'] == 'tu') {
                                                                                                            echo 'sturating';
                                                                                                        } ?>" value="" required>
                                            <p class="form-control form-feedback text-error">

                                            </p>
                                        </div>

                                        <div class="form-group col-12-xs">
                                            <label for="firstname">Feedback <span class="text-error">*</span></label>
                                            <textarea class="form-control" style="resize: none;" placeholder="Write your feedback here..." maxlength="2000" minlength="10" name="<?php if ($_SESSION['userdata']['role'] == 'st') {
                                                                                                                                                                                        echo 'tureview';
                                                                                                                                                                                    } else if ($_SESSION['userdata']['role'] == 'tu') {
                                                                                                                                                                                        echo 'streview';
                                                                                                                                                                                    } ?>" id="<?php if ($_SESSION['userdata']['role'] == 'st') {
                                                                                                                                                                                                    echo 'tureview';
                                                                                                                                                                                                } else if ($_SESSION['userdata']['role'] == 'tu') {
                                                                                                                                                                                                    echo 'streview';
                                                                                                                                                                                                } ?>" cols="30" rows="10" required></textarea>
                                            <p class="form-control form-feedback text-error">

                                            </p>
                                        </div>
                                        <div class="form-group col-12-xs">
                                            <button type="submit" id="submit" name="submit" class="form-control">Submit Your Feeback</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </section>
                        <!-- Review Sections Ends  -->
                    <?php
                    }
                    ?>


                    <!-- Action Buttons  -->

                    <section class="class-action-buttons mt-1 mb-1">
                        <div class="action-buttons">
                            <?php
                            if ($data['class']->status == 'pending') {
                                echo '<a href="' . URLROOT . '/tutor/acceptclass/' . $data['class']->classid . '" class="btn bg-success border-success mb-1 display-f justify-content-center row">ACCEPT</a>';
                                echo '<a href="' . URLROOT . '/tutor/cancel/' . $data['class']->classid . '" class="btn bg-error border-error display-f justify-content-center row">CANCEL</a>';
                            } else if ($data['class']->status == 'in-progress' && !$data['class']->reviewphase) {
                                echo '<a href="' . URLROOT . '/tutor/askforreview/' . $data['class']->classid . '" class="btn display-f justify-content-center row">ASK FOR REVIEW</a>';
                            }
                            ?>
                        </div>
                    </section>
                    <!-- Action Button Ends  -->

                    <!-- Countdown Timer  -->

                    <?php
                    if ($data['class']->status == 'pending') {
                    ?>
                        <section class="class-duration">
                            <div class="countdown-timer">

                                <div class="countdown">
                                    <div class="container-day">
                                        <h3 class="day">Time</h3>
                                        <h3>Day</h3>
                                    </div>
                                    <h3 class="day">:</h3>
                                    <div class="container-hour">
                                        <h3 class="hour">Time</h3>
                                        <h3>Hour</h3>
                                    </div>
                                    <h3 class="day">:</h3>
                                    <div class="container-minute">
                                        <h3 class="minute">Time</h3>
                                        <h3>Minute</h3>
                                    </div>
                                    <h3 class="day">:</h3>
                                    <div class="container-second">
                                        <h3 class="second">Time</h3>
                                        <h3>Second</h3>
                                    </div>
                                </div>
                            </div>

                        </section>
                    <?php

                    } else if ($data['class']->status == 'cancelled') {
                    ?>
                    <?php
                    } else if ($data['class']->status == 'completed' && !$data['class']->sturating) {
                    ?>
                        <section class="class-duration">
                            <div class="countdown-timer">

                                <div class="countdown">
                                    <div class="container-day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                    echo 'text-error';
                                                                } ?>">
                                        <h3 class="day">Time</h3>
                                        <h3>Day</h3>
                                    </div>
                                    <h3 class="day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                        echo 'text-error';
                                                    } ?>">:</h3>
                                    <div class="container-hour <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                    echo 'text-error';
                                                                } ?>">
                                        <h3 class="hour">Time</h3>
                                        <h3>Hour</h3>
                                    </div>
                                    <h3 class="day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                        echo 'text-error';
                                                    } ?>">:</h3>
                                    <div class="container-minute <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                        echo 'text-error';
                                                                    } ?>">
                                        <h3 class="minute">Time</h3>
                                        <h3>Minute</h3>
                                    </div>
                                    <h3 class="day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                        echo 'text-error';
                                                    } ?>">:</h3>
                                    <div class="container-second <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                        echo 'text-error';
                                                                    } ?>">
                                        <h3 class="second">Time</h3>
                                        <h3>Second</h3>
                                    </div>
                                </div>
                            </div>

                        </section>
                    <?php
                    } else if ($data['class']->status == 'expired') {
                    ?>

                        <!-- IF IT IN_PROGRESS AND NOT REVIEWPHASE THEN SHOW THE TIMER GRAY AND DEADLINE  -->
                    <?php
                    } else if ($data['class']->status == 'in-progress' && !$data['class']->reviewphase) {
                    ?>
                        <section class="class-duration">
                            <div class="countdown-timer">

                                <div class="countdown">
                                    <div class="container-day">
                                        <h3 class="day">Time</h3>
                                        <h3>Day</h3>
                                    </div>
                                    <h3 class="day">:</h3>
                                    <div class="container-hour">
                                        <h3 class="hour">Time</h3>
                                        <h3>Hour</h3>
                                    </div>
                                    <h3 class="day">:</h3>
                                    <div class="container-minute">
                                        <h3 class="minute">Time</h3>
                                        <h3>Minute</h3>
                                    </div>
                                    <h3 class="day">:</h3>
                                    <div class="container-second">
                                        <h3 class="second">Time</h3>
                                        <h3>Second</h3>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <!-- IF IT IN_PROGRESS AND REVIEWPHASE THEN SHOW THE TIMER RED AND REVIEW DEADLINE  -->
                    <?php
                    } else if ($data['class']->status == 'in-progress' && $data['class']->reviewphase) {
                    ?>
                        <section class="class-duration">
                            <div class="countdown-timer">

                                <div class="countdown">
                                    <div class="container-day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                    echo 'text-error';
                                                                } ?>">
                                        <h3 class="day">Time</h3>
                                        <h3>Day</h3>
                                    </div>
                                    <h3 class="day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                        echo 'text-error';
                                                    } ?>">:</h3>
                                    <div class="container-hour <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                    echo 'text-error';
                                                                } ?>">
                                        <h3 class="hour">Time</h3>
                                        <h3>Hour</h3>
                                    </div>
                                    <h3 class="day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                        echo 'text-error';
                                                    } ?>">:</h3>
                                    <div class="container-minute <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                        echo 'text-error';
                                                                    } ?>">
                                        <h3 class="minute">Time</h3>
                                        <h3>Minute</h3>
                                    </div>
                                    <h3 class="day <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                        echo 'text-error';
                                                    } ?>">:</h3>
                                    <div class="container-second <?php if ($data['class']->reviewphase && !$data['class']->sturating) {
                                                                        echo 'text-error';
                                                                    } ?>">
                                        <h3 class="second">Time</h3>
                                        <h3>Second</h3>
                                    </div>
                                </div>
                            </div>

                        </section>
                    <?php
                    }
                    ?>

                    <?php if ($_SESSION['userdata']['role'] == 'st') { ?>
                        <section class="chat-area">
                            <header>
                                <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['tutor']->photourl ?>" alt="profile picture">
                                <div class="details">
                                    <span class="text-black name"><?php echo $data['tutor']->firstname . ' ' . $data['tutor']->lastname ?></span>
                                    <p class="text-gray font-sm"><i class="fas text-success fa-circle"></i>&nbsp;Active Now </p>
                                </div>
                            </header>
                            <div class="chat-box">
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['tutor']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['tutor']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['tutor']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['tutor']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['tutor']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                            </div>
                            <form action="#" class="typing-area">
                                <input type="text" placeholder="Type a message here...">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </section>
                    <?php   } else if ($_SESSION['userdata']['role'] == 'tu') {
                    ?>
                        <section class="chat-area">
                            <header>
                                <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['student']->photourl ?>" alt="profile picture">
                                <div class="details">
                                    <span class="text-black name"><?php echo $data['student']->firstname . ' ' . $data['student']->lastname ?></span>
                                    <p class="text-gray font-sm"><i class="fas text-success fa-circle"></i>&nbsp;Active Now </p>
                                </div>
                            </header>
                            <div class="chat-box">
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['student']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['student']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['student']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['student']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                                <div class="chat outgoing">
                                    <div class="details">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, praesentium culpa esse debitis aliquam ut fuga. Dolore nobis exercitationem consectetur.</p>
                                    </div>
                                </div>
                                <div class="chat incoming">
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $data['student']->photourl ?>" alt="">
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ipsam!</p>
                                    </div>
                                </div>
                            </div>
                            <form action="#" class="typing-area">
                                <input type="text" placeholder="Type a message here...">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </section>
                    <?php
                    } ?>


                </div>
                <div class="col-12-xs col-2-lg"></div>
            </div>
        </div>
    </main>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>

    <!-- all scripts goes here  -->
    <script type="module" src="<?php echo URLROOT . '/public/updated/js/app.js' ?>"></script>
    <script>
        const countdown = () => {
            const countDate = <?php if ($data['class']->reviewphase && !$data['class']->sturating && $data['class']->turating) {
                                    echo strtotime($data['class']->reviewdeadline) * 1000;
                                } else if ($data['class']->status == 'in-progress' && !$data['class']->reviewphase) {
                                    echo strtotime($data['class']->deadline) * 1000;
                                } else if ($data['class']->status == 'in-progress' && $data['class']->reviewphase) {
                                    echo strtotime($data['class']->reviewdeadline) * 1000;
                                } ?>;
            console.log(countDate);
            const now = new Date().getTime();
            const gap = countDate - now;

            // time works
            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;

            // Calculate days, hours, minutes and seconds
            const textDay = Math.floor(gap / day);
            const textHour = Math.floor((gap % day) / hour);
            const textMinute = Math.floor((gap % hour) / minute);
            const textSecond = Math.floor((gap % minute) / second);

            // Display the result
            document.querySelector(".day").innerText = textDay;
            document.querySelector(".hour").innerText = textHour;
            document.querySelector(".minute").innerText = textMinute;
            document.querySelector(".second").innerText = textSecond;
        };

        setInterval(countdown, 1000);
    </script>
    <!-- scripts ends -->

</body>

</html>