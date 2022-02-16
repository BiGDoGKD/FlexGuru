<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flexguru Login</title>
    <?php include APPROOT . '/views/includes/header.php'; ?>
</head>

<body>
    <?php
    include APPROOT . '/views/includes/navbar.php';
    ?>
    <div class="container login-page pb-3">
        <div class="row pt-xs-2 pb-xs-2 pt-lg-5 pb-lg-5">
            <div class="col-6-xl col-5-lg col-12-xs display-lg-f p-xl-3 align-items-center display-xs-n">
                <img src=<?php echo URLROOT . "/updated/img/login.svg" ?> alt="Login Image" />
            </div>
            <div class="col-6-xl col-7-lg col-12-xs pr-lg-4 pl-lg-4">
                <div class="pt-lg-4 pb-lg-4 pr-lg-2 pl-lg-2 display-f shadow-lg-md br-sm flex-col align-items-center">
                    <h3>Login in to Flexguru</h3>
                    <h1 class="font-xxl text-primary">FlexGuru</h1>
                    <p class="text-gray font-lg">Smart Learning</p>
                    <form action="<?php echo URLROOT; ?>/login" method="POST" class="form-control" style="width: 100%">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="<?php echo $data['username'] ?>" required />
                            <p class="form-control form-feedback text-error">
                                <?php echo $data['usernameError'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required />
                            <p class="form-control form-feedback text-error">
                                <?php echo $data['passwordError'] ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-between pt-1 pb-1">
                                <div class="display-f align-items-center">
                                    <input class="pointer" type="checkbox" name="remember" id="remember" />
                                    <span class="text-gray">remember me</span>
                                </div>
                                <p class="text-primary pointer">
                                    <a href="#">Forgot password?</a>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                    <p class="text-gray font-sm">
                        Not a member yet?
                        <span class="text-primary pointer"><a href='<?php echo URLROOT ?>/registration/roles'>Join now</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include APPROOT . '/views/includes/footer.php';
    ?>
</body>

</html>