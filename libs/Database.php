<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.4
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

    class Database extends PDO
    {
        public function __construct(){
            parent::__construct(DBTYPE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
        }
        
    }
?>