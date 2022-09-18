<?php
class A{
    public function grandParent()
    {
        return "Grand Parent Father's age is 80.";
    }
}
class B extends A{
    public function father()
    {
        return "Father age is 50.";
    }
}
class C extends B{
    public function you()
    {
        return "Your age is 20.";
    }

    public function getHistory()
    {
        echo "Class A : ". $this->grandParent();
        echo "<hr> Class B : ". $this->father();
        echo "<hr> Class C : ". $this->you();
    }
}

$data = new C;
$data->getHistory();