<!-- Main modal -->
<div id="defaultModal" class="modal-activate-gig hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Activate the Gig
                </h3>
                <button type="button" onclick="closeModalA()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    This will set the gig status to pending, and our administrator will accept or decline the gig within 48 hours.
                </p>

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="activateGig()" class="success">Activate</button>
                <button onclick="closeModalA()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modalA = document.querySelector('.modal-activate-gig');
    let giglinkA;
    const modalActivateGig = (gigid) => {
        modalA.classList.add('show-modal');
        modalA.classList.remove('hide-modal');
        giglinkA = gigid;
    }

    const activateGig = () => {
        location.href = 'activate/' + giglinkA;
    }

    const closeModalA = () => {
        modalA.classList.add('hide-modal');
        modalA.classList.remove('show-modal');
    }
</script>