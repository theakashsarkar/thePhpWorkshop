<?php
class MySimpleClassEx1{
    public static $myStaticProperty = 'I am a static property.';
    public static function MyStaticMehtod(){
        return self::$myStaticProperty.'I am static method';
    }
    public static function myAnotherStaticMethod(){
        echo self::MyStaticMehtod();
    }
}
echo MySimpleClassEx1::myAnotherStaticMethod();