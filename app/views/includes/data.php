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
$str_navigation = file_get_contents(APPROOT . '/data/navigation-details.json');
$str_sitedetails = file_get_contents(APPROOT . '/data/site-details.json');
$str_footermenu = file_get_contents(APPROOT . '/data/footer-menu.json');
$str_district = file_get_contents(APPROOT . '/data/district.json');
$str_st_navigation = file_get_contents(APPROOT . '/data/student/student-navigation.json');
$str_tu_navigation = file_get_contents(APPROOT . '/data/tutor/tutor-navigation.json');
$session_navigation = file_get_contents(APPROOT . '/data/tutor/session-navigation.json');
$str_actors = file_get_contents(APPROOT . '/data/visitor/actors.json');
$str_af_navigation = file_get_contents(APPROOT . '/data/affiliate/affiliate-navigation.json');
$navigation = json_decode($str_navigation, true);

$footermenu = json_decode($str_footermenu, true);
$main = json_decode($str_sitedetails, true);
$district = json_decode($str_district, true);
$st_navigation = json_decode($str_st_navigation, true);
$session_navigation = json_decode($session_navigation, true);
$tu_navigation = json_decode($str_tu_navigation, true);
$actors = json_decode($str_actors, true);
$af_navigation = json_decode($str_af_navigation, true);
