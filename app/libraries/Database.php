<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Library File
 * 
 */
class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $statement;
    private $dbHandler;
    private $error;

    // public function __construct()
    // {
    //     $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
    //     $options = array(
    //         PDO::ATTR_PERSISTENT => true,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //     );
    //     try {
    //         $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
    //     } catch (PDOException $e) {
    //         $this->error = $e->getMessage();
    //         echo $this->error;
    //     }
    // }

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
}
