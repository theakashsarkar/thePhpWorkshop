<?php
class MySimpleClass{
    public static $myStaticProperty = 'I am a static property. ';
    public static function staticMathod(){
        return 'I am a static mathod';
    }
}
echo MySimpleClass::$myStaticProperty;
echo MySimpleClass::staticMathod();