<?php
class Person
{
    public $name;
    public $age;

    public function speak()
    {
        echo $this->name . " tem " . $this->age . " anos e acabou de falar";
    }
}
$rodrigo = new Person();
$rodrigo->name = "rodrigo";
$rodrigo->age = 18;
$rodrigo->speak();
