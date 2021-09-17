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
    <h2 class="dark" style="width: 500px;"><?php echo $main["landing-title"] ?></h2>
    <p class="body-2 gray">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
    <div class="search-bar">
        <input class="subtitle-2" type="text" name="" id="" placeholder="Search...">
        <i class="fas fa-search gray"></i>
        <button class="btn btn-text bg-primary on-primary">learn</button>
    </div>
</div>
<?php
include APPROOT . '/views/includes/footer.php';
?>
<style>
    .fg-cover {
        width: 100%;
        height: 460px;
        margin: 50px 0 80px 0;
    }

    .fg-cover .body-2{
        width: 500px;
        margin: 25px 0 0 0;
    }

    .search-bar {
        position: relative;
        width: 520px;
        margin: 60px 0;
        padding: 0;
    }

    .search-bar i{
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
</style>