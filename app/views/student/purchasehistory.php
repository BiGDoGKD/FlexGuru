<!-- A Table showing all the completed purchases of a student -->
<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/request.css' ?>">
<div class="container">
    <style>
        .admin-create {
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }



        .purchase_history {
            border-collapse: collapse;
            margin: 25px auto;
            font-size: 0.9em;
            width: 90%;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            color: var(--on-secondary);
        }

        .purchase_history thead tr {
            background-color: var(--primary);
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .purchase_history th,
        .purchase_history td {
            padding: 12px 15px;
        }

        .purchase_history tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .purchase_history tbody tr:nth-of-type(even) {
            background-color: #FFF3F9;
        }

        .purchase_history tbody tr:last-of-type {
            border-bottom: 2px solid var(--primary);
        }

        .purchase_history tbody tr:hover {
            font-weight: bold;
            color: var(--primary);
        }

        .purchase_history tbody tr.active-row {
            font-weight: bold;
            color: var(--primary);
        }
    </style>
    <h4 style="margin: 30px 0;">Purchase History</h4>
    <table class="purchase_history">
        <thead center>
            <tr>
                <th>Session ID</th>
                <th>Purchase Date</th>
                <th>Tutor</th>
                <th>Subject</th>
                <th>Area</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody class="">
            <?php

            for ($i = 0; $i < 12; $i++) {

            ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td>10-10-2021</td>
                    <td>Mr.Kumarasiri Withana</td>
                    <td>Mathematics</td>
                    <td>Calculus</td>
                    <td>Grade 12 Lesson Calculus</td>
                    <td>1500</td>

                    <td>Completed <!-- get the status of the gig from database --><?php ?></td>
                </tr>

            <?php
            } ?>
        </tbody>
        </tr>
    </table>
</div>
<?php
include APPROOT . '/views/includes/footer.php';
?>





