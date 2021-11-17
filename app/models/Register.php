<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Oct, 19, 2021
 * FILE TYPE: Model File
 */
class Register
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
    public function register($data)
    {


        $user = [
            'username' => $data['username'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => $data['password'],
            'startdate' => date("Y-m-d"),
            'phoneno' => $data['phoneno'],
            'city' => $data['city'],
            'role' => $data['role'],
            'photourl' => $data['photourl'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'subscription' => 1
        ];

        $this->api->call("POST", APIURL . 'registration/register', json_encode($user));


        if ($data['role'] === 'tu') {
            $this->api->call("POST", APIURL . 'registration/tutor', json_encode(array('username' => $user['username'])));
            return true;
        } elseif ($data['role'] === 'af') {
            $this->api->call("POST", APIURL . 'registration/affiliate', json_encode(array('username' => $user['username'])));
            return true;
        } elseif ($data['role'] === 'st') {
            $this->api->call("POST", APIURL . 'registration/student', json_encode(array('username' => $user['username'])));
            return true;
        } else {
            return false;
        }
    }
}
