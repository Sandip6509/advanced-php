<?php

class ParentClass{

    public $sirname = "Patel";

    function value()
    {
        echo $this->sirname;
    }

    function setName($name){
        echo $this->sirname = $name;
    }
}

class ChildClass extends ParentClass{

    function setNewName($name){
        echo $this->sirname = $name;
    }
}
$data = new ChildClass();
$data->setNewName('<hr> My name is Sandeep Kumar Patel <hr>');
echo $data->sirname;
// $data->value();
$data->setName('<hr> Sandeep sasasa Patel');