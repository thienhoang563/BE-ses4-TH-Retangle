<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 24/01/2019
 * Time: 14:54
 */

class Retangle
{
    public $width;
    public $height;

    public function __construct($width,$height){
    $this->width = $width;
    $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }
    public function getPerimeter(){
        return ($this->width + $this->height)*2;
    }

    public function display(){
        return "Retangle{" . "width= " . $this->width . ", height= " . $this->height . "}";
    }
}