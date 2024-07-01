 <?php

require_once 'movie.php';

$movie1 = new Movie(name:4, ['thriller', 'sf'], seen:254); 

echo $movie1->getName();

var_dump($movie1);