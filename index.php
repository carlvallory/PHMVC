<?php

/*
 * https://github.com/carlvallory/PMVC
 * v 0.2
 * License: Mozilla Public License 2.0
 */

require_once 'autoload.php';
$libs = array();
$configs = array();
/* Auto-Loader */
array_push($libs, 'Routes','Controller','Model','View');

/* Library */
array_push($libs, 'Database','Session');

/* Configs */
array_push($configs, 'paths','database');

loadLib($libs);
loadConfig($configs);

$app = new Routes();

?>
