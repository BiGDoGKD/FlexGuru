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
    include APPROOT . '/views/includes/affiliate-navbar.php';
    ?>
    <main class="checkout-page">




        <div class="base-container container mt-2">
            <div class="row">
                <div class="col-12-xs col-12-lg">
                    <div class="order-box">
                        <div class="order-box__header">
                            <div class="order-box__header__details">
                                <h1 class="text-primary"><i class="fas fa-users-class"></i>Affiliate Metrics</h1>
                                <!-- <p class="order-box__header__details__student-id font-lg text-gray">student: @| <span class="order-box__header__details__date"></span></p> -->
                            </div>
                            <div class="order-box__header__price">
                                <h1 class="font-xl"></h1>
                            </div>
                        </div>
                        
                        <div class="order-box__body">
                            <div class="table-home pt-3 pb-3">
                                <div class="table-container">
                                    <div class="table-box">
                                        <div class="table-self">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            Month
                                                        </th>
                                                        <th scope="col">
                                                            Referral Count
                                                        </th>
                                                        <th scope="col">
                                                            Registrations through Referral Link
                                                        </th>
                                                        <th scope="col">
                                                            Gig Purchases through Referral Link
                                                        </th>
                                                        <th scope="col">
                                                            Special Service Request purchases through Referral Link
                                                        </th>
                                                        <th scope="col">
                                                            Bounce Rate
                                                        </th>
                                                        <th scope="col">
                                                            Total Amount
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="col">
                                                            January
                                                        </td>
                                                        <td scope="col">
                                                            5
                                                        </td>
                                                        <td scope="col">
                                                            5
                                                        </td>
                                                        <td scope="col">
                                                            6
                                                        </td>
                                                        <td scope="col">
                                                            6
                                                        </td>
                                                        <td scope="col">
                                                            9
                                                        </td>
                                                        <td scope="col">
                                                            1200
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td scope="col">
                                                            February
                                                        </td>
                                                        <td scope="col">
                                                            5
                                                        </td>
                                                        <td scope="col">
                                                            7
                                                        </td>
                                                        <td scope="col">
                                                            4
                                                        </td>
                                                        <td scope="col">
                                                            8
                                                        </td>
                                                        <td scope="col">
                                                            3
                                                        </td>
                                                        <td scope="col">
                                                            2400
                                                        </td>

                                                    </tr>









                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <h1>Total Earnings : LKR 3600.00</h1>


            <div class="row mt-4">
                <h1 class="text-primary"><i class="fas fa-users-class"></i>Withdraw Funds</h1>
                <form action="<?php echo URLROOT; ?>/affiliate/withdrawearnings" method="POST" style="width: 100%;" class="form-control row">
                    <div class="form-group col-12-xs">
                        <label for="accountname">Bank Account - Name <span class="text-error">*</span> </label>
                        <input type="text" class="form-control" name="accountname" id="accountname" placeholder=" S.N. Perera" value="" required />
                        <p class="form-control form-feedback text-error">
                        </p>
                    </div>
                    <div class="form-group col-12-xs">
                        <label for="bank">Bank <span class="text-error">*</span> </label>
                        <input type="text" class="form-control" name="bank" id="bank" placeholder="ex: People's Bank " value="" required />
                        <p class="form-control form-feedback text-error">
                        </p>
                    </div>
                    <div class="form-group col-12-xs">
                        <label for="branch">Branch <span class="text-error">*</span> </label>
                        <input type="text" class="form-control" name="branch" id="branch" placeholder=" ex: Maharagama" value="" required />
                        <p class="form-control form-feedback text-error">
                        </p>
                    </div>
                    <div class="col-8-m display mb-3">
                        <input type="submit" class="marketplace__help-btn" name="complaintbtn" value="Withdraw Funds">
                    </div>
                </form>
            </div>
        </div>

    </main>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>