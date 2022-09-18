<?php
class Car{
    public $car = 'Octaiva';

    public function favCar($name)
    {
        $this->car = $name;
        echo "My favorite car is " .$this->car;
    }
}

$obj = new Car;
$obj->favCar('S90');