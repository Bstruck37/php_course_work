<?php
    require_once('tools.php');
    require_once('electronics.php');
?>

<?php

    class Product
    {
        protected $productTitle;
        protected $productDesc;
        protected $productPrice;
    
        //Getters & Setters for product
        public function setproductTitle($productTitle){
            $this->productTitle = $productTitle;
        }
    
        public function getproductTitle(){
            return $this->productTitle;
        }
        
        public function setproductDesc($productDesc){
            $this->productDesc = $productDesc;
        }
    
        public function getproductDesc(){
            return $this->productDesc;
        }
        
        public function setproductPrice($productPrice){
            $this->productPrice = $productPrice;
        }
    
        public function getproductPrice(){
            return $this->productPrice;
        }
        
        public function postTo(){
            return 'saveProduct.php';
        }
        
        public function productType(){
            return 'Generic Product';
        }
        
        public function renderForm(){
            return file_get_contents('forms/generic_form.html');
        }
    }
?>