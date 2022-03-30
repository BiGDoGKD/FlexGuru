<?php

class Gigs extends Controller
{
    private $gig;
    private $data = [
        'title' => '',
        'description' => '',
        'price' => '',
        'revisions' => '',
        'duration' => '',
        'method' => '',
        'medium' => '',
        'subject' => '',
        'lesson' => '',
        'image' => '',
        'tutorid' => '',
        'imageError' => '',
    ];

    public function __construct()
    {
        error_reporting(E_ERROR | E_PARSE);
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

    public function index()
    {
    }

    public function mygigs()
    {
        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }




        $this->gig = $this->model('Gig');
        $data = [
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        $result = $this->gig->getGigsByTutor($data);
        if (!isset($result['result']->message)) {
            $this->view('tutor/mygigs', $result['result']);
        } else {
            $this->view('tutor/mygigs', false);
        }
    }

    public function delete($gigid)
    {
        $this->gig = $this->model('Gig');
        $data = [
            'gigid' => $gigid,
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        $result = $this->gig->deleteGig($data);
        if ($result) {
            $_SESSION['toastmsg'] = [true, "Gig Deactivated Successfully!"];
            die(header('location:' . URLROOT . '/gigs/mygigs'));
        } else {
            $_SESSION['toastmsg'] = [false, "Gig Deactivated Unsuccessful!"];
            die(header('location:' . URLROOT . '/gigs/mygigs'));
        }
    }

    public function settings($gigid)
    {
        $validate = true;

        $this->gig = $this->model('Gig');
        $request = [
            'gigid' => $gigid,
            'tuid' => $_SESSION['roledata']['tuid'],
        ];

        $result = $this->gig->getGigSettings($request);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if ($_FILES['file']['name'] == null) {
                $data = [
                    'gigid' => $gigid,
                    'title' => trim($_POST['title']),
                    'description' => trim($_POST['description']),
                    'price' => intval(trim($_POST['price'])),
                    'revisions' => trim($_POST['revisions']),
                    'duration' => intval(trim($_POST['duration'])),
                    'method' => trim($_POST['method']),
                    'medium' => trim($_POST['medium']),
                    'subject' => trim($_POST['subject']),
                    'lesson' => trim($_POST['lesson']),
                    'image' => $result['image'],
                    'tutorid' => intval($_SESSION["roledata"]["tuid"]),
                    'imageError' => '',
                ];
            } else {
                $data = [
                    'gigid' => $gigid,
                    'title' => trim($_POST['title']),
                    'description' => trim($_POST['description']),
                    'price' => intval(trim($_POST['price'])),
                    'revisions' => trim($_POST['revisions']),
                    'duration' => intval(trim($_POST['duration'])),
                    'method' => trim($_POST['method']),
                    'medium' => trim($_POST['medium']),
                    'subject' => trim($_POST['subject']),
                    'lesson' => trim($_POST['lesson']),
                    'image' => $_FILES['file']['name'],
                    'tutorid' => intval($_SESSION["roledata"]["tuid"]),
                    'imageError' => '',
                ];

                $file = $_FILES['file'];
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];

                $fileExt = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileExt));

                $allowed = array('jpg', 'jpeg', 'png', 'PNG', 'JPG', 'JPEG');

                //if no errors
                if (true) {
                    if (in_array($fileActualExt, $allowed)) {
                        if ($fileError === 0) {
                            if ($fileSize < 1000000) {
                                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                                $data['image'] = $fileNameNew;
                                $fileDestination = APPROOT . '/../public/uploads/services/' . $fileNameNew;
                                move_uploaded_file($fileTmpName, $fileDestination);
                            } else {
                                $validate = false;
                                $data['imageError'] = "Your file is too big";
                            }
                        } else {
                            $validate = false;
                            $data['imageError'] = "There was an error uploading your file";
                        }
                    } else {
                        $validate = false;
                        $data['imageError'] = "You cannot upload files of this type";
                    }
                } else {
                    $validate = false;
                    $data['imageError'] = "You need to upload an image";
                }
            }
            if ($validate) {
                $result = $this->gig->update($data);
                if ($result) {
                    $_SESSION['toastmsg'] = [true, "Service Updated Successfully!"];
                    die(header('location:' . URLROOT . '/gigs/mygigs'));
                } else {
                    $_SESSION['toastmsg'] = [false, "Service Update Unsuccessfull!"];
                    die(header('location:' . URLROOT . '/gigs/mygigs'));
                }
            } else {
                $_SESSION['toastmsg'] = [false, $data['imageError']];
                die(header('location:' . URLROOT . '/gigs/mygigs'));
            }
        } else {
            if ($result) {
                $this->view('tutor/gig/settings', $result);
            } else {
                $this->view('tutor/gig/settings', false);
            }
        }
    }

    public function activate($gigid)
    {
        $this->gig = $this->model('Gig');
        $data = [
            'gigid' => $gigid,
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        $result = $this->gig->activateGig($data);
        if ($result) {
            $_SESSION['toastmsg'] = [true, "Activation Request Set Successfully!"];
            die(header('location:' . URLROOT . '/gigs/mygigs'));
        } else {
            $_SESSION['toastmsg'] = [false, "Activation Request Set Unsuccessfull!"];
            die(header('location:' . URLROOT . '/gigs/mygigs'));
        }
    }

    public function publish()
    {
        $data = $this->data;
        $validate = true;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
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
                'image' => $_FILES['file'],
                'tutorid' => intval($_SESSION["roledata"]["tuid"]),
                'imageError' => '',
            ];

            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'PNG', 'JPG', 'JPEG');

            //if no errors
            if (true) {
                if (in_array($fileActualExt, $allowed)) {
                    if ($fileError === 0) {
                        if ($fileSize < 1000000) {
                            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                            $fileDestination = APPROOT . '/../public/uploads/services/' . $fileNameNew;
                            move_uploaded_file($fileTmpName, $fileDestination);
                            $data['image'] = $fileNameNew;
                        } else {
                            $validate = false;
                            $data['imageError'] = "Your file is too big";
                        }
                    } else {
                        $validate = false;
                        $data['imageError'] = "There was an error uploading your file";
                    }
                } else {
                    $validate = false;
                    $data['imageError'] = "You cannot upload files of this type";
                }
            } else {
                $validate = false;
                $data['imageError'] = "You need to upload an image";
            }

            if ($validate) {
                $this->gig = $this->model('Gig');
                $this->gig->create($data);
            }
        }

        $this->view('tutor/creategig', $data);
    }
}
