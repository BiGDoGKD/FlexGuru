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
class Authlogin
{
    private $db;
    private $session;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function username($username)
    {
        if ($this->db->findUserByUsername($username)) {
            return false;
        } else {
            return true;
        }
    }

    public function login($username, $password)
    {
        $this->db->query('SELECT * FROM `api`.`user` WHERE `user`.`username`=:username and `password`=:password');
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
