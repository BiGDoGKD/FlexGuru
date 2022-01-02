<?php
include APPROOT . '/views/tutor/includes/header.php';
?>


<style>
    #reviewimg {
        width: 300px;
        /* float: right; */
        position: absolute;
     
        right: 105;
        top: 246;
    }

    .container {
        width: 100%;
    }
</style>
<div class="container">
    <div class="left">
        <h4 style="margin: 30px 0;">Did You Enjoy tutoring ? </h4>
        <h5 style="margin: 10px 0; color:var(--primary);">We would like to know what you think about the session you had. </h5>

        <h6 style="margin: 10px 0;">Your review will help us to improve services provided under FlexGuru &#128522;
        </h6>

        <h5><b>Comments </b></h5>
        <div class="txtarea" style="margin-bottom:100px; width:75%;">
            <textarea style="resize:none; font-size:20px; padding:10px; font-family:  'Roboto', 'sans-serif'; " placeholder="Add your comments here about Student | Lesson  " cols='70' rows='9'></textarea>
            <p></p>
            <button style="margin:10px; width:140px; height:50px; float:right; border:none; background-color:var(--primary);border-radius:8px; color:#fff;">Submit </button>

        </div>




    </div>


    <div class="right">
        <img src="<?php echo URLROOT . '/public/img/tutor/reviewimage.png' ?>" id="reviewimg" alt="">

    </div>

</div>
<?php include APPROOT . '/views/includes/footer.php'; ?>