<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: Kesara Karannagoda
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATE : Oct, 11, 2021
 * FILE TYPE: View
 * PARENT FOLDER: admin/components
 */

//DATA
include APPROOT . '/views/includes/data.php';

?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">

<!-- content  -->
<style>
    .admin_registration {
        width: 80%;
        align-items: center;
        margin: 0 auto;
        padding: 90px;
    }

    .admin_registration td {
        position: relative;
    }

    .subscribe {
        display: grid;
        width: 50%;
        grid-template-columns: 20px 500px;
    }

    #checksubscribe {
        padding: 20px;
        background: #ff0000;
        margin-top: 10px;
    }

    .button_reg {
        background: #7879F1;
        padding: 13px 25px;
        border: 1px solid #acacac;
        border-radius: 24px;
        outline: none;
        width: 745px;
        color: white;
        margin-top: 8px;
    }

    .join-now {
        font-size: 13px;
        margin-top: 7px;
    }

    .form-errors {
        position: absolute;
        top: 65px;
        left: 48;
    }
</style>




</head>

<body>
    <div class="admin_registration">
        <center>
            <h3>Admin Registration</h3>
            <form action="<?php echo URLROOT; ?>/admin/verification" method="POST">
                <!-- this two same line -->
                <table>
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="input-field"> <input type="text" name="firstname" id="firstname" value="<?php echo $data['firstname'] ?>" required>
                                    <span class="placeholder">Firstname</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['firstnameError']; ?>
                                </span>
                            </td>
                            <td>
                                <div class="input-field"> <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname'] ?>" required>
                                    <span class="placeholder">Lastname</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['lastnameError']; ?>
                                </span>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="input-field"> <input type="text" name="username" id="username" value="<?php echo $data['username'] ?>" required>
                                    <span class="placeholder">Username</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['usernameError']; ?>
                                </span>
                            </td>
                            <td>

                                <div class="input-field"> <input type="email" name="email" id="email" value="<?php echo $data['email'] ?>" required>
                                    <span class="placeholder">Email</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['emailError']; ?>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="input-field"> <input type="password" name="password" id="password" value="<?php echo $data['password'] ?>" required>
                                    <span class="placeholder">Password</span>
                                    <span class="form-errors error fg-errors">
                                        <?php echo $data['passwordError']; ?>
                                    </span>
                                </div>
                            <td>
                                <div class="input-field"> <input type="password" name="confpassword" id="confpassword" value="<?php echo $data['confpassword'] ?>" required>
                                    <span class="placeholder">Confirm Password</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['confpasswordError']; ?>
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="input-field">
                                    <select class="pointer" type="" name="gender" id="gender" value="<?php echo $data['gender'] ?>" required>
                                        <option class="select-option" value="" disabled selected></option>
                                        <option class="select-option pointer" value="male">Male</option>
                                        <option class="select-option pointer" value="female">Female</option>
                                        <option class="select-option pointer" value="other">Other</option>
                                    </select>
                                    <span class="placeholder">Gender</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['genderError']; ?>
                                </span>
                            </td>
                            <td>
                                <div class="input-field"> <input class="pointer" type="text" name="dob" id="dob" onfocus="(this.type='date')" value="<?php echo $data['dob'] ?>">
                                    <span class="placeholder">Birthday</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['dobError']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-field"> <select class="pointer" type="" name="city" id="city" value="<?php echo $data['city'] ?>" required>
                                        <option class="select-option" value="" disabled selected></option>
                                        <?php foreach ($district as $value) {
                                        ?>
                                            <option value="<?php echo $value; ?>" class="select-option pointer"><?php echo $value; ?></option>
                                        <?php
                                        } ?>
                                    </select>
                                    <span class="placeholder">City</span>
                                </div>
                                <span class="form-errors error fg-errors">

                                </span>
                            </td>
                            <td>
                                <div class="input-field"> <input type="text" name="phoneno" id="phoneno" value="<?php echo $data['phoneno'] ?>" required>
                                    <span class="placeholder">Phone No</span>
                                </div>
                                <span class="form-errors error fg-errors">
                                    <?php echo $data['phonenoError']; ?>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="button_reg pointer btn-text" id="submit" value="submit" type="submit">CREATE ADMIN</button>

                </br>



            </form>
        </center>
    </div>
</body>

</html>
<!-- content-end  -->