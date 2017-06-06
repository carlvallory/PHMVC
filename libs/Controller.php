<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.4
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

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