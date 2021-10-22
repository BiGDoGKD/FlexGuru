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
 * PARENT FOLDER: pages
 */

?>
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<div class="head">
    <h1>How Does It Work</h1>
    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />
        deserunt mollit anim id est laborum.</p>
</div>
<div class="card-container">
    <div class="cards-row">
        <div class="card background">
            <img src="<?php echo URLROOT . '/public/img/visitor/book-64.png' ?>" alt="book icon">
            <h3>Students</h3>
            <p>You can now buy products from USA stores that do not ship internationally. How? Place an order on our website and we'll buy the items on your behalf and ship them to your international address.</p>
        </div>
        <div class="card">
            <img src="<?php echo URLROOT . '/public/img/visitor/book-64.png' ?>" alt="book icon">
            <h3>Tutors</h3>
            <p>You can now buy products from USA stores that do not ship internationally. How? Place an order on our website and we'll buy the items on your behalf and ship them to your international address.</p>
        </div>
        <div class="card">
            <img src="<?php echo URLROOT . '/public/img/visitor/book-64.png' ?>" alt="book icon">
            <h3>Admin</h3>
            <p>You can now buy products from USA stores that do not ship internationally. How? Place an order on our website and we'll buy the items on your behalf and ship them to your international address.</p>
        </div>
    </div>
    <div class="cards-row">
        <div class="card background">
            <img src="<?php echo URLROOT . '/public/img/visitor/book-64.png' ?>" alt="book icon">
            <h3>Affiliate Marketers</h3>
            <p>You can now buy products from USA stores that do not ship internationally. How? Place an order on our website and we'll buy the items on your behalf and ship them to your international address.</p>
        </div>
        <div class="card">
            <img src="<?php echo URLROOT . '/public/img/visitor/book-64.png' ?>" alt="book icon">
            <h3>Service Gigs</h3>
            <p>You can now buy products from USA stores that do not ship internationally. How? Place an order on our website and we'll buy the items on your behalf and ship them to your international address.</p>
        </div>
        <div class="card">
            <img src="<?php echo URLROOT . '/public/img/visitor/book-64.png' ?>" alt="book icon">
            <h3>Special Service Request</h3>
            <p>You can now buy products from USA stores that do not ship internationally. How? Place an order on our website and we'll buy the items on your behalf and ship them to your international address.</p>
        </div>
    </div>
</div>

<style>
    .head {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .head p {
        text-align: center;
        margin-bottom: 2rem;
    }

    .card-container {
        display: flex;
        align-items: center;
        flex-direction: column;
        align-content: flex-start;
    }

    .card-container .cards-row {
        display: flex;
        justify-content: space-evenly;
    }

    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: var(--background);
        margin: .5rem;
        align-items: center;
        padding: 2rem;
        height: auto;
    }

    .card img {
        width: 50px;
        height: auto;
    }

    .card p {
        color: var(--dark);
        text-align: center;
        justify-self: center;
        line-height: 1.6;
    }
</style>
<br>
<?php
include APPROOT . '/views/includes/footer.php';
?>