<!-- FONT AWESOME CSS FOR ICONS  -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<!-- ALL CSS STYLESHEETS GOES HERE  -->
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">

<div class="admin-create">
    <div>
        <h4>Verification Requests</h4>
    </div>
</div>
<style>
    .admin-create {
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }



    .users-accounts {
        border-collapse: collapse;
        margin: 25px auto;
        font-size: 0.9em;
        width: 90%;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        color: var(--on-secondary);
    }

    .users-accounts thead tr {
        background-color: var(--primary);
        color: #ffffff;
        text-align: left;
        font-weight: bold;
    }

    .users-accounts th,
    .users-accounts td {
        padding: 12px 15px;
    }

    .users-accounts tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .users-accounts tbody tr:nth-of-type(even) {
        background-color: #FFF3F9;
    }

    .users-accounts tbody tr:last-of-type {
        border-bottom: 2px solid var(--primary);
    }

    .users-accounts tbody tr:hover {
        font-weight: bold;
        color: var(--primary);
    }

    .users-accounts tbody tr.active-row {
        font-weight: bold;
        color: var(--primary);
    }
</style>
<table class="users-accounts">
    <thead center>
        <tr>
            <th>Tutor ID</th>
            <th>Subjects</th>
            <th>Workplace</th>
            <th>Occupation</th>
            <th>Qualifications</th>
            <th>Download Documents</th>
            <th>Status</th>
            <th>Approve</th>
            <th>Decline</th>
        </tr>
    </thead>
    <tbody class="">
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td><?php echo $row['tuid'] ?></td>
                <td><?php echo $row['subjects'] ?></td>
                <td><?php echo $row['workplace'] ?></td>
                <td><?php echo $row['occupation'] ?></td>
                <td><?php echo $row['qualification'] ?></td>
                <td class="primary pointer"><a href="<?php echo URLROOT . '/public/uploads/verifications/' . $row['files'] ?>" download=""><i class="fas fa-download"> Download</i></a></td>
                <td style="<?php switch ($row['status']) {
                                case 'pending':
                                    echo 'color:var(--pending);';
                                    break;
                                case 'verified':
                                    echo 'color:var(--on-success);';
                                    break;
                                case 'disabled':
                                    echo 'color:var(--on-error);';
                                    break;
                            } ?>"><?php echo $row['status'] ?></td>
                <td>
                    <form action="<?php echo URLROOT . '/admin/approve' ?>" method="POST"><input type="hidden" name="tuid" value="<?php echo $row['tuid'] ?>"><button type="submit" class="btn-sm on-success bg-success">Approve</button></form>
                </td>
                <td>
                    <form action="<?php echo URLROOT . '/admin/decline' ?>" method="POST"><input type="hidden" name="tuid" value="<?php echo $row['tuid'] ?>"><button type="submit" class="btn-sm on-error bg-danger">Decline</button></form>
                </td>
            </tr>
        <?php
        } ?>
    </tbody>
    </tr>
</table>