<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends Controller {
    
    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
    
        if($logged == false){
            Session::destroy();
            header('Location: ../login');
            exit;
        }
    }

    function index(){
        $this->view->render('dashboard/index');
    }
    
    function logOut(){
        Session::destroy();
    }
    
}

?>
