<?php

/**
 * dashboard 
 * Model-View-Controller File
 * 
 * @package MVC
 * @subpackage Controller
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

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
        $this->view->js = array('dashboard/js/default.js');
    }

    function index(){
        $this->view->render('dashboard/index');
    }
    
    function logOut(){
        Session::destroy();
        header('location: '. baseURL .'login');
        exit;
    }
    
    function xhrInsert(){
        $this->model->xhrInsert();
    }
    
    function xhrGetListings(){
        $this->model->xhrGetListings();
    }
    
    function xhrDeleteListing(){
        $this->model->xhrDeleteListing();
    }
    
}

?>
