<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>


<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/studentprofileview.css' ?>">

<div class="container">

    <div class="left">

        <div class="userbox">
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

                </div>
            </center>
        </div>

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

    <div class="right">
        <div class="activesessions">
            <span>Active Sessions-0 </span>
            <select name="" id="activesessionselect">
                <option default>Active Sessions(0)</option>
            </select>
        </div>
        <div class="requestsessions">

            <span>Request Sessions </span>
            <button>POST</button>

        </div>

        <div class="content" id="content1">

            <p id="firstheading"><b>FlexGuru helps you to improve</br></b> </p>

            <div id="contentpara1">
                <div class="text">
                    <span>
                        <b> How to be succesfull in Flexguru in simple steps</b>
                    </span>
                    <p>The key to your success on Flexguru is the brand you build for yourself through
                        your Flexguru reputation. We gathered some tips and resources to help you
                        become a leading tutor on Flexguru.</p>
                </div>
                <div class="study_img_div">
                    <img src="<?php echo URLROOT . '/public/img/studentprofileview/study.svg' ?>" id="study_img" alt="">

                </div>


            </div>

        </div>
        <div class="content" id="content2">
            <span><b>Take these steps to become a popular tutor on Flexguru</b></span>
        </div>

    </div>




</div>

</div>

<!-- <footer>
         <?php
            include APPROOT . '/views/includes/footer.php';
            ?> 
    </footer> -->


    