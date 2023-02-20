<?php 
require('advanced_calc.php');
class Calc extends advanced_calc{
    private $num1;
    private $num2;
    private $op;
    public function __construct($num1,$num2,$op){
        parent::__construct($num1,$num2,$op);
        $this->num1=$num1;
        $this->num2=$num2;
        $this->op=$op;
        switch($this->op)
        {
            case '+':
                echo $this->add();
            break;
            case '-':
                echo $this->sub();
            break;
            case '*':
                echo $this->mul();
            break;
            case '/':
                echo $this->divide();
            break;
        }
    
}
    function add(){
        return $this->num1+$this->num2;
    }
    function sub(){
        return $this->num1-$this->num2;
    }
    function mul(){
        return $this->num1*$this->num2;
    }
    function divide(){
        return $this->num1/$this->num2;
    }
}