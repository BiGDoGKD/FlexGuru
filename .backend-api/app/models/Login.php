<?php
class Login
{
    private $db;
    private $table = 'user';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function auth($data)
    {
        if ($this->db->exists($this->table, 'username', $data['username'])) {
            $this->db->query('SELECT * FROM `api`.`user` WHERE `user`.`username`=:username and `password`=:password');
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $this->db->execute();
            if ($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function userid($username)
    {
        $this->db->query('SELECT userid FROM `api`.`user` WHERE `user`.`username` = :username');
        $this->db->bind(':username', $username);
        $this->db->execute();
        $res = $this->db->resultSet();
        return $res[0]['userid'];
    }
}
