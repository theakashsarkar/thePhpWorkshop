<?php
class MySimpleclass{
    public static $myStaticProperty = 'perent static property';
    public static function myStaticMethod(){
        return self::$myStaticProperty.'static property';
    }
}
class MySubClass extends MySimpleClass{
    public static function printSomthing(){
        return parent::mystaticMethod();
    }
}
echo MySubClass::printSomthing();