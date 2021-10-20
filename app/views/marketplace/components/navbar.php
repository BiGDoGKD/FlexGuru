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
        <?php
        if (!isset($_SESSION['userdata']['role'])) {
        ?>
            <a href="<?php echo URLROOT ?>" class="logo dark">
                <h5><?php echo $main["site-name"] ?></h5>
            </a>
        <?php
        } else {
        ?>
            <a href="<?php echo URLROOT ?>/marketplace" class="logo dark">
                <h5><?php echo $main["site-name"] ?></h5>
            </a>
        <?php
        }
        ?>

    </div>
    <ul class="nav-search">
        <form action="">
            <div class="search-field"> <input class="subtitle-1" type="text" name="search" id="search" placeholder="Search..." value="">
                <span class="subtitle-1 bold placeholder"><i class="fas fa-search"></i>Search...</span>
            </div>
            <button class="btn on-primary bg-primary btn-text">Search</button>
        </form>
    </ul>

    <?php
    if (!isset($_SESSION['userdata']['role'])) {
    ?>
        <ul class="nav-login">
            <li><a onclick="location.href='<?php echo URLROOT . '/login' ?>'" class="gray pointer subtitle-2" style="margin-right:1.5vw;">Login</a></li>
            <li><a href="<?php echo URLROOT ?>/registration/roles"><button class="btn-text btn bg-primary on-primary ">Sign up</button></a></li>
        </ul>
    <?php
    } else {
    ?>
        <ul class="nav-login">
            <li><a class="primary pointer subtitle-2" style="margin-right:1.5vw;"><?php echo $_SESSION['userdata']['firstname'] . ' ' . $_SESSION['userdata']['lastname'] ?></a></li>
            <li><a href="<?php echo URLROOT ?>/registration/roles">
                    <div class="profile-photo"></div>
                </a>
                <div class="dropdown-content">
                    <ul>
                        <a href="<?php
                                    switch ($_SESSION['userdata']['role']) {
                                        case 'st':
                                            echo URLROOT . '/student/profile';
                                            break;
                                        case 'tu':
                                            echo URLROOT . '/tutor/profile';
                                            break;
                                        case 'af':
                                            echo URLROOT . '/affiliate/profile';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>">
                            <li>Profile</li>
                        </a>
                        <a href="<?php
                                    switch ($_SESSION['userdata']['role']) {
                                        case 'st':
                                            echo URLROOT . '/student/settings';
                                            break;
                                        case 'tu':
                                            echo URLROOT . '/tutor/settings';
                                            break;
                                        case 'af':
                                            echo URLROOT . '/affiliate/settings';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>">
                            <li>Settings</li>
                        </a>
                        <a href="<?php
                                    switch ($_SESSION['userdata']['role']) {
                                        case 'st':
                                            echo URLROOT . '/support/student';
                                            break;
                                        case 'tu':
                                            echo URLROOT . '/support/tutor';
                                            break;
                                        case 'af':
                                            echo URLROOT . '/support/affiliate';
                                            break;
                                        default:
                                            break;
                                    }
                                    ?>">
                            <li>Settings</li>
                        </a>
                        <a href="<?php echo URLROOT ?>/login/logout">
                            <li>Logout</li>
                        </a>
                    </ul>
                </div>
                <style>
                    .nav-login {
                        position: relative;
                    }

                    .profile-photo {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        background: url(<?php echo URLROOT . '/public/img/students/pexels.webp' ?>);
                        background-repeat: no-repeat;
                        background-size: cover;
                        /* background: #acacac; */
                    }

                    .nav-login:hover .dropdown-content {
                        display: block;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        border: 1px solid #ededed;
                        right: 0;
                        z-index: 2;
                        min-width: 150px;
                        background: #fff;
                        color: var(--gray);
                        padding: 0 20px;
                    }

                    .dropdown-content ul li {
                        margin: 15px 0;
                        list-style: none;
                    }

                    .dropdown-content ul li:hover {
                        cursor: pointer;
                        color: var(--primary);
                    }

                    .profile-photo:hover .dropdow-menu {
                        display: block;
                    }
                </style>
            </li>
        </ul>
    <?php
    }
    ?>
</nav>
<hr style="width: 99vw; height:0.1px; background:#eee; position:absolute; transform:translate(-50%,-50%); left:50%;">