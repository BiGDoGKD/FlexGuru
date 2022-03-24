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
    include APPROOT . '/views/includes/tutor-navbar.php';
    ?>
    <main>
        <div class="container base-container">
            <div class="row pt-3">
                <h1>
                    My Class List
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
                                                        Class ID
                                                    </th>
                                                    <th scope="col">
                                                        Student
                                                    </th>

                                                    <th scope="col">
                                                        Type
                                                    </th>
                                                    <th scope="col">
                                                        Deadline
                                                    </th>
                                                    <th scope="col">
                                                        Status
                                                    </th>
                                                    <th scope="col">
                                                        Expected Income
                                                    </th>
                                                    <th scope="col" class="links">
                                                        <span class="sr-only">View</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                if (!$data) {
                                                ?>
                                                    <tr>
                                                        <td colspan="7" class="text-center">
                                                            You have no classes yet.
                                                        </td>
                                                    </tr>
                                                    <?php
                                                } else {
                                                    $i = 1;
                                                    foreach ($data as $gig) {
                                                        $class = (array)$gig;
                                                    ?>
                                                        <!-- Product <?php echo $i; ?> -->
                                                        <tr <?php if ($i % 2 == 0) {
                                                                echo `class='stripe'`;
                                                            } ?>>

                                                            <!-- class id  -->
                                                            <td class="main">
                                                                <?php echo $class['classid']; ?>
                                                            </td>

                                                            <!-- student username  -->
                                                            <td class="links" style="text-align: center;">
                                                                <a href="#" class="info"> <?php echo $class['studentusername']; ?></a>
                                                            </td>

                                                            <!-- type  -->
                                                            <td style="text-transform: uppercase;">
                                                                <?php echo $class['type']; ?>
                                                            </td>

                                                            <!-- deadline  -->
                                                            <td>
                                                                <?php echo $class['deadline']; ?>
                                                            </td>

                                                            <!-- status  -->
                                                            <?php
                                                            if ($class['status'] == 'pending') {
                                                                echo '<td class="text-warning">' . $class['status'] . '</td>';
                                                            } else if ($class['status'] == 'cancelled') {
                                                                echo '<td class="text-error">' . $class['status'] . '</td>';
                                                            } else if ($class['status'] == 'completed') {
                                                                echo '<td class="text-success">' . $class['status'] . '</td>';
                                                            } else if ($class['status'] == 'expired') {
                                                                echo '<td class="text-error">' . $class['status'] . '</td>';
                                                            } else if ($class['status'] == 'in-progress') {
                                                                echo '<td class="text-info">' . $class['status'] . '</td>';
                                                            }
                                                            ?>

                                                            <!-- expected income  -->
                                                            <td>
                                                                <?php echo 'LKR ' . $class['fee'] * 90 / 100; ?>
                                                            </td>

                                                            <!-- view  -->
                                                            <td class="links">
                                                                <a href="<?php echo URLROOT . '/tutor/class/' . $class['classid'] ?>" class="info">View</a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                        $i++;
                                                    }
                                                } ?>
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
    </main>
    <?php
    include APPROOT . '/views/includes/modals/modal-delete-gig.php';
    ?>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>