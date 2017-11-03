<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.5
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

/*
index.php is no longer in the root of the project! It has been moved inside the public folder,
for better security and separation of components.
This means that you should configure your web server to "point" to your project's public folder,
and not to the project root. A better practice would be to configure a virtual host to point there.
*/

require_once '../autoload.php';
$libs = array();
$classs = array();
$configs = array();
/* Auto-Loader */
array_push($classs, 'Routes','Controller','Model','View','Modules');

/* Library */
array_push($classs, 'Hash','Database','Session','Auth');
//array_push($classs, 'Val', 'Form');
array_push($libs, 'functions');

/* Configs */
array_push($configs, 'config','paths','database','version');

loadClass($classs);
loadConfig($configs);
loadLib($libs);

require_once '../moduleloader.php';

$app = new Routes();


?>
