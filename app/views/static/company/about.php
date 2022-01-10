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
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/public/pages/about/style.css' ?>">
<style>
        .container{
display: flex;
height: 100vh;
width: 100%;
        }
        .left{
flex-basis: 50%;
background-image: url('/public/img/public/about/ab.jpg');
background-position: center;
background-size: cover;
        }
        .right{
            flex-basis: 50%;
        }
        .body-1{
            text-align: justify;
            margin: 5% 5%;
            font-family: "Roboto";
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 0.6px;
            line-height: 25.7px;
        }
        .h1{
            margin: 5% 5%;
            text-align: center;
            font-size: 95px;
            font-weight: 300;
            letter-spacing: -1.5px;
            line-height: 135.7px;
            color: #8086ff;
        }
     
    </style>
<title>About us</title>
</head>
<body>
   <div class="container">
<div class="left">




</div>

<div class="right">

    <h1 class="h1">About Us</h1>
  <p class="body-1">
    We FlexGuru Team always motivated in giving quality world class education to every Student who is willing to learn any Knowledge or skill without any barriers.
    Result of that strong motivation is our FlexGuru platform. After analyzing each and every E-learning platforms in the market we found some key issues for students.
    So we managed to design all in one learning platform after cutting the regular issues of this path.
    Special service request is the next level innovation we brought to this platform to give everyone the flexibility to learn only what they actually needed without wasting even a second of time.
    We make sure every time that we empower learners to study at their own pace outside the classroom.
  </p>


</div>




   </div> 
</body>
</html>

<?php
include APPROOT . '/views/includes/footer.php';
?>