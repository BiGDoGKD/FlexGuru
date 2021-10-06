<?php
class Validate
{
    private $usernameValidation = "/^[a-zA-Z0-9]*$/";
    private $nameValidation = "/^[a-zA-Z]*$/i";
    private $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function email($email)
    {
        //Validate email
        if (empty($email)) {
            return 'Please enter email address.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Please enter the correct format.';
        } else {
            //Check if email exists.
            if ($this->db->findUserByEmail($email)) {
                return $email . ' is already taken.';
            } else {
                return null;
            }
        }
    }

    public function username($username)
    {
        if (empty($username)) {
            $res = "Please enter username.";
            return $res;
        } elseif (!preg_match($this->usernameValidation, $username)) {
            $res = "Username can only contain letter(a-z) and numbers (0-9).";
            return $res;
        } else {
            //Check if email exists.
            if ($this->db->findUserByUsername($username)) {
                return $username . ' is already taken.';
            } else {
                return null;
            }
            $res = null;
            return $res;
        }
    }

    public function name($name)
    {
        if (empty($name)) {
            $res = "Please enter firstname.";
            return $res;
        } elseif (!preg_match($this->nameValidation, $name)) {
            $res = "Name can only contain letter(a-z or A-Z).";
            return $res;
        } else {
            $res = null;
            return $res;
        }
    }





public function mobile($mobile)
    {
        if (empty($mobile)) {
            $res = "Please enter mobile.";
         }
          elseif (!preg_match('/^0[0-9]{9}+$/',$mobile)) {
            $res = "Should be 10-digit format starting with 0 Ex. 0771234567";
   
        }
        

        else {
            //Check if mobile exists.
            if ($this->db->findUserByMobile($mobile)) {
                $res = $mobile . ' is already taken.';
            } else {
                $res = null;
                
            }
         
        }
        return $res;
       
    }



  
    
   

}