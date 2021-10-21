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
<nav class="visitor-nav bold">
    <div class="logo-content">
        <div class="hamburger">
            <div></div>
        </div>
        <a href="<?php echo URLROOT ?>/pages/index" class="logo dark">
            <h5><?php echo $main["site-name"] ?></h5>
        </a>
    </div>
    <ul class="nav-info">

        <?php
        foreach ($st_navigation as $value) {
        ?>
            <li><a class="gray subtitle-2" href="<?php echo URLROOT ?>/<?php echo $value["url"] ?>"><?php echo $value["menu"] ?></a></li>
        <?php
        } ?>
    </ul>
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
                        <li>Support</li>
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

                .nav-login .profile-photo {
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

                .nav-login .dropdown-content {
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

                .nav-login .dropdown-content ul li {
                    margin: 15px 0;
                    list-style: none;
                }

                .nav-login .dropdown-content ul li:hover {
                    cursor: pointer;
                    color: var(--primary);
                }

                .nav-login .profile-photo:hover .dropdow-menu {
                    display: block;
                }
            </style>
        </li>
    </ul>
</nav>
<hr style="width: 99vw; height:0.1px; background:#ededed; position:absolute; transform:translate(-50%,-50%); left:50%;">
<div class="hamburger-menu hamburgerMenu-close">
    <div class="hamburger-close">
    </div>
    <ul>
        <li><a href="#"><button style="font-size:24px; padding: 5px 30px; margin:30px 0 10px;" class="btn bg-primary on-primary bold">Sign up</button></a></li>
        <hr style="width:50%; margin:20px 0 0 58px;">
        <li><a href="#" class="gray">Login</a></li>
        <?php
        foreach ($st_navigation as $value) {
        ?>
            <li><a class="gray" href="<?php echo URLROOT ?>/<?php echo $value["url"] ?>"><?php echo $value["menu"] ?></a></li>
        <?php
        } ?>
    </ul>
</div>