<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/publicprofileview/includes/header.php';
?>


<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/publicprofileview.css' ?>">

<div class="container" style="height:1400px;">

    <div class="left">

        <div class="userbox">
            <div class="img">
                <img src="<?php echo URLROOT . '/public/img/publicprofileview/user.png' ?>" id="userimg" alt="">
            </div>
            <center><span id="name">FirstName LastName</span>
                <div class="star_rating">



                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <span class="fa fa-star unchecked"></span>

                </div>

                <span><strong> N/A </strong> (n/a) </span>

                <div class="details">
                    <div id="from" class="cityandmembership">
                        <img src="<?php echo URLROOT . '/public/img/publicprofileview/map.png' ?>" class="detailimg" id="from" alt="">
                        <p style="font-size: 14px; padding:24px 20px;">City Name</p>

                    </div>
                    <div id="membersince" class="cityandmembership">
                        <img src="<?php echo URLROOT . '/public/img/publicprofileview/usersmall.png' ?>" class="detailimg" id="usersince" alt="">
                        <p style="font-size: 14px; padding:24px 20px;">Month, Year</p>
                    </div>

                    <!-- <div id="availability" class="cityandmembership">
                                    <img src="<?php echo URLROOT . '/public/img/publicprofileview/switch.png' ?>" class="detailimg" id="availability" alt="">
                                    <span>
                                        <input type="checkbox" id="switch"
                                        class="checkbox" />
                                        <label for="switch" class="toggle"></label>
                                    </span>
                            </div> -->

                </div>
            </center>
        </div>
        <div class="userbox" style="height: 150px;">

            <div class="desciription" style="font-size:16px; padding: 26px 26px;">
                <p>
                    I'm Eftimov, a professional logo designer with 5 years of experience in Identity Design. I've done works for Filmthusiast, BBC, the Fiverr Brand Team, as well as hundreds of startups and brands from all over the world. My style of design is simple, clean, and sophisticated.
                </p>

            </div>


        </div>

        <div class="userbox" style="height: 150px;">

            <div class="languages" style="font-size:16px; padding: 26px 26px;">
                <p>
                    English - Native/Bilingual

                </p>

            </div>


        </div>


        <!-- ----------------------------------------------------------------------------------- -->
        <!-- add languages -->
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="userbox" style="height: 150px;">

            <div class="skillsandqualifications" style="font-size:16px; padding: 26px 26px;">


                <div class="skill skill1">Graphic Designing</div>
                <div class="skill skill2">Adobe Illustrator</div>
                <div class="skill skill4">Logo Design</div>


                </p>

            </div>


        </div>

        <!-- ----------------------------------------------------------------------------------- -->
        <!-- skills and qualifications -->
        <!-- ----------------------------------------------------------------------------------- -->




        <!-- ----------------------------------------------------------------------------------- -->
        <!-- social media links-->
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="socialmedia">
            <span>Link Your Social Networks</span>
            <div class="setofsocialmedia">
                <div id="facebook"><img src="<?php echo URLROOT . '/public/img/publicprofileview/fb.png' ?>" alt="" class="iconsm"></div>

                <div id="twitter"><img src="<?php echo URLROOT . '/public/img/publicprofileview/twitter.png' ?>" alt="" class="iconsm"></div>

                <div id="youtube"><img src="<?php echo URLROOT . '/public/img/publicprofileview/youtube.png' ?>" alt="" class="iconsm"></div>

                <div id="Linkedin"><img src="<?php echo URLROOT . '/public/img/publicprofileview/linkedin.png' ?>" alt="" class="iconsm"></div>
            </div>
            <div class="setofsocialmediaplus">
                <div><img src="<?php echo URLROOT . '/public/img/publicprofileview/add.png' ?>" alt="" class="iconsmadd" onclick="myFunction()"></div>
                <div><img src="<?php echo URLROOT . '/public/img/publicprofileview/add.png' ?>" alt="" class="iconsmadd"></div>
                <div><img src="<?php echo URLROOT . '/public/img/publicprofileview/add.png' ?>" alt="" class="iconsmadd"></div>
                <div><img src="<?php echo URLROOT . '/public/img/publicprofileview/add.png' ?>" alt="" class="iconsmadd"></div>

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

        <div>
            <h4>X's Gigs</h4>
        </div>

        <!-- -------------------------------gig --------------------------------------- -->
        <div class="gigs" style="display:flex;">
            <div class="gig">
                <div class="picture">
                    <img src="<?php echo URLROOT . '/public/img/publicprofileview/gig.png' ?>" style="height: 19.3rem;" alt="">
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
                <div class="picture" style="width:max-content; border:1px solid black;">
                    <img src="<?php echo URLROOT . '/public/img/publicprofileview/gig.png' ?>" style="height: 19.3rem;" alt="">

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
                <div class="picture" style="width:max-content; border:1px solid black;">
                    <img src="<?php echo URLROOT . '/public/img/publicprofileview/gig.png' ?>" style="height: 19.3rem;" alt="">

                </div>

                <div class="owner">

                </div>

                <div class="desc">

                </div>

                <div class="rating"></div>

                <div class="price">

                </div>

            </div>


        </div>
        <div class="reviews">
            <div class="picturereview" style="width:max-content; height:max-content;">
                <img id="reviewimg" src="<?php echo URLROOT . '/public/img/publicprofileview/reviews.png' ?>" alt="">

            </div>
        </div>
        <div class="feedback">
            <div class="picturefeedback" style="width:max-content; height:max-content;">
                <img id="feedbackimg" src="<?php echo URLROOT . '/public/img/publicprofileview/feedback.png' ?>" alt="">

            </div>
        </div>
        <div class="feedback">
            <div class="picturefeedback" style="width:max-content; height:max-content;">
                <img id="feedbackimg" src="<?php echo URLROOT . '/public/img/publicprofileview/feedback.png' ?>" alt="">

            </div>
        </div>
        <div class="feedback">
            <div class="picturefeedback" style="width:max-content; height:max-content;">
                <img id="feedbackimg" src="<?php echo URLROOT . '/public/img/publicprofileview/feedback.png' ?>" alt="">

            </div>
        </div>






    </div>
</div>

<!-- <footer>
         <?php
            include APPROOT . '/views/includes/footer.php';
            ?> 
    </footer> -->