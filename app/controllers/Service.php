<?php

class Service extends Controller
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

    public function checkout()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'gigid' => $_POST['gigid'],
                'tuid' => $_POST['tuid'],
                'title' => $_POST['title'],
                'price' => $_POST['price'],
                'photourl' => $_POST['photourl'],
                'image' => $_POST['image'],
                'medium' => $_POST['medium'],
                'rating' => $_POST['rating'],
                'jobs' => $_POST['jobs'],
                'level' => $_POST['level'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'verified' => $_POST['verified'],
                'first_name' => $_SESSION['userdata']['firstname'],
                'last_name' => $_SESSION['userdata']['lastname'],
                'email' => $_SESSION['userdata']['email'],
                'phone' => $_SESSION['userdata']['phoneno'],
                'city' => $_SESSION['userdata']['city'],
            ];
            $this->view('marketplace/pages/checkout', $data);
        }
    }
}
