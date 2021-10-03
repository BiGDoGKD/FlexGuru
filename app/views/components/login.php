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
<div class="fg-login bold gray bg-background hidden">
    <h6 class="bold gray" style="margin: 23px 0 30px 0;">Login in to Flexguru</h6>
    <h3 class="primary"><?php echo $main["site-name"] ?></h3>
    <span class="subtitle-1">Smart Learning</span>
    <form action="">
        <div class="input-field"> <input type="text" name="username" id="username" required>
            <span class="placeholder">Username</span>
        </div>
        <span class="form-errors"></span>
        <div class="input-field"> <input type="password" name="password" id="password" required>
            <span class="placeholder">Password</span>
        </div>
        <span class="form-errors"></span>
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