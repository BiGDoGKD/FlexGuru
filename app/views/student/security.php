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
            height: 75vh;
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
            width: 850;
            height: 435px;
            margin-top: 63px;
            margin-right: 0px;
            margin-left: 0px;
            border: 1px solid #acacac;
            padding-top: 22px;

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

        #passwordpolicy {
            font-weight: 500;
            letter-spacing: 0.15px;
            line-height: 30px;
            margin-left: 25px;
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



                <div class="table">

                    <h6>CHANGE PASSWORD</h6>
                    <table style="margin: 5px 0;">

                        <tbody>
                            <tr>
                                <td>
                                    Current Password
                                </td>
                                <td>
                                    <div class="input-field"> <input type="text" name="current" id="current" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    New Password
                                </td>
                                <td>
                                    <div class="input-field"> <input type="text" name="new" id="new" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Passoword
                                </td>
                                <td>
                                    <div class="input-field"> <input type="text" name="confirm" id="confirm" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <p id="passwordpolicy">8 characters or longer. Combine upper and lowercase letters and numbers.</p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <button class="button_reg pointer btn-text" id="submit" value="submit" type="submit">SAVE CHANGES</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="successupdate">
                        <i class="far fa-check-circle"></i>
                        Settings successfully updated
                    </div>

                </div>
                <!-- all input fields are over  -->








            </div>

        </div>
    </center>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>


</body>

</html>