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
 */

class Registration extends Controller
{
    private $val;

    public function __construct()
    {
    }

    public function index()
    {
        $this->view('registration/roles');
    }

    public function roles()
    {
        $this->view('registration/roles');
    }

    public function verification()
    {
        if (!isset($_COOKIE['regstudent'])) {
            header('location:' . URLROOT . 'registration/roles');
        } else {
            $data = json_decode($_COOKIE['regstudent'], true);
            print_r($data['email']);
            $this->view('registration/email');
        }
    }

    public function tutor()
    {
        // dob need to be added
        $this->tutorModel = $this->model("Tutor");

        $datatutor = [
            'username' => 'avishka3213',
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'phoneno' => '',
            'password' => '',
            'confpassword' => '',
            'gender' => '',
            'role' => '',
            'city' => '',
            'photourl' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            // data of birth needs to be added here
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $datatutor = [
                'username' => 'avish34ka354dg65',
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'phoneno' => trim($_POST['phoneno']),
                'password' => trim($_POST['password']),
                'confpassword' => trim($_POST['confpassword']),
                'gender' => trim($_POST['gender']),
                'role' => 'tu',
                'city' => trim($_POST['city']),
                'photourl' => 'abcd'
            ];



            if ($this->tutorModel->register($datatutor)) {
                //Ridirect to the main
                header('location:' . URLROOT . '/pages/about');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('registration/tutor', $datatutor);
    }



    public function student()
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
            'sub' => 0
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
                'role' => 'st',
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
            ];

            //validation begin
            $this->val = $this->model("Validate");
            $data["firstnameError"] = $this->val->name($data['firstname']);
            $data["lastnameError"] = $this->val->name($data['lastname']);
            $data["usernameError"] = $this->val->username($data['username']);
            $data["emailError"] = $this->val->email($data['email']);
            $data["phonenoError"] = $this->val->mobile($data['phoneno']);
            $data["dobError"] = $this->val->dob($data['dob']);
            $data["confpasswordError"] = $this->val->password($data['password'], $data['confpassword']);

            if ($data["confpasswordError"] == null) {
                // if no errors
                if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confpasswordError']) && empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['phonenoError']) && empty($data['dobError'])) {
                    $data['password'] = hash('sha256', $data['password']);
                    $data['confpassword'] = hash('sha256', $data['confpassword']);
                    $otpcode = rand(0000, 9999);
                    mail($data['email'], 'Flexguru Verification Code', 'Your verification code is ' . $otpcode);
                    setcookie('regstudent', json_encode($data), time() + 360);
                    setcookie('otpem', hash('sha256', $otpcode), time() + 360);
                    header("location:" . URLROOT . "/registration/verification");
                }
            }

            //validation ends

        }
        $this->view('registration/student', $data);
    }
    public function affiliate()
    {
        $this->view('registration/affiliate');
    }
}
