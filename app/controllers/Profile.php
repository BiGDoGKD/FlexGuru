
<?php

class Profile extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('publicprofileview/index');
    }

    public function test()
    {
        $post = $this->model('Post');
        print_r($post->test());
    }
}
