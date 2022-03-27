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
        $data = [
            'password' => '',
            'newpassword' => '',
            'confirmpassword' => ''
        ];
        $passwordchange = [
            'password' => '',
            'newpassword' => ''
        ];
        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }
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

                $result = $this->settingsModel->passwordchangeaffiliate($passwordchange);
                if ($result) {
                    $_SESSION['toastmsg'] = [true, "Password change successful !"];
                    die(header('location:' . URLROOT . '/affiliate/settings'));
                } else {
                    $_SESSION['toastmsg'] = [false, "Password change unsuccessful !"];
                    die(header('location:' . URLROOT . '/affiliate/settings'));
                }
            } else {
                $_SESSION['toastmsg'] = [false, " Password Mismatch !"];
                die(header('location:' . URLROOT . '/affiliate/settings'));
            }
        }


        $this->view('affiliate/settings');
    }




    public function messages(){
        $this->view('affiliate/messages');
    }

    public function complaint()
    {
        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }

        $this->complaintsModel = $this->model("Complaints");
        $data = [

            'contactnumber' => '',
            'email' => '',
            'complainttype' => '',
            'complaint' => ''
        ];

        if (isset($_POST['complaintbtn'])) {
            $data = [

                'contactnumber' => $_POST['contactnumber'],
                'email' => $_POST['email'],
                'complainttype' => $_POST['complainttype'],
                'complaint' => $_POST['complaint']
            ];
            $result = $this->complaintsModel->complaintsendaffiliate($data);
            if ($result) {
                $_SESSION['toastmsg'] = [true, "Complaint submitted successfully"];
                die(header('location:' . URLROOT . '/affiliate/complaint'));
            } else {
                $_SESSION['toastmsg'] = [false, "Complaint submission failed"];
                die(header('location:' . URLROOT . '/affiliate/complaint'));
            }
        }

        $this->view('affiliate/complaint', $data);
    }
}
//
