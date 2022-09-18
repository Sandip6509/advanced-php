<?php
class demoClass
{
    public $category = 'E-Learning';
    public $company = 'Khan Reserch Center';
    public function __construct($category,$company)
    {
        $this->category= $category;
        $this->company= $company;
        // echo "The best ".$this->category ." plateform ". $this->company;
    }

    public function __destruct()
    {
        echo "The best ".$this->category ." plateform ". $this->company;
    }

    public function testFunction()
    {
        echo "This is test function <br>";
        exit;
        echo "This is test function after exit";

    }
}

$obj = new demoClass('E-Learning','Khan Reserch Center');
$obj->testFunction();