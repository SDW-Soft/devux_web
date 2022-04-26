<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        
        $sth = $this->db->prepare("SELECT * FROM `auth` WHERE 
                `email` = :email AND `password` = :password");
        // print_r(Hash::create('sha256', 'password', HASH_PASSWORD_KEY)); die();
        $sth->execute(array(
            ':email' => $_POST['email'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        
        $data = $sth->fetch();
        
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            // Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['id']);
            $arr = array('success'=>true, 'message'=>"Successful login", 'url'=> URL.'dashboard');
            
        } else {
            $arr = array('success'=>false, 'message'=>"User not found", 'url'=>'');
        }
        echo json_encode($arr, true); die();
        
    }
    
}