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

<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/public/footer/style.css' ?>">

<?php
$footer_string = file_get_contents(APPROOT . '/views/includes/data/footer.json');
$footer = json_decode($footer_string, true);
?>
<div class="fg-footer gray">
    <div class="fg-info">
        <h5 class="primary"><?php echo $footer['title'] ?></h5>
        <p class="subtitle-1"><?php echo $footer['info-address'] ?></p>
        <p class="subtitle-1"><?php echo $footer['local-address'] ?></p>
        <p class="subtitle-2 privacy-policy bold"><?php echo $footer['policy'] ?></p>
    </div>
    <div class="fg-resources menu">
        <h6>Resources</h6>
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
        <h6>Support</h6>
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
        <h6>Company</h6>
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
        <h6>Follow us</h6>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook gray"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter gray"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram gray"></i></a>
            <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin gray"></i></a>
        </div>
    </div>
</div>
</body>

</html>