<?php
include APPROOT . '/views/admin/components/admin-header.php';
include APPROOT . '/views/admin/components/sidebar.php';
?>
<div class="dashboard-view">
    <iframe id="dashboard-view" style="width: 100%; height:100%;" src="admin/dashboard" frameborder="0"></iframe>
</div>
</div>

<style>
    .dashboard-view {
        width: 100%;
        height: 100%;
        background: #f3f3f3;
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
                    document.getElementById('dashboard-view').src = 'admin/create';
                    break;
                case 7:
                    document.getElementById('dashboard-view').src = 'admin/verifications';
                    break;
                case 8:
                    document.getElementById('dashboard-view').src = 'admin/settings';
                    break;
                case 9:
                    alert("DO YOU WANT TO LEAVE THIS SHIT?")
                    break;
            }
        })
    })
</script>