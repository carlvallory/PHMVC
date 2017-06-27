<?php

/**
 * Login_Model
 * Model-View-Controller File
 * 
 * @package MVC
 * @subpackage Model
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

class User_Model extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function userList(){
        return $this->db->select('SELECT id, login, role FROM users');
    }
    
    public function userSingleList($id){
        return $this->db->select('SELECT id, login, role FROM users WHERE id = :id', array(':id' => $id));
    }
    
    public function create($data){
        $this->db->insert('users', array(
            'login' => $data['login'], 
            'password' => Hash::create(HASH_ALGO, $data['password'], HASH_PASSWORD_KEY), 
            'role' => $data['role']
        ));
    }
    
    public function editSave($data){
        $this->db->update('users', array(
            'login' => $data['login'], 
            'password' => Hash::create(HASH_ALGO, $data['password'], HASH_PASSWORD_KEY), 
            'role' => $data['role']
        ), "`id` = {$data['id']}");
    }
    
    public function delete($id)
    {
        $result = $this->db->select('SELECT role FROM users WHERE id = :id', array(':id' => $id));
        
        if($result[0]['role'] == 'owner'){
            return false;
        }
        $sth = $this->db->delete('users', "id = '$id'");
    }
}

