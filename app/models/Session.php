<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Oct, 12, 2021
 * FILE TYPE: Model File
 */
class Session
{
    private $db;
    private $api;

    public function __construct()
    {
        $this->api = new API;
        $this->db = new Database;
    }

    public function create($data)
    {

        $userData = [
            'username' => $data['username'],
            'password' => $data['password']
        ];
        print_r($data['password']);
        $get_data = $this->api->call('POST', APIURL . 'authentication/login', json_encode($userData));
        print_r($get_data);
        $res = json_decode($get_data, true);
        print_r($res);
        if (isset($res['status'])) {
            if ($res['status']) {
                return 'Contact System Administrator!';
            } else {
                return $res['message'];
            }
        } else if (isset($res['refreshToken'])) {
            setcookie('ref', $res['refreshToken'], 0, '/', null, null, true);
            switch ($res['data'][0]['role']) {
                case 'st':
                    //Start the session
                    session_start();
                    //Set session variables
                    $_SESSION['type'] = 'student';
                    $_SESSION['userdata'] = $res['data'][0];
                    $_SESSION['STUACCESS'] = $res['token'];
                    header('location:' . URLROOT . '/student');
                    break;
                case 'tu':
                    //Start the session
                    session_start();
                    //Set session variables
                    $_SESSION['type'] = 'tutor';
                    $_SESSION['userdata'] = $res['data'][0];
                    $_SESSION['TUTACCESS'] = $res['token'];
                    header('location:' . URLROOT . '/tutor');
                    break;
                case 'af':
                    //Start the session
                    session_start();
                    //Set session variables
                    $_SESSION['type'] = 'affiliate';
                    $_SESSION['userdata'] = $res['data'][0];
                    $_SESSION['AFFACCESS'] = $res['token'];
                    header('location:' . URLROOT . '/affiliatemarketer');
                    break;
                default:
                    header('location:' . URLROOT . '/forbidden');
            }
        }
    }

    public function destroy()
    {
        if (isset($_COOKIE['ref'])) {
            $data = [
                'refreshToken' => $_COOKIE['ref']
            ];
            session_start();
            session_destroy();
            $this->api->call('POST', APIURL . 'authentication/logout', json_encode($data));
            die(header('location:' . URLROOT . '/login'));
        }
    }
}
