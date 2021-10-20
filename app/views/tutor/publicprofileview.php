<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>


<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/studentprofileview.css' ?>">

<div class="container">

    <div class="left">

        <div class="userbox">
            <div class="online">
                <!-- online button -->
            </div>
            <div class="img">
                <img src="<?php echo URLROOT . '/public/img/studentprofileview/user.png' ?>" id="userimg" alt="">
            </div>
            <center><span id="name">FirstName LastName</span>
                <div class="star_rating">



                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>

                </div>

                <span><b> N/A </b> (n/a) </span>

                <div class="details">
                    <div id="from" class="cityandmembership">
                        <img src="<?php echo URLROOT . '/public/img/studentprofileview/map.png' ?>" class="detailimg" id="from" alt="">
                        <span>City Name</span>

                    </div>
                    <div id="membersince" class="cityandmembership">
                        <img src="<?php echo URLROOT . '/public/img/studentprofileview/usersmall.png' ?>" class="detailimg" id="usersince" alt="">
                        <span>Month,Year</span>
                    </div>

                    <!-- change to last delivery -->
                    <div id="membersince" class="cityandmembership">
                        <img src="<?php echo URLROOT . '/public/img/studentprofileview/usersmall.png' ?>" class="detailimg" id="usersince" alt="">
                        <span>Last Delivery</span>
                    </div>

                </div>
            </center>
        </div>
        <!-- ----------------------------------------------------------------------------------- -->
        <!-- add description section -->
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="desciription">
            <p>
                I'm Eftimov, a professional logo designer with 5 years of experience in Identity Design. I've done works for Filmthusiast, BBC, the Fiverr Brand Team, as well as hundreds of startups and brands from all over the world. My style of design is simple, clean, and sophisticated.
            </p>

        </div>

        <!-- ----------------------------------------------------------------------------------- -->
        <!-- add languages -->
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="languages">
            <p>
                English - Native/Bilingual

            </p>
        </div>

        <!-- ----------------------------------------------------------------------------------- -->
        <!-- skills and qualifications -->
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="skillsandqualifications">
            <div class="skill skill1">Graphic Designing</div>
            <div class="skill skill2">Adobe Illustrator</div>
            <div class="skill skill4">Logo Design</div>
        </div>



        <!-- ----------------------------------------------------------------------------------- -->
        <!-- social media links-->
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="socialmedia">
            <span>Link Your Social Networks</span>
            <div class="setofsocialmedia">
                <div id="facebook"><img src="<?php echo URLROOT . '/public/img/studentprofileview/fb.png' ?>" alt="" class="iconsm"></div>

                <div id="twitter"><img src="<?php echo URLROOT . '/public/img/studentprofileview/twitter.png' ?>" alt="" class="iconsm"></div>

                <div id="youtube"><img src="<?php echo URLROOT . '/public/img/studentprofileview/youtube.png' ?>" alt="" class="iconsm"></div>

                <div id="Linkedin"><img src="<?php echo URLROOT . '/public/img/studentprofileview/linkedin.png' ?>" alt="" class="iconsm"></div>
            </div>
            <div class="setofsocialmediaplus">
                <div><img src="<?php echo URLROOT . '/public/img/studentprofileview/add.png' ?>" alt="" class="iconsmadd" onclick="myFunction()"></div>
                <div><img src="<?php echo URLROOT . '/public/img/studentprofileview/add.png' ?>" alt="" class="iconsmadd"></div>
                <div><img src="<?php echo URLROOT . '/public/img/studentprofileview/add.png' ?>" alt="" class="iconsmadd"></div>
                <div><img src="<?php echo URLROOT . '/public/img/studentprofileview/add.png' ?>" alt="" class="iconsmadd"></div>

            </div>


            <!-- values of the social media links -->

            <div id="socialmediahidden facebook"></div>
            <div id="socialmediahidden twitter"></div>
            <div id="socialmediahidden youtube"></div>
            <div id="socialmediahidden linkedin"></div>
        </div>

    </div>



    <!-- ----------------------------------------------------------------------------------- -->
    <!-- right side -->
    <!-- ----------------------------------------------------------------------------------- -->
    <div class="right">




        <!-- ----------------------------------------------------------------------------------- -->
        <!-- gigs that are available right now -->
        <!-- ----------------------------------------------------------------------------------- -->

        <div>X's Gigs</div>

        <!-- -------------------------------gig --------------------------------------- -->
        <div class="gig">
            <div class="picture">

            </div>

            <div class="owner">

            </div>

            <div class="desc">

            </div>

            <div class="rating"></div>

            <div class="price">

            </div>

        </div>
        <!-- -------------------------------gig --------------------------------------- -->
        <div class="gig">
            <div class="picture">

            </div>

            <div class="owner">

            </div>

            <div class="desc">

            </div>

            <div class="rating"></div>

            <div class="price">

            </div>

        </div>
        <!-- -------------------------------gig --------------------------------------- -->
        <div class="gig">
            <div class="picture">

            </div>

            <div class="owner">

            </div>

            <div class="desc">

            </div>

            <div class="rating"></div>

            <div class="price">

            </div>

        </div>




        <!-- ----------------------------------------------------------------------------------- -->
        <!-- reviewers as sellers-->
        <!-- ----------------------------------------------------------------------------------- -->
        <!-- this can be added as a grid of three columns -->

        <div class="sellercommmunication">

            Seller communication level

        </div>

        <div class="recommendtoafriend">
            Recommend to a friend
        </div>

        <div class="mostrelevant">
            Service as described
        </div>
  >


        <!-- feedback section -->

        <div class="feedback feedback1">
            <p>Eftimov has excelled in all aspects of this gig. From stellar communication, through to very impressive work - every step has been top notch. Even when we looked through revisions and had questions - we managed to explore different ideas and come up with something that exceeded my very high expections. All timelines were met early, and all questions were answered promptly. I'll be using Eftimov's services again and again, there really is no better.</p>


        </div>


        <div class="feedback feedback2">
            <p>Eftimov has excelled in all aspects of this gig. From stellar communication, through to very impressive work - every step has been top notch. Even when we looked through revisions and had questions - we managed to explore different ideas and come up with something that exceeded my very high expections. All timelines were met early, and all questions were answered promptly. I'll be using Eftimov's services again and again, there really is no better.</p>



        </div>


        <div class="feedback feedback3">
            <p>Eftimov has excelled in all aspects of this gig. From stellar communication, through to very impressive work - every step has been top notch. Even when we looked through revisions and had questions - we managed to explore different ideas and come up with something that exceeded my very high expections. All timelines were met early, and all questions were answered promptly. I'll be using Eftimov's services again and again, there really is no better.</p>




        </div>


    </div>

    <!-- <footer>
         <?php
            include APPROOT . '/views/includes/footer.php';
            ?> 
    </footer> -->