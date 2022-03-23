<?php

class affiliate extends Controller
{
    public function __construct()
    {
        $api = new API;
        $session = $this->model("Session");
        session_start();
        if (isset($_SESSION['AFFACCESS'])) {
            if ($api->checktoken($_COOKIE['ref'])) {
                //do nothing
                $session->destroy();
                die(header('location:' . URLROOT . '/login'));
            }
        } elseif (isset($_SESSION['TUTACCESS'])) {
            die(header('location:' . URLROOT . '/tutor'));
        } elseif (isset($_SESSION['STUACCESS'])) {
            die(header('location:' . URLROOT . '/student'));
        } else {
            die(header('location:' . URLROOT . '/login'));
        }
    }

    public function index()
    {
       
        $this->view('affiliate/affiliateprofileview');
    }

    public function billinginformation()
    {
        $this->view('affiliate/billinginformation');
    }

    public function notifications()
    {
        $this->view('affiliate/notifications');
    }


    public function settings()
    {
        $this->settingsModel = $this->model("Settings");
        $this->val = $this->model("Validate");
        if (isset($_POST['button_password'])) {
            $data = [
                'password' => $_POST['password'],
                'newpassword' => $_POST['newpassword'],
                'confirmpassword' => $_POST['confirmpassword']
            ];
            if ($data['newpassword'] == $data['confirmpassword']) {
                $passwordchange = [
                    'password' => $data['password'],
                    'newpassword' => $data['newpassword'],
                ];
                $passwordchange['password'] = hash('sha256', $passwordchange['password']);
                $passwordchange['newpassword'] = hash('sha256', $passwordchange['newpassword']);
                $response = $this->settingsModel->passwordchange($passwordchange);
                if ($response['result']->message == "Password Changed Successfully") {
                    header('location:' . URLROOT . '/tutor/tutorprofileview');
                } else {
                    $this->view('tutor/settings', ['error' => 'Password does not match']);
                }
            }
        }
        $this->view('tutor/settings');
    }


    public function messages(){
        $this->view('affiliate/messages');
    }

    
}
//
