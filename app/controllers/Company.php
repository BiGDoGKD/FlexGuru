<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Controller File
 * 
 */

class Company extends Controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['type'])) {
            switch ($_SESSION['type']) {
                case 'student':
                    header('location:' . URLROOT . '/student');
                    break;
                case 'tutor';
                    header('location' . URLROOT . '/student');
                    break;
                case 'affiliate':
                    header('location' . URLROOT . '/affiliatemarketer');
                    break;
            }
        }
    }

    public function index()
    {
        echo "index";
    }
    public function team()
    {
        $this->view('static/company/team');
    }
    public function contact()
    {
        $this->view('static/company/contact');
    }
    public function about()
    {
        $this->view('static/company/about');
    }
    public function terms()
    {
        $this->view('static/company/terms');
    }
}
