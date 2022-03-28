<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/student-navbar.php';
    ?>

    <main>
        <div class="container publish-gig pt-lg-4 pt-xs-2 pb-4">
            <div class="row">
                <div class="col-12-xs">
                    <h1 class="text-lg-start text-dark text-xs-center font-lg-xl font-xs-lg mb-xs-1 mb-lg-2">
                        Create Special Service Request (SSR)
                    </h1>
                </div>

                <div class="gig-form col-12-xs col-8-lg">
                    <form action="<?php echo URLROOT; ?>/student/request" method="POST" style="width: 100%;" class="form-control row" enctype="multipart/form-data">
                        <div class="form-group col-12-xs">
                            <label for="firstname">SSR Title <span class="text-error">*</span> </label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter the Subject Area... (ex:- Pure Maths)" value="" required />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="firstname">SSR Description <span class="text-error">*</span></label>
                            <textarea class="form-control" style="resize: none;" placeholder="Enter the description..." maxlength="2000" minlength="255" name="description" id="description" cols="30" rows="10"></textarea>
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="firstname">Budget <span class="text-error">*</span></label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price.." value="" required />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>

                        <div class="form-group col-12-xs">
                            <label for="duration">Service need within <span class="text-error">*</span></label>
                            <select name="duration" id="duration" value="<?php echo $data['duration'] ?>" required>
                                <option class="select-option" value="" disabled selected>Select the delivery time.</option>
                                <option class="select-option" value="1">1 days</option>
                                <option class="select-option" value="2">2 days</option>
                                <option class="select-option" value="3">3 days</option>
                                <option class="select-option" value="4">4 days</option>
                                <option class="select-option" value="5">5 days</option>
                                <option class="select-option" value="6">6 days</option>
                                <option class="select-option" value="7">7 days</option>
                                <option class="select-option" value="8">8 days</option>
                                <option class="select-option" value="9">9 days</option>
                                <option class="select-option" value="10">10 days</option>
                                <option class="select-option" value="11">11 days</option>
                                <option class="select-option" value="12">12 days</option>
                                <option class="select-option" value="13">13 days</option>
                                <option class="select-option" value="14">14 days</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="method">Delivery Method <span class="text-error">*</span></label>
                            <select name="method" id="method" value="<?php echo $data['method'] ?>" required>
                                <option class="select-option" value="" disabled selected>Select the delivery method.</option>
                                <option class="select-option" value="zoom">Zoom</option>
                                <option class="select-option" value="teams">Microsoft Teams</option>
                                <option class="select-option" value="google">Google Meet</option>
                                <option class="select-option" value="other">Other</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="medium">Medium <span class="text-error">*</span></label>
                            <select name="medium" id="medium" value="<?php echo $data['medium'] ?>" required>
                                <option class="select-option" value="" disabled selected>Select the medium.</option>
                                <option class="select-option" value="English">English</option>
                                <option class="select-option" value="Sinhala">Sinhala</option>
                                <option class="select-option" value="Tamil">Tamil</option>
                                <option class="select-option" value="Other">Other</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="subject">Subject <span class="text-error">*</span></label>
                            <select name="subject" id="subject" value="<?php echo $data['subject'] ?>" required>
                                <option class="select-option" value="" disabled selected>Select the subject.</option>
                                <option class="select-option" value="Math">Math</option>
                                <option class="select-option" value="English">English</option>
                                <option class="select-option" value="Science">Science</option>
                                <option class="select-option" value="History">History</option>
                                <option class="select-option" value="Geography">Geography</option>
                                <option class="select-option" value="Other">Other</option>
                            </select>
                            <p class="form-control form-feedback text-error">
                            </p>
                        </div>
                        <div class="form-group col-12-xs">
                            <label for="lesson">Lesson <span class="text-error">*</span></label>
                            <input type="text" class="form-control" name="lesson" id="lesson" placeholder="Enter the lesson." value="" required />
                            <p class="form-control form-feedback text-error">

                            </p>
                        </div>

                        <div class="form-group col-12-xs">
                            <input type="submit" onclick="this.form.submit();this.disabled=true;this.value='Sending, please wait...';" id="submit" name="submit" value="submit" class="form-control" />
                        </div>
                    </form>
                </div>
                <div class="gig-instructions col-12-xs col-4-lg pl-lg-3 mt-xs-4 mt-lg-0">
                    <div class="row justify-lg-content-start flex-xs-col flex-lg-row align-xs-items-center">
                        <h1>Instructions</h1>
                        <p class="font-lg mb-1 mt-2 text-black text-xs-center text-lg-left">Example SSR</p>
                        <div class="service-gig" style="width: 255px;">



                        </div>
                    </div>
                    <p class="font-lg mt-2 mb-1 text-xs-center text-lg-left">SSR Title</p>
                    <p class="text-gray text-xs-center text-lg-left">Mathematics Integral Differentation</p>
                    <p class="font-lg mt-2 mb-1 text-xs-center text-lg-left">SSR Description</p>
                    <p class="text-gray text-xs-center text-lg-left">ex: I am not confident in finding solutions for Integral differentiation problems 2018 A/L Maths Past Paper. Need Help . </p>
                </div>
            </div>

        </div>
        </div>
    </main>

</body>

</html>






























<?php
include APPROOT . '/views/includes/footer.php';
?>
</body>

</html>