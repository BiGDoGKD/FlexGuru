<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earnings</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>

    <?php
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>



    <div class="detail-hero-section container fluid bg-cyan pl-0 pr-0" style="
				background-image: url(https://cdn.discordapp.com/attachments/955145545347891241/955922527539056660/golden-3346988_960_720.webp);
				background-size: cover;
				background-position: center;
			">
        <div class="container fluid pt-3 pb-3 display-f align-items-center" style="background: rgba(0, 0, 0, 0.65); height: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-12-xs text-white text-center align-items-center">
                        <div class="row">
                            <div class="col-12-xs">
                                <h2>Welcome to FlexGuru Vault</h2>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>






    <div class="user-dashboard container  mt-1 mb-1">
        <h1>Earnings</h1>
        <div class="row p-2 m-2">


            <div class="gig-form col-12-xs col-8-lg">
                <form action="<?php echo URLROOT; ?>/gigs/publish" method="POST" style="width: 100%;" class="form-control row">

                    <div class="form-group col-5-xs pr-2">
                        <label for="startdate">Start Date <span class="text-error">*</span> </label>
                        <input type="date" class="form-control" name="startdate" id="startdate" placeholder="DD-MM-YYYY" value="" required />
                        <p class="form-control form-feedback text-error">

                        </p>
                    </div>
                    <div class="form-group col-5-xs">
                        <label for="enddate">End Date<span class="text-error">*</span> </label>
                        <input type="date" class="form-control" name="enddate" id="enddate" placeholder="DD-MM-YYYY" value="" required />
                        <p class="form-control form-feedback text-error">

                        </p>
                    </div>
                    <div class="col-12-xs display pb-3">
                        <button class="marketplace__help-btn "> Submit </button>
                    </div>
            </div>






            <div class="col-12-xs col-5-lg" style="background-color:#f0eaff; border-radius:8px; ">

                <div class=" user-dashboard container mt-1 mb-3">
                    <h1 class="text-gray">Sessions </h1>

                    <h3 class="text-gray">Total Number of Sessions :</h3>
                    <h3 class="text-gray">Total Number of hours :</h3>

                </div>
            </div>

            <div class="col-12-xs col-6-lg ml-2" style="background-color:aliceblue; border-radius:8px; ">

                <div class=" user-dashboard container mt-1 mb-3">
                    <h1 class="text-gray">Total Revenue </h1>
                    <h2 class="text-gray align-center">LKR: 20,450.00</h2>
                </div>
            </div>

        </div>

    </div>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>

</body>

</html>