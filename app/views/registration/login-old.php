<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Oct, 18, 2021
 * FILE TYPE: View
 * PARENT FOLDER: registration
 * @package flexguru
 */

?>
<!-- header  -->
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<!-- content  -->
<div class="login-content">
    <div class="login-background"></div>
    <div class="cover-image">
        <div class="cover">
            <img src="<?php echo URLROOT . '/public/img/visitor/login/login.svg' ?>" alt="">
        </div>
    </div>
    <div class="registration-login">
        <div class="fg-login bold gray bg-background" style="z-index: 2;">
            <h6 class="bold gray" style="margin: 23px 0 30px 0;">Login in to Flexguru</h6>
            <h3 class="primary"><?php echo $main["site-name"] ?></h3>
            <span class="subtitle-1">Smart Learning</span>
            <form action="<?php echo URLROOT; ?>/login" method="POST">
                <div class="input-field"> <input type="text" name="username" id="username" value="<?php echo $data['username'] ?>" required>
                    <span class="placeholder">Username</span>
                </div>
                <span class="form-errors on-error"><?php echo $data['usernameError'] ?></span>
                <div class="input-field"> <input type="password" name="password" id="password" value="<?php echo $data['username'] ?>" required>
                    <span class="placeholder">Password</span>
                </div>
                <span class="form-errors on-error"><?php echo $data['passwordError'] ?></span>
                <div class="input-field forgot-password">
                    <div class="remember-me"><input style="width:unset;" class="pointer" type="checkbox" name="" id=""> Remember Me
                    </div>
                    <div class="pointer primary">Forgot Password?</div>
                </div>
                <button class="on-primary bg-primary bold w-100" style="font-size: 14px;">CONTINUE</button>
                <hr class="gray w-100" style="margin: 20px 0; height:1px">
                <div class="join-now"><span>Not a member yet?</span><span class="primary pointer">Join now</span></div>
            </form>
        </div>
    </div>
</div>
<!-- content-end  -->

<!-- css styling start -->
<style>
    .login-content {
        position: relative;
        width: 100%;
        height: 640px;
        display: flex;
    }

    .login-content .input-field input {
        width: 310px;
    }

    .login-content .login-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 100%;
        background: var(--primary);
        width: 100vw;
        z-index: -1;
    }

    .login-content .cover-image {
        position: relative;
        width: 60%;
    }

    .login-content .cover-image .cover {
        position: absolute;
        top: 50%;
        left: 40%;
        width: 60%;
        transform: translate(-50%, -50%);
    }

    .login-content .cover-image .cover img {
        width: 100%;
    }

    .login-content .registration-login {
        width: 40%;
        display: flex;
        align-items: flex-end;
    }

    .registration-login {
        position: relative;
    }
</style>
<!-- css styling ends -->

<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>