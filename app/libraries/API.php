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
        // print_r($method."".$url."".$data);

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
            die("Connection Failures");
        }

        curl_close($curl);
        return $result;
    }

    public function checktoken($token)
    {
        $url = 'https://api.flexguru.tk/authentication/checktoken';

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
