<?php
class Validate
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function email($email)
    {
        //Validate email
        if (empty($email)) {
            $res = 'Please enter email address.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $res = 'Please enter the correct format.';
        } else {
            //Check if email exists.
            if ($this->db->findUserByEmail($email)) {
                $res = $email . ' is already taken.';
            } else {
                $res = null;
            }
        }
        return $res;
    }

    public function username($username)
    {
        if (empty($username)) {
            $res = "Please enter username.";
        } else if (!preg_match("/^[A-Za-z0-9]{5,10}$/i", $username)) {
            $res = "Username must between (5-10) characters";
        } else {
            //Check if email exists.
            if ($this->db->findUserByUsername($username)) {
                $res = $username . ' is already taken.';
            } else {
                $res = null;
            }
        }
        return $res;
    }

    public function name($name)
    {
        if (empty($name)) {
            $res = "Please enter firstname.";
        } elseif (!preg_match("/^[a-zA-Z]*$/i", $name)) {
            $res = "Can only contain letters(a-z or A-Z).";
        } else {
            $res = null;
        }
        return $res;
    }

    public function mobile($mobile)
    {
        if (empty($mobile)) {
            $res = "Please enter mobile.";
        } elseif (!preg_match('/^[0-9]{10}+$/', $mobile)) {
            $res = "Should be 10-digit format. Ex. 0771234567";
        } else {
            //Check if mobile exists.
            if ($this->db->findUserByMobile($mobile)) {
                $res = $mobile . ' is already taken.';
            } else {
                $res = null;
            }
        }
        return $res;
    }

    function password($password, $confpassword)
    {
        if (empty($password or $confpassword)) {
            $res = "Please enter a password";
        } else if ($password != $confpassword) {
            $res = "Password not matching";
        } else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
            $res = "Password should contain (A-Z,a-z,0-9) characters with Special Characters";
        } else {
            $res = null;
        }
        return $res;
    }

    function spdob($dob)
    {
        $date1 = date_create_from_format('Y-m-d', $dob);
        $date2 = date_create_from_format('Y-m-d', date('Y-m-d'));
        $diff = (array) date_diff($date1, $date2);
        $minAge = 18;
        if (empty($dob)) {
            $res = "Please select your date of birth.";
        } else if ($diff['y'] < $minAge) {
            $res = "You need to be higher than 18 years.";
        } else if (strtotime($dob) > strtotime(date('Y-m-d'))) {
            $res = "Please enter a valid birthday!";
        } else {
            $res = null;
        }
        return $res;
    }

    function dob($dob)
    {
        $date1 = date_create_from_format('Y-m-d', $dob);
        $date2 = date_create_from_format('Y-m-d', date('Y-m-d'));
        $diff = (array) date_diff($date1, $date2);
        $minAge = 13;
        if (empty($dob)) {
            $res = "Please select your date of birth.";
        } else if ($diff['y'] < $minAge) {
            $res = "You need to be higher than 13 years.";
        } else if (strtotime($dob) > strtotime(date('Y-m-d'))) {
            $res = "Please enter a valid birthday!";
        } else {
            $res = null;
        }
        return $res;
    }
}
