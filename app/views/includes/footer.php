<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 17, 2021
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
        <h3 class="primary" style="margin:-22px 0 25px 0;"><?php echo SITENAME ?></h3>
        <span class="subtitle-1 gray"><?php echo $footermenu["local-address"] ?></span>
        <h2 class="privacy-policy gray"><?php echo $footermenu["policy"] ?></h2>
    </div>
    <?php
    foreach ($footermenu["footer-menu"] as $value) {
    ?>
        <div class="fg-footer-menu">
            <h6 class="on-secondary"><?php echo $value["menu-title"] ?></h6>
            <ul>
                <?php
                foreach ($value["menu"] as $li) {
                ?>
                    <li><a class="gray fg-footer-a subtitle-1" href="<?php echo URLROOT . '/pages/' . $li["url"] ?>"><?php echo $li["item"] ?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php
    }
    ?>
    <div class="fg-footer-menu">
        <h6 class="footer-title on-secondary">Follow Us</h6>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook gray"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter gray"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram gray"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin gray"></i></a>
        </div>
    </div>

</div>
<style>
    .fg-footer {
        display: grid;
        grid-template-columns: 23% 18% 18% 18% 23%;
        padding: 100px 11.7vw 100px;
        justify-items: center;
        background: #FFF3F9;
    }

    .fg-info {
        width: 100%;
    }

    .social-icons {
        font-size: 36px;
        margin-top: 40px;
    }

    .social-icons i {
        margin-right: 10px;
        cursor: pointer;
    }

    .social-icons i:hover {
        color: var(--primary);
    }

    .fg-footer ul {
        list-style: none;
        color: var(--gray);
        margin-top: 40px;
    }

    .fg-footer ul li {
        margin: 17px 0 0 0;
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
        background: #acacac;
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