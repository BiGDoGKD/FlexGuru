<nav class="profile-navbar container">
    <div class="row pt-2 pb-2 justify-content-between align-items-center">
        <div class="col-3-md col-6-xs">
            <h2>FlexGuru</h2>
        </div>
        <div class="profile-navbar__menu col-6-md col-4-lg justify-content-around display-md-f display-xs-n">
            <ul class="display-f align-items-center justify-content-around" style="width: 100%">
                <li>Messages</li>
                <li>Classes</li>
                <li>Requests</li>
                <li>Marketplace</li>
            </ul>
        </div>

        <div class="profile-navbar__authentication align-items-center col-3-md display-md-f display-xs-n">
            <div class="half">
                <label for="profile2" class="profile-dropdown align-items-center">
                    <!-- <input type="checkbox" id="profile2" /> -->
                    <div class="row align-items-center profile-dropdown-button">
                        <img src="https://scontent.fcmb2-2.fna.fbcdn.net/v/t1.6435-1/p160x160/134691956_747241662587034_6827673938859173117_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=jYwp15wcc5AAX_auwr5&_nc_ht=scontent.fcmb2-2.fna&oh=00_AT9hGxK4tlB6OaSlERWeea83Bo9WYu3B7TNL-LxTsFYk-g&oe=6237D1BE" />
                        <span class="display-xs-n display-xl-i"><?php echo $_SESSION['userdata']['firstname'] . ' ' . $_SESSION['userdata']['lastname'] ?></span>
                    </div>

                    <ul class="profile-dropdown-list shadow-md">
                        <li>
                            <a href="<?php echo URLROOT ?>/student"><i class="mdi mdi-account"></i>Account</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/student/settings"><i class="mdi mdi-settings"></i>Settings</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/student/purchasehistory"><i class="mdi mdi-logout"></i>Purchase History</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/student/complaint"><i class="mdi mdi-logout"></i>Complaints</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/student/help"><i class="mdi mdi-logout"></i>Help</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/login/logout"><i class="mdi mdi-logout"></i>Logout</a>
                        </li>
                    </ul>
                </label>
            </div>
        </div>
        <div class="col-6-xs display-md-n text-end display-xs-f align-items-center justify-xs-content-end" style="margin-top: 0.2rem">
            <img onclick="openMobileNav()" src="https://scontent.fcmb2-2.fna.fbcdn.net/v/t1.6435-1/p160x160/134691956_747241662587034_6827673938859173117_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=7206a8&_nc_ohc=jYwp15wcc5AAX_auwr5&_nc_ht=scontent.fcmb2-2.fna&oh=00_AT9hGxK4tlB6OaSlERWeea83Bo9WYu3B7TNL-LxTsFYk-g&oe=6237D1BE" />
        </div>
    </div>
    <div id="mobile-nav" class="mobile-nav display-md-n close row">
        <div class="col-12-xs">
            <ul class="display-f flex-col align-items-center justify-content-around">
                <li class="active">Account</li>
                <li>Dashboard</li>
                <li>Marketplace</li>
                <li>Messages</li>
                <li>Classes</li>
                <li>Requests</li>
                <li>Purchase History</li>
                <li>Complaints</li>
                <li>Help</li>
                <li>Settings</li>
                <li>Logout</li>
            </ul>
        </div>
    </div>
    <script>
        var mobileNav = document.getElementById('mobile-nav');
        var mobileNavItem = document.querySelectorAll('.mobile-nav li');
        var checkBox = document.getElementById('profile2');
        var profileDropdownButton = document.querySelector(
            '.profile-dropdown-button'
        );
        var profileDropdown = document.querySelector('.profile-dropdown-list');

        mobileNavItem.forEach((item) => {
            item.addEventListener('click', () => {
                setTimeout(() => {
                    mobileNav.className = 'mobile-nav close row';
                }, 300);
            });
        });
        const openMobileNav = () => {
            if (mobileNav.className == 'mobile-nav close row') {
                mobileNav.className = 'mobile-nav open row';
            } else {
                mobileNav.className = 'mobile-nav close row';
            }
        };

        profileDropdownButton.addEventListener('click', () => {
            if (profileDropdown.style.display == 'block') {
                profileDropdown.style.display = 'none';
            } else {
                profileDropdown.style.display = 'block';
            }
        });

        document.body.addEventListener(
            'click',
            () => {
                profileDropdown.style.display = 'none';
            },
            true
        );
    </script>
</nav>