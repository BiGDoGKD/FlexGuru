<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api-flexguru/app/vendor/autoload.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

class Authentication extends Controller
{
    public function __construct()
    {
        $auth = new Auth;
        $auth->private();
    }

    private function sendCredentials($username)
    {

        $login = $this->model("Login");
        $session = $this->model("Session");

        //Take userid
        $userid = $login->userid($username);

        //Generate JWT token properties
        $iat = time();
        $exp = time() + 30;
        $refreshexp = time() + 60 * 2;

        //Create Refresh Token Payload
        $refreshpayload = array(
            'iss' => 'localhost',
            'iat' => $iat,
            'userId' => $userid,
            'exp' => $refreshexp
        );

        //Create Refresh Token
        $refresh = JWT::encode($refreshpayload, REFRESH_KEY, 'HS512');

        //Create a Session
        if ($session->create($userid, $iat, $exp, $refresh)) {

            //Create Access Token Payload
            $payload = array(
                'iss' => 'localhost', //issuer
                // 'aud' => 'localhost', //audience
                'userId' => $userid,
                'iat' => $iat, //time JWT was issued
                'exp' => $exp //time JWT expires
            );

            //Create an Access Token
            $jwt = JWT::encode($payload, SECRET_KEY, 'HS512');

            $session->setAccess($userid, $jwt);

            $user = $this->model("User");
            $data = $user->getUser($userid);

            echo json_encode(array(
                'token' => $jwt,
                'expires' => $exp,
                'refreshToken' => $refresh,
                'refreshExpires' => $refreshexp,
                'data' => $data
            ));
        }
    }


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] = "POST") {
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

            $data = json_decode(file_get_contents("php://input"), true);
            $login = $this->model("Login");
            $session = $this->model("Session");

            if (isset($data['username']) && isset($data['password'])) {
                if ($login->auth($data)) {
                    $session = $this->model("Session");
                    if (!$session->sessionByusername($data['username'])) {
                        $this->sendCredentials($data['username']);
                    } else {
                        $refreshToken = $session->getRefreshToken($data['username']);
                        try {
                            $apayload = JWT::decode($refreshToken, REFRESH_KEY, ['HS512']);
                            echo json_encode(array('message' => 'duplicate logins not allowed', 'status' => false));
                        } catch (Exception $e) {
                            if ($e->getMessage() == 'Expired token') {
                                $session->destroyByUsername($data['username']);
                                $this->sendCredentials($data['username']);
                            } else {
                                echo json_encode(array('message' => 'Contact System Support', 'status' => false));
                            }
                        }
                    }
                } else {
                    echo json_encode(array('message' => 'Incorrect login credentials', 'status' => false));
                }
            } else {
                echo json_encode(array('message' => 'Invalid operation', 'status' => false));
            }
        }
    }

    public function logout()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

            $data = json_decode(file_get_contents("php://input"), true);
            $session = $this->model("Session");
        }
    }




    public function checktoken()
    {
        $session = $this->model("Session");

        //Check the Request Method
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
            $data = json_decode(file_get_contents("php://input"), true);
            $token = $data['token'];

            try {
                $payload = JWT::decode($token, REFRESH_KEY, ['HS512']);
                $accessToken = $session->Accesscheck($payload->userId, $token);
                $aToken = $accessToken[0]['accessToken'];
            } catch (Exception $e) {
                $session->destroy($token);
                echo json_encode(array('error' => $e->getMessage(), 'message' => 'Expired refresh token.', 'deny' => true));
                return false;
            }

            try {
                $apayload = JWT::decode($aToken, SECRET_KEY, ['HS512']);
                echo json_encode(array('message' => 'Valid token', 'deny' => false));
            } catch (Exception $e) {

                $userid = $payload->userId;

                //Generate JWT token properties
                $iat = time();
                $exp = time() + 30;
                $refreshexp = time() + 60 * 2;

                //Create Refresh Token Payload
                $refreshpayload = array(
                    'iss' => 'localhost',
                    'iat' => $iat,
                    'userId' => $userid,
                    'exp' => $refreshexp
                );

                //Create Refresh Token
                $refresh = JWT::encode($refreshpayload, REFRESH_KEY, 'HS512');

                //Create Access Token Payload
                $tokenpayload = array(
                    'iss' => 'localhost', //issuer
                    // 'aud' => 'localhost', //audience
                    'userId' => $userid,
                    'iat' => $iat, //time JWT was issued
                    'exp' => $exp //time JWT expires
                );

                //Create an Access Token
                $jwt = JWT::encode($tokenpayload, SECRET_KEY, 'HS512');

                $update_array = [
                    'created' => $iat,
                    'expires' => $exp,
                    'refreshToken' => $refresh,
                    'accessToken' => $jwt
                ];

                if ($session->update($userid, $update_array)) {
                    echo json_encode(array(
                        'token' => $jwt,
                        'expires' => $exp,
                        'refreshToken' => $refresh,
                        'refreshExpires' => $refreshexp,
                        'deny' => false
                    ));
                } else {
                    echo json_encode((array('message' => 'uncaught error', 'deny' => true)));
                }
            }
        }
    }
}
