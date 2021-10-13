<?php

class student extends Controller
{
    public function __construct()
    {
    }

    public function studentprofileview()
    {
        $this->view('student/studentprofileview');
    }

}

?>