<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">
  <title></title>

  <style media="screen">
    * {

      font-family: "Poppins";
      color: var(--dark);
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .container {

      margin: 0px auto;
      display: flex;
      height: 1100px;
      width: 90vw;
      padding: 20px;
    }

    .left {
      width: 1000px;
      height: 1200px;

      padding: 20px;
    }

    .right {
      width: 700px;
      height: 1200px;

      padding: 20px;
    }

    .order_top {

      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #order_heading {
      font-weight: 400;
      font-size: 30px;
      color: var(--primary);
    }

    .buyer {
      margin-top: -49px;
      font-size: 19px;
    }

    .countdown {
      margin: 0 auto;
      width: 800px;
      height: 300px;
      font-size: 40px;
      z-index: 333;

    }

    .countdowndetails {

      margin: 0 auto;
      width: 533px;
      height: 300px;
      font-size: 40px;
      display: flex;
      justify-content: space-between;

    }

    .price {
      font-size: -webkit-xxx-large;
      padding: 10px;
      font-weight: 700;
    }


    form.example input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      float: left;
      width: 80%;
      background: #f1f1f1;
    }

    form.example button {
      float: left;
      width: 20%;
      padding: 0px;
      background: var(--primary);
      color: white;
      font-size: 22px;
      border: 1px solid grey;
      border-left: none;
      cursor: pointer;
      height: 46.5px;
    }


    form.example button:hover {
      background: #0b7dda;
    }

    form.example::after {
      content: "";
      clear: both;
      display: table;
    }


    .searchhistory {
      position: relative;
      top: 140px;
    }

    p {
      text-align: center;
      font-size: 74px;
      margin-top: 48px;
    }

    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 700px;
    }

    table {
      margin-top: 30px;
    }

    table tbody td {
      width: 350px;
      text-align: left-align;

      padding-left: 75px;
    }

    thead {
      background-color: #acacac;
      border-collapse: collapse;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }

    .chatarea {

      width: 100%;
      height: 400px;
      border: 1px solid #acacac;


    }

    .chatarea textarea {

      padding: 10px 10px;
      margin: 50px;

    }

    .flex-body {
      padding: 0 2.7vw;
    }

    .ctdwn {
      height: 100px;
    }
  </style>
</head>

<body>

  <div class="container">

    <div class="left">

      <div class="order_details">

        <div class="order_top">
          <h1 id="order_heading">
            Order #F054F2E6161918
          </h1>





          <div class="price">
            $ 5.00
          </div>

        </div>

        <div class="buyer">
          Buyer:sf23 | May 12, 2015

        </div>


        <!-- item details shown in a table -->
        <div class="item_details">

          <table>
            <thead>
              <th>Session</th>
              <th>Topic</th>
              <th>Duration</th>
              <th>Amount</th>
            </thead>

            <tbody>

              <tr>
                <td>Alfreds </td>
                <td>Maria </td>
                <td>Germany</td>
                <td>$5.00</td>
              </tr>
              <tr>
                <td>Berglunds </td>
                <td>Christina </td>
                <td>Sweden</td>
                <td>$5.00</td>
              </tr>


            </tbody>
          </table>

        </div>


      </div>



      <!-- countdown -->


      <div class="countdown">
        <p id="demo"></p>

        <script>
          // Set the date we're counting down to
          var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

          // Update the count down every 1 second
          var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
              minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
              clearInterval(x);
              document.getElementById("demo").innerHTML = "EXPIRED";
            }
          }, 1000);
        </script>

        <div class="countdowndetails">

          <div class="ctdwn">Days</div>
          <div class="ctdwn">Hrs </div>
          <div class="ctdwn">Days</div>
          <div class="ctdwn">Mins</div>

        </div>


        <!-- days hours minutes seconds -->

      </div>


      <div class="tutor_student_connect">

        <div class="communication">

        </div>
        <div class="orderrequirements">


        </div>

      </div>

      <div class="chatarea">

        <center>
          <textarea name="" id="" cols="100" rows="10"></textarea>
        </center>

      </div>



    </div>



    <div class="right">

      <div class="searchhistory">
        <div class="myhistory">
          <h6 style="padding-left: 50px; font-size:15px;">my history with <a href="#"> Buyer:sf23 </a></h6>
        </div>
        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
          <input type="text" placeholder="Search.." name="search2">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>





    </div>





  </div>

  <?php
  include APPROOT . '/views/includes/footer.php';
  ?>

</body>

</html>