<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Model File
 */
class User
{
    private $db;

    public function __construct()
    {
        $this->api = new API;
    }

    public function tutorDP($data)
    {
        if ($response = $this->api->usercall('POST', APIURL . 'tutor/updatedp', json_encode($data))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                return $status;
            } elseif ($status == 302) {
                return $status;
            } else {
                $msg = json_decode($response)->response->result->message;
                $_SESSION['toastmsg'] = $msg;
                return $status;
            }
        }
    }
}
