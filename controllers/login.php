<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();    
    }
    
    function index() 
    {    
        // echo md5('admin'); die();
        $this->view->title = 'Login';
        
        // $this->view->render('header');
        $this->view->render('login/index');
        // $this->view->render('footer');
    }
    
    function run()
    {
        //print_r($_POST); die();
        // if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //     $arr = array('success'=>false, 'message'=>"Invalid Email");
        //     echo json_encode($arr, true);
        //     // header('Location: '.URL.'login/?success=false');
        //     die();
        // }
        $this->model->run();
    }
    

}