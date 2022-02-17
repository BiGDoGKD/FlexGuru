<nav class="visitor-navbar container">
    <div class="row pt-2 pb-2 justify-content-between">
        <div class="col-3-md col-6-xs">
            <h2><a href="<?php echo URLROOT ?>">FlexGuru</a></h2>
        </div>
        <div class="visitor-navbar__menu col-6-md col-4-lg justify-content-around display-md-f display-xs-n">
            <ul class="display-f align-items-center justify-content-around" style="width: 100%">
                <li><a href="<?php echo URLROOT ?>/marketplace">Services</a></li>
                <li><a href="<?php echo URLROOT ?>/info/help">Help</a></li>
                <li><a href="<?php echo URLROOT ?>/info/about">About</a></li>
                <li><a href="<?php echo URLROOT ?>/info/contact">Contact</a></li>
            </ul>
        </div>

        <div class="visitor-navbar__authentication col-3-md display-md-f display-xs-n">
            <button class="login br-xs ml-1 pl-1 pr-1" onclick="location.href='<?php echo URLROOT ?>/login'">Login</button>
            <button class="signup br-xs ml-1 pl-1 pr-1" onclick="location.href='<?php echo URLROOT ?>/registration/roles'">Sign Up</button>
        </div>
        <div class="col-6-xs display-md-n text-end display-xs-f align-items-center justify-xs-content-end">
            <i class="fa fa-bars text-gray font-lg" onclick="openMobileNav()"></i>
        </div>
    </div>
    <div id="mobile-nav" class="mobile-nav display-md-n close row">
        <div class="col-12-xs">
            <ul class="display-f flex-col align-items-center justify-content-around">

                <li><a href="<?php echo URLROOT ?>">Home</a></li>
                <li><a href="<?php echo URLROOT ?>/marketplace">Services</a></li>
                <li><a href="<?php echo URLROOT ?>/info/help">Help</a></li>
                <li><a href="<?php echo URLROOT ?>/info/about">About</a></li>
                <li><a href="<?php echo URLROOT ?>/info/contact">Contact</a></li>
                <li><a href="<?php echo URLROOT ?>/login">Login</a></li>
                <li><a href="<?php echo URLROOT ?>/registration/roles">Sign Up</a></li>
            </ul>
        </div>
    </div>
    <script>
        var mobileNav = document.getElementById('mobile-nav');
        var mobileNavItem = document.querySelectorAll('.mobile-nav li');
        mobileNavItem.forEach((item) => {
            item.addEventListener('click', () => {
                setTimeout(() => {
                    mobileNav.className = 'mobile-nav display-md-n close row';
                }, 300);
            });
        });
        const openMobileNav = () => {
            if (mobileNav.className == 'mobile-nav display-md-n close row') {
                mobileNav.className = 'mobile-nav display-md-n open row';
            } else {
                mobileNav.className = 'mobile-nav display-md-n close row';
            }
        };
    </script>
</nav>