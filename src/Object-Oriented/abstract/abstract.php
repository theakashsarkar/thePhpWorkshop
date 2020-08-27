<?php
abstract class ClassName{
    abstract function methodName($param1);
    function anotherMehtod(){

    }
}
abstract class MyChildClass extends ClassName{
    abstract function methodName($param1, $param2)
    {
        //the implementation goes here
    }
}