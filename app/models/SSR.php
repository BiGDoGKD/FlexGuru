<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Oct, 12, 2021
 * FILE TYPE: Model File
 */
class SSR
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function request($data)
    {
        $this->db->query('INSERT INTO `api`.`ssrmessage` (`title`, `description`, `subject`, `category`, `days`, `budget`,`date`) VALUES (:title, :description, :subject, :category, :days, :budget,:date)');

        //Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':days', $data['days']);
        $this->db->bind(':budget', $data['budget']);
        $this->db->bind(':date', date("Y-m-d"));

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getRequests()
    {
        $this->db->query("SELECT * FROM ssrmessage");
        $result = $this->db->resultSet();
        return $result;
    }
}
