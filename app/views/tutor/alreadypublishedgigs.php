<?php

include APPROOT . '/views/tutor/includes/header.php';
?>

<div class="container">

    <style>
        .container {
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            margin-bottom: 50px;
        }

        .liveGigs {
            display: grid;
            grid-template-columns: 20% 20% 20% 20% 20%;
            justify-content: space-evenly;
            grid-auto-flow: row;
            grid-gap: 25px;
        }

        .liveGigs a {
            text-decoration: none;
        }


        @media screen and (max-width: 1600px) {
            .liveGigs {
                display: grid;
                grid-template-columns: 25% 25% 25% 25%;
                justify-content: space-evenly;
                grid-auto-flow: row;
                grid-gap: 25px;
            }
        }

        @media screen and (max-width: 1200px) {
            .liveGigs {
                display: grid;
                grid-template-columns: 33% 33% 33%;
                justify-content: space-evenly;
                grid-auto-flow: row;
                grid-gap: 25px;
            }
        }

        @media screen and (max-width: 900px) {
            .liveGigs {
                display: grid;
                grid-template-columns: 50% 50%;
                justify-content: space-evenly;
                grid-auto-flow: row;
                grid-gap: 25px;
            }
        }

        @media screen and (max-width: 500px) {
            .liveGigs {
                display: grid;
                grid-template-columns: 100%;
                justify-content: space-evenly;
                grid-auto-flow: row;
                grid-gap: 25px;
            }
        }
    </style>








    <h4 style="margin: 30px 0;">Gigs on Live</h4>


    <div class="liveGigs">
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
            <a href="<?php echo URLROOT . '/marketplace/service' ?>">
                <?php
                include APPROOT . '/views/marketplace/components/gigcard.php';
                ?>
            </a>
        <?php
        }
        ?>
    </div>










    <!-- footer  -->
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>