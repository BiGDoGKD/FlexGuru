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

class Settings
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function passwordchange($passwordchange){ 
            if ($response = $this->api->call('POST', APIURL . 'tutor/passwordchange', json_encode($passwordchange))) {
                $responseArray = (array)json_decode($response);
                $result = (array)$responseArray["response"];
                return $result;
            }
        }
        

    }
