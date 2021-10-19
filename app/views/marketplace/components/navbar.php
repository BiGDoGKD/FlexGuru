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
 * PARENT FOLDER: components
 */
?>

<nav class="marketplace-nav bold">
    <div class="logo-content">
        <div class="hamburger">
            <div></div>
        </div>
        <a href="<?php echo URLROOT ?>/marketplace" class="logo dark">
            <h5><?php echo $main["site-name"] ?></h5>
        </a>
    </div>
    <ul class="nav-search">
        <form action="">
            <div class="search-field"> <input class="subtitle-1" type="text" name="search" id="search" placeholder="Search..." value="">
                <span class="subtitle-1 bold placeholder"><i class="fas fa-search"></i>Search...</span>
            </div>
            <button class="btn on-primary bg-primary btn-text">Search</button>
        </form>
    </ul>
    <ul class="nav-login">
        <li><a onclick="loginFunction()" class="primary pointer subtitle-2" style="margin-right:1.5vw;">Brody Peterson</a></li>
        <li><a href="<?php echo URLROOT ?>/registration/roles">
                <div class="profile-photo"></div>
                <style>
                    .profile-photo {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        background: url(<?php echo URLROOT . '/public/img/students/pexels.webp' ?>);
                        background-repeat: no-repeat;
                        background-size: cover;
                        /* background: #acacac; */
                    }
                </style>
            </a></li>
    </ul>
</nav>
<hr style="width: 99vw; height:0.1px; background:#eee; position:absolute; transform:translate(-50%,-50%); left:50%;">
