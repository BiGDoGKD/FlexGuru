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
        <form action="<?php echo URLROOT . '/tutor/updategig' ?>" method="POST">
            <div class="ssr-block">
                <h4>Publish a Gig</h4>
            </div>
            <hr>
            <div class="ssr-block">
                <label for="gigtype">Choose your Gig to update:</label>
                <select name="gig" id="gig">
                  <option value="gig1">Boolean Algebra </option>
                  <option value="gig2">Trignomentry from scratch</option>
                  <option value="gig3">Probability and statistics</option>
                  <option value="gig4">Ordinery level mathematics</option>
                </select>
                <br><br>
                <div class="ssr-block">
                <input type="submit" class="btn bg-primary on-primary" value="Submit">
                </div>
              </form>
            </div>
            <div class="ssr-block">
                <p class="subtitle-2">New Title:</p>
                <input type="text" name="title" id="title" required>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Update Service Details</p>
                <textarea class="body-2" name="description" id="description" cols="85" rows="10" required></textarea>
            </div>
            <hr>

            <hr>
           
            <div class="ssr-block">
                <label for="duration">Update completion Deadline in Days :</label>
                <select name="day" id="day">
                 
                  <option value="day1">01 Day</option>
                  <option value="day2">02 Days</option>
                  <option value="day3">03 Days</option>
                  <option value="day4">04 Days</option>
                  <option value="day5">05 Days</option>
                  <option value="day6">06 Days</option>
                  <option value="day7">07 Days</option>
                  <option value="day8">08 Days</option>
                  <option value="day9">09 Days</option>
                  <option value="day10">10 Days</option>
                </select>
                <br><br>
              </form>
            </div>
            <hr>
            <div class="ssr-block">
                <p class="subtitle-2">Update Price of the Gig</p>
                <input type="text" name="budget" id="budget" required>
            </div>
            <input type="date" name="date" id="date">
            <div class="ssr-block">
                <button type="submit" class="btn bg-primary on-primary">Update the Gig</button>
            </div>
        </form>
    </div>
    <div class="container-image">
    <img src="<?php echo URLROOT . '/public/img/ssr/cover2.svg' ?>" alt="Update gig related vectore image">
    </div>
</div>

<?php
include APPROOT . '/views/includes/footer.php';
?>
