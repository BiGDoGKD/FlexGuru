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

class Settings
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

        // when considering the update model we can see that if the query is not only id also consider the user type

    public function update($data)
    {
        // $data["password"] = hash("sha256", $data["password"]);



        $this->db->query("UPDATE `api`.`user` SET firstname=:firstname , lastname=:lastname, phoneno = :phoneno , city=:city where userid = 1");

        //Bind values

        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':phoneno', $data['phoneno']);
        $this->db->bind(':city', $data['city']);



        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // password reset related database functionality

    public function resetpassword($data){
        $this->db->query("UPDATE `api`.`user` SET password=:password where userid = 1");
        $this->db->bind(':password', $data['password']);
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    
    }











}
