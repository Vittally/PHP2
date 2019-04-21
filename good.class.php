<?php
class Good{
    private $name;
    private $price;
    private $category;

    function __construct($name,$price,$category){
        $this->setName($name);
        $this->setPrice($price);
        $this->setCategory($category);
    }

    function setName($name){
        $this->name = $name;
    }

    function setPrice($price){
        $this->price = $price;
    }

    function setCategory($category){
        $this->category = $category;
    }

    function getName(){
        return $this->name;
    }

    function getPrice(){
        return $this->price;
    }

    function getCategory(){
        return $this->category;
    }

    function show(){
        echo "<hr>Товар - ".$this->name."<br> Категория - ".$this->category."<br> Цена - ".$this->price."$<br>";
    }

}