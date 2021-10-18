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
                <div class="input-field"> <input class="pointer" type="text" name="dob" id="dob" onfocus="(this.type='date')" value="<?php echo $data['dob'] ?>" required>
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
<div class="subscribe">

    <input type="checkbox" id="sub" name="sub" value="<?php echo $data['sub']  ?>">

    <div class="join-now"><span class="subtitle-3 gray">Subscribe to our flexguru newsletters and agree to receive emails from flexguru.</span></div>


</div>

<button class="button_reg pointer btn-text" id="submit" value="submit" type="submit">REGISTER</button>

</br>

<style>
    .subscribe {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px 0 5px 0;
    }

    .subscribe input[type="checkbox"] {
        margin: 7px 10px 0 0;
        transform: scale(1.2);
        cursor: pointer;
    }
</style>