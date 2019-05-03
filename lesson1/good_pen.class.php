<?php
include "good.class.php";
class Pen extends Good {
    private $color;

    function __construct($name,$price,$category,$color){
        parent::__construct($name,$price,$category);
        $this->setColor($color);
    }

    function setColor($color){
        $this->color = $color;
    }

    function getColor(){
        return $this->color;
    }

    function show(){
        parent::show();
        echo "Цвет - ".$this->color."<br>";
    }
}