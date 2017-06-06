<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.4
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

require_once 'autoload.php';
$libs = array();
$configs = array();
/* Auto-Loader */
array_push($libs, 'Routes','Controller','Model','View');

/* Library */
array_push($libs, 'Database','Session');

/* Configs */
array_push($configs, 'paths','database','version');

loadLib($libs);
loadConfig($configs);

$app = new Routes();

?>
