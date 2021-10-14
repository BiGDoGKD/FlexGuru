<?php

class student extends Controller
{
    public function __construct()
    {
    }

    public function profile()
    {
        $this->view('student/studentprofileview');
    }

}

?>