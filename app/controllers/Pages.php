<?php

class Pages extends Controller{

    public function __construct(){

    }

    public function index(){

        if (isLoggedIn()) {
            redirect('posts');
        }

        //forma 2
        $data = [
            'title' => 'Guestbook',
            'description' => 'A guestbook to share what´s your impresion in this site, register and login to write something, and see other opinions.'
        ];
        

        $this->view('pages/index', $data);

        // $this->view('pages/index', ['title' => 'Welcome']);//forma 1
        
    }

    public function about(){

        //forma 2
        $data = [
            'title' => 'About',
            'description' => 'A simple guestbook made with vanilla basic MVC framework with PHP, and Bootstrap 4.'
        ];
        
        $this->view('pages/about', $data);

        // $this->view('pages/index', ['title' => 'Welcome']);//forma 1
        
    }

}