<?php

/*
 * https://github.com/carlvallory/PMVC
 * v 0.2
 * License: Mozilla Public License 2.0
 */

class Controller {
    function __construct(){
        //echo 'Main controller<br>';
        $this->view = new View();
    
    }
    
    public function loadModel($name){
        
        $path = 'models/'.$name.'_model.php';
        
        if(file_exists($path)){
            require $path;
            $modelName = $name . '_Model';
            $this->model = new $modelName;
        }
    }
}

?>