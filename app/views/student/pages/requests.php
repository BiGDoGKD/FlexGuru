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

        .container {
            min-height: 440px;
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
/*
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
        }*/







table {
    width: 800px;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th{
    color: #fff;
    padding: 15px;
}
td {
    padding: 15px;
    background-color: #fdedff;
    color: var(--primary);

}
tr:hover{
        background-color: #e5bdea;
        }
th {
    text-align: left;
}


    th {
        background-color: #55608f;
    }


/*
    tr,tr:hover {
            background-color: rgba(255,255,255,0.3);
        }*/
    
   /* td:hover {
            
                content: "";
                
                left: 0;
                right: 0;
                top: -9999px;
                bottom: -9999px;
                background-color: rgba(255,255,255,0.2);
                opacity: 0.3;
               
            
        }
    
*/
.users-accounts tbody tr:hover {
            font-weight: bold;
            background-color: #ffb5ef;
        }


    </style>
    <h4 style="margin: 30px 0;">Special Service Requests</h4>
    <table class="users-accounts">
        <thead center>
            <tr>
                <th>Request ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Expected Date</th>
                <th>Budget</th>
                <th>Responses</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
            $i = 1;
            foreach ($data as $row) {
                $i++;
            ?>

                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['days'] ?></td>
                    <td><?php echo $row['budget'] ?></td>
                    <td><a href="<?php echo URLROOT . '/student/responses' ?>">12</a></td>
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