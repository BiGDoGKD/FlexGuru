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
        <form action="<?php echo URLROOT . '/tutor/deletegig' ?>" method="POST">
            <div class="ssr-block">
                <h4>Delete a Gig</h4>
            </div>
            <hr>
            <div class="ssr-block">
                <label for="gigtype">Choose your Gig to delete:</label>
                <select name="gig" id="gig">
                  <option value="gig1">Molecular biology</option>
                  <option value="gig2">Dermatology</option>
                  <option value="gig3">Microorganisms</option>
                  <option value="gig4">Human Nutrition</option>
                  <option value="gig4">Paper class</option>
                </select>
                <br><br>
              </form>
            </div>
           
            <hr>
         

            <hr>
            <div class="ssr-block">
                <label for="duration">Choose days you wish to hold your deletion:</label>
                <select name="day" id="day">
                  <option value="day1">Delete now</option>
                  <option value="day2">One Day</option>
                  <option value="day3">Two Days</option>
                  <option value="day4">Three Days</option>
                  <option value="day5">Four Days</option>
                </select>
                <br><br>
              </form>
            </div>
            <hr>
            <div class="ssr-block">
                <h4>You cant get back your gig if you choosed the option delete now.</h4>
            </div>
           
            <div class="ssr-block">
                <button type="submit" class="btn bg-primary on-primary">Delete The Gig</button>
            </div>
        </form>
    </div>
    <div class="container-image">
    <img src="<?php echo URLROOT . '/public/img/ssr/cover3.svg' ?>" alt="Delete gig related vectore image">
    </div>
</div>
<?php
include APPROOT . '/views/includes/footer.php';
?>
