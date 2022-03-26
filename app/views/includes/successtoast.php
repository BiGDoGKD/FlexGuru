<div class="toastHolder">
    <div id="toastContainer" class="toastContainer">
        <p class="text-success ">
            <i class="fa fa-check-circle mr-1"></i><?php echo $_SESSION["toastmsg"][1] ?>
        </p>
    </div>
</div>

<script>
    var toastContainer = document.querySelector(".toastContainer");
    var toastContainerClose = document.querySelector(".closebtn");
    const fadeOutToast = () => {
        setTimeout(() => {
            toastContainer.classList.add("toastFadeOut");
        }, 2000);
        setTimeout(() => {
            toastContainer.style.display = "none";
        }, 3000);
    };

    fadeOutToast();

    toastContainerClose.addEventListener("click", () => {
        setTimeout(() => {
            toastContainer.classList.add("toastFadeOut");
        });
        setTimeout(() => {
            toastContainer.style.display = "none";
        }, 1000);
    });
</script>