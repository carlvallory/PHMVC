<?php

/*
 * https://github.com/carlvallory/PMVC
 * v 0.2
 * License: Mozilla Public License 2.0
 */

    class Database extends PDO
    {
        public function __construct(){
            parent::__construct(DBTYPE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
        }
        
    }
?>