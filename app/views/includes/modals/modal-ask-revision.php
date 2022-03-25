<!-- Main modal -->
<div id="defaultModal" class="modal-ask-revision hide-modal" aria-hidden="true">
    <div class="modal-container">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <h3>
                    Do you want to ask for revision?
                </h3>
                <button type="button" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p>
                    This will send a message to the teacher to ask for revision. In case the teacher accepts the revision, the student will be notified.
                    In order to ask for revision, you need to have a minimum of 1 revision attempts in your purchased service.
                </p>

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" onclick="askRevision()" class="success">Revision</button>
                <button onclick="closeModal()" type="button" class="cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script>
    const modal = document.querySelector('.modal-ask-revision');
    let classlink;
    const modalAskRevision = (classid) => {
        modal.classList.add('show-modal');
        modal.classList.remove('hide-modal');
        classlink = classid;
    }

    const askRevision = () => {
        console.log('askRevision');
        // location.href = 'askrevision/' + classlink;
        location.href = '../revision/' + classlink;
    }



    const closeModal = () => {
        modal.classList.add('hide-modal');
        modal.classList.remove('show-modal');
    }
</script>