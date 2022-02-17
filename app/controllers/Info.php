<?php

class Info extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('index', $data);
    }

    public function about()
    {
        $this->view('static/about');
    }

    public function affiliates()
    {
        $this->view('static/affiliates');
    }

    public function faq()
    {
        $this->view('static/faq');
    }

    public function special_request()
    {
        $this->view('static/special-request');
    }

    public function contact()
    {
        $this->view('static/contact');
    }

    public function student()
    {
        $this->view('static/student');
    }

    public function team()
    {
        $this->view('static/team');
    }

    public function terms()
    {
        $this->view('static/terms');
    }

    public function tutor()
    {
        $this->view('static/tutor');
    }

    public function works()
    {
        $this->view('static/works');
    }
}
