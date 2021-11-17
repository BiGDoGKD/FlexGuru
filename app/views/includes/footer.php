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
<script defer src="<?php echo URLROOT . '/public/js/smooth-scroll.js' ?>"></script>
</div>

<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/public/footer/style.css' ?>">

<?php
$footer_string = file_get_contents(APPROOT . '/views/includes/data/footer.json');
$footer = json_decode($footer_string, true);
?>
<div class="fg-footer gray">
    <div class="fg-info">
        <p class="primary h5"><?php echo $footer['title'] ?></p>
        <p class="subtitle-1"><?php echo $footer['info-address'] ?></p>
        <p class="subtitle-1"><?php echo $footer['local-address'] ?></p>
        <p class="subtitle-2 privacy-policy bold"><?php echo $footer['policy'] ?></p>
    </div>

    <div class="fg-resources menu">
        <p class="h6">Resources</p>
        <ul>
            <?php
            foreach ($footer['footer-menu'][0]['menu'] as $item) {
            ?>
                <li><a href="#"><?php echo $item['item'] ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div class="fg-support menu">
        <p class="h6">Support</p>
        <ul>
            <?php
            foreach ($footer['footer-menu'][1]['menu'] as $item) {
            ?>
                <li><a href="#"><?php echo $item['item'] ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div class="fg-company menu">
        <p class="h6">Company</p>
        <ul>
            <?php
            foreach ($footer['footer-menu'][2]['menu'] as $item) {
            ?>
                <li><a href="#"><?php echo $item['item'] ?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div class="fg-social menu">
        <p class="h6">Follow Us</p>
        <div class="social-icons">
            <a href="https://www.facebook.com" rel="noopener" target="_blank">
                <i class="fab fa-facebook gray">
                    <p class="body-1" style="font-size: 15px;">Facebook</p>
                </i>
            </a>
            <a href="https://www.twitter.com" rel="noopener" target="_blank">
                <i class="fab fa-twitter gray">
                    <p class="body-1" style="font-size: 15px;">Twitter</p>
                </i></a>
            <a href="https://www.instagram.com" rel="noopener" target="_blank">
                <i class="fab fa-instagram gray">
                    <p class="body-1" style="font-size: 15px;">Instagram</p>
                </i></a>
            <a href="https://www.linkedin.com" rel="noopener" target="_blank">
                <i class="fab fa-linkedin gray">
                    <p class="body-1" style="font-size: 15px;">Linkedin</p>
                </i></a>
        </div>
    </div>

</div>
</body>

</html>