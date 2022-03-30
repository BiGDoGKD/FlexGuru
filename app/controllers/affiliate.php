<?php

class affiliate extends Controller
{
    public function __construct()
    {
        error_reporting(E_ERROR | E_PARSE);
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


        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }






        $data = [
            'password' => '',
            'newpassword' => '',
            'confirmpassword' => ''
        ];
        $passwordchange = [
            'password' => '',
            'newpassword' => ''
        ];

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

        // Change the EMAIL and CONTACT DETAILS
        $dataemail = [
            'email' => ''
            
        ];
        if (isset($_POST['button_email'])) {
            $dataemail = [
                'email' => $_POST['email'],
            ];
             $result = $this->settingsModel->changeemailaffiliate($dataemail);
                if ($result) {
                    $_SESSION['toastmsg'] = [true, " Email Changed Successfully  !"];
                    die(header('location:' . URLROOT . '/affiliate/settings'));
                } else {
                    $_SESSION['toastmsg'] = [false, " Email change unsuccessful !"];
                    die(header('location:' . URLROOT . '/affiliate/settings'));
                }
            }
        $datacontactnumber = [
            'contactnumber' => ''
        ];
        if (isset($_POST['button_contact'])) {
            $datacontactnumber = [
                'contactnumber' => $_POST['contactnumber']
            ];
            $result = $this->settingsModel->changecontactnumberaffiliate($datacontactnumber);
            if ($result) {
                $_SESSION['toastmsg'] = [true, " Contact Number change successful !"];
                die(header('location:' . URLROOT . '/affiliate/settings'));
            } else {
                $_SESSION['toastmsg'] = [false, " Contact Number change unsuccessful !"];
                die(header('location:' . URLROOT . '/affiliate/settings'));
            }
        }
        $deleteaccount = [
            'deletereason' => ''
        ];
        if (isset($_POST['button_deleteaccount'])) {
            $deleteaccount = [
                'deletereason' => $_POST['deletereason']
            ];     
            $result = $this->settingsModel->deleteaccountaffiliate($deleteaccount);
            if ($result) {
                $_SESSION['toastmsg'] = [true, " Delete Request Submitted!"];
                die(header('location:' . URLROOT . '/affiliate/settings'));
            } else {
                $_SESSION['toastmsg'] = [false, " Delete Request Unsuccessful !"];
              
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

    public function referrallinks(){

        $data = [
            'url' => ''

        ];
        if(isset($_POST['urlsubmit'])){
            $data = [
                'url' => $_POST['url']
            ];

        $_SESSION['referralurl'] = $data['url'];
            
        }
        $this->view('affiliate/referrallinks',$data);


    }

    public function withdrawearnings()
    {
        $this->view('affiliate/withdrawearnings');
    }

    public function updateprofilepicture()
    {
        $data = [
            'photourl' => '',
            'photourlError' => '',
            'userid' => '',
            'bio' => '',
            'bioError' => ''
        ];

        $validate = true;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'photourl' => $_FILES['photourl'],
                'userid' => $_SESSION['roledata']['userid'],
                'bio' => trim($_POST['bio']),
            ];


            $file = $_FILES['photourl'];
            $fileName = $_FILES['photourl']['name'];
            $fileTmpName = $_FILES['photourl']['tmp_name'];
            $fileSize = $_FILES['photourl']['size'];
            $fileError = $_FILES['photourl']['error'];
            $fileType = $_FILES['photourl']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'PNG', 'JPG', 'JPEG');
            //if no errors
            if (true) {
                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = APPROOT . '/../public/uploads/users/' . $fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            $data['photourl'] = $fileNameNew;
                        } else {
                            $validate = false;
                            $data['photourlError'] = "Your photourl is too big";
                        }
                    } else {
                        $validate = false;
                        $data['photourlError'] = "There was an error uploading your photourl";
                    }
                } else {
                    $validate = false;
                    $data['photourlError'] = "You cannot upload files of this type";
                }
            } else {
                $validate = false;
                $data['photourlError'] = "You need to upload an image";
            }
            if ($validate) {
                $this->affiliate = $this->model('User');
                $status = $this->affiliate->affiliateDP($data);
                if ($status == 200) {
                    $_SESSION['userdata']['photourl'] = $fileNameNew;
                    header('location:' . URLROOT . '/affiliate');
                } else {
                    header('location:' . URLROOT . '/affiliate/' . $status);
                }
            }
        } else {
            $_SESSION['toastmsg'] = 'Unknown Error Occured';
            include APPROOT . "/views/includes/errortoast.php";
        }
    }





}
//
