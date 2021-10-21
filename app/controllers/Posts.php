<?php
class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }