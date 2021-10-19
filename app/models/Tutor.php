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
        }

        /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        */
        public function register($vfilename, $username, $datatutor)
        {
            $this->db->query("UPDATE `api`.`tutor` SET tutor.subjects = :subjects, tutor.workplace = :workplace, tutor.occupation = :occupation, tutor.qualification = :qualification, tutor.files = :file where tutor.userid = (select user.userid from `api`.`user` where  user.username = :username); ");
            //Bind values
            //user table username
            $this->db->bind(':username', $username);

            $this->db->bind(':subjects', $datatutor['subjects']);
            $this->db->bind(':workplace', $datatutor['workplace']);
            $this->db->bind(':occupation', $datatutor['occupation']);
            $this->db->bind(':qualification', $datatutor['qualification']);
            $this->db->bind(':file', $vfilename);

            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }
