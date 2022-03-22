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

class Gig
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->api = new API;
    }

    /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        */

    public function create($gigdata)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'gig/create', json_encode($gigdata))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                include APPROOT . "/views/includes/successtoast.php";
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                include APPROOT . "/views/includes/errortoast.php";
            }
        }
    }

    public function deleteGig($gigdata)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'gig/delete', json_encode($gigdata))) {
            $status = json_decode($response)->response->status;
            $msg = json_decode($response)->response->result->message;
            $_SESSION['toastmsg'] = $msg;
            return $status;
        }
    }

    public function getAllGigs()
    {
        if ($response = $this->api->call('GET', APIURL . 'visitor/services', null)) {
            $responseArray = (array)json_decode($response);
            $result = (array)$responseArray["response"];
            return $result;
        }
    }

    public function getGigsByTutor($data)
    {
        if ($response = $this->api->call('POST', APIURL . 'visitor/servicesbytutor', json_encode($data))) {
            $responseArray = (array)json_decode($response);
            $result = (array)$responseArray["response"];
            return $result;
        }
    }
}
