<?php
class Errors extends Controller
{
    public function __construct()
    {
    }

    public function index($errorid)
    {
        switch ($errorid) {
            case 404:
                $this->view('errors/404');
                break;
            case 500:
                $this->view('errors/500');
                break;
            default:
                $this->view('errors/index');
                break;
        }
    }
}
