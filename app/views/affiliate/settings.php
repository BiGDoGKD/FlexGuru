<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile settings
    </title>
    <?php include APPROOT . '/views/includes/header.php'; ?>

</head>

<body>

    <?php
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>

    <div class="user-dashboard container  mt-3 mb-3">

        <div class="gig-form col-12-xs col-8-lg">
            <form action="<?php echo URLROOT; ?>/gigs/publish" method="POST" style="width: 100%;" class="form-control row">
                <div class="form-group col-12-xs">
                    <label for="currentpassword">Current Password<span class="text-error">*</span> </label>
                    <input type="password" class="form-control" name="currentpassword" id="currentpassword" placeholder="Enter the current password..." value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>



                <div class="form-group col-12-xs">
                    <label for="newpassword">New Password<span class="text-error">*</span> </label>
                    <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Enter the new password..." value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>
                <div class="col-4-xs display-f ">
                    <button onclick="location.href='http://localhost/info/help'" class="marketplace__help-btn">Change Password </button>
                </div>
            </form>
        </div>
    </div>



    <div class="user-dashboard container  mt-3 mb-3">

        <div class="gig-form col-12-xs col-8-lg">
            <form action="<?php echo URLROOT; ?>/gigs/publish" method="POST" style="width: 100%;" class="form-control row">

                <div class="form-group col-12-xs">
                    <label for="email">Email<span class="text-error">*</span> </label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="ex :abc@yahoo.com" value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>



                <div class="form-group col-12-xs">
                    <label for="phoneno">Phoneno<span class="text-error">*</span> </label>
                    <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Enter the phone number" value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>

                <div class="col-4-xs display-f ">
                    <button onclick="location.href='http://localhost/info/help'" class="marketplace__help-btn">Submit changes </button>
                </div>

            </form>

        </div>
    </div>



    <div class="user-dashboard container  mt-3 mb-3">

        <div class="gig-form col-12-xs col-8-lg">


            <div class="accountdeletion">
                <div class="subtitle" id="act_del">
                    <p class="text-gray">Account Deletion </p>
                </div>
                <div class="deletiondetails" style="width: 100%;">





                </div>






            </div>

            <div class="deletereason">
                <div class="subtitle">
                    <p class="text-gray">I am deleting my account because (optional)
                    </p>
                </div>
                <textarea style="font-family: poppins; resize:none;" class="text-gray" id="deletereason" name="deletereason" rows="4" cols="117">
</textarea>


            </div>



            <div class="col-4-xs display-f ">
                <button onclick="location.href='http://localhost/info/help'" class="marketplace__help-btn">Delete My Account </button>
            </div>


        </div>

    </div>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>