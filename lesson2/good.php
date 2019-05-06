<?php
abstract class Good {
    abstract function totalPrice();
}

class onlineGood extends Good {
    const PRICE = 10;
    private $amount;

    function __construct($amount) {
        self::setAmount($amount);
    }

    function getPrice() {
        return PRICE;
    }
    function getAmount() {
        return $this->amount;
    }
    function setAmount($amount) {
        $this->amount = $amount;
    }

    function totalPrice() {
        return self::PRICE * $this->amount;
    }
}

class offlineGood extends onlineGood {
    function getPrice() {
        return parent::PRICE * 2;
    }
    function totalPrice() {
        return parent::PRICE * 2 * parent::getAmount();
    }
}

class weightGood extends Good {
    private $price;
    private $weight;

    function __construct($price, $weight) {
        self::setPrice($price);
        self::setweight($weight);
    }

    function getPrice() {
        return $this->price;
    }
    function getWeight() {
        return $this->weight;
    }
    function setPrice($price) {
        $this->price = $price;
    }
    function setWeight($weight) {
        $this->weight = $weight;
    }
    function totalPrice(){
        return $this->price * $this->weight;
    }
}