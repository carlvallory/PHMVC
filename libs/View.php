<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class View {

    function __construct() {
        echo 'this is the view<br>';
    }
    public function render($name) {
        Require 'views/' . $name . '.php';
        
    }
            
}

?>