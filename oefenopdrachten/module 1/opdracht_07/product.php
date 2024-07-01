<?php

class Product
{
    public function __construct(public $price, public $name = "Charlés", public $currency = "&euro;")
    {
       $this->name = ucfirst($name);
    }

    public function formatprice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$game1 = new Product( price: 49, name:"doom eternal", currency: "$"); 


// $game2 = new Product( name: "doom 64x", price: 10);
// $game2->name = "doom 64x";
// $game2->price = 10;


// echo $game1->formatprice()."<br>";
echo $game1->name."<br>";
echo $game1->currency;
echo $game1->price;

var_dump($game1);
// var_dump($game2);