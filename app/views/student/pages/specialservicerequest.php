<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/specialservicerequest.css' ?>">
<div class="container">
    <form action="">
        <h4>Which Tutors are you looking for?</h4>
        <hr>
        <div class="ssr-block">
            <p class="subtitle-2">Describe the subject area that you need help on:</p>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
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
                <div class="sub-category"><input type="text" name="category" id="category"></div>
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
            <button type="submit" class="btn">Submit Request</button>
        </div>
    </form>
</div>



<?php
include APPROOT . '/views/includes/footer.php';
?>