<?php

use childClass as GlobalChildClass;
use demoClass as GlobalDemoClass;

class demoClass{

    public static $name = "Sandeep";
    protected static function demoFunction(){
        echo "This is a demo function in demo class.";
    }

    function getData(){
        self::demoFunction();
    }
}

class childClass extends demoClass{
    public function getStaticData(){
        echo demoClass::$name;
        echo '<br>';
        parent::demoFunction();
    }
}

$obj =new childClass;
$obj->getData();
// echo demoClass::$name;