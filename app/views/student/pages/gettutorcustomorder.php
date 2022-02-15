<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/request.css' ?>">

<style type="text/css">
    table {
        width: 300px;
        border-radius: 8px;
        padding: 20px 20px;
    }

    td {
        white-space: nowrap;

        padding: 20px 0;
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

    .pop {
        position: absolute;
        width: 50%;
        margin: auto;
        padding: 20px;
        height: 50%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    @media (max-width: 640px) {
        .pop {
            position: relative;
            width: 100%;
        }
    }

    .pop .modal {
        z-index: 2;
        opacity: 0;
        visibility: hidden;
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-transition: opacity 500ms ease-in-out;
        transition: opacity 500ms ease-in-out;
    }

    .pop .modal__inner {
        -webkit-transform: translate(-50%, -50%) scale(0.75);
        transform: translate(-50%, -50%) scale(0.75);
        top: 50%;
        left: 50%;
        width: 50%;
        background: white;
        padding: 30px;
        position: absolute;
        color: black;
    }

    @media (max-width: 640px) {
        .pop .modal__inner {
            width: 100%;
        }
    }

    .btn-close {
        color: #fff;
        text-align: center;
    }

    .pop label {
        display: inline-block;
        cursor: pointer;
    }

    .pop label.open {
        color: turquoise;
        -webkit-transition: color 200ms ease-in-out;
        transition: color 200ms ease-in-out;
        text-decoration: underline;
    }

    .pop label.open:hover {
        color: paleturquoise;
    }

    .pop input {
        display: none;
    }

    .pop input:checked+.modal {
        opacity: 1;
        visibility: visible;
    }

    .pop input:checked+.modal .modal__inner {
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
        -webkit-transition: all 200ms ease-in-out;
        transition: all 200ms ease-in-out;
    }

    .pop input:checked+.modal .modal__inner p {
        font-size: 1.25rem;
        line-height: 125%;
    }

    .pop input:checked+.modal label {
        position: absolute;
        top: 0;
        right: 0;
        height: 30px;
        width: 30px;
        background: #666666;
        -webkit-transition: all 200ms ease-in-out;
        transition: all 200ms ease-in-out;
    }

    .pop input:checked+.modal label:hover {
        background: #333333;
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

                <td class="desc">Price </td>
                <td class="value" width="100%"> 1500 LKR </td>

            </tr>
            <tr>

                <td class="desc">Duration </td>
                <td class="value" width="100%"> 1 hr</td>

            </tr>
            <tr>

                <td class="desc">Covered within : </td>
                <td class="value" width="100%"> 5 days</td>

            </tr>

            <tr>

                <td class="desc"> </td>
                <td class="value" width="100%"> <button onclick="location.href='http://localhost/marketplace/payment'" class="price-box-button"  style="padding:15px 40px; background-color:var(--primary); border-radius:8px; color:#fff; font-weight:600; border:none;">Accept </button></td>

            </tr>
        </table>

        <button onclick="location.href='http://localhost/marketplace/payment'" class="price-box-button">Continue (LRK 1000)</button>
    </div>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>