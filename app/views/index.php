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
        <div class="hero-section container">
            <div class="row mt-2 flex-xs-col-reverse flex-lg-row">
                <div class="col-6-lg col-12-xs display-f flex-col justify-lg-content-center">
                    <h1 class="mt-xs-2 mt-xl-0">
                        Unleash your <br />smart learning<br />
                        opportunity
                    </h1>
                    <p class="text-gray">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi,
                        sunt. Hic delectus dicta ut suscipit illum adipisci veniam illo
                        vero!
                    </p>
                    <button class="bg-primary br-xs mt-2">Visit Marketplace</button>
                </div>
                <div class="col-6-lg col-12-xs display-f justify-lg-content-end justify-xs-content-center">
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
                    <h1 class="mt-lg-3 mt-xs-2">Welcomet to Flexguru</h1>
                </div>
                <div class="col-12 mt-2 mb-3">
                    <p class="text-gray">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                        nobis, totam minus illum deleniti sint, expedita hic quo
                        excepturi, exercitationem molestiae libero dignissimos! Saepe,
                        dolor consectetur autem quibusdam recusandae veritatis quaerat.
                        Reiciendis nostrum eligendi praesentium error ipsam nihil
                        dignissimos velit ex perferendis, facilis, sequi consectetur
                        libero accusamus cupiditate possimus ad aperiam dolorem modi
                        dolore maxime! Vel quas ipsam incidunt ab?
                    </p>
                </div>
            </div>
        </div>
        <div class="site-roles container mt-5 mb-5">
            <div class="row text-center">
                <div class="text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-cyan">
                        <img src=<?php echo URLROOT . "/public/updated/img/roles/tutor.svg" ?> alt="Tutor" style="width: 42%" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Tutor</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi,
                        aliquam!
                    </p>
                </div>
                <div class="text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-lightnavy">
                        <img src=<?php echo URLROOT . '/public/updated/img/roles/student.svg' ?> alt="Student" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Student</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi,
                        aliquam!
                    </p>
                </div>
                <div class="text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-lightred">
                        <img src=<?php echo URLROOT . '/public/updated/img/roles/affiliate.svg' ?> alt="Affiliate" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Affiliate</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi,
                        aliquam!
                    </p>
                </div>
                <div class="text-center col-12-sm col-3-lg display-f flex-col p-2 align-items-center justify-content-center">
                    <div class="role display-f justify-content-center align-items-center br-sm bg-lightyellow">
                        <img src=<?php echo URLROOT . '/public/updated/img/roles/support.svg' ?> alt="Support" />
                    </div>
                    <h3 class="mt-2 mb-1">Flexguru Support</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi,
                        aliquam!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>