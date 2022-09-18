<?php
class myClass
{
    // construct must be public
    function __construct()
    {
        echo "This is constructor.<hr>";
    }

    public function publicFunction()
    {
        echo "This is public function.<hr>";
    }

    protected function protectedFunction()
    {
        echo "This is protected function.<hr>";
    }

    private function privateFunction()
    {
        echo "This is private function.<hr>";
    }

    public function baseFunction()
    {
        $this->publicFunction();
        $this->protectedFunction();
        $this->privateFunction();
    }
}

class anotherClass extends myClass
{
    public function callingFunction()
    {
        $this->publicFunction();
        $this->protectedFunction();
    }
}

$data = new anotherClass;
$data->baseFunction();exit;
$data->callingFunction();exit;
$data->publicFunction();
