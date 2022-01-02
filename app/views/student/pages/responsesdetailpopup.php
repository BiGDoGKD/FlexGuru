<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/request.css' ?>">

<style type="text/css">
    table {
        width: 300px;
        border-radius: 8px;
        padding: 20px 40px;
    }

    td {
        white-space: nowrap;

        padding: 30px 0;
    }

    .w2-table {
        width: 300px;
        margin: 100px auto;
    }

    .w2-pink {
        background-color: #efc8e0 !important;
        color: #000;
    }

    .w2-pink th,
    .w2-pink tr td {
        color: #000;
        margin-bottom: 40px;
    }

    .value {
        padding-left: 30px;
        min-height: 60px;
    }

    .desc {
        padding: 0 70px;
        font-weight: 600;
    }
</style>

<body>

    <div class="container">
        <table class="w2-table w2-pink">
            <tr>

                <td class="desc">Tutor ID</td>
                <td class="value" width="100% " style="">242</td>

            </tr>
            <tr>

                <td class="desc">Tutor Name</td>
                <td class="value" width="100%">Mr.Kumara Witharana</td>

            </tr>
            <tr>

                <td class="desc">Qualifications </td>
                <td class="value" width="100% " style="">Bsc.Industrial Statistics 2nd Upper UOC</td>

            </tr>
            <tr>

                <td class="desc">Number of sessions conducted </td>
                <td class="value" width="100%">8</td>

            </tr>
            <tr>

                <td class="desc"> Ratings </td>
                <td class="value" width="100% " style="">4.3</td>

            </tr>
            <tr>

                <td class="desc">Profile Link</td>
                <td class="value" width="100%"><a href="#"> FlexGuru/KumaraWitharana </a></td>

            </tr>
            <tr>

                <td class="desc">Tutor Comments on the Gig Request </td>
                <td class="value" width="100%">Hi Piyath, I can cover your required subject area within another 3 days. I have some tutorials </td>

            </tr>

            <tr>

                <td class="desc"> </td>
                <td class="value" width="100%"> <button style="padding:15px 40px; background-color:var(--primary); border-radius:8px; color:#fff; font-weight:600; border:none;">Accept </button></td>

            </tr>
        </table>


    </div>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>