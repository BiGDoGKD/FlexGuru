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
    $this->view('student/class');
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
    $this->complaintsModel = $this->model("Complaints");
    $data = [
      'username' => '',
      'email' => '',
      'type' => '',
      'complaint' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'username' => trim($_POST['username']),
        'email' => trim($_POST['email']),
        'type' => trim($_POST['type']),
        'complaint' => trim($_POST['complaint'])
      ];

      if ($this->complaintsModel->insert($data)) {

        header('location:' . URLROOT . '/student/studentprofileview');
      } else {
        die('Something went wrong.');
      }
    }

    $this->view('student/complaint', $data);
  }
}
//
