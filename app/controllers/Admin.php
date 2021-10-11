<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 18, 2021
 * FILE TYPE: Controller File
 * 
 */

class Admin extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('admin/admin');
    }
    public function accounts()
    {
        $this->view('admin/pages/accounts');
    }
    public function analytics()
    {
        $this->view('admin/pages/analytics');
    }
    public function create()
    {
        $this->view('admin/pages/create');
    }
    public function dashboard()
    {
        $this->view('admin/pages/dashboard');
    }
    public function messages()
    {
        $this->view('admin/pages/messages');
    }
    public function payments()
    {
        $this->view('admin/pages/payments');
    }
    public function reports()
    {
        $this->view('admin/pages/reports');
    }
    public function settings()
    {
        $this->view('admin/pages/settings');
    }
    public function verifications()
    {
        $this->view('admin/pages/verifications');
    }
}
