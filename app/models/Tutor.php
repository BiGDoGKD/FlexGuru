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
    class Tutor
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
            $this->api = new API;
        }

        /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        */
        //parameters: verification file name, username, tutor data(array)
        public function register($vfilename, $username, $datatutor)
        {
            $this->api->call("POST", APIURL . 'tutor/register', json_encode(array($vfilename, $username, $datatutor)));
        }

        public function getVerifications()
        {
            $this->db->query("SELECT * FROM tutor");
            $result = $this->db->resultSet();
            return $result;
        }

        public function approve($data)
        {
            $this->db->query("UPDATE `api`.`tutor` SET `status` = :approve WHERE (`tuid` = :tuid);");
            $this->db->bind(':approve', 'verified');
            $this->db->bind(':tuid', $data);
            $this->db->execute();
        }
        public function decline($data)
        {
            $this->db->query("UPDATE `api`.`tutor` SET `status` = :declined WHERE (`tuid` = :tuid);");
            $this->db->bind(':declined', 'disabled');
            $this->db->bind(':tuid', $data);
            $this->db->execute();
        }
    }
