<?php

class ProductController {
    private $view;
    
    public function __construct() {
        $this->view = new View();
    }//Construct

    public function getProducts() {
        require 'model/ProductModel.php';
        $model = new ProductModel();
        $result = $model->getProducts($_GET['type']);
        session_start();
        $this->view->show('productsView.php', $result);
    }//getProducts
    
}//ProductController
