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
<?php
$str_navigation = file_get_contents(URLROOT . '/public/data/navigation-details.json');
$str_sitedetails = file_get_contents(URLROOT . '/public/data/site-details.json');
$str_footermenu = file_get_contents(URLROOT . '/public/data/footer-menu.json');
$navigation = json_decode($str_navigation, true);
$footermenu = json_decode($str_footermenu, true);
$main = json_decode($str_sitedetails, true);
