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
class Registration extends Controller
{
    private $val;

    public function __construct()
    {
    }

    public function roles()
    {
        $this->view('registration/roles');
    }

    public function tutor()
    
    {
// dob need to be added
        $this->tutorModel = $this->model("Tutor");

        $datatutor = [
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
            'dobError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $datatutor = [
                'username' => trim($_POST['username']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'phoneno' => trim($_POST['phoneno']),
                'password' => trim($_POST['password']),
                'confpassword' => trim($_POST['confpassword']),
                'gender' => trim($_POST['gender']),
                'dob' => trim($_POST['dob']),
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
                'dobError' => ''
            ];

            //validation begin
            $this->val = $this->model("Validate");
            $datatutor["usernameError"] = $this->val->username($datatutor['username']);
            $datatutor["firstnameError"] = $this->val->name($datatutor['firstname']);
            $datatutor["lastnameError"] = $this->val->name($datatutor['lastname']);
            $datatutor["emailError"] = $this->val->email($datatutor['email']);
            $datatutor["phonenoError"] = $this->val->mobile($datatutor['phoneno']);
            //validation ends


            //if no errors
            if (empty($datatutor['usernameError']) && empty($datatutor['emailError']) && empty($datatutor['passwordError']) && empty($datatutor['confpasswordError'])&& empty($datatutor['phonenoError'])) {
                if ($this->tutorModel->register($datatutor)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/pages/about');
                } else {
                    die('Something went wrong.');
                }
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
            'dobError' => ''
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
                'dobError' => ''
            ];

            //validation begin
            $this->val = $this->model("Validate");
            $data["usernameError"] = $this->val->username($data['username']);
            $data["firstnameError"] = $this->val->name($data['firstname']);
            $data["lastnameError"] = $this->val->name($data['lastname']);
            $data["emailError"] = $this->val->email($data['email']);
            $data["phonenoError"] = $this->val->mobile($data['phoneno']);
            //validation ends


            //if no errors
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confpasswordError'])&& empty($data['phonenoError'])) {
                if ($this->studentModel->register($data)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/pages/about');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('registration/student', $data);
    }
    public function affiliate()
    {
        $this->affiliateModel = $this->model("affiliate");

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
            'dobError' => ''
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
                'dobError' => ''
            ];

            //validation begin
            $this->val = $this->model("Validate");
            $data["usernameError"] = $this->val->username($data['username']);
            $data["firstnameError"] = $this->val->name($data['firstname']);
            $data["lastnameError"] = $this->val->name($data['lastname']);
            $data["emailError"] = $this->val->email($data['email']);
            $data["phonenoError"] = $this->val->mobile($data['phoneno']);
            //validation ends


            //if no errors
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confpasswordError'])) {
                if ($this->affiliateModel->register($data)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/pages/about');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('registration/affiliate', $data);
    }
}
