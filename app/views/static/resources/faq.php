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
 * PARENT FOLDER: pages
 */

?>
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';
?>

<link rel="stylesheet" type="text/css" href="./styles/navbar.css">
<style type="text/css">
  .main {
    display: flex;
  }

  .accordian {
    width: 82%;
    height: 40px;
    padding: 5px 10px;
    justify-content: center;
    border: 3px solid #e6e6e6;
    cursor: pointer;
    border-radius: 24px;
    display: flex;
    margin: 10px 0;
    align-items: center;

  }

  /* make all the cells the same width */
  table {

    width: 100%;
  }

  .left {
    height: 100vh;
  }

  td {
    width: 25%;
  }




  /* each answer */
  .panel {
    width: 82%;
    padding: 0 15px;
    border-left: 4px solid #6db5ff;
    font-size: 14px;
    text-align: justify;
    overflow: hidden;
    max-height: 0;
    transition: all .5s ease-in;
  }

  .panel p {
    color: #000000;
  }

  .right {}

  img {
    margin-top: 100px;
    margin-left: 80px;
    width: 700px;
    height: 700px;
  }

  @media (max-width:1000px) {
    img {
      display: none;
    }

    .right {
      display: none;
    }

    .left {
      margin: 0 auto;
    }
  }
</style>
</head>


  <!-- Navbar -->

  <!-- FAQ -->
  <div class="main">


    <div class="left">
      <div class="container">
        <table cellspacing="30">
          <tbody>
            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>




          </tbody>
        </table>

      </div>

    </div>

    <div class="right">

      <div class="container">
        <table cellspacing="30">
          <tbody>
            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div class="accordian">
                  How can I select the item category which I need ?
                </div>
                <div class="panel">
                  <p>The "Products" page has a filter option. Then select the desired category and click the "Filter" button. The system will then show you the items related to the category you want.</p>
                </div>
              </td>
            </tr>



          </tbody>
        </table>
        <!-- script snippet for faq panel -->
        <script>
          var acc = document.getElementsByClassName('accordian');
          var i;
          var len = acc.length;
          for (i = 0; i < len; i++) {
            acc[i].addEventListener('click',
              function() {
                this.classList.toggle('active');
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                  panel.style.maxHeight = null;
                } else {
                  panel.style.maxHeight = panel.scrollHeight + 'px';
                }
              }
            );
          }
        </script>
      </div>

    </div>

  </div>
</body>
<?php
include APPROOT . '/views/includes/footer.php';
?>

</html>