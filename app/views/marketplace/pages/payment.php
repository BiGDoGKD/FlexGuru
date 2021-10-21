<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/marketplace/includes/header.php';
?>





<style>
    .container {
        display: flex;
        justify-content: center;
    }


    .left {
        height: 675px;
        width: 600px;
        border: 1px solid #acacac;
        margin-top: 60px;
        border-radius: 24px;
    }

    .right {
        height: 675px;
        width: 550px;
        position: relative;
        margin-top: 60px;
        margin-left: 30px;
        border: 1px solid #acacac;
        border-radius: 24px;
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
        background-color: var(--primary);
        display: flex;
        flex-wrap: nowrap;
        align-items: center;
        padding-left: 30px;
        border-radius: 24px 24px 0 0;
    }

    .heading h5 {
        color: #fff;
    }



    .checkboxvisa {
        height: 60px;
        width: 100%;

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


    .gigdata {
        width: 83%;
        height: 90%;
        margin: 15px auto;
        font-size: 15px;
    }

    .basicdetails {
        line-height: 1.3;
    }
</style>



<div class="container">

    <div class="left">

        <div class="paymentoptions heading">
            <h5 class="bold">Payment Options</h5>
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
                    <button type="submit" class="proceed-btn"><a href="<?php echo URLROOT . '/marketplace/paymentcompleted' ?>">Proceed</a></button>
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
            <h5 class="bold">Summary</h5>
        </div>


        <div class="summarydetails">

            <div class="gigdata">

                <div class="basicdetails">

                    <div class="subtitle-1">Tutor: Mr.Maithreepala Sirisena</div>
                    <div class="subtitle-1">Subject: Political Science</div>
                    <div class="subtitle-1">Deadline: 2021.10.25 00:00</div>



                </div>

                <?php
                include APPROOT . '/views/marketplace/components/test.php';

                ?>

            </div>




        </div>

    </div>

</div>








<!-- footer  -->
<?php
// include APPROOT . '/views/includes/footer.php';
?>