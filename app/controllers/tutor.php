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

    public function index($optional = array())
    {
        if ($optional == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else if ($optional == 500) {
            include APPROOT . "/views/includes/errortoast.php";
        }

        $this->gig = $this->model('Gig');
        $data = [
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        $result = $this->gig->getGigsByTutor($data);
        if (!isset($result['result']->message)) {
            $this->view('tutor/tutorprofileview', $result['result']);
        } else {
            $this->view('tutor/tutorprofileview');
        }
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
                    header('location:' . URLROOT . '/tutor/tutorprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('tutor/security', $data);
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
                
                    header('location:' . URLROOT . '/tutor/tutorprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('tutor/settings', $data);
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
            //form process
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
                $this->tutor = $this->model('User');
                $status = $this->tutor->tutorDP($data);
                if ($status == 200) {
                    $_SESSION['userdata']['photourl'] = $fileNameNew;
                    header('location:' . URLROOT . '/tutor');
                } else {
                    header('location:' . URLROOT . '/tutor/' . $status);
                }
            }
        } else {
            $_SESSION['toastmsg'] = 'Unknown Error Occured';
            include APPROOT . "/views/includes/errortoast.php";
        }
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
