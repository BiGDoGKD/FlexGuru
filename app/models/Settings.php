<?php

/**
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at.
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS:
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Model File
 */

class Settings
{
    private $db;

    public function __construct()
    {
        $this->api = new API;
        $this->db = new Database;
    }

    public function passwordchangetutor($passwordchange){
        $response = $this->api->usercall('POST', APIURL . 'Tutor/passwordchange', json_encode($passwordchange));
        print_r($response);
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
        
    }

    public function passwordchangestudent($passwordchange)
    {
        $response = $this->api->usercall('POST', APIURL . 'Student/passwordchange', json_encode($passwordchange));
        print_r($response);
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
    }

    public function passwordchangeaffiliate($passwordchange)
    {
        $response = $this->api->usercall('POST', APIURL . 'Affiliate/passwordchange', json_encode($passwordchange));
        print_r($response);
        $status = json_decode($response)->response->status;
        if ($status == 200) {
            return true;
        } elseif ($status == 302) {
            include APPROOT . "/views/includes/modals/modal-relog.php";
        } else {
            return false;
        }
    }

}

    

