<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>

    <?php
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>
    <div class="user-dashboard container  mt-1 mb-1">
        <h1>Complaints</h1>
        <div class="row">

            <div class="col-12-xs col-7-lg">

                <div class=" user-dashboard container mt-1 mb-3">

                    <div class="gig-form col-12-xs col-8-lg">
                        <form action="<?php echo URLROOT; ?>/tutor/complaint" method="POST" style="width: 100%;" class="form-control row">

                   



                            <div class="form-group col-12-xs">
                                <label for="contactno">Contact Number<span class="text-error">*</span> </label>
                                <input type="text" class="form-control" name="contactnumber" id="contactnumber" placeholder="+94 777 xxx xxxx" value="" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>

                            <div class="form-group col-12-xs">
                                <label for="email">Email<span class="text-error">*</span> </label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="abc@gmail.com" value="" required />
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>



                            <div class="form-group col-12-xs">
                                <label for="phoneno">Complaint Type <span class="text-error">*</span> </label>
                                <select class="form-control" name="complainttype" id="complainttype" value="" required />

                                <option value="technical">Technical</option>
                                <option value="transcations">Transaction related</option>
                                <option value="other">Other</option>

                                </select>
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>

                            <div class="form-group col-12-xs">
                                <label for="compaint">Complaint<span class="text-error">*</span> </label>

                                <textarea style="font-family: poppins; resize:none;" class="text-gray" id="complaint" name="complaint" rows="4" cols="117"></textarea>
                                <p class="form-control form-feedback text-error">

                                </p>
                            </div>


                            <div class="col-8-m display">
                                <input type="submit" class="marketplace__help-btn" name="complaintbtn" value="Submit complaint"> 
                            </div>

                        </form>

                    </div>
                </div>


            </div>

            <div class="col-12-xs col-5-lg p-3">
                <img src="<?php echo URLROOT; ?>/img/public/complaint.png " alt="">
            </div>


        </div>

    </div>
    </div>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>