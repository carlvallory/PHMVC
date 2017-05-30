<?php

/*
 * https://github.com/carlvallory/PMVC
 * v 0.2
 * License: Mozilla Public License 2.0
 */

/* Auto-Loader */
require 'libs/Routes.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

/* Library */
require 'libs/Database.php';
require 'libs/Session.php';

/* Configs */
require 'config/paths.php';
require 'config/database.php';

$app = new Routes();

?>
