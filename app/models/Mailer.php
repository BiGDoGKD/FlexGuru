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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../app/PHPMailer/src/Exception.php';
require '../app/PHPMailer/src/PHPMailer.php';
require '../app/PHPMailer/src/SMTP.php';



class Mailer
{
    private $db;
    private $mail;
    public function __construct()
    {
        $this->db = new Database;
        $this->mail = new PHPMailer(true);
    }

    /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");

            $result = $this->db->resultSet();

            return $result;
        }
        */

    public function vmail($code, $email)
    {

        try {
            //Sender
            $this->mail->isSMTP();
            $this->mail->Host = 'smtp.gmail.com';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = 'm10644887@gmail.com';
            $this->mail->Password = 'Mirando57@#';
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port = 587;


            //Reciever & Sender
            $this->mail->setFrom('kdkarannagoda@gmail.com', 'Mailer');
            $this->mail->addAddress($email);


            $this->mail->isHTML(true);
            //Content
            $this->mail->Subject = "Flexguru Email Verification.";
            $this->mail->Body = "<p>Your verification code is : " . $code . "</p>";

            if (!$this->mail->send()) {
                echo "Could not be sent. Mailer Error:{$this->mail->ErrorInfo}";
            } else {
                echo "Message has been sent.";
            }
        } catch (Exception $e) {
            echo "Could not be sent. Mailer Error:{$this->mail->ErrorInfo}";
        }
    }
}
