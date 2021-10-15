<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: /views
 */
?>
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>

<div class="fg-cover">
    <div>
        <h2 class="dark" style="width: 500px;"><?php echo $main["landing-title"] ?></h2>
        <p class="body-2 gray">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
        <div class="search-bar">
            <input class="subtitle-2" type="text" name="" id="" placeholder="Search...">
            <i class="fas fa-search gray"></i>
            <button class="btn btn-text bg-primary on-primary">learn</button>
        </div>
    </div>
    <div class="cover-image">
        <div class="top-tutors">
            <div class="title-bar"><i class="fas fa-certificate" style="color:#FFD064;"></i><span class="subtitle-1 bold">Top Rated Tutors</span></div>
            <div class="activity-bar">
                <div class="filled-bar"></div>
            </div>
            <div class="detail-bar"><span class="subtitle-2 gray">95% successful sessions</span></div>
        </div>
        <div class="circle">
        </div>
    </div>
</div>
<div class="fg-welcome">
    <div class="bg-welcome bg-rose"></div>
    <div class="button-tab overline bg-light-blue">future of smart learning</div>
    <div class="globe"><img src="<?php echo URLROOT . '/public/img/visitor/home/globe.svg' ?>" width="210" height="210" alt=""></div>
    <div class="welcome-title">
        <h2 style="font-weight: 500;" class="text-center">Welcome to <span class="transparent" style="-webkit-text-stroke: 1px var(--dark);"></br>flexguru</span></h2>
    </div>
    <div class="welcome-description w-50">
        <p class="text-center body-1 gray">Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area they are good at. </p>
    </div>

</div>
<?php
include APPROOT . '/views/includes/footer.php';
?>
<style>
    /* cover css  */
    .fg-cover {
        width: 100%;
        height: 460px;
        margin: 50px 0 80px 0;
        display: flex;
        /* align-items: center; */
        justify-content: space-between;
    }

    .fg-cover .cover-image {
        position: relative;
        width: 37%;
        padding: 20px;
    }

    @keyframes slideInFromLeft {
        0% {
            transform: translate(-50%, -800%);
        }

        100% {
            transform: translate(-50%, -50%);
        }
    }

    .fg-cover .cover-image .top-tutors {
        animation: 1s ease-out 0s 1 slideInFromLeft;
        position: absolute;
        width: 225px;
        height: 108px;
        left: 0;
        top: 55%;
        transform: translate(-50%, -50%);
        background: #FFFFFF;
        box-shadow: 0px 0px 12.6px rgba(0, 0, 0, 0.25);
        border-radius: 18px 0px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    .fg-cover .cover-image .top-tutors .title-bar {
        width: 82%;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .fg-cover .cover-image .top-tutors .activity-bar {
        width: 80%;
        background: var(--gray);
        border-radius: 8px;
        height: 8px;
    }

    .fg-cover .cover-image .top-tutors .activity-bar .filled-bar {
        width: 95%;
        background: var(--primary);
        border-radius: 8px;
        height: 100%;
    }

    .fg-cover .cover-image .top-tutors .detail-bar {}

    .fg-cover .cover-image .circle {
        height: 370px;
        width: 370px;
        background: url(<?php echo URLROOT . '/public/img/visitor/home/cover.webp' ?>);
        background-position: center;
        background-size: cover;
        border-radius: 50%;
    }

    .fg-cover .body-2 {
        width: 500px;
        margin: 25px 0 0 0;
    }

    .search-bar {
        position: relative;
        width: 520px;
        margin: 60px 0;
        padding: 0;
    }

    .search-bar i {
        position: absolute;
        font-size: 20px;
        left: 20px;
        top: 11px;
    }

    .search-bar button {
        border-radius: 0px 24px 24px 0px;
        width: 115px;
        height: 40px;
        margin: 0 0 1.6px -4px;
        border: 0;
        outline: 0;
    }

    .search-bar input[type="text"] {
        height: 40px;
        width: 400px;
        border-radius: 24px 0 0 24px;
        margin: 0;
        padding: 0 50px;
        border: 0.5px #acacac solid;
        outline: 0;

    }

    /* welcome section css  */
    .fg-welcome {
        position: relative;
        width: 100%;
        padding: 60px 0;
        margin: 50px 0 80px 0;
        display: flex;
        /* align-items: center; */
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    .fg-welcome .bg-welcome {
        position: absolute;
        width: 100vw;
        height: 100%;
        z-index: -99999;
    }

    .fg-welcome .button-tab {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        padding: 0 60px;
        border-radius: 24px;
    }
    .fg-welcome .globe{
        margin: 40px 0;
    }
    .fg-welcome .welcome-title {
        margin: 0 0 35px 0;
    }
</style>