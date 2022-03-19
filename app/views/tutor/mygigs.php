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
        <div class="container">
            <div class="row pt-3">
                <h1>
                    My Gigs
                </h1>
                <div class="col-12-xs">

                    <head>
                        <?php include APPROOT . '/views/includes/header.php'; ?>
                    </head>
                    <div class="container" style="min-height:600px;">
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
                                                <!-- Product 1 -->
                                                <tr>
                                                    <td class="main">
                                                        1
                                                    </td>
                                                    <td>
                                                        Guitar Lessons for Beginners
                                                    </td>
                                                    <td>
                                                        LKR 2000
                                                    </td>
                                                    <td class="text-warning">
                                                        Pending
                                                    </td>
                                                    <td class="links">
                                                        <a href="#" class="info">Edit</a>
                                                    </td>
                                                    <td class="links">
                                                        <a href="#" class="error">Delete</a>
                                                    </td>
                                                </tr>
                                                <!-- Product 1 -->
                                                <tr>
                                                    <td class="main">
                                                        2
                                                    </td>
                                                    <td>
                                                        Pre Engineering
                                                    </td>
                                                    <td>
                                                        LKR 6000
                                                    </td>
                                                    <td class="text-success">
                                                        Approved
                                                    </td>
                                                    <td class="links">
                                                        <a href="#" class="info">Edit</a>
                                                    </td>
                                                    <td class="links">
                                                        <a href="#" class="error">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="main">
                                                        3
                                                    </td>
                                                    <td>
                                                        C Programming for Beginners
                                                    </td>
                                                    <td>
                                                        LKR 5000
                                                    </td>
                                                    <td class="text-error">
                                                        Declined
                                                    </td>
                                                    <td class="links">
                                                        <a href="#" class="info">Edit</a>
                                                    </td>
                                                    <td class="links">
                                                        <a href="#" class="error">Delete</a>
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
    </main>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>