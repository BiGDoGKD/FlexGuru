<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flexguru</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/navbar.php';
    ?>
    <div class="home-page">
        <div class="hero-section container pt-lg-3 pt-xs-2 pb-lg-2 pb-xs-1">
            <div class="row mt-2 flex-xs-col-reverse flex-lg-row">
                <div class="col-6-lg col-12-xs display-f flex-col justify-lg-content-center">
                    <h1 class="mt-xs-2 mt-xl-0">
                        Unleash your <br />smart learning<br />
                        opportunity
                    </h1>
                    <p class="text-gray">
                    Flexible and Easily accessible education for everyone.
                    </p>
                    <button onclick="location.href='<?php echo URLROOT ?>/marketplace'" class="bg-primary br-xs mt-2">Visit Marketplace</button>
                </div>
                <div class="col-6-lg col-12-xs pl-md-5 pr-md-5 pl-lg-0 pr-lg-0 display-f justify-lg-content-end justify-xs-content-center">
                    <img src=<?php echo URLROOT . '/public/updated/img/hero.svg' ?> alt="test" />
                </div>
            </div>
        </div>
        <div class="welcome-section container">
            <div class="row flex-col">
                <div class="col-12 display-f justify-content-center mt-xs-0 mt-lg-3">
                    <div class="title-box mt-xs-5">future of smart learning</div>
                </div>
                <div class="col-12">
                    <img class="mt-3 mb-1" src=<?php echo URLROOT . '/public/updated/img/world.svg' ?> alt="world" />
                </div>
                <div class="col-12">
                    <h1 class="mt-lg-3 mt-xs-2">Welcome to Flexguru</h1>
                </div>
                <div class="col-12 mt-2 mb-3">
                    <p class="text-gray">
                       FlexGuru get back innovation to education industry while proving all new features 
                       in a next level optimisation targetting our valuable assets...Students.
                    </p>
                </div>
            </div>
        </div>
        <div class="site-roles container mt-5 mb-5">
            <div class="row text-center">
                <div onclick="location.href='<?php echo URLROOT . '/info/tutor' ?>'" class="pointer text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-cyan">
                        <img src=<?php echo URLROOT . "/public/updated/img/roles/tutor.svg" ?> alt="Tutor" style="transform:scale(0.8)" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Tutor</h3>
                    <p class="text-gray">
                       Earner while providng services to the community.
                    </p>
                </div>
                <div onclick="location.href='<?php echo URLROOT . '/info/student' ?>'" class="pointer text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-lightnavy">
                        <img src=<?php echo URLROOT . '/public/updated/img/roles/student.svg' ?> alt="Student" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Student</h3>
                    <p class="text-gray">
                        Effective learner without wasting extra money or Time
                    </p>
                </div>
                <div onclick="location.href='<?php echo URLROOT . '/info/affiliates' ?>'" class="pointer text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-lightred">
                        <img src=<?php echo URLROOT . '/public/updated/img/roles/affiliate.svg' ?> alt="Affiliate" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Affiliate</h3>
                    <p class="text-gray">
                        Passive income generatoe while marketing good.
                    </p>
                </div>
                <div onclick="location.href='<?php echo URLROOT . '/info/help' ?>'" class="pointer text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-lightyellow">
                        <img src=<?php echo URLROOT . '/public/updated/img/roles/support.svg' ?> alt="Support" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Support</h3>
                    <p class="text-gray">
                        We are here any time for you.
                        To solve all your problems.
                    </p>
                </div>
            </div>
        </div>
        <div class="team-content container mt-lg-3 mb-lg-3 mt-xs-1 mb-xs-4">
            <div class="row">
                <div class="col-12-xs display-f justify-content-center mb-lg-1 mb-xs-2">
                    <h1 class="mt-lg-3 mt-xs-2 mb-lg-3 mb-xs-2 text-center">Look Who's Behind this Idea</h1>
                </div>
                <div class="col-6-lg col-12-xs display-f justify-lg-content-end justify-xs-content-center p-lg-3 mb-xs-2 mb-lg-0">
                    <img src=<?php echo URLROOT . '/public/updated/img/team.svg' ?> alt="test" />
                </div>
                <div class="col-12-xs col-6-lg p-lg-3 pl-lg-5 pt-lg-4">
                    <h2 class="mb-1 text-xs-center text-lg-start">Our Team Players</h2>
                    <p class="text-gray">
                        Lot of people were behind the idea of Flexguru. We are a team of developers, designers, and marketers.
                    </p>
                    <button onclick="location.href='<?php echo URLROOT ?>/info/team'" class="bg-primary br-xs mt-2">Meet Flexguru Team</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>