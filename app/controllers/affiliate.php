<?php

class affiliate extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // $data = [
        //   'city' => ''
        // ];
        // $data['city'] = $this->Student->showinProfile($data);
        $this->view('affiliate /affiliateprofileview');
    }

    public function billinginformation()
    {
        $this->view('affiliate/billinginformation');
    }

    public function notifications()
    {
        $this->view('affiliate/notifications');
    }

    public function security()
    {
        $this->val = $this->model("Validate");
        $this->settingsModel = $this->model("Settings");


        $data = [
            'getPassword' => '',
            'password' => '',
            'confpassword' => '',
            'getPasswordError' => '',
            'passwordError' => '',
            'confpasswordError' => ''
        ];



        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'getPassword' => trim($_POST['current']),
                'password' => trim($_POST['new']),
                'confpassword' => trim($_POST['confirm']),

                'getPasswordError' => '',
                'passwordError' => '',
                'confpasswordError' => ''

            ];

            $data['getPassword'] = hash('sha256', $data['getPassword']);
            $data['password'] = hash('sha256', $data['password']);
            $data['confpassword'] = hash('sha256', $data['confpassword']);
            // --------------------------------------
            // add the current password error message
            // --------------------------------------
            if ($this->settingsModel->passwordexist($data['getPassword'])) {
                $data['getPasswordError'] = 'The password entered is incorrect';
            } else {
                $data['getPasswordError'] = '';
            }


            $data["passwordError"] = $this->val->password($data['password'], $data['confpassword']);
            if ($data['password'] == $data['confpassword']) {
                $data['confpasswordError'] = '';
            } else {
                $data['confpasswordError'] = 'Passwords do not match';
            }


            if (empty($data["getPasswordError"] && $data['passwordError'] && $data['confpasswordError'])) {
                if ($this->settingsModel->resetpassword($data)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/affiliate/affiliateprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('affiliate/security', $data);
    }


    public function settings()
    {
        $this->val = $this->model("Validate");
        $this->settingsModel = $this->model("Settings");


        $data = [
            'firstname' => '',
            'lastname' => '',
            'phoneno' => '',
            'city' => '',
            'firstnameError' => '',
            'lastnameError' => '',
            'phonenoError' => ''

        ];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'phoneno' => trim($_POST['phoneno']),
                'city' => trim($_POST['city']),
                'firstnameError' => '',
                'lastnameError' => '',
                'phonenoError' => ''

            ];



            $data["firstnameError"] = $this->val->name($data['firstname']);
            $data["lastnameError"] = $this->val->name($data['lastname']);
            $data["phonenoError"] = $this->val->mobile($data['phoneno']);


            if (empty($data["firstnameError"] && $data['lastnameError'] && $data['phonenoError'])) {

                if ($this->settingsModel->update($data)) {
                    //Ridirect to the main
                    header('location:' . URLROOT . '/affiliate/affiliateprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('affiliate/settings', $data);
    }
}
//
