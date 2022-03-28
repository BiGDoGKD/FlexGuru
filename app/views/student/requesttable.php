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
  include APPROOT . '/views/includes/student-navbar.php';
  ?>
  <main class="class">
    <div class="base-container container mt-2">
      <div class="row">
        <div class="col-12-xs col-10-lg">
          <div class="order-box">
            <div class="order-box__header">
              <div class="order-box__header__details">
                <h1 class="text-primary"><i class="fas fa-users-class"></i> </h1>
                <p class="order-box__header__details__student-id font-lg text-gray"> <span class="order-box__header__details__date"></span></p>
              </div>
              <div class="order-box__header__price">
                <h1 class="font-xl"> </h1>
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
                              Gig ID
                            </th>
                            <th scope="col">
                              Title
                            </th>
                            <th scope="col">
                              Subject
                            </th>
                            <th scope="col">
                              Revisions
                            </th>
                            <th scope="col">
                              Duration
                            </th>
                            <th scope="col">
                              Amount
                            </th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td scope="col">
                         
                            </td>
                            <td scope="col">
                          
                            </td>
                            <td scope="col">
                           
                            </td>
                            <td scope="col">
                         
                            </td>
                            <td scope="col">
                          
                            </td>
                            <td scope="col">
                            

                          </tr>
                          <tr>
                            <td colspan="4" scope="col">

                            </td>
                            <td scope="col"></td>
                            <td colspan="2" scope="col">
                         
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
    </div>
  </main>

</body>

</html>