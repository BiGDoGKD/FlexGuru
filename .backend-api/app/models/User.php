<?php
class User
{

    private $db;
    private $table = 'user';

    //user properties
    public $userid;
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $phoneno;
    public $city;
    public $role;
    public $photourl;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function read()
    {
        //Create query
        $this->db->query('SELECT * from ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUser($userid)
    {
        //Create query 
        $this->db->query('SELECT `username`,`firstname`,`lastname`,`email`,`startdate`,`phoneno`,`city`,`role`,`photourl`,`dob`,`subscription`,`gender` from ' . $this->table);
        //Bind data
        //Return result set
        return $this->db->resultSet();
    }
}
