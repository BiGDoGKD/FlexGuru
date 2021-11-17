<?php

class Users extends Controller
{
    public function __construct()
    {
    }

    public function read()
    {
        $user = $this->model("User");
        $auth = new Auth;
        $session_array = $auth->authorized()[0];
        if (isset($session_array['student']) && $session_array['student']) {
            if ($result = $user->read()) {
                $users_arr = array();
                $users_arr['data'] = array();
                foreach ($result as $row) {
                    extract($row);
                    $user_item = array(
                        'userid' => $userid,
                        'username' => $username,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'email' => $email,
                        'phoneno' => $phoneno,
                        'city' => $city,
                        'role' => $role,
                        'photourl' => $photourl
                    );
                    //Push to data
                    array_push($users_arr['data'], $user_item);
                }
                echo json_encode($users_arr);
            }
        } else {
            echo json_encode(array('message' => 'you have no permission to take this action!'));
        }
    }
}
