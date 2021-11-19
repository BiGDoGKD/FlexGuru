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

  // -------------------------------------------------
  // security page
  // -------------------------------------------------

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
          header('location:' . URLROOT . '/student/studentprofileview');
        } else {
          die('Something went wrong.');
        }
      }
    }
    $this->view('student/security', $data);
  }


  // -------------------------------------------------
  // settings page
  // -------------------------------------------------

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
          header('location:' . URLROOT . '/student/studentprofileview');
        } else {
          die('Something went wrong.');
        }
      }
    }
    $this->view('student/settings', $data);
  }


  //requests

  public function requests()
  {
    $this->ssr = $this->model("SSR");
    $resultArray = $this->ssr->getRequests();
    $this->view('student/pages/requests', $resultArray);
  }
  public function responses()
  {
    $this->view('student/pages/responses');
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
