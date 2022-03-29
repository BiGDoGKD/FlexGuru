<nav class="profile-navbar container">
    <div class="row pt-2 pb-2 justify-content-between align-items-center">
        <div class="col-3-md col-6-xs">
            <h2 onclick="location.href='<?php echo URLROOT . '/tutor' ?>'">FlexGuru</h2>
        </div>
        <div class="profile-navbar__menu col-6-md col-4-lg justify-content-around display-md-f display-xs-n">
            <ul class="display-f align-items-center justify-content-around" style="width: 100%">
                <li> <a href="<?php echo URLROOT ?>/tutor/messages">Messages</a></li>
                <li> <a href="<?php echo URLROOT ?>/tutor/classes">Classes</a></li>
                <li> <a href="<?php echo URLROOT ?>/tutor/tutorssr">Requests</a></li>
                <li> <a href="<?php echo URLROOT ?>/marketplace">Marketplace</a></li>
            </ul>
        </div>

        <div class="profile-navbar__authentication align-items-center col-3-md display-md-f display-xs-n">
            <div class="half">
                <label for="profile2" class="profile-dropdown align-items-center">
                    <!-- <input type="checkbox" id="profile2" /> -->
                    <div class="row align-items-center profile-dropdown-button">
                        <img src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" />
                        <span class="display-xs-n display-xl-i"><?php echo $_SESSION['userdata']['firstname'] . ' ' . $_SESSION['userdata']['lastname'] ?></span>
                    </div>

                    <ul class="profile-dropdown-list shadow-md">
                        <li>
                            <a href="<?php echo URLROOT ?>/tutor">Account</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/tutor/settings">Settings</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/tutor/earnings">Earnings</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/tutor/complaint">Complaints</a>
                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/tutor/help">Help</a>
                        </li>
                        <li>
                            <a onclick="modalLogoutUser()">Logout</a>
                        </li>
                    </ul>
                </label>
            </div>
        </div>
        <div class="col-6-xs display-md-n text-end display-xs-f align-items-center justify-xs-content-end" style="margin-top: 0.2rem">
            <img onclick="openMobileNav()" src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" />
        </div>
    </div>
    <div id="mobile-nav" class="mobile-nav display-md-n close row">
        <div class="col-12-xs">
            <ul class="display-f flex-col align-items-center justify-content-around">
                <li><a href="<?php echo URLROOT ?>/tutor">Account</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor">Dashboard</a></li>
                <li><a href="<?php echo URLROOT ?>/marketplace">Marketplace</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/messages">Messages</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/classes">Classes</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/requests">Requests</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/earnings">Earnings</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/complaint">Complaints</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/help">Help</a></li>
                <li><a href="<?php echo URLROOT ?>/tutor/settings">Settings</a></li>
                <li><a onclick="modalLogoutUser()">Logout</a></li>
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