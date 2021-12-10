<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/visitor/login.css' ?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Become a Tutor in FlexGuru</title>
    <style>
        .wrapper{
            
            padding-bottom: 100px;
            position: relative;
            width: 90%;
            padding-left: 25px;
            padding-right: 25px;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
            
        }
        .title{
            padding-top: 175px;
            padding-right: 0px;
            padding-bottom: 9px;
            padding-left: 0px;
            font-style: bold;
            font-weight: 600;
            font-size: 70px;
            line-height: 1.14;
            font-family: "roboto";
            color:#7879f1 ;
            
        }
        .subtitle{
            margin: 0 0 0 0;
            padding: 0 0;
            color: #7879f1;
            font-size: 30px;
        }
        .line{
            padding : 45px 40px 45px 40px;
            font-size: 24px;
            line-height: 1.5;
            font-family: "roboto";
            width: 50%; 
            color: #7879f1;  
            text-align: left;  
        }
        .side{
            display: flex;
            flex-direction: row;
        }
        .why{
            background-color: black;
            color: #7879f1;
            padding: 40px 40px;
            margin: auto auto;
            display: flex;
            flex-direction: row;
            font-family: roboto;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <p class="title">
Want to Learn <br>
With ease

        </p>
        <p class="subtitle">Welcome to FlexGuru</p>
        
    </div>
    <div>
        <div class="wrapper side">
            <p class="line">
                <span>We designed FlexGuru to open doors of oppurtunity to all Students ,Tutors and Professionals in our country so you can provide your service with ease while earning money.</span><br><br>
                <span>Flexguru provides variety of areas to learn so students have the flexibility to learn most of the important things through our platform.</span>
            </p>
                <img src="/public/img/public/how/stu.png" style="height: 20%; width: 40%;border-radius: 10px;padding-left:10%;">
        </div>
        <h2 class="line">Becoming a Student in Flexguru is a very simple task. Lets see.</h2>
        <div class="wrapper side">
            <img src="/public/img/public/how/tut1.jpg" style="height: 20%; width: 50%;border-radius: 10px;">
            <p class="line">
                <span>1.Just visit Flexguru website and Choose to register as a Student.</span><br><br>
                <span>2.Then you need to give some regular details in the form to sign up as a student</span>
            </p>
                
        </div>
        <div class="wrapper side">
            <p class="line">
                <span>3.Students do not need to provide any documents after filling the registration form</span><br><br>
                <span>4.After registering as a Student you have to verify your mail using the unique OTP sent to your mail.</span>
            </p>
                <img src="/public/img/public/how/tut2.jpg" style="height: 20%; width: 50%;border-radius: 10px;">
        </div>

        <div class="wrapper side">
            <img src="/public/img/public/how/mail.png" style="height: 20%; width: 50%;border-radius: 10px;">
            <p class="line">
                <span>5.You will recieve a five digit OTP to verify your Email.</span><br><br>
                
            </p>
                
        </div>
        <article>
            <div class="why">
    
                <header>
                    <h2>Why you have to choose FlexGuru... </h2>
                </header>
    
                <ul class>
            <li>
                <h3>Wide variety of areas to learn</h3>
                <p>Our platform is not limited to specific areas of subjects like other E-learning platforms.</p>
            </li>
            <li>
                <h3>Ranking process gives extra advantages</h3>
                <p>Ranking process gives extra advantage to loyal Students of our platform</p>
            </li>
            <li>
                <h3>Flexible and customisable shedules </h3>
                <p>Tutors and students can chat and able to fix a flexible time to the sessions</p>
            </li>
            <li>
                <h3>Secure payment options through a secured gateway.</h3>
                <p>Students can make their payments any time using our payment gateway with many transwer options.</p>
            </li>
    </ul>
    
            </div>
        </article>

    </div>
</body>
</html>
<?php
include APPROOT . '/views/includes/footer.php';
?>