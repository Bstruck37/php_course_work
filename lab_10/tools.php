<?php
    require_once('product.php');

?>


<?php

    class Tools extends Product
    {
        private $toolsShipper;
        private $toolsWeight;
        
        //Getters & Setters for Tools
        public function settoolsShipper($toolsShipper){
            $this->toolsShipper = $toolsShipper;
        }
    
        public function gettoolsShipper(){
            return $this->toolsShipper;
        }
        
        public function settoolsWeight($toolsWeight){
            $this->toolsWeight = $toolsWeight;
        }
    
        public function gettoolsWeight(){
            return $this->toolsWeight;
        }
        
        public function postTo(){
            return 'saveTools.php';
        }
        
        public function productType(){
            return 'Tools';
        }
        
        public function renderForm()
        {
        $base_form = file_get_contents('forms/generic_form.html');
        $tool_specific = file_get_contents('forms/tool_form.html');
        return $base_form . $tool_specific;
        }

    }
    
?>