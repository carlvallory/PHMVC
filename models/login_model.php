<?php

class Login_Model extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function run(){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $sth = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(array(':login' => $login, ':password' => $password));
        //$data = $sth->fetchALL();
        $count = $sth->rowCount();
        if($count>0){
            //login
            Session::init();
            Session::set('loggedIn', true);
            header('Location: ../dashboard');
        }else{
            // show an error!
            header('Location: ../login');
        }
    }
}
