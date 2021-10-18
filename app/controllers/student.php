<?php

class Student extends Controller
{
  public function __construct()
  {
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

  public function security()
  {
    $this->val = $this->model("Validate");
    $this->resetPModel = $this->model("resetpassword");


    $data = [
      'getPassword'=>'',
      'password'=>'',
      'confpassword'=>'',
      'getPasswordError'=>'',
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

      // --------------------------------------
      // add the current password error message
      // --------------------------------------
      $data["passwordError"] = $this->val->password($data['password']);
      $data["confpasswordError"] = $this->val->password($data['confpassword']);


      if (empty($data["getPasswordError"] && $data['passwordError'] && $data['confpasswordError'])) {

          //Ridirect to the main
  
      
    }





    $this->view('student/security');
  }
  
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
          header('location:' . URLROOT . '/student/studentprofileview');
        } else {
          die('Something went wrong.');
        }
      }
    }
    $this->view('student/settings', $data);
  }
}


//
