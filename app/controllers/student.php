<?php

class Student extends Controller
{
  public function __construct()
  {
  }




  public function studentprofileview()
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
    $this->view('student/security');
  }


  public function settings()
  {

    $this->settingsModel = $this->model("Settings");


    $data = [
      'firstname' => '',
      'lastname' => '',
      'email' => '',
      'city' => ''
    ];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $data = [
        'firstname' => trim($_POST['firstname']),
        'lastname' => trim($_POST['lastname']),
        'email' => trim($_POST['email']),
        'city' => trim($_POST['city'])
      ];
      if ($this->settingsModel->update($data)) {
        //Ridirect to the main
        header('location:' . URLROOT . '/student/studentprofileview');
      } else {
        die('Something went wrong.');
      }
    }
    $this->view('student/settings', $data);
  }
}


//
//         //validation begin
//         $this->val = $this->model("Validate");
//         $this->mail = $this->model("Mailer");
//         $data["firstnameError"] = $this->val->name($data['firstname']);
//         $data["lastnameError"] = $this->val->name($data['lastname']);
//         $data["usernameError"] = $this->val->username($data['username']);
//         $data["emailError"] = $this->val->email($data['email']);
//         $data["phonenoError"] = $this->val->mobile($data['phoneno']);
//
//         $data["dobError"] = $this->val->dob($data['dob']);
//         $data["confpasswordError"] = $this->val->password($data['password'], $data['confpassword']);
//
//         if ($data["confpasswordError"] == null) {
//             // if no errors
//             if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confpasswordError']) && empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['phonenoError']) && empty($data['dobError'])) {
//                 $data['password'] = hash('sha256', $data['password']);
//                 $data['confpassword'] = hash('sha256', $data['confpassword']);
//                 $otpcode = rand(000000, 999999);
//                 $this->mail->vmail($otpcode, $data['email']);
//                 setcookie('regstudent', json_encode($data), time() + 360);
//                 setcookie('otpem', hash('sha256', $otpcode), time() + 360);
//                 header("location:" . URLROOT . "/registration/verification");
//             }
//         }
//     }
// }
