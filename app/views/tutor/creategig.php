<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/specialservicerequest.css' ?>">
<div class="container">
    <div class="ssr-form">
        <!-- check the path of the form action -->
        <!-- --------------------------------------- -->
        <!-- --------------------------------------- -->
        <form action="<?php echo URLROOT . '/tutor/creategig' ?>" method="POST">
            <div class="ssr-block">
                <h4>Publish a Gig</h4>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Title:</p>
                <input type="text" name="title" id="title" required>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Service Details</p>
                <textarea class="body-2" name="description" id="description" cols="85" rows="10" required></textarea>
            </div>
            <hr>

            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Completion Deadline in Days : </p>

                <select name="days" id="days" required>
                    <?php
                    for ($i = 1; $i < 31; $i++) {
                        echo "<option value='1 days'>" . $i . " days</option>";
                    }
                    ?>
                </select>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Price of the Gig</p>
                <input type="text" name="budget" id="budget" required>
            </div>
            <input type="date" name="date" id="date">
            <div class="ssr-block">
                <button type="submit" class="btn bg-primary on-primary">Create a Gig</button>
            </div>
        </form>
    </div>
    <div class="container-image">
        <img src="<?php echo URLROOT . '/public/img/ssr/cover.svg' ?>" alt="Create gig related vectore image">
    </div>
</div>



<?php
include APPROOT . '/views/includes/footer.php';
?>
