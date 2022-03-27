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
    include APPROOT . '/views/includes/affiliate-navbar.php';
    ?>



    <div class="row">
        <div class="user-dashboard container  mt-1 mb-3">

        
        <div class="col-12-xs col-5-lg p-3">
            <img  class="col-8-xs mt-0" src="<?php echo URLROOT; ?>/updated/img/affiliate/snippet.webp" alt="">
        </div>




        <div class="gig-form col-12-xs col-8-lg">
            <form action="<?php echo URLROOT; ?>/affiliate/referrallinks" method="POST" style="width: 100%;" class="form-control row">
                <div class="form-group col-12-xs">
                    <label for="password">Referral Code </label>
                    <input type="text" class="form-control" name="referralcode" id="referralcode" value="<?php echo $_SESSION['roledata']['affiliatelink'] ?>" required readonly />
                    <p class="form-control form-feedback text-error">
                    </p>
                </div>

            </form>

            <div class="gig-form col-12-xs col-8-lg">
                <form action="<?php echo URLROOT; ?>/affiliate/referrallinks" method="POST" style="width: 100%;" class="form-control row">

                    <div class="form-group col-12-xs">
                        <label for="snippet">
                            < Copy this html snippet in to your website>
                        </label>
                        <input type="text" class="form-control " name="snippet" id="snippet" value='https://localhost/flexguru/marketplace/?<?php echo $_SESSION['roledata']['affiliatelink'] ?>' required readonly />
                        <p></p>
                        <button class="marketplace__help-btn" onclick="clipboard()" style="margin-top: 10px; "> <i class="fas fa-clipboard"></i></button>
                    </div>
                </form>

                <script>
                    function clipboard() {
                        /* Get the text field */
                        var copyText = document.getElementById("snippet");
                        /* Select the text field */
                        copyText.select();
                        copyText.setSelectionRange(0, 99999); /* For mobile devices */
                        /* Copy the text inside the text field */
                        navigator.clipboard.writeText(copyText.value);
                    }
                </script>



            </div>
        </div>
    </div>
</div>

    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>