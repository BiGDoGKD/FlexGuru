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

<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>
<!-- content  -->
<style>
    #email-verification {
        display: flex;
        flex-direction: column;
        padding: 50px 0;
        justify-content: center;
    }

    #email-verification form input {
        width: 300px;
        height: 70px;
        margin-top: 15px;
        margin-bottom: 5px;
        padding: 0 0 0 20px;
        border: 1px solid #ACACAC;
        box-sizing: border-box;
        border-radius: 24px;
        font-size: 45px;
        font-weight: bold;
        letter-spacing: 5px;
        color: var(--gray);
    }

    #email-verification .button_verify {
        padding: 10px 100px;
        margin: 5px 0;
    }

    #email-verification .resend-button {
        margin: 10px 0 50px 0;
    }
</style>


</head>

<body>
    <div id="email-verification">
        <h3>Email Verification</h3>
        <p class="subtitle-1">An email verification code was sent to <?php echo $data['email'] ?></p>
        <form action="<?php echo URLROOT; ?>/registration/verification" class="verification" method="POST">
            <input type="text" name="emailcode" id="emailcode">
            <p class="subtitle-1 error"><?php echo $data['otpError'] ?></p>
            <button class="btn button_verify pointer on-primary bg-primary btn-text" id="submit" value="submit" type="submit">CONTINUE</button>
        </form>
        <h5 style="margin:35px 0 10px 0;">Having trouble receiving an account verification code?</h5>
        <p class="subtitle-1 gray">It coult take up some time code to be delivered</p>
        <button class="btn bg-primary on-primary resend-button" style="width: 400px;">RESEND ACCOUNT VERIFICATION CODE</button>
    </div>
</body>

</html>
<!-- content-end  -->
<!-- footer  -->
<?php
include APPROOT . '/views/includes/footer.php';
?>