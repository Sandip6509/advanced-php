<?php

class myClass
{
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";

    function value()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

class anotherClass extends myClass{
    function valueInDrivedClass()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$data = new anotherClass;
// echo $data->public;
// echo $data->protected;
// echo $data->private;
$data->valueInDrivedClass();
