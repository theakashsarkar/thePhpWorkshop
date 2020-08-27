<?php
class Vehicle{
    public    $make;
    public    $model;
    public    $color;
    protected $noOfWheels;
    private   $engineNumber;
    public static $counter = 0;

    function __construct($make = 'Default Make',$model = 'Default Model',$color = 'Default Color',$wheels = '4',$engin = 'XXXXXXXX')
    {
        $this->make         = $make;
        $this->model        = $model;
        $this->color        = $color;
        $this->noOfWheels   = $wheels;
        $this->engineNumber = $engin;
        self::$counter++;
    }
}