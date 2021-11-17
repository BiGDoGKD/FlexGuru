<?php

require $_SERVER['DOCUMENT_ROOT'] . '/api-flexguru/app/vendor/autoload.php';

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

class Auth
{
    private $key = 'privatekey';

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_SERVER['CONTENT_TYPE'] !== 'application/json') {
                echo json_encode(array('message' => 'Request content type is not valids.'));
                exit;
            }
        }
    }

    //Basic auth for private area
    public function private()
    {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header("WWW-Authenticate: Basic realm=\"Private Area\"");
            header("HTTP/1.0 401 Unauthorized");
            echo json_encode(
                array('message' => 'Sorry, you need proper credentials')
            );
            exit;
        } else {
            if (($_SERVER['PHP_AUTH_USER'] == 'kesara' && $_SERVER['PHP_AUTH_PW'] == '12345')) {
            } else {
                header("WWW-Authenticate: Basic realm=\"Private Area\"");
                header("HTTP/1.0 401 Unauthorized");
                echo json_encode(array('message' => 'You have no permission to do this!'));
                exit;
            }
        }
    }

    //Authorized user
    public function authorized()
    {
        try {
            $token = $this->getBearerToken();
            $payload = JWT::decode($token, SECRET_KEY, ['HS512']);
            $db = new Database;
            $db->query("SELECT * FROM `api`.`session` WHERE id = :userid");
            $db->bind(':userid', $payload->userId);
            $db->execute();
            if ($db->rowCount() > 0) {
                return $db->resultSet();
            } else {
                return "This user is not found in our database.";
                exit;
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    /**
     * Get hearder Authorization
     * */
    public function getAuthorizationHeader()
    {
        $headers = null;
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }
        return $headers;
    }

    public function getBearerToken()
    {
        $headers = $this->getAuthorizationHeader();
        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }
        return false;
    }

    //Public auth
    public function public()
    {
        //Future improvements
    }
}
