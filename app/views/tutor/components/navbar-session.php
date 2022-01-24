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


<style>
    *{
        margin:0 auto;
    }

#session_nav{
        margin-left:150px;
    }
    .sessions{
        width: 100%;
      
    }


    .sessionnavs{
        margin-right:10px;
    }
</style>
<nav class="visitor-nav bold sessions">

    <ul class="nav-info" id="session_nav">

        <?php
        foreach ($session_navigation as $value) {
        ?>
            <li class="sessionnavs"><a class="gray subtitle-2" href="<?php echo URLROOT ?>/<?php echo $value["url"] ?>"><?php echo $value["menu"] ?></a></li>
        <?php
        } ?>
    </ul>


</nav>
