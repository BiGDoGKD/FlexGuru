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
        $this->db = new Database;
    }

    // public function resetpassword($data){
    //     $this->db->query("UPDATE `api`.`user` SET password=:password where username = :username");
    //     $this->db->bind(':password', $data['newPassword']);
    //     $this->db->bind(':username', $_SESSION['userdata']['username']);
    //     //Execute function
    //     if ($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function passwordexist($password)
    {
        $this->db->query("SELECT * FROM `api`.`user` where username = :username and  password=:password ");
        $this->db->bind(':username', $_SESSION['userdata']['username']);
        $this->db->bind(':password',$password);
        //Execute function
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // public function resetgeneraldetails($generaldetails){
    //     $this->db->query("UPDATE `api`.`user` SET  phoneno = :phoneno , email=:email where username = :username");
       
    //     $this->db->bind(':phoneno', $generaldetails['phoneno']);
    //     $this->db->bind(':city', $generaldetails['email']);

    //     //Execute function
    //     if ($this->db->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


    public function resetpassword($data){ 
            if ($response = $this->api->call('POST', APIURL . 'tutor/passwordchange', json_encode($data))) {
                $responseArray = (array)json_decode($response);
                $result = (array)$responseArray["response"];
                return $result;
            }
        }
        


    public function resetgeneraldetails($generaldetails){
            if ($response = $this->api->call('POST', APIURL . 'tutor/generaldetailschange', json_encode($generaldetails))) {
                $responseArray = (array)json_decode($response);
                $result = (array)$responseArray["response"];
                return $result;
            }
        }
    
      public function accountdelete($userid){
            if ($response = $this->api->call('POST', APIURL . 'tutor/accountdelete', json_encode($userid))) {
                $responseArray = (array)json_decode($response);
                $result = (array)$responseArray["response"];
                return $result;
            }
        }
    





    }
