<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutor Registration</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/navbar.php';
    ?>

    <body>

        <!-- Tutor Verification -->
        <div class="container tutor-verification pt-lg-4 pt-xs-2 pb-4">
            <div class="row">
                <div class="col-12-xs">
                    <p class="text-center font-lg-xxl font-xs-lg mb-xs-1 mb-lg-2">
                        Tutor Verification
                    </p>
                </div>
                <form action="<?php echo URLROOT; ?>/registration/tutorverification" method="POST" enctype="multipart/form-data" class="form-control row" style="width: 100%;">
                    <div class="form-group token-tags col-12-xs">
                        <label for="subjects">Specialized Subjects</label>
                        <input type="text" class="form-control tags" name="subjects" id="skill">
                    </div>
                    <div class="form-group col-12-xs col-4-lg pr-lg-1">
                        <label for="subjects">Workplace</label>
                        <input type="text" class="form-control" name="workplace" id="workplace" value="" required />
                    </div>
                    <div class="form-group col-12-xs col-4-lg pr-lg-1">
                        <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" name="occupation" id="occupation" value="" required />
                    </div>
                    <div class="form-group col-12-xs col-4-lg">
                        <label for="qualification">Qualification</label>
                        <select name="qualification" id="qualification" value="<?php echo $data['qualification'] ?>" required>
                            <option value="" disabled selected></option>
                            <option value="highschool">High School</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="postgraduate">Postgraduate</option>
                            <option value="diploma">Diploma Holder</option>
                            <option value="phd">Phd Holder</option>
                        </select>
                    </div>
                    <div class="form-group col-12-xs">
                        <p class="text-gray">To be registered as a tutor, you need to upload documents including a photo of NIC or passport along with any other document that proves the above mentioned qualifications. <a href="#" class="text-primary"> more details...</a></p>
                    </div>
                    <div class="mt-1 col-12-xs">
                        <input style="border: 0;" class="pointer" type="file" name="file" id="file">
                        <p class="form-control form-feedback text-error">
                            <?php echo $data['fileError'] ?>
                        </p>
                    </div>

                    <div class="form-group col-12-xs col-6-lg">
                        <button onClick="document.location.href='<?php echo URLROOT . '/registration/skipped' ?>'" id="skip" name="skip" value="skip" class="form-control mr-lg-1 ml-lg-0">
                            Skip for Now
                        </button>
                    </div>
                    <div class="form-group col-12-xs col-6-lg">
                        <button type="submit" id="submit" name="submit" value="submit" class="form-control mr-lg-0 ml-lg-1">
                            Submit for Review
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <?php
        include APPROOT . '/views/registration/components/subjects.php';
        ?>

        <?php
        include APPROOT . '/views/includes/footer.php';
        ?>

    </body>

</html>