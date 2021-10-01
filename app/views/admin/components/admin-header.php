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
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">
</head>

<body>
    <div class="admin-header">
        <div class="menu-bar">
            <div class="admin-title">
                <h5 class="on-primary">Flexguru Admin</h5>
            </div>
            <div class="account-tab">
                <div class="display-picture">
                </div>
                <p class="subtitle-2 gray">Jane Cooper</p>
            </div>
        </div>
    </div>

    <style>
        .admin-header{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 80px;
            background: var(--primary);
        }

        .admin-header .account-tab{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 250px;
            height: 50px;
            border-radius: 24px;
            background:var(--on-primary);

        }

        .admin-header .display-picture{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #ededed;
            margin: 0 20px 0 0;
        }

        .admin-header .menu-bar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 77.6vw;
        }
    </style>