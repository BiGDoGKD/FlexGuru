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


    public function request($data)
    {
        $this->api->usercall("POST", APIURL . 'student/addssr', json_encode($data));
    }



    public function getRequests()
    {      
            
            
    
        $data =  $this->api->usercall("GET", APIURL . 'student/getSpecialRequests', []);
        return json_decode($data);
    }
}
