<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Found</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php session_start(); ?>
    <?php
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>
    <!-- 404 not found page  -->
    <main>
        <div class="container">
            <h1>Unknown Error</h1>
            <h2>Contact System Administrator</h2>
            <img src=<?php echo URLROOT . "/updated/img/errors.svg" ?> alt="Not Found" />
        </div>
    </main>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>