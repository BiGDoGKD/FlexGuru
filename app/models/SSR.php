<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Oct, 12, 2021
 * FILE TYPE: Model File
 */
class SSR
{
    private $db;
    private $api;

    public function __construct()
    {
        $this->db = new Database;
        $this->api = new API;
    }

    public function create($data)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'SSR/create', json_encode($data))) {
            
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

    public function read()
    {
        if ($response = $this->api->usercall('GET', APIURL . 'SSR/read', null)) {
      
            $status = json_decode($response)->response->result;
            return $status;
            // if ($status == 200) {
            //     return true;
            // } elseif ($status == 302) {
            //     include APPROOT . "/views/includes/modals/modal-relog.php";
            // } else {
            //     return false;
            // }
        }
    }
}
