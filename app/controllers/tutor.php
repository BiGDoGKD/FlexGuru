<?php

class Tutor extends Controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['TUTACCESS'])) {
            if ($_SESSION['TUTACCESS'] === hash('sha256', $_SESSION['userdata']['username'])) {
                //do nothing
            } else {
                die(header('location:' . URLROOT . '/login'));
            }
        } elseif (isset($_SESSION['STUACCESS'])) {
            die(header('location:' . URLROOT . '/student'));
        } elseif (isset($_SESSION['AFFACCESS'])) {
            die(header('location:' . URLROOT . '/affiliate'));
        } else {
            die(header('location:' . URLROOT . '/login'));
        }
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



    public function settings(){
        $this->settingsModel = $this->model("Settings");
        $this->val = $this->model("Validate");
        if(isset($_POST['button_password'])){
                $data = [
                    'password' => $_POST['password'],
                    'newpassword' => $_POST['newpassword'],
                    'confirmpassword' => $_POST['confirmpassword']
                ];       
                if($data['newpassword']==$data['confirmpassword']){
                        $passwordchange = [
                            'password' => $data['password'],
                            'newpassword' => $data['newpassword'],                  
                        ];
                        $passwordchange['password'] = hash('sha256', $passwordchange['password']);
                        $passwordchange['newpassword'] = hash('sha256', $passwordchange['newpassword']);
                        $response = $this->settingsModel->passwordchange($passwordchange);
                        if($response['result']->message=="Password Changed Successfully"){          
                            header('location:'.URLROOT.'/tutor/tutorprofileview');                   
                }
                else{
                    $this->view('tutor/settings',['error'=>'Password does not match']);
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

    public function complaint()
    {
        $this->view('tutor/complaint');
    } 

    public function earnings(){
        $this->view('tutor/earnings');
    }
}
