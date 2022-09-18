<?php

class Car{
    public $color = 'red';
    public $carInfo = [
        'brand' => 'Skoda',
        'model' => 'Octavia',
        'class' => 'Sedan',
        'color' => 'green',
        'music_system' => 'JBL',
        'wheel'  => 'Alloy'
    ];   

    public $isAvailable = false;

    public function testFunction($data)
    {
        foreach ($data as $key => $value) {
            echo $key .' : '.$value .'<br>';
        }
    }
}

$obj = new Car();
// echo $obj->color;
echo $obj->testFunction([
    'brand' => 'Skoda',
    'model' => 'Octavia',
    'class' => 'Sedan',
    'color' => 'green',
    'music_system' => 'JBL',
    'wheel'  => 'Alloy'
]);
