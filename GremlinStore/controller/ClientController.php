<?php

class ClientController {
    private $view;
    
    public function __construct() {
        $this->view = new View();
    }//Construct
    
    public function registerClient(){
        require 'model/ClientModel.php';
        $model = new ClientModel();
        $result = $model->registerClient($_POST['name'], $_POST['cardNumber'], $_POST['email'], $_POST['password']);
        echo $result;
    }//registerClient   

    public function loginVerify() {
        require 'model/ClientModel.php';
        $model = new ClientModel();
        $result = $model->loginVerify($_POST['email'], $_POST['password']);
        echo $result;
    }//loginVerify
    
    public function successLogin(){
        session_start();
        $_SESSION['UserEmail'] = $_GET['email'];
        $this->view->show("indexView.php");
    }//successLogin
    
    public function logOut(){    
        session_start();
	session_destroy();
        $this->view->show("indexView.php");        
    }//logOut
    
    public function updateClientData(){
        require 'model/ClientModel.php';
        $model = new ClientModel();
        $result = $model->updateClientData($_POST['name'], $_POST['cardNumber'], $_POST['email'], $_POST['password']);
        echo $result;
    }//updateClientData
    
}//DefaultController