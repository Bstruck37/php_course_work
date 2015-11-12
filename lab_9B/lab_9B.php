<?php
 class bmiCalc
{
    private $weight;
    private $height;

    //Getters & Setter for weight & height
    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
    
    public function setHeight($height){
        $this->height = $height;
    }

    public function getHeight(){
        return $this->height;
    }

    public function createOutputMessage() {
        $weight =  $this->weight;
        $height =  $this->height;
     
      
        if (is_numeric($weight) && is_numeric($height)) 
            {
            $bmi = ($weight / ($height * $height)) * 703;
            
            if ($bmi <= 18.5) 
            {
                echo "Your BMI is " .round($bmi,1). " <br />"; 
                echo " Your are underweight. You should see your Doctor";
            } 
            else 
            {   
            
                if ($bmi >= 18.5 and $bmi <= 25) 
                {   
                    echo "Your BMI is " .round($bmi,1). " <br />"; 
                    echo " You are in the correct weight range"; 
                } 
                else 
                {
                    echo "Your BMI is " .round($bmi,1). " <br />"; 
                    echo " Your are overweight. You should see your Doctor";
                }
            }
            
        }
    }
}    
?>
