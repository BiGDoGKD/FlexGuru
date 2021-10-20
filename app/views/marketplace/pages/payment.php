<?php
include APPROOT . '/views/includes/data.php';
// include APPROOT . '/views/marketplace/includes/header.php';
?>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">

<style>
    * {

        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        background-color: #eeffaa;
        width: 1000px;
        height: 1000px;
        margin-left: 260px;
        display: flex;


    }

    .header {
        height: 60px;
        width: 100vw;
        background-color: #aabbcc;
        display: flex;
        flex-wrap: nowrap;
    }

    .left {

        height: 675px;
        width: 600px;
        background-color: #767564;

        margin-top: 60px;

    }

    .right {

        height: 675px;
        width: 550px;
        background-color: red;
        position: relative;

        margin-top: 60px;
        margin-left: 30px;




    }


    .right .summarydetails {

        width: 360px;
        height: 535px;
        margin: 60px auto 0;
        border: 1px solid #ddd;
        border-radius: 6px;
        background-color: #fff;
        box-shadow: 1px 2px 3px 0 rgb(0 0 0 / 10%);
    }




    


    .heading {
        height: 60px;
        width: 100%;
        background-color: #aabbcc;
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        padding-left: 30px;
    }

    .heading p {
        font-size: 24px;
        font-weight: 700;

    }

    .checkboxvisa {
        height: 60px;
        width: 100%;
        background-color: #aacccc;
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        padding-left: 30px;

    }

    .checkboxvisa .card-images {
        display: flex;
        height: 100%;
        width: auto;
        margin: 0 5px;
    }

    .checkboxpaypal {
        height: 60px;
        width: 100%;
        background-color: #aabbcc;
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        padding-left: 30px;

    }

    .card-images img {
        margin: 0 5px;
    }

    .checkboxvisa .details p {
        font-size: 8px;
        font-weight: 600;
    }


    .checkboxpaypal {
        transform: translate(0, 298px);

    }

    .checkboxpaypal .card-images img {
        height: 100%;
        width: auto;
    }

    .paymentdetails {
        display: flex;
    }

    .paymentdetails {
        width: 100%;
        overflow: hidden;
    }

    .paymentdetails input[type='text'] {
        width: 180px;
        margin: 0 4px;
    }

    .paymentdetails input[type='text']:nth-child(1) {
        width: 300px;
        margin: 0 4px;
        margin-left: -1px;
        margin-bottom: 23px;
    }





    .credit-card {
        width: 360px;
        height: 430px;
        margin: 60px auto 0;
        border: 1px solid #ddd;
        border-radius: 6px;
        background-color: #fff;
        box-shadow: 1px 2px 3px 0 rgba(0, 0, 0, .10);
    }

    .form-header {
        height: 60px;
        padding: 20px 30px 0;
        border-bottom: 1px solid #e1e8ee;
    }

    .form-body {
        height: 340px;
        padding: 30px 30px 20px;
    }

    .title {
        font-size: 18px;
        margin: 0;
        color: #5e6977;
    }



    .card-number,
    .cvv-input input,
    .month select,
    .year select {
        height: 35px;
        font-size: 14px;
        font-weight: 100;
        line-height: 14px;
    }

    .card-number,
    .month select,
    .year select {
        font-size: 14px;
        font-weight: 100;
        line-height: 14px;
    }

    .card-number,
    .cvv-details,
    .cvv-input input,
    .month select,
    .year select {
        opacity: .7;
        color: #86939e;
    }

    .card-number {
        width: 100%;
        margin-bottom: 20px;
        padding-left: 20px;
        border: 2px solid #e1e8ee;
        border-radius: 6px;
    }

    .month select,
    .year select {
        width: 145px;
        margin-bottom: 20px;
        padding-left: 20px;
        border: 2px solid #e1e8ee;
        border-radius: 6px;
        background: url('caret.png') no-repeat;
        background-position: 85% 50%;
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    .month select {
        float: left;
    }

    .year select {
        float: right;
    }


    .cvv-input input {
        float: left;
        width: 145px;
        padding-left: 20px;
        border: 2px solid #e1e8ee;
        border-radius: 6px;
        background: #fff;
    }

    .cvv-details {
        font-size: 12px;
        font-weight: 300;
        line-height: 16px;
        float: right;
        margin-bottom: 20px;
    }

    .cvv-details p {
        margin-top: 6px;
    }


    .paypal-btn,
    .proceed-btn {
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        border-color: transparent;
        border-radius: 6px;
        height: 35px;
    }

    .proceed-btn {
        margin-bottom: 10px;
        background: #7dc855;

    }

    .paypal-btn a,
    .proceed-btn a {
        text-decoration: none;
    }

    .proceed-btn a {
        color: #fff;
    }

    .paypal-btn a {
        color: rgba(242, 242, 242, .7);
    }

    .paypal-btn {
        padding-right: 95px;
        background: url('paypal-logo.svg') no-repeat 65% 56% #009cde;
    }

    * {
        box-sizing: border-box;
    }

    body,
    html {
        height: 100%;
        min-height: 100%;
    }

    body {
        font-family: 'Roboto',
            sans-serif;
        margin: 0;
        background-color: #e7e7e7;
    }
</style>

<div class="header">

    <div class="logo">

    </div>


    <div class="steps">

        <div class="step1 step"></div>
        <div class="step2 step"></div>
        <div class="step3 step"></div>

    </div>

</div>

<div class="container">

    <div class="left">

        <div class="paymentoptions heading">
            <p>Payment Options</p>
        </div>

        <div class="checkboxvisa">
            <input type="radio" name="checkvisa" id="checkvisa">
            <div class="card-images">

                <img src="<?php echo URLROOT . '/public/img/marketplace/payment/visa.png' ?>" alt="">

                <img src="<?php echo URLROOT . '/public/img/marketplace/payment/mastercard.png' ?>" alt="">

                <img src="<?php echo URLROOT . '/public/img/marketplace/payment/discover.png' ?>" alt="">

            </div>
            <div class="detail">
                <p>Credit and Debit Cards

                </p>
            </div>

        </div>

        <div class="paymentdetails">


            <form class="credit-card">
                <div class="form-header">
                    <h4 class="title">Credit card detail</h4>
                </div>

                <div class="form-body">
                    <!-- Card Number -->
                    <input type="text" class="card-number" placeholder="Card Number">

                    <!-- Date Field -->
                    <div class="date-field">
                        <div class="month">
                            <select name="Month">
                                <option value="january">January</option>
                                <option value="february">February</option>
                                <option value="march">March</option>
                                <option value="april">April</option>
                                <option value="may">May</option>
                                <option value="june">June</option>
                                <option value="july">July</option>
                                <option value="august">August</option>
                                <option value="september">September</option>
                                <option value="october">October</option>
                                <option value="november">November</option>
                                <option value="december">December</option>
                            </select>
                        </div>
                        <div class="year">
                            <select name="Year">
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>

                    <!-- Card Verification Field -->
                    <div class="card-verification">
                        <div class="cvv-input">
                            <input type="text" placeholder="CVV">
                        </div>
                        <div class="cvv-details">
                            <p>3 or 4 digits usually found <br> on the signature strip</p>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
                    <button type="submit" class="paypal-btn"><a href="#">Pay With</a></button>
                </div>
            </form>









        </div>


        <!-- <div class="checkboxpaypal">
            <input type="radio" name="checkpaypal" id="checkpaypal">
            <div class="card-images">

                <img src="<?php echo URLROOT . '/public/img/marketplace/payment/paypal.png' ?>" alt="">
            </div>






        </div> -->



    </div>
    <div class="right">

        <div class="Summary heading">
            <p>Summary</p>
        </div>


        <div class="summarydetails">






        </div>

    </div>

</div>








<!-- footer  -->
<?php
// include APPROOT . '/views/includes/footer.php';
?>