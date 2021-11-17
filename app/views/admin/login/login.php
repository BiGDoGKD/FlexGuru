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
</style>
<div class="fg-login bold gray bg-background hidden">
    <h6 class="bold gray" style="margin: 23px 0 30px 0;">Admin Login</h6>
    <h3 class="primary"><?php echo $main["site-name"] ?></h3>
    <span class="subtitle-1">Smart Learning</span>
    <form action="<?php echo URLROOT; ?>/admin/verify">
        <div class="input-field"> <input type="text" name="username" id="username">
            <span class="placeholder">Username</span>
        </div>
        <div class="input-field"> <input type="password" name="password" id="password">
            <span class="placeholder">Password</span>
        </div>
        <button class="on-primary bg-primary bold w-100" style="font-size: 14px;">CONTINUE</button>
    </form>
</div>