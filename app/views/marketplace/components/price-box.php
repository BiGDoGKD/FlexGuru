<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/marketplace/price-box.css' ?>">
<div class="price-box">
    <div class="title">
        <h5>Service Details</h5>
    </div>
    <hr style="margin: 0 0 20px 0;">
    <div class="details">
        <ul>
            <li><i class="fas fa-check"></i>24 hours</li>
            <li><i class="fas fa-check"></i>10 MCQ's will be discussed</li>
            <li><i class="fas fa-check"></i>2 Essay Questions discussed</li>
            <li><i class="fas fa-check"></i>Tutorials will be provided</li>
        </ul>
    </div>

    <?php
    if (!isset($_SESSION['userdata']['role'])) {
    ?>
        <div class="continue"><button onclick="location.href='<?php echo URLROOT . '/login' ?>'" class="price-box-button">Continue (LRK 1000)</button></div>
        <div class="contact"><button onclick="location.href='<?php echo URLROOT . '/login' ?>'" class="price-box-button">Contact Tutor</button></div>
    <?php
    } else {
    ?>
        <div class="continue"><button onclick="location.href='<?php echo URLROOT . '/marketplace/payment' ?>'" class="price-box-button">Continue (LRK 1000)</button></div>
        <div class="contact"> <button class="price-box-button">Contact Tutor</button></div>
    <?php
    }
    ?>


</div>