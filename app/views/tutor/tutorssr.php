<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Special Service Request</title>
  <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
  <?php
  include APPROOT . '/views/includes/tutor-navbar.php';
  ?>
  <main>
    <div class="container base-container">
      <div class="row pt-3">
        <h1>
          Special Service Requests
        </h1>
        <div class="col-12-xs">

          <head>
            <?php include APPROOT . '/views/includes/header.php'; ?>
          </head>
          <div class="container">
            <div class="table-home pt-3 pb-5">
              <div class="table-container">
                <div class="table-box">
                  <div class="table-self">
                    <table>
                      <thead>
                        <tr>
                          <th scope="col">
                            ServiceId
                          </th>
                          <th scope="col">
                            Title
                          </th>

                          <th scope="col">
                            Description
                          </th>
                          <th scope="col">
                            Budget
                          </th>
                          <th scope="col">
                            Duration
                          </th>
                          <th scope="col">
                            Medium
                          </th>
                          <th scope="col">
                            Subject
                          </th>
                          <th scope="col">
                            Lesson
                          </th>
                          <th scope="col">
                            Response
                          </th>

                        </tr>
                      </thead>
                      <tbody>


                        <?php

                        if ($data->message == 'Special Services Message Read Failed.') {
                        ?>
                          <tr>
                            <td colspan="8" class="text-center">
                              You have no classes yet.
                            </td>
                          </tr>
                          <?php
                        } else {
                          $i = 1;
                          foreach ($data as $service) {
                            $class = (array)$service;
                          ?>
                            <!-- Product <?php echo $i; ?> -->
                            <tr <?php if ($i % 2 == 0) {
                                  echo `class='stripe'`;
                                } ?>>

                              <!-- service id  -->
                              <td class="main">
                                <?php echo $class['serviceid']; ?>
                              </td>

                              <!-- request title  -->
                              <td class="main" style="text-align: center;">
                                <a href="#" class="info"> <?php echo $class['title']; ?></a>
                              </td>

                              <!-- request description -->
                              <td class="description">
                                <?php echo $class['description']; ?>
                              </td>

                              <!-- request budget  -->
                              <td>
                                <?php echo $class['budget']; ?>
                              </td>

                              <!-- request duration  -->
                              <td>
                                <?php echo $class['duration']; ?>
                              </td>
                              <!-- request medium -->
                              <td>
                                <?php echo $class['medium']; ?>
                              </td>
                              <!-- request subject -->
                              <td>
                                <?php echo $class['subject']; ?>
                              </td>
                              <!-- request lesson -->
                              <td>
                                <?php echo $class['lesson']; ?>
                              </td>

                              <td>
                                <button class="btn" onclick=" location.href=' <?php echo URLROOT . '/tutor/tutorssraccept/' . $class['serviceid'] ?>'">Accept</button>
                              </td>

                            </tr>
                            <style>
                              td {
                                text-align: start;
                              }
                            </style>
                        <?php
                            $i++;
                          }
                        } ?>
                      </tbody>
                    </table>
                    <style>
                      table td {
                        vertical-align: top !important;
                        text-align: left !important;
                      }

                      table td.description {
                        max-width: 300px;
                        white-space: none !important;
                        overflow-x: wordwrap;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  include APPROOT . '/views/includes/modals/modal-delete-gig.php';
  ?>
  <?php
  include APPROOT . '/views/includes/footer.php';
  ?>
</body>

</html>