<!-- Main modal -->
<div id="defaultModal" class="modal-delete-gig hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Deactivate the Gig
                </h3>
                <button type="button" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    This will set the gig status to inactive, and the student will not be able to accept the gig anymore.<br />
                    This will enable you to edit the gig details.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="deleteGig()" class="error">Deactivate</button>
                <button onclick="closeModal()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modal = document.querySelector('.modal-delete-gig');
    let giglink;
    const modalDeleteGig = (gigid) => {
        modal.classList.add('show-modal');
        modal.classList.remove('hide-modal');
        giglink = gigid;
    }

    const deleteGig = () => {
        location.href = 'delete/' + giglink;
    }



    const closeModal = () => {
        modal.classList.add('hide-modal');
        modal.classList.remove('show-modal');
    }
</script>