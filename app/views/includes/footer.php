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
 * PARENT FOLDER: includes
 */
?>
<!-- ALL JAVASCRIPT FILES GOES HERE  -->
<script defer src="<?php echo URLROOT . '/public/js/main.js' ?>"></script>
<script defer src="<?php echo URLROOT . '/public/js/login.js' ?>"></script>
<script defer src="<?php echo URLROOT . '/public/js/navbar-visitor.js' ?>"></script>
<script defer src="<?php echo URLROOT . '/public/js/sidenav-visitor.js' ?>"></script>
</div>

<div class="fg-footer on-primary">
    <div class="fg-info">
        <h1 class="footer-title on-primary"><?php echo $footermenu["info-address"] ?></h1>
        <span><?php echo $footermenu["local-address"] ?></span>
        <h2 class="privacy-policy on-primary"><?php echo $footermenu["policy"] ?></h2>
    </div>

    <?php
    foreach ($footermenu["footer-menu"] as $value) {
    ?>
        <div class="fg-footer-menu">
            <h1 class="footer-title on-primary"><?php echo $value["menu-title"] ?></h1>
            <ul>
                <?php
                foreach ($value["menu"] as $li) {
                ?>
                    <li><a class="on-primary fg-footer-a" href="<?php echo URLROOT . '/pages/' . $li["url"] ?>"><?php echo $li["item"] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php
    }
    ?>
</div>
<style>
    .fg-footer {
        display: grid;
        grid-template-columns: 33% 33% 33%;
        padding: 50px 11.7vw 100px;
        justify-items: center;
        background: var(--primary);
    }

    .fg-footer .footer-title {
        font-weight: 600;
        margin: 0 0 37px 0;
        font-size: 1.8rem;
    }

    .fg-footer ul {
        list-style: none;
    }

    .fg-footer ul li {
        margin: 1rem 0 0 0;
        font-size: 1rem;
    }

    .fg-footer .privacy-policy {
        margin: 26px 0 0 0;
        font-size: 1rem;
        font-weight: 600;

    }

    .fg-footer-a {
        transition: 1s;
        display: inline-block;
        position: relative;
        text-decoration: none;
    }

    .fg-footer-a:after {
        background: none repeat scroll 0 0 transparent;
        bottom: 0;
        content: "";
        display: block;
        height: 2px;
        left: 50%;
        position: absolute;
        background: #fff;
        transition: width 0.3s ease 0s, left 0.3s ease 0s;
        width: 0;
    }

    .fg-footer-a:hover:after {
        width: 100%;
        left: 0;
    }
</style>
</body>

</html>