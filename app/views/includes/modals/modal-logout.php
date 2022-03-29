<!-- Main modal -->
<div id="defaultModal" class="modal-logout hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Are you sure you want to logout?
                </h3>
                <button type="button" onclick="closeModalLogout()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    You will be logged out of the system.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="logoutUser()" class="error">Logout</button>
                <button onclick="closeModalLogout()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modalLogout = document.querySelector('.modal-logout');
    const modalLogoutUser = () => {
        modalLogout.classList.add('show-modal');
        modalLogout.classList.remove('hide-modal');
    }

    const logoutUser = () => {
        location.href = 'http://localhost/flexguru/login/logout';
    }



    const closeModalLogout = () => {
        modalLogout.classList.add('hide-modal');
        modalLogout.classList.remove('show-modal');
    }
</script>