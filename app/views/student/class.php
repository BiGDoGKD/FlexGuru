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
                                                            Lesson
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
                                                            <?php echo $data['gig']->lesson ?>
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

                    <section class="class-status mt-1 mb-1 <?php
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
                                                            ?>">
                        <div class="status-text">
                            <p class="<?php
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
                                        ?>">
                                <?php echo $data['class']->status ?>
                            </p>
                        </div>
                    </section>


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
                    } else if ($data['class']->status == 'completed') {
                        ?><?php
                        } else if ($data['class']->status == 'expired') {
                            ?><?php
                            } else if ($data['class']->status == 'in-progress') {
                                ?> <section class="class-duration">
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

                        </section><?php
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
                                <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" alt="profile picture">
                                <div class="details">
                                    <span class="text-black name">Kesara Karannagoda</span>
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
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" alt="">
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
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" alt="">
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
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" alt="">
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
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" alt="">
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
                                    <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" alt="">
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
    <script>
        const countdown = () => {
            const countDate = <?php echo strtotime($data['class']->deadline) * 1000 ?>;
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