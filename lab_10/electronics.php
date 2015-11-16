<?php

    class Electronics
    {
        private $electronicsRecycle;
        private $electronicsNonRecycle;
    
    
        //Getters & Setter for Tools
        public function setelectronicsRecycle($electronicsRecycle){
            $this->electronicsRecycle = $electronicsRecycle;
        }
    
        public function getelectronicsRecycle(){
            return $this->electronicsRecycle;
        }
        
        public function setelectronicsRecycle($electronicsNonRecycle){
            $this->telectronicsNonRecycle = $electronicsNonRecycle;
        }
    
        public function getelectronicsNonRecycle(){
            return $this->electronicsNonRecycle;
        }

    }
    
?>