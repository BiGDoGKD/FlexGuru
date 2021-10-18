<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: registration
 */
?>
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>



<style>
    .tutor_registration {
        width: 80%;
        align-items: center;
        margin: 0 auto;
        padding: 90px;
    }

    .tutor_registration .tutor-verification {
        height: 460px;
    }

    .tutor_registration .tutor-verification form {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        width: 100%;
    }

    .tutor_registration .tutor-verification form .column {
        flex-direction: column;
    }

    .tutor_registration .tutor-verification form .verification-field {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;
        width: 100%;
    }

    .tutor_registration .tutor-verification form .verification-field .input-field {
        text-align: start;
        width: 30%;
        margin: 0;
    }

    .tutor_registration .tutor-verification form .verification-field .input-field input {
        width: 100%;
    }

    .tutor_registration .tutor-verification form .subject-tags {
        width: 100%;
    }
</style>

<body>
    <div class="tutor_registration">
        <center>
            <h3 class="gray">Tutor Verification</h3>
            <!-- Tutor registration starts here  -->
            <div class="tutor-verification">
                <form action="<?php echo URLROOT; ?>/registration/tutorverification" method="POST" enctype="multipart/form-data">
                    <div class="verification-field column">
                        <h6 class="gray" style="align-self: flex-start; margin-left:8px; margin-bottom:8px;">Specialized Subjects<span class="error">*</span></h6>
                        <div class="input-field" style="width: 97.5%;">
                            <input type="text" class="tags" name="subjects" id="skill">
                        </div>
                    </div>
                    <div class="verification-field">
                        <div class="input-field">
                            <input type="text" name="workplace" id="workplace" value="" required>
                            <span class="placeholder">Workplace</span>
                        </div>
                        <div class="input-field">
                            <input type="text" name="occupation" id="occupation" value="" required>
                            <span class="placeholder">Occupation<span class="error">*</span></span>
                        </div>
                        <div class="input-field">
                            <select class="pointer" type="" name="qualification" id="qualification" value="<?php echo $data['qualification'] ?>" required>
                                <option class="select-option" value="" disabled selected></option>
                                <option class="select-option pointer" value="highschool">High School</option>
                                <option class="select-option pointer" value="undergraduate">Undergraduate</option>
                                <option class="select-option pointer" value="postgraduate">Postgraduate</option>
                                <option class="select-option pointer" value="diploma">Diploma Holder</option>
                                <option class="select-option pointer" value="phd">Phd Holder</option>
                            </select>
                            <span class="placeholder">Qualification <span class="error">*</span></span>
                        </div>
                    </div>
                    <div class="verification-field">
                        <p class="body-2 gray" style="text-align: justify; padding:0 8px">To be registered as a tutor, you need to upload documents including a photo of NIC or passport along with any other document that proves the above mentioned qualifications. <span class="on-error">*</span> <a href="" class="primary"> more details...</a></p>
                    </div>
                    <div class="verification-field" style="display: flex; flex-direction:column;">
                        <input type="file" style="cursor: pointer; margin-left:7px;" name="file" id="file"><span class="subtitle-1 on-error" style="align-self: flex-start; margin:3px 0 0 7px;"><?php echo $data['fileError'] ?></span>
                    </div>
                    <div class="verification-field">
                        <button class="btn btn-text bg-surface border-primary primary w-100" onClick="document.location.href='<?php echo URLROOT . '/registration/skipped' ?>'">Skip Verification</button>
                    </div>
                    <div class="verification-field">
                        <button class="btn btn-text bg-primary on-primary w-100" id="submit" value="submit" type="submit">Submit for Review</button>
                    </div>
                </form>
            </div>
            <?php
            include APPROOT . '/views/registration/components/subjects.php';
            ?>
        </center>
    </div>
</body>

</html>


<?php
include APPROOT . '/views/includes/footer.php';
?>