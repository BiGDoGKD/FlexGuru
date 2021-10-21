<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/tutor/includes/header.php';
?>





<style>
    .container {



        display: flex;


    }

    .topbar {
        width: 100%;
        height: 60px;

        padding: 4px 0px;
        position: absolute;
        left: 0;
        margin:4px 0px;



    }

    .center {

        height: 500px;
        width: 800px;

        margin: 100px auto;
        border:1px solid #acacac;
        border-radius: 24px;
        text-align: center;
        align-items: center;



    }

    .steps {
        display: flex;
        justify-content: space-around;
        text-align: center;
    }

    .stepinside {
        line-height: 4.2;
    }

    .step .numbercircle {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        color: red;
    }

    .description {

        height: 90%;
        width: 90%;

        display: inline-block;
    }

    .buttons {
        width: 100%;
        height: 60px;

        display: flex;
        justify-content: space-between;

    }

    .button {
        padding: 0 5px;
        height: 50px;
        width: 140px;
        background-color: var(--primary);
        text-align: center;
        line-height: 3.4;
        margin: -27px 40px;
        color: #fff;

    }

    table {
        margin: 100px 0;

        border-collapse: separate;
        border-spacing: 0 15px;
        border:none;

    }

    table tbody td {
        vertical-align: top;
        text-align: center;
        font-size: 20px;
        border-collapse: collapse;
        border: none;

    }

    table tbody tr {
        border-spacing: 1.5 rem;
    }

    textarea {
        width: 400px;
        resize: none;
        height: 200px;
        padding: 30px 10px;
        font-size: 30px;

    }
</style>



<div class="topbar">
    <div class="steps">
        <div class="step step1">
            <div class="subtitle-2 stepinside " style="color:var(--primary);">


                Overview
            </div>
        </div>
        <div class="step step2">
            <div class="subtitle-2 stepinside ">Pricing and scope</div>
        </div>
        <div class="step step3">
            <div class="subtitle-2 stepinside ">Description and FAQ</div>
        </div>
        <div class="step step4">
            <div class="subtitle-2 stepinside ">Add photo</div>
        </div>
        <div class=step step5">
            <div class="subtitle-2 stepinside">Publish</div>
        </div>
    </div>
</div>
<div class="container">




    <div class="center">

        <div class="description">

            <table border="1" width="100%">
                <col style="width:30%">
                <col style="width:70%">
                <tbody>

                    <tr>
                        <td>Gig Title</td>
                        <td><textarea name="" id="" placeholder="I will do something I am good at"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            Category
                        </td>
                        <td>
                            <select name="" id="category" style="width: 402px; height:30px;"></select>
                        </td>
                    </tr>
                    <tr>
                        <td>Search Tags</td>
                        <td><input type="text" name="" id="" style="width: 402px; height:30px;"></td>
                    </tr>




                </tbody>
            </table>

        </div>
        <div class="buttons">
            <div class="button cancel">Cancel</div>
            <div class="button saveandcontinue">Save and Continue</div>

        </div>

    </div>



</div>









<!-- footer  -->
<?php
// include APPROOT . '/views/includes/footer.php';
?>