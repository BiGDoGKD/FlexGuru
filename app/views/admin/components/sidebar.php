<div class="admin-sidebar">
    <div class="icon-bar">
        <span class="open-arrow close"><i class="fas fa-angle-double-right"></i></span>
        <ul>
            <li><a href=""><i class="fas fa-columns"></i><span class="subtitle-1">Dashboard</span></a></li>
            <li><a href=""><i class="fas fa-user-circle"></i><span class="subtitle-1">Manage accounts</span></a></li>
            <li><a href=""><i class="fas fa-envelope"></i><span class="subtitle-1">Messages</span></a></li>
            <li><a href=""><i class="fas fa-chart-line"></i><span class="subtitle-1">Analytics</span></a></li>
            <li><a href=""><i class="fas fa-credit-card"></i><span class="subtitle-1">Payments</span></a></li>
            <li><a href=""><i class="fas fa-flag"></i><span class="subtitle-1">Reports</span></a></li>
            <li><a href=""><i class="fas fa-plus"></i><span class="subtitle-1">Create</span></a></li>
            <li><a href=""><i class="fas fa-list-ul"></i><span class="subtitle-1">Verifications</span></a></li>
            <li><a href=""><i class="fas fa-cog"></i><span class="subtitle-1">Settings</span></a></li>
            <li><a href=""><i class="fas fa-sign-out-alt"></i><span class="subtitle-1">Exit</span></a></li>
        </ul>
    </div>
</div>
<style>
    .admin-sidebar {
        display: flex;
        justify-content: center;
        width: 300px;
        height: 100vh;
        background: #FFF3F9;
        font-size: 20px;
    }

    .icon-bar .open-arrow {
        margin: 50px 0;
    }

    .admin-sidebar .icon-bar {
        margin-top: 30px;
    }

    .admin-sidebar .icon-bar ul {
        list-style: none;
        margin: 150px 0 0 0;
    }

    .admin-sidebar .icon-bar ul li {


        margin: 0 0 20px 0;
    }

    .admin-sidebar .icon-bar ul li a {
        display: flex;
        text-decoration: none;
        align-items: center;
        color: var(--gray);
    }

    .admin-sidebar .icon-bar ul li a:hover {
        color: var(--primary);
    }

    .admin-sidebar .icon-bar ul li i {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 8px 0 0;
        height: 36px;
        width: 36px;
    }
</style>