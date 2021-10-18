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
 * PARENT FOLDER: registration
 */
?>
<!-- header  -->
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<!-- content  -->
<div class="fg-role-selection">
    <div class="title">
        <h2 class="gray">Select user type</h2>
    </div>
    <div class="form-type">
        <div class="role-cards">
            <div class="card tutor passive-card">
                <img id="image" class="img filter-primary" src="<?php echo URLROOT . '/public/img/svg/tutor.svg' ?>" alt="">
                <span>Tutor</span>
                <input class="hidden" type="radio" name="role" id="tutor">
            </div>
            <div class="card student passive-card">
                <img id="image" class="img filter-primary" src="<?php echo URLROOT . '/public/img/svg/reading.svg' ?>" alt="">
                <span>Student</span>
                <input class="hidden" type="radio" name="role" id="student">
            </div>
            <div class="card affiliate-marketer passive-card">
                <img id="image" class="img filter-primary" src="<?php echo URLROOT . '/public/img/svg/businessman.svg' ?>" alt="">
                <span>Affiliate Marketer</span>
                <input class="hidden" type="radio" name="role" id="affiliate-marketer">
            </div>
        </div>
        <div class="terms">
            <p>Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae congue. <a href="#">terms and conditions</a></p>
        </div>
        <div class="submits">
            <button onclick="window.history.back()" class="btn primary fg-back bold"><i class="fas fa-arrow-left"></i>BACK</button>
            <button class="btn on-primary bg-primary fg-continue bold">CONTINUE</button>
        </div>
    </div>
</div>

<style>
    .fg-role-selection {
        display: flex;
        flex-direction: column;
        width: 100%;

    }

    .fg-role-selection .form-type {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .fg-role-selection .title {
        margin: 93px 0 0 0;
    }

    .fg-role-selection .role-cards {
        display: flex;
        justify-content: space-around;
        margin: 0 100px;
        align-items: center;
        width: 100%;
        margin: 90px 0 42px 0;
    }

    .fg-role-selection .terms {
        display: flex;
        font-size: 24px;
        color: var(--gray);
        justify-content: center;
        width: 80%;
    }


    .fg-role-selection .terms a {
        color: var(--primary);
        text-decoration: none;
    }

    .fg-role-selection .submits {
        margin: 91 0 119 0;
    }

    .fg-role-selection .submits .fg-back {
        padding: 10px 70px;
        background: transparent;
    }

    .fg-role-selection .submits .fg-continue {
        padding: 10px 90px;
    }

    .fg-role-selection .submits .fg-back i {
        margin: 0 15px 0 0;
    }

    .fg-role-selection .role-cards .card {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        height: 200px;
        width: 200px;
        border-radius: 24px;
        -webkit-box-shadow: 0px 4px 30px 10px rgba(172, 172, 172, 0.25);
        -moz-box-shadow: 0px 4px 30px 10px rgba(172, 172, 172, 0.25);
        box-shadow: 0px 4px 30px 10px rgba(172, 172, 172, 0.25);
    }


    /* .fg-role-selection .role-cards .card:hover {
        color: on-primary;
        background: var(--primary);
        transition: ease-in 0.4s;
    } */

    .active-card {
        background: var(--primary);
        color: var(--on-primary);
    }

    .passive-card {
        color: var(--primary);
        background: var(--on-primary);
    }

    .fg-role-selection .role-cards .card img {
        width: 80px;
        height: 80px;
        margin-bottom: 22px;
    }

    .filter-primary {
        filter: invert(52%) sepia(5%) saturate(6793%) hue-rotate(202deg) brightness(98%) contrast(93%);
    }

    .filter-on-primary {
        filter: invert(100%) sepia(0%) saturate(7492%) hue-rotate(186deg) brightness(111%) contrast(99%);
    }
</style>

<script defer>
    // selectors 

    roleSelectCards = document.querySelectorAll(".fg-role-selection .role-cards .card");

    tutorCard = document.querySelector(".role-cards .tutor");
    studentCard = document.querySelector(".role-cards .student");
    affiliateCard = document.querySelector(".role-cards .affiliate-marketer");

    backButton = document.querySelector(".fg-role-selection .fg-back");
    continueButton = document.querySelector(".fg-role-selection .fg-continue");


    tutorRadio = document.getElementById("tutor");
    studentRadio = document.getElementById("student");
    affiliateRadio = document.getElementById("affiliate-marketer");

    tutorCardImg = document.querySelector(".tutor .img");
    studentCardImg = document.querySelector(".student .img");
    affiliateCardImg = document.querySelector(".affiliate-marketer .img");

    // variables 
    tutor = false;
    student = false;
    affiliate = false;


    //functions  + event listeners

    continueButton.addEventListener('click', this.roleRegistration);

    tutorCard.addEventListener('click', () => {
        if (tutor === false) {
            tutor = true;
            student = false;
            affiliate = false;
            tutorRadio.checked = true;
            studentRadio.checked = false;
            affiliateRadio.checked = false;
            tutorCardImg.classList.add("filter-on-primary");
            tutorCardImg.classList.remove("filter-primary");
            affiliateCardImg.classList.remove("filter-on-primary");
            affiliateCardImg.classList.add("filter-primary");
            studentCardImg.classList.remove("filter-on-primary");
            studentCardImg.classList.add("filter-primary");
            tutorCard.classList.add("active-card");
            tutorCard.classList.remove("passive-card");
            studentCard.classList.add("passive-card");
            studentCard.classList.remove("active-card");
            affiliateCard.classList.add("passive-card");
            affiliateCard.classList.remove("active-card");
        } else {
            resetRadio();
            tutorCardImg.classList.remove("filter-on-primary");
            tutorCardImg.classList.add("filter-primary");
            tutorCard.classList.remove("active-card");
            tutorCard.classList.add("passive-card");
        }
    });

    studentCard.addEventListener('click', () => {
        if (student === false) {
            tutor = false;
            student = true;
            affiliate = false;
            tutorRadio.checked = false;
            studentRadio.checked = true;
            affiliateRadio.checked = false;
            studentCardImg.classList.add("filter-on-primary");
            studentCardImg.classList.remove("filter-primary");
            tutorCardImg.classList.remove("filter-on-primary");
            tutorCardImg.classList.add("filter-primary");
            affiliateCardImg.classList.remove("filter-on-primary");
            affiliateCardImg.classList.add("filter-primary");
            studentCard.classList.add("active-card");
            studentCard.classList.remove("passive-card");
            tutorCard.classList.add("passive-card");
            tutorCard.classList.remove("active-card");
            affiliateCard.classList.add("passive-card");
            affiliateCard.classList.remove("active-card");
        } else {
            resetRadio();
            studentCardImg.classList.remove("filter-on-primary");
            studentCardImg.classList.add("filter-primary");
            studentCard.classList.remove("active-card");
            studentCard.classList.add("passive-card");
        }
    });

    affiliateCard.addEventListener('click', () => {
        if (affiliate === false) {
            tutor = false;
            student = false;
            affiliate = true;
            tutorRadio.checked = false;
            studentRadio.checked = false;
            affiliateRadio.checked = true;
            affiliateCardImg.classList.add("filter-on-primary");
            affiliateCardImg.classList.remove("filter-primary");
            studentCardImg.classList.remove("filter-on-primary");
            studentCardImg.classList.add("filter-primary");
            tutorCardImg.classList.remove("filter-on-primary");
            tutorCardImg.classList.add("filter-primary");
            tutorCard.classList.add("passive-card");
            studentCard.classList.add("passive-card");
            affiliateCard.classList.add("active-card");
            tutorCard.classList.remove("active-card");
            studentCard.classList.remove("active-card");
            affiliateCard.classList.remove("passive-card");
        } else {
            resetRadio();
            affiliateCardImg.classList.remove("filter-on-primary");
            affiliateCardImg.classList.add("filter-primary");
            affiliateCard.classList.remove("active-card");
            affiliateCard.classList.add("passive-card");
        }
    });

    function resetRadio() {
        tutor = false;
        student = false;
        affiliate = false;
        tutorRadio.checked = false;
        studentRadio.checked = false;
        affiliateRadio.checked = false;
    }


    function roleRegistration() {
        if (tutor === true) {
            window.location.replace("<?php echo URLROOT ?>/registration/tutor");
        } else if (student === true) {
            window.location.replace("<?php echo URLROOT ?>/registration/student");
        } else if (affiliate === true) {
            window.location.replace("<?php echo URLROOT ?>/registration/affiliate");
        } else {
            window.alert("Please Select a Role!");
        }
    }
</script>
<!-- content-end  -->

<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>