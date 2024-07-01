<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
       $this->name = ucfirst($name);
         $this->price = $price;
    }

    public function formatprice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$game1 = new Product( name: "doom eternal", price: 49);


$game2 = new Product( name: "doom 64x", price: 10);
$game2->name = "doom 64x";
$game2->price = 10;


echo $game1->formatprice()."<br>";
echo $game1->name."<br>";
echo $game1->price."<br>";

var_dump($game1);
var_dump($game2);