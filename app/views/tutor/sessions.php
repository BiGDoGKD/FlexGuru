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



    .modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        margin: 50px auto;
        border: 1px solid #999;
        width: 60%;
    }

    h2,
    p {
        margin: 0 0 20px;
        font-weight: 400;
        color: #999;
    }

    span {
        color: #666;
        display: block;
        padding: 0 0 5px;
    }

    form {
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5;
        background: #eee;
    }

    input,
    textarea {
        width: 90%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #1c87c9;
        outline: none;
    }

    .contact-form button {
        width: 100%;
        padding: 10px;
        border: none;
        background: #1c87c9;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
    }

    button:hover {
        background: #2371a0;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    button.button {
        background: none;
        border-top: none;
        outline: none;
        border-right: none;
        border-left: none;
        border-bottom: #02274a 1px solid;
        padding: 0 0 3px 0;
        font-size: 16px;
        cursor: pointer;
    }

    button.button:hover {
        border-bottom: #a99567 1px solid;
        color: #a99567;
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

<h3>New Requests</h3>


<table border="1" class="requesttable">
    <thead>
        <th>Title</th>
        <th>Description</th>
        <th>Subject</th>
        <th>Category</th>
        <th>Deadline</th>
        <th>Budget</th>
        <th>Request Date</th>
        <th>Response</th>


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
            <td> <button class="viewcustomorder button" data-modal="modalTwo">Accept</button></td>

        </tr>

    <?php

    }
    ?>
</table>
<div id="modalOne" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <a class="close">&times;</a>
            <form action="/">
                <h2>Contact Us</h2>
                <div>
                    <input class="fname" type="text" name="name" placeholder="Full name">
                    <input type="text" name="name" placeholder="Email">
                    <input type="text" name="name" placeholder="Phone number">
                    <input type="text" name="name" placeholder="Website">
                </div>
                <span>Message</span>
                <div>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>
<div id="modalTwo" class="modal">
    <div class="modal-content">
        <div class="contact-form">
            <span class="close">&times;</span>
            <form action="" method="POST">
                <h2>Complaint form</h2>
                <div>
                    <input class="fname" type="text" name="name" placeholder="Full name">
                    <input type="text" name="name" placeholder="Email">
                    <input type="text" name="name" placeholder="Phone number">
                    <input type="text" name="name" placeholder="Website">
                </div>
                <span>Message</span>
                <div>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" href="/">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    let modalBtns = [...document.querySelectorAll(".button")];
    modalBtns.forEach(function(btn) {
        btn.onclick = function() {
            let modal = btn.getAttribute('data-modal');
            document.getElementById(modal)
                .style.display = "block";
        }
    });
    let closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function(btn) {
        btn.onclick = function() {
            let modal = btn.closest('.modal');
            modal.style.display = "none";
        }
    });
    window.onclick = function(event) {
        if (event.target.className === "modal") {
            event.target.style.display = "none";
        }
    }
</script>













</body>

</html>






























































































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