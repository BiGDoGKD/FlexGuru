<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/tutor/includes/header.php';
include APPROOT . '/views/tutor/includes/sessiontabs.php';
?>





<!DOCTYPE html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
    * {

        font-family: "Poppins";

        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {

        margin: 27px 7px;
        display: flex;
        height: 1000px;
    }

    .requesttable {
        border-collapse: collapse;
        margin: 25px auto;
        font-size: 0.9em;
        width: 90%;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

    }

    .requesttable thead tr {
        background-color: #6f51a5ba;
        color: #e1e1e1;
        text-align: left;
        font-weight: bold;
    }

    .requesttable th,
    .requesttable td {
        padding: 12px 15px;
    }

    .requesttable tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .requesttable tbody tr:nth-of-type(even) {
        background-color: #FFF3F9;
    }

    .requesttable tbody tr:last-of-type {
        border-bottom: 2px solid var(--primary);
    }

    .viewcustomorder {

        width: 11vw;
        height: 40px;
        background: #6f51a5ba;
        color: #fff;
        font-size: 14px;
        justify-content: center;
        margin: 18px 0px 0px 10px;
        border-radius: 24px;
        border: 1px transparent solid;

    }


    /*
.requesttable tbody tr:hover {
font-weight: bold;
color: var(--primary);
} */
    /*
.requesttable tbody tr.active-row {
font-weight: bold;
color: var(--primary);
} */
</style>

<br><br>

<h3>Custom Offers</h3>


<table border="1" class="requesttable">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Subject</th>
        <th>Category</th>
        <th>Deadline</th>
        <th>Budget</th>
        <th>Request Date</th>
        <th>Responses</th>


    </thead>

    <?php
    foreach ($data as $item) {
        $message = $item->message;
    ?>
        <tr>
            <td><?php echo $message->title; ?></td>
            <td><?php echo $message->description; ?></td>
            <td><?php echo $message->subject; ?></td>
            <td><?php echo $message->category; ?></td>
            <td><?php echo $message->days; ?></td>
            <td><?php echo $message->budget; ?></td>
            <td><?php echo $message->date; ?></td>
            <td> <button class="viewcustomorder" onclick="location.href='<?php echo URLROOT . '/student/gettutorcustomorder' ?>'">View Tutor Custom Order</button></td>

        </tr>
    <?php

    }
    ?>
</table>
</div>

</div>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<?php
include APPROOT . '/views/includes/footer.php';
?>