<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.4
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

function autoload($fileName, $fileDir) {
    if (file_exists($fileDir.DIRECTORY_SEPARATOR.$fileName . '.php')){
        require_once $fileDir.DIRECTORY_SEPARATOR.$fileName . '.php';
        return true;
    }else{
        return false;
    }
}

function canClassBeAutloaded($className){
      return class_exists($className);
}

function loadLib($className, $classDir = 'libs'){
    foreach($className as $class){
        if(!canClassBeAutloaded($class)){
            autoload($class, $classDir);
        }else{
            //none
        }
    }
}

function loadConfig($configName, $configDir = 'config'){
    foreach($configName as $file){
        autoload($file, $configDir);
    }
}

?>