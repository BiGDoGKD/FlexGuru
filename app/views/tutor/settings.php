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
            <form action="<?php echo URLROOT; ?>/tutor/settings" method="POST" style="width: 100%;" class="form-control row">
                <div class="form-group col-12-xs">
                    <label for="password">Current Password<span class="text-error">*</span> </label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter the current password..." value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>



                <div class="form-group col-12-xs">
                    <label for="newpassword">New Password<span class="text-error">*</span> </label>
                    <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Enter the new password..." value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>

                <div class="form-group col-12-xs">
                    <label for="confirmpassword">Confirm Password<span class="text-error">*</span> </label>
                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>

                <div class="col-4-xs display-f ">

                    <input type="submit" name="button_password" value="Change Password">

                </div>
            </form>
        </div>
    </div>

    <!-- change email -->

    <div class="user-dashboard container  mt-3 mb-3">

        <div class="gig-form col-12-xs col-8-lg">
            <form action="<?php echo URLROOT; ?>/tutor/settings" method="POST" style="width: 100%;" class="form-control row">

                <div class="form-group col-12-xs">
                    <label for="email">Email<span class="text-error">*</span> </label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="abc@gmail.com" value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>

                <div class="col-4-xs display-f ">

                    <input type="submit" name="button_email" value="Change Email">

                </div>

            </form>
        </div>
    </div>


    <div class="user-dashboard container  mt-3 mb-3">

        <div class="gig-form col-12-xs col-8-lg">
            <form action="<?php echo URLROOT; ?>/tutor/settings" method="POST" style="width: 100%;" class="form-control row">

                <div class="form-group col-12-xs">
                    <label for="contactnumber">Contact Number<span class="text-error">*</span> </label>
                    <input type="text" class="form-control" name="contactnumber" id="contactnumber" placeholder=" " value="" required />
                    <p class="form-control form-feedback text-error">

                    </p>
                </div>

                <div class="col-4-xs display-f ">

                    <input type="submit" name="button_contact" value="Change Contact Number">

                </div>

            </form>
        </div>
    </div>



    <div class="user-dashboard container  mt-3 mb-3">
        <div class="gig-form col-12-xs col-8-lg">
            <form action="<?php echo URLROOT; ?>/tutor/settings" method="POST" style="width: 100%;" class="form-control row">
                <div class="gig-form col-12-xs ">




                    <div class="accountdeletion">
                        <div class="subtitle" id="act_del">
                            <p class="text-gray">Account Deletion </p>
                        </div>
                        <div class="deletiondetails" style="width: 100%;">
                        </div>
                    </div>

                    <div class="form-group col-12-xs">
                        <label for="deletereason">Reason for Deleting <span class="text-error">*</span> </label>
                        <input type="text" class="form-control" name="deletereason" id="deletereason" placeholder=" " value="" required />
                        <p class="form-control form-feedback text-error">

                        </p>
                    </div>

                    <div class="col-4-xs display-f ">
                        <input type="submit" name="button_deleteaccount" value="Delete Account">
                    </div>
                </div>
            </form>
        </div>

    </div>



    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>