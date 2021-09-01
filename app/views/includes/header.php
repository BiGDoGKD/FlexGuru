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
 * PARENT FOLDER: includes
 */
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>


    <!-- FONT AWESOME CSS FOR ICON PURPOSES  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- ALL CSS STYLESHEETS GOES HERE  -->
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys.css' ?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/visitor/navbar-visitor.css' ?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/visitor/login.css' ?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/visitor/sidenav-visitor.css' ?>">
</head>

<body>
    <div class="flex-body">
        <?php include APPROOT . '/views/includes/navigation-visitor.php'; ?>