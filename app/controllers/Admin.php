<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 18, 2021
 * FILE TYPE: Controller File
 * 
 */

class Admin extends Controller
{
    private $studentModel;
    // private $adminModel;

    public function __construct()
    {
        // session_start();
        // if (isset($_SESSION['ADMACCESS'])) {
        //     if ($_SESSION['ADMACCESS'] === hash('sha256', $_SESSION['userdata']['username'])) {
        //         die(header('location:' . URLROOT . '/student'));
        //     }
        // } elseif (isset($_SESSION['ADMACCESS'])) {
        //     if ($_SESSION['ADMACCESS'] === hash('sha256', $_SESSION['userdata']['username'])) {
        //         die(header('location:' . URLROOT . '/tutor'));
        //     }
        // }
        $this->tutor = $this->model("TutorModel");
    }

    public function cadmin()
    {
        $this->studentModel = $this->model("Student");

        $data = [
            'username' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'phoneno' => '',
            'password' => '',
            'confpassword' => '',
            'gender' => '',
            'dob' => '',
            'role' => '',
            'city' => '',
            'photourl' => '',
            'usernameError' => '',
            'firstnameError' => '',
            'lastnameError' => '',
            'emailError' => '',
            'phonenoError' => '',
            'passwordError' => '',
            'confpasswordError' => '',
            'genderError' => '',
            'dobError' => '',
            'sub' => 0,
            'level' => 2,
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'phoneno' => trim($_POST['phoneno']),
                'password' => trim($_POST['password']),
                'confpassword' => trim($_POST['confpassword']),
                'gender' => trim($_POST['gender']),
                'dob' => trim($_POST['dob']),
                'sub' => '',
                'role' => 'ad',
                'city' => trim($_POST['city']),
                'photourl' => 'notyet',
                'usernameError' => '',
                'firstnameError' => '',
                'lastnameError' => '',
                'emailError' => '',
                'phonenoError' => '',
                'passwordError' => '',
                'confpasswordError' => '',
                'genderError' => '',
                'dobError' => '',
                'level' => 2,
            ];

            //validation begin
            $this->val = $this->model("Validate");
            $this->mail = $this->model("Mailer");
            $data["firstnameError"] = $this->val->name($data['firstname']);
            $data["lastnameError"] = $this->val->name($data['lastname']);
            $data["usernameError"] = $this->val->username($data['username']);
            $data["emailError"] = $this->val->email($data['email']);
            $data["phonenoError"] = $this->val->mobile($data['phoneno']);
            $data["dobError"] = $this->val->sdob($data['dob']);
            $data["confpasswordError"] = $this->val->password($data['password'], $data['confpassword']);

            if ($data["confpasswordError"] == null) {
                // if no errors
                if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confpasswordError']) && empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['phonenoError']) && empty($data['dobError'])) {
                    $data['password'] = hash('sha256', $data['password']);
                    $data['confpassword'] = hash('sha256', $data['confpassword']);
                    $otpcode = rand(000000, 999999);
                    $this->mail->vmail($otpcode, $data['email']);
                    setcookie('regstudent', json_encode($data), time() + 360);
                    setcookie('otpem', hash('sha256', $otpcode), time() + 360);
                    header("location:" . URLROOT . "/registration/verification");
                }
            }
        }
        $this->view('admin/components/create-admin', $data);
    }

    public function login()
    {
        $this->view('admin/login/login');
    }
    public function verify()
    {
        $this->view('admin/login/emailverify');
    }
    public function index()
    {
        // $this->adminModel = $this->model("Admin");
        $this->view('admin/admin');
    }
    public function accounts()
    {
        $this->adminModel = $this->model("User");
        $resultArray = $this->adminModel->getUsers();
        $this->view('admin/pages/accounts', $resultArray);
    }
    public function analytics()
    {
        $this->view('admin/pages/analytics');
    }
    public function create()
    {
        $this->view('admin/pages/create');
    }
    public function dashboard()
    {
        $this->view('admin/pages/dashboard');
    }
    public function messages()
    {
        $this->view('admin/pages/messages');
    }
    public function complaint()
    {
        $this->view('admin/pages/complaint');
    }
    public function payments()
    {
        $this->view('admin/pages/payments');
    }
    public function reports()
    {
        $this->view('admin/pages/reports');
    }
    public function settings()
    {
        $this->view('admin/pages/settings');
    }
    public function verifications()
    {
        $this->tutorModel = $this->model("TutorModel");
        $resultArray = $this->tutorModel->getVerifications();
        $this->view('admin/pages/verifications', $resultArray);
    }
    public function approve()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $tuid = trim($_POST['tuid']);
            $this->tutor->approve($tuid);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function decline()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $tuid = trim($_POST['tuid']);
            $this->tutor->decline($tuid);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
