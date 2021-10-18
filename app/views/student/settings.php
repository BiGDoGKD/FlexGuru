<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile settings
    </title>
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        * {

            font-family: "Poppins";
            color: var(--dark);
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {

            margin: 27px 7px;
            display: flex;
            height: 1000px;
        }



        .container .links-side {
            width: 400px;
        }

        .container .links-side a {
            display: block;
            text-decoration: none;
            color: black;

        }

        .container .links-side a:active {
            font-weight: bold;

        }

        .container .links-side ul {
            list-style: none;
            text-align: left;
            margin: 59px 0 0 55px;
        }

        .container .links-side ul li {
            width: 80%;
            margin: 0 auto;
            line-height: 43px;
            color: black;
        }

        .right {
            width: 100%;
        }

        .input-field input {

            width: 430px;
            height: 5px;
        }

        table tbody td {
            width: 170px;
        }

        .table {
            border: 1px solid #acacac;
            margin-left: 0px;


            width: 850;
            height: 460px;
            margin-top: 63px;
            margin-right: 0px;
            margin-left: 0px;
            padding: 25px 0px;

        }


        .button_reg {
            background: #7879F1;
            border: 1px solid #acacac;
            border-radius: 24px;
            outline: none;
            width: 200px;
            height: 35px;
            color: white;
            text-align: center;
            float: right;
            margin-right: 20px;
            cursor: pointer;
            transition: 0.2s all;

        }


        .button_del {

            border: 1px solid #FF6C6C;
            background-color: transparent;
            border-radius: 24px;
            outline: none;
            width: 762px;
            height: 35px;
            color: #FF6C6C;
            text-align: center;
            cursor: pointer;
            transition: 0.2s all;


        }

        .button_del:active {
            transform: scale(0.98);
            /* Scaling button to 0.98 to its original size */
            box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.24);
            /* Lowering the shadow */
        }

        /* Adding transformation when the button is active */

        .button_reg:active {
            transform: scale(0.98);
            /* Scaling button to 0.98 to its original size */
            box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.24);
            /* Lowering the shadow */
        }

        .fa,
        .far,
        .fas {
            font-family: "Font Awesome 5 Free";
            color: #70B276;
        }

        table tbody tr {
            height: 20px;
        }

        .table {
            border-top: 1px solid #ACACAC;
            border-bottom: 1px solid #acacac;

        }

        .successupdate {

            text-align: center;
            padding: 4px;
            border-radius: 24px;
            width: 630px;
            position: relative;
            left: -11px;
            color: #70B276;
            border: 1px solid #70B276;
        }


        .accountdeletion {
            display: flex;
            width: 728px;
            /* background-color: #7879F1; */
            padding: 20px;
            margin: 30px 0;
        }

        .deletereason {
            display: flex;
            width: 728px;
            /* background-color: #7879F1; */
            padding: 20px;
            margin: 30px 0;
            height: 175px;
        }

        .deletiondetails {
            width: 100%;
            text-align: left;
            padding-left: 100px;
        }


        .deletiondetails ul {


            font-size: smaller;
            line-height: 1.5;
            margin-left: 45px;
        }

        .deletiondetails ul li {

            font-family: "Poppins";
            color: var(--dark);

        }

        .deletiondetails span {
            margin-bottom: 11px;

        }

        textarea {
            padding: 15px;
            resize: none;
            border-radius: 24px;
            width: 400px;
        }

        #act_del {
            line-height: 1.3;
            margin-top: 2px;
        }
    </style>
</head>

<body>

    <center>
        <div class="container">


            <div class="links-side">
                <ul>

                    <li><a href="./settings">account</a></li>


                    <li><a href="./security">security</a></li>

                    <li><a href="./notifications">notification</a></li>

                    <li><a href="./billinginformation">billing-information</a></li>



                </ul>






            </div>

            <div class="right">


                <form action="<?php echo URLROOT; ?>/student/settings" method="POST">
                    <div class="table">
                        <h6>UPDATE ACCOUNT</h6>
                        <table style="margin: 5px 0;">

                            <tbody>
                                <tr>
                                    <td>
                                        First Name
                                    </td>
                                    <td>
                                        <div class="input-field"> <input type="text" name="firstname" id="username" required>
                                        </div>
                                        <span class="form-errors error fg-errors">
                                            <?php echo $data['firstnameError']; ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        LastName
                                    </td>
                                    <td>
                                        <div class="input-field"> <input type="text" name="lastname" id="username" required>
                                        </div>
                                        <span class="form-errors error fg-errors">
                                            <?php echo $data['lastnameError']; ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Phone Number
                                    </td>
                                    <td>
                                        <div class="input-field"> <input type="text" name="phoneno" id="phoneno" required>
                                        </div>
                                        <span class="form-errors error fg-errors">
                                            <?php echo $data['phonenoError']; ?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        City
                                    </td>
                                    <td>
                                        <div class="input-field"> <input type="text" name="city" id="city" required>
                                        </div>
                                        <span class="form-errors error fg-errors">
                                            
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <button class="button_reg pointer btn-text" id="submit" name="submit" value="submit" type="submit">SAVE CHANGES</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </form>

                <div class="successupdate">
                    <i class="far fa-check-circle"></i>
                    Settings successfully updated
                </div>

            </div>
            <!-- all input fields are over  -->

            <div class="accountdeletion">
                <div class="subtitle" id="act_del">Account Deletion</div>
                <div class="deletiondetails" style="width: 100%;">

                    <div class="whydelete">
                        <div class="subtitle-1">What happens when you delete your flexguru Account?</div>
                        <ul>
                            <li>Your flexguru content won’t be shown on our system anymore</li>
                            <li>Active sessions will be cancelled.</li>
                            <li>You won’t be able to re-gain last balance of your account.</li>
                            <li>You won’t be able to re-activate the account.</li>
                        </ul>

                        
                    </div>



                </div>






            </div>

            <div class="deletereason">
                <div class="subtitle">I am deleting my account because (optional)</div>
                <textarea id="deletereason" name="deletereason" rows="4" cols="50">
</textarea>


            </div>

            <button class="button_del pointer btn-text" id="delete" value="delete" type="submit">Delete My Account</button>




        </div>

        </div>
    </center>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>