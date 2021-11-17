<?php

class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $statement;
    private $dbHandler;
    private $error;

    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Allows us to write queries
    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    //Execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    //Return an array
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArray()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    //Return a specific row as an object
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //Get's the row count
    public function rowCount()
    {
        return $this->statement->rowCount();
    }

    //Find user by email
    public function findUserByEmail($email)
    {
        //prepared statement
        $this->query("SELECT * FROM `user` WHERE `email` = :email");
        $this->bind(':email', $email);
        $this->execute();
        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by username
    public function findUserByUsername($username)
    {
        //prepared statement
        $this->query("SELECT * FROM `api`.`user` WHERE `username` = :username");
        $this->bind(':username', $username);
        $this->execute();
        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Find user by username
    public function findUserByid($userid)
    {
        //prepared statement
        $this->query("SELECT * FROM `api`.`user` WHERE `userid` = :userid");
        $this->bind(':userid', $userid);
        $this->execute();
        return $this->resultSet();
    }

    //Find user by mobile
    public function findUserByMobile($phoneno)
    {
        //prepared statement
        $this->query("SELECT * FROM `api`.`user` WHERE `phoneno` = :phoneno");
        $this->bind(':phoneno', $phoneno);
        $this->execute();
        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Exists ?
    public function exists($table, $column, $data)
    {
        //prepared statement
        $this->query("SELECT * FROM `api`." . $table . " WHERE " . $column . " = :data");
        $this->bind(':data', $data);
        $this->execute();
        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
