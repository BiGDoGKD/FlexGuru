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

        $this->db->query('INSERT INTO `api`.`user` (`username`, `firstname`, `lastname`, `email`, `password`, `startdate`, `phoneno`, `city`, `role`, `photourl`, `dob`, `subscription`) VALUES (:username, :firstname, :lastname, :email, :password, :startdate, :phoneno, :city, :role, :photourl, :dob, :subscription)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':startdate', date("Y-m-d"));
        $this->db->bind(':phoneno', $data['phoneno']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':photourl', $data['photourl']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':subscription', $data['sub']);

        if ($data['role'] === 'tu') {

            $this->db->execute();
            $this->db->query('INSERT INTO `api`.`tutor` (`userid`) SELECT `userid` FROM `api`.`user` WHERE username = :username');
            $this->db->bind(':username', $data['username']);

            //Execute function for tutor table
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } elseif ($data['role'] === 'af') {

            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } elseif ($data['role'] === 'st') {

            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } else {

            return false;
        }
    }
}
