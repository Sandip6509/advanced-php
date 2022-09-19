<?php
interface Components{

    function __construct($car);
    
    public function getEngine();
    public function getChassis();
    public function getTransmission($type);
    public function getBody($color);
}
interface SafetyFeatures {
    public function getAirbags();
    public function getBasicFeatures();
}

class Skoda implements Components,SafetyFeatures{
    protected $name;
    function __construct($name)
    {
        echo $this->name = $name;
    }
    public function getEngine(){
        return "Engine is installed.<br>";
    }
    public function getChassis(){
        return "Chassis is installed.<br>";
    }
    public function getTransmission($type){
        return "$type Transmission is installed.<br>";
    }
    public function getBody($color){
        return "Engine is installed.<br>";
    }

    private function favCar($name)
    {
        return "$name is my fav car. <br>";
    }

    public function getAirbags()
    {
        return "Airbags is installed.<br>";
    }
    public function getBasicFeatures()
    {
        return "All Basic features is installed.<br>";
    }
    public function getData(){
        echo $this->getEngine();
        echo $this->getChassis();
        echo $this->getTransmission('Automatic');
        echo $this->getEngine('Red');
        echo $this->favCar('Audi');
        echo $this->getAirbags();
        echo $this->getBasicFeatures();
    }
}

$data = new Skoda('Octavia');
$data->getData();