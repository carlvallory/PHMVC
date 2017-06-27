<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.5
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

class Routes 
{
    function __construct(){

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists($file)){
            require $file;
        }else{
            $this->error();
        }
        
        $controller = new $url[0];
        $controller->loadModel($url[0]);
        
        // calling methods area
        if(isset($url[2])){
            if(method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            }else{
                $this->error();
            }
        }else{
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                }else{
                    $this->error();
                }
            }else{
                $controller->index();
            }
        }
    }
    
    function error(){
        require 'controllers/error.php';
        $controller = new reError();
        $controller->index();
        return false;
    }

}

class Route
{
    /*
    * Builds a collection of internal URL's to loof for
    * @param type $uri
    */
    private $_uri = array();

    public function add($uri){
        $this->_uri[] = $uri;
    }
}

?>