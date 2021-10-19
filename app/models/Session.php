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
class Session
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function create($username, $password)
    {
        $this->db->query('SELECT * FROM `api`.`user` WHERE `user`.`username`=:username and `password`=:password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            $userdata = $this->db->getArray();
            $data = $userdata[0];
            switch ($data['role']) {
                case 'st':
                    header('location:' . URLROOT . '/student');
                    break;
                case 'tu':
                    header('location:' . URLROOT . '/tutor');
                    break;
                case 'af':
                    header('location:' . URLROOT . '/affiliatemarketer');
                    break;
                default:
                    header('location:' . URLROOT . '/forbidden');
            }
        } else {
            return false;
        }
    }
}
