<?php

class A {
    final public function math($a,$b){
        echo 'Addition is :'.$a+$b.'<hr>';
    }
}

class B extends A{
    public function multiple($a,$b){
        echo 'Multiply is :'.$a*$b;
    }
}

$data = new B;
$data->math(10,55);
// $data1 = new B;
// $data1->math(12,85);

