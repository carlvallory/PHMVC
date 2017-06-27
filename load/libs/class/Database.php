<?php

/**
 * @name Php Model View Controller
 * @link https://github.com/carlvallory/PMVC Github
 * @version 0.0.5
 * @License https://github.com/carlvallory/PMVC/blob/master/LICENSE Mozilla Public License 2.0
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

class Database extends PDO
{
    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS){
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
    }
    
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare($sql);
        foreach($array as $key => $value){
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    public function insert($table, $data){
        ksort($data);
        $fieldNames = implode("`, `", array_keys($data));
        $fieldValues = ":".implode(", :", array_keys($data));
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        
        foreach ($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
    }
    
    public function update($table, $data, $where){
        ksort($data);
        
        $fieldDetails = null;
        foreach($data as $key => $value){
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
        foreach ($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
    }
    
    /**
     * delete
     * 
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return interger
     */
    public function delete($table, $where, $limit = 1){
        $sth = $this->prepare("DELETE FROM $table WHERE $where LIMIT $limit");
        $sth->execute();
        return $sth->rowCount();
    }
    
    public function activate($table, $where, $limit = 1){
        $sth = $this->prepare("UPDATE $table SET activate = 1 WHERE $where LIMIT $limit");
    }
    
    public function deactivate($table, $where, $limit =1){
        $sth = $this->prepare("UPDATE $table SET activate = 0 WHERE $where LIMIT $limit");
    }
}
?>