<?php
class Session
{
    private $db;
    private $table = 'session';

    //Session properties
    private $id;
    private $username;
    private $created;
    private $expires;
    private $admin = 0;
    private $tutor = 0;
    private $affiliate = 0;
    private $student = 1;
    private $refToken;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function create($userid, $iat, $exp, $refreshToken)
    {
        $this->username = $this->db->findUserByid($userid)[0]['username'];
        $this->id = $userid;
        $this->created = date('Y-m-d H:i:s', $iat);
        $this->expires = date('Y-m-d H:i:s', $exp);
        switch ($this->db->findUserByid($userid)[0]['role']) {
            case 'tu':
                $this->tutor = 1;
                break;
            case 'af':
                $this->affiliate = 1;
                $this->student = 0;
                break;
            default:
                break;
        }
        $this->refToken = $refreshToken;

        //Create query
        $this->db->query("INSERT INTO " . $this->table . "(id,username,created,expires,admin,tutor,affiliate,student,refreshToken) VALUES(:id,:username,:created,:expires,:admin,:tutor,:affiliate,:student,:refToken)");

        //Bind data
        $this->db->bind(':id', $this->id);
        $this->db->bind(':username', $this->username);
        $this->db->bind(':created', $this->created);
        $this->db->bind(':expires', $this->expires);
        $this->db->bind(':admin', $this->admin);
        $this->db->bind(':tutor', $this->tutor);
        $this->db->bind(':affiliate', $this->affiliate);
        $this->db->bind(':student', $this->student);
        $this->db->bind(':refToken', $this->refToken);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function destroy($token)
    {
        //Create query
        $this->db->query("DELETE FROM " . $this->table . "
        WHERE refreshToken = :refreshToken");
        //Bind data
        $this->db->bind(':refreshToken', $token);
        $this->db->execute();
    }

    public function destroyByUsername($username)
    {
        //Create query
        $this->db->query("DELETE FROM " . $this->table . "
        WHERE username = :username");
        //Bind data
        $this->db->bind(':username', $username);
        $this->db->execute();
    }

    public function update($userid, $update_array)
    {
        //Create query
        $this->db->query("UPDATE " . $this->table . " SET created = :created, expires = :expires, refreshToken = :refreshToken, accessToken = :accessToken where id = :userid");
        //Bind data
        $this->db->bind(':userid', $userid);
        $this->created = date('Y-m-d H:i:s', $update_array['created']);
        $this->expires = date('Y-m-d H:i:s', $update_array['expires']);

        $this->db->bind(':created', $this->created);
        $this->db->bind(':expires', $this->expires);

        $this->db->bind(':refreshToken', $update_array['refreshToken']);
        $this->db->bind(':accessToken', $update_array['accessToken']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function sessionByusername($username)
    {
        //Create query
        $this->db->query("SELECT * FROM " . $this->table . " where username = :username");

        //Bind data
        $this->db->bind(':username', $username);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getRefreshToken($username)
    {
        //Create query
        $this->db->query("SELECT refreshToken from " . $this->table . " where username = :username");

        //Bind data
        $this->db->bind(':username', $username);

        $this->db->execute();

        return $this->db->resultSet()[0]['refreshToken'];
    }

    public function sessionByuserid($userid)
    {
        //Create query
        $this->db->query("SELECT * FROM " . $this->table . " where id = :userid");

        //Bind data
        $this->db->bind(':userid', $userid);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function setAccess($userid, $token)
    {
        //Create query
        $this->db->query("UPDATE " . $this->table . " SET accessToken = :accessToken where id = :userid");

        //Bind data
        $this->db->bind(':userid', $userid);
        $this->db->bind(':accessToken', $token);

        $this->db->execute();
    }

    public function Accesscheck($userid, $refreshToken)
    {
        //Create query
        $this->db->query("SELECT accessToken from " . $this->table . " where id = :userid and refreshToken = :refreshToken");

        //Bind data
        $this->db->bind(':userid', $userid);
        $this->db->bind(':refreshToken', $refreshToken);

        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return $this->db->resultSet();
        } else {
            return false;
        }
    }
}
