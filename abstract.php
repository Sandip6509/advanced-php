<?php
abstract class Components{

    public $car;

    function __construct($car)
    {
        echo $this->car = $car;        
    }
    public function brandName($brand)
    {
        return "<br>Brand is $brand.<br>";
    }
    public abstract function getEngine();
    public abstract function getChassis();
    protected abstract function getTransmission($type);
    protected abstract function getBody($color);
}

class Skoda extends Components{
    public function getEngine(){
        return "Engine is installed.<br>";
    }
    public function getChassis(){
        return "Chassis is installed.<br>";
    }
    protected function getTransmission($type){
        return "$type Transmission is installed.<br>";
    }
    protected function getBody($color){
        return "Engine is installed.<br>";
    }
    public function getData(){
        echo $this->brandName('Skoda');
        echo $this->getEngine();
        echo $this->getChassis();
        echo $this->getTransmission('Automatic');
        echo $this->getEngine('Red');
    }
}

$data = new Skoda('Octavia');
$data->getData();