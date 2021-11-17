<?php
class Register
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        //Create query
        $this->db->query('INSERT INTO `api`.`user` (`username`, `firstname`, `lastname`, `email`, `password`, `startdate`, `phoneno`, `city`, `role`, `photourl`, `dob`, `subscription`, `gender`) VALUES (:username, :firstname, :lastname, :email, :password, :startdate, :phoneno, :city, :role, :photourl, :dob, :subscription, :gender)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':startdate', $data['startdate']);
        $this->db->bind(':phoneno', $data['phoneno']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':photourl', $data['photourl']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':subscription', $data['subscription']);
        $this->db->bind(':gender', $data['gender']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function student($username)
    {
        //Create query
        $this->db->query('INSERT INTO `api`.`student` (`userid`)  VALUES((SELECT `userid` FROM `api`.`user` WHERE username = :username))');

        //Bind data
        $this->db->bind(':username', $username);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function affiliate($username)
    {
        //Create query
        $this->db->query('INSERT INTO `api`.`affiliatemarketer` (`userid`, `affiliatelink`)  VALUES((SELECT `userid` FROM `api`.`user` WHERE username = :username),:affiliatelink)');

        //Bind data
        $this->db->bind(':username', $username);
        $this->db->bind(':affiliatelink', uniqid('', true));

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function tutor($username)
    {
        //Create query
        $this->db->query('INSERT INTO `api`.`tutor` (`userid`) SELECT `userid` FROM `api`.`user` WHERE username = :username');

        //Bind data
        $this->db->bind(':username', $username);

        //Execute function 
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
