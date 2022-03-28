<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE:   troller File
 */

class Registration extends Controller
{
    private $val;
    private $student;
    private $tutor;
    private $affiliate;
    private $registration;
    private $mail;
    private $data = [
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

    public function __construct()
    {
        session_start();
        if (isset($_SESSION['type'])) {
            switch ($_SESSION['type']) {
                case 'student':
                    die(header('location:' . URLROOT . '/student'));
                    break;
                case 'tutor';
                    die(header('location:' . URLROOT . '/tutor'));
                    break;
                case 'affiliate':
                    die(header('location:' . URLROOT . '/affiliatemarketer'));
                    break;
            }
        }

        //Load Models
        $this->mail = $this->model("Mailer");
        $this->val = $this->model("Validate");
        $this->student = $this->model("Student");
        $this->tutor = $this->model("TutorModel");
        $this->affiliate = $this->model("Affiliate");
        $this->registration = $this->model("Register");
    }

    //validate function for every user
    private function validate($data)
    {
        //validation begin
        $data["firstnameError"] = $this->val->name($data['firstname']);
        $data["lastnameError"] = $this->val->name($data['lastname']);
        // $data["usernameError"] = $this->val->username($data['username']);
        // $data["emailError"] = $this->val->email($data['email']);
        // $data["phonenoError"] = $this->val->mobile($data['phoneno']);

        $res = $this->val->validate($data['email'], $data['username'], $data['phoneno']);

        $data["emailError"] = $res['emailError'];
        $data["usernameError"] = $res['usernameError'];
        $data["phonenoError"] = $res['phonenoError'];

        if ($data["role"] == 'st') {
            $data["dobError"] = $this->val->dob($data['dob']);
        } else {
            $data["dobError"] = $this->val->spdob($data['dob']);
        }
        $data["confpasswordError"] = $this->val->password($data['password'], $data['confpassword']);
        //validation ends
        return $data;
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
        if (!isset($_COOKIE['regdata'])) {
            header('location:' . URLROOT . '/registration/roles');
        } else {
            $data = json_decode($_COOKIE['regdata'], true);
            $code = $_COOKIE['otpem'];
            $evdata = [
                'email' => $data['email'],
                'otp' => '',
                'otpError' => ''
            ];

            //If user enters the otp code
            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                //form process
                //Sanatize post data

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $evdata = [
                    'email' => $data['email'],
                    'otp' => $_POST['emailcode'],
                    'otpError' => ''
                ];

                $uecode = hash('sha256', $evdata['otp']);

                if ($uecode == $code) {
                    switch ($data['role']) {
                        case 'st':
                            $this->registration->register($data);
                            header("refresh:0; url=" . URLROOT . "/login");
                            break;
                        case 'tu':
                            if (isset($_COOKIE['tutordata']) && isset($_COOKIE['verificationdata'])) {
                                $tutordata = json_decode($_COOKIE['tutordata']);
                                $verificationfiles = json_decode($_COOKIE['verificationdata']);
                                $this->registration->register($data);
                                $this->tutor->register($verificationfiles, $data['username'], $tutordata);
                                header("refresh:0; url=" . URLROOT . "/login");
                            } else {
                                $this->registration->register($data);
                                header("refresh:0; url=" . URLROOT . "/login");
                            }
                            break;
                        case 'af':
                            $this->registration->register($data);
                            header("refresh:0; url=" . URLROOT . "/login");
                            break;
                        default:
                            echo 'something went wrong';
                            break;
                    }

                    // header('location:' . URLROOT);
                } else {
                    $evdata['otpError'] = 'The code you entered is incorrect!';
                }
            }

            $this->view('registration/email', $evdata);
        }
    }

    private function senddata($data)
    {
        if ($data["confpasswordError"] == null) {
            // if no errors
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confpasswordError']) && empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['phonenoError']) && empty($data['dobError'])) {

                if ($data['role'] == 'tu') {
                    $data['password'] = hash('sha256', $data['password']);
                    $data['confpassword'] = hash('sha256', $data['confpassword']);
                    setcookie('regdata', json_encode($data), time() + 1800, '/', null, null, true);
                    header("location:" . URLROOT . "/registration/tutorverification");
                } else {
                    $data['password'] = hash('sha256', $data['password']);
                    $data['confpassword'] = hash('sha256', $data['confpassword']);
                    $otpcode = rand(100000, 999999);
                    $this->mail->vmail($otpcode, $data['email']);
                    setcookie('regdata', json_encode($data), time() + 360, '/', null, null, true);
                    setcookie('otpem', hash('sha256', $otpcode), time() + 360);
                    //If validation pass, rediect the visitor to registration/verification 
                    header("location:" . URLROOT . "/registration/verification");
                }
            }
        }
    }

    public function tutor()
    {
        //initialize array
        $data = $this->data;

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
                'role' => 'tu',
                'city' => trim($_POST['city']),
                'photourl' => 'default.webp',
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

            //form validation
            // $data = $this->validate($data);

            //send to verify email
            $this->senddata($data);
        }
        $this->view('registration/tutor', $data);
    }

    public function tutorverification()
    {
        $data = [
            'subjects' => '',
            'workplace' => '',
            'occupation' => '',
            'qualification' => '',
            'subjectsError' => '',
            'workplaceError' => '',
            'occupationError' => '',
            'qualificationError' => '',
            'fileError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'subjects' => trim($_POST['subjects']),
                'workplace' => trim($_POST['workplace']),
                'occupation' => trim($_POST['occupation']),
                'qualification' => trim($_POST['qualification']),
                'subjectsError' => '',
                'workplaceError' => '',
                'occupationError' => '',
                'qualificationError' => '',
                'fileError' => ''
            ];

            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'pdf');
            // if no errors
            if (empty($data['subjectsError']) && empty($data['workspaceError']) && empty($data['occupationError']) && empty($data['qualificationError'])) {
                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = APPROOT . '/../public/uploads/verifications/' . $fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            //send mail
                            $otpcode = rand(000000, 999999);
                            $email = json_decode($_COOKIE['regdata'], true);
                            $this->mail->vmail($otpcode, $email['email']);

                            setcookie('tutordata', json_encode($data), time() + 360);
                            setcookie('verificationdata', json_encode($fileNameNew), time() + 360);
                            setcookie('otpem', hash('sha256', $otpcode), time() + 360);

                            header("location:" . URLROOT . "/registration/verification");
                        } else {
                            $data['fileError'] = 'Your file is too big!';
                        }
                    } else {
                        $data['fileError'] = 'There was an error uploading your file!';
                    }
                } else {
                    $data['fileError'] = "You can't upload files of this type!";
                }
            }
        }
        $this->view('registration/tutorverification', $data);
    }

    public function skipped()
    {
        if (!isset($_COOKIE['regdata'])) {
            header('location:' . URLROOT . '/registration/roles');
        } else {
            $data = json_decode($_COOKIE['regdata'], true);
            $otpcode = rand(000000, 999999);
            $this->mail->vmail($otpcode, $data['email']);
            setcookie('otpem', hash('sha256', $otpcode), time() + 360);
            header('location:' . URLROOT . '/registration/verification');
        }
    }

    public function student()
    {
        //initialize array
        $data = $this->data;

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
                'photourl' => 'default.webp',
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

            //form validation
            // $data = $this->validate($data);

            //send to verify email
            $this->senddata($data);
        }
        $this->view('registration/student', $data);
    }

    public function affiliate()
    {
        //initialize array
        $data = $this->data;

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
                'role' => 'af',
                'city' => trim($_POST['city']),
                'photourl' => 'default.webp',
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

            //form validation
            // $data = $this->validate($data);

            //send to verify email
            $this->senddata($data);
        }
        $this->view('registration/affiliate', $data);
    }
}
