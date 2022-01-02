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



        .users-accounts {
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

        .users-accounts thead tr {
            background-color: var(--primary);
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .users-accounts th,
        .users-accounts td {
            padding: 12px 15px;
        }

        .users-accounts tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .users-accounts tbody tr:nth-of-type(even) {
            background-color: #FFF3F9;
        }

        .users-accounts tbody tr:last-of-type {
            border-bottom: 2px solid var(--primary);
        }

        .users-accounts tbody tr:hover {
            font-weight: bold;
            color: var(--primary);
        }

        .users-accounts tbody tr.active-row {
            font-weight: bold;
            color: var(--primary);
        }
    </style>
    <h4 style="margin: 30px 0;">Special Service Responses</h4>
    <table class="users-accounts">
        <thead center>
            <tr>
                <th>Response ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Tutor</th>
                <th>Budget</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody class="">
            <?php

            for ($i = 0; $i < 6; $i++) {

            ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td>Lorem ipsum dolor sit.</td>
                    <td>22-10-2021</td>
                    <td>Lorem ipsum dolor sit amet consectetur</td>
                    <td>Kumara Witharana</td>
                    <td>1500</td>
                    <td><button style="padding: 5px 10px; border:none; background-color:var(--primary); border-radius:8px; color:#fff;">View</button></td>
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