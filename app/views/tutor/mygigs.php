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
                    My Gigs
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
                                                        Gig ID
                                                    </th>
                                                    <th scope="col">
                                                        Title
                                                    </th>
                                                    <th scope="col">
                                                        Price
                                                    </th>
                                                    <th scope="col">
                                                        Status
                                                    </th>
                                                    <th scope="col" class="links">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                    <th scope="col" class="links">
                                                        <span class="sr-only">Delete</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php
                                                if (!$data) {
                                                ?>
                                                    <tr>
                                                        <td colspan="6" class="text-center">
                                                            You have no services listed yet.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="text-center">
                                                            <button onclick="location.href='<?php echo URLROOT . '/gigs/publish' ?>'" class="btn">Create a new service</button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                } else {
                                                    $i = 1;
                                                    foreach ($data as $gig) {
                                                        $service = (array)$gig;
                                                    ?>
                                                        <!-- Product <?php echo $i; ?> -->
                                                        <tr <?php if ($i % 2 == 0) {
                                                                echo `class='stripe'`;
                                                            } ?>>
                                                            <td class="main">
                                                                <?php echo $i; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $service['title']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo 'LKR ' . $service['price']; ?>
                                                            </td>
                                                            <?php if ($service['status'] == 'pending') { ?>
                                                                <td class="text-warning">
                                                                    Pending
                                                                </td>
                                                            <?php } elseif ($service['status'] == 'approved') {
                                                            ?>
                                                                <td class="text-success">
                                                                    Approved
                                                                </td>
                                                            <?php
                                                            } elseif (
                                                                $service['status'] == 'rejected'
                                                            ) {
                                                            ?>
                                                                <td class="text-danger">
                                                                    Rejected
                                                                </td>
                                                            <?php } ?>

                                                            <td class="links">
                                                                <a href="#" class="info">Edit</a>
                                                            </td>
                                                            <td class="links">
                                                                <a onclick="modalDeleteGig(<?php echo $service['gigid']; ?>)" class="error pointer">Delete</a>
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