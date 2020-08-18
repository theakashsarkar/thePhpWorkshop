<?php
class Person{
    public $name = "akash";
    function sayHello(){
        echo "Hello Akash {$this->name}";
    }

}
$p = new Person();
$p->sayHello();