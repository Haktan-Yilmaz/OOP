<?php

class Product
{
    public $name;
    public $price;

    public $currency;

    public function __construct($price, $name = "Charlés", $currency = "&euro;")
    {
       $this->name = ucfirst($name);
       $this->price = $price;
       $this->currency = $currency;
    }

    public function formatprice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$game1 = new Product( price: 49, currency: "$"); 


// $game2 = new Product( name: "doom 64x", price: 10);
// $game2->name = "doom 64x";
// $game2->price = 10;


// echo $game1->formatprice()."<br>";
echo $game1->name."<br>";
echo $game1->currency;
echo $game1->price;

var_dump($game1);
// var_dump($game2);