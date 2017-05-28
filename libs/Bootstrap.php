<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bootstrap {

    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        $url = rtrim($url, '/');

        $url = explode('/', $url);
        
        if(empty($url[0])) {
            require 'controllers/index.php';
            $controller = NEW Index();
            return false;
        }

        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/error.php';
            $controller = new reError();
            return false;
            
        }
        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else {

            if (isset($url[1])) {
                $controller->{$url[1]}();
            }
        }
    }

}

?>