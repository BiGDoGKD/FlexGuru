<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/specialservicerequest.css' ?>">
<div class="container">
    <div class="ssr-form">
        <form action="">
            <div class="ssr-block">
                <h4>Which Tutors are you looking for?</h4>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Describe the subject area that you need help on:</p>
                <textarea class="body-2" name="description" id="description" cols="85" rows="10"></textarea>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Choose a subject:</p>
                <div class="categories">
                    <div class="subject"><select name="subject" id="subject">
                            <option value="">Subject</option>
                            <option value="">Mathematics</option>
                            <option value="">Science</option>
                        </select></div>
                    <div class="sub-category"><input type="text" name="category" id="category" placeholder="Category"></div>
                </div>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Once you placed request, when you like the session to be delivered?</p>

                <select name="expected" id="expected">
                    <?php
                    for ($i = 1; $i < 31; $i++) {
                        echo "<option value='1'>" . $i . " days</option>";
                    }
                    ?>
                </select>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">What is your budget for the service?</p>
                <input type="text" name="budget" id="budget">
            </div>
            <div class="ssr-block">
                <a href="<?php echo URLROOT . '/student/requests' ?>">
                    <div style="width: 96.5%;" class="btn bg-primary on-primary">Submit Request</div>
                </a>
            </div>
        </form>
    </div>
    <div class="container-image">
        <img src="<?php echo URLROOT . '/public/img/ssr/cover.svg' ?>" alt="">
    </div>
</div>



<?php
include APPROOT . '/views/includes/footer.php';
?>