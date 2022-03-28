<?php

class Student extends Controller
{
  public function __construct()
  {
    $api = new API;
    $session = $this->model("Session");
    session_start();
    if (isset($_SESSION['STUACCESS'])) {
      if ($api->checktoken($_COOKIE['ref'])) {
        //do nothing
        $session->destroy();
        die(header('location:' . URLROOT . '/login'));
      }
    } elseif (isset($_SESSION['TUTACCESS'])) {
      die(header('location:' . URLROOT . '/tutor'));
    } elseif (isset($_SESSION['AFFACCESS'])) {
      die(header('location:' . URLROOT . '/affiliate'));
    } else {
      die(header('location:' . URLROOT . '/login'));
    }
  }


  // get all classes of a student

  public function classes()
  {
    $result = $this->model("Order")->studentClasses($_SESSION['roledata']['stid']);
    if ($result) {
      $this->view('student/classlist', $result['result']);
    } else {
      $this->view('student/classlist', false);
    }
  }

  public function feedback($classid = array())
  {
    if (empty($classid)) {
      die(header('location:' . URLROOT . '/student/classes'));
    } else {
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //form process
        //Sanatize post data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
          'classid' => $classid,
          'turating' => trim($_POST['turating']),
          'tureview' => trim($_POST['tureview'])
        ];
        $order = $this->model("Order");
        $result = $order->studentFeedback($data);
        if ($result) {
          $_SESSION['toastmsg'] = [true, "Feedback submitted successfully"];
          die(header('location:' . URLROOT . '/student/class/' . $classid));
        } else {
          $_SESSION['toastmsg'] = [false, "Feedback submission failed"];
          die(header('location:' . URLROOT . '/student/class/' . $classid));
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

  public function revision($classid = array())
  {
    if (empty($classid)) {
      die(header('location:' . URLROOT . '/student/classes'));
    } else {
      $data = [
        'classid' => $classid,
        'stid' => $_SESSION['roledata']['stid']
      ];
      $order = $this->model("Order");
      $result = $order->askRevision($data);
      if ($result) {
        $_SESSION['toastmsg'] = [true, "Revision request submitted successfully"];
        die(header('location:' . URLROOT . '/student/class/' . $classid));
      } else {
        $_SESSION['toastmsg'] = [false, "Revision request submission failed"];
        die(header('location:' . URLROOT . '/student/class/' . $classid));
      }
    }
  }





  public function index()
  {

    $this->view('student/studentprofileview');
  }

  public function billinginformation()
  {
    $this->view('student/billinginformation');
  }

  public function notifications()
  {
    $this->view('student/notifications');
  }

  // special service request 


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
      $data = $order->getClass($array);
      if (!$data) {
        die(header('location:' . URLROOT . '/student'));
      } else {
        $order = (array)$data["result"];
        $this->view('student/class', $order);
      }
    } else {
      die(header('location:' . URLROOT . '/student'));
    }
  }

  public function order()
  {
    $orderid = $_GET['order_id'];
    $orderarray = (array)json_decode($_COOKIE['order_data']);
    if ($orderarray['orderid'] === $orderid) {
      $orderid = $this->model('Order')->create($orderarray);
      if (isset($orderid)) {
        die(header('location:' . URLROOT . '/student/class/' . $orderid));
      } else {
        $this->index();
      }
    } else {
      die(header('location:' . URLROOT . '/student'));
    }
  }


  public function specialrequest()
  {
    $data = [
      'title' => '',
      'description' => '',
      'subject' => '',
      'category' => '',
      'days' => '',
      'budget' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $this->ssr = $this->model("SSR");
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'subject' => $_POST['subject'],
        'category' => $_POST['category'],
        'days' => $_POST['days'],
        'budget' => $_POST['budget']
      ];

      if ($this->ssr->request($data)) {
        header('location:' . URLROOT . '/student/requests');
      }
    }

    $this->view('student/pages/specialservicerequest', $data);
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

        $result = $this->settingsModel->passwordchangestudent($passwordchange);
        if ($result) {
          $_SESSION['toastmsg'] = [true, "Password change successful !"];
          die(header('location:' . URLROOT . '/student/settings'));
        } else {
          $_SESSION['toastmsg'] = [false, "Password change unsuccessful !"];
          die(header('location:' . URLROOT . '/student/settings'));
        }
      } else {
        $_SESSION['toastmsg'] = [false, " Password Mismatch !"];
        die(header('location:' . URLROOT . '/student/settings'));
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
      $result = $this->settingsModel->changeemailstudent($dataemail);
      if ($result) {
        $_SESSION['toastmsg'] = [true, " Email Changed Successfully  !"];
        die(header('location:' . URLROOT . '/student/settings'));
      } else {
        $_SESSION['toastmsg'] = [false, " Email change unsuccessful !"];
        die(header('location:' . URLROOT . '/student/settings'));
      }
    }
    $datacontactnumber = [
      'contactnumber' => ''
    ];
    if (isset($_POST['button_contact'])) {
      $datacontactnumber = [
        'contactnumber' => $_POST['contactnumber']
      ];
      $result = $this->settingsModel->changecontactnumberstudent($datacontactnumber);
      if ($result) {
        $_SESSION['toastmsg'] = [true, " Contact Number change successful !"];
        die(header('location:' . URLROOT . '/student/settings'));
      } else {
        $_SESSION['toastmsg'] = [false, " Contact Number change unsuccessful !"];
        die(header('location:' . URLROOT . '/student/settings'));
      }
    }
    $deleteaccount = [
      'deletereason' => ''
    ];
    if (isset($_POST['button_deleteaccount'])) {
      $deleteaccount = [
        'deletereason' => $_POST['deletereason']
      ];
      $result = $this->settingsModel->deleteaccountstudent($deleteaccount);
      if ($result) {
        $_SESSION['toastmsg'] = [true, " Delete Request Submitted!"];
        die(header('location:' . URLROOT . '/student/settings'));
      } else {
        $_SESSION['toastmsg'] = [false, " Delete Request Unsuccessful !"];

        die(header('location:' . URLROOT . '/student/settings'));
      }
    }

    $this->view('student/settings');
  }







  //requests

  public function requests()
  {
    // $this->ssr = $this->model("SSR");
    // $resultArray = $this->ssr->getRequests();
    $this->view('student/pages/requests');
  }
  public function responses()
  {
    $this->view('student/pages/responses');
  }
  public function tutordetailspopup()
  {
    $this->view('student/pages/tutordetailspopup');
  }
  public function purchasehistory()
  {
    $this->view('student/purchasehistory');
  }
  public function responsesdetailpopup()
  {
    $this->view('student/pages/responsesdetailpopup');
  }
  public function gigreview()
  {
    $this->view('student/gigreview');
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
      $result = $this->complaintsModel->complaintsendstudent($data);
      if ($result) {
        $_SESSION['toastmsg'] = [true, "Complaint submitted successfully"];
        die(header('location:' . URLROOT . '/student/complaint'));
      } else {
        $_SESSION['toastmsg'] = [false, "Complaint submission failed"];
        die(header('location:' . URLROOT . '/student/complaint'));
      }
    }

    $this->view('student/complaint', $data);
  }

}
//
