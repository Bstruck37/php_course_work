<?php

    class Tools
    {
        private $toolsShipper;
        private $toolsWeight;
    
    
        //Getters & Setter for Tools
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

    }
    
?>