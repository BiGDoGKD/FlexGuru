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
            'Content-Type: application/json',
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
            die("Connection Failure");
        }

        curl_close($curl);
        return $result;
    }
}
