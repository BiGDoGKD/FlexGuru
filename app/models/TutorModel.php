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
    class TutorModel
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
            $this->api = new API;
        }

        public function getTutorData()
        {
            $response = $this->api->usercall("GET", APIURL . 'tutor/gettutor', null);
            $status = json_decode($response)->response->status;

            if ($status == 200) {
                return (array)json_decode($response)->response->result;
            } elseif ($status == 302) {
                include APPROOT . "/views/includes/modals/modal-relog.php";
            } else {
                return false;
            }
        }

        //parameters: verification file name, username, tutor data(array)
        public function register($vfilename, $username, $datatutor)
        {
            $response = $this->api->call("POST", APIURL . 'registration/tutregister', json_encode(array($vfilename, $username, $datatutor)));
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                return (array)json_decode($response)->response->result;
            } else {
                return false;
            }
        }
    }
