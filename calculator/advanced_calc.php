<?php 
class advanced_calc{
    private $num1;
    private $num2;
    private $op;
    protected function __construct($num1,$num2,$op){
        
        $this->num1=$num1;
        $this->num2=$num2;
        $this->op=$op;
        switch($op)
        {
            case '%':
                echo $this->mod();
            break;
        }

    }
    protected function mod(){
        return $this->num1 % $this->num2;
    }

}
