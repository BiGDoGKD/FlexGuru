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

<div class="admin-dashboard">
    <div class="admin-header">
        <div class="menu-bar">
            <div class="admin-title">
                <div class="circle">
                    <i class="fas fa-bars open-arrow"></i>
                </div>
                <h5 class="primary">Flexguru Admin</h5>
            </div>
            <div class="account-tab">
                <div class="display-picture">
                </div>
                <p class="subtitle-2 gray">Jane Cooper</p>
            </div>
        </div>
    </div>
    <style>
        .admin-dashboard {
            display: flex;
            flex-direction: column;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: 1s ease-in-out;
        }

        .dashboard-margin {
            margin-left: 300px;
        }

        .admin-header {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 80px;
            background: #FFF3F9;
        }

        .admin-header .menu-bar .admin-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* .admin-header .menu-bar .admin-title .circle:hover {
                height: 25px;
                width: 25px;
                border-radius: 50%;
                background: #acacac;
            } */

        .admin-header .menu-bar .admin-title i {
            font-size: 24px;
            margin: 0 20px 0 0;
            cursor: pointer;
            color: var(--gray);
        }

        .admin-header .account-tab {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 250px;
            height: 50px;
            border-radius: 24px;
            background: var(--on-primary);

        }

        .admin-header .display-picture {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #ededed;
            margin: 0 20px 0 0;
        }

        .admin-header .menu-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 77.6vw;
        }
    </style>