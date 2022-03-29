<?php

class Tutor extends Controller
{

    // tutor constructor which limits access to logged in users

    public function __construct()
    {
        $api = new API;
        $session = $this->model("Session");
        session_start();
        if (isset($_SESSION['TUTACCESS'])) {
            if ($api->checktoken($_COOKIE['ref'])) {
                //do nothing
                $session->destroy();
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

    // get a particular class by class id 

    // public function class($class = array())
    // {
    //     if (!empty($class)) {
    //         $order = $this->model('Order');
    //         $array = [
    //             'classid' => $class,
    //         ];
    //         $data = $order->tutorGetClass($array);
    //         if (!$data) {
    //             die(header('location:' . URLROOT . '/tutor'));
    //         } else {
    //             $order = (array)$data["result"];
    //             $this->view('tutor/class', $order);
    //         }
    //     } else {
    //         die(header('location:' . URLROOT . '/tutor'));
    //     }
    // }


    public function class($class = array())
    {
        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }
        if (!empty($class)) {
            $order = $this->model('Order');
            $array = [
                'classid' => $class,
            ];
            $data = $order->tutorgetClass($array);
            if (!$data) {
                die(header('location:' . URLROOT . '/student'));
            } else {
                $order = (array)$data["result"];
                $this->view('tutor/class', $order);
            }
        } else {
            die(header('location:' . URLROOT . '/student'));
        }
    }

    // get all classes of a tutor

    public function classes()
    {
        $result = $this->model("Order")->tutorClasses($_SESSION['roledata']['tuid']);
        if ($result) {
            $this->view('tutor/classlist', $result['result']);
        } else {
            $this->view('tutor/classlist', false);
        }
    }

    // update the profile picture and bio for a tutor

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


    // load the index page for a tutor (tutor main dashboard)

    public function index($optional = array())
    {
        if ($optional == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else if ($optional == 500) {
            include APPROOT . "/views/includes/errortoast.php";
        }

        $gig = $this->model('Gig');
        $data = [
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        $result = $gig->getGigsByTutor($data);
        $tutorData = $this->model('TutorModel')->getTutorData();

        $tutorpage = [
            'gigs' => $result['result'],
            'tutor' => $tutorData,
        ];

        if (!boolval(isset($result['result']->message))) {
            $this->view('tutor/tutorprofileview', $tutorpage);
        } else {
            $this->view('tutor/tutorprofileview');
        }
    }

    // load the edit profile page for a tutor (settings for a tutor)

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

                $result = $this->settingsModel->passwordchangetutor($passwordchange);
                if ($result) {
                    $_SESSION['toastmsg'] = [true, "Password change successful !"];
                    die(header('location:' . URLROOT . '/tutor/settings'));
                } else {
                    $_SESSION['toastmsg'] = [false, "Password change unsuccessful !"];
                    die(header('location:' . URLROOT . '/tutor/settings'));
                }
            } else {
                $_SESSION['toastmsg'] = [false, " Password Mismatch !"];
                die(header('location:' . URLROOT . '/tutor/settings'));
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
            $result = $this->settingsModel->changeemailtutor($dataemail);
            if ($result) {
                $_SESSION['toastmsg'] = [true, " Email Changed Successfully  !"];
                die(header('location:' . URLROOT . '/tutor/settings'));
            } else {
                $_SESSION['toastmsg'] = [false, " Email change unsuccessful !"];
                die(header('location:' . URLROOT . '/tutor/settings'));
            }
        }
        $datacontactnumber = [
            'contactnumber' => ''
        ];
        if (isset($_POST['button_contact'])) {
            $datacontactnumber = [
                'contactnumber' => $_POST['contactnumber']
            ];
            $result = $this->settingsModel->changecontactnumbertutor($datacontactnumber);
            if ($result) {
                $_SESSION['toastmsg'] = [true, " Contact Number change successful !"];
                die(header('location:' . URLROOT . '/tutor/settings'));
            } else {
                $_SESSION['toastmsg'] = [false, " Contact Number change unsuccessful !"];
                die(header('location:' . URLROOT . '/tutor/settings'));
            }
        }
        $deleteaccount = [
            'deletereason' => ''
        ];
        if (isset($_POST['button_deleteaccount'])) {
            $deleteaccount = [
                'deletereason' => $_POST['deletereason']
            ];
            $result = $this->settingsModel->deleteaccounttutor($deleteaccount);
            if ($result) {
                $_SESSION['toastmsg'] = [true, " Delete Request Submitted!"];
                die(header('location:' . URLROOT . '/tutor/settings'));
            } else {
                $_SESSION['toastmsg'] = [false, " Delete Request Unsuccessful !"];

                die(header('location:' . URLROOT . '/tutor/settings'));
            }
        }














        $this->view('tutor/settings');
    }
    // accept a student class request
    public function acceptclass($id)
    {
        $this->order = $this->model("Order");
        $response = $this->order->acceptClass($id);
        if ($response) {
            header('location:' . URLROOT . '/tutor/class/' . $id);
        } else {
            include APPROOT . "/views/includes/errortoast.php";
        }
    }
    //ask for review
    public function askforreview($classid = array())
    {
        if (empty($classid)) {
            die(header('location:' . URLROOT . '/tutor/classes'));
        } else {
            $data = [
                'classid' => $classid,
                'tutid' => $_SESSION['roledata']['tuid']
            ];
            $order = $this->model("Order");
            $result = $order->askforreview($data);
            if ($result) {
                $_SESSION['toastmsg'] = [true, "Review request submitted successfully"];
                die(header('location:' . URLROOT . '/tutor/class/' . $classid));
            } else {
                $_SESSION['toastmsg'] = [false, "Review request submission failed"];
                die(header('location:' . URLROOT . '/tutor/class/' . $classid));
            }
        }
    }
    public function feedback($classid = array())
    {
        if (empty($classid)) {
            die(header('location:' . URLROOT . '/tutor/classes'));
        } else {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                //form process
                //Sanatize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'classid' => $classid,
                    'sturating' => trim($_POST['sturating']),
                    'streview' => trim($_POST['streview'])
                ];
                $order = $this->model("Order");
                $result = $order->tutorFeedback($data);
                if ($result) {
                    $_SESSION['toastmsg'] = [true, "Feedback submitted successfully"];
                    die(header('location:' . URLROOT . '/tutor/class/' . $classid));
                } else {
                    $_SESSION['toastmsg'] = [false, "Feedback submission failed"];
                    die(header('location:' . URLROOT . '/tutor/class/' . $classid));
                }
            } else {
?>
                <script>
                    history.go(-1)
                </script>
<?php
            }
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
            $result = $this->complaintsModel->complaintsendtutor($data);
            if ($result) {
                $_SESSION['toastmsg'] = [true, "Complaint submitted successfully"];
                die(header('location:' . URLROOT . '/tutor/complaint'));
            } else {
                $_SESSION['toastmsg'] = [false, "Complaint submission failed"];
                die(header('location:' . URLROOT . '/tutor/complaint'));
            }
        }

        $this->view('tutor/complaint', $data);
    }
    public function earnings()
    {
        $this->view('tutor/earnings');
    }


    public function tutorssr(){


        $this->ssr = $this->model("SSR");
        $data = $this->ssr->read();


        $this->view('tutor/tutorssr',$data);
    }

    public function tutorssraccept($optional = [])
    {

        $this->ssr = $this->model("SSR");
        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }
        // check if we do have a tutorid 
        // if(empty($optional)){
        //     die(header('location:' . URLROOT . '/tutor/tutorssr'));
        // }
        $data =
        [
            'title' => '',
            'description' => '',
            'price' => '',
            'revisions' => '',
            'duration' => '',
            'method' => '',
            'medium' => '',
            'subject' =>'',
            'lesson' => '',
            'tuid' => '',
            'stid' => '',

        ];
        $validate = true;

        if (isset($_POST['submitcustomoffer'])) {
            //form process
            //Sanatize post data
        
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'price' => intval(trim($_POST['price'])),
                'revisions' => trim($_POST['revisions']),
                'duration' => intval(trim($_POST['duration'])),
                'method' => trim($_POST['method']),
                'medium' => trim($_POST['medium']), 
                'subject' => trim($_POST['subject']),
                'lesson' => trim($_POST['lesson']),
                'tuid' => intval($_SESSION["roledata"]["tuid"]),
                'stid' => '2'
              
            ];

   

            if ($validate) {
              
                $results =  $this->ssr->createcustomoffer($data);
                print_r($results);

                if ($results) {
                    $_SESSION['toastmsg'] = [true, "Complaint submitted successfully"];
                    die(header('location:' . URLROOT . '/tutor/tutorssraccept'));
                } else {
                    $_SESSION['toastmsg'] = [false, "Complaint submission failed"];
                    die(header('location:' . URLROOT . '/tutor/tutorssraccept'));
                }
            }
        }
        $this->view('tutor/tutorssraccept', $data);
    }
}
