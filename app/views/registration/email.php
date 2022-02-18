<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flexguru Roles</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/navbar.php';
    ?>
    <div class="container student-registration pt-lg-4 pt-xs-2 pb-4" id="email-verification">
        <div class="row">
            <div class="col-12-xs">
                <p class="text-center font-lg-xxl font-xs-lg mb-xs-1 mb-lg-2">
                    Email Verification
                </p>
            </div>

            <form action="<?php echo URLROOT; ?>/registration/verification" method="POST" class="form-control row" style="width: 100%">
                <div class="form-group col-12-xs">
                    <p class="text-gray mb-1">An email verification code was sent to <span class="text-primary"><?php echo $data['email'] ?></span></p>
                    <input type="text" class="form-control" name="emailcode" id="emailcode" placeholder="Enter the OTP" required />
                    <p class="form-control form-feedback text-error">
                        <?php echo $data['otpError'] ?>
                    </p>
                </div>
                <div class="form-group col-12-xs">
                    <button type="submit" id="submit" name="submit" value="submit" class="form-control">
                        Continue
                    </button>
                </div>
            </form>
            <div class="col-12-xs form-control mt-3">
                <p class="font-sm text-gray">Having trouble receiving an account verification code?</p>
                <p class="text-gray mt-1">
                    It could take some time code to be delivered
                </p>
                <button class="form-control mt-1" style="padding: 0.5rem 2rem;"><span class="font-sm">RESEND ACCOUNT VERIFICATION CODE</span></button>
            </div>
        </div>
    </div>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>