<?php
include APPROOT . '/views/admin/components/sidebar.php';
include APPROOT . '/views/admin/components/admin-header.php';
?>
<div class="dashboard-view">
    <iframe id="dashboard-view" style="width: 100%; height:100%;" src="admin/dashboard" frameborder="0"></iframe>
</div>
</div>
</div>
<style>
    .dashboard-view {
        width: 100%;
        height: 100%;
    }
</style>
<script>
    const adminlistItem = document.querySelectorAll(".admin-sidebar .icon-bar li");
    adminlistItem.forEach((link, index) => {
        link.addEventListener("click", () => {
            adminlistItem.forEach((link) => {
                link.classList.remove("active");
                link.classList.add("inactive");
            })
            link.classList.add("active");
            link.classList.remove("inactive");
            switch (index) {
                case 0:
                    document.getElementById('dashboard-view').src = 'admin/dashboard';
                    break;
                case 1:
                    document.getElementById('dashboard-view').src = 'admin/accounts';
                    break;
                case 2:
                    document.getElementById('dashboard-view').src = 'admin/messages';
                    break;
                case 3:
                    document.getElementById('dashboard-view').src = 'admin/analytics';
                    break;
                case 4:
                    document.getElementById('dashboard-view').src = 'admin/payments';
                    break;
                case 5:
                    document.getElementById('dashboard-view').src = 'admin/reports';
                    break;
                case 6:
                    document.getElementById('dashboard-view').src = 'admin/complaint';
                    break;    
                case 7:
                    document.getElementById('dashboard-view').src = 'admin/create';
                    break;
                case 8:
                    document.getElementById('dashboard-view').src = 'admin/verifications';
                    break;
                case 9:
                    document.getElementById('dashboard-view').src = 'admin/settings';
                    break;
                case 10:
                    alert("DO YOU WANT TO LEAVE THIS SHIT?")
                    break;
            }
        })
    })
</script>

<script defer>
    var Adminsidebar = document.querySelector('.admin-sidebar');
    var openArrow = document.querySelector('.open-arrow');
    var Admindashboard = document.querySelector('.admin-dashboard');


    var dashboardFlag = true;
    openArrow.addEventListener('click', () => {
        if (dashboardFlag) {
            dashboardFlag = false;
            Adminsidebar.classList.remove('close-sidebar');
            Adminsidebar.classList.add('open-sidebar');
            Admindashboard.classList.add('dashboard-margin')
        } else {
            dashboardFlag = true;
            Adminsidebar.classList.remove('open-sidebar');
            Adminsidebar.classList.add('close-sidebar');
            Admindashboard.classList.remove('dashboard-margin')
        }
    })
</script>