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
class Administrator
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function register($admin)
    {
        $this->db->query('INSERT INTO `api`.`user` (`username`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `city`, `role`, `photourl`) VALUES (:username, :firstname, :lastname, :email, :password, :phoneno, :city, :role, :photourl)');

        //Bind values
        // $this->db->bind(':username', $datatutor['username']);
        // $this->db->bind(':firstname', $datatutor['firstname']);
        // $this->db->bind(':lastname', $datatutor['lastname']);
        // $this->db->bind(':email', $datatutor['email']);
        // $this->db->bind(':password', $datatutor['password']);
        // $this->db->bind(':phoneno', $datatutor['phoneno']);
        // $this->db->bind(':city', $datatutor['city']);
        // $this->db->bind(':role', $datatutor['role']);
        // $this->db->bind(':photourl', $datatutor['photourl']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
