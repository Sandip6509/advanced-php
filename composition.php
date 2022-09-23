<?php

final class A {
    public function math($a,$b){
        echo 'Addition is :'.$a+$b.'<hr>';
    }
}

class B {
    private $a;
    function __construct($a)
    {
        $this->a = $a;
        $this->a->math(150,158);        
    }
    public function multiple($a,$b){
        echo 'Multiply is :'.$a*$b;
    }
}

$data = new B(new A);