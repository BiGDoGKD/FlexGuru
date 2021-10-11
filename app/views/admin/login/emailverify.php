<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: components
 */


$str_navigation = file_get_contents(APPROOT . '/data/navigation-details.json');
$str_sitedetails = file_get_contents(APPROOT . '/data/site-details.json');
$str_footermenu = file_get_contents(APPROOT . '/data/footer-menu.json');
$str_district = file_get_contents(APPROOT . '/data/district.json');
$navigation = json_decode($str_navigation, true);
$footermenu = json_decode($str_footermenu, true);
$main = json_decode($str_sitedetails, true);
$district = json_decode($str_district, true);

?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/visitor/login.css' ?>">
<style>
    body {
        background: var(--primary);
    }

    .fg-verify {
        position: absolute;
        z-index: 9999;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 250px;
        width: 400px;
        font-size: 14px;
        border-radius: 24px;
    }
</style>
<div class="fg-login fg-verify bold gray bg-background hidden">
    <h6 class="bold gray" style="margin: 23px 0 30px 0;">Enter the one time password</h6>
    <form action="<?php echo URLROOT; ?>/admin/verify">
        <div class="input-field" style="margin:0;"> <input type="password" name="password" id="password" required>
            <span class="placeholder">OTP</span>
        </div>

        <button class="on-primary bg-primary bold w-100" style="font-size: 14px;">CONTINUE</button>
    </form>
</div>