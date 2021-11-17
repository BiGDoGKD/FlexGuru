<?php
class Student extends Controller
{
    private $session;
    public function __construct()
    {
        $auth = new Auth;
        $this->session = $auth->authorized();
        print_r($this->session);
    }
    public function index()
    {
    }
}
