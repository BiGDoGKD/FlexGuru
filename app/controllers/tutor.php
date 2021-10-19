<?php

class Tutor extends Controller
{
    public function __construct()
    {
    }




    public function tutorprofileview()
    {

        // $data = [

        //   'city' => ''


        // ];

        // $data['city'] = $this->Student->showinProfile($data);




        $this->view('tutor/tutorprofileview');
    }

    public function billinginformation()
    {
        $this->view('tutor/billinginformation');
    }

    public function tutororderprogress()
    {
        $this->view('tutor/tutororderprogress');
    }

    public function notifications()
    {
        $this->view('tutor/notifications');
    }

    public function security()
    {
        $this->view('tutor/security');
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
                    header('location:' . URLROOT . '/tutor/tutorprofileview');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('tutor/settings', $data);
    }
}


//
