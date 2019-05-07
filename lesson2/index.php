<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Урок 2</title>
</head>
<body>
<h1>УРОК 2</h1>
<?php
echo "<h3>1. Создать структуру классов ведения товарной номенклатуры.</h3>
<p></p>а) Есть абстрактный товар.<br>
б) Есть цифровой товар, штучный физический товар и товар на вес.<br>
в) У каждого есть метод подсчета финальной стоимости.<br>
г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость, у 
весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.<br>
д) Что можно вынести в абстрактный класс, наследование?</p>";

include "good.php";
$good1 = new onlineGood(3);
$good2 = new offlineGood(2);
$good3 = new weightGood(3, 4.5);
echo 'Цифровой товар: количество - '.$good1->getAmount().', сумма - '.$good1->totalPrice()."<br>".
    'Реальный товар: количество - '.$good2->getAmount().', сумма - '.$good2->totalPrice()."<br>".
    'Весовой товар: вес - '.$good3->getWeight().', сумма - '.$good3->totalPrice();

echo "<h3>2. *Реализовать паттерн Singleton при помощи traits.</h3>";

trait Single {

    private static $instance;

    private function __construct() {  }

    public static function getInstance() {
        if ( self::$instance === null ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

class Singleton {

    use Single;

}

$obj_1 = Singleton::getInstance();
$obj_2 = Singleton::getInstance();

var_dump($obj_1 === $obj_2);    // Same object

?>
</body>
</html>