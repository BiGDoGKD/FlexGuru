<?php
/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Controller File
 * 
 */
class Pages extends Controller
{
    public function __construct()
    {
        //$this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function role()
    {
        $this->view('pages/roles');
    }

    public function about()
    {
        $this->view('pages/about');
    }
    public function docs()
    {
        $this->view('pages/how-it-works');
    }
    public function becomeastudent()
    {
        $this->view('info/become-a-student');
    }
     public function studentprofileview()
    {
        $this->view('pages/studentprofileview');
    }
    public function becomeatutor()
    {
        $this->view('pages/become-a-tutor');
    }
    public function findservices()
    {
        $this->view('pages/find-services');
    }
    public function flexguruaffiliates()
    {
        $this->view('flexguru-affiliates');
    }
    public function helpandsupport()
    {
        $this->view('pages/help-and-support');
    }
}
