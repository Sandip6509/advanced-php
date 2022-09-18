<?php
class A
{
    public function categoryName()
    {
        return "Category is Electronics";
    }
}
class B extends A
{
    public function YourName()
    {
        return "My fav brand is  Boat";
    }

    public function getHistory()
    {
        echo "Class A : " . $this->categoryName();
        echo "<hr> Class B : " . $this->YourName();
    }
}
class C extends B
{
    public function siblingName()
    {
        return "sibling fav brand is JBL";
    }

    public function getHistory()
    {
        echo "Class A : " . $this->categoryName();
        echo "<hr> Class C : " . $this->siblingName();
    }
}

$data = new C;
$data->getHistory();
$data1 = new B;
$data1->getHistory();