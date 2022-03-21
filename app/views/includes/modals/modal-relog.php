<!-- Main modal -->
<div id="defaultModal" class="show-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Your Session Time Has Expired
                </h3>

            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    If you see this message, It means that your session has expired. and you will be redirected to the login page. You have to login again.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="location.href='<?php echo URLROOT . '/login/logout' ?>'" class="success">Login Again</button>
            </div>
        </div>
    </div>
</div>