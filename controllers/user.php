<?php

/**
 * user 
 * Model-View-Controller File
 * 
 * @package MVC
 * @subpackage Controller
 * @author Carlos Vallory <carlvallory@gmail.com>
 **/

class User extends Controller {
    
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }
    
    public function create(){
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = md5($_post['password']);
        $data['role'] = $_POST['role'];
        
        $this->model->create($data);
        
        header('location: ' . URL . 'user');
    }
    
    public function edit($id){
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit'); 
    }
    
    public function editSave($id){
        $data = array();
        $data['id'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = md5($_post['password']);
        $data['role'] = $_POST['role'];
        
        $this->model->editSave($data);
        
        header('location: ' . URL . 'user');
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'user');
    }
}

?>
