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

class Support extends Controller
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
                    header('location' . URLROOT . '/affiliate');
                    break;
            }
        }
    }

    public function index(){
        echo "index";
    }
    public function student(){
        $this->view('static/support/student');
    }
    public function tutor(){
        $this->view('static/support/tutor');
    }
    public function help(){
        $this->view('static/support/help');
    }
    public function works(){
        $this->view('static/support/works');
    }
}
