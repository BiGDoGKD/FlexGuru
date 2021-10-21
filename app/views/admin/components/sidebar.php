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
    <div class="admin-body">
        <div class="admin-sidebar close-sidebar">
            <div class="icon-bar">
                <span class="close-arrow close pointer"></span>
                <ul>
                    <li class="active"><i class="fas fa-columns"></i><span class="subtitle-1">Dashboard</span></li>
                    <li class="inactive"><i class="fas fa-user-circle"></i><span class="subtitle-1">Manage accounts</span></li>
                    <li class="inactive"><i class="fas fa-envelope"></i><span class="subtitle-1">Messages</span></li>
                    <li class="inactive"><i class="fas fa-chart-line"></i><span class="subtitle-1">Analytics</span></li>
                    <li class="inactive"><i class="fas fa-credit-card"></i><span class="subtitle-1">Payments</span></li>
                    <li class="inactive"><i class="fas fa-flag"></i><span class="subtitle-1">Reports</span></li>
                    <li class="inactive"><i class="fas fa-angry"></i><span class="subtitle-1">Complaints</span></li>
                    <li class="inactive"><i class="fas fa-plus"></i><span class="subtitle-1">Create</span></li>
                    <li class="inactive"><i class="fas fa-list-ul"></i><span class="subtitle-1">Verifications</span></li>
                    <li class="inactive"><i class="fas fa-cog"></i><span class="subtitle-1">Settings</span></li>
                    <li class="inactive"><i class="fas fa-sign-out-alt"></i><span class="subtitle-1">Exit</span></li>
                </ul>
            </div>
        </div>
        <style>
            .admin-body {
                position: relative;
                width: 100vw;
                height: 100%;
                display: flex;
            }

            .admin-sidebar {
                position: absolute;
                height: 100%;
                width: 300px;
                z-index: 2;
                top: 0;
                display: flex;
                justify-content: center;
                background: #FFF3F9;
                font-size: 20px;
            }

            .close-sidebar {
                left: -300;
                transition: ease-in-out 0.7s;
            }

            .open-sidebar {
                left: 0;
                transition: ease-in-out 0.7s;
            }

            .icon-bar .open-arrow {
                margin: 50px 0;
            }

            .admin-sidebar .icon-bar {
                margin-top: 30px;
            }

            .admin-sidebar .icon-bar ul {
                list-style: none;
                margin: 150px 0 0 0;
            }

            .admin-sidebar .icon-bar ul li {
                display: flex;
                text-decoration: none;
                align-items: center;
                margin: 0 0 20px 0;
                cursor: pointer;
            }

            .admin-sidebar .icon-bar ul li:hover {
                color: var(--primary);
            }

            .active {
                color: var(--primary);
            }

            .inactive {
                color: var(--gray);
            }

            .admin-sidebar .icon-bar ul li i {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0 8px 0 0;
                height: 36px;
                width: 36px;
            }
        </style>