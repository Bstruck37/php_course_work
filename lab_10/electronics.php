<?php
    require_once('product.php');

?>

<?php

    class Electronics extends Product
    {
        private $electronicsRecycle;

        //Getters & Setters for Tools
        public function setelectronicsRecycle($electronicsRecycle){
            $this->electronicsRecycle = $electronicsRecycle;
        }
    
        public function getelectronicsRecycle(){
            return $this->electronicsRecycle;
        }
        
        public function postTo(){
            return 'saveElectronics.php';
        }
        
        public function productType(){
            return 'Electronics';
        }
        
        public function renderForm()
        {
        $base_form = file_get_contents('forms/generic_form.html');
        $tool_specific = file_get_contents('forms/electronic_form.html');
        return $base_form . $tool_specific;
        }
    }
    
?>