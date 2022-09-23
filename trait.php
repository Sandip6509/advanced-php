<?php

use demoClass as GlobalDemoClass;

 trait demoTrait{
    public function demoFunction1(){
        return "<br>This is demo function 1 in demo trait.<br>";
    }
 }

 trait anotherTrait{
    protected function anotherFunction(){
        return "<br>This is another function in another trait.<br>";
    }
 }
 class demoClass{
    use demoTrait,anotherTrait;
 }

 class demoClass2 {
    use demoTrait,anotherTrait;
 }
 class childClass extends demoClass{
    function getData(){
        echo $this->anotherFunction();
    }
 }

 $data = new childClass;
 echo $data->getData();
 $data1 = new demoClass2;
 echo $data1->demoFunction1();