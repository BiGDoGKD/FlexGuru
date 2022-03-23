<?php

class API
{
    public function __construct()
    {
    }
    private $username = APIUSER;
    private $password = APIPASS;

    public function call($method, $url, $data)
    {
        $curl = curl_init();
        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
        ));
        curl_setopt($curl, CURLOPT_USERPWD, $this->username . ":" . $this->password);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //Check for errors.
        if (curl_errno($curl)) {
            //If an error occured, throw an Exception.
            throw new Exception(curl_error($curl));
        }
        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            header("Location:http://localhost/errors/500");
            die();
        }

        curl_close($curl);
        return $result;
    }



    public function usercall($method, $url, $data)
    {
        $curl = curl_init();
        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        if (isset($_SESSION['STUACCESS'])) {
            $authorization = "Authorization: Bearer " . $_SESSION['STUACCESS'];
        } elseif (isset($_SESSION['TUTACCESS'])) {
            $authorization = "Authorization: Bearer " . $_SESSION['TUTACCESS'];
        } elseif (isset($_SESSION['AFFACCESS'])) {
            $authorization = "Authorization: Bearer " . $_SESSION['AFFACCESS'];
        } else {
            die(header('location:' . URLROOT . '/login'));
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            $authorization
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

        //Check for errors.
        if (curl_errno($curl)) {
            //If an error occured, throw an Exception.
            throw new Exception(curl_error($curl));
        }
        // EXECUTE:
        $result = curl_exec($curl);

        if (!$result) {
            header("Location:http://localhost/errors/500");
            die();
        }

        curl_close($curl);
        return $result;
    }

    public function checktoken($token)
    {
        $url = 'http://localhost/api.flexguru.tk/authentication/checktoken';

        $method = 'POST';

        $data = [
            'token' => $token
        ];

        $get_data = $this->call($method, $url, json_encode($data));

        $response = json_decode($get_data, true);

        if (isset($response['token'])) {
            if (isset($_COOKIE['ref'])) {
                unset($_COOKIE['ref']);
                setcookie('ref', $response['refreshToken'], 0, '/', null, null, true);
                if (session_status() != 2) {
                    session_start();
                }
                if (isset($_SESSION['STUACCESS'])) {
                    $_SESSION['STUACCESS'] = $response['token'];
                } else if (isset($_SESSION['TUTACCESS'])) {
                    $_SESSION['TUTACCESS'] = $response['token'];
                } else if (isset($_SESSION['AFFACCESS'])) {
                    $_SESSION['AFFACCESS'] = $response['token'];
                }
            }
            return $response['deny'];
        } else {
            return $response['deny'];
        }
    }
}
