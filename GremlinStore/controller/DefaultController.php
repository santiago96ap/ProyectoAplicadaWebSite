<?php

class DefaultController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }//Construct
    
    public function index(){
        session_start();
        $this->view->show("indexView.php");
    }//index
    
    public function login(){
        $this->view->show("loginView.php");
    }//login
    
    public function register(){
        $this->view->show("registerView.php", 1);
    }//register
    
    public function mail(){
        session_start();
        $this->view->show("mailView.php");
    }//mail
    
    public function product(){
        session_start();
        $productName = $_GET['product'];
        $this->view->show("productView.php",$productName);
    }//product
    
    public function updateClient(){
        session_start();
        $this->view->show("registerView.php", 2);
    }//updateClient
    
}//DefaultController
