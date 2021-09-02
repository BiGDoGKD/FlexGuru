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
        <a href="<?php echo URLROOT ?>/pages/index" class="logo dark"><?php echo $main["site-name"] ?></a>
    </div>
    <ul class="nav-info">

        <?php
        foreach ($navigation as $value) {
        ?>
            <li><a class="gray" href="<?php echo URLROOT ?>/<?php echo $value["url"] ?>"><?php echo $value["menu"] ?></a></li>
        <?php
        } ?>
    </ul>
    <ul class="nav-login">
        <li><a onclick="loginFunction()" class="gray pointer">Login</a></li>
        <li><a href="<?php echo URLROOT ?>/registration/roles"><button class="btn bg-primary on-primary">Sign up</button></a></li>
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
        foreach ($navigation as $value) {
        ?>
            <li><a class="gray" href="<?php echo URLROOT ?>/<?php echo $value["url"] ?>"><?php echo $value["menu"] ?></a></li>
        <?php
        } ?>
    </ul>
</div>
<div class="dark-overlay close-overlay">
    <div class="dark-overlay-logo logo bold on-primary hidden" style="margin-top:35px;margin-left: 11.7vw;"><?php echo $main["site-name"] ?></div>
</div>
<?php include APPROOT . '/views/components/login.php' ?>