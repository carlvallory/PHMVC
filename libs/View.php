<?php

/*
 * https://github.com/carlvallory/PMVC
 * v 0.2
 * License: Mozilla Public License 2.0
 */

class View {

    function __construct(){
        //echo 'this is the view<br>';
    }
    public function render($name, $noInclude = false){
        if($noInclude == true){
            require 'views/' . $name . '.php';
        }else{
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
            
}

?>