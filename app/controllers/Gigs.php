<?php

class Gigs extends Controller
{
    private $gig;
    private $data = [
        'title' => '',
        'description' => '',
        'price' => '',
        'revisions' => '',
        'duration' => '',
        'subject' => '',
        'lesson' => '',
        'image' => '',
        'tutorid' => '',
    ];

    public function __construct()
    {
        session_start();
    }

    public function index()
    {
    }

    public function mygigs()
    {
        $this->gig = $this->model('Gig');
        $data = [
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        if ($result = $this->gig->getGigsByTutor($data)) {
            $this->view('tutor/mygigs', $result['result']);
        } else {
            $this->view('tutor/mygigs');
        }
    }

    public function delete($gigid)
    {
        $this->gig = $this->model('Gig');
        $data = [
            'gigid' => $gigid,
            'tuid' => $_SESSION['roledata']['tuid'],
        ];
        $result = $this->gig->deleteGig($data);
        if ($result) {
            header('Location: ' . URLROOT . '/tutor/mygigs');
        }
    }

    public function publish()
    {
        $data = $this->data;
        $validate = true;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //form process
            //Sanatize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'price' => intval(trim($_POST['price'])),
                'revisions' => trim($_POST['revisions']),
                'duration' => intval(trim($_POST['duration'])),
                'subject' => trim($_POST['subject']),
                'lesson' => trim($_POST['lesson']),
                'image' => trim($_POST['image']),
                'tutorid' => intval($_SESSION["roledata"]["tuid"]),
            ];
            if ($validate) {
                $this->gig = $this->model('Gig');
                $this->gig->create($data);
            }
        }

        $this->view('tutor/creategig');
    }
}
