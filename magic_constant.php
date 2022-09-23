<?php

// __LINE__ Constants

use demoClass as GlobalDemoClass;

echo '__LINE__ <br>';
echo "Current Line number is: ". __LINE__;
echo "<hr>";

// __FILE__ Constants
echo '__FILE__ <br>';
echo "Current File: ". __FILE__;
echo "<hr>";

// __FUNCTION__ Constants
function test(){
    echo '__FUNCTION__ <br>';
    echo "Current Function: ". __FUNCTION__;
    echo "<hr>";
}
test();

// __CLASS__ Constants
class demoClass{
    public function getClassName()
    {
        echo "__CLASS__ <br>";
        echo "class is : " . __CLASS__;
        echo "<hr>";
    }

    public function getMethodName()
    {
        echo "__METHOD__ <br>";
        echo "METHOD is : " . __METHOD__;
        echo "<hr>";
    }
}

$obj = new demoClass;
$obj->getClassName();
$obj->getMethodName();
