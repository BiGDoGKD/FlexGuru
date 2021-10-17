<?php

class affiliate  extends Controller
{
  public function __construct()
  {
  }
  public function index()
  {
    $this->view('affiliate/affiliateprofileview');
  }

  public function complaint()
  {
    $this->view('affiliate/complaint');
  }

  public function billinginformation()
  {
    $this->view('affiliate/billinginformation');
  }

  public function notifications()
  {
    $this->view('affiliate/notifications');
  }

  public function security()
  {
    $this->view('affiliate/security');
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
      'firstnameError' =>'',
      'lastnameError' =>'',
      'phonenoError' =>''

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




    public function affiliateprofileview()
    {

        // $data = [

        //   'city' => ''


        // ];

        // $data['city'] = $this->Student->showinProfile($data);




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

    public function security()
    {
        $this->view('affiliate/security');
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
                    header('location:' . URLROOT . '/affiliate/affiliateprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('affiliate/settings', $data);
    }
}


//
