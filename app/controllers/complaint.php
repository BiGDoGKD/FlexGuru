<?php

class Complaint extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    $this->complaintsModel = $this->model("Complaints");
    $data = [
      'username' => '',
      'email' => '',
      'type' => '',
      'complaint' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
      $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
      $data = [
        'username' => trim($_GET['username']),
        'email' => trim($_GET['email']),
        'type' => trim($_GET['type']),
        'complaint' => trim($_GET['complaint'])
      ];

      if ($this->complaintsModel->insert($data)) {
        //Ridirect to the main
        header('location:' . URLROOT . '/affiliate/affiliateprofileview');
      } else {
        die('Something went wrong.');
      }
    }

    $this->view('includes/complaint', $data);
  }
}
