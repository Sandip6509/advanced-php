<?php

function Int(int $a,int $b){
    return $a + $b;
}

echo Int(5,3).'<hr>';

function Float(float $a,float $b){
    return $a + $b;
}

echo Float(102.55,55.99).'<hr>';

function Boolean(bool $a,bool $b){
    return $a + $b;
}

echo Boolean(102.55,55.99).'<hr>';

function arrayFun(array $values){
    foreach ($values as $key => $value) {
        echo $value .'<br>';
    }
}

echo arrayFun(['sasasasa','sadsasa']).'<hr>'; 

class Test{
    function hello(){
        echo "Welcome to delhi <hr>";
    }
}

function call_hello(Test $abc){
    $abc->hello();
}
call_hello(new Test);
class abc{
    function test(){
        echo "abc is obj <hr>";
    }
}
function call_obj(object $abc){
    $abc->test();
}
call_obj(new abc); 

function str_fun(string $str){
    echo $str;
}

str_fun("Sandeep Patel");