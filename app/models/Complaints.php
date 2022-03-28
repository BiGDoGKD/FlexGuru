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

class Complaints
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->api = new API;
    }

    public function insert($data)
    {

        $this->db->query("INSERT INTO complaints (`username` , `email` , `complainttype` , `complaint`) VALUES (:username,:email,:type,:complaint);");
        
        //Bind values   

        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':complaint', $data['complaint']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function complaintsendtutor($data){
            $response = $this->api->usercall('POST', APIURL . 'tutor/addcomplaint', json_encode($data));
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

    public function complaintsendstudent($data)
    {
        $response = $this->api->usercall('POST', APIURL . 'student/addcomplaint', json_encode($data));
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


    public function complaintsendaffiliate($data)
    {
        $response = $this->api->usercall('POST', APIURL . 'Affiliate/addcomplaint', json_encode($data));
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
 

