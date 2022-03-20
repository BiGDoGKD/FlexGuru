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
class Affiliate
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
        $this->db->query('INSERT INTO `api`.`user` (`username`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `city`, `role`, `photourl`) VALUES (:username, :firstname, :lastname, :email, :password, :phoneno, :city, :role, :photourl)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':phoneno', $data['phoneno']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':photourl', $data['photourl']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
