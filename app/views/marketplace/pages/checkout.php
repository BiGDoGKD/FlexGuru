<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    if (isset($_SESSION['type'])) {
        if ($_SESSION['type'] == 'student') {
            include APPROOT . '/views/includes/student-navbar.php';
        } else if ($_SESSION['type'] == 'tutor') {
            include APPROOT . '/views/includes/tutor-navbar.php';
        } else if ($_SESSION['type'] == 'affiliate') {
            include APPROOT . '/views/includes/affiliate-navbar.php';
        } else {
            include APPROOT . '/views/includes/navbar.php';
        }
    } else {
        include APPROOT . '/views/includes/navbar.php';
    }
    ?>

    <main class="checkout-page">


        <div class="container base-container">
            <div class="row">

                <div class="col-12-xs col-7-lg mt-3 mb-xs-2 mb-lg-5">
                    <h1>Service Cart</h1>

                    <div class="item-details mt-2">
                        <h2 class="font-lg text-gray mt-2">Item Details</h2>
                        <div class="item-detail-box">
                            <p class="title">Order ID</p>
                            <p class="value">Example Item</p>
                        </div>
                        <div class="item-detail-box">
                            <p class="title">Service Name</p>
                            <p class="value"><?php echo $data['title'] ?></p>
                        </div>
                        <div class="item-detail-box">
                            <p class="title">Currency</p>
                            <p class="value">LKR</p>
                        </div>
                        <div class="item-detail-box">
                            <p class="title">Amount</p>
                            <p class="value"><?php echo $data['price'] ?></p>
                        </div>
                        <div class="item-detail-box total">
                            <p class="title">Total</p>
                            <p class="value"><?php echo $data['price'] ?></p>
                        </div>
                    </div>
                    <form class="form-control" method="post" action="https://sandbox.payhere.lk/pay/checkout">
                        <input type="hidden" name="merchant_id" value="1219991">
                        <input type="hidden" name="return_url" value="<?php echo URLROOT; ?>/student/order">
                        <input type="hidden" name="cancel_url" value="<?php echo URLROOT; ?>/service/cancel">
                        <input type="hidden" name="notify_url" value="https://api.flexguru.tk/service/notify/">
                        <input type="hidden" name="order_id" value="<?php echo $data['orderid'] ?>" readonly>
                        <input type="hidden" name="items" value="<?php echo $data['title'] ?>" readonly><br>
                        <input type="hidden" name="currency" value="LKR" readonly>
                        <input type="hidden" name="amount" value="<?php echo $data['price'] ?>" readonly>
                        <br><br>
                        <h2 class="font-lg text-gray">Billing Details</h2><br>
                        <div class="row">
                            <div class="form-group col-12-xs col-6-lg pr-lg-1">
                                <label for="firstname">First Name <span class="text-error">*</span></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter Your Firstname" value="<?php echo $data['first_name'] ?>" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>
                            <div class="form-group col-12-xs col-6-lg pl-lg-1">
                                <label for="firstname">Last Name <span class="text-error">*</span></label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Your Lastname:" value="<?php echo $data['last_name'] ?>" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>
                            <div class="form-group col-12-xs col-6-lg pr-lg-1">
                                <label for="firstname">Email <span class="text-error">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email:" value="<?php echo $data['email'] ?>" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>
                            <div class="form-group col-12-xs col-6-lg pl-lg-1">
                                <label for="firstname">Phone <span class="text-error">*</span></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter the Phone No:" value="" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>
                            <div class="form-group col-12-xs col-6-lg pr-lg-1">
                                <label for="firstname">Address <span class="text-error">*</span></label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter The Address:" value="" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>
                            <div class="form-group col-12-xs col-6-lg pl-lg-1">
                                <label for="firstname">City <span class="text-error">*</span></label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="Enter The City:" value="<?php echo $data['city'] ?>" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>
                            <input type="hidden" class="form-control" name="country" id="country" placeholder="Sri Lanka" value="Sri Lanka" required readonly />
                            <div class="form-group col-12-xs">
                                <input type="submit" id="submit" name="submit" value="Continue" class="form-control" />
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-12-xs col-4-lg">

                </div>
            </div>
        </div>
    </main>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>