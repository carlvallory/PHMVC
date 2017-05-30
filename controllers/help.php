<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Help extends Controller {

    function __construct() {
        parent::__construct();    
    }
    
    function index(){
        $this->view->render('help/index');
    }

    public function other($arg = false){
        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();
    }

}

?>