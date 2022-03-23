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
                                <h1 class="text-primary"><i class="fas fa-users-class"></i> Class #FLEXGURU0002</h1>
                                <p class="order-box__header__details__student-id font-lg text-gray">student: @peter99 | <span class="order-box__header__details__date">March 22, 2022</span></p>
                            </div>
                            <div class="order-box__header__price">
                                <h1 class="font-xl">LKR 2000.00</h1>
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
                                                            45
                                                        </td>
                                                        <td scope="col">
                                                            I will teach you bla bla bla
                                                        </td>
                                                        <td scope="col">
                                                            Mathematics
                                                        </td>
                                                        <td scope="col">
                                                            Algebra
                                                        </td>
                                                        <td scope="col">
                                                            10 days
                                                        </td>
                                                        <td scope="col">
                                                            2000.00
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="4" scope="col">

                                                        </td>
                                                        <td scope="col"></td>
                                                        <td colspan="2" scope="col">
                                                            <button class="btn">Total: 2000</button>
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
                        <!-- <img class="waiting" src="<?php echo URLROOT . '/public/updated/img/class.svg' ?>" alt="class"> -->
                    </section>

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

                </div>
                <div class="col-12-xs col-2-lg"></div>
            </div>
        </div>
    </main>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>

    <!-- all scripts goes here  -->
    <script src="<?php echo URLROOT . '/public/updated/js/app.js' ?>"></script>
    <!-- scripts ends -->

</body>

</html>