<?php
    require_once('electronics.php');
    require_once('tools.php');
?>


<?php

    class Product
    {
        private $productTitle;
        private $productDesc;
        private $productPrice;
    
        //Getters & Setter for product
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
            $this->pproductPrice = $productPrice;
        }
    
        public function getproductPrice(){
            return $this->productPrice;
        }
    }

    class Tools extends Product
    {
        public function Tools(){
            return 0;
        }
        
    }
   
    class Electronics extends Product
    {
        public function Electronics(){
            return 0;
        }    
    }
     
?>