<?php

class Tutor extends Controller
{
    public function __construct()
    {
        session_start();
        // if (isset($_SESSION['TUTACCESS'])) {
        //     if ($_SESSION['TUTACCESS'] === hash('sha256', $_SESSION['userdata']['username'])) {
        //         //do nothing
        //     } else {
        //         die(header('location:' . URLROOT . '/login'));
        //     }
        // } elseif (isset($_SESSION['TUTACCESS'])) {
        //     die(header('location:' . URLROOT . '/tutor'));
        // } elseif (isset($_SESSION['AFFACCESS'])) {
        //     die(header('location:' . URLROOT . '/affiliate'));
        // } else {
        //     die(header('location:' . URLROOT . '/login'));
        // }
    }

    public function table()
    {
        $this->view('tutor/table');
    }

    public function index()
    {
        $this->view('tutor/tutorprofileview');
    }

    public function billinginformation()
    {
        $this->view('tutor/billinginformation');
    }

    public function gigdetail()
    {
        $this->view('tutor/publishgig/gigdetail');
    }
    public function tutororderprogress()
    {
        $this->view('tutor/tutororderprogress');
    }

    public function alreadypublishedgigs()
    {
        $this->view('tutor/alreadypublishedgigs');
    }

    public function notifications()
    {
        $this->view('tutor/notifications');
    }

    public function gigreview()
    {
        $this->view('tutor/gigreview');
    }



    public function settings(){

        $this->settingsModel = $this->model("Settings");
        $this->val = $this->model("Validate");
        $username = ($_SESSION['userdata']['userid']);

    if(isset($_POST['button_deleteaccount'])){
            if($this->settingsModel->accountdelete($username)){
                header('location:' . URLROOT . '/tutor/tutorprofileview');
            }
            else{
                print_r("Deletion unsuccessful!");
                die('Something went wrong.');
            }     
        }
    if(isset($_POST['button_password'])){
            
            $data = [
                'currentPassword' => '',
                'newPassword' => '',
                'currentpasswordError' => '',
                'newPasswordError' => '',
            ];     
                $data = [
                    'currentPassword' => trim($_POST['currentPassword']),
                    'newPassword' => trim($_POST['newPassword']),
                    'newPasswordError' => '',
                    'currentpasswordError' => ''
                ];

                $data['currentPassword'] = hash('sha256', $data['currentPassword']);
                $data['newPassword'] = hash('sha256', $data['newPassword']);

                // --------------------------------------
                // add the current password error message
                // --------------------------------------
                if (!$this->settingsModel->passwordexist($data['currentPassword'])) {
                    $data['currentPasswordError'] = 'The password entered is incorrect';
                } else {
                    $data['currentPasswordError'] = '';
                }

                if (empty($data["currentPasswordError"] && empty($data['newPasswordError']))) {
                if ($this->settingsModel->resetpassword($data)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/tutor/tutorprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
    }
    if(isset($_POST['button_general'])){
        $generaldetails = [
            'email' => '',
            'phoneno' => '',
            'emailError' => '',
            'phonenoError' => ''
        ];
            $generaldetails = [
                'email' => trim($_POST['email']),
                'phoneno' => trim($_POST['phoneno']),
                'emailError' => '',
                'phonenoError' => ''
            ];
            if ($this->val->isValidEmail($generaldetails['email'])) {
                $generaldetails['emailError'] = '';
            } else {
                $generaldetails['emailError'] = 'Please enter a valid email';
            }
            if ($this->val->isValidPhoneNo($generaldetails['phoneno'])) {
                $generaldetails['phonenoError'] = '';
            } else {
                $generaldetails['phonenoError'] = 'Please enter a valid phone number';
            }
            if (empty($generaldetails['emailError']) && empty($generaldetails['phonenoError'])) {
                if ($this->settingsModel->resetgeneraldetails($generaldetails)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/tutor/tutorprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }

       
        $this->view('tutor/settings');
    }


    public function ssrtutorreceived()
    {
        $this->view('tutor/ssrtutorreceived');
    }

    public function viewssrreceived()
    {
        $this->view('tutor/viewssrreceived');
    }

    public function publish()
    {
        $this->view('tutor/creategig');
    }


    public function sessions()
    {
        $this->view('tutor/sessions');
    }

    public function customoffers()
    {
        $this->view('tutor/customoffers');
    }
    public function pendingjobs()
    {
        $this->view('tutor/pendingjobs');
    }
    public function completedjobs()
    {
        $this->view('tutor/completedjobs');
    }
}
