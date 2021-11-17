<?php
class Affiliate extends Controller
{
    public function __construct()
    {
        $auth = new Auth;
        $auth->private();
    }


}
