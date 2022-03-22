<!-- Main modal -->
<div id="defaultModal" class="modal-profile-picture hide-modal" aria-hidden="true">
    <div class="modal-container" style="margin-bottom:2rem">
        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header text-center" style="justify-content: center;">
                <h3>
                    Upload A Profile Picture
                </h3>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="<?php
                                switch ($_SESSION['userdata']['role']) {
                                    case 'st':
                                        echo URLROOT . '/student/updateprofilepicture';
                                        break;
                                    case 'tu':
                                        echo URLROOT . '/tutor/updateprofilepicture';
                                        break;
                                    case 'af':
                                        echo URLROOT . '/affiliate/updateprofilepicture';
                                        break;
                                    default:
                                        echo URLROOT . '/login/logout';
                                        break;
                                }
                                ?>" method="POST" class="form-control" enctype="multipart/form-data">
                    <div class="form-group col-12-xs text-center">
                        <img onclick="triggerClick()" src="<?php echo URLROOT . '/public/uploads/users/' . $_SESSION['userdata']['photourl'] ?>" class="image-display pointer" id="image-display" alt="profile-picture">
                        <label for="photourl">Profile Image</label>
                        <input type="file" class="form-control" onchange="displayImage(this)" id="profile-image" name="photourl" id="photourl" style="display: none;" required />
                        <p class="form-control form-feedback text-error">

                        </p>
                    </div>
                    <div class="form-group col-12-xs">
                        <label for="photourl">Bio<span class="text-error"></span> </label>
                        <textarea name="bio" id="bio" rows="5" maxlength="150" placeholder="<?php
                                                                                            switch ($_SESSION['userdata']['role']) {
                                                                                                case 'st':
                                                                                                    echo 'I am a Student....';
                                                                                                    break;
                                                                                                case 'tu':
                                                                                                    echo 'I am a Tutor....';
                                                                                                    break;
                                                                                                case 'af':
                                                                                                    echo 'I am an Affiliate Marketer....';
                                                                                                    break;
                                                                                                default:
                                                                                                    echo 'I am a User....';
                                                                                                    break;
                                                                                            }
                                                                                            ?>"></textarea>
                        <p class="form-control form-feedback text-error">

                        </p>
                    </div>

            </div>
            <!-- Modal footer -->
            <div class="modal-footer" style="justify-content:center;flex-direction:column;">
                <button type="button" onclick="this.form.submit();this.disabled=true;this.value='Uploading, please wait...';" class="success mb-1">Upload</button>
                <button onclick="closeModal()" type="button" class="cancel">Cancel</button>
                <style>
                    .modal-body {
                        flex-direction: column;
                    }

                    .modal-footer button {
                        width: 100%;
                    }
                </style>
            </div>
            </form>



        </div>
    </div>
</div>
<script>
    const modal = document.querySelector('.modal-profile-picture');


    const triggerClick = () => {
        document.querySelector('#profile-image').click();
    }

    const displayImage = (e) => {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = (e) => {
                document.querySelector('#image-display').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
    const openModal = () => {
        modal.classList.add('show-modal');
        modal.classList.remove('hide-modal');
    }

    const closeModal = () => {
        modal.classList.add('hide-modal');
        modal.classList.remove('show-modal');
    }
</script>