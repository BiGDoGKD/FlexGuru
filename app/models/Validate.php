<?php
class Validate
{
    private $api;

    public function __construct()
    {
        $this->api = new API;
    }

    public function email($email)
    {
        //REQUEST FORMAT
        $url = APIURL . 'email.php';
        $data = [
            'email' => $email
        ];
        //Validate email
        if (empty($email)) {
            $res = 'Please enter email address.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $res = 'Please enter the correct format.';
        } else {
            //Check if email exists.
            $get_data = $this->api->call('POST', $url, json_encode($data));
            $response = json_decode($get_data, true);
            if ($response['status']) {
                $res = $response['message'];
            } else {
                $res = null;
            }
        }
        return $res;
    }

    public function validate($email, $username, $phoneno)
    {

        $data = [
            'email' => $email,
            'username' => $username,
            'phoneno' => $phoneno,
            'emailError' => '',
            'usernameError' => '',
            'phonenoError' => ''
        ];
        //Validate email
        $email_status = (array)json_decode($this->api->call('POST', APIURL . 'validation/email', json_encode(['email' => $email])));
        $username_status = (array)json_decode($this->api->call('POST', APIURL . 'validation/username', json_encode(['username' => $username])));
        $phoneno_status = (array)json_decode($this->api->call('POST', APIURL . 'validation/mobile', json_encode(['phoneno' => $phoneno])));

        if (!$email_status['status']) {
            $data['emailError'] = 'Email already exists.';
        }

        if (!$username_status['status']) {
            $data['usernameError'] = 'Username already exists.';
        }

        if (!$phoneno_status['status']) {
            $data['phonenoError'] = 'Phone number already exists.';
        }

        return $data;
    }

    public function username($username)
    {
        if (empty($username)) {
            $res = "Please enter username.";
            return $res;
        } else if (!preg_match("/^[A-Za-z0-9]{5,10}$/i", $username)) {
            $res = "Username must between (5-10) characters";
            return $res;
        }
    }

    public function mobile($mobile)
    {
        if (empty($mobile)) {
            $res = "Please enter mobile.";
            return $res;
        } else if (!preg_match('/^0[0-9]{9}+$/', $mobile)) {
            $res = "Should be 10-digit format starting with 0 Ex. 0771234567";
            return $res;
        }
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

    function password($password, $confpassword)
    {
        if (empty($password or $confpassword)) {
            $res = "Please enter a password";
        } else if ($password != $confpassword) {
            $res = "Password not matching";
        } else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,30}$/', $password)) {
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
