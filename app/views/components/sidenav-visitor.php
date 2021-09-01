<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: components
 */
?>
<div class="__open-btn hidden">
    <button class="dots close">
        <span></span>
    </button>
</div>
<div class="sidenav-menu hidden">
    <div class="circle-open">
    </div>
    <ul class="bold white hidden opacity-0">
        <li><a href="#" class="white display-3" onclick="sidenavlogin()">Login</a></li>
        <?php
        foreach ($navigation as $value) {
        ?>
            <li><a class="white display-3" onclick="sidenavFunction()" href="<?php echo URLROOT ?>/<?php echo $value["url"] ?>"><?php echo $value["menu"] ?></a></li>
        <?php
        } ?>
    </ul>

</div>

<script>
    function sidenavlogin() {
        sidenavFunction();
        setTimeout(function() {
            loginFunction();
        }, 500)
    }
</script>